@extends('admin.layouts.html')

@section('options')
    @include('admin.partials._pageOptions')
@endsection

@section('content')
    <h1><small>SHOW: </small> {{ $page->title }}</h1>
    <div class="row">
        <ul class="pagesList sortablePages">
            @include('admin.partials._pagesNav', ['pages'=>$page->getChildren(),'showBtns'=>true])
        </ul>
    </div>
@endsection