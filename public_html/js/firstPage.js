$(document).ready(function(){

        //$('form').on('submit', function(e){e.preventDefault();});
        $('form').on('submit', function(e){e.preventDefault();}).validate({
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: "JSON",
                data: $(form).serialize(),

                beforeSend: function(){
                    console.log('loading...');
                    //$(form).after('<div class="loading">Processing, please wait...<br/><i class="fa fa-refresh fa-spin"></i></div>');
                },
                success: function(res) {
                    if(res.err === 0){
                        //$('div#thankyou').show();
                        //setTimeout(function(){
                            window.location = res.destination;
                        //}, 4000);
                    }
                    else{
                        alert(res.errs.error);
                        $('div.loading').remove();
                    }
                }
            });
        }
    });
});