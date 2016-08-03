{{--{!! $page->appendAsset(url('/js/vendor/phonelib/closure-library/closure/goog/base.js')) !!}
    {!! $page->appendAsset(url('/js/vendor/phonelib/phoneLib.js')) !!}--}}
{{--{!! $page->appendAsset(url('/js/vendor/phonelib/libphonenumber.js')) !!}--}}
<script src="/js/vendor/phonelib/libphonenumber.js"></script>
<script src="/js/vendor/phonelib/prefixes.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
            {{-- THIS IS FOR IP 2 COUNTRY--}}
    var iso;

    @if($form->switches->locationFromIp)
        $.get("{{ url('getLocation') }}", function(data){
        var dataArr = JSON.parse(data);
        if(dataArr.iso.length > 0){
            iso = dataArr.iso;
            $("input#Country").prop("value", dataArr.countryId);
            $("select#country option[value=" + dataArr.countryId + "]").prop("selected", true);
            $("input#prefix").prop("value", dataArr.prefix);
            $("input#currency").prop("value", dataArr.currency);
        }
    });
    @endif


    @if($form->switches->phoneLibCheck)
    {{-- THIS IS PHONE CHECK--}}
        $('#phone').on('keyup', function(){
        $(this).valid(); // check phone validation
    });
    $('#prefix').on('keyup', function(){
        console.log(prefix[$(this).val()]); // change iso by prefix
        iso = prefix[$(this).val()];
    });
    $.validator.addMethod("phoneLibCheck", function(value, element){
        var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();
        if(!isNaN(parseFloat(value))&&isFinite(value)&&value.length > 2){
            var number = phoneUtil.parseAndKeepRawInput(value, iso);
            return phoneUtil.isValidNumber(number);
        }
        return false;
    }, "Phone number not valid.");
    @endif


    if(typeof loadingMsg=='undefined')
        if($('.funnelName').val()=='binarycurrency'){
            loadingMsg = '<div class="loading center-block text-center text-capitalize" style="color:black">@ln(processing, please wait)...<br/><i class="fa fa-refresh fa-spin"></i></div>';
        } else{
            loadingMsg = '<div class="loading center-block text-center text-capitalize">@ln(processing, please wait)...<br/><i class="fa fa-refresh fa-spin"></i></div>';
        }

    var sms_validated = false;
    var unique_email = false;
    var checked_email = "";

    function validateEmail(){
        var email = $('#email').val();
        if(email=="") return "";
        $.ajax({
            url: '//' + window.location.host + '/ajax/checkIfEmailExistsForAjax/' + email,
            method: 'GET',
            success: function(res){
                if(res=="0"){
                    unique_email = true;
                    checked_email = email;
                    $('#form').submit();
                } else{
                    alert("Email already exists!");
                }
            },
            error: function(res){
                alert("Error occurred: " + JSON.stringify(res));
            }
        });
    }


    $('#form').on('submit', function(e){
        return false;
        //      console.log('clicked');
        //      PreventExitSplash = true;
        //      e.preventDefault();
    }).validate({
        @if($form->switches->phoneLibCheck)
        rules: {
            phone: {phoneLibCheck: true}
        },
        @endif
        submitHandler: function(form){
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: "JSON",
                data: $(form).serialize(),

                beforeSend: function(){
                    @if($page->getParent()->switches->showSmsField === "1")

                    if(!unique_email||checked_email!=$('#email').val()){
                        unique_email = false;
                        validateEmail();
                        return false;
                    }

                    if(!sms_validated){
                        sendSMS();
                        return false;
                    }
                    @endif

                    $(form).append(loadingMsg);
                    $(form).addClass('visible-hidden').find('input').addClass('visible-hidden');
                    if($(form).find('button').length)
                        $(form).find('button').addClass('visible-hidden');
                    $(form).find('input#submit').addClass('nofocus');
                    if($(form).find('.g-recaptcha').length)
                        $(form).find('.g-recaptcha').hide();
                },
                success: function(res){
                    if(res.err===0){
                        dataLayer.push({'event': 'form_lead'});
                        $("body").append($('#pixel-text').val());
                        $('div#thankyou').show();
                        setTimeout(function(){
                            window.location = res.destination;
                        }, 2000);
                    }
                    else{
                        dataLayer.push({'event': 'form_error'});
                        if(res.errs.error.join)
                            res.errs.error = res.errs.error.join('\r\n');
                        alert(res.errs.error);
                        $('div.loading').remove();
                        $(form).removeClass('visible-hidden').find('input').removeClass('visible-hidden');
                        if($(form).find('button').length)
                            $(form).find('button').removeClass('visible-hidden');
                        if($(form).find('.g-recaptcha').length)
                            $(form).find('.g-recaptcha').show();
                    }
                }
            });
        }
    });
</script>

{{-- This line is used to store a pixel script/image/iframe from DB as text on the page --}}
{{-- On successful register the pixel is appended to the body and activated. --}}
<textarea id="pixel-text" style="display: none !important;">{!! $page->scripts->pixel !!}</textarea>