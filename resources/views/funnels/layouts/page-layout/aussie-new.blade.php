@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Startup CSS -->
    {!! $page->appendAsset(url('css/aussie-new/style-0.css')) !!}
    <!--[if lt IE 9]>
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
@append
@section('bottom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
    @com('funnel_scripts')
    <script src="/js/fancybox/jquery.fancybox.js"></script>

    <script type="text/javascript" src="/js/aussie-new/funnel-object.js"></script>
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')

    <div id="wrapper" class="first-page">

        <!--WORK LOGO FIXED AT TOP LEFT IN  THE SCREEN-->
        <section id="works-fixed">
            <img src="/img/aussie-new/callout.png" alt="">
        </section>

        {{--TOP STRIP POSITION ABSOLUTE--}}
        <section id="top_strip">
            <div class="container-fluid"></div>
        </section>

        <!--HEADER TAG-->
        <header class="container">

            <!--LOGOS PART-->
            <div class="logos row">

                <!--COMPANY LOGO-->
                <div id="company" class="pull-left col-md-2 col-sm-2 col-xs-2  ">
                    <img src="/img/aussie-new/aussieLogo.jpg" alt="company logo">
                </div>

                <!--MAN LOGO-->
                <div class="man col-md-5 pull-right col-sm-4 col-xs-5 text-center">
                    <img src="/img/aussie-new/jake-petro.jpg" alt="man pic">
                </div>

            </div>
        </header>

        <!--MAIN TAG-->
        <main class="container-fluid">
            <!--VIDEO AND FORM TAGS-->

            <section id="video_n_form" class="container">

                <div class="row">

                    <!--Video Tag-->
                    <div id="video_part" class='col-md-7  {{--col-sm-12--}} pull-left'>
                        {{--<video width="640" height="360" autoplay style="padding-top: 17px;">--}}
                        {{--<source src="http://cdnmediahosting.com/user29339cdn3/newproducts2014/freemoneynopromo.mp4" type="video/mp4" >--}}
                        {{--</video>--}}
                        @include('funnels.layouts._partials._video',  ['w'=>'100%','h'=>'100%'])
                    </div>

                    <!--Form Tag-->
                    <div id="form_part" class='col-md-4  col-sm-12 form-first'>
                        {{--TEXT--}}
                        <p>START <strong>NOW</strong></p>
                        <p>Enter your email below to gain instant
                            free access to the Aussie Method system
                        </p>
                        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post','align'=>'center']) !!}
                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                            <input id="firstPageSignUpMail" type="email" name="email" placeholder="YOUR EMAIL ADDRESS.."
                                   required="required" class="col-sm-12"/>
                        @endif
                        <input type="submit" class="align-center col-md-12 col-sm-12 submit-aussie" value=""/>
                        {!! Form::close() !!}
                        <div class="col-md-12 col-sm-12">
                            <img src="/img/aussie-new/certs.png" class="trust-pic">
                        </div>
                    </div>

                </div>
            </section>

            <!--STRIP TAG WITH LINKS TO ALL OF THE INCENTIVES-->
            <section id="strip_href">
                <div class="container">
                    <ul class="row">
                        <li class="col-md-offset-1 col-md-2 col-sm-12 col-xs-12 who"><a href="#jake-pertu">Who am I?</a>
                        </li>
                        <li class="col-md-2 col-sm-12 col-xs-12 success"><a href="#success-pic">Success Stories</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 video"><a href="#video-how-method-works">How It Works</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 live-result"><a href="#live-third-party">Live Results</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 faq"><a href="#frequently-asked-questions">FAQs</a></li>
                    </ul>
                </div>
            </section>

            <!--========================PICS PART START================================ -->

            <!--JAKE PERTU PIC-->
            <section id="jake-pertu" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="fancybox" rel="group" href="/img/aussie-new/guarantee.png">
                            <img src="/img/aussie-new/hey.png" alt="first_pic-jake-pertu pic"
                                 class="jake-pertu img-responsive center-block">
                        </a>
                    </div>
                </div>
            </section>


            <!--WHATS UP PIC-->
            <section id="success-pic" class="container">
                <div class="row">
                    <header class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                        <h2 class="title-question">Success Stories</h2>
                    </header>
                    <div class="pic-iphone col-md-12">
                        <img src="/img/aussie-new/iphone.png" alt="iphone-massage-pic"
                             class="img-responsive center-block iphone-pic">
                    </div>
                    <div class="pic-facebook col-md-12">
                        <img src="/img/aussie-new/face.png" alt="facebook-pic"
                             class="img-responsive center-block facebook-pic">
                    </div>
                </div>
            </section>

            <!--TWEETER & FACEBOOK TAGS-->
            <!--TWEETER & FACEBOOK TAGS LIVE RESULTS -->
            <section id="live-result-pic" class="container">


                <div class="row">

                    <!--TITLE TWEETED + FACEBOOK PICS-->
                    <header class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-question">LIVE MINUTE BY MINUTE UPDATING TWITTER AND FACEBOOK FEEDS</h2>
                    </header>

                    {{--CONTENT PART--}}
                    <div class="social  col-md-11 col-sm-11 col-xs-11">

                        {{--TWEET AND FACEBOOK TITLES--}}
                        <div class="images col-md-12 col-xs-12">
                            <div class="logotag facebook  col-md-6  col-sm-11 col-xs-12">
                                <img src="/img/aussie-new/fb.png" alt="facebook logo"
                                     class='img-responsive center-block'>
                            </div>
                            <div class="logotag tweeter col-md-6  col-sm-5  col-xm-6">
                                <img src="/img/aussie-new/twt.png" alt="tweeter logo"
                                     class='img-responsive center-block'>
                            </div>
                        </div>

                        <div id="content-social " class="col-md-12">

                            {{--TITLE FACEBOOK DESKTOP--}}
                            <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12'>
                                <h4 class="fb-title capitalize">comments</h4>
                            </header>

                            {{--TITLE TWEETS DESKTOP --}}
                            <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12 tweets-desktop'>
                                <h4 class="tweets-title capitalize">Tweets</h4>
                            </header>

                            {{--FACEBOOK TAB--}}
                            <div id="facebook-tab" class="col-md-6"></div>

                            {{--========================================================================================--}}

                            {{--LOGOTAG TWEET PICTURE MOBILE--}}
                            <div class="logotag tweet-2 col-md-6 col-sm-12  col-xm-6 logotag-desktop">
                                <img src="/img/aussie-new/twt.png" alt="tweets logo" class="img-responsive center-block">
                            </div>

                            <!-- TITLE TWEETS MOBILE -->
                            <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12'>
                                <h4 class="tweets-title-2 capitalize">Tweets</h4>
                            </header>

                            {{--TWEETER TAB--}}
                            <div id="tweets-tab" class="col-md-6 "></div>

                        </div>
                    </div>
                </div>
            </section>
            <!--Video How_it_work PIC-->
            <section id="video-how-method-works" class="container">
                <div class="row">
                    <header class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-question">How The Aussie Method Works</h2>
                    </header>

                    <div class="video-n-images col-md-12">
                        <img src="/img/aussie-new/ipad.png" alt="ipad image" class="img-responsive center-block">
                        <div class="video-tag">
                            @include('funnels.layouts._partials._video', ['video_url'=>'http://video.chaki.netdna-cdn.com/guide4f.mp4','w'=>'100%', 'h'=>'100%','autoplay'=>'false'])
                        </div>
                    </div>
                </div>
            </section>

            {{--LIVE THIRD PARTY  PART--}}
            <section id="live-third-party" class="container center-block">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 align-center">
                        <header>
                          <h2>Live Third Party Verified Results!</h2>
                        </header>

                        {{--table layout--}}
                        <div class="table-trader col-md-12 col-sm-12 col-xs-12 align-center">
                            <ul class="col-md-12 col-sm-12 col-xs-12 align-center">
                                <li class="col-lg-6 col-md-4 col-sm-4 col-xs-4">Aussie Method Member</li>
                                <li class="col-lg-1 col-md-2 col-sm-2 col-xs-2">Profit</li>
                                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Trade Time</li>
                                <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3">Currency</li>
                            </ul>
                            <div id="trades"></div>
                        </div>

                        {{--<table class="table table-striped table-bordered shadowed table-hover"--}}
                        {{--id="positionsHistoryTable"--}}
                        {{--style="background-color:#FFF;" bgcolor="#FFFFFF">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Aussie Method Member</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Profit</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Trade Time</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>--}}
                        {{--Currency--}}
                        {{--</center>--}}
                        {{--</font></th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody id="trades">--}}

                        {{--</tbody>--}}
                        {{--</table>--}}
                    </div>
                </div>
            </section>


            <section>
            </section>
            <!--===========================PICS PART END===================================-->


            <!--===============================FREQUENTLY-ASKED-QUESTIONS PART===============================================-->
            <section id="frequently-asked-questions" class="row">
                {{--HEADER TITLE--}}

                <div class="container">
                    <div class="row">
                        <header class="col-md-12 col-sm-12 col-xs-12"><h2>Frequently Asked Questions</h2></header>
                        <div class="col-md-12 question_n_answer"></div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="row col-md-12">

            <div id="left-footer" class="col-md-10 col-sm-10 col-xs-9 push-left"> Copyright 2016 Aussie Method. All
                Right Reserved.
            </div>
            <div id="right-footer" class="col-md-2 col-sm-2 col-xs-3 push-right">
                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                |
                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/terms", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Terms'])
            </div>
        </footer>
    </div>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
@endsection
