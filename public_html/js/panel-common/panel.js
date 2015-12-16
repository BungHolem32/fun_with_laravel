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
                load_positions(res.positions.status.Positions);
            }
        });
    });


function callAjax(url, data, cb){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: url,
        dataType: 'json',
        data: data,
        beforeSend: function(){

        },
        success: function (res) {
            cb && cb(res);
        },
        error: function(err, msg){
            console.log(err, msg);
        }
    });
}

function load_positions(pos){
    var open_table = $('#runningPositionsTable tbody');
    var history_table = $('#positionsHistoryTable tbody');
    open_table.html('');
    history_table.html('');

    var row = $('#position-row').html();

    for(p in pos){
        // prepare values
        pos[p]['amount'] = pos[p]['amount'].replace(/0+$/, '');

        new_row = $(row).clone().attr('id', 'position-'+p).addClass(pos[p].status);
        for(c in pos[p]){
            new_row.find('.'+c).text(pos[p][c]);
        }

        (pos[p].status == 'open' ? open_table : history_table).append(new_row);
    }
}