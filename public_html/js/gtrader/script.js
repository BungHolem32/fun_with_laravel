var html;
var profit=128210400;

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
    var p = rand_num(5,15);
    profit+=p;
    document.getElementById("Profit").innerHTML="$"+numberCom(profit)+"!";
}

function traderAnimate() {
    var p = rand_num(1, 100);
    p = p % 2;
    var xposition = position[p];

    var a = rand_num(0, 10);
    var xasset = asset[a];

    var payout = rand_num2(150, 570);
    profit += payout;

    html = '<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Montserrat\', sans-serif;">' + getDateTime(rand_num(1, 2)) + '</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Montserrat\', sans-serif;">' + xasset + '</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/gtrader/' + xposition.toLowerCase() + '.png" align="absmiddle" width="9px">&nbsp;<font style="font-family: \'Montserrat\', sans-serif;">' + xposition + '</span></font></td><td class="payoutwon" align="center"><font style="font-family: \'Montserrat\', sans-serif !important;">$ ' + numberCom(payout) + '.00</font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/gtrader/swong.png" height="20px"></span></td></tr>' + html;

    $("#trades").html(html);
    /*$("#TOTAL").html("$"+numberCom(profit));
     $("#WON").html("100 %");
     $("#LOST").html("0 %");*/

    var r = rand_num( 3000, 10000 );
    setTimeout( traderAnimate, r );
}

function tradersTable() {
    var position    = ['UP', 'DOWN'];
    var asset       = ['USD/CHF', 'GBP/USD', 'EUR/USD', 'NZD/USD', 'GOLD', 'SILVER', 'OIL', 'FACEBOOK', 'GOOGLE', 'USD/CAD', 'EUR/JPY', 'NZD/USD'];
    profit          = 0;
    var win         = 0;
    var lost        = 0;
    var html;

    setTimeout( traderAnimate, 3000 );

    /*$("#TOTAL").html("$"+numberCom(profit));*/
    function getDateTime(sec) {

        var now = new Date(Date.now() - (sec * 1000));
        //return now.getDate();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var day = now.getDate();
        var hour = now.getHours();
        var minute = now.getMinutes();
        var second = now.getSeconds();
        if (month.toString().length == 1) {
            var month = '0' + month;
        }
        if (day.toString().length == 1) {
            var day = '0' + day;
        }
        if (hour.toString().length == 1) {
            var hour = '0' + hour;
        }
        if (minute.toString().length == 1) {
            var minute = '0' + minute;
        }
        if (second.toString().length == 1) {
            var second = '0' + second;
        }
        var dateTime = year + '/' + month + '/' + day + ' ' + hour + ':' + minute + ':' + second;
        return dateTime;
    }

    function AddTrade() {
        for (var i = 0; i < 600; i += rand_num(60, 65)) {
            //alert(i);
            var p = rand_num(1, 100);
            p = p % 2;
            var xposition = position[p];

            var a = rand_num(0, 10);
            var xasset = asset[a];

            var payout = rand_num2(200, 800);
            profit += payout;

            html += '<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Montserrat\', sans-serif;">' + getDateTime(i) + '</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Montserrat\', sans-serif;">' + xasset + '</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/gtrader/' + xposition.toLowerCase() + '.png" align="absmiddle" width="9px">&nbsp;<font style="font-family: \'Montserrat\', sans-serif;">' + xposition + '</span></font></td><td class="payoutwon" align="center"><font style="font-family: \'Montserrat\', sans-serif !important;">$ ' + numberCom(payout) + '.00</font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/gtrader/swong.png" height="20px"></span></td></tr>';
        }
        $("#trades").html(html);
        /*$("#TOTAL").html("$"+numberCom(profit));
         $("#WON").html("100 %");
         $("#LOST").html("0 %");*/
    }
    AddTrade();
}

//setInterval(mkChanges,400);


$(document).ready(function () {
    var pagerOptions = {

        // target the pager markup - see the HTML block below
        container: $(".pager"),

        // use this url format "http:/mydatabase.com?page={page}&size={size}&{sortList:col}"
        ajaxUrl: null,

        // modify the url after all processing has been applied
        customAjaxUrl: function (table, url) { return url; },

        // process ajax so that the data object is returned along with the total number of rows°
        // example: { "data" : [{ "ID": 1, "Name": "Foo", "Last": "Bar" }], "total_rows" : 100 }
        ajaxProcessing: function (ajax) {
            if (ajax && ajax.hasOwnProperty('data')) {
                // return [ "data", "total_rows" ];
                return [ajax.total_rows, ajax.data];
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
        savePages: true,

        //defines custom storage key
        storageKey: 'tablesorter-pager',

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

    $('#positionsHistoryTable').tablesorter().bind('pagerChange pagerComplete pagerInitialized pageMoved', function (e, c) {
        var msg = '"</span> event triggered, ' + (e.type === 'pagerChange' ? 'going to' : 'now on') +
            ' page <span class="typ">' + (c.page + 1) + '/' + c.totalPages + '</span>';
        $('#display')
            .append('<li><span class="str">"' + e.type + msg + '</li>')
            .find('li:first').remove();
    }).tablesorterPager(pagerOptions);

    tradersTable();
});


