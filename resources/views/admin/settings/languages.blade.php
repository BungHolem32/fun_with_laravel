@extends('admin.layouts.html')


@section('endOfBody')
    {!! $page->appendAsset('//code.jquery.com/ui/1.11.4/jquery-ui.js') !!}
    {!! $page->appendAsset(url('/js/admin/settings.js')) !!}
@append

@section('content')
    <h1>Languages Page</h1>
    <h2>Do not Change this page without consulting with Yuri or Rotem!!.</h2>
    <br/>

    {!! Form::open(['url' => '/admin/languages']) !!}
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Title native</th>
                <th>CODE __</th>
                <th>CODE ___</th>
                <th>Direction</th>
                <th>Visible</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody class="multiple sortable">
            @foreach(\App\Languages::all()->sortBy('position') as $i => $language)
                <tr data-id="{{ $language->id }}">
                    <td>{{ $i+1 }}</td>
                    <td>{!! Form::text('title', $language->title) !!}</td>
                    <td>{!! Form::text('title_native', $language->title_native) !!}</td>
                    <td>{!! Form::text('code', $language->code) !!}</td>
                    <td>{!! Form::text('code03', $language->code03) !!}</td>
                    <td>{!! Form::select('dir', ['0'=>'ltr','1'=>'rtl'], $language->dir) !!}</td>
                    <td>{!! Form::select('visible', ['0'=>'hidden','1'=>'visible'], $language->visible) !!}</td>
                    <td>{!! Form::select('active', ['0'=>'OFF','1'=>'ON'], $language->active) !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <div class="col-lg-2">
            {!! Form::submit('Save', ['id'=>'saveAjax', 'class'=>'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <div class="form-group">
        <div class="col-lg-2">
            <table style="display: none;">
                <tbody class="template">
                    <tr>
                        <td>#</td>
                        <td>{!! Form::text('title', null, ['placeholder'=>'Title:']) !!}</td>
                        <td>{!! Form::text('title_native', null) !!}</td>
                        <td>{!! Form::text('code', null) !!}</td>
                        <td>{!! Form::text('code03', null) !!}</td>
                        <td>{!! Form::select('dir', ['0'=>'ltr','1'=>'rtl']) !!}</td>
                        <td>{!! Form::select('visible', ['0'=>'hidden','1'=>'visible']) !!}</td>
                        <td>{!! Form::select('active', ['0'=>'OFF','1'=>'ON']) !!}</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary addRow" addTo="multiple" template="template"><i class="fa fa-plus-square "></i></button>
        </div>
    </div>

@endsection
