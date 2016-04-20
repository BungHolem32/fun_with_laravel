$(document).ready(function () {
    $('#FirstName, #LastName, #email, #password, #phone, #prefix').addClass('w-input field-3').parent().removeClass('field');
    $('#submit').addClass('w-button optin-submit small-2').val('SUBMIT').parent().removeClass('field');
    $('#prefix').css({'width': '30%', 'float': 'left'});
    $('#phone').css({'width': '66%', 'float': 'right'});

    $('#members-sub-submit').on('click', function () {
        window.scrollTo(0,0);
    })
});