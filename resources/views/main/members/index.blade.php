@extends('funnels.layouts.html')
{{--{{dd($page->controller->getForms())}}--}}
<?php
$formType = $page->formType;
$getforms = $page->controller->getForms();
$lp = 0;
if($getforms[$formType] == 'Vertical Form'){
    $lp = 1;
    $lpName = $page->title->get();
}


?>
@if($lp == 1)
    @include('funnels.layouts.page-layout.lp')
@elseif(!empty($page->funnelType->get()))
    @include('funnels.layouts.page-layout.'.$page->funnelType.'')
@else
    No Template selected
@endif


@if($page->getParent()->switches->showSmsField === "1")
    @com('sms_verification')
@endif
