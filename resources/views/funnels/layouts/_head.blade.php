<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ $page->title_h1 }}</title>
<meta name="description" content="{{ $page->description }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{--<link rel="stylesheet" href="/css/styles-{{ Request::local()->dir }}.css">--}}
<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href='/css/common.css'>

{!! $page->appendAsset(url('/js/vendor/jquery-1.11.2.min.js')) !!}
{!! $page->appendAsset(url('/js/vendor/underscore-min.js')) !!}



{{-- THIS IS FOR THE TAG MANAGER TRIGGERS (ASK RONEN or ROTEM) --}}
<script>var dataLayer=[];</script>
@yield('head')

<meta name="csrf-token" content="{{ csrf_token() }}" />