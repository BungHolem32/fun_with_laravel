var guider = 0;

$('.close').on('click', function () {
    $('body').removeClass('bggray');
    $(this).closest('.modal').removeClass('fade').removeClass('in').fadeOut('fast');
});

$('#welcomeModal .close,#welcomeModal button').on('click', function () {
    $(this).closest('.modal').fadeOut('fast');
    $('video').attr('loop','loop').get('0').pause();

    if(!$('#formDepositModal').hasClass('hidden') && !$('#formDepositModal').hasClass('hidden-on')){
        $('body').addClass('bggray');
        setTimeout(function(){
            $('#formDepositModal').fadeIn();
        },300);
    }
    else{
        $('#formDepositModal').removeClass('hidden');
    }

});

// popups
$('#awelcomeModal').on('click',function(){
    $('#welcomeModal').slideDown();
    $('video').get('0').play();

});

$('#cvv-popover').on('mouseenter',function(){
    $('.popover').animate({'opacity':1},500);
});
$('#cvv-popover').on('mouseleave',function(){
    $('.popover').animate({'opacity':0},500);
});


$('.deposit-btn').on('click', function () {
    $('#formDepositModal').fadeIn();
    $('body').addClass('bggray');
    return false;
});

$('#afaqModal').on('click', function () {
    $('#faqModal').addClass('in').slideDown();
});
$('a[data-toggle=collapse]').on('click',function(){
    $(this).closest('.panel.panel-default').find('.panel-collapse.collapse').toggle();
});

/****** guide popups *******/
var contentWrapper = $('#wrapper').offset().top;
var top =   Math.max(0, (($(window).height() - $('.guider#_1').outerHeight()) / 2) + $(window).scrollTop() - contentWrapper);
var leftbody = $("body").width()/2;
$('.guider#_1').attr('style','left: '+leftbody+'px;top:'+top+'px;display:none');

function changebyOffset(div,getOffset,topFix,leftFix,leftCenter,topCenter){

    var left = $(getOffset).offset().left, top = $(getOffset).offset().top;

    if(topFix === undefined)
        topFix = +0;
    if(leftFix === undefined)
        leftFix = +0;
    if(leftCenter !== undefined)
        left = leftCenter;
    if(topCenter !== undefined)
        top = topCenter;
    console.log(top);

    $(div).attr('style','left: '+(left+leftFix)+'px;top:'+(top+topFix)+'px;display:none');
}

$('.guided-tour-start').on('click',function(){
    $('#guiders_overlay').show();
    guider=1;
    $('.guider#_1').fadeIn();

});

$('.guiders_buttons_container a').on('click',function(){

    changebyOffset('.guider#_2','.deposit-btn',-45);
    changebyOffset('.guider#_3','#activationStatus');
    changebyOffset('.guider#_4','#account-details',-28);
    changebyOffset('.guider#_5','#amountOfTrade');
    changebyOffset('.guider#_6','#runningPositionsHeader',-430,0,leftbody);
    changebyOffset('.guider#_7','#positionsHistoryTableTitle',-400,0,leftbody,$('#positionsHistoryTableTitle').offset().top);
    changebyOffset('.guider#_8','#manualTrading',-100,-100,leftbody);
    changebyOffset('.guider#_9','#account-details',-28);

    var value = $(this).text(), scrolltop = '';
    $(this).closest('.guider').fadeOut();

    if(value == "Let's Start" || value == "Next"){
        guider++;
        $('.guider#_'+guider).fadeIn();
    }
    else if(value == "Close" || value == "Done"){
        $('#guiders_overlay').hide();
        guider=0;
    }
    else if(value == "Previous"){
        guider--;
        $('.guider#_'+guider).fadeIn();
    }

    if(guider      ==   '3' || guider      ==   '4')
        scrolltop = "account-details";
    else if(guider ==   '6')
        scrolltop = "top-panel-cover";
    else if(guider ==   '7'){
        scrolltop = '';
        $("html,body").animate({
            scrollTop: $('#positionsHistoryTable_wrapper').offset().top-400
        }, "slow");
    }
    else if(guider ==   '8') scrolltop = "manualTrading";


    if(scrolltop != '')
        $("html,body").animate({
            scrollTop: $('#'+scrolltop).offset().top-60
        }, "slow");

});
/***** EOF guide popups *****/

$(document).ready(function(){
    var balance = $('.balance').text().replace('$','').replace(' ','');
});