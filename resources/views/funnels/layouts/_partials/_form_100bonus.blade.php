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
        $fields[$field['name']] = [$field['fieldType'], $field['placeholder'] ];
    }
}
?>
<ul class="errorMessages"></ul>
{!! Form::open(['url' => url('postForm').'?'.$_SERVER["QUERY_STRING"],
                'id'=>'form',
                'name'=>'accountForm',
                'target'=>'_self',
                'method'=>'post',
                'class'=>'account-form']) !!}
<div class="text-holder"><p>Open your binary options account and start trading <mark>TODAY!</mark></p></div>

<input type="hidden" name="parentPage" value="{{ $funnelId }}">
@forelse($hiddenFields as $hiddenField)
    <input type="hidden" id="{{ $hiddenField[0] }}" name="{{ $hiddenField[0] }}" value="">
@empty
@endforelse

            <div class="form-group">
                <input class="form-control" value="{{Request::get('FirstName')}}" {{!empty($_REQUEST['FirstName']) ? 'disabled="disabled"' : ''}}  type="{{ $fields['FirstName'][0] }}" id="FirstName" name="FirstName" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($fields['FirstName'][1]) }}" data-cip-id="FirstName">
            </div>
            <div class="form-group">
                <input class="form-control" value="{{Request::get('LastName')}}" {{!empty($_REQUEST['LastName']) ? 'disabled="disabled"' : ''}}  type="{{ $fields['LastName'][0] }}" id="LastName" name="LastName" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($fields['LastName'][1]) }}" data-cip-id="LastName">
            </div>
            <div class="form-group">
                <input class="form-control" value="{{Request::get('email')}}" {{!empty($_REQUEST['email']) ? 'disabled="disabled"' : ''}}  type="{{ $fields['email'][0] }}" id="email" name="email" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($fields['email'][1]) }}" data-cip-id="email">
            </div>
            <div class="column-holder">
                <div class="column">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="prefix" name="prefix" required="required" data-cip-id="prefix" />
                    </div>
                </div>
                <div class="column">
                    <div class="form-group">
                        <input class="form-control" type="text" id="phone" name="phone" required="required" placeholder="{{ \App\Languages::getTrans($fields['phone'][1]) }}" data-cip-id="phone">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" value="{{Request::get('password')}}" {{!empty($_REQUEST['password']) ? 'disabled="disabled"' : ''}}  type="{{ $fields['password'][0] }}" id="password" name="password" required="required" minlength="6" placeholder="{{ \App\Languages::getTrans($fields['password'][1]) }}" data-cip-id="password">
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="button" name="submit"  value="{{ \App\Languages::getTrans('Create Account') }}" data-cip-id="submit">{{ \App\Languages::getTrans('Create Account') }}</button>
            </div>
            <label id="other-error" class="error" style="display: block; top: 260px;">This field is required.</label>
            @if($show_recaptcha)
                <div class="g-recaptcha" data-sitekey="{{\App\Http\Middleware\Recaptcha::getCaptchaDataSiteKey()}}"></div>
            @endif
{!! Form::close() !!}

{{--<div class="loading text-capitalize">processing, please wait...<br/><i class="fa fa-refresh fa-spin"></i></div>--}}

@section('bottom-scripts')
    @include('funnels.layouts._partials._form-scripts')
@append