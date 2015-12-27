var guider = 0, debug = 0;

$('.close').on('click', function () {
    $('body').removeClass('bggray');
    $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut('fast');
});

$(document).ready(function(){
    var balance = $('.balance').text().replace('$','').replace(' ','');
    console.log(balance);
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

        $('#awelcomeModal').on('click',function(){
            $('#welcomeModal').slideDown();
            $('video').get('0').play();

        });

        $('#cvv-popover').on('mouseenter',function(){
            $('.popover').animate({'opacity':1},500);
        });
        $('#cvv-popover').on('mouseleave',function(){
            $('.popover').animate({'opacity':0},500);
        });

        $('#welcomeModal .close,#welcomeModal button').on('click', function () {
            $(this).closest('.modal').fadeOut('fast');
            $('video').attr('loop','loop').get('0').pause();

            if(!$('#formDepositModal').hasClass('hidden')){
                $('body').addClass('bggray');
                setTimeout(function(){
                        $('#formDepositModal').fadeIn();
                },300);
            }
            else{
                $('#formDepositModal').removeClass('hidden');
            }

        });

  /*      $("*").on('click',function(){
           console.log($(this).attr('class'))
        });*/


        $('.deposit-btn').on('click', function () {
            $('#formDepositModal').fadeIn();
            $('body').addClass('bggray');
            return false;
        });

        $('#afaqModal').on('click', function () {
            $('#faqModal').addClass('in').slideDown();
        });
        $('a[data-toggle=collapse]').on('click',function(){
            $(this).closest('.panel.panel-default').find('.panel-collapse.collapse').toggle();
        });
    }

});