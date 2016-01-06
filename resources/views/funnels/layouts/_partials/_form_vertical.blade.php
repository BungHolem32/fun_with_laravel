<?php

// Changing the local to 4 (english)
// little hack to make only one form that
// being used with all langs without making more routes.
\Request::local()->id = '4';

$form = \App\Page::find($page->formType);
//echo $form->title;
$hiddenFields = [];
$fields = [];
foreach($form->membersFields->getChildren() as $field){
    if($field['fieldType'] == 'hidden')
        $hiddenFields[] = [$field['name'], $field['placeholder']];
    else{
        $fields[] = [$field['fieldType'], $field['name'], $field['placeholder']];
    }
}



?>
<ul class="errorMessages"></ul>
<div class="form">
    {!! Form::open(['url' => url('postForm').'?'.$_SERVER["QUERY_STRING"],
                    'id'=>'form',
                    'name'=>'accountForm',
                    'target'=>'_self',
                    'method'=>'post',
                    'class'=>'form-horizontal']) !!}

        <input type="hidden" name="parentPage" value="{{ $funnelId }}">
        @forelse($hiddenFields as $hiddenField)
            <input type="hidden" id="{{ $hiddenField[0] }}" name="{{ $hiddenField[0] }}" value="">
        @empty
        @endforelse

            @foreach($fields as $field)
                @if($field[0] == 'text' || $field[0] == 'email' || $field[0] == 'password')
                    <div class="per">
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}  type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control" name="{{ $field[1] }}" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    </div>
                @elseif($field[0] == 'phone')
                    <div class="per">
                        <input type="phone" id="prefix" class="col-md-3 col-sm-3 col-xs-2 col-xs-offset-1" name="prefix" required="required" data-cip-id="prefix" />
                        <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="col-md-8 col-sm-8 col-xs-9" name="{{ $field[1] }}" required="required" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    </div>
                @elseif($field[0] == 'country')
                    <div class="per">
                        <select name="Country" id="country" class="form-control" required="required" data-cip-id="{{ $field[1] }}">
                            @include('funnels.layouts._partials._countries')
                        </select>
                    </div>
                @elseif($field[0] == 'submit')
                    <div class="per">
                        <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control col-md-10" name="{{ $field[1] }}" value="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    </div>
                @endif
            @endforeach
    </form>
</div>

@section('bottom-scripts')
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
                        if(typeof inputsCss != 'undefined'){
                            $('form input').attr('style',inputsCss);
                        }
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
                            $('form input').removeAttr('style');
                        }
                    }
                });
            }
        });

    </script>
@append