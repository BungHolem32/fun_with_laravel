$(document).ready(function() {
    $(window).trigger('ajax-refresh');

    setInterval(function(){
        $(window).trigger('ajax-refresh')
    }, 10000);


    $('.toggle-blob').on('click', function(){
        $('.toggle-off').removeClass('btn-danger').addClass('btn-default');
        var btn = this;
        callAjax("/ajax/turnOn", null, function(res){
            $('.wait-ref').hide();
            if (res.err === 0) {
                $(window).trigger('ajax-refresh');
                $(btn).addClass('btn-success').removeClass('btn-default');
            }
            else if(res.err === 1){
                $('#formDepositModal').show();
                $('.stopTrade').addClass('btn-danger').removeClass('btn-default');
            }
        },function(){
            $('.wait-ref').show();
        });
    });
    $('.stopTrade').on('click', function(){
        $('.startTrade').removeClass('btn-success').addClass('btn-default');
        var btn = this;
        callAjax("/ajax/turnOff", null, function() {
                $('.wait-ref').hide();
                $(btn).addClass('btn-danger').removeClass('btn-default');
            }
            ,function(){
                $('.wait-ref').show();
        });
    });

    $('.form-deposit').validate({
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
               beforeSend: function() {
                   $('.depositBtnSect .loadingForm').show();
               },
               success: function (res) {
                   if (res.err === 0) {
                       $('body').removeClass('bggray');
                       $('#formDepositModal').fadeOut('fast');
                       $('#thanku').fadeIn();
                       setTimeout(function(){
                           $('#thanku').fadeOut();
                       },3000);

                       $(window).trigger('ajax-refresh');
                   }
                   else {
                       $('.depositBtnSect .loadingForm').hide();
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

    $('.logout').click(function(e){
        e.preventDefault();
        callAjax('/ajaxLogout', {}, function() {
            window.location.reload(true);
        });
        return false;
    });
});


$(window).on('ajax-refresh', function () {

    callAjax("/ajax/refresh", null, function(res){
        if (res.err === 0) {
            $('.getLoading').removeClass('on');
            $('.balance').html(res.customer.currencySign + ' ' + res.customer.accountBalance);

            if(res.customer.accountBalance<25)
            {
                if(!$('#formDepositModal').hasClass('hidden-ref')){
                    console.log('class',$('#formDepositModal').attr('class'));
                    $('#formDepositModal').fadeIn().addClass('hidden-ref');
                    $('body').addClass('bggray');
                }
            }
            else
            {
                $('#formDepositModal').removeClass('hidden-ref');
            }
            
            if(res.customer.accountBalance<100)
            {
                $('.low-alert').fadeIn();
            }
            else
            {
                $('.low-alert').hide();
            }

            asset_list = load_positions(res.positions);
            socketRefresh(asset_list);
        }
    },function(){
        // before send
        $('.getLoading').css('display', 'inline-block').addClass('on');
    });
});

/*CALL AJAX*/
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
    $('tr', open_table).addClass('pending');
    $('tr', history_table).addClass('pending');

    var row = $('#position-row').html();
    var asset_list = [];

    $.each(positions, function(i, position){

        if($('#position-'+position.id).length){
            $('#position-'+position.id).removeClass('pending');
            return;
        }
        /*  console.log('adding #position-'+position.id);*/

        position['amount'] = position['amount'].replace(/(\.\d{2})0+$/, '$1');
        var new_row = $(row).clone().attr('id', 'position-'+position.id).addClass(position.status+' '+position.position);

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

    socket.on('update', function (full_data) {
        $.each(full_data, function(i, data){
            data.rate = parseFloat(data.rate);
            $.each($("."+i), function(j, el){
                var row = $(el).parents('.position-row');
                var base = parseFloat(row.find('.entryRate').html());
                var change = Math.round((data.rate - base)*100); // in cents, not dollars!
                $(".rate", el).html(data.rate);
                row.removeClass("up down");
                if(Math.abs(change))
                    row.addClass((change > 0) ? "up" : "down");
                //$(".absolute", el).html(change/100);
                //$(".relative", el).html(Math.round(change/base*100)/100).append('%');
            });
        });
    });



}