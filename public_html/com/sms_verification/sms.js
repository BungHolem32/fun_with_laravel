/**
 * Created by ronenk on 2/24/2016.
 */

$( document ).ready(function() {

    fn = localStorage.getItem('firstname');
    ln = localStorage.getItem('lastname');
    em = localStorage.getItem('email');

    if (fn !== null && $('#FirstName') != '') $('#FirstName').val(fn);
    if (ln !== null && $('#LastName') != '') $('#LastName').val(ln);
    if (em !== null && $('#email') != '') $('#email').val(em);

});

function showSmsForm() {
    var fullPhone = '+' + $('#prefix').val() + ' ' + $('#phone').val();
    $('#phone_number_span').html(fullPhone);

    var hiddenSection = $('section.hidden_block');

    var sc_top = '0px';
    var sc_left = '0px';
    var sc_width = $(window).width() + 'px';
    var sc_height = $(window).height() + 'px';
    if ($(window).width()<601) {
        sc_width = '100%';
        sc_height = '100%';
    }

    hiddenSection.fadeIn()
        .css({ 'display':'block' })
        .css({ width: sc_width, height: sc_height })
        .css({ top: sc_top, left: sc_left })
        .css({ 'background-color': 'rgba(0,0,0,0.5)' })
        .appendTo('body');
    $('span.close').click(function(){ $(hiddenSection).fadeOut(); });
}

function sendSMS() {
    var fullPhone = '' + $('#prefix').val() + $('#phone').val();
    var name = '' + $('#FirstName').val() + " " + $('#LastName').val();

    var captcha = '';
    if ($('#g-recaptcha-response') != '') {
        captcha = '' + $('#g-recaptcha-response').val();
    }

    $.ajax({
        url: '//' + window.location.host + '/ajax/sendSms',
        method: 'POST',
        dataType: "JSON",
        data: {'phone': fullPhone, 'g-recaptcha-response': captcha, 'name': name},

        success: function(res) {
            if(res.err === 0){
                showSmsForm();
                $('#other-error').css('visibility', 'hidden');
                $('#other-error').hide();
            }
            else {
                $('#other-error').html(res.errs.error);
                $('#other-error').css('visibility', 'visible');
                $('#other-error').show();

                //alert(res.errs.error);
                if (res.errs.action == 'reload') {

                    localStorage.setItem('firstname', $('#FirstName').val());
                    localStorage.setItem('lastname', $('#LastName').val());
                    localStorage.setItem('email', $('#email').val());

                    window.location.reload();
                }
            }
        }
    });

}

function setErrorCode(isset) {
    if (isset) {
        $('#sms_id').addClass('error');
        $('span.wrong_code_span').show();
    } else {
        $('#sms_id').removeClass('error');
        $('span.wrong_code_span').hide();
    }
}

function checkCode() {

    var code = $('#sms_id').val() * 1;

    if (code < 1000 || code > 9999) {
        //alert('Wrong code');
        setErrorCode(true);
        return false;
    }

    $.ajax({
        url: '//' + window.location.host + '/ajax/validateSmsCode',
        method: 'POST',
        dataType: "JSON",
        data: {'code': code},

        success: function(res) {
            if(res.err === 0){
                sms_validated = true;
                $('span.close').click();
                //alert('correct! going further...');
                $('#form').submit();
            }
            else {
                setErrorCode(true);
                //$('#other-error').html(res.errs.error);
                //$('#other-error').show();

                if (res.errs.action == 'reload') {
                    //alert(res.errs.error);

                    localStorage.setItem('firstname', $('#FirstName').val());
                    localStorage.setItem('lastname', $('#LastName').val());
                    localStorage.setItem('email', $('#email').val());

                    window.location.reload();
                }
                //alert(res.errs.error);
                //$('span.close').click();
            }
        }
    });

}