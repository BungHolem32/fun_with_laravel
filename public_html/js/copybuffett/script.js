$(document).ready(function () {
    WebFont.load({
        google: {
            families: ["PT Serif:400,400italic,700,700italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
        }
    });

    $('body').on('change paste keyup','#sub-email-form',function () {
        $('#main-email-form').val($(this).val());
    });

    $('body').on('click','#sub-submit-form',function (e) {
        e.preventDefault();
        $('#main-submit-form').click();
        var mainFormError   = $('form label.error');
        var subFormError    = $('#sub-form-error');

        setTimeout(function () {
            if(mainFormError.length)    subFormError.html(mainFormError.html());
            else                        subFormError.html('');
        },100);
    });
});

