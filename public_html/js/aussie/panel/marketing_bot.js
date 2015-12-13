
    var baseRoute = "marketing/"; //'http://binarybonus.net/marketing/' to use second value when using server
    var otable;
    var tradeAjax;
$(document).ready(function(){
    if($("#positionsHistoryTable").attr('tid') != undefined && $("#positionsHistoryTable").attr('tid') > 0 ){
        setTimeout(function(){cronUpdateTable();},1*1000);
        var MinuteTimer = setInterval(function(){cronUpdateTable();},61*1000);
    }
    
    $("#runningPositionsTable tbody tr").filter(function() { return $(this).css("display") != "none" }).each(function() {
               if($(this).attr('id') === undefined){
                   $(this).remove();
               }});

 //   var check;
//    var intervalSel = parseInt($("#assets_form [name='interval']").val());
    

//    getTrades(0);
    $("#positionsHistoryTable").after("<form id='trader_param' method='post' action=''/>\n\
                                       <input id=\"maxpid\" type='hidden' name='maxpid'  />\n\
                                       <input id=\"tid\" type='hidden' name='tid'  />\n\
                                       <input id=\"currency\" type='hidden' name='currency' />\n\
                                       </form>") 
    var tmp = $("#runningPositionsTable").attr('maxpid');
    $("#maxpid").val(tmp) ;
    $("#tid").val($("#positionsHistoryTable").attr('tid')) ;
    
   

 });

    
 /*   
      function autoTrading(){
          var tid = $("#assets_form [name='trader_id']").val();
          $.post(baseRoute+'autotrading',{'trader_id':tid},function(newPosition){
              if(newPosition) {
                  var demoPosition = jQuery.parseJSON( newPosition );
                  insertRow(demoPosition,'top');
                  $("#trade_table tbody tr:first-child").children().addClass("warning");
              }
          });
      }
 */     
    
    function getTrades(fromPid){
         if(tradeAjax !== undefined && tradeAjax != ""){  // trying to abort hanging processes to prevent multiple gettrades requests
             tradeAjax.abort();
             tradeAjax="";
         }
         tradeAjax = $.post(baseRoute+'getTrades',{'trader_id':data.user.DemoTraderId,'pid':fromPid},function(positions){
         if(positions){
             var demoPosition = jQuery.parseJSON(positions); 
             if(getTrades.count === undefined){
                 if($("#tradeTotal").attr('value')=== undefined)
                   getTrades.count = $("#tradeTotal").text();
                 else
                   getTrades.count = $("#tradeTotal").val();  
         }
             for(var indx=0; indx < demoPosition.length; indx++){
                 getTrades.count++;
                 if(demoPosition[indx].Status=='open')
                    insertRowOpen(demoPosition[indx]);
                 else
                    insertRowHistory(demoPosition[indx]);
                }
             if($("#tradeTotal").attr('value')=== undefined){
               $("#tradeTotal").html(getTrades.count);
           }
             else
                $("#tradeTotal").val(getTrades.count); 
//         alert($("#trade_table tbody td:nth-child(8)").length);
            
         
            $("#trade_table tbody tr td:nth-child(0)").each(function(){
                $(this).parent().addClass($(this.text()));
            });
            
            $("#trade_table tbody td.Win").each(function(){
                $(this).siblings().addClass('success');
                $(this).addClass('success');
            });
            $("#trade_table tbody td.Lose").each(function(){
                $(this).siblings().addClass('danger');
                $(this).addClass('danger');
            });
            $("#trade_table tbody td.open").each(function(){
                $(this).siblings().addClass('warning');
                $(this).addClass('warning');
            });
            $("#trade_table tbody td.Tie").each(function(){
                $(this).siblings().addClass('primary');
                $(this).addClass('primary');
            });

        }
     });
    }

    function insertRowHistory(demoPosition,tradeAmount){
           
            var rvClass='';
            var isCall = (demoPosition.IsCall) ? 'Call' : 'Put';
            var pid = parseInt(demoPosition.Id);
           
            demoPosition.Payout = (demoPosition.Payout *  tradeAmount / demoPosition.Amount).toFixed(2) ;
            
//            if($("#maxpid").val()==='undefined')
//                $("#maxpid").val(0);
            if(demoPosition.Status=='Win'){
                addWin();
                rvClass='success';
                demoPosition.Status = 'Won'
            }
            if(demoPosition.Status=='Lose')
            {
                addLoss();
                rvClass='danger';
                demoPosition.Status = 'Lost'
            }
            if(demoPosition.Status=='Tie')
            {
                addTie();
                rvClass='priority';
            }
            if( pid>parseInt($("#maxpid").val()))
                $("#maxpid").val(pid);
            if(typeof(demoPosition.BuyRate)=='undefined')
                  demoPosition.BuyRate='&nbsp;';
            if(typeof(demoPosition.ExpiryRate)=='undefined')
                  demoPosition.ExpiryRate='&nbsp;'; 
              
            if($("#balanceTotal").attr('value')=== undefined) {
                var bal = $("#balanceTotal").text()*1;
                bal =  bal + 1*demoPosition.Payout - parseInt(tradeAmount);
               $("#balanceTotal").text(bal);
           }
           else {
            var bal = $("#balanceTotal").val()*1;
            bal =  bal + 1*demoPosition.Payout - parseInt(tradeAmount);
               $("#balanceTotal").val(bal);
           }
           //var csign = $("#currency").val();  it seems that the javascript elements aren't present when rivets kicks in
           var csign = $("[rv-text='currencySign']").eq(0).text();
           var hasProfit = $("#positionsHistoryTable  th").length == 9;
           if(hasProfit){
//                 $("#positionsHistoryTable tbody").prepend("<tr id='pid"+demoPosition.Id+"' class='"+rvClass+"'ref='aid"+demoPosition.AssetId+"'>\n\
//                                                    <td>"+demoPosition.assetName+"</td>\n\
//                                                    <td>"+isCall+"</td>\n\
//                                                    <td>"+csign+tradeAmount+"</td>\n\
//                                                    <td>"+demoPosition.BuyRate+"</td>\n\
//                                                    <td>"+demoPosition.ExpiryRate+"</td>\n\
//                                                    <td>"+csign+demoPosition.Payout+"</td>\n\
//                                                    <td>"+csign+(demoPosition.Payout-tradeAmount)+"</td>\n\
//                                                    <td>"+demoPosition.ExpiryDate+"</td>\n\
//                                                    <td><span class='label label-"+rvClass+"'>"+demoPosition.Status+"</span></td>\n\
//                                                    </tr>");
           var profit = Math.max((demoPosition.Payout-tradeAmount),0);
           console.log(demoPosition.Payout-tradeAmount);
           $("#positionsHistoryTable").dataTable().fnAddData(
               [
                  demoPosition.assetName,
                  isCall,
                  csign+tradeAmount,
                  demoPosition.BuyRate,
                  demoPosition.ExpiryRate,
                  csign+demoPosition.Payout,
                  csign+ profit.toFixed(2),
                  demoPosition.ExpiryDate,
                  "<span class='label label-"+rvClass+"'>"+demoPosition.Status+"</span>"
               ],true
           );
           $("#positionsHistoryTable tbody tr:first").attr('id','pid'+demoPosition.Id);
           $("#positionsHistoryTable tbody tr:first").addClass(rvClass);
           $("#positionsHistoryTable tbody tr:first").attr('ref','aid'+demoPosition.AssetId);
           $("#positionsHistoryTable").dataTable().fnDraw();
           }
           else {
//                $("#positionsHistoryTable tbody").prepend("<tr id='pid"+demoPosition.Id+"' class='"+rvClass+"'ref='aid"+demoPosition.AssetId+"'>\n\
//                                                    <td>"+demoPosition.assetName+"</td>\n\
//                                                    <td>"+isCall+"</td>\n\
//                                                    <td>"+csign+demoPosition.Amount+"</td>\n\
//                                                    <td>"+demoPosition.BuyRate+"</td>\n\
//                                                    <td>"+demoPosition.ExpiryRate+"</td>\n\
//                                                    <td>"+csign+demoPosition.Payout+"</td>\n\
//                                                    <td>"+demoPosition.ExpiryDate+"</td>\n\
//                                                    <td><span class='label label-"+rvClass+"'>"+demoPosition.Status+"</span></td>\n\
//                                                    </tr>");
         $("#positionsHistoryTable").dataTable().fnAddData(
               [
                  demoPosition.assetName,
                  isCall,
                  csign+tradeAmount,
                  demoPosition.BuyRate,
                  demoPosition.ExpiryRate,
                  csign+demoPosition.Payout,
                  demoPosition.ExpiryDate,
                  "<span class='label label-"+rvClass+"'>"+demoPosition.Status+"</span>"
               ],true
           );
           $("#positionsHistoryTable tbody tr:first").attr('id','pid'+demoPosition.Id);
           $("#positionsHistoryTable tbody tr:first").addClass(rvClass);
           $("#positionsHistoryTable tbody tr:first").attr('ref','aid'+demoPosition.AssetId);
           $("#positionsHistoryTable").dataTable().fnDraw();
        } 
      }
      
      function insertRowOpen(demoPosition){
            var csign = $("[rv-text='currencySign']").eq(0).text();
            var isCall = (demoPosition.IsCall) ? 'Call' : 'Put';
            var pid = parseInt(demoPosition.Id);
//            if($("#maxpid").val()=== undefined){
//                $("#maxpid").val('1');
//                console.log($("#maxpid").val());
//            }
            if( pid>parseInt($("#maxpid").val())){
                $("#maxpid").val(pid);
            }
            if(typeof(demoPosition.BuyRate)=='undefined')
                  demoPosition.BuyRate='&nbsp;';
            if(typeof(demoPosition.ExpiryRate)=='undefined')
                  demoPosition.ExpiryRate='&nbsp;'; 
              
            
                $("#runningPositionsTable tbody").prepend("<tr id='pid"+demoPosition.Id+"' ref='aid"+demoPosition.AssetId+"'>\n\
                                                    <td>"+demoPosition.assetName+"</td>\n\
                                                    <td>"+isCall+"</td>\n\
                                                    <td>"+csign+data.user.Amount+"</td>\n\
                                                    <td>"+demoPosition.BuyRate+"</td>\n\
                                                    <td name='"+demoPosition.AssetId+"'>"+demoPosition.ExpiryRate+"</td>\n\
                                                    <td>"+demoPosition.ExpiryDate+"</td>\n\
                                                    <td><span class='label label-warning'>"+demoPosition.Status+"</span></td>\n\
                                                    </tr>");
            
      }
      
      
      function addWin(){
          if($("#wonTotal").attr('value')=== undefined) {
              if(typeof(addWin.total) === 'undefined')
                  addWin.total=$("#wonTotal").text()*1;
               $("#wonTotal").text(++addWin.total);
          }
          else
          {
              if(typeof(addWin.total) === 'undefined')
                  addWin.total=$("#wonTotal").val()*1;
               $("#wonTotal").val(++addWin.total);
          }
      }
      function addLoss(){
          if($("#lostTotal").attr('value')=== undefined) {
          if(typeof(addLoss.total) === 'undefined')
              addLoss.total=$("#lostTotal").text()*1;
           $("#lostTotal").text(++addLoss.total);
      }
      else{
          if(typeof(addLoss.total) === 'undefined')
              addLoss.total=$("#lostTotal").val()*1;
           $("#lostTotal").val(++addLoss.total);
      }
  } 
      function addTie(){
           if(typeof(addTie.total) === 'undefined')
              addTie.total=0;
          $("#accountTies").text(++addTie.total);
      }
      
           
      
      
    
    function cronUpdateTable(){
        console.log('tick');
        var now = new Date();
        if(now.getUTCMinutes()%2==0  || typeof cronUpdateTable.firstLoop === 'undefined') {       // activate on the hour  x:02 , x:17 , x:32 , x:47
            cronUpdateTable.firstLoop = false;
             if($("#maxpid").val()=== 'undefined' || $("#maxpid").val() == ''){
                $("#maxpid").val('1');
            }
           $("#runningPositionsTable tbody tr").filter(function() { return $(this).css("display") != "none" }).each(function() {
               if($(this).attr('id') === undefined){
                   $(this).remove();
               }
                else {
                   var openElem = $(this);
                   var pidStr = $(this).attr('id');
                   var pid = pidStr.substr(3,pidStr.length-3);
                   var tradeAmount = openElem.children().eq(2).text().substr(1);
                   $.post(baseRoute+'checkPosStatus',{'pid':pid},function(newPos){
                        if(newPos){
                           var udPos = jQuery.parseJSON(newPos);
    //                       openElem.children().eq(4).html(udPos.ExpiryRate) ;
    //                       openElem.html(udPos.Status);
    //                       openElem.removeClass('open');
    //                       openElem.addClass(udPos.Status);
    //                       openElem.siblings().eq(7).html(udPos.Payout) ;
    //                       removeBgColor(openElem);
    //                       removeFontColor(openElem.siblings().eq(4));
    //                       if(udPos.Status=='Win'){
    //                           addWin();
    //                           openElem.siblings().addClass('success');
    //                           openElem.addClass('success');
    //                         }
    //                       if(udPos.Status=='Lose'){
    //                           addLoss();
    //                           openElem.siblings().addClass('danger');
    //                           openElem.addClass('danger');
    //                           openElem.siblings().eq(7).html('0') ;
    //                         } 
    //                       if(udPos.Status=='Tie'){
    //                           addTie();
    //                           openElem.siblings().addClass('primary');
    //                           openElem.addClass('primary');
    //                         }
    //                   var balance = $("#balanceTotal").text()*1;
    //                   var newBalance = udPos.Payout*1 -  parseInt(openElem.children().eq(2)) + balance;
    //                   console.log(newBalance);
    //                   $("#balanceTotal").html(newBalance);
                       openElem.remove();
                       insertRowHistory(udPos,tradeAmount);
                       }
                   });
               }
               });
            var pid = Math.max(parseInt($("#maxpid").val()),1);
            getTrades(pid);
      }
  }    
