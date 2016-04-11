$(document).ready(function () {
    $('#FirstName').parent().parent().removeClass('row').addClass('form-members');
    $('#email').parent().removeClass().addClass('col-xs-12');
    $('#password').parent().removeClass().addClass('col-xs-12');
    $('#phone').removeClass().addClass('col-xs-9').css({'width': '66%', 'float': 'right'}).parent().removeClass().addClass('col-xs-12');
    $('#prefix').removeClass().addClass('col-xs-3');
    $('#submit').attr('id','js-registration-btn').removeClass().addClass('btn btn-sm register-btn').parent().removeClass().addClass('col-xs-12');
});