<?php


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

<div class="container">
    <div class="wrap">
        <ul class="errorMessages"></ul>
        <div class="text-center">
            <span style="color:#F2B31D;font-size:20px;font-family:Open-sans,sans-serif;">
                <span id="step">@ln(STEP 1):</span>
            </span>
            <span style="color:#fff;font-family:Open-sans,sans-serif;  font-size: 20px;">
                <span id="fund">@ln(CREATE YOUR ACCOUNT)</span>
            </span>
        </div>

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
                {{--<input type="hidden" name="subcampaign" value="">
                <input type="hidden" name="countryCode" value="IL">
                <input type="hidden" id="location" value="">
                <input type="hidden" name="registrationCountry" value="104">
                <input type="hidden" id="registrationCountryName" name="registrationCountryName" value="Israel">
                <input type="hidden" name="ip" value="">
                <input type="hidden" name="phonenumber" value="">
                <input type="hidden" name="currency" value="USD">--}}
            @endforelse


            <div class="row">
                @foreach($fields as $field)
                    @if($field[0] == 'text' || $field[0] == 'email' || $field[0] == 'password')
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 field">
                            {{--{!! Form::$field[0]($field[1], null, ['class'=>'form-control', 'placeholder'=>@ln($field[2]) !!}--}}
                            <input value="{{Request::get($field[1])}}" type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control" name="{{ $field[1] }}" required="required" minlength="2" placeholder="@ln({{ $field[2] }})" data-cip-id="{{ $field[1] }}">
                        </div>
                    @elseif($field[0] == 'phone')
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 field phoneFields">
                            <input type="phone" id="prefix" class="col-md-3" name="prefix" required="required" data-cip-id="prefix" />
                            <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="col-md-9" name="{{ $field[1] }}" required="required" placeholder="@ln({{ $field[2] }})" data-cip-id="{{ $field[1] }}">
                        </div>
                    @elseif($field[0] == 'country')
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 field">
                            <select name="Country" id="country" class="form-control" required="required" data-cip-id="{{ $field[1] }}">
                                @include('funnels.layouts._partials._countries')
                            </select>
                        </div>
                    @elseif($field[0] == 'submit')
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 field">
                            <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control col-md-10" name="{{ $field[1] }}" placeholder="@ln({{ $field[2] }})" data-cip-id="{{ $field[1] }}">
                        </div>
                    @endif
                @endforeach
            </div>
        </form>

    </div>
</div>


@section('bottom-scripts')
    {{--{!! $page->appendAsset(url('/js/vendor/phonelib/closure-library/closure/goog/base.js')) !!}
    {!! $page->appendAsset(url('/js/vendor/phonelib/phoneLib.js')) !!}--}}
    {{--{!! $page->appendAsset(url('/js/vendor/phonelib/libphonenumber.js')) !!}--}}
    <script src="/js/vendor/phonelib/libphonenumber.js"></script>
    <script src="/js/vendor/phonelib/prefixes.js"></script>
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

        $('#form').on('submit', function(e){e.preventDefault();}).validate({
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
                        }
                    }
                });
            }
        });

    </script>
@append