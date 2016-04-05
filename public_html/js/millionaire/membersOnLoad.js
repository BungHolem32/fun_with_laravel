
$(document).ready(function() {
    function wl_getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split('&');
        for (var i=0;i<=vars.length-1;i++) {
            var pair = vars[i].split('=');
            if (pair[0] == variable) {
                return decodeURIComponent(pair[1]);
            }
        }
        return '';
    }
    $(function() {
        var query_email = wl_getQueryVariable('email');
        var query_a_aid = wl_getQueryVariable('a_aid');
        var query_param = wl_getQueryVariable('param');
        // var html_hidden_input = '<input type="hidden" name="first_name"';
        if (query_email !== '') {
            $('.access-form input[type="email"]').val(query_email);
        }
        if (query_a_aid !== '') {
            $('form').append('<input type="hidden" name="a_aid" value="'+ query_a_aid +'">');
        }

        if (query_param !== '') {
            $('form').append('<input type="hidden" name="param" value="'+ query_param +'">');
        }
        $('.flag-container').click(function() {
            //console.log(1)
            $('.country-list').toggle();
        });

        $('.access-form input[type="tel"]').click(function() {
            $('.country-list').hide();
        });

        $('.country').click(function() {
            var country_code = $(this).data('country-code');
            $('.selected-flag .iti-flag').attr('class', 'iti-flag ' + country_code);

        });
    });

    $('form').addClass('access-form').removeClass('form-horizontal');
    $('#FirstName').addClass('half-input input_firstname').removeClass('form-control').parent().removeClass().addClass('half-input');
    $('#LastName').addClass('half-input').removeClass('form-control').parent().removeClass().addClass('half-input no-margin-right');
    $('#prefix').addClass('prefix');
    $('#phone').addClass('phone');
    $('#other-error').hide();
    tick();
    move_trades();
    $(".video-holder").fitVids();
});


