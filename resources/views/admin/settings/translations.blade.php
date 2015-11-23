@extends('admin.layouts.html')


@section('endOfBody')
    {!! $page->appendAsset('//code.jquery.com/ui/1.11.4/jquery-ui.js') !!}
    {!! $page->appendAsset(url('/js/admin/settings.js')) !!}
@append

@section('content')
    <h1>Translations Page</h1>

    <div class="col-lg-12 text-center padd-t padd-b">
        @foreach($letters as $letter)
            <a href="{{ route('translations') }}?letter={{ $letter }}" class="btn btn-default @if($letter==$current) btn-danger @endif ">{{ $letter }}</a>
        @endforeach
    </div>
    <div class="col-lg-12  padd-t padd-b">
        {!! Form::open(['url' => '/admin/translations']) !!}
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Key</th>
                @foreach($langTable as $langTitle => $langCode)
                    <td>{{ $langTitle }}</td>
                @endforeach
            </tr>
            </thead>
            <tbody class="multiple">
            @foreach($trans as $i => $tran)
                <tr data-id="{{ $tran->id }}">
                    <td>{{ $from+$i+1 }}</td>
                    <td>{!! $tran->lang_key !!}</td>
                    @foreach($langTable as $langTitle => $langCode)
                        <td>{!! Form::text($langCode, $tran->$langCode) !!}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="col-lg-12 text-center  padd-t padd-b">
            @for($i = 1; $i < $numOfPages; $i++)
                <a href="{{ route('translations') }}?p={{ $i }}" class="btn-sm btn-default @if($i==$current) btn-danger @endif ">{{ $i }}</a>
            @endfor
        </div>

        <div class="col-lg-12 text-center  padd-t padd-b">
            <div class="">
                {!! Form::submit('Save Changes', ['id'=>'saveAjax', 'class'=>'btn btn-primary']) !!}
                <button class="btn btn-primary addRow" addTo="multiple" template="template"><i class="fa fa-plus fa-fw "></i></button>
            </div>
            <div style="display: none;">
                <table style="display: none;">
                    <tbody class="template">
                    <tr>
                        <td><i class="fa fa-asterisk  has-warning"></i></td>
                        <td>{!! Form::text('lang_key') !!}</td>
                        @foreach($langTable as $langTitle => $langCode)
                            <td>{!! Form::text($langCode) !!}</td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    <div class="col-lg-12 text-center  padd-t padd-b">
        <div class="col-lg-3 center-block">
            {!! Form::open(['url' => '/admin/translations', 'method'=>'GET']) !!}
            {!! Form::text('search', null, ['class'=>'form-control']) !!}
            {!! Form::select('langs', $AllLangTable, $langTable, ['multiple'=>'multiple', 'name'=>'langs[]']) !!}
            {!! Form::submit('search', ['id'=>'search', 'class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection
