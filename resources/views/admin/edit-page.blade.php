@extends('admin.layouts.html')
@com('tinymce')

@section('options')
    <a href="#"><i class="fa fa-search"></i></a>
@endsection

@section('content')
<div class="row">
    {!! Form::open(['files'=>true]) !!}
    <div class="col-lg-8 bg-{{ strtolower(Request::local()->code) }} main-edit">
        <h1 class="animated rubberBand"><small>EDIT: </small>{{ $page->title }}</h1>
        <small>@include('admin.partials._breadcrumbs')</small>
        <h2>{{ $page->description }}</h2>
            <div class="form-group">
                {!! Form::label('title', 'System Title:') !!}
                {!! Form::text('title', $page['title'], ['name'=>'mongo[title]', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('domain', 'Accessible from domain:') !!}
                {!! Form::text('domain', $page->domain, ['name'=>'mongo[domain]', 'class'=>'form-control']) !!}
            </div>
            @yield('edit')
            <div class="form-group">
                {!! Form::submit('save page', ['class'=>'btn btn-primary']) !!}
            </div>
    </div>
    <div class="col-lg-4">
        <aside>
            <div class="row">
                <h3><i class="fa fa-language"></i> Languages</h3>
                <div class="allLangs">
                    @foreach($page->getLanguages() as $i => $lang)
                        <a href="/admin/{{ $lang->code }}/{{ $page->id }}?edit" class="{{ $lang->code }} btn @if(Request::local()->id == $lang->id) btn-primary @else btn-default @endif ">{{ $lang->title }}</a>
                    @endforeach
                </div>
            </div>

            @include('admin.partials._routes')


            @yield('editAside')

        </aside>
    </div>
    {!! Form::close() !!}
</div>
@endsection