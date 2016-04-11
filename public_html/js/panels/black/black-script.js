(function ( $ ) {

    /*TOGGLE BUTTON (SWITCH BUTTON*/
    $ ( '.toggles' ).toggles ( {
        text   : {
            on : $ ( '.toggle' ).data ( 'on' ), // text for the ON position
            off: $ ( '.toggle' ).data ( 'off' ) // and off
        },
        animate: 180, // animation time (ms)
        width  : 110, // width used if not set in css
        height : 50.4 // height if not set in css
    } );


    $ ( 'body').on('click','.icon-menu' , function () {
        show_or_hide_navbar ( '.menu', '0', 'body', '200' );
        $ ( this ).addClass ( 'active' );
    } );
    /*CLOSE THE NAV BAR */
    $ ( 'body').on('click','.icon-close' , function () {
        /*CHECK IF THE BUTTON ACTIVE*/
            show_or_hide_navbar ( '.menu', '-200', 'body', '0' );
            $ ( this ).removeClass ( 'active' );
    } )
    $(window).on('resize',function (  ) {
        var width = $(window).width();
        if(width>768){
            $('body').animate({left:0},100);
            $('.menu').animate({left:-285},100);
        }
    })


    function show_or_hide_navbar ( selector1, parameter1, selector2, parameter2 ) {
        $ ( selector1 ).animate ( {
            left: parameter1
        }, 200 );

        $ ( selector2 ).animate ( {
            left: parameter2
        }, 200 );
    }

} ( $ ));