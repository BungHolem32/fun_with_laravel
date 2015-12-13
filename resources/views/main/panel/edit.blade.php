@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    <div class="form-group">
        <h3><i class="fa fa-reddit-alien"></i> {!! Form::label('panelType', 'Panel & BOT:') !!}</h3>
        {!! Form::select('panelType', $page->controller->getPageLayouts(),
                            $page['panelType'],
                            ['name'=>'mongo[panelType]',
                            'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-gg"></i> {!! Form::label('title_h1', 'Title:') !!}</h3>
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-newspaper-o"></i> {!! Form::label('description', 'Description:') !!}</h3>
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-video-camera"></i> Brand:</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('brandName', 'Brand Name:') !!}
                {!! Form::text('brandName', $page['brand']['name'], ['name'=>'mongo[brand][name]', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brandLink', 'Brand Link:') !!}
                {!! Form::text('brandLink', $page['brand']['link'], ['name'=>'mongo[brand][link]', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brandLogo', 'Brand Logo:') !!}
                {!! Form::text('brandLogo', $page['brand']['logo'], ['name'=>'mongo[brand][logo]', 'class'=>'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-video-camera"></i> Welcome Popup:</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('welcomePopupVideo', 'Popup Video:') !!}
                {!! Form::text('welcomePopupVideo', $page['welcomePopup']['video'], ['name'=>'mongo[welcomePopup][video]', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('welcomePopupContent', 'Popup Content:') !!}
                {!! Form::textarea('welcomePopupContent', $page['welcomePopup']['content'], ['name'=>'mongo[welcomePopup][content]', 'class'=>'form-control']) !!}
            </div>
        </div>
    </div>



@endsection


@section('editAside')
    <div class="row">
        <h3><i class="fa fa-check-square-o"></i> Switches</h3>
        <div class="form-group">

        </div>
    </div>
@endsection