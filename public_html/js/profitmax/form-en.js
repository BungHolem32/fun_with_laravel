$(document).ready(function () {
    $('#other-error').remove();
    $('form').removeClass('form-horizontal').addClass('form').find('.row').removeClass('row');
    $('#FirstName').parent().removeClass().addClass('form-group col-xs-6');
    $('#LastName').parent().removeClass().addClass('form-group col-xs-6');
    $('#email').parent().removeClass().addClass('form-group col-xs-12');
    $('#password').parent().removeClass().addClass('form-group col-xs-12');
    $('#prefix').css({ 'width': '23%' }).removeClass().addClass('form-control area-code col-xs-4 area-code-group').parent().removeClass().addClass('form-group col-xs-12');
    $('#phone').css({ 'float': 'right', 'width': '75%' }).removeClass().addClass('form-control col-xs-8 phone-group');
    $('#submit').attr({'value': 'GET STARTED NOW'}).removeClass().addClass('btn btn-sm register-btn').parent().removeClass().addClass('form-group col-md-12 submit-button-group');
});