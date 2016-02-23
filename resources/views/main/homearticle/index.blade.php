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
                    <a class="navbar-brand capitalize" href="#">@ln(open account)</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trade</a></li>
                        <li><a href="#about">Contact us</a></li>
                        <li><a href="#contact">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="wrapper bg">
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
                    <div class="gallery js-flickity"
                         data-flickity-options='{ "freeScroll": false, "wrapAround": true }'>
                        <div class="col-xs-12">
                            <img class="img-responsive" src="/img/rboptions-org/ico-1.png" alt="">
                            <h2 class="capitalize">@ln(experience)</h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xs-12">
                            <img class="img-responsive" src="/img/rboptions-org/ico-2.png" alt="">
                            <h2 class="capitalize">@ln(investment)</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xs-12">
                            <img class="img-responsive" src="/img/rboptions-org/ico-3.png" alt="">
                            <h2 class="capitalize">@ln(education)</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xs-12">
                            <img class="img-responsive" src="/img/rboptions-org/ico-4.png" alt="">
                            <h2 class="capitalize">@ln(customer service)</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                        <div class="col-xs-12">
                            <img class="img-responsive" src="/img/rboptions-org/ico-5.png" alt="">
                            <h2 class="capitalize">@ln(security)</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div><!-- /.col-lg-4 -->
                    </div>




                    <div class="rubricks hidden-xs">
                        <div class="col-xs-12 col-sm-4">
                            <img class="img-responsive" src="/img/rboptions-org/ico-1.png" alt="">
                            <h2 class="capitalize">@ln(experience)</h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xs-12 col-sm-4">
                            <img class="img-responsive" src="/img/rboptions-org/ico-2.png" alt="">
                            <h2 class="capitalize">@ln(investment)</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xs-12 col-sm-4">
                            <img class="img-responsive" src="/img/rboptions-org/ico-3.png" alt="">
                            <h2 class="capitalize">@ln(education)</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <img class="img-responsive" src="/img/rboptions-org/ico-4.png" alt="">
                            <h2 class="capitalize">@ln(customer service)</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="/img/rboptions-org/ico-5.png" alt="">
                            <h2 class="capitalize">@ln(security)</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
                        </div><!-- /.col-lg-4 -->
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
    <div class="wrapper body">
        <div class="container marketing body center">
            <!-- START THE FEATURETTES -->
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
        </div>
    </div>

    <div class="container">
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>


@endsection

@section('bottom-scripts')

@append