@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')
    <div class="form-group">
        {!! Form::label('title_h1', 'H1 Title:') !!}
        {!! Form::text('title_h1', $page['title_h1'], ['name'=>'mongo[title_h1]', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('redirect', 'Redirect To:') !!}
       {{-- {!! Form::select('redirect', $page['redirect'], ['name'=>'mongo[redirect]', 'class'=>'form-control']) !!}--}}
        {!! Form::select(null, $page->getChildrenTitles(), $page['redirect'], ['name'=>"mongo[redirect]", 'class'=>'form-control col-md-4', 'placeholder'=>'']) !!}
    </div>
@endsection