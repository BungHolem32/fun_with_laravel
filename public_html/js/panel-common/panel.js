$(document).ready(function(){
    $(window).trigger('ajax-refresh');
});

$(window).on('ajax-refresh', function() {

        var data = $(form).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/",
            data: data,
            dataType: 'json',
            success: function( res ) {
                if(res.redirect.length > 0 )
                    window.location = res.redirect;
            }
        });

});