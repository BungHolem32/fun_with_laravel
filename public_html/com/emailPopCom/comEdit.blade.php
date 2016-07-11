<h4>
    <i class="fa fa-envelope-square" aria-hidden="true"></i>
    {!! Form::label('emailPopCom', 'Email POPUP:') !!}
</h4>

<div class="row form-group">
    <div class="col-sm-6">
        {!! Form::text('emailPopCom', $page['components']['emailPopCom']['firstTrigger'], [
        'name'=>'mongo[components][emailPopCom][firstTrigger]',
        'class'=>'direction form-control',
        'placeholder'=>'Time until first POP (sec)'
        ]) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('emailPopCom', $page['components']['emailPopCom']['interval'], [
        'name'=>'mongo[components][emailPopCom][interval]',
        'class'=>'direction form-control',
        'placeholder'=>'Time between each POP (sec)'
        ]) !!}
    </div>
</div>
{{--<div class="row form-group">--}}
    {{--<div class="col-sm-12">--}}
        {{--{!! Form::textarea('emailPopCom', $page['components']['emailPopCom']['content'], [--}}
        {{--'name'=>'mongo[components][emailPopCom][content]',--}}
        {{--'class'=>'direction form-control editor',--}}
        {{--'placeholder'=>'Popup Content'--}}
        {{--]) !!}--}}
    {{--</div>--}}
    {{--<div class="clearfix"></div>--}}
{{--</div>--}}
<br><br>
