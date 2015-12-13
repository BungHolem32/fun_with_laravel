@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    language test here: @ln(source)
    <br/><br/>
    <div class="form-group">
        {!! Form::label('title_h1', 'H1 Title:') !!}
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <h3><i class="fa fa-file-code-o"></i> {!! Form::label('fileName', 'Chose File Name to use as template:') !!}</h3>
        {!! Form::select('fileName', $page->controller->getPageLayouts(),
                            $page['fileName'],
                            ['name'=>'mongo[fileName]',
                            'class'=>'form-control']) !!}
    </div>
@endsection