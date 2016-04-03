
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


var parts = window.location.search.substr(1).split("&");
var $_GET = {};
for (var i = 0; i < parts.length; i++) {
    var temp = parts[i].split("=");
    $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}

$('form').removeClass().addClass('form-inline col-md-12 col-lg-10 col-center first-form').attr('id','first-page-form');
$('.first-form').validate({ success: function () { window.onbeforeunload = null; } });
$('.sec-form').validate({ success: function () { window.onbeforeunload = null; } });	$('.popup-form').validate({ success: function () { window.onbeforeunload = null; } });