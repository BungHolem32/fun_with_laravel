<h4>
    <i class="fa fa-envelope-square" aria-hidden="true"></i>
    {!! Form::label('componentsEmailPopCom', 'Email POPUP:') !!}
</h4>

<div class="row form-group">
    <div class="col-sm-6">
        {!! Form::text('componentsEmailPopCom', $page['componentsEmailPopCom']['firstTrigger'], [
        'name'=>'mongo[componentsEmailPopCom][firstTrigger]',
        'class'=>'direction form-control',
        'placeholder'=>'Time until first POP (sec)'
        ]) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('componentsEmailPopCom', $page['componentsEmailPopCom']['interval'], [
        'name'=>'mongo[componentsEmailPopCom][interval]',
        'class'=>'direction form-control',
        'placeholder'=>'Time between each POP (sec)'
        ]) !!}
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-12">
        {!! Form::textarea('componentsEmailPopCom', $page['componentsEmailPopCom']['content'], [
        'name'=>'mongo[componentsEmailPopCom][content]',
        'class'=>'direction form-control editor',
        'placeholder'=>'Popup Content'
        ]) !!}
    </div>
</div>
<div class="clearfix"></div>

