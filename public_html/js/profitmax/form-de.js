$(document).ready(function () {
    $('#other-error').remove();
    $('form').removeClass('form-horizontal').addClass('form').find('.row').removeClass('row');
    $('#FirstName').attr({'placeholder': 'Vorname'}).parent().removeClass().addClass('form-group col-xs-6');
    $('#LastName').attr({'placeholder': 'Nachname'}).parent().removeClass().addClass('form-group col-xs-6');
    $('#email').attr({'placeholder': 'Email'}).parent().removeClass().addClass('form-group col-xs-12');
    $('#password').attr({'placeholder': 'Passwort wählen'}).parent().removeClass().addClass('form-group col-xs-12');
    $('#prefix').attr({'placeholder': 'Vorwahl'}).css({ 'width': '23%' }).removeClass().addClass('form-control area-code col-xs-4 area-code-group').parent().removeClass().addClass('form-group col-xs-12');
    $('#phone').attr({'placeholder': 'Telefonnummer'}).css({ 'float': 'right', 'width': '75%' }).removeClass().addClass('form-control col-xs-8 phone-group');
    $('#submit').attr({'value': 'KOMPLETE REGISTRIERUNG'}).removeClass().addClass('btn btn-sm register-btn').parent().removeClass().addClass('form-group col-xs-12 submit-button-group');
});