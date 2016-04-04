$(document).ready(function(){
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $("#staticsignup:hidden").css('visibility','visible');
                $("#staticsignup:hidden").fadeIn('medium');
            }
            else {
                $("#staticsignup:visible").fadeOut("medium");
            }
        });
});