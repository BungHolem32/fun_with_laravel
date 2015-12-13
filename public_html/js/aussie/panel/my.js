// Spot fn modal.
$(function(){
    var broker = data.user.BrokerName;

    if(broker=="spotfn"){
        $('#spotfn-message').removeClass("sfnhide");
    }
});

$(document).ready(function(){
	
	$("#positionsHistoryTable tbody tr").each(function(){
    if($(this).css('display')=='none')
        $(this).remove();
	
	});
	
    var historyTableHandler = $("#positionsHistoryTable").dataTable(
        { "sDom" : "<'dt-top-row'><'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>",
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [2, 3,4,5,6 ] } ] ,
            "aaSorting" : [[7,'desc']], // this is for  tables with the profit column without reduce to 6
            "bPaginate": true,
            "iDisplayLength":25,
            "bFilter":false }
    );


});


