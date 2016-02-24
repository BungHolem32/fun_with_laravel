@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    <div class="form-group">
        {!! Form::label('pic_logo', 'Logo:') !!}
        {!! Form::file('pic_logo', ['name'=>'files[pic_logo]', 'class'=>'form-control']) !!}
        @if($page->pic_logo) <img src="{{ $page->pic_logo }}" width='100%'> @endif
    </div>
    <div class="form-group">
        {!! Form::label('title_h1', 'H1 Title:') !!}
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slogen', 'Slogen:') !!}
        {!! Form::textarea('slogen', $page['slogen'], ['name'=>'mongo[slogen]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', $page['description'], ['name'=>'mongo[description]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', $page['body'], ['name'=>'mongo[body]', 'class'=>'editor form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('background', 'Background:') !!}
        {!! Form::file('background', ['name'=>'files[background]', 'class'=>'form-control']) !!}
        @if($page->background) <img src="{{ $page->background }}" width='100%'> @endif
    </div>
    <div class="form-group">
        {!! Form::label('risk', 'Risk Statement:') !!}
        {!! Form::textarea('risk', $page['risk'], ['name'=>'mongo[risk]', 'class'=>'editor form-control']) !!}
    </div>
@endsection