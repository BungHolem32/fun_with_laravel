<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    @include('funnels.layouts._head')

    @if ($page->getParent()->scripts->headScripts === $page->scripts->headScripts)
        {!! $page->scripts->headScripts !!}
    @else
        {!! $page->getParent()->scripts->headScripts !!}
        {!! $page->scripts->headScripts !!}
    @endif


</head>
<body>


    @if ($page->getParent()->scripts->afterBodyScripts === $page->scripts->afterBodyScripts)
        {!! $page->scripts->afterBodyScripts !!}
    @else
        {!! $page->getParent()->scripts->afterBodyScripts !!}
        {!! $page->scripts->afterBodyScripts !!}
    @endif


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    @yield('page-layout')

    @include('funnels.layouts._scripts-bottom')


    @if ($page->getParent()->scripts->bodyEndScripts === $page->scripts->bodyEndScripts)
        {!! $page->scripts->bodyEndScripts !!}
    @else
        {!! $page->getParent()->scripts->bodyEndScripts !!}
        {!! $page->scripts->bodyEndScripts !!}
    @endif

</body>
</html>
