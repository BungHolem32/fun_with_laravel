$(document).ready(function () {
    $('#phone').removeClass().addClass('field').css({'width': '66%', 'float': 'right'}).parent().removeClass();
    $('#prefix').removeClass().addClass('field').css({'width': '30%', 'float': 'left'});
    $('#submit').val('').parent().removeClass('field').css('text-align', 'center');
});

$('form').on('submit', function () {
    var valid       = true;
    var errorMsg    = $('#fields-error');
    if(!$('#FirstName').val()) {
        $('#FirstName').parent().addClass('red-border');
        valid = false;
    }
    else $('#FirstName').parent().removeClass('red-border');

    if(!$('#LastName').val()) {
        $('#LastName').parent().addClass('red-border');
        valid = false;
    }
    else $('#LastName').parent().removeClass('red-border');

    if(!$('#email').val()) {
        $('#email').parent().addClass('red-border');
        valid = false;
    }
    else $('#email').parent().removeClass('red-border');

    if(!$('#password').val()) {
        $('#password').parent().addClass('red-border');
        valid = false;
    }
    else $('#password').parent().removeClass('red-border');

    if(!$('#phone').val()) {
        $('#phone').addClass('red-border');
        valid = false;
    }
    else $('#phone').parent().removeClass('red-border');

    if(!valid)  errorMsg.show();
    else        errorMsg.hide();
});