/*CREATE VARIABLES HTML , TIMES (USE IN QUESTION-ANSWERS FUNCTION )*/

var html, times;

/*ALL ARRAYS FOR "Live Third Party Verified Results!"*/
position = ['CALL', 'PUT'];
asset = ['USD/CHF', 'GBP/USD', 'CHF/JPY', 'EUR/USD', 'NZD/USD', 'USD/CAD', 'EUR/JPY', 'EUR/CHF', 'EUR/GBP', 'NZD/USD', 'GBP/CHF'];
profit = 0;
win = 0;
lost = 0;
names = ['Max', 'Janice', 'Emery', 'George', 'James', 'Edwin', 'Mary', 'James', 'Ronald', 'Robert', 'Dagmar', 'Manuel', 'Michael', 'Cora', 'Francisco', 'Mary', 'Robin', 'Inez', 'Leon', 'Leann', 'Kelly', 'Iris', 'Andreas', 'Elizabeth', 'Susan', 'Charles', 'Maurice', 'Susan', 'Rhonda', 'Kathleen', 'Russell', 'Lonnie', 'Phoebe', 'Carlos', 'Nancy', 'Matthew', 'Mildred', 'Hermine', 'Karlene', 'Pamela', 'David', 'Holly', 'Juanita', 'Jeffery', 'Mark', 'Kelsey', 'Julia', 'Richard', 'Thomas', 'Harold', 'Mohammed', 'Grace', 'Steven', 'Jules', 'Melanie', 'Claudia', 'Jessie', 'Judy', 'Frances', 'William', 'Denise', 'Mark', 'Shane', 'Lisa', 'Jo', 'Terry', 'George', 'Ronald', 'Sheena', 'Wilbert', 'Harold', 'Don', 'Samuel', 'Jose', 'Kenneth', 'Suzanne', 'Tiffany', 'David', 'Alma', 'John', 'James', 'Arturo', 'Jessica', 'Janet', 'Jeanine', 'Allyson', 'Lorene', 'Terry', 'Stacy', 'Benjamin', 'Daniel', 'Daniel', 'Heather', 'Abraham', 'Maureen', 'Caroline', 'Johnny', 'David', 'Tori', 'Monty', 'Carol', 'Wendy', 'Eve', 'Robert', 'Crystal', 'Ruth', 'Kenny', 'Rachel', 'Gary', 'David', 'Nicholas', 'Jeffery', 'Matthew'];

/*CREATE RANDOM NUMBERS*/
function rand_num(min, max) {
    var number = min + Math.floor(Math.random() * max);
    return number;
}

/*METHOD 2 TO RANDOM NUMBER*/
function rand_num2(min, max) {
    var number = min + Math.floor((Math.random() * max) / 2);
    return number;
}

/*NUMBER COMPARE ? */
function numberCom(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1" + "," + "$2");
    return val;
}

/*CREATE TEMPLATE OF Live Third Party Verified Results!*/
function mkChanges(times) {

    var number_of_element_on_trade = $("#trades").find("tr").length;

    /*if value inserted then create 11 td in table*/
    if (times == 11) {

        /*loop on this process 10 times*/
        for (i = 1; i < 11; i++) {
            create_random_template_for_trades(number_of_element_on_trade);
        }
    }
    else {
        html = create_random_template_for_trades(number_of_element_on_trade);
        if (number_of_element_on_trade > 11) {
            var array = $("#trades").find("tr");
            html = shuffleArray(array);
        }
        $('#trades').html(html);
    }

    clearInterval(mC);
    mC = setInterval(mkChanges, rand_num(700, 3000));
}

var mC = setInterval(mkChanges, rand_num(700, 3000));
mkChanges(11);

/*CREATE TRADER TEMPLATE STAGE 3-SHUFFLE ARRAY*/
function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

/*CREATE TRADER TEMPLATE - STAGE 2*/
function create_random_template_for_trades(len) {

    //GET THE XPOSITION
    var xposition = position[rand_num(1, 2)];

    /*CHOOSE RANDOM KEY*/
    var xasset = asset[rand_num(0, 10)];


    var payout = rand_num2(200, 800);
    /*ADD RANDOM NUMBER TO PAYOUT*/
    profit += payout;

    /*RANDOM NAME */
    var name = names[rand_num(0, names.length)];

    html = '<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" <!--class="success user-trade"-->>' +
        '<td rv-text="position.optionEndDate" align="center">' +
        '<font style="font-family: \'Cabin\', sans-serif;">' +
        '<span style="color:#1e387b; font-weight:bold; font-size:14px;">' + name + '</span>' +
        ' just won a trade...</font></td>' +
        '<td class="payoutwon" align="center">' +
        '<font style="font-family: \'Cabin\', sans-serif !important; font-size:16px; font-weight:bold">$ ' + numberCom(payout) + '</font>' +
        '</td><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">'
        + getDateTime(rand_num(1, 2)) + '</font></td><td align="center"><span rv-text="position.name">' +
        '<font style="font-family: \'Cabin\', sans-serif;">' + xasset + '</span></font>' +
        '</td></tr>';

    if (len > 11) {
        return html;
    } else {
        $('#trades').append(html);
    }
}

/*GET DATE AND TIME*/
function getDateTime(sec) {

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
}

$(document).ready(function () {

    // $('.q-section').click(function () {
    //     $(this).next().slideToggle()
    //         .parent().siblings().find('.a-section').slideUp();
    // });

// LOAD VIDEO IF SCROLL
//     $(window).on('scroll', function () {
//         if ($('.onscroll_video').length > 0)
//             if (($(window).scrollTop() + 200) > ($('.onscroll_video').offset().top - $('.onscroll_video').parent().height()) && !$('.onscroll_video video').hasClass('on')) {
//                 $('.onscroll_video video').addClass('on').get(0).play();
//                 console.log('.onscroll_video video');
//             }
//     });

    // $(document).on('click', '.fancybox_iframe', function (e) {
    //     e.preventDefault();
    //     $.fancybox({
    //         href: $(this).attr('href'),
    //         type: 'iframe'
    //     });
    // });

    // if ($('#back-to-top').length) {
    //     var scrollTrigger = 100, // px
    //         backToTop = function () {
    //             var scrollTop = $(window).scrollTop();
    //             if (scrollTop > scrollTrigger) {
    //                 $('#back-to-top').addClass('show');
    //             } else {
    //                 $('#back-to-top').removeClass('show');
    //             }
    //         };
    //     backToTop();
    //     $(window).on('scroll', function () {
    //         backToTop();
    //     });
    //     $('#back-to-top').on('click', function (e) {
    //         e.preventDefault();
    //         $('html,body').animate({
    //             scrollTop: 0
    //         }, 700);
    //     });
    // }
});


/*POPUP THE ELEMENT*/
function tbox(showId) {
    $('#hoverbox').show();
    hideall();
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
}

/*HIDE ALL ELEMENTS*/
function closex(elem) {
    $("#hoverbox").hide();
    $('#' + elem).find('iframe,h4').remove();

    hideall();
}

function hideall() {
    $("#tb0").hide();
    $("#tb1").hide();
    $("#tb2").hide();
    $("#tb3").hide();
    $("#tb4").hide();
    $("#tb5").hide();
    $("#tb6").hide();
}

var x = 40;
var w = 100;

function slide() {
    x--;
    $("#scroll>i").attr("style", "background-position:-" + x + "px 0px;");
    if (x == 0)
        x = 40;
}

setInterval(slide, 30);
function mkchange() {
    var t = $("#spots").html();
    t--;
    if (t != 3) {
        $("#spots").html(t);
        w -= 4.55;
        $("#scroll").attr("style", "width:" + w + "%");
    }
}
setInterval(mkchange, 13600);


$('body').on('click', '.left-button', function () {
    console.log($(this).parent().parent().find('.answer'));
    $(this).parent().parent().find('.answer').toggle();
});

(function () {

    /*ADD QUESTION AND ANSWERS*/
    function addQuestionAnswer() {
        var questions = ['What is the Aussie Method?', 'How much money can I make with this software?', 'How long does each trade last??', 'Do I need to use my credit card when I signup?',
            'Does your software work with Mac computers?', 'I don\'t have much free time - Is the Aussie Method really automated?', 'How easy is it to use the software?',
            'What about customer support?'];
        var answers = ['The Aussie Method is a 100% FREE software that will trade on the binary options markets with just 1 click! It\'s fully automated and places the winning trades for you!',
            'To put it in short, there"s no limit. To put it more technically, it really depends on how much money you fund your account with. Most of our members fund their account with' +
            '$300, and make about $800-1000 daily. Those who fund their account with $1,000 or over make over $2,500 per day!', 'Anywhere from a minute to an hour. So you will see your profits right' +
            'away, no more waiting for long periods of time.', 'NO WAY. The Aussie Method App is 100% FREE. You will NOT be asked for your credit card or paypal or bank information when you download the Aussie Method System!' +
            'Once you are in the members area, we will recommend a binary options broker that you can exploit. For this, you\'ll need funds to deposit in order to start making profits. This is YOUR money that you are just depositing to trade with, and you can withdraw it at' + 'any time!',
            'It is a web based application which means it can be used on  Windows, Mac or Linux based  systems! You just need a web browser.', ' You simply click play in the software and it will trade for you! You can walk away from' +
            'your computer, and enjoy your profits! You don\'t have to be anywhere near the software for it to work for you and make you thousands per day!', '<span>VERY EASY!</span> Once you sign up in the members area by' + 'filling in a simple form, the' +
            'software is infront of you, click play, make profits! There is no complicated setup!', 'Our customer support team operates 7 days per week - 24 hours a day. We have email support but more importantly we have a FULL live chat system in the members area with our' +
            'support agents ready to help you at ANY time! 2am? NO PROBLEM!'];

        var qN = $('#frequently-asked-questions .container .row .question_n_answer'),
            html = '';
        for (i = 0; i < questions.length; i++) {
            html += '<div  class="question_answer col-md-12 col-sm-12 align-left">\n    <div class="row question"><div  class=" col-md-12  col-sm-12 col-xs-12 left-button">\n            <img class="pull-left" src="/img/aussie-new/plus-icon.png" alt="plus-icon">\n            <p class="title-question text-left pull-left">' + questions[i] + '</p>\n        </div>\n        <div  class="col-md-12  col-sm-12 col-xs-12 answer">\n            <div class="answer-text text-left">\n' + answers[i] + '<p class="text-left">\n                \n                </p>\n            </div>\n        </div>\n    </div>\n</div>';
        }
        qN.append(html);
    }

})();