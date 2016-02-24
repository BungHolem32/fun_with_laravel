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
        <div class="logo"><img src="/img/rb-1420458628b28KP.png" alt="logo" /></div>
    </div>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only capitalize">@ln(Toggle navigation)</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="capitalize btn btn-brand" href="#">@ln(open account) &nbsp; <i class="fa fa-angle-double-right"></i></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav capitalize">
                        <li class="active"><a href="#">@ln(trade)</a></li>
                        <li><a href="#">@ln(contact us)</a></li>
                        <li><a href="#">@ln(privacy policy)</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="wrapper bg" style="background-image: url('{{$page->background}}')">
        <div class="container marketing center">
            <div class="jumbotron">
                <h1 class="capitalize">In <span class="big">Binary Options</span>,<br>&nbsp;&nbsp; &nbsp;There's Only <span class="big">One Perfect Choice</span></h1>
            </div>
        </div>


        <div class="wrapper bg-white animated slideInUp">
            <div class="container marketing center">
                <!-- Three columns of text below the carousel -->
                <div class="row center">
                    <div class="col-xs-12 below-header">
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                </div>

                <div class="row center">
                    <?php
                        // todo: fix the image upload to support multi-dimensions array then use this for each properly.
                        $rubricksArray = [];
                        for($i=1; $i<=5; $i++){
                            $rub = 'rub'.$i;
                            $tempArr['pic'] = $page->{$rub.'_pic'}->get();
                            $tempArr['title'] = $page->{$rub.'_title'}->get();
                            $tempArr['text'] = $page->{$rub.'_text'}->get();
                            if(!empty($tempArr['title']))
                                $rubricksArray[] = $tempArr;
                        }
                    ?>
                    <div class="rubricks gallery js-flickity hidden-lg hidden-md hidden-sm"
                         data-flickity-options='{ "freeScroll": false, "wrapAround": true }'>
                        @forelse($rubricksArray as $rubrick)
                            <div class="col-xs-12">
                                <img class="img-responsive" src="{{ $rubrick['pic'] }}" alt="">
                                <h2 class="capitalize">{{ $rubrick['title'] }}</h2>
                                <p>{{ $rubrick['text'] }}</p>
                            </div>
                        @empty

                        @endforelse
                    </div>


                    <div class="rubricks hidden-xs padd-t padd-b">
                        @forelse($rubricksArray as $i => $rubrick)
                            <div class="col-sm-4 @if($i==3) col-sm-offset-2 @endif">
                                <img class="img-responsive" src="{{ $rubrick['pic'] }}" alt="">
                                <h2 class="capitalize">{{ $rubrick['title'] }}</h2>
                                <p>{{ $rubrick['text'] }}</p>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
    <div class="wrapper body">
        <div class="container marketing body center padd-b">
            <!-- START THE FEATURETTES -->
            <a class="capitalize btn btn-brand pull-right" style="margin-top: 2em;" href="#">@ln(open account) &nbsp; <i class="fa fa-angle-double-right"></i></a>
            <br>{!! $page->body !!}
            <!-- /END THE FEATURETTES -->
        </div>
    </div>

    <div class="container payments">
        <div class="row">
            <div class="pull-left hidden-xs">
                <img src="/img/rboptions-org/payments.png" alt="">
            </div>
            <div class="pull-right hidden-xs">
                <img src="/img/rboptions-org/ssl.png" alt="" class="marg-r">
                <img src="/img/rboptions-org/18.png" alt="">
            </div>
            <div class="hidden-sm hidden-md hidden-lg center">
                <img src="/img/rboptions-org/payments.png" alt="">
            </div>
            <div class="hidden-sm hidden-md hidden-lg center">
                <img src="/img/rboptions-org/ssl.png" alt="" class="marg-r">
                <img src="/img/rboptions-org/18.png" alt="">
            </div>
        </div>
    </div>

    <div class="wrapper footer">
        <div class="container">
            <div class="row center padd-t">
                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#"><i class="fa fa-arrow-up"></i> Back to top</a></p>
                    <nav class="uppercase">
                        <a href="#">@ln(open account)</a> &middot;
                        <a href="#">@ln(trade)</a> &middot;
                        <a href="#">@ln(contect us)</a> &middot;
                        <a href="#">@ln(privacy policy)</a>
                    </nav>
                </footer>
                <div class="risk padd-t padd-b">
                    <p>{!! $page->risk !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-scripts')

@append