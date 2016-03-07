<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    @include('funnels.layouts._head')
    {!! $page->getParent()->scripts->headScripts !!}
    {!! $page->scripts->headScripts !!}
</head>
<body>
{!! $page->getParent()->scripts->afterBodyScripts !!}
{!! $page->scripts->afterBodyScripts !!}

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    @yield('page-layout')
    @include('funnels.layouts._partials._sms-popup')
    @include('funnels.layouts._scripts-bottom')
{!! $page->getParent()->scripts->bodyEndScripts !!}
{!! $page->scripts->bodyEndScripts !!}

</body>
</html>
