@extends('funnels.layouts.html')

@if(!empty($page->funnelType->get()))
    @include('funnels.layouts.page-layout.'.$page->funnelType.'')
@else
    No Template selected
@endif


@if(isMongoNotEmpty($page->componentsEmailPopCom) && isMongoNotEmpty($page->componentsEmailPopCom->interval))
    @com('email_pop')
@endif

{{--@section('content')
    <h1>{{ $page->title_h1 }}</h1>
    <p class="description">{{ $page->description }}</p>
    <div class="content">
        {!! $page->body !!}
    </div>
@endsection--}}
