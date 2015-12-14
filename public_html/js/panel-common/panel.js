$(document).ready(function(){
    $(window).trigger('ajax-refresh');

    $('#depositBtn').on('click', function(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/ajax/deposit",
            dataType: 'json',
            success: function( res ) {
                if(res.err === 0 ) {
                    $(window).trigger('ajax-refresh');
                }
                else{
                    console.log(res);
                }
            }
        });
    });
});

$(window).on('ajax-refresh', function() {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/ajax/refresh",
            //data: data,
            dataType: 'json',
            success: function( res ) {
                if(res.err === 0 ) {
                    $('#runningPositionsTable');
                }
            }
        });

});