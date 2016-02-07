$(window).on('scroll',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});

$('*:not(.nav)').on('click',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});