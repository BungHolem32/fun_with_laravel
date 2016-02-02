$(window).on('scroll',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});

$('*:not(.nav)').on('click',function(){
    if($('.collapse.in').length)
        $('.collapse.in').removeClass('collapse').removeClass('in');
});

$(document).ready(function(){
    $('a.submit').on('click',function(){
        $('input#FirstName')[0].focus();
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    // button with text middle by img resized width
    if($(window).width()<768){
        if($('.submit .img').data('url').length>1){
            $('.submit .img').append('<img src="'+$('.submit .img').data('url')+'" />');
            $('.submit .img').append('<span class="text">'+$('.submit .img').data('text')+'</span>');

            $(window).on('load resize',function(){
                var fixT = '44';

                if($(window).width()<640)
                    fixT = '36';
                if($(window).width()<470)
                    fixT = '27';

                $('.submit .text').attr('style','top: calc(50% - '+fixT+'px);')
            });


            var osrc = $('.submit img').attr('src');
            $('.submit').on('mouseenter',function(){
                $('.submit img').attr('src',osrc.replace('button-','button-h-'));
            }).on('mouseleave',function(){
                $('.submit img').attr('src',osrc.replace('h-',''));
            });
        }
    }
});