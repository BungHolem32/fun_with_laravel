@section('head')
    <link rel="stylesheet" href="/css/aussie/results/custom.css">
    <script src="/js/aussie/results/rivets.min.js" defer></script>
    <script src="/js/aussie/results/rivets.formatters.js" defer></script>
    <script src="/js/aussie/results/jquery.min.js" defer></script>
    <script src="/js/aussie/results/jquery.tablesorter.min.js" type="text/javascript" defer></script>
    <script src="/js/aussie/results/jquery.tablesorter.pager.js" type="text/javascript" defer></script>
@append

@section('page-layout')
    <script type="text/javascript" defer>
        //$(document).ready(
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
    </script>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body cz-shortcut-listen="true" style="background:none !important;">
<div id="WinLostMain">

</div>
<br>
<table class="table table-striped table-bordered shadowed table-hover" id="positionsHistoryTable" width="820px">
    <thead>
    <tr>
        <th background="/img/aussie/results/topb.png"><font style="font-family: 'Cabin', sans-serif; color:#000 !important;"><center>
            CURRENT TIME
        </center></th>
        <th background="/img/aussie/results/topb.png"><font style="font-family: 'Cabin', sans-serif; color:#000 !important;"><center>
            CURRENCY
        </center></th>
        <th background="/img/aussie/results/topb.png"><font style="font-family: 'Cabin', sans-serif; color:#000 !important;"><center>
            TRADE TYPE
        </center></th>
        <th background="/img/aussie/results/topb.png"><font style="font-family: 'Cabin', sans-serif; color:#000 !important;"><center>
            PAYOUT
        </center></th>
        <th background="/img/aussie/results/topb.png"><font style="font-family: 'Cabin', sans-serif; color:#000 !important;"><center>
            RESULTS
        </center></th>
    </tr>
    </thead>
    <tbody id="trades">    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 08:53:08</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>434.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 08:10:25</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>519.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 07:41:12</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">GBP/USD</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>607.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 07:21:29</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">CHF/JPY</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>530.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 06:51:41</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/JPY</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>479.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 06:10:27</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>485.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 05:42:30</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">GBP/USD</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>430.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 05:07:40</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/USD</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>577.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 04:47:58</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>662.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 04:14:53</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">CHF/JPY</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>661.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 03:25:31</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/JPY</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>421.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 02:55:27</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">USD/CAD</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>639.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 02:23:53</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">USD/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>455.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 01:55:56</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">USD/CAD</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/call.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">CALL</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>603.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 01:10:24</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">EUR/GBP</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>523.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    <tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success" style="display: none;"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">2015/12/07 00:21:36</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">USD/CHF</span></font></td><td align="center"><span rv-text="position.position | capitalize"><img src="/img/aussie/results/put.png" align="absmiddle" width="9"><font style="font-family: \'Cabin\', sans-serif;">PUT</span></font></td><td class="payoutwon" align="center"><span rv-text="currencySign"><font style="font-family: \'Cabin\', sans-serif;"><strong>$</strong></span><span rv-text="position.payout | number"> <strong>416.00</strong></span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/results/bluetick.png" height="20"></span></td></tr>
    </tbody>
</table>
<div id="pager1" class="pager1 tablesorter-pager1" style="width:100%; text-align:center; clear:both; margin:0; display:none">
    <form>
        <img src="/img/aussie/results/first.png" width="16" height="16" class="first disabled" tabindex="0" aria-disabled="true"> <img src="/img/aussie/results/prev.png" width="16" height="16" class="prev disabled" tabindex="0" aria-disabled="true">
        <span class="pagedisplay" id="positionsHistoryTable_pager_info"></span>
        <img src="/img/aussie/results/next.png" class="next" tabindex="0" width="16" height="16" aria-disabled="false">
        <img src="/img/aussie/results/last.png" class="last" width="16" height="16" tabindex="0" aria-disabled="false">
    </form>
</div>
<script defer>
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
</script>
@endsection
