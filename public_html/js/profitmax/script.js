function rand(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function copies(){
    var el = $("#copies");
    var left = parseInt($(el).html());

    left = left > 5 ? left - rand(1,3) : left - rand(-2,2);
    if(left < 2) {
        $(el).html(1);
    }
    else $(el).html(left);

    /** do new value to element watchers **/
    $("#watchers").html(rand(701, 1998));

    setTimeout('copies()', rand(6000,9000));
}

var names = ["Klaudia", "Tim", "Ralph", "Stefanie", "Maik", "Silke", "Johanna", "Alexander", "Katharina", "Klaus", "Martin"];//  "Amy" ,   , "Laura"  , "Jeffrey"  , "Crystal"  , "Jamie"  , "Mark"  , "Erica"  , "Scott"  , "Jose"  , "Samuel", "Boris"
var cf = 0;

function winners() {
    var name = $("#name");
    var moneyHolder = $("#money");
    var face = $("#member_img");
    var money = parseInt($(moneyHolder).html());
    $(moneyHolder).html(rand(45,400)+'.'+rand(50,99));
    var n = rand(1,names.length-1);
    var lf = cf;
    if(jQuery.inArray( n, [3,5,6,7,8] )){
        while(cf == lf)
            lf = [3,5,6,7,8][rand(0,5)];
        cf = lf;
    }
    if(jQuery.inArray( n, [3,5,6,7,8] )){
        while(cf == lf)
            lf = [1,2,4,9,10][rand(0,5)];
        cf = lf;
    }
    $(name).html(names[n]+' '+"ABCDEFGHIJKLMNOPQRSTUVWXYZ".substr(rand(0,25),1)+'.');
    //cf = 
    face.attr('src', '/img/profitmax/people'+n+'.png');
    setTimeout('winners()', rand(7000,10000));
}


yesyoucan   = 1;
onsubmitfix = 1;

$('body').on('keyup','#email-pop', function () {
    var email = $(this).val();
    $('#email').val(email);
});

$('body').on('click','#submit-pop', function () {
    $('form').submit();
});

function countDown() {
    if(!$("#secure_countdown").length) return;

    var minutes         = 10;
    var seconds         = 0;
    var centiseconds    = 0;

    var timer = setInterval(function() {
        if(minutes == 0 && seconds == 0 && centiseconds == 0) $('#countdownText').html('<div class="title">Timeout please try again, your spot is not secured anymore.</div>');
        centiseconds -= 9;

        if (centiseconds < 0) {
            centiseconds = 99;
            seconds--;
        }

        if (seconds < 0) {
            seconds = 59;
            minutes--;
        }

        if (minutes < 0) {
            minutes = 0;
            seconds = 0;
            centiseconds = 0;
            clearInterval(timer);
        }

        if ((minutes + "").length < 2) minutes = "0" + minutes;
        if ((seconds + "").length < 2) seconds = "0" + seconds;
        if ((centiseconds + "").length < 2) centiseconds = "0" + centiseconds;
        $("#secure_countdown").html(minutes+':'+seconds+':'+centiseconds);
    }, 90);
}

$(document).ready(function () {
    $('#main-page-form').find('form').addClass('lp_reg_form');
    copies();
    winners();
    countDown();
});

