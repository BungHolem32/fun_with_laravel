<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ $page->title_h1 }}</title>
<meta name="description" content="{{ $page->description }}">
<meta id="viewport" name="viewport" content="width=device-width, maximum-scale=1">
{{--<link rel="stylesheet" href="/css/styles-{{ Request::local()->dir }}.css">--}}
<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

{{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@yield('head')