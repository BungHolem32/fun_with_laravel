
<!DOCTYPE html>
<html lang="en" @if(Request::local()->dir) dir="rtl" @endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title_h1 }}</title>
    @yield('head')
</head>
<!-- NAVBAR
================================================== -->
<body>

@yield('content')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/js/vendor/bootstrap/bootstrap.min.js"></script>
@yield('bottom-scripts')
</body>
</html>