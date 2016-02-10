// nav fix
$(window).on('scroll',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});
$('*:not(.nav)').on('click',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});

$(document).ready(function(){

    $('.toggle').toggles({
        text: {
            on: $('.toggle').data('on'), // text for the ON position
            off: $('.toggle').data('off') // and off
        },
        animate: 180, // animation time (ms)
        width: 110, // width used if not set in css
        height: 50 // height if not set in css
    });

    // cool loading jquery
    function loading(){
        $('.loading').show();
        setInterval(function(){
            if(!$('.loading span').hasClass('d1'))
                $('.loading span').removeClass('d4').addClass('d1').html('.');
            else if(!$('.loading span').hasClass('d2'))
                $('.loading span').addClass('d2').html('..');
            else if(!$('.loading span').hasClass('d3'))
                $('.loading span').addClass('d3').html('...');
            else if(!$('.loading span').hasClass('d4'))
                $('.loading span').removeClass('d1').removeClass('d2').removeClass('d3').addClass('d4').html('');
        },1300);
    }
    loading();
    // hide loading:          $('.loading').hide();



    /******* Actions *******/

    $('.toggle').on('toggle', function(e, active) {
        if (active) {
            console.log('Toggle ON');
        } else {
            console.log('Toggle OFF');
        }
    });

    $('.amount').on('click',function(){
        var tthis = $(this);
        tthis.parent().parent().find('.active').removeClass('active');
        tthis.addClass('active');
        $('input[name=amount]').val($(this).data('start'));

        console.log('amount clicked');
    });

    $('.dep_btn').on('click',function(){
        console.log('deposit clicked');
    });
});