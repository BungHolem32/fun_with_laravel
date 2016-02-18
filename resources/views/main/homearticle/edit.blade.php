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
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>
@endsection