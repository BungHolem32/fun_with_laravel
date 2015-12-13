@extends('funnels.layouts.html')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@append

@section('page-layout')
    <div class="container">
        <h1>{{ $page->title_h1 }}</h1>
        <article>
            {!! $page->body !!}
        </article>
    </div>
@endsection

@section('bottom-scripts')

@append