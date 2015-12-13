$(document).ready(function(){

    $("video").on("contextmenu",function(){
        return false;
    });

    if(typeof loadingTimeOut == 'undefined')
        loadingTimeOut=0;

    if(typeof loadingMsg == 'undefined')
        loadingMsg = '<div class="loading"><span class="bg"></span>Processing, please wait...<br/><i class="fa fa-refresh fa-spin"></i></div>';

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
                    if(typeof loading != 'undefined')
                        $(form).after(loadingMsg);
                },
                success: function(res) {
                    if(res.err === 0){
                        //$('div#thankyou').show();
                        setTimeout(function(){
                            window.location = res.destination;
                        }, loadingTimeOut);
                    }
                    else{
                        $('div.loading').remove();
                        alert(res.errs.error);
                    }
                }
            });
        }
    });
});