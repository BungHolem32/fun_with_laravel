$(document).ready(function() {
    $(window).trigger('ajax-refresh');

    $('#depositBtn').on('click', function (e) {
        e.preventDefault();
        console.log('here');
    //}).validate({*/
    //    submitHandler: function (form) {
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
                        console.log(res);
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
    //    }
    });

});

    $(window).on('ajax-refresh', function () {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/ajax/refresh",
            dataType: 'json',
            success: function (res) {
                if (res.err === 0) {
                    load_positions(res.positions.status.Positions);
                }
            },
            error: function(err){
                console.log(err);
            }
        });

    });

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