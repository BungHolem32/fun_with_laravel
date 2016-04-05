$(document).ready(function(){
    $('.news-holder').slick({
        dots: true,
        touchMove: true,
        infinite: true,
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        pauseOnHover: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true

                }
            }
        ]
    });

    $('form').attr('id','regForm');
    $('#FirstName,#LastName').parent().removeClass().addClass('holder left box box-6').parent().removeClass('row');
    $('#email,#password').parent().removeClass().addClass('holder left box box-12');
    $('#phone').parent().removeClass().addClass('holder left box box-12');
    $('#submit').val('CREATE PROFIT ACCOUNT').css('font-weight','bold').removeClass().addClass('btn').parent().removeClass().addClass('left box box-12');
});

