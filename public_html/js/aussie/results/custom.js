function settable() {
    var pagerOptions = {

        // target the pager markup - see the HTML block below
        container: $(".pager"),

        // use this url format "http:/mydatabase.com?page={page}&size={size}&{sortList:col}"
        ajaxUrl: null,

        // modify the url after all processing has been applied
        customAjaxUrl: function(table, url) { return url; },

        // process ajax so that the data object is returned along with the total number of rows°
        // example: { "data" : [{ "ID": 1, "Name": "Foo", "Last": "Bar" }], "total_rows" : 100 }
        ajaxProcessing: function(ajax){
            if (ajax && ajax.hasOwnProperty('data')) {
                // return [ "data", "total_rows" ];
                return [ ajax.total_rows, ajax.data ];
            }
        },

        // output string - default is '{page}/{totalPages}'
        // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
        output: '{startRow} to {endRow} ({totalRows})',

        // apply disabled classname to the pager arrows when the rows at either extreme is visible - default is true
        updateArrows: true,

        // starting page of the pager (zero based index)
        page: 0,

        // Number of visible rows - default is 10
        size: 1000,

        // Save pager page & size if the storage script is loaded (requires $.tablesorter.storage in jquery.tablesorter.widgets.js)
        savePages : true,

        //defines custom storage key
        storageKey:'tablesorter-pager',

        // if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
        // table row set to a height to compensate; default is false
        fixedHeight: true,

        // remove rows from the table to speed up the sort of large tables.
        // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
        removeRows: false,

        // css class names of pager arrows
        cssNext: '.next', // next page arrow
        cssPrev: '.prev', // previous page arrow
        cssFirst: '.first', // go to first page arrow
        cssLast: '.last', // go to last page arrow
        cssGoto: '.gotoPage', // select dropdown to allow choosing a page

        cssPageDisplay: '.pagedisplay', // location of where the "output" is displayed
        cssPageSize: '.pagesize', // page size selector - select dropdown that sets the "size" option

        // class added to arrows when at the extremes (i.e. prev/first arrows are "disabled" when on the first page)
        cssDisabled: 'disabled', // Note there is no period "." in front of this class name
        cssErrorRow: 'tablesorter-errorRow' // ajax error information row

    };

    $('#positionsHistoryTable').tablesorter().bind('pagerChange pagerComplete pagerInitialized pageMoved', function(e, c){
        var msg = '"</span> event triggered, ' + (e.type === 'pagerChange' ? 'going to' : 'now on') +
            ' page <span class="typ">' + (c.page + 1) + '/' + c.totalPages + '</span>';
        $('#display')
            .append('<li><span class="str">"' + e.type + msg + '</li>')
            .find('li:first').remove();
    }).tablesorterPager(pagerOptions);
}//);

position=['CALL','PUT'];
asset=['USD/CHF','GBP/USD','CHF/JPY','EUR/USD','NZD/USD','USD/CAD','EUR/JPY','EUR/CHF','EUR/GBP','NZD/USD','GBP/CHF'];
profit=8441;

win=0;
lost=0;
function rand_num(min,max) {
    var number = min + Math.floor(Math.random() * max);
    return number;
}
function rand_num2(min,max) {
    var number = min + Math.floor((Math.random() * max)/2);
    return number;
}
function numberCom(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1"+","+"$2");
    return val;
}
function mkChanges() {
    var p = rand_num(1,100);
    p=p%2;
    var xposition=position[p];

    var a = rand_num(0,10);
    var xasset=asset[a];

    var payout = rand_num2(150,200);
    profit+=payout;

    var html='<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">'+getDateTime()+'</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">'+xasset+'</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/'+xposition.toLowerCase()+'.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">'+xposition+'</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>'+numberCom(payout)+'.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>';
    html=html+$("#trades").html();
    //alert(html);
    $("#trades").html("");
    settable();
    $("#trades").html(html);
    $("#TOTAL").html("$"+numberCom(profit));
    $("#WON").html("100 %");
    $("#LOST").html("0 %");
    settable();
}

setTimeout(function(){
    mkChanges();
},500);
setInterval(mkChanges,5000);
settable();
$("#TOTAL").html("$"+numberCom(profit));
function getDateTime() {

    var now     = new Date(Date.now() - (rand_num(1,5)*1000));
    //return now.getDate();
    var year    = now.getFullYear();
    var month   = now.getMonth()+1;
    var day     = now.getDate();
    var hour    = now.getHours();
    var minute  = now.getMinutes();
    var second  = now.getSeconds();
    if(month.toString().length == 1) {
        var month = '0'+month;
    }
    if(day.toString().length == 1) {
        var day = '0'+day;
    }
    if(hour.toString().length == 1) {
        var hour = '0'+hour;
    }
    if(minute.toString().length == 1) {
        var minute = '0'+minute;
    }
    if(second.toString().length == 1) {
        var second = '0'+second;
    }
    var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;
    return dateTime;
}