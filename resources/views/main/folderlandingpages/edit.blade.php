@extends('admin.edit-page')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('edit')


@endsection

@section('editAside')
    <div class="row">
        <h3><i class="fa fa-check-square-o"></i> Switches</h3>
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