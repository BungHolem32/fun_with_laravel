@extends('funnels.layouts.html')
{{--{{dd(base_path().'/resources/views/main/panel/login-'.$page->panelType.'.blade.php')}}--}}
@if(!App\Customer::isLogged())
    @if(isMongoNotEmpty($page->panelType) && file_exists(base_path().'/resources/views/main/panel/login-'.$page->panelType.'.blade.php'))
        @include('main.panel.login-'.$page->panelType)
    @else
        @include('main.panel.login')
    @endif
@else
    @if(isMongoNotEmpty($page->panelType->get()))
        @include('panels.panel-layout.'.$page->panelType)
    @else
        No Template selected
    @endif
@endif
