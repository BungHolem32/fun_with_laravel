@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Startup CSS -->
    {!! $page->appendAsset(url('css/aussie-new/uk/style-0.css')) !!}
    {!! $page->appendAsset(url('css/aussie-new/uk/style-members-0.css')) !!}
    <!--[if lt IE 9]>
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>

@append
@section('bottom-scripts')
    @com('funnel_scripts')
    <script src="/js/aussie-new/uk/bootstrap.min.js"></script>
    <script src="/js/fancybox/jquery.fancybox.js"></script>
    <script src="/js/aussie-new/uk/funnel-object.js"></script>
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}

@append

@section('page-layout')

    <div id="wrapper" class="second-page">

        {{--TOP STRIP POSITION ABSOLUTE--}}
        <section id="top_strip">
            <div class="container-fluid"></div>
        </section>

        <!--==============================================HEADER TAG=================================================-->
        <!--HEADER TAG-->
        <header class="container">

            <!--LOGOS PART-->
            <div class="logos row">

                <!--COMPANY LOGO-->
                <div id="company" class="pull-left col-md-3 col-sm-4 col-xs-5  ">
                    <img src="/img/aussie-new/uk/maple-logo.jpg"  alt="company logo" class="img-responsive">
                </div>

                <!--MAN LOGO-->
                <div class="man col-md-4 pull-right col-sm-4 col-xs-6 text-center">
                    <img src="/img/aussie-new/uk/evan-right.jpg" alt="man pic" class="img-responsive pull-right">
                </div>

            </div>
        </header>
        <!--==============================================HEADER TAG=================================================-->

        <!--===============================================MAIN TAG==================================================-->
        <div class="row">
            <main class="container-fluid">
                <!--VIDEO AND FORM TAGS-->

                {{--TOP PART  - FORM AND VIDEO --}}
                <section id="video_n_form" class="container">

                    <div class="row">

                        <!--Video Tag-->
                        @include('funnels.layouts._partials._video',  ['w'=>'100%','h'=>'100%'])

                                <!--CONTENT AND FORM  Tag-->
                        <div id="form_part" class='col-lg-4 col-md-4 col-sm-12 form-second'>
                            {{--FORM PLACE--}}
                            @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])
                        </div>

                    </div>
                </section>


                <!--STRIP TAG WITH LINKS TO ALL OF THE INSENSITIVE -->
                <section id="strip_href" class="site-navbar">

                    <div class="container">
                        <ul class="row">
                            <div class="col-md-12">
                                <li class="col-md-3 col-sm-12 col-xs-12 steps-m"><a href="#3-steps">Getting Started</a></li>
                                <li class="col-md-4 col-sm-12 col-xs-12 success-m"><a href="#success">Current Members
                                        Trading
                                        Accounts</a></li>
                                <li class="col-md-5 col-sm-12 col-xs-12 live-m"><a href="#live-result-pic">See Live Facebook
                                        &amp;
                                        Twitter Feedback</a></li>
                            </div>
                        </ul>
                    </div>

                </section>

                <!--========================PICS PART START================================ -->

                <!--3 STEPS PAGE PIC-->
                {{--DESKTOP VIEW--}}
                <section id="3-steps" class="container">
                    <div class="row">
                        <div class="col-md-12 desktop-steps visible-lg-block">
                            {{--<a class="fancybox" rel="group" href="/img/aussie/guarantee.png">--}}
                            <img src="/img/aussie-new/uk/3step.png"  alt="3 steps proccess pic"
                                 class="3-step-proccess">
                            {{--</a>--}}
                        </div>
                    </div>

                    {{--MOBILE VIEW--}}
                    <div class="row mobile-steps hidden-lg">
                        <div class="col-md-12  mobile-steps">
                            {{--<a class="fancybox" rel="group" href="/img/aussie/guarantee.png">--}}
                            <img src="/img/aussie-new/uk/mobile/step-1.png" alt="3 steps proccess pic"
                                 class=" col-md-12 col-sm-12  col-xs-12 3-step-proccess">
                            {{--</a>--}}
                        </div>
                        <div class="col-md-12  mobile-steps">
                            {{--<a class="fancybox" rel="group" href="/img/aussie/guarantee.png">--}}
                            <img src="/img/aussie-new/uk/mobile/step-2.png" alt="3 steps proccess pic"
                                 class=" col-md-12 col-sm-12  col-xs-12 3-step-proccess">
                            {{--</a>--}}
                        </div>
                        <div class="col-md-12  mobile-steps">
                            {{--<a class="fancybox" rel="group" href="/img/aussie/guarantee.png">--}}
                            <img src="/img/aussie-new/uk/mobile/step-3.png" alt="3 steps proccess pic"
                                 class=" col-md-12 col-sm-12  col-xs-12 3-step-proccess">
                            {{--</a>--}}
                        </div>
                    </div>
                </section>


                <!--FIRST SUCCESS STORY-->
                <section id="success" class="container success-part">
                    <div class="row">

                        {{--TITLE SECTION--}}
                        <header class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                            <h2 class="title-question">Check Out My LIVE Personal Trading Account</h2>
                        </header>

                        {{--SUCCESS STORIES INNER WRAPPER--}}
                        <div class="col-md-12 col-sm-12 col-xs-12 success-stories">

                            {{--FIRST PART PIC HUMAN--}}
                            <div class="success-human-pic col-md-4 col-sm-12 col-xs-12 first-human">
                                <img src="/img/aussie-new/uk/man.png" alt="man-that-successed-pic"
                                     class="col-md-10 col-sm-10 col-sm-offset-1  col-xs-12 man-that-successed-pic">
                            </div>

                            {{--SECOND PART CONTENT TEXT --}}
                            <div class="success-text col-md-4 col-sm-12 col-xs-12 ">
                                <p>
                                    {{--title--}}
                                    <span class="success-title">Evan Wright - Oxford Method Founder</span>
                                    {{--profit text--}}
                                    <span class="success-profit bold">Profit To Date:</span>
                                    {{--price--}}
                                    <span class="success-money bold underline">$2,187,612.00</span>
                                </p>

                                {{--click here To view Live Account--}}
                                <p class="success-button visible-md-block visible-lg-block  ">
                                    <a href="#customers" onclick="_funnel.popup_trade.init('tb0')" class="bold">Click Here
                                        To View <br> My Live
                                        Account</a>
                                </p>
                            </div>

                            {{--THIRD PART VERIFIED PIC--}}
                            <div class="success-verified-pic col-md-4 col-sm-12 col-xs-12 center-block">
                                <img src="/img/aussie-new/uk/vta.png" alt="verified-pic">
                            </div>
                        </div>

                    </div>
                </section>


                <!--SECOND SUCCESS STORY-->
                <section class="container success-part">
                    <div class="row">

                        {{--TITLE SECTION--}}
                        <header class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                            <h2 class="title-question">More Accounts From Our Customers</h2>
                        </header>

                        {{--SUCCESS STORIES INNER WRAPPER--}}
                        <div class="col-md-12  col-sm-12 col-xs-12 success-stories">

                            {{--FIRST PART PIC HUMAN--}}
                            <div class="success-human-pic col-md-4 col-sm-12 col-xs-12 other-humans">
                                <img src="/img/aussie-new/uk/p1.png" alt="man-that-successed-pic"
                                     class="col-md-10 col-sm-10 col-sm-offset-1  col-xs-12 man-that-successed-pic">
                            </div>

                            {{--SECOND PART CONTENT TEXT --}}
                            <div class="success-text other-success col-md-4 col-sm-12 col-xs-12">
                                <p>
                                    {{--title--}}
                                    <span class="success-title">EMILY MICHAELS</span>
                                    {{--date--}}
                                    <span class="success-date">Start Date: 19th May 2016</span>
                                    {{--profit text--}}
                                    <span class="success-profit bold">Profit To Date:</span>
                                    {{--price--}}
                                    <span class="success-money bold underline">$212,450.00</span>
                                </p>

                                {{--click here To view Live Account--}}
                                <p class="success-button visible-md-block visible-lg-block ">
                                    <a href="#customers" onclick="_funnel.popup_trade.init('tb1');" class="bold">Click Here
                                        To View <br> My Live
                                        Statement</a>
                                </p>

                            </div>
                            {{--THIRD PART VERIFIED PIC--}}
                            <div class="success-verified-pic col-md-4 col-sm-12 col-xs-12">
                                <img src="/img/aussie-new/uk/vta.png" alt="verified-pic">
                            </div>
                        </div>
                    </div>
                </section>


                <!--THIRD SUCCESS STORY-->
                <section class="container success-part">
                    <div class="row">

                        {{--SUCCESS STORIES INNER WRAPPER--}}
                        <div class="col-md-12 col-sm-12 col-xs-12 success-stories">

                            {{--FIRST PART PIC HUMAN--}}
                            <div class="success-human-pic col-md-4 col-sm-12 col-xs-12 other-humans">
                                <img src="/img/aussie-new/uk/p2.png" alt="man-that-successed-pic"
                                     class="col-md-10 col-sm-10 col-sm-offset-1  col-xs-12 man-that-successed-pic">
                            </div>

                            {{--SECOND PART CONTENT TEXT --}}
                            <div class="success-text other-success col-md-4 col-sm-12 col-xs-12">

                                <p>
                                    {{--title--}}
                                    <span class="success-title">ROSS ROBERTSON</span>
                                    {{--date--}}
                                    <span class="success-date">Start Date: 28th May 2015</span>
                                    {{--profit text--}}
                                    <span class="success-profit bold">Profit To Date:</span>
                                    {{--price--}}
                                    <span class="success-money bold underline">$196,201.00</span>
                                </p>

                                {{--click here To view Live Account--}}
                                <p class="success-button visible-md-block visible-lg-block ">
                                    <a href="#customers" onclick="_funnel.popup_trade.init('tb2');" class="bold">Click Here
                                        To View <br> My Live
                                        Statement</a>
                                </p>
                            </div>
                            {{--THIRD PART VERIFIED PIC--}}
                            <div class="success-verified-pic col-md-4 col-sm-12 col-xs-12">
                                <img src="/img/aussie-new/uk/vta.png" alt="verified-pic">
                            </div>
                        </div>
                    </div>
                </section>

                <!--FOURTH SUCCESS STORY-->
                <section class="container success-part">
                    <div class="row">

                        {{--SUCCESS STORIES INNER WRAPPER--}}
                        <div class="col-md-12 col-sm-12 col-xs-12 success-stories">

                            {{--FIRST PART PIC HUMAN--}}
                            <div class="success-human-pic col-md-4 col-sm-12 col-xs-12 other-humans">
                                <img src="/img/aussie-new/uk/p3.png" alt="man-that-successed-pic"
                                     class="col-md-10 col-sm-10 col-sm-offset-1  col-xs-12 man-that-successed-pic">
                            </div>

                            {{--SECOND PART CONTENT TEXT --}}
                            <div class="success-text col-md-4 col-sm-12 col-xs-12 other-success">
                                <p>
                                    {{--title--}}
                                    <span class="success-title">MARCUS ANDREWS</span>
                                    {{--date--}}
                                    <span class="success-date">Start Date: 2nd June 2015</span>
                                    {{--profit text--}}
                                    <span class="success-profit bold">Profit To Date:</span>
                                    {{--price--}}
                                    <span class="success-money bold underline">$103,870.00</span>
                                </p>

                                {{--click here To view Live Account--}}
                                <p class="success-button visible-md-block visible-lg-block ">
                                    <a href="#customers" onclick="_funnel.popup_trade.init('tb3');" class="bold">Click Here
                                        To View <br> My Live
                                        Statement</a>
                                </p>
                            </div>

                            {{--THIRD PART VERIFIED PIC--}}
                            <div class="success-verified-pic col-md-4 col-sm-12 col-xs-12">
                                <img src="/img/aussie-new/uk/vta.png" alt="verified-pic">
                            </div>
                        </div>
                    </div>
                </section>

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
                                    <img src="/img/aussie-new/uk/fb.png" alt="facebook logo"
                                         class='img-responsive center-block'>
                                </div>
                                <div class="logotag tweeter col-md-6  col-sm-5  col-xm-6">
                                    <img src="/img/aussie-new/uk/twt.png" alt="tweeter logo"
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
                                    <img src="/img/aussie-new/uk/twt.png" alt="tweets logo"
                                         class="img-responsive center-block">
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
                            <img src="/img/aussie-new/uk/ipad.png" alt="ipad image" class="img-responsive center-block">
                            <div class="video-tag">
                                @include('funnels.layouts._partials._video', ['video_url'=>'http://video.chaki.netdna-cdn.com/guide4f.mp4','w'=>'100%', 'h'=>'100%','autoplay'=>'false'])
                            </div>
                        </div>
                    </div>
                </section>

                {{--LIVE THIRD PARTY TRADE--}}
                <section id="live-third-party" class="container">
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
                        </div>
                    </div>
                </section>

                <!--PICS PART END-->


                <!--FREQUENTLY-ASKED-QUESTIONS PART=-->
                <section id="frequently-asked-questions" class="row">
                    {{--HEADER TITLE--}}
                    <header class="col-md-12 col-sm-12 col-xs-12">
                        <h2>Frequently Asked Questions</h2>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 question_n_answer">

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!--===============================================MAIN TAG======================================================-->

        <!--===============================================FOOTER TAG====================================================-->

        <footer class="row col-md-12">

            <div id="left-footer" class="col-md-10 col-sm-10 col-xs-9 push-left"> Copyright 2016 Aussie Method. All
                Right Reserved.
            </div>
            <div id="right-footer" class="col-md-2 col-sm-2 col-xs-3 push-right">
                <a class="fancybox_iframe" href="/EN/aussie-new/uk/policy" target="&quot;_blank&quot;">Privacy </a>
                <a class="fancybox_iframe" href="/EN/aussie/members/../terms" target="&quot;_blank&quot;">Terms </a>
            </div>
        </footer>

        <!--===============================================FOOTER TAG====================================================-->
    </div>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

    <div id="hoverbox"
         style="display: none; filter: alpha(opacity=60); KHTMLOpacity: 0.60; MozOpacity: 0.60; opacity: 0.60; position: fixed;background-color: #000000; z-index:0; width: 100%; height: 100%; left: 0px; top:0px;"
         onClick="_funnel.popup_trade.hide_trade()">
    </div>

    <!-- Placed at the end of the document so the pages load faster -->

    <div id="expop_dim"></div>
    <div id="tb0" class="popup"
         style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;"
             onClick="_funnel.popup_trade.hide_trade('tb0')">X
        </div>
    </div>
    <div id="tb1" class="popup"
         style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;"
             onClick="_funnel.popup_trade.hide_trade('tb1')">X
        </div>
    </div>
    <div id="tb2" class="popup"
         style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;"
             onClick="_funnel.popup_trade.hide_trade('tb2')">X
        </div>
    </div>
    <div id="tb3" class="popup"
         style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;"
             onClick="_funnel.popup_trade.hide_trade('tb3')">X
        </div>

    </div>
@endsection