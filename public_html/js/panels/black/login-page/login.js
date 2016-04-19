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
                    $('.login_btns').hide();
                    $('.loading').show();
                },
                success: function (res) {
                    if (res.err === 0) {
                        window.location.reload();
                    }
                    else {
                        alert(res.errs.error);
                        $('.loading').hide();
                        $('.login_btns').show();
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

});