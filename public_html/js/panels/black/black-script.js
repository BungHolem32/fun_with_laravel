(function ($) {

        var panel_object = {}

        /*TOGGLE BUTTON (SWITCH BUTTON*/
        Object.defineProperties(panel_object, {
            toggle_switch: {
                value: {
                    init: function () {
                        $('.toggles').toggles({
                            text: {
                                on: $('.toggles').data('on'), // text for the ON position
                                off: $('.toggles').data('off') // and off
                            },
                            animate: 180, // animation time (ms)
                            width: 110, // width used if not set in css
                            height: 50.4 // height if not set in css
                        });
                    },
                },
                enumerable: true,
                configurable: true
            },
            navbar_push_mobile: {
                value: {
                    init: function () {
                        /*ON CLICK ON THE ICON-MENU PUSH THE MENU ON AND BODY INSIDE*/
                        $('body').on('click', '.icon-menu', function () {
                            panel_object.navbar_push_mobile.show_or_hide_navbar(null, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                            $(this).addClass('active-nav-pushed');
                        });

                        /*ON CLICK AGAIN HIDE THE NAVBAR*/
                        $('body').on('click', '.active-nav-pushed', function () {
                            /*CHECK IF THE BUTTON ACTIVE*/
                            panel_object.navbar_push_mobile.show_or_hide_navbar(true, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                            $(this).removeClass('active-nav-pushed');
                        })
                    },
                    show_or_hide_navbar: function (remove, selector1, class1, selector2, class2) {
                        $(selector1).addClass(class1);
                        $(selector2).addClass(class2);
                        if (remove) {
                            $(selector1).removeClass(class1);
                            $(selector2).removeClass(class2);
                        }
                    },
                    on_resize_change: function () {
                        /*ON WINDOW RESIZE ABOVE 768PX CLOSE THE NAVBAR*/
                        $(window).on('resize', function () {
                            var width = $(window).width();
                            if (width > 768) {
                                panel_object.navbar_push_mobile.show_or_hide_navbar(true, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                                $(this).removeClass('active-nav-pushed');
                            }
                        })
                    },
                },
                enumerable: true,
                configurable: true,
                writable: true
            },
            remove_class_from_button: {
                value: function () {
                    $('body').on('click', '.btn-space', function () {
                        console.log($('.btn-space'))
                        $('.btn-space').removeClass('active-btn');
                    })
                }
            }
        })

        panel_object.toggle_switch.init();
        panel_object.navbar_push_mobile.init();
        panel_object.navbar_push_mobile.on_resize_change();
        panel_object.remove_class_from_button();

        window._panel = panel_object;
    }
    ($)
);