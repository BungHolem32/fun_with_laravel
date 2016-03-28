(function () {

    var funnelControll = {
        position: ['CALL', 'PUT'],
        asset: ['USD/CHF', 'GBP/USD', 'CHF/JPY', 'EUR/USD', 'NZD/USD', 'USD/CAD', 'EUR/JPY', 'EUR/CHF', 'EUR/GBP', 'NZD/USD', 'GBP/CHF'],
        names: ['Max', 'Janice', 'Emery', 'George', 'James', 'Edwin', 'Mary', 'James', 'Ronald', 'Robert', 'Dagmar', 'Manuel', 'Michael', 'Cora', 'Francisco', 'Mary', 'Robin', 'Inez', 'Leon', 'Leann', 'Kelly', 'Iris', 'Andreas', 'Elizabeth', 'Susan', 'Charles', 'Maurice', 'Susan', 'Rhonda', 'Kathleen', 'Russell', 'Lonnie', 'Phoebe', 'Carlos', 'Nancy', 'Matthew', 'Mildred', 'Hermine', 'Karlene', 'Pamela', 'David', 'Holly', 'Juanita', 'Jeffery', 'Mark', 'Kelsey', 'Julia', 'Richard', 'Thomas', 'Harold', 'Mohammed', 'Grace', 'Steven', 'Jules', 'Melanie', 'Claudia', 'Jessie', 'Judy', 'Frances', 'William', 'Denise', 'Mark', 'Shane', 'Lisa', 'Jo', 'Terry', 'George', 'Ronald', 'Sheena', 'Wilbert', 'Harold', 'Don', 'Samuel', 'Jose', 'Kenneth', 'Suzanne', 'Tiffany', 'David', 'Alma', 'John', 'James', 'Arturo', 'Jessica', 'Janet', 'Jeanine', 'Allyson', 'Lorene', 'Terry', 'Stacy', 'Benjamin', 'Daniel', 'Daniel', 'Heather', 'Abraham', 'Maureen', 'Caroline', 'Johnny', 'David', 'Tori', 'Monty', 'Carol', 'Wendy', 'Eve', 'Robert', 'Crystal', 'Ruth', 'Kenny', 'Rachel', 'Gary', 'David', 'Nicholas', 'Jeffery', 'Matthew'],
        questions: ['What is the Aussie Method?', 'How much money can I make with this software?', 'How long does each trade last??', 'Do I need to use my credit card when I signup?',
            'Does your software work with Mac computers?', 'I don\'t have much free time - Is the Aussie Method really automated?', 'How easy is it to use the software?',
            'What about customer support?'],
        answers: ['The Aussie Method is a 100% FREE software that will trade on the binary options markets with just 1 click! It\'s fully automated and places the winning trades for you!',
            'To put it in short, there\'s no limit. To put it more technically, it really depends on how much money you fund your account with. Most of our members fund their account with ' +
            '$300, and make about $800-1000 daily. Those who fund their account with $1,000 or over make over $2,500 per day!', 'Anywhere from a minute to an hour. So you will see your profits right' +
            'away, no more waiting for long periods of time.', 'NO WAY. The Aussie Method App is 100% FREE. You will NOT be asked for your credit card or paypal or bank information when you download the Aussie Method System!' +
            'Once you are in the members area, we will recommend a binary options broker that you can exploit. For this, you\'ll need funds to deposit in order to start making profits. This is YOUR money that you are just depositing to trade with, and you can withdraw it at' + 'any time!',
            'It is a web based application which means it can be used on  Windows, Mac or Linux based  systems! You just need a web browser.', ' You simply click play in the software and it will trade for you! You can walk away from' +
            'your computer, and enjoy your profits! You don\'t have to be anywhere near the software for it to work for you and make you thousands per day!', '<span>VERY EASY!</span> Once you sign up in the members area by' + 'filling in a simple form, the' +
            'software is infront of you, click play, make profits! There is no complicated setup!', 'Our customer support team operates 7 days per week - 24 hours a day. We have email support but more importantly we have a FULL live chat system in the members area with our' +
            'support agents ready to help you at ANY time! 2am? NO PROBLEM!'],
        profit: 0,
        win: 0,
        lost: 0,
    };

    /*CREATE DYNAMIC FUNCTIONS */
    Object.defineProperties(funnelControll, {

        /*LIVE TRADE CREATION MEMEBER AND BASE PANNEL*/
        live_trade: {
            value: {
                /*INITIALISE THE PROCCESS*/
                init: function (times) {
                    var number_of_element_on_trade = $("#trades").find(".line-trades").length;

                    /*IF VALUE INSERTED THEN CREATE 11 TD IN TABLE*/
                    if (times == 11) {

                        /*loop on this process 10 times*/
                        for (i = 1; i < 11; i++) {
                            this.create_random_template_for_trades(number_of_element_on_trade);
                        }
                        return;
                    }
                    /*ELSE SHUFFLE THE ARRAY */
                    else {
                        html = funnelControll.live_trade.create_random_template_for_trades(number_of_element_on_trade);

                        /*IF NUMBER OF ELEMENTS BIGER THEN 11 THEN SUFFLE ARRAY*/
                        if (number_of_element_on_trade > 11) {
                            var array = $("#trades").find(".line-trades");
                            html = funnelControll.live_trade.shuffle_array(array);
                        }
                        $('#trades').html(html);
                    }

                    clearInterval(mC);
                    mC = setInterval(funnelControll.live_trade.init, funnelControll.live_trade.get_random_number(700, 3000));
                },
                create_random_template_for_trades: function (len) {

                    //GET THE XPOSITION
                    var xposition = funnelControll.position[this.get_random_number(1, 2)];

                    /*CHOOSE RANDOM KEY*/
                    var xasset = funnelControll.asset[this.get_random_number(0, 10)];

                    var payout = this.get_random_number(200, 800, 1);
                    /*ADD RANDOM NUMBER TO PAYOUT*/
                    funnelControll.profit += payout;

                    /*RANDOM NAME */
                    var name = funnelControll.names[this.get_random_number(0, funnelControll.names.length)];
                    var template_trade   = "<div class=\'line-trades col-md-12 col-sm-12 col-xs-12 text-center\'>\n    <div class=\"trade-name col-lg-4 col-md-4 col-sm-4 col-xs-4 trades\">" + name + "</div>\n    <div class=\"trade-profit col-lg-2 col-md-2 col-sm-2 col-xs-2 trades\">" + this.number_comb(payout) + "</div>\n    <div class=\"trade-time col-lg-3 col-md-3 col-sm-3 col-xs-3 trades\">" + this.get_date_time(this.get_random_number(1, 10)) + "</div>\n    <div class=\"trade-currency col-lg-3 col-md-3 col-sm-3 col-xs-3 trades\">"+xasset+"</div>\n</div>";


                    if (len > 11) {
                        return template_trade;
                    } else {
                        $('#trades').append(template_trade);
                    }
                },


                shuffle_array: function (array) {
                    for (var i = array.length - 1; i > 0; i--) {
                        var j = Math.floor(Math.random() * (i + 1));
                        var temp = array[i];
                        array[i] = array[j];
                        array[j] = temp;
                    }
                    return array;
                },
                get_date_time: function (sec) {
                    var now = new Date(Date.now() - (sec * 1000));
                    //return now.getDate();
                    var year = now.getFullYear();
                    var month = now.getMonth() + 1;
                    var day = now.getDate();
                    var hour = now.getHours();
                    var minute = now.getMinutes();
                    var second = now.getSeconds();

                    if (month.toString().length == 1) {
                        var month = '0' + month;
                    }
                    if (day.toString().length == 1) {
                        var day = '0' + day;
                    }
                    if (hour.toString().length == 1) {
                        var hour = '0' + hour;
                    }
                    if (minute.toString().length == 1) {
                        var minute = '0' + minute;
                    }
                    if (second.toString().length == 1) {
                        var second = '0' + second;
                    }
                    var dateTime = year + '/' + month + '/' + day + ' ' + hour + ':' + minute + ':' + second;
                    return dateTime;
                },

                /*CREATE RANDOM NUMBER */
                get_random_number: function (min, max, method) {
                    var number;
                    if (method == 1) {
                        number = min + Math.floor((Math.random() * max) / 2);
                    } else {
                        number = min + Math.floor(Math.random() * max);
                    }
                    return number;
                },
                /*CREATE  NUMBER COMBINATION*/
                number_comb: function (val) {
                    while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1" + "," + "$2");
                    return val;
                },
            },
            enumerable: true,
            configurable: true,
            writable: true
        },

        /*POPUP TRADE ON MEMBERS */
        popup_trade: {
            value: {
                init: function (showId) {
                    /*SHOW POPUP*/
                    $('#hoverbox').show();

                    /*HIDE ALL POPUP*/
                    $('[id^="tb"]').hide();

                    var data = ['<h4 align="center"><strong class="grey">Average Profit Per Hour: ',
                            '</strong></h4>',
                            '<iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>'],
                        profit = {
                            tb0: "$3,760",
                            tb1: "$1,350",
                            tb2: "$2,140",
                            tb3: "$1,700"
                        },

                        content = data[0] + profit[showId] + data[1];
                    $('#' + showId).find('h4').remove();
                    $('#' + showId)
                        .prepend(content)
                        .append(data[2])
                        .promise()
                        .done(function () {
                            setTimeout(function () {
                                $('#' + showId).show();
                            }, 600);

                        });
                },
                /*HIDE ALL ELEMENTS IN MEMBER PAGE*/
                hide_trade: function (elem) {
                    $("#hoverbox").hide();
                    if (elem) {
                        $('#' + elem).find('iframe,h4').remove();
                    }
                    $('[id^="tb"]').hide();
                },
            },
            enumerable: true,
            configurable: true,
            writable: true
        },

        /*ADD QUESTION ANSWER */
        add_question_answer: {
            value: function () {
                var qN = $('#frequently-asked-questions .container .row .question_n_answer'),
                    html = '';
                for (i = 0; i < funnelControll.questions.length; i++) {
                    html += '<div  class="question_answer col-md-12 col-sm-12 align-left">\n    <div class="row question"><div  class=" col-md-12  col-sm-12 col-xs-12 left-button">\n            <img class="pull-left" src="/img/aussie-new/plus-icon.png" alt="plus-icon">\n            <p class="title-question text-left pull-left">' + funnelControll.questions[i] + '</p>\n        </div>\n        <div  class="col-md-12  col-sm-12 col-xs-12 answer">\n            <div class="answer-text text-left">\n' + funnelControll.answers[i] + '<p class="text-left">\n                \n                </p>\n            </div>\n        </div>\n    </div>\n</div>';
                }
                qN.append(html);
            }
            ,
            enumerable: true,
            configurable: true,
            writable: true
        }
        ,
        /*CHANGE PIC BY WIDTH */
        change_pic_by_width: {
            value: function (mobile, desktop) {
                var width = $(window).width();
                if (width < 990) {

                    $('.iphone-pic').attr('src', mobile[0]);
                    $('.facebook-pic').attr('src', mobile[1]);
                    $('.trust-pic').attr('src', mobile[2]);
                    $('.mobile-steps').find('.hidden').removeClass('hidden');
                    $('#3-steps').find('.desktop-steps').addClass('hidden');
                }
                if (width > 990) {
                    $('.iphone-pic').attr('src', desktop[0]);
                    $('.facebook-pic').attr('src', desktop[1]);
                    $('.trust-pic').attr('src', desktop[2]);
                    $('.mobile-steps').find('.mobile-steps').addClass('hidden');
                    $('#3-steps').find('.desktop-steps').removeClass('hidden');
                }
            }
            ,
            enumerable: true,
            configurable: true,
            writable: true
        }
        ,
        /*SCROLL TO TOP BUTTON*/
        back_to_top_button: {
            value: function () {
                if ($('#back-to-top').length) {
                    var scrollTrigger = 100, // px
                        backToTop = function () {
                            var scrollTop = $(window).scrollTop();
                            if (scrollTop > scrollTrigger) {
                                $('#back-to-top').addClass('show');
                            } else {
                                $('#back-to-top').removeClass('show');
                            }
                        };
                    backToTop();
                    $(window).on('scroll', function () {
                        backToTop();
                    });
                    $('#back-to-top').on('click', function (e) {
                        e.preventDefault();
                        $('html,body').animate({
                            scrollTop: 0
                        }, 700);
                    });
                }
            }
            ,
            enumerable: true,
            configurable: true,
            writable: true
        }
        ,
        /*ON SCROLL EVENT*/
        on_scroll_event: {
            value: function () {
                $(window).on('scroll', function () {
                    if ($('.onscroll_video').length > 0)
                        if (($(window).scrollTop() + 200) > ($('.onscroll_video').offset().top - $('.onscroll_video').parent().height()) && !$('.onscroll_video video').hasClass('on')) {
                            $('.onscroll_video video').addClass('on').get(0).play();
                            console.log('.onscroll_video video');
                        }
                })
            }
            ,
            enumerable: true,
            configurable: true,
            writable: true,

        }
        ,
        /*FANCY BOX TRIGGER A REF*/
        fancy_box: {
            value: function () {
                $().ready(function () {
                    $("a.fancybox").fancybox();
                });

                $(document).on('click', '.fancybox_iframe', function (e) {
                    e.preventDefault();
                    $.fancybox({
                        href: $(this).attr('href'),
                        type: 'iframe'
                    });
                })
            }
            ,
            enumerable: true,
            configurable: true,
            writable: true
        }
        ,
        /*AUTO LOAD MESSAGE */
        loading: {
            value: function () {
                var loading = 1;
                var loadingTimeOut = 1000;
                var loadingMsg = '<div class="loading"><img src="/img/aussie-new/loadingBL2.gif" alt=""><div class="loading-text"> Registration is in progress.. </div></div>';
            },
            enumerable: true,
            configurable: true,
            writable: true
        },

        /*REMOVE CSS MEMBERS */
        remove_form_css_members: {
            value: function () {
                $().ready(function () {

                })
            },
            enumerable: true,
            configurable: true,
            writable: true
        }
    });

    /*ASSIGN GLOBAL VARIABLE FOR THE FUNCTION*/
    window._funnel = funnelControll;

    /*==================================================LAUNCH ALL FUNCTIONS========================================= */

    /*MOBILE AND DESKTOP PICS*/
    var desktop = ['/img/aussie-new/iphone.png', '/img/aussie-new/face.png', '/img/aussie-new/trust.png', 'url("/img/aussie-new/buttonfree.png") no-repeat center'],
        mobile = ['/img/aussie-new/iphone-mobile.png', '/img/aussie-new/face-mobile.png', '/img/aussie-new/trust-mobile.png', 'url("/img/aussie-new/buttonfree_mobile.png") no-repeat center'];

    /*1-CHANGE PIC ON RESIZE*/
    $(window).resize(function () {
        funnelControll.change_pic_by_width(mobile, desktop);
    });
    funnelControll.change_pic_by_width(mobile, desktop);

    /*2-CREATE TEMPLATE ANSWER QUESTION*/
    funnelControll.add_question_answer();

    /*3-ON CLICK CLOSE AND OPEN  ANSWER*/
    $('body').on('click', '.left-button', function () {
        // console.log($(this).parent().parent().find('.answer'));
        $(this).parent().parent().find('.answer-text').slideToggle();
    });

    /*4-BACK TO TOP ELEMENT*/
    funnelControll.back_to_top_button();

    /*5-ON SCROLL EVENT */
    funnelControll.on_scroll_event();

    /*6-FANCY BOX*/
    funnelControll.fancy_box();

    /*7-CREATE 11 LIVE TRADE TRS*/
    funnelControll.live_trade.init(11);

    /*8 SHUFFLE THE ARRAY*/
    var mC = setInterval(funnelControll.live_trade.init, funnelControll.live_trade.get_random_number(700, 3000));

    /*9 LOADING IN PROCCESS*/
    funnelControll.loading();

    ///*10 REMOVE ALL */
    funnelControll.remove_form_css_members();

    $('#prefix').attr({'placeholder': '+972'});
}())
;
/**
 * Created by Ilan Vachtel on 26/03/2016.
 */
