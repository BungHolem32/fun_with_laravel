$(document).ready(function() {



    if ($('#Profit').length){
        setInterval(mkChanges,200);
    }

    $(window).trigger('resize');
    $(window).trigger('scroll');

});

$(window).load(function() {
});
$(window).resize(function() {
    scaleTitles();

    calcCounts();

    //if ($(window).width() >= 768) {
    //
    //    if($(window).width() < 1530){
    //        $('#infoscroll').css({'bottom':'15px', 'top':'', 'display':'block'});
    //    }
    //    else $('#infoscroll').css({'top':'15px', 'bottom':'', 'display':'block'});
    //}

});
$(window).scroll( function(){
    calcCounts();
});
function rand_num(min,max) {
    var number = min + Math.floor(Math.random() * max);
    return number;
}
function rand_num2(min,max) {
    var number = min + Math.floor((Math.random() * max)/2);
    return number;
}
function numberCom(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1"+","+"$2");
    return val;
}
var html;
var profit=238957514;
function mkChanges() {
    var p = rand_num(5,15);
    profit+=p;
    document.getElementById("Profit").innerHTML="$"+numberCom(profit)+"!";
}


var mousebottom = 0;
var pu = 1;
setTimeout(function(){pu=1;},5000);

$(document).mousemove(function(e){
    var X = e.pageX;
    var Y = e.pageY;

    //console.log(Y - $(window).scrollTop());
    if(Y-$(window).scrollTop() > 200)
        mousebottom = 1;

    if(Y-$(window).scrollTop()<15 && mousebottom == 1 && pu == 1){
        $('#popup').css('display', 'block');
        mousebottom = 0;
        pu = 0;
    }

    $('a.outyes').click(function() {
        yesyoucan = 0;
        //console.log('1. ' + yesyoucan);
    });
});





var s = 1;
startnum = 49;
var awwa = false;




var ajaxwork = false;
function reloadpage(){
    var currentdata = {};

    ajaxwork = $.ajax({
        url: "./exitpage-body.htm",
        success: function(bdy){
            //if(msg.answer=='ok'){

            $('body').empty();
            $('body').append(bdy);
//console.log(msg);
            //}
        },
        error: function (xhr, ajaxOptions, thrownError) {

        }
    });//.abort()
}

onsubmitfix = 1;

var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);


function scaleTitles(){

    $('.trim_spaces').each(
        function(){
            var el = $(this);
            var target = el.find('.scalable');

            var ratio = 1;

            if (target.width() > el.width()){
                ratio = el.width()/target.width();
            }

            target.css('transform', 'scale('+ratio+')');
            el.height(target.height()*ratio);

        }
    );
}

function rand( min, max ) { // Generate a random integer
    if( max ) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    } else {
        return Math.floor(Math.random() * (min + 1));
    }
}

function calcCounts(){
    var wW = $(window).width(),
        mW = 980,
        cW = $('.count').width(),
        mM = 70;

    if (wW > 1500) {
        var newPos = (wW - mW) / 2 - cW - mM;
        var tPos = $(window).scrollTop();
    } else {
        var newPos = (wW - mW) / 2 - cW + 60;

        if ($(window).scrollTop() < 100){
            var tPos = 100;
        } else {
            var tPos = $(window).scrollTop();
        }

    }

    $('.count.left').css('left', newPos+'px');
    $('.count.right').css('right', newPos+'px');
    $('.count').css('top', tPos+'px');

}