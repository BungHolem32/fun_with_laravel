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
        drag: true, // allow dragging the toggle between positions
        click: true, // allow clicking on the toggle
        text: {
            on: 'ON', // text for the ON position
            off: 'OFF' // and off
        },
        on: false, // is the toggle ON on init
        animate: 250, // animation time (ms)
        easing: 'swing', // animation transition easing function
        checkbox: null, // the checkbox to toggle (for use in forms)
        clicker: null, // element that can be clicked on to toggle. removes binding from the toggle itself (use nesting)
        width: 110, // width used if not set in css
        height: 50, // height if not set in css
        type: 'compact' // if this is set to 'select' then the select style toggle will be used
    });

// detect toggle change
    (function(){
        var originalAddClassMethod = jQuery.fn.addClass;
        jQuery.fn.addClass = function(){
            var result = originalAddClassMethod.apply( this, arguments );
            jQuery(this).trigger('cssChanged');
            return result;
        }
    })();
    $(".toggle-on,.toggle-off").bind('cssChanged', function(){
        setTimeout(function(){
            if($(".toggle-on").attr('class') == 'toggle-on active')
                console.log('on');
            else
                console.log('off');
        },100);

    });
});