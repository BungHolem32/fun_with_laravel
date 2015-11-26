@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    @include('funnels.layouts._partials._page-layout-selection')
    <div class="form-group">
        <h3><i class="fa fa-gg"></i> {!! Form::label('title_h1', 'Title:') !!}</h3>
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-newspaper-o"></i> {!! Form::label('description', 'Description:') !!}</h3>
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>

    {{--<div class="form-group">
        <h3><i class="fa fa-video-camera"></i> {!! Form::label('video', 'Video link:') !!}</h3>
        {!! Form::text('video', $page['video'], ['name'=>'mongo[video]', 'class'=>'form-control']) !!}
    </div>--}}

    <div class="form-group">
        <h3><i class="fa fa-link"></i> {!! Form::label('destinationSite', 'Destination Site:') !!}</h3>
        {!! Form::text('destinationSite', $page['destinationSite'], ['name'=>'mongo[destinationSite]', 'class'=>'form-control']) !!}
    </div>

    {{--<div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('htmlHeader', 'Html Header:') !!}</h3>
        {!! Form::textarea('htmlHeader', $page['htmlHeader'], ['name'=>'mongo[htmlHeader]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-code"></i> {!! Form::label('smallHeader', 'Below Header:') !!}</h3>
        {!! Form::textarea('smallHeader', $page['smallHeader'], ['name'=>'mongo[smallHeader]', 'class'=>'editor form-control']) !!}
    </div>--}}

    {{--<div class="form-group">
        {!! Form::label('body', 'Content:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>--}}

    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('thankyoupage', 'Thank you page:') !!}</h3><small></small>
        {!! Form::textarea('thankyoupage', $page['thankyoupage'], ['name'=>'mongo[thankyoupage]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-info-circle"></i> {!! Form::label('riskStatment', 'Risk Statment:') !!}</h3><small>pass rs=1 Param to display</small>
        {!! Form::textarea('riskStatment', $page['riskStatment'], ['name'=>'mongo[riskStatment]', 'class'=>'editor form-control']) !!}
    </div>

    <div class="form-group">
        <h3><i class="fa fa-bullhorn"></i> On Exit popup:</h3><small>epass=532 Param to disable</small>
        <br/>
        {!! Form::label('onExitPopupMsg', 'Message:') !!}
        {!! Form::textarea('onExitPopupMsg', $page['onExitPopup']['msg'], ['name'=>'mongo[onExitPopup][msg]', 'class'=>'editor form-control']) !!}

        {!! Form::label('onExitPopupLink', 'Link:') !!}
        {!! Form::text('onExitPopupLink', $page['onExitPopup']['link'], ['name'=>'mongo[onExitPopup][link]', 'class'=>'editor form-control']) !!}
    </div>

@endsection



@section('editAside')
    <div class="row">

        <h3><i class="fa fa-flag"></i> Banners</h3>
        <table class="table table-hover multiple-mother">
            <thead>
            <tr>
                <th> </th>
                <th>banner</th>
                <th> </th>
            </tr>
            </thead>
            <tbody class="multiple sortableMongo">
            @forelse($page->banners->getChildren() as $i => $field)
                <tr class="mongo" data-id="{{ $field->id }}" data-num="{{ $i }}" data-name="mongo[banners]">
                    <td></td>
                    <td>
                        <input data-name="picture" class="form-control" type="text" value="{{ $field->name }}">
                        <input data-name="title" class="form-control" type="text" value="{{ $field->title }}">
                        <input data-name="link" class="form-control" type="text" value="{{ $field->link }}">
                    </td>
                    <td><button class="del-mongo">Delete</button></td>
                </tr>
            @empty
                <tr data-num="0" data-name="mongo[banners]">
                    <td></td>
                    <td>
                        <input data-name="picture" class="form-control" type="text" value="">
                        <input data-name="title" class="form-control" type="text" value="">
                        <input data-name="link" class="form-control" type="text" value="">
                    </td>
                    <td></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr><td><button class="btn btn-primary addNewRow"><i class="fa fa-plus-square "></i></button></td></tr>
            </tfoot>
        </table>




        <br><br>
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