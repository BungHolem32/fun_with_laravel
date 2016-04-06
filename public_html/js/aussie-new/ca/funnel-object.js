(function ( $ ) {

    var funnelControll = {
        position : [ 'CALL', 'PUT' ],
        asset    : [ 'USD/CHF', 'GBP/USD', 'CHF/JPY', 'EUR/USD', 'NZD/USD', 'USD/CAD', 'EUR/JPY', 'EUR/CHF', 'EUR/GBP', 'NZD/USD', 'GBP/CHF' ],
        names    : [ 'Max', 'Janice', 'Emery', 'George', 'James', 'Edwin', 'Mary', 'James', 'Ronald', 'Robert', 'Dagmar', 'Manuel', 'Michael', 'Cora', 'Francisco', 'Mary', 'Robin', 'Inez', 'Leon', 'Leann', 'Kelly', 'Iris', 'Andreas', 'Elizabeth', 'Susan', 'Charles', 'Maurice', 'Susan', 'Rhonda', 'Kathleen', 'Russell', 'Lonnie', 'Phoebe', 'Carlos', 'Nancy', 'Matthew', 'Mildred', 'Hermine', 'Karlene', 'Pamela', 'David', 'Holly', 'Juanita', 'Jeffery', 'Mark', 'Kelsey', 'Julia', 'Richard', 'Thomas', 'Harold', 'Mohammed', 'Grace', 'Steven', 'Jules', 'Melanie', 'Claudia', 'Jessie', 'Judy', 'Frances', 'William', 'Denise', 'Mark', 'Shane', 'Lisa', 'Jo', 'Terry', 'George', 'Ronald', 'Sheena', 'Wilbert', 'Harold', 'Don', 'Samuel', 'Jose', 'Kenneth', 'Suzanne', 'Tiffany', 'David', 'Alma', 'John', 'James', 'Arturo', 'Jessica', 'Janet', 'Jeanine', 'Allyson', 'Lorene', 'Terry', 'Stacy', 'Benjamin', 'Daniel', 'Daniel', 'Heather', 'Abraham', 'Maureen', 'Caroline', 'Johnny', 'David', 'Tori', 'Monty', 'Carol', 'Wendy', 'Eve', 'Robert', 'Crystal', 'Ruth', 'Kenny', 'Rachel', 'Gary', 'David', 'Nicholas', 'Jeffery', 'Matthew' ],
        questions: [ 'What is the The Maple Method?', 'How much money can I make with this software?', 'How long does each trade last??', 'Do I need to use my credit card when I signup?',
            'Does your software work with Mac computers?', 'I don\'t have much free time - Is the The Maple Method really automated?', 'How easy is it to use the software?',
            'What about customer support?' ],
        answers  : [ 'The The Maple Method is a 100% FREE software that will trade on the binary options markets with just 1 click! It\'s fully automated and places the winning trades for you!',
            'To put it in short, there\'s no limit. To put it more technically, it really depends on how much money you fund your account with. Most of our members fund their account with ' +
            '$300, and make about $800-1000 daily. Those who fund their account with $1,000 or over make over $2,500 per day!', 'Anywhere from a minute to an hour. So you will see your profits right' +
            'away, no more waiting for long periods of time.', 'NO WAY. The The Maple Method App is 100% FREE. You will NOT be asked for your credit card or paypal or bank information when you download the The Maple Method System!' +
            'Once you are in the members area, we will recommend a binary options broker that you can exploit. For this, you\'ll need funds to deposit in order to start making profits. This is YOUR money that you are just depositing to trade with, and you can withdraw it at' + 'any time!',
            'It is a web based application which means it can be used on  Windows, Mac or Linux based  systems! You just need a web browser.', ' You simply click play in the software and it will trade for you! You can walk away from' +
            'your computer, and enjoy your profits! You don\'t have to be anywhere near the software for it to work for you and make you thousands per day!', '<span>VERY EASY!</span> Once you sign up in the members area by' + 'filling in a simple form, the' +
            'software is infront of you, click play, make profits! There is no complicated setup!', 'Our customer support team operates 7 days per week - 24 hours a day. We have email support but more importantly we have a FULL live chat system in the members area with our' +
            'support agents ready to help you at ANY time! 2am? NO PROBLEM!' ],
        profit   : 0,
        win      : 0,
        lost     : 0,
    };

    /*CREATE DYNAMIC FUNCTIONS */
    Object.defineProperties ( funnelControll, {

        /*LIVE TRADE CREATION MEMEBER AND BASE PANNEL*/
        live_trade: {
            value       : {
                /*INITIALISE THE PROCCESS*/
                init: function ( times ) {
                    var number_of_element_on_trade = $ ( "#trades" ).find ( ".line-trades" ).length;

                    /*IF VALUE INSERTED THEN CREATE 11 TD IN TABLE*/
                    if ( times == 11 ) {

                        /*loop on this process 10 times*/
                        for ( i = 1; i < 11; i++ ) {
                            this.create_random_template_for_trades ( number_of_element_on_trade );
                        }
                        return;
                    }
                    /*ELSE SHUFFLE THE ARRAY */
                    else {
                        html = funnelControll.live_trade.create_random_template_for_trades ( number_of_element_on_trade );

                        /*IF NUMBER OF ELEMENTS BIGER THEN 11 THEN SUFFLE ARRAY*/
                        if ( number_of_element_on_trade > 11 ) {
                            var array = $ ( "#trades" ).find ( ".line-trades" );
                            html      = funnelControll.live_trade.shuffle_array ( array );
                        }
                        $ ( '#trades' ).html ( html );
                    }

                    clearInterval ( mC );
                    mC = setInterval ( funnelControll.live_trade.init, funnelControll.live_trade.get_random_number ( 700, 3000 ) );
                },

                /*CREATE RANDOM TRADE TEMPLATES*/
                create_random_template_for_trades: function ( len ) {

                    //GET THE XPOSITION
                    var xposition = funnelControll.position[ this.get_random_number ( 1, 2 ) ];

                    /*CHOOSE RANDOM KEY*/
                    var xasset = funnelControll.asset[ this.get_random_number ( 0, 10 ) ];

                    var payout = this.get_random_number ( 200, 800, 1 );
                    /*ADD RANDOM NUMBER TO PAYOUT*/
                    funnelControll.profit += payout;

                    /*RANDOM NAME */
                    var name           = funnelControll.names[ this.get_random_number ( 0, funnelControll.names.length ) ];
                    var template_trade = "<div class=\'line-trades col-md-12 col-sm-12 col-xs-12 text-center\' rv-class-success=\"position.status | eq won\" rv-show=\"position.status | not_eq open\" class=\"success\">\n    <div class=\"trade-name col-lg-6 col-md-4 col-sm-4 col-xs-4 trades\" rv-text=\"position.optionEndDate\" ><span class=\'first-word\'>" + name + "</span> just won a trade...</div>\n    <div class=\"trade-profit col-lg-1 col-md-2 col-sm-2 col-xs-2 trades\">" + this.number_comb ( payout ) + "$</div>\n    <div class=\"trade-time col-lg-3 col-md-3 col-sm-3 col-xs-3 trades\">" + this.get_date_time ( this.get_random_number ( 1, 10 ) ) + "</div>\n    <div class=\"trade-currency col-lg-2 col-md-3 col-sm-3 col-xs-3 trades\">" + xasset + "</div>\n</div>";


                    if ( len > 11 ) {
                        return template_trade;
                    } else {
                        $ ( '#trades' ).append ( template_trade );
                    }
                },

                /*SHUFFLE ARRAY METHOD */
                shuffle_array: function ( array ) {
                    for ( var i = array.length - 1; i > 0; i-- ) {
                        var j      = Math.floor ( Math.random () * (i + 1) );
                        var temp   = array[ i ];
                        array[ i ] = array[ j ];
                        array[ j ] = temp;
                    }
                    return array;
                },

                /*GET THE DATE AND TIME */
                get_date_time: function ( sec ) {
                    var now    = new Date ( Date.now () - (sec * 1000) );
                    //return now.getDate();
                    var year   = now.getFullYear ();
                    var month  = now.getMonth () + 1;
                    var day    = now.getDate ();
                    var hour   = now.getHours ();
                    var minute = now.getMinutes ();
                    var second = now.getSeconds ();

                    if ( month.toString ().length == 1 ) {
                        var month = '0' + month;
                    }
                    if ( day.toString ().length == 1 ) {
                        var day = '0' + day;
                    }
                    if ( hour.toString ().length == 1 ) {
                        var hour = '0' + hour;
                    }
                    if ( minute.toString ().length == 1 ) {
                        var minute = '0' + minute;
                    }
                    if ( second.toString ().length == 1 ) {
                        var second = '0' + second;
                    }
                    var dateTime = year + '/' + month + '/' + day + ' ' + hour + ':' + minute + ':' + second;
                    return dateTime;
                },

                /*CREATE RANDOM NUMBER */
                get_random_number: function ( min, max, method ) {
                    var number;
                    if ( method == 1 ) {
                        number = min + Math.floor ( (Math.random () * max) / 2 );
                    } else {
                        number = min + Math.floor ( Math.random () * max );
                    }
                    return number;
                },
                /*CREATE  NUMBER COMBINATION*/
                number_comb      : function ( val ) {
                    while ( /(\d+)(\d{3})/.test ( val.toString () ) ) val = val.toString ().replace ( /(\d+)(\d{3})/, "$1" + "," + "$2" );
                    return val;
                },
            },
            enumerable  : true,
            configurable: true,
            writable    : true
        },

        /*POPUP TRADE ON MEMBERS */
        popup_trade: {
            value       : {
                init      : function ( showId ) {
                    /*SHOW POPUP*/
                    $ ( '#hoverbox' ).show ();

                    /*HIDE ALL POPUP*/
                    $ ( '[id^="tb"]' ).hide ();

                    var data    = [ '<h4 align="center"><strong class="grey">Average Profit Per Hour: ',
                            '</strong></h4>',
                            '<iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>' ],
                        profit  = {
                            tb0: "$3,760",
                            tb1: "$1,350",
                            tb2: "$2,140",
                            tb3: "$1,700"
                        },

                        content = data[ 0 ] + profit[ showId ] + data[ 1 ];
                    $ ( '#' + showId ).find ( 'h4' ).remove ();
                    $ ( '#' + showId )
                        .prepend ( content )
                        .append ( data[ 2 ] )
                        .promise ()
                        .done ( function () {
                            setTimeout ( function () {
                                $ ( '#' + showId ).show ();
                            }, 600 );

                        } );
                },
                /*HIDE ALL ELEMENTS IN MEMBER PAGE*/
                hide_trade: function ( elem ) {
                    $ ( "#hoverbox" ).hide ();
                    if ( elem ) {
                        $ ( '#' + elem ).find ( 'iframe,h4' ).remove ();
                    }
                    $ ( '[id^="tb"]' ).hide ();
                },
            },
            enumerable  : true,
            configurable: true,
            writable    : true
        },

        /*ADD QUESTION ANSWER */
        add_question_answer: {
            value       : function () {
                var qN   = $ ( '#frequently-asked-questions .container .row .question_n_answer' ),
                    html = '';
                for ( i = 0; i < funnelControll.questions.length; i++ ) {
                    html += '<div  class="question_answer col-md-12 col-sm-12 align-left">\n    <div class="row question"><div  class=" col-md-12  col-sm-12 col-xs-12 left-button">\n            <img class="pull-left plus-icon" src="/img/aussie-new/plus-icon.png" alt="plus-icon" >\n            <p class="title-question text-left pull-left">' + funnelControll.questions[ i ] + '</p>\n        </div>\n        <div  class="col-md-12  col-sm-12 col-xs-12 answer">\n            <div class="answer-text text-left">\n' + funnelControll.answers[ i ] + '<p class="text-left">\n                \n                </p>\n            </div>\n        </div>\n    </div>\n</div>';
                }
                qN.append ( html );
            }
            ,
            enumerable  : true,
            configurable: true,
            writable    : true
        }
        ,
        /*CHANGE PIC BY WIDTH */
        change_pic_by_width: {
            value       : function () {
                var width    = $ ( window ).width ();
                var elements = $ ( '.dynamic-width-change' );
                var image    = null;
                if ( width < 900 ) {
                    $ ( elements ).each ( function ( i, el ) {
                        var img = $ ( el ).attr ( 'mobile-src' );
                        $ ( el ).attr ( 'src', img );

                        $ ( '#jake-pertu' ).find ( '.fancybox' ).removeClass ().removeAttr ( 'href' );
                    } );

                }else{
                    $ ( elements ).each ( function ( i, el ) {
                        img = $ ( el ).attr ( 'desktop-src' );
                        $ ( el ).attr ( 'src', img );
                    } );
                }

                var element = $('.dynamic-width-change-1200');
                if(width<1200){
                    var img = $ ( element ).attr ( 'mobile-src' );
                    $ ( element ).attr ( 'src', img );
                }else{
                    var img = $ ( element ).attr ( 'desktop-src' );
                    $ ( element ).attr ( 'src', img );
                }
            }

            ,
            enumerable  : true,
            configurable: true,
            writable    : true
        }
        ,
        /*SCROLL TO TOP BUTTON*/
        back_to_top_button : {
            value       : function () {
                if ( $ ( '#back-to-top' ).length ) {
                    var scrollTrigger = 100, // px
                        backToTop     = function () {
                            var scrollTop = $ ( window ).scrollTop ();
                            if ( scrollTop > scrollTrigger ) {
                                $ ( '#back-to-top' ).addClass ( 'show' );
                            } else {
                                $ ( '#back-to-top' ).removeClass ( 'show' );
                            }
                        };
                    backToTop ();
                    $ ( window ).on ( 'scroll', function () {
                        backToTop ();
                    } );
                    $ ( '#back-to-top' ).on ( 'click', function ( e ) {
                        e.preventDefault ();
                        $ ( 'html,body' ).animate ( {
                            scrollTop: 0
                        }, 700 );
                    } );
                }
            }
            ,
            enumerable  : true,
            configurable: true,
            writable    : true
        }
        ,
        /*ON SCROLL EVENT*/
        on_scroll_event    : {
            value       : function () {
                $ ( window ).on ( 'scroll', function () {
                    if ( $ ( '.onscroll_video' ).length > 0 )
                        if ( ($ ( window ).scrollTop () + 200) > ($ ( '.onscroll_video' ).offset ().top - $ ( '.onscroll_video' ).parent ().height ()) && !$ ( '.onscroll_video video' ).hasClass ( 'on' ) ) {
                            $ ( '.onscroll_video video' ).addClass ( 'on' ).get ( 0 ).play ();
                        }
                } )
            },
            enumerable  : true,
            configurable: true,
            writable    : true,

        }
        ,
        /*FANCY BOX TRIGGER A REF*/
        fancy_box          : {
            value       : function () {
                $ ().ready ( function () {
                    $ ( "a.fancybox" ).fancybox ();
                } );

                $ ( document ).on ( 'click', '.fancybox_iframe', function ( e ) {
                    e.preventDefault ();
                    $.fancybox ( {
                        href: $ ( this ).attr ( 'href' ),
                        type: 'iframe'
                    } );
                } )
            }
            ,
            enumerable  : true,
            configurable: true,
            writable    : true
        }
        ,
        /*AUTO LOAD MESSAGE */
        loading            : {
            value       : function () {
                var loading        = 1;
                var loadingTimeOut = 1000;
                var loadingMsg     = '<div class="loading"><img src="/img/aussie-new/loadingBL2.gif" alt=""><div class="loading-text"> Registration is in progress.. </div></div>';
            },
            enumerable  : true,
            configurable: true,
            writable    : true
        },

        /*REMOVE CSS MEMBERS */
        remove_form_css_members: {
            value       : function () {
                $ ().ready ( function () {

                } )
            },
            enumerable  : true,
            configurable: true,
            writable    : true
        },

        /*TWEETER AND MESSAGE */
        tweeter_n_facebook_tempalte: {
            value       : {
                nm           : [ "Harvey", "Christopher", "David", "Morgan", "Jason", "Travis", "Charlie", "Robert", "Henry", "Kieran", "Charles", "Joseph", "Ellis", "Billy", "Andrew", "Johnny", "George", "Sebastian", "Cameron", "Tory", "Joel", "Adam", "Bryce", "Dwayne", "Vincent", "Leon", "Aidan", "Aidan", "David", "Jacob", "Ben", "Alex", "Enrique", "Dennis", "Nathan", "Charles", "Robert", "Alfie", "Dominic", "Leon", "John", "Daniel", "Charles", "Romeo", "Noah", "Anthony", "James", "Mohammed", "Louis", "Joseph", "Ellis", "Kai", "Jay", "Noah", "Lewis", "Anthony", "Jamie", "Elliot", "Ronald", "Troy", "Reece", "Richard", "Joel", "Callum", "Jack", "Richard", "Nicholas", "Cameron", "Harry", "William", "Lyle", "Frank", "Norman", "Anthony", "Morgan", "Geoffrey", "Alejandro", "Zak", "Anthony", "Kieran", "Ross", "Paul", "Sam", "Richard", "Michael", "Roger", "Charles", "Reece", "Brandon", "Robert", "Luca", "Harrison", "Ryan", "Taylor", "Frank", "Larry", "Billy", "Sam", "Finlay", "Zara", "Georgia", "Sylvie", "Kiera", "Margaret", "Patria", "Ava", "Diane", "Skye", "Helen", "Jennifer", "Isabella", "Faith", "Jessica", "Penny", "Rebecca", "Summer", "Tamara", "Tamika", "Magdalene", "Wendy", "Genevieve", "Stephanie", "Erin", "Abby", "Ann", "Abbie", "Leigh", "Shanna", "Tilly", "Laura", "Mary", "Paula", "Isabel", "Ella", "Tatiana", "Mary", "Tegan", "Cynthia", "Abigail", "Lauren", "Laura", "Katherine", "Naomi", "Barbara", "Melisa", "Pamela", "Leeann", "Jodie", "Terri", "Caitlin", "Roberta", "Daisy", "Molly", "Frieda", "Louise", "Elizabeth", "Stella", "Billie", "Gracie", "Sienna", "Katie", "Mildred", "Kayleigh", "Christy", "Kiera", "Yun", "Courtney", "Tegan", "Sheila", "Ray", "Lydia", "Mamie", "Keira", "Matilda", "Sonya", "Ava", "Cerys", "Eleanor", "Grace", "Jodie", "Sharon", "Elva", "Eleanor", "Freya", "Bessie", "Sofia", "Amelie", "Brenda", "Poppy", "Tegan", "Sienna", "Leah", "Antoinette", "Zoe" ],
                data         : [ "Wow this might sound cheesy but I LOVE you guys <b class='p-nickname'>The Maple Method</b> the ONLY system u need for making money online makemoney The Maple Method awesome",
                    "How long until the money hits my account from my broker account? <b class='p-nickname'>The Maple Method</b> Just withdrawn 5 figures 5figureprofits profits awesome",
                    "This is like printing money...For Real Take it off the market <b class='p-nickname'>The Maple Method</b> dont want others getting their hands on this selfish",
                    "Celebrating another profitable day using the <b class='p-nickname'>The Maple Method</b> not had a losing day yet",
                    "Brilliant stuff, u guys are the bomb <b class='p-nickname'>The Maple Method</b> First trade today and just made $389.11 profit moreprofits The Maple Method",
                    "Awesome system, made over $2000 in my first 2 hours using the <b class='p-nickname'>The Maple Method</b> system",
                    "Thank You Thank You Thank You <b class='p-nickname'>The Maple Method</b>",
                    "Holy crap, this is amazing, I've made $7,891.32 on my very first day using the verified trader system <b class='p-nickname'>The Maple Method</b> system binary amazing",
                    "<b class='p-nickname'>The Maple Method</b> Sup guys, super sick system u got here",
                    "Deposited $250 <b class='p-nickname'>The Maple Method</b> with the verified trader system now my account sits at over $30k in just a week Lovethis millionairestatus",
                    "At last a legit binary system <b class='p-nickname'>The Maple Method</b>",
                    "Can't thank you guys enough <b class='p-nickname'>The Maple Method</b> been scammed so many times before but this really is the real deal",
                    "Thanks to <b class='p-nickname'>The Maple Method</b> for finally making a binary system that really works amazing makemoney",
                    "<b class='p-nickname'>The Maple Method</b> Already up over $3800 and the day is still young",
                    "Just made $868.44 in a single trade <b class='p-nickname'>The Maple Method</b>",
                    "<b class='p-nickname'>The Maple Method</b> Just made $918.88 in 34 minutes",
                    "what is happening?? My account now sits at $23,891.44 I only deposited $300 4 days ago, this is insane <b class='p-nickname'>The Maple Method</b>",
                    "Thanks support for solving my small problem, looking forward to making lots of cash with this cash thanks The Maple Method support <b class='p-nickname'>The Maple Method</b>",
                    "WTF.... Thank You This thing is awesome <b class='p-nickname'>The Maple Method</b>" ],
                images1      : [ "1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg", "13.jpg", "14.jpg", "15.jpg", "16.jpg", "17.jpg", "18.jpg", "19.jpg", "20.jpg", "21.jpg", "22.jpg", "23.jpg", "24.jpg", "25.jpg", "26.jpg", "27.jpg", "28.jpg", "29.jpg", "30.jpg", "31.jpg", "32.jpg", "33.jpg", "34.jpg", "35.jpg", "36.jpg", "37.jpg", "38.jpg", "39.jpg", "40.jpg", "41.jpg", "42.jpg", "43.jpg", "44.jpg", "45.jpg", "46.jpg", "47.jpg", "48.jpg", "49.jpg", "50.jpg", "51.jpg", "52.jpg", "53.jpg", "54.jpg", "55.jpg", "56.jpg", "57.jpg", "58.jpg", "59.jpg", "60.jpg", "61.jpg", "62.jpg", "63.jpg", "64.jpg", "65.jpg", "66.jpg", "67.jpg", "68.jpg", "69.jpg", "70.jpg", "71.jpg", "72.jpg", "73.jpg", "74.jpg", "75.jpg", "76.jpg", "77.jpg", "78.jpg", "79.jpg", "80.jpg", "81.jpg", "82.jpg", "83.jpg", "84.jpg", "85.jpg", "86.jpg", "87.jpg", "88.jpg", "89.jpg", "90.jpg", "91.jpg", "92.jpg", "93.jpg", "94.jpg", "95.jpg", "96.jpg", "97.jpg", "98.jpg" ],
                images2      : [ "1(1).jpg", "2(1).jpg", "3(1).jpg", "4(1).jpg", "5(1).jpg", "6(1).jpg", "7(1).jpg", "8(1).jpg", "9(1).jpg", "10(1).jpg", "11(1).jpg", "12(1).jpg", "13(1).jpg", "14(1).jpg", "15(1).jpg", "16(1).jpg", "17(1).jpg", "18(1).jpg", "19(1).jpg", "20(1).jpg", "21(1).jpg", "22(1).jpg", "23(1).jpg", "24(1).jpg", "25(1).jpg", "26(1).jpg", "27(1).jpg", "28(1).jpg", "29(1).jpg", "30(1).jpg", "31(1).jpg", "32(1).jpg", "33(1).jpg", "34(1).jpg", "35(1).jpg", "36(1).jpg", "37(1).jpg", "38(1).jpg", "39(1).jpg", "40(1).jpg", "41(1).jpg", "42(1).jpg", "43(1).jpg", "44(1).jpg", "45(1).jpg", "46(1).jpg", "47(1).jpg", "48(1).jpg", "49(1).jpg", "50(1).jpg", "51(1).jpg", "52(1).jpg", "53(1).jpg", "54(1).jpg", "55(1).jpg", "56(1).jpg", "57(1).jpg", "58(1).jpg", "59(1).jpg", "60(1).jpg", "61(1).jpg", "62(1).jpg", "63(1).jpg", "64(1).jpg", "65(1).jpg", "66(1).jpg", "67(1).jpg", "68(1).jpg", "69(1).jpg", "70(1).jpg", "71(1).jpg", "72(1).jpg", "73(1).jpg", "74(1).jpg", "75(1).jpg", "76(1).jpg", "77(1).jpg", "78(1).jpg", "79(1).jpg", "80(1).jpg", "81(1).jpg", "82(1).jpg", "83(1).jpg", "84(1).jpg", "85(1).jpg", "86(1).jpg", "87(1).jpg", "88(1).jpg", "89(1).jpg", "90(1).jpg", "91(1).jpg", "92(1).jpg", "93(1).jpg", "94(1).jpg", "95(1).jpg" ],
                cnt          : 1,
                num          : null,
                html         : '',
                time_twt     : 0,
                time_facebook: 0,

                /*START THE FUNCTION*/
                init: function ( elementID, name, sort_name, times, display ) {

                    /*CREATE VARIABLE*/
                    var limit,
                        added = cookie = null;


                    /*ADD TEMPLATES IN LOOP OF THE NUMBER OF TIMES IN THE VARIABLE 'TIMES'*/
                    for ( i = 0; i < times; i++ ) {

                        /*1-ASSIGN VARIABLE */
                        funnelControll.tweeter_n_facebook_tempalte.assign_vals ();
                        if ( i == 0 ) {
                            this.html = '';
                        }

                        /*2-BUILD DYNAMIC TEMPLATE*/
                        this.html += funnelControll.tweeter_n_facebook_tempalte.create_tpl ( elementID, name, sort_name, display );
                    }

                    // /*CHECK IF THE TEMPLATE CREATED*/
                    if ( this.html != null ) {

                        /*APPEND ELEMENT TO BODY*/
                        $ ( elementID ).html ( this.html );

                        /*GET THE LENGTH OF THE ELEMENT*/
                        limit = funnelControll.tweeter_n_facebook_tempalte.check_length ( "." + name + "-message" );

                        /*CHECK IF THE ELEMENT PASS THE LIMIT*/
                        if ( limit > 4 ) {

                            $ ( "." + name + "-message" ).last ().remove ();
                        }
                        funnelControll.tweeter_n_facebook_tempalte.update_time ( "#" + name + "-tab" );
                    }
                },

                /*ASSIGN VARIABLES*/
                assign_vals: function ( elementID ) {
                    var images;
                    if ( elementID == "tweets" ) {
                        images = this.images2;
                    }
                    else {
                        images = this.images1;
                    }

                    this.counter  = funnelControll.live_trade.get_random_number ( 0, images.length - 2 ) == 95 ? 2 : funnelControll.live_trade.get_random_number ( 0, images.length - 2 );
                    this.dc       = funnelControll.live_trade.get_random_number ( 0, this.data.length - 2 );
                    this.oldtime  = new Date ();
                    this.old_time = this.oldtime.getSeconds ();
                    return this;
                },

                /*CREATE THE TPL */
                create_tpl: function ( elementID, element_name, sort_name, display ) {
                    // var time;

                    if ( element_name == 'tweets' ) {
                        // time = this.time_twt +=30;
                        images  = this.images2;
                        display = 'none';
                        cls     = [ "col-md-8 col-sm-8 col-xs-12", 'col-md-8', 'pull-right', "col-md-6 col-sm-5  col-xs-4", "col-md-5 col-sm-4 col-xs-5" ]

                    } else {
                        // time = this.time_facebook +=30;
                        images = this.images1;
                        display:'block';
                        cls = [ "col-md-3 col-sm-3 col-xs-3", '', '' ];

                    }
                    var ht = "<div class=\'" + element_name + "-message\'>\n    <div " +
                        "class=\"" + sort_name + "-img-name-time head\">\n    " +
                        "<div class=\'" + sort_name + "-img col-md-3 col-sm-2 col-xs-2 pull-left\'>\n        " +
                        "<img class=\'" + sort_name + "-human-image img-responsive\' id='" + this.counter + "' src=\"/img/aussie-new/social/fw/" + images[ this.counter ] + "\" alt=\"\">\n    " +
                        "</div>\n        <div class=\'" + sort_name + "-name-n-time " + cls[ 0 ] + " text-left pull-left\'>\n        " +
                        "<h4 class=\'" + sort_name + "-name " + cls[ 1 ] + " " + cls[ 3 ] + " bold\'>" + this.nm[ this.counter ] + "</h4>\n        " +
                        "<h5 class='time-min " + cls[ 4 ] + " " + cls[ 2 ] + "' ></h5> " +
                        "</div>\n\n    </div>\n" +
                        "<div class=\"bottom\">\n    " +
                        "<p class=\"content text-left col-md-12 col-sm-12 col-xs-12\"> " + this.data[ this.dc ] + "<span" +
                        "class=\"bold\"></span>\n        </p>\n    " +
                        "<div class=\'" + sort_name + "-tab col-md-12 col-sm-12 col-xs-12 pull-left text-left\' style=\'display:" + display + "\'>Like <span class=\'dash\'>-</span> Comment\n            <span class=\'dash\'>-</span> Share" +
                        "</div>\n    </div>\n</div>";

                    this.cnt++;
                    return ht;
                },

                /*CHECK LENGTH*/
                check_length: function ( elementID, array ) {
                    var limit  = null;
                    var length = $ ( elementID ).length;
                    if ( length > 4 ) {
                        $ ( elementID ).last ().remove ();
                    }
                    return length;
                },

                /*APPEND NEW ELEMENT ON INTERVAL*/
                appendElement: function ( element_id ) {
                    var new_html = funnelControll.tweeter_n_facebook_tempalte.assign_vals ().create_tpl ( "#" + element_id[ 0 ] + "-tab", element_id[ 0 ], element_id[ 1 ] );
                    $ ( "#" + element_id[ 0 ] + "-tab" ).prepend ( new_html );

                    funnelControll.tweeter_n_facebook_tempalte.update_time ( "#" + element_id[ 0 ] + "-tab" );
                    var limit = funnelControll.tweeter_n_facebook_tempalte.check_length ( "." + element_id[ 0 ] + "-message" );

                },

                /*UPDATE THE TIME FOR ALL THE MESSAGES */
                update_time: function ( elementID ) {
                    var min = -1;
                    $ ( $ ( elementID ).find ( '.time-min' ) ).each ( function ( i, el ) {
                        min += 2;
                        $ ( el ).text ( min + "min ago" );
                    } )
                }
            },
            enumerable  : true,
            configurable: true,
            writable    : true,
        },

        /*CHANGE THE DEFAULT VALUE OF THE PREFIX FIELD IN MEMBER PAGE */
        update_input_prefix: {
            value: function () {
                if ( '#prefix' ) {

                    $ ( '#prefix' )
                        .on ( 'focus', function () {
                            $ ( '#prefix' ).val ( '+972' );
                        } )
                        .attr ( 'placeholder', '+972' );

                }
            }
        }
    } );


    /*ASSIGN GLOBAL VARIABLE FOR THE FUNCTION*/
    window._funnel = funnelControll;

    /*==================================================LAUNCH ALL FUNCTIONS========================================= */

    /*1-CHANGE PIC ON RESIZE*/
    $ ( window ).resize ( function () {
        funnelControll.change_pic_by_width ( );
    } );

    /*INIT THE RESIZE FUNCTION ON LOAD*/
    funnelControll.change_pic_by_width ( );

    /*2-CREATE TEMPLATE ANSWER QUESTION*/
    funnelControll.add_question_answer ();

    /*3-ON CLICK CLOSE AND OPEN  ANSWER*/
    $ ( 'body' ).on ( 'click', '.left-button', function () {
        $ ( this ).parent ().parent ().find ( '.answer-text' ).slideToggle ();
    } );

    /*4-BACK TO TOP ELEMENT*/
    funnelControll.back_to_top_button ();

    /*5-ON SCROLL EVENT */
    funnelControll.on_scroll_event ();

    /*6-FANCY BOX*/
    funnelControll.fancy_box ();

    /*7-CREATE 11 LIVE TRADE TRS*/
    funnelControll.live_trade.init ( 11 );

    /*8 SHUFFLE THE ARRAY*/
    var mC = setInterval ( funnelControll.live_trade.init, funnelControll.live_trade.get_random_number ( 700, 10000 ) );
    funnelControll.live_trade.init ();

    /*9 LOADING IN PROCCESS*/
    funnelControll.loading ();

    /*10 RUN THE TEMPLATE FOR TWEETER AND FACEBOOK FRO THE FIRST TIME*/
    funnelControll.tweeter_n_facebook_tempalte.init ( '#facebook-tab', 'facebook', 'fb', 4 );
    funnelControll.tweeter_n_facebook_tempalte.init ( '#tweets-tab', 'tweets', 'twt', 4, 'none' );

    /*ADD NEW MASSAGE EACH 30 SEC AND REFRESH THE NEW TIME */
    setInterval ( function () {
        funnelControll.tweeter_n_facebook_tempalte.appendElement ( [ 'facebook', 'fb' ] );
        funnelControll.tweeter_n_facebook_tempalte.appendElement ( [ 'tweets', 'twt' ] );

    }, 30000 );

    /*11 = CHANGE THE VALUE OF THE PREFIX INPUT IN MEMBER PAGE*/
    funnelControll.update_input_prefix ();


    $ ( '.first-page #video_n_form' ).find ( 'video.video' ).addClass ( 'col-md-7 pull-left' ).attr ( 'id', 'video_part' ).css ( {
        "border" : "9px solid #1E387B",
        "padding": "0"
    } );
    $ ( '.second-page #video_n_form' ).find ( 'video.video' ).addClass ( 'col-lg-8 col-md-8' ).attr ( 'id', 'video_part' ).css ( {
        "border" : "9px solid #1E387B",
        "padding": "0"
    } );
}) ( $ );


/**
 * Created by Ilan Vachtel on 26/03/2016.
 */
