<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    @include('funnels.layouts._head')
    {{ $page->scripts->headScripts }}
</head>
<body>
{{ $page->scripts->afterBodyScripts }}

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    @yield('page-layout')

    @include('funnels.layouts._scripts-bottom')

{{ $page->scripts->bodyEndScripts }}

</body>
</html>
