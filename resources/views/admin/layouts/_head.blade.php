<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title>Laravel</title>

<link href="{{ asset('/adminpanel/css/admin.css') }}" rel="stylesheet">
<link href="{{ asset('/adminpanel/css/simple-sidebar.css') }}" rel="stylesheet">


<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
{{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="/js/vendor/html5shiv.min.js"></script>
<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<![endif]-->

@yield('head')