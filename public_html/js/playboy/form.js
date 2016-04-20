$(document).ready(function () {
    $('#FirstName').parent().removeClass().addClass('col-xs-12');
    $('#LastName').parent().removeClass().addClass('col-xs-12');
    $('#email').parent().removeClass().addClass('col-xs-12');
    $('#password').parent().removeClass().addClass('col-xs-12');
    $('#phone').removeClass().addClass('col-xs-8').css({'float':'right'}).parent().removeClass().addClass('col-xs-12');
    $('#prefix').removeClass().addClass('col-xs-3');
    $('#submit').removeClass().addClass('btn btn-primary btn-lg btn-block submitbtn').parent().removeClass().addClass('col-xs-12');
});