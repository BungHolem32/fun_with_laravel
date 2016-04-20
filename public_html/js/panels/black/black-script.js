(function ($) {
        var socket;
        var panel_object = {}

        Object.defineProperties(panel_object, {

            /*TOGGLE BUTTON (SWITCH BUTTON IN THE ACTIVATE AUTO TRADING)*/
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

                        /*TRIGGER ON OR OFF THE BUTTON*/
                        $('.toggles').on('click', function () {

                            var btn = $(this).find('.active');

                            /*find the button that have the active class (on or off)*/

                            /*todo-ilan  CHECK WHY WE NEED TO ADD THIS CLASS AND REMOVE IT*/
                            /*.removeClass('btn-danger').addClass('btn-default')*/

                            /*CHECK  THIS BUTTON IS THE  TURN ON BUTTON CALL AJAX TURN-ON */
                            if ($(btn).hasClass('toggle-on')) {
                                panel_object.toggle_switch.turn_on();
                            }
                            if ($(btn).hasClass('toggle-off')) {
                                $('.startTrade').removeClass('btn-success').addClass('btn-default');
                                panel_object.toggle_switch.turn_off();
                            }
                        });

                    },

                    /*TURN ON THE AUTO TRADING*/
                    turn_on: function () {
                        /*TOGGLES ON CLICK*/
                        panel_object.ajax_call("/ajax/turnOn", null, function (res) {
                            console.log(res);
                            if (res.err === 0) {  /*check if there's no error*/

                                $(window).trigger('ajax-refresh');
                                /*run the ajax refresh trigger*/
                                console.log(res.err);
                            }

                            /*IF THERE'S AN ERROR */
                            else if (res.err === 1) {

                                /*if there no money show the form for deposit money*/
                                $('.modal-deposit').css({'display': 'block', 'padding-right': '17px'}).addClass('in');
                                /*show modal page*/
                                $('body').append('<div class="modal-backdrop fade in"></div>').addClass('modal-open');
                                /*turn off the switch*/
                                $('.toggles').toggles(false);
                            }
                        }, function () {
                            /*before get response show the loading animation*/
                            $('.wait-ref').show();
                        });
                    },

                    /*TURN OFF THE AUTO TRADING */
                    turn_off: function () {

                        /*call the ajax turn-off to stop the ajax refresh*/
                        panel_object.ajax_call("/ajax/turnOff", null, function () {

                                /*hide the wait anination after disconnect*/
                                $('.wait-ref').hide();

                                /*add the btn danger to the stop button and add the danger class to the button*/
                                $(btn).addClass('btn-danger').removeClass('btn-default');
                            }

                            /*on wait show the logo animation */
                            , function () {
                                $('.wait-ref').show();
                            });
                    }

                },
                enumerable: true,
                configurable: true
            },

            /*METHOD THAT ACTIVATE THE PUSH PULL NAVBAR ON MOBILE*/
            nav_bar_mobile: {
                value: {

                    /*INITIATE THE METHOD TO TRIGER EVENT CLICK ON THE MENU*/
                    init: function () {
                        /*ON CLICK ON THE ICON-MENU PUSH THE MENU ON AND BODY INSIDE*/
                        $('body').on('click', '.icon-menu', function () {

                            /*pass arguments to the method show or hide the nav on click*/
                            panel_object.nav_bar_mobile.show_or_hide_navbar(null, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile', '.icon-menu', 'active-nav-pushed');
                        });

                        /*ON CLICK AGAIN HIDE THE NAVBAR*/
                        $('body').on('click', '.active-nav-pushed, .navbar-text-mobile', function () {

                            /*and you inside the nav-bar */
                            panel_object.nav_bar_mobile.show_or_hide_navbar(true, '.navbar-mobile', 'push-navbar-mobile', 'body', 'push-body-nav-mobile', '.icon-menu', 'active-nav-pushed');
                        })
                    },

                    /**
                     * @param {boolean} remove - if true the button already open
                     * @param {string} selector1 - id of the first selector = navbar
                     * @param {string} class2 = the class to add to the first selector
                     * @param {string} selector2 - id of the second selector = body
                     * @param {string} class2 = the class to add to the second selector
                     */

                    /*METHOD THAT OPEN AND CLOSE THE NAV BAR BY TRIGGER THE CLICK EVENT*/
                    show_or_hide_navbar: function (remove, selector1, class1, selector2, class2, navbar, class3) {
                        /*add the classes to the body and the navbar to move inside the dom*/
                        $(selector1).addClass(class1);
                        $(selector2).addClass(class2);
                        $(navbar).addClass(class3);

                        /*if the navbar already open close it*/
                        if (remove) {
                            $(selector1).removeClass(class1);
                            $(selector2).removeClass(class2);
                            $(navbar).removeClass(class3);

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

            /*FAQ - QUESTION N ANSWER*/
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

                        /*trigger the icon*/
                        var icon = $(elem).find(':first-child');

                        /*if the answer is hidden change the icon to down */
                        if ($(elem).next().hasClass('hide')) {
                            $(icon).addClass('fa-chevron-circle-right').removeClass('fa-chevron-circle-down');
                        }
                        /* change the icon to right */
                        else {
                            $(icon).removeClass('fa-chevron-circle-right').addClass('fa-chevron-circle-down');
                        }
                    }
                },
                enumerable: true,
                configurable: true,
            },

            /*FORM_VALIDATION AND SENDING */
            form_validation_and_sending: {
                value: function () {
                    /*VALIDATE THE DEPOSIT FORM*/
                    $('.form-deposit').validate({

                        submitHandler: function (form) {

                            /*get all the inputs into query-string*/
                            var data = $('.form-deposit').serialize();

                            /*MAKE AJAX CALL*/
                            $.ajax({

                                /*set the header*/
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                type: "POST",
                                url: "/ajax/deposit",
                                dataType: 'json',
                                data: data,

                                /*TODO before send show the loading form div (check from where i can get it */
                                beforeSend: function () {

                                    /*show 'processing' animation while waiting*/
                                    $('.form-button').text('processing').append(" <i class='fa fa-refresh fa-spin'></i>");

                                },

                                /*ON SUCCESS REMOVE THE MODAL FORM */
                                success: function (res) {

                                    /*check if there's no errors*/
                                    if (res.err === 0) {

                                        /*remove the classes from the body + hide the modal-deposit*/
                                        $('body').removeClass('bggray');
                                        $('.modal-deposit').fadeOut('fast');

                                        /*TODO need to check for thanku modal (createone)?*/
                                        /*pop up thank you modal*/
                                        $('#thanku').fadeIn();
                                        setTimeout(function () {

                                            /*TODO need to check for thanku modal (createone)?*/

                                            /*after 3 seconds fade it out*/
                                            $('#thanku').fadeOut();
                                        }, 3000);

                                        /*then run the ajax refresh method*/
                                        $(window).trigger('ajax-refresh');
                                    }

                                    /*ON ERROR WHEN THE ERROR EQUAL 1*/
                                    else {

                                        /*hide the load form and then alert the error feedback*/
                                        /*TODO loadform need to check if there is form ready to use with*/
                                        $('.form-button').text('get me  started - deposit funds').find('i').remove();
                                        alert(res.errs.error);
                                        //console.log(res);
                                    }
                                },

                                /*CREATE ERROR METHOD THAT PASS THE ERROR TO THE CONSOLE-LOG*/
                                error: function (err) {
                                    console.log(err);
                                }
                            });
                        }
                    })
                },
                enumerable: true,
                configurable: true
            },

            /*SET THE AMOUNT OF THE TRADE*/
            set_amount_of_trade: {
                value: function () {
                    /*TRIGGER THE ON-CLICK EVENT AND UPDATE THE CLASSES AND SET THE RANGE-OF DEPOSIT*/
                    $('.tab-four-buttons .btn').click(function () {

                        /*reset all the buttons for no selection */
                        $('.tab-four-buttons .btn').addClass('btn-default').removeClass('btn-success');

                        /*add the selection to the success list*/
                        $(this).removeClass('btn-default').addClass('btn-success');

                        /*get the amount sum of the button*/
                        var tmp_range = $(this).data('amount').split('-');

                        /*create json with the min-range && max-range of the selection and insert token*/
                        var range = {
                            'min': tmp_range[0],
                            'max': tmp_range[1],
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        };
                        $.post('/ajax/setRange', range);
                    });
                },
                configurable: true,
                enumerable: true
            },

            /*REMOVE SELECTION FROM BUTTON IN THE AMOUNT BUTTONS */
            remove_selection_from_amount_buttons: {
                value: function () {
                    $('body').on('click', '.btn-amount-selected', function () {
                        $('.btn-amount-selected').removeClass('active-btn');
                    })
                }
            },

            /*ON MOBILE HIDE LABELS*/
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

            /*LOGOUT FROM PANEL*/
            logout_from_panel: {
                value: {
                    init: function () {
                        $('.logout').click(function (e) {
                            e.preventDefault();

                            /*call ajax page to logout*/
                            panel_object.logout_from_panel.log_out();
                            return false;
                        });

                    },

                    /*ajax call for logout */
                    log_out: function () {
                        /*call ajax to logout from the panel*/
                        panel_object.ajax_call('/ajaxLogout', {}, function () {

                            /*reload the page*/
                            window.location.reload(true);
                        });
                    }
                }
            },

            ajax_call: {
                /*CALL AJAX FUNCTION (GET THE ARGUMENTS URL ,DATA, cbSuccss(before-send) and cbBefore*/
                value: function (url, data, cbSuccess, cbBefore) {

                    /*THE HEADER THAT WE PASS WITH TOKEN */
                    $.ajax({

                        /*add the header with token from the header (for secure reasons)*/
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: data,
                        beforeSend: cbBefore,
                        success: function (res) {
                            cbSuccess && cbSuccess(res)
                        },
                        error: function (err, msg) {
                            console.log(err, msg);
                        }
                    });
                },
                enumerable: true,
                configurable: true
            },

            dynamic_add_to_rb_options_tables: {
                value: {
                    init: function () {
                        /*ON AJAX REFRESH DO THE FOLLOWING */
                        $(window).on('ajax-refresh', function () {

                            /*make ajax call to get all the info from spot options */
                            panel_object.ajax_call("/ajax/refresh", null, function (res) {

                                /*check if there no errors in the call and if not  */
                                if (res.err === 0) {

                                    /*remove from the elements the loading animation*/
                                    $('.getLoading').removeClass('on');

                                    /*set the new balance of the user (from the database in the accounts details) */
                                    $('.balance').html(res.customer.currencySign + ' ' + res.customer.accountBalance);

                                    /*if the account balance is lower then 25$*/
                                    if (res.customer.accountBalance < 25) {

                                        /*if there isn't class hidden ref */
                                        if (!$('.modal-deposit').hasClass('hidden-ref')) {

                                            /*add class display block to show the modal deposit */
                                            $('.modal-deposit').css({'display': 'block'}).addClass('in hidden-ref');

                                            /*append the modal-backdrop fade in and the classes modal-open and bg-gray to show the modal for deposit*/
                                            $('body').append('<div class="modal-backdrop fade in"></div>').addClass('modal-open bggray');
                                        }
                                    }

                                    /*ELSE (IF THERE'S AN ERROR)*/
                                    else {

                                        /*remove class hidden-ref*/
                                        $('.modal-deposit').removeClass('hidden-ref');
                                    }

                                    /*IF THE BALANCE LESS THEN 100 AND BIGGER THEN 25$*/
                                    if (res.customer.accountBalance < 100) {

                                        /*add the class .low-alert*/
                                        $('.low-alert').fadeIn();
                                    }
                                    /*ELSE
                                     HIDE THE LOW-ALERT THEN THE BALANCE BIGGER THEN 100*/
                                    else {
                                        /*hide the alert*/
                                        $('.low-alert').hide();
                                    }

                                    /*call the method load_positions and at the end get the asset_list*/
                                    asset_list = panel_object.dynamic_add_to_rb_options_tables.load_positions(res.positions, res.customer.currencySign);

                                    /*REFRESH THE SOCKET LIST EACH ITERATION (Update only the socket)*/
                                    panel_object.dynamic_add_to_rb_options_tables.socketRefresh(asset_list);
                                }

                                /*IF THERE'S AN ERROR */
                                else {

                                    /*if there's a response.refresh is true*/
                                    if (res.refresh)

                                    /*reload the page*/
                                        window.location.reload(true);

                                    else
                                    /*alert the error message*/
                                        alert(res.errs.errors[0]);
                                }

                                /*before sending add the class on */
                            }, function () {

                                /*before send add class on to the loading (to show the animation logo)*/
                                $('.getLoading').addClass('on');
                            });

                        });
                    },
                    load_positions: function (positions, currency) {
                        /*create two variables*/
                        var row, table_to_insert;
                        var open_table = panel_object.dynamic_add_to_rb_options_tables.prepare_table('rb-options-open-trade');
                        var history_table = panel_object.dynamic_add_to_rb_options_tables.prepare_table('rb-options-history');

                        /*create empty array*/
                        var asset_list = [];

                        /*ITERATE OVER ALL THE POSITIONS*/
                        $.each(positions, function (i, position) {

                                /*IF ID WITH POSITION IS FOUND*/
                                if ($('#position-' + position.id).length) {

                                    /*remove class pending from it*/
                                    $('#position-' + position.id).removeClass('pending');
                                    return;
                                }

                                /*amount date variable*/
                                position['amount'] = position['amount'].replace(/(\.\d{2})0+$/, '$1');

                                /*CREATE NEW ROW WITH THE ATTRIBUTE ID POSITION WITH THE CURRENT POSITION ID AND ADD CLASS 'STATUS AND POSITION PLACE'*/
                                if (position.status == 'open') {

                                    /*set the row and body  to (open-trade)*/
                                    row = open_table['table_row'];
                                    table_to_insert = open_table['table_body'];
                                }
                                else {

                                    /*set the row and body  to (history-trade)*/
                                    row = history_table['table_row'];
                                    table_to_insert = history_table['table_body'];
                                }

                                /*clone the row with new id of the specific position id + add classes status (win or lose) and the position (put or pull)*/
                                var new_row = $(row).clone().attr('id', 'position-' + position.id).addClass(position.status + ' ' + position.position);

                                /*add the value of the asset id to the asset variable */
                                var assetId = 'asset_' + position['assetId'];

                                /*add the new asset to array of all the assets*/
                                asset_list.push(assetId);

                                /*find in the new row the current rate td and add class to it with the asset-id*/
                                new_row.find('.td-assets').addClass(assetId);

                                var status, amount, profit;


                                /*ITERATE OVER ALL THE ELEMENTS AND SIGN THE NEW DATA*/
                                $.each(position, function (position_name, position_value) {

                                    /*add to the new arrow the updated text from the server*/
                                    new_row.find('.td-' + position_name).text(position_value);


                                    /*update the color of the text upon situation*/
                                    new_row = panel_object.dynamic_add_to_rb_options_tables.change_color_text(new_row, position_name, position_value, currency);
                                });


                                /*append to the table if open pend to the open table if not to the history table */

                                table_to_insert.append(new_row);
                            }
                        );

                        /*IF THERE'S A PENDING CLASSES*/
                        if ($('tr.pending').length) {

                            /*(it meant they didn't update so remove the id from them)*/
                            $('tr.pending').attr('id', '').remove();
                        }

                        /*return the asset_list for the socket.io usage*/
                        return asset_list;
                    },
                    socketRefresh: function (asset_ids) {
                        var rate;

                        /*IF THE SOCKET IS DEFINED*/
                        if (socket !== undefined) {

                            /*IF THERE ISN'T DEFERENCE BETWEEN THE ASSETS_ID AND THE SOCKETS.IDS*/
                            if (!_.difference(asset_ids, socket.ids))
                                return;
                            //socket.disconnect();
                        }

                        /*the connection config*/
                        socket = io.connect('//sst-super-c-nl.spotoption.com/');

                        /*socket id*/
                        socket.ids = _.uniq(asset_ids);

                        var ids = socket.ids;

                        /*on connect do the following*/
                        socket.on('connect', function () {

                            /*register add the new ids (of the users)*/
                            socket.emit('add', ids);
                        });

                        /*on socket update do the following...*/
                        socket.on('update', function (full_data) {

                            /*iterate the full date*/
                            $.each(full_data, function (i, data) {

                                /*run over the all properties and update the new one*/
                                $.each($("." + i), function (j, el) {

                                    /*get the row of the specific asset_id */
                                    var row = $(el).parents('.table-tr-content');


                                    /*CHECK IF THE OPEN TABLE WAS CHOSEN*/
                                    if (row.parents('#rb-options-open-trade-table').length > 0) {

                                        /*change the info from number to  string*/
                                        rate = parseFloat(data.rate);

                                        /*CHECK IF THE HISTORY TABLE WAS CHOSEN*/
                                    } else {
                                        rate = parseFloat(row.find('.td-endRate').text());
                                    }

                                    /*get the html of the specific person*/
                                    var base = parseFloat(row.find('.td-entryRate').text());

                                    /*change the html after round to cents from dollar*/
                                    var change = rate - base;

                                    /*update the value of the  specific element*/
                                    $(".rate", el).html(data.rate);

                                    /*remove the class from  the row */
                                    row.removeClass("up down");

                                    /*CHECK IF THERE WAS CHANGE IN THE RATE FOR GOOD OR BAD ... */
                                    if (change) {
                                        row.addClass((change > 0) ? "up" : "down");
                                    }

                                    /*change the css of the text in the table */
                                    panel_object.dynamic_add_to_rb_options_tables.change_color_text(row);

                                });
                            });
                        });
                    },


                    /*CHANGE THE COLOR OF THE TEXT UPPON VALUE*/
                    change_color_text: function (row, position_name, position_value, currency) {
                        var status, profit;

                        /*CHECK IF THERE WAS PROFIT VALUE */
                        if (position_name == 'profit' && position_value != "" && position_value != undefined) {
                            profit = position_value;
                            status = row.find('.td-status').text();

                            /*STATUS WON*/
                            if (status == 'won') {

                                /*profit get-value*/
                                var amount = row.find('.td-amount').text();

                                /*-----------PROFIT-------------*/
                                /*calculate the profit value*/
                                profit = ((profit / 100) + 1) * amount;

                                /*round the amount*/
                                profit = (Math.ceil(profit * 100)) / 100;

                                /*append the new amount to the dom*/
                                row.find('.td-profit').text(profit).prepend(currency).addClass('text-success').removeClass('text-danger');
                                row.find('.td-amount').prepend(currency).addClass('text-success').removeClass('text-danger');
                                row.find('.td-status').addClass('text-success').removeClass('text-danger')
                            }
                            /*STATUS LOST*/
                            else if (status == 'lost') {
                                profit = 0;
                                row.find('.td-profit').text(profit).removeClass('text-success');
                                row.find('.td-amount,.td-status').removeClass('text-success').addClass('text-danger');
                            }
                            /*STATUS CANCELED TIED*/
                            else if (status == 'open') {
                                row.find('.td-amount').addClass('text-success').prepend(currency);
                            }

                             /*IF THE STATUS IS TIE ON CANCELED*/
                            else {
                                row.find('.td-status').removeClass('text-success').removeClass('text-danger')
                            }
                        }

                        /*CHECK IF THERE'S AN END-RATE CLASS IN THE ROW (IT MEANT YOU'RE INSIDE THE HISTORY TRADE)*/
                        if (row.find('.td-endRate').length > 0) {

                            /*store the first and end rates */
                            var start_rate = row.find('.td-entryRate'),
                                end_rate = row.find('.td-endRate'),

                            /*check the difference between them*/
                                change = parseFloat(start_rate.text()) - parseFloat(end_rate.text());

                            /*if the change less then zero it meant the second is bigger then the first soo there was a profit*/
                            if ((change < 0)) {

                                /*change the color to green */
                                end_rate.addClass('text-success').removeClass('text-danger');

                                /*change the color to red*/
                            } else {
                                end_rate.removeClass('text-success').addClass('text-danger');
                            }
                        }

                        /*IF THE RATE WAS UP*/
                        if (row.hasClass('up'))
                        /*the rate is increased so the text color changes to green*/
                            $(row.find('.td-endRate,.rate')).removeClass('text-danger').addClass('text-success');

                        /*IF THE RATE WAS DOWN*/
                        if (row.hasClass('down'))

                        /*so the rate is decreased so the text  color changes to  red*/
                            $(row.find('.td-endRate,.rate')).removeClass('text-success').addClass('text-danger');

                        return row;

                    },
                    /*PRPRARE THE SELECTION FOR THE TABLE */
                    prepare_table: function (tableSelector) {

                        /*create variable for the two tables*/
                        var table = $('.' + tableSelector + ' table tbody');

                        /*add class pending and id to all the trs*/
                        $('.table-tr-content', table).addClass('pending').parents('.' + tableSelector).attr('id', tableSelector + '-table');

                        /*create row with the structure of the row*/
                        var table_row = $('.' + tableSelector + ' .table-tr-content').html();

                        /*add the class wrapper to the table to fit the table*/
                        table_row = "<tr class='table-tr-content'>" + table_row + "</tr>";

                        /*insert the tables props into object with 2 keys*/
                        var tables = {table_body: table, table_row: table_row};

                        /*return table*/
                        return tables;
                    }
                },
                enumerable: true,
                configurable: true
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
                        inter = setInterval(function () {
                            panel_object.change_color_by_status.loop_on_the_position();
                        }, 30000);
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
                    loop_on_the_position: function () {

                        /*ITTERATE OVER THE POSITIONS AND CHANGE THE ICON*/
                        $('.td-position').each(function (i, el) {
                            var position = $(el).text().toLowerCase();

                            /*CHECK IF THERES ELEMENT FA*/
                            if ($(el).find('.fa').length) {

                                /*CHECK WHAT THE INPUT AND CHANGE THE ARROW*/
                                if (position == ' put') {
                                    $(el).find('.fa').removeClass('fa-arrow-up').addClass('fa-arrow-down');
                                }
                                if (position == ' call') {
                                    $(el).find('.fa').removeClass('fa-arrow-down').addClass('fa-arrow-up');
                                }
                                /*IF NOT ADD IT IN*/
                            } else {

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
            },
            show_welcome_page_on_load: {
                value: function () {
                    $('.navbar-part:first-of-type').find('a').click();
                },
                configurable: true,
                enumerable: true
            }

        })

        /*=============================================================================================================*/
        /*==========================================INITIATE THE METHODS===============================================*/
        /*=============================================================================================================*/

        /*LETS INITIATE THE METHODS */
        /*1-SWITCH ADD ON (TO SHOW THE BUTTON SWITCH ON THE SECOND STEP IN THE HOME PAGE)*/
        panel_object.toggle_switch.init();

        /*2-PUSH AND PULL THE NAV-BAR ON MOBILE*/
        panel_object.nav_bar_mobile.init();

        /*2-2 MAKE THE CHANGES ALSO IN RESIZE WINDOW (PULL THE NAV-BAR OFF WHEN REACH 990PX)*/
        panel_object.nav_bar_mobile.on_resize_change();

        /*3 -  IN THE THIRD STEP OF THE HOME PAGE (TOGGLE SELECTION ON CHANGE) */
        panel_object.remove_selection_from_amount_buttons();

        /*4- SET THE AMOUNT OF THE TRADE*/
        panel_object.set_amount_of_trade();


        /*5 - ON MODAL DEPOSIT TOGGLE LABELS ON RESIZE CHANGING*/
        panel_object.on_mobile_hide_label();

        /*6- ON RESIZE CHANGE THE LABEL APPEARANCE*/
        $(window).resize(function () {
            panel_object.on_mobile_hide_label();
        })

        /*7 - SHOW OR HIDE THE ANSWER ON A CLICK && CHANGE BUTTON PICTURE*/
        panel_object.faq.init();

        /*8 INITIATE THE TRIGGER ON CLICK FOR THE EXIT BUTTON ON THE MODALS */
        panel_object.exit_modal_button();

        /*9  DYNAMIC INSERT TO THE RB-OPTIONS TABLE */
        panel_object.dynamic_add_to_rb_options_tables.init();

        /*9-2*/
        /*TRIGGER THE AJAX-REFRESH FUNCTION*/
        $(window).trigger('ajax-refresh');

        /*9-3*/
        /*RUN EVERY 30 SECOND THE AJAX REFRESH CALL*/
        setInterval(function () {
            $(window).trigger('ajax-refresh');
        }, 30000);

        /*10- LOOP OVER ALL THE ELEMENTS AND CHANGE THERE COLOR*/
        panel_object.change_color_by_status.init();
        setTimeout(panel_object.change_color_by_status.loop_on_the_position, 1700);

        /*11 - FORM VALIDATION AND SENDING*/
        panel_object.form_validation_and_sending();

        /*12 -TRIGGER THE CLICK ON LOGOUT LINK IN THE NAV BAR */
        panel_object.logout_from_panel.init();

        /*13 SHOW WELCOME SCREEN ON LOAD*/
        panel_object.show_welcome_page_on_load();

        /*ASSIGN GLOBAL VALUE TO THE OBJECT */
        window._panel = panel_object;
    }
    ($)
);