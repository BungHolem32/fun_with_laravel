var guider = 0, debug = 0;

$(document).ready(function(){

    // showLoading:    $('.getLoading').show().find('.inside').html('');
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
        // popups

        $('.close').on('click', function () {
            $('body').removeClass('bggray');
            $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut('fast');
        });

        $('#awelcomeModal').on('click',function(){
            $('#welcomeModal').slideDown();
         //   $('video source').attr('src',$('video source').attr('data-src'));
            $('video').get('0').play();

        });

        $('#welcomeModal .close,#welcomeModal button').on('click', function () {
            $('body').addClass('bggray');
            $(this).closest('.modal').fadeOut('fast');
            $('video').get('0').pause();
         //   $('video').data('src',$('video source').attr('src'));
            $('video').attr('loop','loop');
            setTimeout(function(){
                $('#formDepositModal').fadeIn();
            },300);
        });


        // need deposit=something to disable deposit popup every click
        if (typeof deposit == 'undefined') {
            $('a#manualTrading, a#StatisticsModal').on('click', function () {
                if(!$(this).hasClass('guided-tour-start') && !$(this).parent().hasClass('guiders_buttons_container')){
                    $('#formDepositModal').fadeIn();
                    $('body').addClass('bggray');
                }
                return false;
            });
        }

        $('#afaqModal').on('click', function () {
            $('#faqModal').addClass('in').slideDown();
        });
        $('a[data-toggle=collapse]').on('click',function(){
            $(this).closest('.panel.panel-default').find('.panel-collapse.collapse').toggle();
        });
    }

});