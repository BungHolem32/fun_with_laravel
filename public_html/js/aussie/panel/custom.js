var guider = 0, debug = 0;

$(document).ready(function(){

    //showLoading:    $('.getLoading').show().find('.inside').html('');
    // ajax's to        $('.openTrades').html()  ||   $('.historyTrades').html()
    // on and off:     On click .startTrade ||    .stopTrade
    // and when deposit change deposit=1;

    //guide popups
    $('.guided-tour-start').on('click',function(){
        $('#guiders_overlay').show();
        guider=1;
        $('.guider#_1').fadeIn();
    });

    $('.guiders_buttons_container a').on('click',function(){
        var value = $(this).text();
        $(this).closest('.guider').fadeOut();

        if(value == "Let's Start" || value == "Next"){
            guider++;
            $('.guider#_'+guider).fadeIn();
        }
        else if(value == 'Close'){
            $('#guiders_overlay').hide();
            guider=0;
        }
        else if(value == "Previous"){
            guider--;
            $('.guider#_'+guider).fadeIn();
        }
    });


    if(debug == 0) {
        // popups
     //   $('html').addClass('noscrolly');

        $('.close').on('click', function () {
            $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut('fast');
           // $('html').removeClass('noscrolly');
            $('body').removeClass('bggray');
        });

        $('#welcomeModal .close,#welcomeModal button').on('click', function () {
            //$('html').addClass('noscrolly');
            $('body').addClass('bggray');
            $(this).closest('.modal').fadeOut('fast');
            setTimeout(function(){
                $('#formDepositModal').fadeIn();
            },300);
        });

        // need deposit=something to disable deposit popup every click
        if (typeof deposit == 'undefined') {
            $('a').on('click', function () {
                if(!$(this).hasClass('guided-tour-start') && !$(this).parent().hasClass('guiders_buttons_container')){
                    $('#formDepositModal').fadeIn();
                    $('body').addClass('bggray');
                  //  $('html').addClass('noscrolly');
                }
                return false;
            });
        }
    }
});