$(document).ready(function() {
    $(window).trigger('ajax-refresh');

    $('.startTrade').on('click', function(){
        $('.stopTrade').removeClass('btn-danger').addClass('btn-default');
        var btn = this;
        callAjax("/ajax/turnOn", null, function(res){
            if (res.err === 0) {
                $(window).trigger('ajax-refresh');
                $(btn).addClass('btn-success').removeClass('btn-default');
            }
        });
    });
    $('.stopTrade').on('click', function(){
        $('.startTrade').removeClass('btn-success').addClass('btn-default');
        var btn = this;
        callAjax("/ajax/turnOff", null, function(){$(btn).addClass('btn-danger').removeClass('btn-default');});
    });

    $('#deposit-form').validate({
        submitHandler: function (form) {
            var data = $('#deposit-form').serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/ajax/deposit",
                dataType: 'json',
                data: data,
                success: function (res) {
                    if (res.err === 0) {
                        $(window).trigger('ajax-refresh');
                    }
                    else {
                        alert(res.errs.error);
                        //console.log(res);
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

    $('#amountOfTrade .btn').click(function(){
        $('#amountOfTrade .btn').addClass('btn-default').removeClass('btn-success');
        $(this).removeClass('btn-default').addClass('btn-success');
        var tmp_range = $(this).data('amount').split('-');
        var range = {'min':tmp_range[0], 'max':tmp_range[1], '_token': $('meta[name="csrf-token"]').attr('content')};
        $.post('/ajax/setRange', range);
    });

});

    $(window).on('ajax-refresh', function () {

        callAjax("/ajax/refresh", null, function(res){
            if (res.err === 0) {
                $('.getLoading').hide();
                $('.balance').html(res.customer.currencySign + ' ' + res.customer.accountBalance);
                asset_list = load_positions(res.positions);
                socketRefresh(asset_list);
            }
        },function(){
            // before send
            $('.getLoading').css('display', 'inline-block');
        });

    });


function callAjax(url, data, cbSuccess, cbBefore){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: url,
        dataType: 'json',
        data: data,
        beforeSend: cbBefore,
        success: function(res) {
            cbSuccess && cbSuccess(res)
        },
        error: function(err, msg){
            console.log(err, msg);
        }
    });
}

function load_positions(positions){
    var open_table = $('#runningPositionsTable tbody');
    var history_table = $('#positionsHistoryTable tbody');
    $('tbody.tr', open_table).addClass('pending');
    $('tbody.tr', history_table).addClass('pending');

    var row = $('#position-row').html();
    var asset_list = [];

    $.each(positions, function(i, position){

        if($('#position-'+position.id).length){
            $('#position-'+position.id).removeClass('pending');
            return;
        }
        console.log('adding #position-'+position.id);

        position['amount'] = position['amount'].replace(/(\.\d{2})0+$/, '$1');
        var new_row = $(row).clone().attr('id', 'position-'+position.id).addClass(position.status);

        var assetId = 'asset_' + position['assetId'];
        asset_list.push(assetId);
        new_row.find('.currentRate .asset').addClass(assetId);

        $.each(position, function(j, data) {
            new_row.find('.'+j).text(data);
        });

        (position.status == 'open' ? open_table : history_table).append(new_row);
    });
    if($('tr.pending').length){
        console.log('removing ', $('tr.pending'));
        $('tr.pending').attr('id', '').remove();
    }
    return asset_list;
}


var socket;

function socketRefresh(asset_ids){

    if(socket !== undefined){
        if(!_.difference(asset_ids, socket.ids))
            return;
        //socket.disconnect();
    }


    var socket = io.connect('//sst-super-c-nl.spotoption.com/');

    socket.ids = _.uniq(asset_ids);

    var ids = socket.ids;

    socket.on('connect', function() {
        socket.emit('add', ids);
    });

    socket.on('update', function (data) {
        //console.log(data);
        $.each(data, function(i, el){
            var htel = $("." + i);
            var htel2 = $("#index-" + i);
            var diff = (Number(el.rate) - Number(htel.attr('rate'))).toPrecision(2);
            var diff2 = (Number(el.rate) - Number(htel2.attr('rate'))).toPrecision(1);
            var perc = ((Number(diff) / Number(el.rate)) * 100).toPrecision(2);
            var perc2 = ((Number(diff2) / Number(el.rate)) * 100).toPrecision(1);

            htel2.attr('rate', el.rate);
            htel2.find('.rate').html(Number(el.rate).toPrecision(5));
            if (Math.abs(perc2) > 0.01) {
                if (diff2 > 0) {
                    htel2.find('.change').html('<div class="up">+'+perc2+'%</div>');
                } else  {
                    htel2.find('.change').html('<div class="dn">'+perc2+'%</div>');
                }
            }

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



}