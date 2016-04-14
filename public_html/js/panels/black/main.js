// nav fix
//$(window).on('scroll',function(){
//    if($('.collapse.in').length)
//        $('.collapse.in').removeClass('collapse').removeClass('in');
//});
//$('*:not(.nav)').on('click',function(){
//    if($('.collapse.in').length)
//        $('.collapse.in').removeClass('collapse').removeClass('in');
//});

$(document).ready(function(){
    // cool loading jquery
    function loading(){
        $('.loading').show();
        setInterval(function(){
            if(!$('.loading .dots').hasClass('d1'))
                $('.loading .dots').removeClass('d4').addClass('d1').html('.');
            else if(!$('.loading .dots').hasClass('d2'))
                $('.loading .dots').addClass('d2').html('..');
            else if(!$('.loading .dots').hasClass('d3'))
                $('.loading .dots').addClass('d3').html('...');
            else if(!$('.loading .dots').hasClass('d4'))
                $('.loading .dots').removeClass('d1').removeClass('d2').removeClass('d3').addClass('d4').html('');
        },1300);
    }
   // loading();
    // hide loading:          $('.loading').hide();



    /******* Actions *******/

    //$('.toggles').on('toggle', function(e, active) {
    //    if (active) {
    //        console.log('Toggle ON');
    //    } else {
    //        console.log('Toggle OFF');
    //    }
    //});

    $('.amount').on('click',function(){
        var tthis = $(this);
        tthis.parent().parent().find('.active').removeClass('active');
        tthis.addClass('active');
        $('input[name=amount]').val($(this).data('start'));

        console.log('amount clicked');
    });

    $('.dep_btn').on('click',function(){
        console.log('deposit clicked');
    });
});