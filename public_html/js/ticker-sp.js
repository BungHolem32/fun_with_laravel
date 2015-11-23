//var socket = io.connect('http://sst7-web3-a-nl.spotoption.com/');
var socket = io.connect('http://sst-super-c-nl.spotoption.com/');

var ids = [

    // Footer
    'asset_91', // EUR/USD
    'asset_95', // GBP/USD
    'asset_587', // USD/JPY A
    'asset_716', // AUD/USD A
    'asset_39', // GOLD
    'asset_116', // Oil
    'asset_66', // NASDAQ
    'asset_86' // S&P 500

];

socket.on('connect', function() {
    socket.emit('add', ids);
});

socket.on('update', function (data) {
    //console.log(data);
    $.each(data, function(i, el){
        var htel = $("#" + i);
        var diff = (Number(el.rate) - Number(htel.attr('rate'))).toPrecision(2);
        var perc = ((Number(diff) / Number(el.rate)) * 100).toPrecision(2);

        htel.attr('rate', el.rate);
        htel.children('.rate').html(el.rate);
        if (Math.abs(perc) > 0.01) {
            if (diff > 0) {
                htel.children('.change').html('<div class="up">+'+diff+'('+perc+'%)</div>');
            } else  {
                htel.children('.change').html('<div class="dn">'+diff+'('+perc+'%)</div>');
            }
        }
    });
});