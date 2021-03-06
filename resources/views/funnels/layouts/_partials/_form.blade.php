<?php

// Changing the local to 4 (english)
// little hack to make only one form that
// being used with all langs without making more routes.
\Request::local()->id = '4';

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
                    @if  ($field[0] == 'password')
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}  type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control" name="{{ $field[1] }}" required="required" minlength="6" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    @else
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}  type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control" name="{{ $field[1] }}" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    @endif
                </div>
            @elseif($field[0] == 'phone')
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 field phoneFields">
                    <input type="phone" id="prefix" class="col-md-3 col-sm-3 col-xs-2" name="prefix" required="required" data-cip-id="prefix" />
                    <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="col-md-8 col-sm-8 col-xs-9" name="{{ $field[1] }}" required="required" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                </div>
            @elseif($field[0] == 'country')
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 field">
                    <select name="Country" id="country" class="form-control" required="required" data-cip-id="{{ $field[1] }}">
                        @include('funnels.layouts._partials._countries')
                    </select>
                </div>
            @elseif($field[0] == 'submit')

                <label id="other-error" class="error" style="display: block; top: 260px;">This field is required.</label>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 field">
                    @if($show_recaptcha)
                        <div class="g-recaptcha" data-sitekey="{{\App\Http\Middleware\Recaptcha::getCaptchaDataSiteKey()}}"></div>
                    @endif
                    <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control col-md-10" name="{{ $field[1] }}" value="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                </div>
            @endif
        @endforeach
    </div>
{!! Form::close() !!}

@section('bottom-scripts')
    @include('funnels.layouts._partials._form-scripts')
@append