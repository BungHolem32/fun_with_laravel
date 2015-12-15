$(document).ready(function() {
    $(window).trigger('ajax-refresh');

    $('.startTrade').on('click', function(){
        callAjax("/ajax/turnOn", null, function(res){
            if (res.err === 0) {
                $(window).trigger('ajax-refresh');
            }
        });
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
            cb(res);
        },
        error: function(err){
            console.log(err);
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
        new_row = $(row).clone().attr('id', 'position-'+p).addClass(pos[p].status);
        for(c in pos[p]){
            new_row.find('.'+c).text(pos[p][c]);
        }

        (pos[p].status == 'open' ? open_table : history_table).append(new_row);
    }
}