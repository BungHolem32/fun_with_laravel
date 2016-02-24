@extends('layouts.bootstrap-html')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Carousel Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap/rboptions-org-{{ Request::local()->dir }}.css" rel="stylesheet">
    <link rel="stylesheet" href="/js/vendor/flickity/flickity.css" />
    <script src="/js/vendor/flickity/flickity.pkgd.js"></script>
@append

@section('content')
    <div class="container">
        <div class="logo"><img src="{{ $page->pic_logo }}" alt="logo" /></div>
    </div>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                @include('layouts._bootstrap.navBar')
            </div>
        </nav>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="wrapper bg" style="background-image: url('{{$page->background}}')">
        <div class="container marketing center">
            <div class="jumbotron">
                <h1 class="capitalize">{{ $page->slogen }}</h1>
            </div>
        </div>

    </div>
    <div class="wrapper body">
        <div class="container marketing body center padd-b">
            <!-- START THE FEATURETTES -->
            <br>
            {!! $page->body !!}
            <br>
            <div class="row center">
                <a class="capitalize btn btn-brand center" style="margin-top: 2em;" href="#">@ln(open account) &nbsp; <i class="fa fa-angle-double-right"></i></a>
            </div>
            <!-- /END THE FEATURETTES -->
        </div>
    </div>

    <div class="container payments">
        <div class="row">
            @include('layouts._bootstrap.payments')
        </div>
    </div>

    <div class="wrapper footer">
        <div class="container">
            <div class="row center padd-t">
                <!-- FOOTER -->
                @include('layouts._bootstrap.footer')
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')

@append