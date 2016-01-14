@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')

    @include('funnels.layouts._partials._page-layout-selection')
    <div class="form-group">
        {!! Form::label('formType', 'Chose Form Type:') !!}
        {!! Form::select('formType', $page->controller->getForms(),
        $page['formType'],
        ['name'=>'mongo[formType]',
        'class'=>'form-control']) !!}
    </div>

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
        {!! Form::text('video', $page['video'], ['name'=>'mongo[video]', 'class'=>'direction form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('htmlHeader', 'Html Header:') !!}
        {!! Form::textarea('htmlHeader', $page['htmlHeader'], ['name'=>'mongo[htmlHeader]', 'class'=>'direction editor  form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('smallHeader', 'Below Header:') !!}
        {!! Form::textarea('smallHeader', $page['smallHeader'], ['name'=>'mongo[smallHeader]', 'class'=>'direction editor form-control']) !!}
    </div>

@endsection

@section('editAside')
    <div class="row">
        <h3><i class="fa fa-google"></i> Analytics & Scripts</h3>
        <div class="form-group">
            {!! Form::label('headScripts', 'before </head> Scripts:') !!}
            {!! Form::textarea('headScripts', $page['scripts']['headScripts'], ['name'=>'mongo[scripts][headScripts]', 'class'=>'direction form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('afterBodyScripts', 'After <body> Scripts:') !!}
            {!! Form::textarea('afterBodyScripts', $page['scripts']['afterBodyScripts'], ['name'=>'mongo[scripts][afterBodyScripts]', 'class'=>'direction form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('bodyEndScripts', 'before </body> Scripts:') !!}
            {!! Form::textarea('bodyEndScripts', $page['scripts']['bodyEndScripts'], ['name'=>'mongo[scripts][bodyEndScripts]', 'class'=>'direction form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('mongo[switches][recaptcha]', $page['switches']['recaptcha']) !!}
            {!! Form::label('recaptcha', 'Show Recaptcha') !!}
        </div>
    </div>
@endsection