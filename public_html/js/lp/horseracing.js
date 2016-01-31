$(document).ready(function(){
   $('.submit').on('click',function(){
       $('input#FirstName')[0].focus();
       $("html, body").animate({
           scrollTop: 0
       }, 600);
       return false;
   }) ;
});

$(window).on('scroll',function(){
   if($('.collapse.in').length)
       $('.collapse.in').removeClass('collapse').removeClass('in');
});

$('*:not(.nav)').on('click',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});