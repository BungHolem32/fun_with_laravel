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
                    $('.btn-login').text("process..").append('<i class="fa fa-spinner fa-spin"></i>');

                },
                success: function (res) {
                    if (res.err === 0) {
                        window.location.reload();
                    }
                    else {
                        alert(res.errs.error);
                        $('.btn-login').text('Login');

                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

});