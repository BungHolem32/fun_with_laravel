@section('head')
    {!! $page->appendAsset(url('/css/virtnext/boost-form.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/bootstrap-theme.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/flipclock.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/audioplayer.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/slick.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/slick-theme.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/jquery.fancybox.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/jquery.fancybox-buttons.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/main.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/popup-styles.css')) !!}
    {!! "<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic,800italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<!--[if lt IE 9]><script src='js/vendor/html5-3.6-respond-1.4.2.min.js'></script><![endif]-->" !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/virtnext/jquery-2.2.2.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/audioplayer.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/flipclock.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/slick.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/jquery.fancybox-buttons.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/jquery.fancybox.pack.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/jquery.validate.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/main.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/membersOnLoad.js')) !!}
@append

@section('page-layout')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container-fluid">
    <div class="row">
        <!-- Main Site content -->
        <div class="first-row">
            <div class="first-part col-xs-12 col-md-12 col-lg-10 col-center">
                <header class="members-header">
                    <img class="img-responsive col-center logo-img" src="/img/virtnext/logo.png" />
                    <h1 class="text-center">
                        <span class="bold">ACT NOW</span> and change your life<span class="bold"> FOREVER</span><br />
                        $2,500 Daily to $18,000 Weekly profits <span class="uppercase bold"> GUARANTEED</span>
                    </h1>
                </header>
                <div class="members-first-part-video-div col-md-12 col-lg-10 center-block col-center no-gutter">
                    <div class="members-video-container col-md-8">




                        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
                        <div class='embed-container'>
                            {{--<iframe id="frameVid" src='https://player.vimeo.com/video/154964605?autoplay=0&amp;loop=1&amp;title=0&amp;byline=0&amp;portrait=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>--}}
                            @include('funnels.layouts._partials._video')
                        </div>


                        <style>
                            @media screen and (max-width:768px){
                                #frameVid{
                                    margin-top:-115px;
                                    height: 420px;
                                    min-height: 0 !important;
                                    /* padding: 38px; */
                                    padding-top: 92px;
                                    padding-bottom: 3px;
                                }
                            }
                            
                            @media screen and (max-width:500px){
                                #frameVid{
                                    height: 300px !important;
                                }
                            }
                        </style>
                    </div>
                    <div class="col-md-4 col-lg-4 no-gutter">
                        <div class="top-header-form-warpper">
                            <form class="form-horizontal" role="form">
                                <header class="forms-header top-members-form-header">
                                    <!-- <h2 class="white uppercase text-center bold">Register for <span class="uppercase bold yellow"> Free </span>now</h2> -->
                                    <h2 class="uppercase white text-center">Fill your details to get your free license</h2>
                                </header>

                                <div id="boost-form" style="display: block;">
                                    @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id]);

                                    {{--<form method="post" id="regForm" autocomplete="off" novalidate="novalidate">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="holder left box box-6">--}}
                                                {{--<input type="text" id="FirstName" name="FirstName" placeholder="First Name" maxlength="45" data-rule-lettersonly="true" data-rule-required="true" data-msg-required="Enter Valid First Name" data-rule-minlength="2" value="">--}}
                                            {{--</div>--}}
                                            {{--<div class="holder left box box-6">--}}
                                                {{--<input type="text" id="LastName" name="LastName" class="" placeholder="Last Name" maxlength="45" data-rule-allletters="true" data-rule-required="true" data-msg-required="Enter Valid Last Name" data-rule-minlength="2" value="">--}}
                                            {{--</div>--}}
                                            {{--<div class="holder left box box-12">--}}
                                                {{--<input type="text" id="email" name="email" placeholder="E-mail" maxlength="255" data-rule-email="true" data-rule-required="true" data-msg-required="Enter Valid Email" value="">--}}
                                            {{--</div>--}}
                                            {{--<div class="holder left box box-12">--}}
                                                {{--<input type="password" name="password" id="password" placeholder="Choose a Password" maxlength="32" data-rule-password="true" data-rule-required="true" data-rule-minlength="6" data-rule-maxlength="15" data-msg-required="Must contain letters or digits" value="">--}}
                                            {{--</div>--}}
                                            {{--<div class="holder left box box-4">--}}
                                                {{--<input type="text" id="kid" name="kid" class="" placeholder="972" value="972" maxlength="4" data-rule-digits="true" data-rule-required="true" data-msg-required="Enter Valid Prefix">--}}
                                            {{--</div>--}}
                                            {{--<div class="holder left box box-8">--}}
                                                {{--<input type="text" id="phone" name="phone" class="" placeholder="Phone" maxlength="16" data-rule-digits="true" data-rule-required="true" data-msg-required="Enter Valid Phone Number" value="">--}}
                                            {{--</div>--}}
                                            {{--<div class="left box box-12">--}}
                                                {{--<button class="btn" id="regBtn" type="submit">CREATE PROFIT ACCOUNT</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}




                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="news-div col-md-9 col-center">
            <h2 class="text-center">See what they are saying about us in the news</h2>
            <div id="news-holder" class="news-holder col-md-9 col-center">
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/Boolmberg.png" href="img/VT_Bloombergnews.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/markets.png" href="img/VT_financial%20times.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/yahoo.png" href="img/VT_Yahoo.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/fotune.png" href="img/VT_Fortune.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/cnbc.png" href="img/VT_CNBC.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/cnn.png" href="img/VT_TheBuzz.png" />
                </div>
                <div class="col-md-4">
                    <img class="img-responsive read-more" src="/img/virtnext/yahoo.png" href="img/VT_Yahoo.png" />
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bars-row">
            <div class="clock-div col-md-12 col-lg-10 col-center">
                <header class="text-center">
                    <h2>
                        When asked about the impact of customer engagement<br />
                        on their business
                    </h2>
                </header>
                <div class="vertical-bars col-md-12">
                    <div class="col-md-3 main-bar visible-xs visible-sm visible-md">
                        <img class="img-responsive main-bar-img" src="/img/virtnext/main-bar.png" />
                    </div>
                    <div class="bar_container col-md-2">
                        <div id="main_container">
                            <div id="pbar" class="progress-pie-chart gt-50" data-percent="0">
                                <div class="ppc-progress">
                                    <div class="ppc-progress-fill" style="transform: rotate(295.2deg);"></div>
                                </div>
                                <div class="ppc-percents">
                                    <div class="pcc-percents-wrapper">
                                        <span>82%</span>
                                    </div>
                                </div>
                            </div>

                            <progress style="display: none" class="progress_bar" value="82" max="82"></progress>
                        </div>
                        <div class="circel-discription col-md-12">
                            <p class="upper-circel-discription uppercase black text-center">increased</p>
                            <p class="lower-circel-discription uppercase text-center bold">loyalty</p>
                        </div>
                    </div>
                    <div class="bar_container col-md-2">
                        <div id="main_container">
                            <div id="pbar" class="progress-pie-chart gt-50" data-percent="0">
                                <div class="ppc-progress">
                                    <div class="ppc-progress-fill" style="transform: rotate(313.2deg);"></div>
                                </div>
                                <div class="ppc-percents">
                                    <div class="pcc-percents-wrapper">
                                        <span>87%</span>
                                    </div>
                                </div>
                            </div>
                            <progress style="display: none" class="progress_bar" value="87" max="87"></progress>
                        </div>
                        <div class="circel-discription col-md-12">
                            <p class="upper-circel-discription uppercase black text-center">increased</p>
                            <p class="lower-circel-discription uppercase text-center bold">Investments</p>
                        </div>
                    </div>
                    <div class="bar_container col-md-2">
                        <div id="main_container">
                            <div id="pbar" class="progress-pie-chart gt-50" data-percent="0">
                                <div class="ppc-progress">
                                    <div class="ppc-progress-fill" style="transform: rotate(266.4deg);"></div>
                                </div>
                                <div class="ppc-percents">
                                    <div class="pcc-percents-wrapper">
                                        <span>74%</span>
                                    </div>
                                </div>
                            </div>
                            <progress style="display: none" class="progress_bar" value="74" max="74"></progress>
                        </div>
                        <div class="circel-discription col-md-12">
                            <p class="upper-circel-discription uppercase black text-center">increased</p>
                            <p class="lower-circel-discription uppercase text-center bold">referrals</p>
                        </div>
                    </div>
                    <div class="bar_container col-md-2">
                        <div id="main_container">
                            <div id="pbar" class="progress-pie-chart gt-50" data-percent="0">
                                <div class="ppc-progress">
                                    <div class="ppc-progress-fill" style="transform: rotate(316.8deg);"></div>
                                </div>
                                <div class="ppc-percents">
                                    <div class="pcc-percents-wrapper">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <progress style="display: none" class="progress_bar" value="88" max="88"></progress>
                        </div>
                        <div class="circel-discription col-md-12">
                            <p class="upper-circel-discription uppercase black text-center">Would Recommend</p>
                            <p class="lower-circel-discription uppercase text-center bold">VirtNext</p>
                        </div>
                    </div>
                    <div class="col-md-3 main-bar hidden-xs hidden-sm hidden-md">
                        <img class="img-responsive main-bar-img" src="/img/virtnext/main-bar.png" />
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="voices-row">
            <div class="col-md-9 col-center sounds-warpper">
                <h2 class="text-center white">See what 97.6% of our happy investors are saying about us</h2>
                <div class="col-md-12 col-center center-block sounds-main-div">
                    <div class="left-side-audios col-md-12 col-lg-5">
                        <div class="col-md-12 audio-div">
                            <img class="img-responsive microphone col-xs-2 col-md-2 no-gutter-left" src="/img/virtnext/microphone.png" />
                            <div class="audio-container col-xs-10  col-md-10">
                                <audio preload="auto" controls="controls">
                                    <source src="/img/virtnext/audio/virtnext.mp3" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="col-md-12 audio-div">
                            <img class="img-responsive microphone col-xs-2 col-md-2 no-gutter-left" src="/img/virtnext/microphone.png" />
                            <div class="audio-container col-xs-10  col-md-10">
                                <audio preload="auto" controls="controls">
                                    <source src="/img/virtnext/audio/peter.mp3" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="col-md-12 audio-div">
                            <img class="img-responsive microphone col-xs-2 col-md-2 no-gutter-left" src="/img/virtnext/microphone.png" />
                            <div class="audio-container col-xs-10  col-md-10">
                                <audio preload="auto" controls="controls">
                                    <source src="/img/virtnext/audio/skipperjREV.mp3" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="col-md-12 audio-div">
                            <img class="img-responsive microphone col-xs-2 col-md-2 no-gutter-left" src="/img/virtnext/microphone.png" />
                            <div class="audio-container col-xs-10  col-md-10">
                                <audio preload="auto" controls="controls">
                                    <source src="/img/virtnext/audio/Product.mp3" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="right-side-audios col-md-12 col-lg-5">
                        <div class="col-md-12 voices-video-div">
                            @include('funnels.layouts._partials._video',['video_url' => 'https://player.vimeo.com/video/151799528?autoplay=0']);
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="chart-line-row">
            <div class="col-md-10 col-center">
                <div class="com-md-12">
                    <h2 class="text-center">Detailed reporting</h2>
                </div>
                <!--<div id="chartLinediv"></div>-->
                <div class="col-md-10 col-center">
                    <img class="img-responsive" src="/img/virtnext/chartLine.png" />
                </div>
            </div>
        </div>
        <div class="footer-desgin">
            <div class="col-md-10 col-center ssl-main-div">
                <div class="col-lg-7 col-lg-push-4 no-gutter">
                    <form class="form-horizontal" role="form">
                        <header class="bottom-members-form-header">
                            <h2 class="white uppercase bold">Register <span class="uppercase bold yellow">for Free </span>now</h2>
                            <h3 class="uppercase white">SIGN UP BELOW FOR INSTANT PROFITS!</h3>
                        </header>
                        <iframe style="border:0;margin-top:10px;width:100%;min-height: 380px;" src="http://trade.virtnextapp.com/form.php?FirstName=&amp;LastName=&amp;email="></iframe>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="col-lg-4 col-lg-pull-7">
                    <img class="img-responsive ssl-img" src="/img/virtnext/ssl.png" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="companys-row">
            <div class="companys-div col-md-12 col-center">
                <div class="col-md-12">
                    <h2 class="text-center">
                        Algo & stock software performance review and comparisons
                    </h2>
                </div>
                <div class="companys col-md-12 col-center">
                    <div class="companys-holder">
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header company-header-virtnext"><p class="header-p bold">Golden Award<br /> Winner</p></header>
                                <div class="position-numer position-numer-virtnext">#1</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/virtnext-company.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#2</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company1.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#3</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company2.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#4</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company3.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#5</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company4.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#6</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company5.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#7</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company6.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#8</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company7.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-lg-2 company-main-div">
                            <div class="company-warpper">
                                <header class="company-header"><p class="header-p bold"></p></header>
                                <div class="position-numer">#9</div>
                                <div class="company-logo"><img class="img-responsive company-img" src="/img/virtnext/company8.png" /></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer-desgin col-md-12">
            <div class="col-md-9 col-center">
                <img class="img-responsive text-center center-block col-center footer-img" src="/img/virtnext/footer-scurity.png" />
            </div>
        </div>
        <footer class="steps-row">
            <hr>
            <div class="clearfix"></div>
            <div class="col-md-8 col-xs-12" style="float:none;clear:both;margin:0 auto !important;">
                <a href="http://www.judgebinaryoptions.com/VirtNext-Scam-Review-The-TRUTH" target="_blank"><div class="col-md-3"><img src="/img/virtnext/logo-4.png" class="center-block" /></div></a>
                <div class="col-md-3"><img src="/img/virtnext/logo-1.png" class="center-block" /></div>
                <div class="col-md-3"><img src="/img/virtnext/logo-2.png" class="center-block" /></div>
                <div class="col-md-3"><img src="/img/virtnext/logo-3.png" class="center-block" /></div>


            </div>

            <div class="clearfix"></div>
            <p>Copyright © 2015 VirtNext! All Rights Reserved</p>
            <p style="color:black;font-size:11px;" class="text-center">
                * Earnings results will vary and are not guaranteed. We strongly advise that you read our full Risk Disclosure Statement and Privacy Policy before accessing this website.<br>
                <a href="dec.html" target="_blank" style="color:black !important;font-size:11px !important;">User Disclaimer</a>
            </p>
        </footer>
    </div>
</div>
@endsection