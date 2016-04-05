
$(document).ready(function(){

    $(window).mousemove(function(event) {
        if(event.pageY-$(window).scrollTop() <= "15") {
            $(".form-main-header").show();
            $("#pop-cont").fadeIn();
        }
    });

    $("#registerFree").click(function() {
        $(".form-main-header").hide();
        $("#pop-cont").fadeIn();
    });

    $("#popup-close").click(function(){
        $("#pop-cont").fadeOut();
    });
});


$('form').removeClass().addClass('form-inline col-md-12 col-lg-10 col-center first-form').attr('id','first-page-form');
