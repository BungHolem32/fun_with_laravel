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

    @endforelse


    {{--<div class="row">--}}
        {{--<div class="col-lg-2 col-lg-offset-6  col-md-12 col-md-offset-5">--}}
            {{--<form class="contact-form" action="#">--}}
                {{--<p class="form_title">Open your binary options account and start trading <mark>IMMEDIATELY!</mark></p>--}}
        @foreach($fields as $field)
            @if($field[0] == 'text' || $field[0] == 'email' || $field[0] == 'password')
                <div class="form-group">
                    @if  ($field[0] == 'password')
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}
                        type="{{ $field[0] }}" id="{{ $field[1] }}" class="" name="{{ $field[1] }}" required="required"
                               minlength="6" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    @else
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}
                        type="{{ $field[0] }}" id="{{ $field[1] }}" class="" name="{{ $field[1] }}" required="required"
                               minlength="2" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    @endif
                </div>
            @elseif($field[0] == 'phone')
                    <div class="form-group phone-row">
                    <input type="phone" id="prefix" class="" name="prefix" data-cip-id="prefix" />
                    <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="" name="{{ $field[1] }}"
                           required="required" placeholder="{{ \App\Languages::getTrans($field[2]) }}"
                           data-cip-id="{{ $field[1] }}">
                </div>
            @elseif($field[0] == 'country')
                <div class="form-group">
                    <select name="Country" id="country" class="" required="required" data-cip-id="{{ $field[1] }}">
                        @include('funnels.layouts._partials._countries')
                    </select>
                </div>
            @elseif($field[0] == 'submit')

                <label id="other-error" class="error" style="display: block; top: 260px;">This field is required.</label>
                <div class="form-group">
                    @if($show_recaptcha)
                        <div class="g-recaptcha" data-sitekey="{{\App\Http\Middleware\Recaptcha::getCaptchaDataSiteKey()}}"></div>
                    @endif
                 </div>
                <div class="form-group">
                    {{--<input type="{{ $field[0] }}" id="{{ $field[1] }}" class="btn-arrow"--}}
                           {{--name="{{ $field[1] }}" value="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">--}}
                        <button type="{{ $field[0] }}" id="{{ $field[1] }}" class="btn-arrow"
                               name="{{ $field[1] }}" data-cip-id="{{ $field[1] }}">{{ \App\Languages::getTrans($field[2]) }}
                            <span><img src="/img/60seconds/btn-arrow.png" height="45" width="34" alt="image description"></span></button>

                </div>
            @endif
        @endforeach
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{!! Form::close() !!}

@section('bottom-scripts')
    @include('funnels.layouts._partials._form-scripts')
@append