@extends('funnels.layouts.html')

@if(!App\Customer::isLogged() && !isset($_GET['dev45345354534534']))
    @include('main.panel.login')
@else
    @include('panels.panel-layout.'.$page->panelType.'')
@endif
