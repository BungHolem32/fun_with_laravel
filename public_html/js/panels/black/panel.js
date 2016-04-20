$(document).ready(function () {

    /*create socket variable that updates */
    // var _socket;
/*
    /!*ON AJAX REFRESH DO THE FOLLOWING *!/
    $(window).on('ajax-refresh', function () {

        /!*make ajax call to get all the info from spot options *!/
        callAjax("/ajax/refresh", null, function (res) {

            /!*check if there no errors in the call and if not  *!/
            if (res.err === 0) {

                /!*remove from the elements the loading animation*!/
                $('.getLoading').removeClass('on');

                /!*set the new balance of the user (from the database in the accounts details) *!/
                $('.balance').html(res.customer.currencySign + ' ' + res.customer.accountBalance);

                /!*if the account balance is lower then 25$*!/
                if (res.customer.accountBalance < 25) {

                    /!*if there isn't class hidden ref *!/
                    if (!$('.modal-deposit').hasClass('hidden-ref')) {

                        /!*add class display block to show the modal deposit *!/
                        $('.modal-deposit').css({'display': 'block'}).addClass('in hidden-ref');

                        /!*append the modal-backdrop fade in and the classes modal-open and bg-gray to show the modal for deposit*!/
                        $('body').append('<div class="modal-backdrop fade in"></div>').addClass('modal-open bggray');
                    }
                }

                /!*ELSE (IF THERE'S AN ERROR)*!/
                else {

                    /!*remove class hidden-ref*!/
                    $('.modal-deposit').removeClass('hidden-ref');
                }

                /!*IF THE BALANCE LESS THEN 100 AND BIGGER THEN 25$*!/
                if (res.customer.accountBalance < 100) {

                    /!*add the class .low-alert*!/
                    $('.low-alert').fadeIn();
                }
                /!*ELSE
                 HIDE THE LOW-ALERT THEN THE BALANCE BIGGER THEN 100*!/
                else {
                    /!*hide the alert*!/
                    $('.low-alert').hide();
                }

                /!*call the method load_positions and at the end get the asset_list*!/
                asset_list = load_positions(res.positions);

                /!*REFRESH THE SOCKET LIST EACH ITERATION (Update only the socket)*!/
                socketRefresh(asset_list);
            }

            /!*IF THERE'S AN ERROR *!/
            else {

                /!*if there's a response.refresh is true*!/
                if (res.refresh)

                /!*reload the page*!/
                    window.location.reload(true);


                else
                /!*alert the error message*!/
                    alert(res.errs.errors[0]);
            }

            /!*before sending add the class on *!/
        }, function () {

            /!*before send add class on to the loading (to show the animation logo)*!/
            $('.getLoading').addClass('on');
        });

    });*/

    // /*CALL AJAX FUNCTION (GET THE ARGUMENTS URL ,DATA, cbSuccss(before-send) and cbBefore*/
    // function callAjax(url, data, cbSuccess, cbBefore) {
    //
    //     /*THE HEADER THAT WE PASS WITH TOKEN */
    //     $.ajax({
    //
    //         /*add the header with token from the header (for secure reasons)*/
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         type: "POST",
    //         url: url,
    //         dataType: 'json',
    //         data: data,
    //         beforeSend: cbBefore,
    //         success: function (res) {
    //             cbSuccess && cbSuccess(res)
    //         },
    //         error: function (err, msg) {
    //             console.log(err, msg);
    //         }
    //     });
    // }

    // /*LOAD POSITIONS IN THE TABLES */
    // function load_positions(positions) {
    //
    //     /*create two variables*/
    //     var row, table_to_insert;
    //     var open_table = prepare_table('rb-options-open-trade');
    //     var history_table = prepare_table('rb-options-history');
    //
    //     /*create empty array*/
    //     var asset_list = [];
    //
    //     /*ITERATE OVER ALL THE POSITIONS*/
    //     $.each(positions, function (i, position) {
    //
    //             /*IF ID WITH POSITION IS FOUND*/
    //             if ($('#position-' + position.id).length) {
    //
    //                 /*remove class pending from it*/
    //                 $('#position-' + position.id).removeClass('pending');
    //                 return;
    //             }
    //
    //             /*amount date variable*/
    //             position['amount'] = position['amount'].replace(/(\.\d{2})0+$/, '$1');
    //
    //             /*CREATE NEW ROW WITH THE ATTRIBUTE ID POSITION WITH THE CURRENT POSITION ID AND ADD CLASS 'STATUS AND POSITION PLACE'*/
    //             if (position.status == 'open') {
    //
    //                 /*set the row and body  to (open-trade)*/
    //                 row = open_table['table_row'];
    //                 table_to_insert = open_table['table_body'];
    //             }
    //             else {
    //
    //                 /*set the row and body  to (history-trade)*/
    //                 row = history_table['table_row'];
    //                 table_to_insert = history_table['table_body'];
    //             }
    //
    //             /*clone the row with new id of the specific position id + add classes status (win or lose) and the position (put or pull)*/
    //             var new_row = $(row).clone().attr('id', 'position-' + position.id).addClass(position.status + ' ' + position.position);
    //
    //             /*add the value of the asset id to the asset variable */
    //             var assetId = 'asset_' + position['assetId'];
    //
    //             /*add the new asset to array of all the assets*/
    //             asset_list.push(assetId);
    //
    //             /*find in the new row the current rate td and add class to it with the asset-id*/
    //             new_row.find('.td-assets').addClass(assetId);
    //
    //             /*ITERATE OVER ALL THE ELEMENTS AND SIGN THE NEW DATA*/
    //             $.each(position, function (j, data) {
    //
    //                 /*add to the new arrow the updated text from the server*/
    //                 new_row.find('.td-' + j).text(data);
    //
    //                 /*IF THERE'S SOME KEYS  AMOUNT AND PROFIT*/
    //                 if (j == 'amount' || j == 'profit') {
    //
    //                     /*change there color to green*/
    //                     new_row.find('.td-' + j).text(data).prepend('$').addClass('text-success');
    //                 }
    //             });
    //
    //             /*append to the table if open pend to the open table if not to the history table */
    //             table_to_insert.append(new_row);
    //
    //             /*update the color of the text upon situation*/
    //             change_color_text(new_row);
    //         }
    //     );
    //
    //     /*IF THERE'S A PENDING CLASSES*/
    //     if ($('tr.pending').length) {
    //
    //         /*(it meant they didn't update so remove the id from them)*/
    //         $('tr.pending').attr('id', '').remove();
    //     }
    //
    //     /*return the asset_list for the socket.io usage*/
    //     return asset_list;
    // }
    //
    // /*PREPARE THE TABLES ROW AND BODY SELECTORS*/
    // function prepare_table(tableSelector) {
    //
    //     /*create variable for the two tables*/
    //     var table = $('.' + tableSelector + ' table tbody');
    //
    //     /*add class pending and id to all the trs*/
    //     $('.table-tr-content', table).addClass('pending').parents('.' + tableSelector).attr('id', tableSelector + '-table');
    //
    //     /*create row with the structure of the row*/
    //     var table_row = $('.' + tableSelector + ' .table-tr-content').html();
    //
    //     /*add the class wrapper to the table to fit the table*/
    //     table_row = "<tr class='table-tr-content'>" + table_row + "</tr>";
    //
    //     /*insert the tables props into object with 2 keys*/
    //     var tables = {table_body: table, table_row: table_row};
    //
    //     /*return table*/
    //     return tables;
    // }
    //
    // /*SOCKET REFRESH FOR THE CURRENT RATE*/
    // function socketRefresh(asset_ids) {
    //
    //     var rate;
    //
    //     /*IF THE SOCKET IS DEFINED*/
    //     if (_socket !== undefined) {
    //
    //         /*IF THERE ISN'T DEFERENCE BETWEEN THE ASSETS_ID AND THE SOCKETS.IDS*/
    //         if (!_.difference(asset_ids, socket.ids))
    //             return;
    //         //socket.disconnect();
    //     }
    //
    //     /*the connection config*/
    //     var _socket = io.connect('//sst-super-c-nl.spotoption.com/');
    //
    //     /*socket id*/
    //     _socket.ids = _.uniq(asset_ids);
    //
    //     var ids = _socket.ids;
    //
    //     /*on connect do the following*/
    //     _socket.on('connect', function () {
    //
    //         /*register add the new ids (of the users)*/
    //         _socket.emit('add', ids);
    //     });
    //
    //     /*on socket update do the following...*/
    //     _socket.on('update', function (full_data) {
    //
    //         /*iterate the full date*/
    //         $.each(full_data, function (i, data) {
    //
    //             /*run over the all properties and update the new one*/
    //             $.each($("." + i), function (j, el) {
    //
    //                 /*get the row of the specific asset_id */
    //                 var row = $(el).parents('.table-tr-content');
    //
    //
    //                 /*CHECK IF THE OPEN TABLE WAS CHOSEN*/
    //                 if (row.parents('#rb-options-open-trade-table').length > 0) {
    //
    //                     /*change the info from number to  string*/
    //                     rate = parseFloat(data.rate);
    //
    //                     /*CHECK IF THE HISTORY TABLE WAS CHOSEN*/
    //                 } else {
    //                     rate = parseFloat(row.find('.td-endRate').text());
    //                     console.log(rate);
    //                 }
    //
    //                 /*get the html of the specific person*/
    //                 var base = parseFloat(row.find('.td-entryRate').text());
    //
    //                 /*change the html after round to cents from dollar*/
    //                 var change = rate - base;
    //
    //                 /*update the value of the  specific element*/
    //                 $(".rate", el).html(data.rate);
    //
    //                 /*remove the class from  the row */
    //                 row.removeClass("up down");
    //
    //                 /*CHECK IF THERE WAS CHANGE IN THE RATE FOR GOOD OR BAD ... */
    //                 if (change) {
    //                     row.addClass((change > 0) ? "up" : "down");
    //                 }
    //
    //                 /*change the css of the text in the table */
    //                 change_color_text(row);
    //
    //             });
    //         });
    //     });
    // }
    //
    // function change_color_text(row) {
    //
    //     /*CHECK IF THERE'S AN END-RATE CLASS IN THE ROW (IT MEANT YOU'RE INSIDE THE HISTORY TRADE)*/
    //     if (row.find('.td-endRate').length > 0) {
    //
    //         /*store the first and end rates */
    //         var start_rate = row.find('.td-entryRate'),
    //             end_rate = row.find('.td-endRate'),
    //
    //         /*check the difference between them*/
    //             change = parseFloat(start_rate.text()) - parseFloat(end_rate.text());
    //
    //         /*if the change less then zero it meant the second is bigger then the first soo there was a profit*/
    //         if ((change < 0)) {
    //
    //             /*change the color to green */
    //             end_rate.addClass('text-success').removeClass('text-danger');
    //
    //             /*change the color to red*/
    //         } else {
    //             end_rate.removeClass('text-success').addClass('text-danger');
    //         }
    //     }
    //
    //     /*IF THE RATE WAS UP*/
    //     if (row.hasClass('up'))
    //     /*the rate is increased so the text color changes to green*/
    //         $(row.find('.td-endRate,.rate')).removeClass('text-danger').addClass('text-success');
    //
    //     /*IF THE RATE WAS DOWN*/
    //     if (row.hasClass('down'))
    //
    //     /*so the rate is decreased so the text  color changes to  red*/
    //         $(row.find('.td-endRate,.rate')).removeClass('text-success').addClass('text-danger');
    //
    //     /*IF THE USER  WON*/
    //     if (row.find('.td-status').text() == 'won')
    //
    //     /*change the text color to green*/
    //         $(row).find('.td-status').removeClass('text-danger').addClass('text-success')
    //
    //
    //     /*IF THE STATUS LOST*/
    //     if (row.find('.td-status').text() == 'lost')
    //
    //     /*change the text color to red*/
    //         $(row.find('.td-status')).removeClass('text-success').addClass('text-danger');
    //
    //     /*ELSE IF THE STATUS IS TIE OR CANCELED*/
    //     if (row.find('.td-status').text() == 'tie' || row.find('.td-status').text() == 'canceled')
    //
    //     /*remove text color and change it to white (the default one)*/
    //         $(row.find('.td-status')).removeClass('text-success').removeClass('text-danger');
    // }
    
    // /*TRIGGER THE AJAX-REFRESH FUNCTION*/
    // $(window).trigger('ajax-refresh');
    //
    // /*RUN EVERY 30 SECOND THE AJAX REFRESH CALL*/
    // setInterval(function () {
    //     $(window).trigger('ajax-refresh')
    // }, 30000);
})