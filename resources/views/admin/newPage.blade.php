@extends('admin.layouts.html')

@section('content')
    <?php
        $parent_id = Request::get('parent_id');
        if (is_numeric($parent_id))
            $page = App\Page::findOrFail($parent_id);
    ?>
    <h1>Create new Page @if(isset($parent_id)) <strong>under {{$page->title}}</strong> @endif</h1>
    {!! Form::open() !!}

        @if(isset($parent_id)) {!! Form::hidden('parent_id', $page->id) !!} @endif

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['name'=>'title', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Url friendly:') !!}
            {!! Form::text('slug', null, ['name'=>'slug', 'class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('save page', ['class'=>'btn btn-primary ']) !!}
        </div>
    {!! Form::close() !!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

@endsection

