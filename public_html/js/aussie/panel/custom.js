$(document).ready(function(){
    var guider = 0, debug = 0;

    //guide popups
    $('.guided-tour-start').on('click',function(){
        $('#guiders_overlay').show();
        guider=1;
        $('.guider#_1').fadeIn();
    });

    $('.guiders_buttons_container a').on('click',function(){
        var value = $(this).text();
        if(value == "Let's Start" || value == "Next"){
            guider++;
            $(this).closest('.guider').fadeOut();
            $('.guider#_'+guider).fadeIn();
        }
        else if(value == 'Close'){
            $(this).closest('.guider').fadeOut();
            $('#guiders_overlay').hide();
            guider=0;
        }
        else if(value == "Previous"){
            guider--;
            $(this).closest('.guider').fadeOut();
            $('.guider#_'+guider).fadeIn();
        }
    });


    if(debug == 0) {
        // first popup
        $('#welcomeModal').addClass('fade').addClass('in').fadeIn();

        $('#welcomeModal .close,#welcomeModal button').on('click', function () {
            $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut();
            $('#formDepositModal').addClass('fade').addClass('in').fadeIn();
        });

        $('.close').on('click', function () {
            $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut();
        });

        // need deposit=something to disable deposit popup every click
        if (typeof deposit == 'undefined') {
            $('a').on('click', function () {
                if(!$(this).hasClass('guided-tour-start') && !$(this).parent().hasClass('guiders_buttons_container'))
                    $('#formDepositModal').addClass('fade').addClass('in').fadeIn();
            });
        }
    }
});