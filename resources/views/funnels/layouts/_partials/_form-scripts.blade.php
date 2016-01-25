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
        $.get( "{{ url('getLocation') }}", function( data ) {
        var dataArr = JSON.parse(data);
        if(dataArr.iso.length > 0){
            iso = dataArr.iso;
            $("input#Country").prop("value", dataArr.countryId);
            $("select#country option[value="+dataArr.countryId+"]").prop("selected", true);
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
    $.validator.addMethod("phoneLibCheck", function(value, element) {
        var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();
        if(!isNaN(parseFloat(value)) && isFinite(value) && value.length > 2){
            var number = phoneUtil.parseAndKeepRawInput(value, iso);
            return phoneUtil.isValidNumber(number);
        }
        return false;
    }, "Phone number not valid.");
    @endif


    if(typeof loadingMsg == 'undefined')
        loadingMsg = '<div class="loading">Processing, please wait...<br/><i class="fa fa-refresh fa-spin"></i></div>';

    $('#form').on('submit', function(e){ console.log('clicked'); PreventExitSplash = true; e.preventDefault();}).validate({
        @if($form->switches->phoneLibCheck)
        rules : {
            phone : { phoneLibCheck : true }
        },
        @endif
        submitHandler: function(form) {
            $.ajax({
                url: form.action,
                type: form.method,
                dataType: "JSON",
                data: $(form).serialize(),

                beforeSend: function(){
                    console.log('loading...');
                    $(form).after(loadingMsg);
                    $(form).addClass('visible-hidden').find('input').addClass('visible-hidden');
                    if($(form).find('button').length)
                        $(form).find('button').addClass('visible-hidden');
                    $(form).find('input#submit').addClass('nofocus');
                    if($(form).find('.g-recaptcha').length)
                        $(form).find('.g-recaptcha').hide();
                },
                success: function(res) {
                    if(res.err === 0){
                        $('div#thankyou').show();
                        setTimeout(function(){
                            window.location = res.destination;
                        }, 4000);
                    }
                    else{
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