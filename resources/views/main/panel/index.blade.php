@extends('funnels.layouts.html')

@if(!\Customer::isLogged())
    @include('main.panel.login')
@else
    @include('funnels.layouts.panel-layout.'.$page->panelType.'')
@endif
