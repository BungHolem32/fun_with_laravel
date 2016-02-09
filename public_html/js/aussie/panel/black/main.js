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

    $('.toggle').on('toggle', function(e, active) {
        if (active) {
            console.log('Toggle ON!');
        } else {
            console.log('Toggle OFF!');
        }
    });

    $('.amount').on('click',function(){
        var tthis = $(this);
        tthis.parent().parent().find('.active').removeClass('active');
        tthis.addClass('active');
        $('input[name=amount]').val($(this).data('start'));
    });
});