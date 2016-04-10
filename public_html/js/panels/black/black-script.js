(function ( $ ) {
    $('.toggles').toggles({
        text: {
            on: $('.toggle').data('on'), // text for the ON position
            off: $('.toggle').data('off') // and off
        },
        animate: 180, // animation time (ms)
        width: 110, // width used if not set in css
        height: 50.4 // height if not set in css
    });
    console.log($('.toggles').toggles());
}($));