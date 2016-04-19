$(document).ready(function () {
    $('#LastName').css({'float': 'right', 'width': '95%'});
    $('#email,#password').parent().removeClass('col-lg-6 col-md-6 col-sm-6');
    $('#phone').css({'float': 'right', 'width': '73%'}).parent().removeClass('col-lg-6 col-md-6 col-sm-6');
    $('#submit').addClass('submit custom-submit-size').parent().removeClass('col-lg-6 col-md-6 col-sm-6');
});