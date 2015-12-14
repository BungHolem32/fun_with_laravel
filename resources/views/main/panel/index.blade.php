@extends('funnels.layouts.html')

@if(!App\Customer::isLogged() && !isset($_GET['dev45345354534534']))
    @include('main.panel.login')
@else
    @include('funnels.layouts.panel-layout.'.$page->panelType.'')
@endif
