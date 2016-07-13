
@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')

    @include('funnels.layouts._partials._page-layout-selection')
    <div class="form-group">
        <h3><i class="fa fa-gg"></i> {!! Form::label('title_h1', 'Title:') !!}</h3>
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'direction form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-newspaper-o"></i> {!! Form::label('description', 'Description:') !!}</h3>
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'direction form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-video-camera"></i> {!! Form::label('video', 'Video link:') !!}</h3>
        {!! Form::text('video', $page['video'], ['name'=>'mongo[video]', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-link"></i> {!! Form::label('destinationSite', 'Destination Site:') !!}</h3>
        {!! Form::text('destinationSite', $page['destinationSite'], ['name'=>'mongo[destinationSite]', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('htmlHeader', 'Html Header:') !!}</h3>
        {!! Form::textarea('htmlHeader', $page['htmlHeader'], ['name'=>'mongo[htmlHeader]', 'class'=>'direction editor form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('smallHeader', 'Below Header:') !!}</h3>
        {!! Form::textarea('smallHeader', $page['smallHeader'], ['name'=>'mongo[smallHeader]', 'class'=>'direction editor form-control']) !!}
    </div>

    {{--<div class="form-group">
        {!! Form::label('body', 'Content:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>--}}

    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('thankyoupage', 'Thank you page:') !!}</h3><small></small>
        {!! Form::textarea('thankyoupage', $page['thankyoupage'], ['name'=>'mongo[thankyoupage]', 'class'=>'direction editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('riskStatment', 'Risk Statment:') !!}</h3><small>pass rs=1 Param to display</small>
        {!! Form::textarea('riskStatment', $page['riskStatment'], ['name'=>'mongo[riskStatment]', 'class'=>'direction editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-bullhorn"></i> On Exit popup:</h3><small>epass=532 Param to disable</small>
        <br/>
        {!! Form::label('onExitPopupMsg', 'Message:') !!}
        {!! Form::textarea('onExitPopupMsg', $page['onExitPopup']['msg'], ['name'=>'mongo[onExitPopup][msg]', 'class'=>'direction form-control']) !!}

        {!! Form::label('onExitPopupLink', 'Link:') !!}
        {!! Form::text('onExitPopupLink', $page['onExitPopup']['link'], ['name'=>'mongo[onExitPopup][link]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group" style="background: #F9CF7F; padding: 1.5em; min-height: 17em;">
        <h3><i class="fa fa-cubes" aria-hidden="true"></i> Components:</h3><small>add your wanted components</small>
        <br/>
        <div class="Components">
            @com('admin_components')
        </div>
    </div>

@endsection



@section('editAside')
    <div class="row">
        <h3><i class="fa fa-check-square-o"></i> Switches</h3>
        <div class="form-group">
            {!! Form::checkbox('mongo[switches][showSmsField]', $page['switches']['showSmsField']) !!}
            {!! Form::label('showSmsField', 'Show Sms Field') !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('mongo[switches][showCaptcha]', $page['switches']['showCaptcha']) !!}
            {!! Form::label('showCaptcha', 'Show Captcha Always') !!}
        </div>
        <h3><i class="fa fa-google"></i> Analytics & Scripts</h3>
        <div class="form-group">
            {!! Form::label('headScripts', 'before </head> Scripts:') !!}
            {!! Form::textarea('headScripts', $page['scripts']['headScripts'], ['name'=>'mongo[scripts][headScripts]', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('afterBodyScripts', 'After <body> Scripts:') !!}
            {!! Form::textarea('afterBodyScripts', $page['scripts']['afterBodyScripts'], ['name'=>'mongo[scripts][afterBodyScripts]', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('bodyEndScripts', 'before </body> Scripts:') !!}
            {!! Form::textarea('bodyEndScripts', $page['scripts']['bodyEndScripts'], ['name'=>'mongo[scripts][bodyEndScripts]', 'class'=>'form-control']) !!}
        </div>
    </div>
@endsection