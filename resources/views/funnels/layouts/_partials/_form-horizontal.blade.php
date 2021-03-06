<?php

// Changing the local to 4 (english)
// little hack to make only one form that
// being used with all langs without making more routes.
\Request::local()->id = '4';


// $btn is suppose to be btn image -> hagai did somthing with JS to load the image ?
// something with languages support flips between images  not sure about this $btn.
if(!isset($btn))
    $btn = '';
if(!isset($show_recaptcha))
    $show_recaptcha = false;
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

{!! Form::open(['url' => url('postForm').'?'.$_SERVER["QUERY_STRING"],
                'id'=>'form',
                'name'=>'accountForm',
                'target'=>'_self',
                'method'=>'post',
                'class'=>'form-horizontal']) !!}
    <div class="fields">
        @if($show_recaptcha)
            <div class="g-recaptcha" data-sitekey="{{\App\Http\Middleware\Recaptcha::getCaptchaDataSiteKey()}}"></div>
        @endif
        <input type="hidden" name="parentPage" value="{{ $funnelId }}">
        @forelse($hiddenFields as $hiddenField)
            <input type="hidden" id="{{ $hiddenField[0] }}" name="{{ $hiddenField[0] }}" value="">
        @empty
        @endforelse
            @foreach($fields as $field)
                @if($field[0] == 'text' || $field[0] == 'email' || $field[0] == 'password')
                    <div class="field">
                        {{--{!! Form::$field[0]($field[1], null, ['class'=>'form-control', 'placeholder'=>@ln($field[2]) !!}--}}
                        <input value="{{Request::get($field[1])}}" {{!empty($_REQUEST[$field[1]]) ? 'disabled="disabled"' : ''}}  type="{{ $field[0] }}" id="{{ $field[1] }}" class="form-control" name="{{ $field[1] }}" required="required" minlength="2" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    </div>
                @elseif($field[0] == 'phone')
                    <div class="field phoneFields">
                        <input type="phone" id="prefix" class="" name="prefix" required="required" data-cip-id="prefix" />
                        <input type="{{ $field[0] }}" id="{{ $field[1] }}" class="" name="{{ $field[1] }}" required="required" placeholder="{{ \App\Languages::getTrans($field[2]) }}" data-cip-id="{{ $field[1] }}">
                    </div>

                @elseif($field[0] == 'country')
                    <div class="field">
                        <select name="Country" id="country" class="form-control" required="required" data-cip-id="{{ $field[1] }}">
                            @include('funnels.layouts._partials._countries')
                        </select>
                    </div>
                @elseif($field[0] == 'submit')
                    <div class="field">
                        <?php if(!empty($page->submitValue->get())): $sub = $page->submitValue; else: $sub = $field[2]; endif;  ?>
                        <button id="submit" class="onsubmit"><span class="img" style="display:none;" data-url="{{ $btn }}" data-text="{{ \App\Languages::getTrans($sub) }}"></span> <span>{{ \App\Languages::getTrans($sub) }}</span></button>
                    </div>
                @endif
            @endforeach
        </div>
{!! Form::close() !!}


@section('bottom-scripts')
    @include('funnels.layouts._partials._form-scripts')
@append