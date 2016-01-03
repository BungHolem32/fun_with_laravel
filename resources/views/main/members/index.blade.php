@extends('funnels.layouts.html')
@if(!empty($page->funnelType->get()))
    @include('funnels.layouts.page-layout.'.$page->funnelType.'')
@else
    No Template selected
@endif
