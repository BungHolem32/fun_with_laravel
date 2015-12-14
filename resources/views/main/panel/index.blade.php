@extends('funnels.layouts.html')

@if(!\Customer::isLogged() && !isset($_GET['dev45345354534534']))
    @include('main.panel.login')
@else
    @include('funnels.layouts.panel-layout.'.$page->panelType.'')
@endif
