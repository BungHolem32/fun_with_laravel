/*LOGIN VALIDATION*/
$(document).ready(function () {

    $('.loginForm').validate({
        submitHandler: function (form) {
            var data = $('.loginForm').serialize();
            $.ajax({
                type: "POST",
                url: "/ajaxLogin",
                dataType: 'json',
                data: data,
                beforeSend: function () {
                    $('.proccess').addClass('active');
                },
                success: function (res) {
                    if (res.err === 0) {
                        window.location.reload();
                    }
                    else {
                        alert(res.errs.error);
                        $('.proccess').removeClass('active');

                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });
    /*IF THE PAGE IS LOGIN PAGE ADD CLASS TO THE BODY WITH THE BG-IMG*/
        if($('body').find('.login-wrapper').length>0){
            $('body').addClass('body-login');
        }


});