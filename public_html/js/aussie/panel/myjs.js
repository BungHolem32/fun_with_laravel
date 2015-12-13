/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
//   table_message();
   var check = setInterval(function(){table_message();},20000); // checks every 20 sec
   var clock = setInterval(function(){update_clock();},500); // checks every 0.5 sec
   $("#runningPositionsTable th:nth-child(7)").click(function(){
       var r = new Replace(2);
   });

	var callType = 'Call';
	$('.btn-mutli-form').on('click', function(){
		callType = $(this).data('type')
	});

//  before the batch trade form is sent to fill positions we confirm the trade save it in a database and display it in the trade history section
   $("button.auto-bot-btn").click(function(){
      var form = document.getElementById("batch_trades_form");
      var tradeType = $(this).val();
      var newUserFlag = $("#batch_trades_form [name='newUsers']").prop('checked') ? 'true' : 'false';
      var selected = $("#batch_trades_form option:selected"); // eq(0):product, eq(1):broker, eq(2):asset, eq(3):trade
      if(confirm( getConfirmText(newUserFlag,selected))) {
          $("body, select, button, label").css('cursor','wait');
		  if(exchangeFor(selected.eq(1).val())=='so') {
			  if ( ! MultiBuy.isMulti()) {
				  // add trade to database
				  addSoTrade(newUserFlag,selected, callType);
			  }
		  }
		  else {
			  addFtTrade(newUserFlag,selected);
		  }

		  return MultiBuy.send(callType);

          }
      else
         return false;
   });
   
   $(".language").click(function(){
        buttonText = ($("#selectedLang").text()).trim();
        newText = ($(this).text()).trim();
        console.log(newText);
//        if(buttonText != newText) {
            $("#selectedLang").html(newText+" <span class='caret'></span>");
            $.post('changeLanguage',{'newLang':$(this).attr('ref')},function(){
                 window.location.reload(true);
            });
//       }
   });
   
});

function update_clock(){
   //var dt = new Date(); //update clock
   var now = new Date(); 
   var dt = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(),  now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds());
   $("[rv-text='date | fulldate']").html((dt.toLocaleString()));

}

function table_message(){
   var empty = true;


   $(".table_warn_msg").remove();
   $("#runningPositionsTable tbody td:nth-child(7)").each(function(){
       if(($(this).text()).toLowerCase()== 'open')
           empty = false;
   }) ;
   if(empty)
      $("#runningPositionsTable").after("<p  class='alert alert-warning table_warn_msg'>There are no open positions</p>") ;

   var empty = true;
    $("#positionsHistoryTable tbody td:nth-child(7)").each(function(){
       if(($(this).text()).toLowerCase()!= 'open')
           empty = false;
   }) ;
   if(empty)
      $("#positionsHistoryTable").after("<p  class='alert alert-warning table_warn_msg'>There is no history of positions</p>") ;

	if (window.updateOpenPosition) updateOpenPosition();
}

function getConfirmText(newUserFlag,selected){
    var msg = "do you want to send the following order : \n";
//    var newUserFlag = $("#batch_trades_form [name='newUsers']").prop('checked') ? 'true' : 'false';
//    var selected = $("#batch_trades_form option:selected");

    msg += "Only new users: " + newUserFlag + "\n";
    msg += "Product Name: " + selected.eq(0).text() + "\n";
    msg += "Broker Name " + selected.eq(1).text() + "\n";
    msg += "Asset " + selected.eq(2).text() + "\n";
    msg += "Trade type " + selected.eq(3).text() + "\n";
    return msg;
}

function addSoTrade(newUserFlag,selected,tradeType){
    var times = (selected.eq(3).text()).split(' - ');
    $.ajax({
		async:false,
		url:'./admin/insert_trade',
		type:'POST',
		data:{'new_users_flag':newUserFlag,
		   'product_name':selected.eq(0).val(),
		   'broker_name':selected.eq(1).val(),
		   'trade_type': tradeType.toUpperCase(),
		   'expiry_date':times[1],
		   'so_asset_id':selected.eq(2).val(),
		   'so_trade_id':selected.eq(3).val(),
		   'no_trades_only':newUserFlag
	},
                 success:function(id){$("#batch_trades_form").append("<input name='batch_trade_id' type='hidden' value="+id+" />");}
             });
//    $.ajax();
//    $.post(,{'new_users_flag':newUserFlag,'product_name':selected.eq(0).val(),'broker_name':selected.eq(1).val(),'so_asset_id':selected.eq(2).val(),'so_trade_id':selected.eq(3).val()},function(id){

}

function exchangeFor(newUserFlag,selected){
    return 'so' ;
}