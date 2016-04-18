(function ($) {

        var panel_object = {}

        /*TOGGLE BUTTON (SWITCH BUTTON IN THE ACTIVATE AUTO TRADING)*/
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

            /*METHOD THAT ACTIVATE THE PUSH PULL NAVBAR ON MOBILE*/
            nav_bar_mobile: {
                value: {
                    
                    

                    init: function () {
                        /*ON CLICK ON THE ICON-MENU PUSH THE MENU ON AND BODY INSIDE*/
                        $('body').on('click', '.icon-menu', function () {

                            panel_object.nav_bar_mobile.show_or_hide_navbar(null, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                            $(this).addClass('active-nav-pushed');
                        });

                        /*ON CLICK AGAIN HIDE THE NAVBAR*/
                        $('body').on('click', '.active-nav-pushed, .navbar-text-mobile', function () {

                            /*CHECK IF THE BUTTON ACTIVE*/
                            panel_object.nav_bar_mobile.show_or_hide_navbar(true, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                            $(this).removeClass('active-nav-pushed');
                        })
                    },

                    /*FUNCTION TO ADD AND REMOVE CLASS IN NAVBAR MOBILE CLICK*/
                    show_or_hide_navbar: function (remove, selector1, class1, selector2, class2) {
                        $(selector1).addClass(class1);
                        $(selector2).addClass(class2);
                        if (remove) {
                            $(selector1).removeClass(class1);
                            $(selector2).removeClass(class2);
                        }
                    },

                    /*COLLAPSE THE NAV-BAR ON IMAGE RESIZE*/
                    on_resize_change: function () {

                        /*ON WINDOW RESIZE ABOVE 768PX CLOSE THE NAVBAR*/
                        $(window).on('resize', function () {
                            var width = $(window).width();
                            if (width > 768) {
                                panel_object.nav_bar_mobile.show_or_hide_navbar(true, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile');
                                $(this).removeClass('active-nav-pushed');
                            }
                        })
                    },
                },
                enumerable: true,
                configurable: true,
                writable: true
            },

            /*REMOVE SELECTION FROM BUTTON IN THE AMOUNT BUTTONS */
            remove_selection_from_amount_buttons: {
                value: function () {
                    $('body').on('click', '.btn-amount-selected', function () {
                        console.log($('.btn-amount-selected'))
                        $('.btn-amount-selected').removeClass('active-btn');
                    })
                }
            },
            on_mobile_hide_label: {
                value: function () {
                    var width = $(window).width();

                    $('label').each(function (i, el) {
                        /*GET THE INPUT VALUE*/
                        var input = $(el).attr('for');
                        input = input.replace('-', ' ');

                        /*RUN ON ALL THE LABELS AND HIDE THEM */
                        if (width < 992) {

                            /*IF INPUT EXPIRATION DATE  IN MOBILE CHANGE THE DEFAULT VALUE*/
                            if (input == 'expiration date') {
                                $(el).next().find('[value="-1"]').text('exp-MM');
                                $(el).next().next().find('[value="-1"]').text('Exp-YYYY')
                            }

                            /*IF INPUT CARD TYPE IN MOBILE CHANGE THE DEFAULT VALUE*/
                            if (input == 'card type') {
                                $(el).parent().next().find('[value="-1"]').text('choose card type');
                            }

                            $(el)
                                .css('display', 'none')
                                .next().attr('placeholder', input)
                                .addClass('text-capitalize');

                        }
                        /*ELSE SHOW LABEL AND HIDE PLACEHOLDER */
                        else {
                            /*RETURN TO THE DEFAULT VALUE IN DESKTOP*/
                            if (input == 'expiration date') {

                                $(el).next().find('[value="-1"]').text('month');
                                $(el).next().next().find('[value="-1"]').text('year')
                            }
                            /*RETURN TO THE DEFAULT VALUE IN DESKTOP*/
                            if (input == 'card type') {
                                $(el).parent().next().find('[value="-1"]').text('choose type');
                            }
                            $(el)
                                .css('display', 'block')
                                // .next().removeAttr('placeholder')
                                .removeClass('text-capitalize');
                        }
                    })
                },
                enumerable: true,
                configurable: true
            },
            faq: {
                value: {
                    init: function () {
                        $('body').on('click', '.question-wrapper', function () {
                            var img, btn = null;

                            /*SHOW AND HIDE ANSWER BY CLICK*/
                            $(this).next().toggleClass('hide');

                            /*CHANGE BUTTON PIC BY SITUATION*/
                            panel_object.faq.change_button_pic(this);
                        })
                    },
                    change_button_pic: function (elem) {
                        /*TRIGER THE IMG BUTTON AFTER THE QUESTION*/
                        img = $(elem).find(":first-child");

                        /*CHECK IF THE ANSWER IS SHOWN OR HIDDEN*/
                        /*AND CHANGE TO THE PROPER PIC*/
                        if ($(elem).next().hasClass('hide')) {

                            btn = img.data('btn-close');
                            img.attr('src', btn);
                        }
                        else {
                            var btn = img.data('btn-open');
                            img.attr('src', btn);
                        }
                    }
                },
                enumerable: true,
                configurable: true,
            },

            /*ON CLICK ON THE EXIT BUTTON IN THE MODAL EXIT THE MODAL*/
            exit_modal_button: {
                value: function () {
                    $('body').on('click', '.square-logo', function () {
                        $('.modal-deposit').hide();
                        $('body').removeClass();
                    })
                }
            },
            change_color_by_status: {
                value: {
                    init: function () {
                        var inter;
                        inter = setInterval(panel_object.change_color_by_status.loop_on_the_position, 30000);
                    },

                    /*CHANGE THE COLORS OF STATUS WHEN IT START THE LOOP*/
                    loop_on_the_status: function () {
                        $('.td-status').each(function (i, el) {
                            var status = $(el).text().toLowerCase();

                            if (status == 'won') {
                                $(el).addClass('alert-success').removeClass('alert-danger alert-warning');
                            } else if (status == 'lost') {
                                $(el).addClass('alert-danger').removeClass('alert-success alert-warning');
                            } else if (status == 'canceled') {
                                $(el).addClass('alert-warning').removeClass('alert-danger alert-success');
                            }
                        })
                    },

                    /*CHANGE THE ICON OF THE ARROW ON LOAD */
                    loop_on_the_position:function(){
                        /*ITTERATE OVER THE POSITIONS AND CHANGE THE ICON*/
                        $('.td-position').each(function(i,el){
                            var position = $(el).text().toLowerCase();

                            /*CHECK IF THERES ELEMENT FA*/
                            if($(el).find('.fa').length){

                                /*CHECK WHAT THE INPUT AND CHANGE THE ARROW*/
                                if (position == ' put') {
                                    $(el).find('.fa').removeClass('fa-arrow-up').addClass('fa-arrow-down');
                                } if(position == ' call') {
                                    $(el).find('.fa').removeClass('fa-arrow-down').addClass('fa-arrow-up');
                                }
                             /*IF NOT ADD IT IN*/
                            }else{

                                /*ADD NEW ARROW WITH THE PROPER SIGN*/
                                if (position == 'put') {
                                    $(el).prepend('<i class="fa fa-arrow-down"></i> ');
                                } else {
                                    $(el).prepend('<i class="fa fa-arrow-up"></i> ');
                                }
                            }
                        })
                    }
                },
                configurable: true,
                enumerable: true
            }
        })

        /*LETS INITIATE THE METHODS */

        /*1-SWITCH ADD ON (TO SHOW THE BUTTON SWITCH ON THE SECOND STEP IN THE HOME PAGE)*/
        panel_object.toggle_switch.init();

        /*2-PUSH AND PULL THE NAV-BAR ON MOBILE*/
        panel_object.nav_bar_mobile.init();

        /*2-2 MAKE THE CHANGES ALSO IN RESIZE WINDOW (PULL THE NAV-BAR OFF WHEN REACH 990PX)*/
        panel_object.nav_bar_mobile.on_resize_change();

        /*3 -  IN THE THIRD STEP OF THE HOME PAGE (TOGGLE SELECTION ON CHANGE) */
        panel_object.remove_selection_from_amount_buttons();

        /*4 - ON MODAL DEPOSIT TOGGLE LABELS ON RESIZE CHANGING*/
        panel_object.on_mobile_hide_label();

        /*5- ON RESIZE CHANGE THE LABEL APPEARANCE*/
        $(window).resize(function () {
            panel_object.on_mobile_hide_label();
        })

        /*5 - SHOW OR HIDE THE ANSWER ON A CLICK && CHANGE BUTTON PICTURE*/
        panel_object.faq.init();

        /*6 INITIATE THE TRIGGER ON CLICK FOR THE EXIT BUTTON ON THE MODALS */
        panel_object.exit_modal_button();
        
        /*7- LOOF OVER ALL THE STATUS AND CHANGE HIS COLOR*/
        setTimeout(panel_object.change_color_by_status.loop_on_the_position,2000);
        panel_object.change_color_by_status.init();

        /*ASSIGN GLOBAL VALUE TO THE OBJECT */
        window._panel = panel_object;
    }
    ($)
);