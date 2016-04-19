$(document).ready(function () {

    /*TRIGGER THE AJAX-REFRESH FUNCTION*/
    $(window).trigger('ajax-refresh');

    /*RUN EVERY 30 SECOND THE AJAX REFRESH CALL*/
    setInterval(function () {
        $(window).trigger('ajax-refresh')
    }, 30000);

    /*TOGGLES ON CLICK*/
    $('.toggles').on('click', function () {


        /*FIND THE BUTTON THAT HAVE THE ACTIVE CLASS (ON OR OFF)*/
        var btn = $(this).find('.active');

        /*todo-ilan  CHECK WHY WE NEED TO ADD THIS CLASS AND REMOVE IT*/
        /*.removeClass('btn-danger').addClass('btn-default')*/

        if ($(btn).hasClass('toggle-on')) {
            callAjax("/ajax/turnOn", null, function (res) {
                console.log(res);
                if (res.err === 0) {

                    /*RUN THE AJAX REFRESH FUNCTIONS*/
                    $(window).trigger('ajax-refresh');
                    console.log(res.err);
                }

                /*IF THERE'S AN ERROR */
                else if (res.err === 1) {

                    /*IF THERE NO MONEY SHOW THE FORM FOR DEPOSIT MONEY*/
                    $('.modal-deposit').css({'display': 'block', 'padding-right': '17px'}).addClass('in');
                    $('body').append('<div class="modal-backdrop fade in"></div>').addClass('modal-open');

                    /*TURN OFF THE SWITCH*/
                    $('.toggles').toggles(false);
                }

                /*SHOW THE WAIT ANIMATION*/
            }, function () {
                $('.wait-ref').show();
            });
        }
    });

    /*ON STOP TRADE */
    $('.stopTrade').on('click', function () {

        /*REMOVE THE SUCCESS DESIGN FROM THE BUTTON START AND ADD THE DEFAULT BUTTON*/
        $('.startTrade').removeClass('btn-success').addClass('btn-default');
        var btn = this;

        /*CALL THE AJAX TURNOFF TO STOP THE AJAX REFRESH*/
        callAjax("/ajax/turnOff", null, function () {

                /*HIDE THE WAIT ANINATION AFTER DISCONNECT*/
                $('.wait-ref').hide();

                /*ADD THE BTN DANGER TO THE STOP BUTTON AND ADD THE DANGER CLASS TO THE BUTTON*/
                $(btn).addClass('btn-danger').removeClass('btn-default');
            }

            /*ON WAIT SHOW THE LOGO ANIMATION */
            , function () {
                $('.wait-ref').show();
            });
    });

    /*VALIDATE THE DEPOSIT FORM*/
    $('.form-deposit').validate({

        submitHandler: function (form) {

            var data = $('.form-deposit').serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/ajax/deposit",
                dataType: 'json',
                data: data,

                /*TODO before send show the loading form div (check from where i can get it */
                beforeSend: function () {
                    // $('.form-deposit .loadingForm').show();
                    $('.form-button').text('processing').append(" <i class='fa fa-refresh fa-spin'></i>");

                },

                /*ON SUCCESS REMOVE THE MODAL FORM */
                success: function (res) {

                    if (res.err === 0) {

                        $('body').removeClass('bggray');
                        $('.modal-deposit').fadeOut('fast');

                        /*POP UP THANK YOU MODAL*/
                        /*TODO need to check for thanku modal (createone)?*/
                        $('#thanku').fadeIn();
                        setTimeout(function () {

                            /*AFTER 3 SECONDS FADE IT OUT*/
                            /*TODO need to check for thanku modal (createone)?*/
                            $('#thanku').fadeOut();
                        }, 3000);

                        /*THEN RUN THE AJAX REFRESH METHOD*/
                        $(window).trigger('ajax-refresh');
                    }

                    /*ON ERROR WHEN THE ERROR EQUAL 1*/
                    else {

                        /*HIDE THE LOAD FORM AND THEN ALRERT THE ERROR MESSAGE*/
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
    });


    /*ON CLICK ON THE BUTTONS TO CHANGE THE AMOUNT OF MONEY TO TRADE*/
    $('.tab-four-buttons .btn').click(function () {
        $('.tab-four-buttons .btn').addClass('btn-default').removeClass('btn-success');
        $(this).removeClass('btn-default').addClass('btn-success');
        var tmp_range = $(this).data('amount').split('-');
        var range = {'min': tmp_range[0], 'max': tmp_range[1], '_token': $('meta[name="csrf-token"]').attr('content')};
        $.post('/ajax/setRange', range);
    });

    /*ON CLICK ON THE LOG OUT BUTTON IN THE NAV BAR*/
    $('.logout').click(function (e) {
        e.preventDefault();
        callAjax('/ajaxLogout', {}, function () {
            window.location.reload(true);
        });
        return false;
    });
});

/*ON AJAX REFRESH DO THE FOLLOWING */
$(window).on('ajax-refresh', function () {

    /*MAKE AJAX CALL TO GET ALL THE INFO FROM SPOT OPTIONS */
    callAjax("/ajax/refresh", null, function (res) {

        /*CHECK IF THERE NO ERRORS IN THE CALL AND IF NOT  */
        if (res.err === 0) {

            /*REMOVE FROM THE ELEMENTS THE LOADING ANIMATION*/
            $('.getLoading').removeClass('on');

            /*SET THE NEW BALANCE OF THE USER (FROM THE DATABASE IN THE ACCOUNTS DETAILS) */
            $('.balance').html(res.customer.currencySign + ' ' + res.customer.accountBalance);

            /*IF THE ACCOUNT BALANCE IS LOWER THEN 25$*/
            if (res.customer.accountBalance < 25) {

                /*SHOW THE MODAL DEPOSIT*/

                /*IF THERE ISN'T CLASS HIDDEN REF */
                if (!$('.modal-deposit').hasClass('hidden-ref')) {

                    /*ADD CLASS DISPLAY BLOCK TO SHOW THE MODAL DEPOSIT */
                    $('.modal-deposit').css({'display': 'block'}).addClass('in hidden-ref');

                    /*APPENT THE MODAL-BACKDROP FADE IN AND THE CLASSES MODAL-OPEN AND BGGRAY TO SHOW THE MODAL FOR DEPOSIT*/
                    $('body').append('<div class="modal-backdrop fade in"></div>').addClass('modal-open bggray');
                }
            }

            /*ELSE (IF THERE'S AN ERROR)*/
            else {

                /*REMOVE CLASS HIDDEN-REF*/
                $('.modal-deposit').removeClass('hidden-ref');
            }

            /*IF THE BALANCE LESS THEN 100 AND BIGGER THEN 25$*/
            if (res.customer.accountBalance < 100) {

                /*ADD THE CLASS .low-alert*/
                $('.low-alert').fadeIn();
            }
            /*ELSE
             HIDE THE LOW-ALERT THEN THE BALANCE BIGGER THEN 100*/
            else {
                $('.low-alert').hide();
            }

            /*CALL THE METHOD LOAD_POSITIONS AND AT THE END GET THE ASSET_LIST*/
            asset_list = load_positions(res.positions);

            /*REFERSH THE SOCKET LIST EACH ITERATION */
            socketRefresh(asset_list);
        }

        /*IF THERE'S AN ERROR */
        else {
            /*IF RES.REFRESH IS TRUE*/
            if (res.refresh)
            /*RELOAD THE PAGE*/
                window.location.reload(true);
            /*ALERT THE ERROR MESSAGE*/
            else
                alert(res.errs.errors[0]);
        }

        /*BEFORE SENDING ADD THE CLASS ON */
    }, function () {
        // before send
        $('.getLoading').addClass('on');
    });

});

/*CALL AJAX FUNCTION (GET THE ARGUMENTS URL ,DATA, cbSuccss(before-send) and cbBefore*/
function callAjax(url, data, cbSuccess, cbBefore) {

    /*THE HEADER THAT WE PASS WITH TOKEN */
    $.ajax({
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
}

/*LOAD POSITIONS IN THE TABLES */
function load_positions(positions) {

    /*CREATE VARIABLE FOR THE TWO TABLES*/
    var open_table = $('.rb-options-open-trade table tbody');
    var history_table = $('.rb-options-history table tbody');
    var row, table_to_insert;


    /*ADD CLASS PENDING AND ID TO ALL THE TRS*/
    $('.table-tr-content', open_table).addClass('pending').parents('.rb-options-open-trade').attr('id', 'rb-options-open-trade-table');
    $('.table-tr-content', history_table).addClass('pending').parents('.rb-options-history').attr('id', 'rb-options-history-trade-table');

    /*CREATE ROW WITH THE STRUCTURE OF THE ROW*/
    var rb_open = $('.rb-options-open-trade .table-tr-content').html();
    var rb_history = $('.rb-options-history .table-tr-content').html();

    /*ADD THE CLASS WRAPPER TO THE TABLE TO FIT THE TABLE*/
    rb_open = "<tr class='table-tr-content'>" + rb_open + "</tr>";
    rb_history = "<tr class='table-tr-content'>" + rb_history + "</tr>";

    /*CREATE EMPTY ARRAY*/
    var asset_list = [];

    /*ITERATE OVER ALL THE POSITIONS*/
    $.each(positions, function (i, position) {

            /*IF ID WITH POSITION IS FOUND REMOVE CLASS PENDING FROM IT*/
            if ($('#position-' + position.id).length) {
                $('#position-' + position.id).removeClass('pending');
                return;
            }

            /*AMOUNT DATE VARIABLE*/
            position['amount'] = position['amount'].replace(/(\.\d{2})0+$/, '$1');

            /*CREATE NEW ROW WITH THE ATTRIBUTE ID POSITION WITH THE CURRENT POSITION ID AND ADD CLASS 'STATUS AND POSITION PLACE'*/
            if (position.status == 'open') {
                row = rb_open;
                table_to_insert = open_table;
            }
            else {
                row = rb_history;
                table_to_insert = history_table;
            }


            var new_row = $(row).clone().attr('id', 'position-' + position.id).addClass(position.status + ' ' + position.position);
            /*ADD THE VALUE OF THE ASSET ID TO THE ASSET VARIABLE */
            var assetId = 'asset_' + position['assetId'];

            /*ADD THE NEW ASSET TO ARRAY OF ALL THE ASSETS*/
            asset_list.push(assetId);

            /*FIND IN THE NEW ROW THE CURRENT RATE TD AND ADD CLASS TO IT WITH THE ASSET-ID*/
            new_row.find('.td-assets').addClass(assetId);

            /*ITERATE OVER ALL THE ELEMENTS AND SIGN THE NEW DATA*/
            $.each(position, function (j, data) {
                new_row.find('.td-' + j).text(data);

                if (j == 'amount' || j == 'profit') {
                    new_row.find('.td-' + j).text(data).prepend('$').addClass('text-success');
                }
            });

            /*APPEND TO THE TABLE IF OPEN PEND TO THE OPEN TABLE IF NOT TO THE HISTORY TABLE */

            table_to_insert.append(new_row);
            change_color_text(new_row);
        }
    );

    if ($('tr.pending').length) {
        $('tr.pending').attr('id', '').remove();
    }
    return asset_list;
}


var socket;

/*SOCKET REFRESH FOR THE CURRENT RATE*/
function socketRefresh(asset_ids) {

    var rate;

    /*IF THE SOCKET IS DEFINED*/
    if (socket !== undefined) {
        /*IF THERE ISN'T DEFERENCE BETWEEN THE ASSETS_ID AND THE SOCKETS.IDS*/
        if (!_.difference(asset_ids, socket.ids))
            return;
        //socket.disconnect();
    }

    /*THE CONNECTION CONFIG*/
    var socket = io.connect('//sst-super-c-nl.spotoption.com/');

    /*SOCKET ID*/
    socket.ids = _.uniq(asset_ids);

    var ids = socket.ids;

    /*ON CONNECT DO THE FOLLOWING*/
    socket.on('connect', function () {

        /*REGISTER ADD THE NEW IDS (OF THE USERS)*/
        socket.emit('add', ids);
    });

    /*ON SOCKET UPDATE DO THE FOLLOWING...*/
    socket.on('update', function (full_data) {

        /*ITERATE THE FULL DATE*/
        $.each(full_data, function (i, data) {
            /*RUN OVER THE ALL PROPERTIES AND UPDATE THE NEW ONE*/
            $.each($("." + i), function (j, el) {
                /*GET THE ROW OF THE SPECIFIC ASSET_ID */
                var row = $(el).parents('.table-tr-content');


                /*CHECK IF THE OPEN TABLE WAS CHOSEN*/
                if (row.parents('#rb-options-open-trade-table').length > 0) {

                    /*CHANGE THE INFO FROM NUMBER TO  STRING*/
                    rate = parseFloat(data.rate);

                    /*CHECK IF THE HISTORY TABLE WAS CHOSEN*/
                } else {
                    rate = parseFloat(row.find('.td-endRate').text());
                    console.log(rate);
                }

                /*GET THE HTML OF THE SPECIFIC PERSON*/
                var base = parseFloat(row.find('.td-entryRate').text());

                /*CHANGE THE HTML AFTER ROUND TO CENTS FROM DOLLAR*/
                var change = rate - base;

                /*UPDATE THE VALUE OF THE  SPECIFIC ELEMENT*/
                $(".rate", el).html(data.rate);

                /*REMOVE THE CLASS FROM  THE ROW */
                row.removeClass("up down");

                /*CHECK IF THERE WAS CHANGE IN THE RATE FOR GOOD OR BAD ... */
                if (change) {
                    row.addClass((change > 0) ? "up" : "down");
                }


                /*CHANGE THE CSS OF THE TEXT IN THE TABLE */
                change_color_text(row);

            });
        });
    });
}

function change_color_text(row) {

    if(row.find('.td-endRate').length>0){
        var start_rate = row.find('.td-entryRate')
        var end_rate = row.find('.td-endRate');

        console.log(parseFloat(start_rate.text()));
        console.log(parseFloat(end_rate.text()));
        var change = parseFloat(start_rate.text()) - parseFloat(end_rate.text());

        if((change<0)){
            end_rate.addClass('text-success').removeClass('text-danger');

        }else{
            end_rate.removeClass('text-success').addClass('text-danger');
        }
    }


    /*IF THE RATE WAS UP*/
    if (row.hasClass('up'))
        $(row.find('.td-endRate,.rate')).removeClass('text-danger').addClass('text-success');

    /*IF THE RATE WAS DOWN*/
    if (row.hasClass('down'))
        $(row.find('.td-endRate,.rate')).removeClass('text-success').addClass('text-danger');

    /*IF THE STATUS WON*/
    if (row.find('.td-status').text() == 'won')
        $(row).find('.td-status').removeClass('text-danger').addClass('text-success')


    /*IF THE STATUS LOST*/
    if (row.find('.td-status').text() == 'lost')
        $(row.find('.td-status')).removeClass('text-success').addClass('text-danger');

    /*ELSE IF THE STATUS IS TIE OR CANCELED*/
    if (row.find('.td-status').text() == 'tie' || row.find('.td-status').text() == 'canceled')
        $(row.find('.td-status')).removeClass('text-success').removeClass('text-danger');


}