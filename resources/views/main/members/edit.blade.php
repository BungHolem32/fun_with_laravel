{{-- clear   --   storage/framework/views --}}

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
        ['name'=>'mongo[formType]', 'class'=>'form-control']) !!}
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
        {!! Form::label('logo_pic', 'Logo Picture:') !!}
        {!! Form::file('logo_pic', ['name'=>'files[logo_pic]', 'class'=>'form-control']) !!}
        @if($page->logo_pic) <img src="{{ $page->logo_pic }}" width='100%'> @endif
    </div>

    <div class="form-group">
        <h3><i class="fa fa-video-camera"></i> {!! Form::label('video', 'Video link:') !!}</h3>
        {!! Form::text('video', $page['video'], ['name'=>'mongo[video]', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('htmlHeader', 'Html Header:') !!}
        {!! Form::textarea('htmlHeader', $page['htmlHeader'], ['name'=>'mongo[htmlHeader]', 'class'=>'direction editor  form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('smallHeader', 'Below Header:') !!}
        {!! Form::textarea('smallHeader', $page['smallHeader'], ['name'=>'mongo[smallHeader]', 'class'=>'direction editor form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-bullhorn"></i> On Exit popup:</h3>
        <small>epass=532 Param to disable</small>
        <br/>
        {!! Form::label('onExitPopupMsg', 'Message:') !!}
        {!! Form::textarea('onExitPopupMsg', $page['onExitPopup']['msg'], ['name'=>'mongo[onExitPopup][msg]', 'class'=>'direction form-control']) !!}

        {!! Form::label('onExitPopupLink', 'Link:') !!}
        {!! Form::text('onExitPopupLink', $page['onExitPopup']['link'], ['name'=>'mongo[onExitPopup][link]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-link"></i> {!! Form::label('destinationSite', 'Destination Site:') !!}</h3>
        {!! Form::text('destinationSite', $page['destinationSite'], ['name'=>'mongo[destinationSite]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-link"></i> {!! Form::label('submitValue', 'Submit Value:') !!}</h3>
        {!! Form::text('submitValue', $page['submitValue'], ['name'=>'mongo[submitValue]', 'class'=>'form-control']) !!}
    </div>

@endsection

@section('editAside')
    <div class="row">
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
        <div class="form-group">
            {!! Form::label('pixel', 'Pixel on success:') !!}
            {!! Form::textarea('pixel', $page['scripts']['pixel'], ['name'=>'mongo[scripts][pixel]', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('recaptcha', $page['switches']['recaptcha'], ['name'=>'mongo[switches][recaptcha]', 'class'=>'direction form-control']) !!}
            {{--            {!! Form::input('mongo[switches][recaptcha]', $page['switches']['recaptcha']) !!}--}}
            {!! Form::label('recaptcha', 'Show Recaptcha after IP has registered this many accounts in one day. (Leave empty to never show.) ') !!}
        </div>
        @if($page->funnelType == 'rboptions' || $page->funnelType == 'rboptions-n-background')
            <h2>IMAGES</h2>

            <div class="form-group">
                {!! Form::text('pic-button', $page['switches']['stamp'], ['name'=>'mongo[switches][stamp]', 'class'=>'direction form-control']) !!}
                {!! Form::label('stamp', 'choose the image for stamp button') !!}
            </div>
        @endif
    </div>
@endsection