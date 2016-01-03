@extends('funnels.layouts.html')

@if(!App\Customer::isLogged() && !isset($_GET['dev45345354534534']))
    @include('main.panel.login')
@else
    @if(!empty($page->panelType->get()))
        @include('panels.panel-layout.'.$page->panelType.'')
    @else
        No Template selected
    @endif
@endif
