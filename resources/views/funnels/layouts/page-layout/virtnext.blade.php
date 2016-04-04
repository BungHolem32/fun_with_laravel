@section('head')
    {!! $page->appendAsset(url('/css/virtnext/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/bootstrap-theme.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/flipclock.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/audioplayer.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/jquery.fancybox.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/jquery.fancybox-buttons.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/main.min.css')) !!}
    {!! $page->appendAsset(url('/css/virtnext/popup-styles.css')) !!}
    {!! "<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic,800italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<!--[if lt IE 9]><script src='js/vendor/html5-3.6-respond-1.4.2.min.js'></script><![endif]-->" !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/audioplayer.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/flipclock.min.js')) !!}
{{--    {!! $page->appendAsset(url('/js/virtnext/jquery.fancybox-buttons.min.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/virtnext/jquery.fancybox.pack.min.js')) !!}--}}
{{--    {!! $page->appendAsset(url('/js/virtnext/jquery.validate.min.js')) !!}--}}
    {!! $page->appendAsset(url('/js/virtnext/main.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/FIFO-plugin.min.js')) !!}
    {!! $page->appendAsset(url('/js/virtnext/funnelOnLoad.js')) !!}
@append

@section('page-layout')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- PopUp -->
<div style="position:fixed;height:100%;width:100%;z-index:999999;display:none;" id="pop-cont">
    <div class="container-fluid popup-container">
        <section class="popup-inner-container col-md-6 col-lg-4 col-center no-gutter">
            <img class="img-responsive" id="popup-close" src="/img/virtnext/close-popup.png" />
            <div class="col-md-12 no-gutter top-wrapper">
                <div class="popup-mail-img-div col-md-4 no-gutter">
                    <img class="img-responsive popup-mail-img" src="/img/virtnext/popup-mail-img.png" />
                </div>
                <div class="popup-main-header col-md-8 no-gutter">
                    <h1 class="bold uppercase white main-header">
                        Join 17,845 people
                        and counting...
                    </h1>
                </div>
            </div>
            <header class="col-md-12 no-gutter">
                <h3 class="form-main-header">Don't miss out: Make $650 within the next hour (with proven results!)</h3>
                <h4 class="form-sub-header bold uppercase white">Sign up now, and get massive profits right away</h4>
            </header>
            <div class="popup-form">
                <div class="form-group">
                    <input class="form-control input-lg" id="email-popup" placeholder="ENTER YOUR EMAIL HERE" name="email_popup" type="email" data-rule-email="true" data-rule-required="true" data-msg-required="Please Enter Valid Email">
                    <label for="email-popup" style="text-align: center; color: rgb(255, 0, 0); font-size: 17px; margin-top: 8px; display: none;"></label>
                </div>
                <div class="form-group">
                    <input class="btn btn-lg btn-block button-white" id="sign-me-up-btn" value="sign me up">
                </div>
            </div>
        </section>
    </div>
    <style>
        #pop-cont > div > section > form > div:nth-child(1) > label{top: 79.4% !important;right: 0;background-color: #ff940e;color:#ffffff;}
    </style>
    <!-- /PopUp -->
</div>
<div class="container-fluid">
    <div class="row">
        <!-- Main Site content -->
        <div class="first-row">
            <div class="first-part col-xs-12 col-md-9 col-center">
                <header class="index-header">
                    <img class="img-responsive col-center logo-img" src="/img/virtnext/logo.png" />
                    <h1 class="text-center">
                        Watch the short video below to start making  <br/>
                        $18,000 EVERY WEEK from home
                    </h1>
                </header>
                <div class="first-part-video-div col-md-9 center-block col-center no-gutter">
                    <div class="video-container">
                        @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                        {{--<iframe style="border:0!important;" id="frameVid" class="col-md-9 first-part-video-iframe" src='https://player.vimeo.com/video/151792606?autoplay=0&amp;loop=1&amp;title=1&amp;byline=0&amp;portrait=1' frameborder='0'></iframe>--}}
                        <style>

                            @media screen and (max-width:768px){
                                #frameVid{
                                    margin-top:-65px;
                                    height: 300px !important;
                                    min-height: 0 !important;
                                    /* padding: 38px; */
                                    padding-top: 92px;
                                    padding-bottom: 3px;
                                }
                            }
                        </style>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="main-form-first-page" class="first-part-form-row">
            <div class="first-part-form-div col-md-9 col-center">
                <div>
                    <div class="clearfix"></div>
                    <div class="col-md-1 form-img-div visible-lg"><img src="/img/virtnext/form-img.png" /></div>
                    <div class="col-md-12 col-lg-12 col-center form-text-div">
                        <div class="col-md-12 col-lg-7">
                            <p style="font-size:28px;font-weight:bold;padding-left:10px;"><span style="font-size:18px; font-weight:600;"> Enter your name and best email below to gain access to this software</span></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-md-12 col-lg-4 no-gutter-left form-text-right">
                            <p style="font-size:34px;font-weight:bold;">100%<span style="font-size:34px;color:#f6f300;font-weight:bold;"> FREE</span><span style="font-size:34px;font-weight:100;"> Access</span></p>
                        </div>
                    </div>

                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                    <input type="hidden" name="pageId" value="{{ $page->id }}">
                        <div class="form-group col-sm-12 col-md-12 col-lg-6">
                            @if($page->switches->showEmailField)
                                <input class="form-control emails all-forms-style" id="email" type="email" name="email" value="" placeholder="Please enter your email" required="required">
                            @endif
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-6">
                            <input type="submit" class="btn btn-warning btn-block button-black" value="JOIN NOW" style="font-weight: bold;">
                        </div>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="">
            <div class="clock-div col-md-9 col-center">
                <h2 class="text-center">Grab free access to Virtnext today!</h2>
                <div class="col-md-5 col-lg-7 left-side-clock" style="margin-left:auto;margin-right:auto;float:none;display:block;margin-bottom:50px;">
                    <div class="col-md-12 div-clock-last">
                        <div class="flip-clock"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-lg-8 pull-right flip-button-div">
                        <button class="btn btn-warning btn-block button-white buttons" id="registerFree">REGISTER TODAY FOR FREE</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="steps-row">
            <div class="clock-div col-md-9 col-center">
                <header class="text-center">
                    <h2>Virtnext ease of access!</h2>
                    <h3>
                        Open for amateur and advanced investors<br />
                        Start to profit in 3 easy steps
                    </h3>
                </header>
                <div class="steps col-md-9 col-center">
                    <div class="col-md-3 text-center steps-container">
                        <p class="steps-numbers visible-xs visible-sm visible-md">1</p>
                        <img class="img-responsive center-block" src="/img/virtnext/step1.png" />
                        <p>Fill in the registration form and activate your Account</p>
                        <p class="steps-numbers hidden-xs hidden-sm hidden-md">1</p>
                    </div>
                    <div class="col-md-1 visible-lg steps-spacers"><img class="img-responsive" src="/img/virtnext/right-arrow.png" /> </div>
                    <div class="col-md-3 text-center steps-container">
                        <p class="steps-numbers visible-xs visible-sm visible-md">2</p>
                        <img class="img-responsive center-block" src="/img/virtnext/step2.png" />
                        <p>Start Making $2,528 on daily profits </p>
                        <p class="steps-numbers hidden-xs hidden-sm hidden-md">2</p>
                    </div>
                    <div class="col-md-1 visible-lg steps-spacers"><img class="img-responsive" src="/img/virtnext/right-arrow.png" /> </div>
                    <div class="col-md-3 text-center steps-container">
                        <p class="steps-numbers visible-xs visible-sm visible-md">3</p>
                        <img class="img-responsive center-block" src="/img/virtnext/step3.png" />
                        <p>Enjoy a Lifestyle You Never Thought Was Possible!</p>
                        <p class="steps-numbers hidden-xs hidden-sm hidden-md">3</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="devices-row">
            <div class="devices-div col-md-9 col-center">
                <div class="col-md-6">

                    <h2 class="text-center">
                        Delivers top performance<br />
                        on ANY device
                    </h2>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive pull-right boostsys-div" src="/img/virtnext/boostsys.png" />
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="social-row">
            <div class="col-md-9 col-center">
                <header class="col-md-6">
                    <h2 class="white">
                        Virtnext in the social media<br />
                        FaceBook feeds & testimonials
                    </h2>
                </header>
                <div class='col-md-6 no-gutter' id='facebook'>
                </div>
                <img class="img-responsive pull-left facebook-browser" src="/img/virtnext/facebook.png" />
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="branding-row">
            <div class="col-md-9 col-center">
                <header>
                    <h2 class="text-center">
                        The ultimate trading interface, seamless and enhanced <br />
                        with the most powerful features ever seen!
                    </h2>
                </header>
                <section class="col-md-9">
                    <img class="img-responsive" src="/img/virtnext/center-img.png" />
                </section>
                <section class="col-md-3 pull-right no-gutter">
                    <h3>Virtnext trading platform improves your performance and increases your chance of success </h3>
                    <p>
                        It performs with several trading applications in the market today and combines Section508.gov making it accessible to all users. Integrated market news feature, fundamental data with global markets coverage across multiple assets. The reliable and secure platform offers a safe trading experience.
                    </p>
                </section>
                <div class="clearfix"></div>
                <div class="center-block text-center col-md-12">
                    <h2>Companies that trust virtnext for their investments</h2>
                </div>
            </div>
            <div class="center-block text-center col-md-12">
                <img class="img-responsive brands-img hidden-xs" src="/img/virtnext/brands.png" />
                <img class="img-responsive visible-xs" src="/img/virtnext/top-brands.png" />
                <img class="img-responsive visible-xs" src="/img/virtnext/top-brands-sub.png" />
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>

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
                            @include('funnels.layouts._partials._video',['video_url' => 'https://player.vimeo.com/video/151799528?autoplay=0','w'=>'100%', 'h'=>'100%'])
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="first-part-form-row" style="text-align: center; padding: 20px 0;">
            <div class="first-part-form-div col-md-9 col-center">
                <div class="">
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-lg-12 col-center">
                        <div class="col-md-12">
                            <p style="font-size:34px;font-weight:bold;">100%<span style="font-size:34px;color:#f6f300;font-weight:bold;"> FREE</span><span style="font-size:34px;font-weight:100;"> Access</span></p>
                            <a id="goToLogin" href="#main-form-first-page" class="btn btn-warning button-black">JOIN NOW</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="QA-row">
            <div class="col-md-9 col-center">
                <h2 class="text-center">Some common questions and answers</h2>
                <div class="left-side-QA col-md-12 col-lg-6">
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">What’s Virtnext Ltd.?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">VIRTNEXT is an Algo-Trading system which uses existing infrastructure and extremely fast computers to buy and sell assets, currencies and futures in the financial markets. In 1478 trading days in the last 4 years, this computer program has lost money only once. The company which employs 170 workers, projects a Net Revenue of $650 million by the end of the year.</p>
                    </div>
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">When has Virtnext Ltd. been established?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">VIRTNEXT was established by its founding members on March 2011. Within two years the company was achieving it’s a Net income of $304 million for its members. They’ve been increasing the numbers for the last 4 years.</p>
                    </div>
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">What can Vitnext Ltd. do for me?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">By linking up to our master account which is 100% FREE, we can make GUARANTEED daily profits of $2,500 for you.</p>
                    </div>
                </div>
                <div class="right-side-QA col-md-12 col-lg-6">
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">What’s the amount of money I can make per day?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">We guarantee you will be making a daily average of $2,500 , which equals a total of $18,000 per week. Check out our membership page to see exactly what we’ve been doing for our current members, and what we soon hope to be doing for you too.</p>
                    </div>
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">How does it work?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">VIRTNEXT uses existing infrastructure and extremely fast computers to buy and sell assets, currencies and futures in the financial markets. For the assets it gets interest in, it offers both a BUY and SALE price. At the end of the day it sells the majority of positions – and earns a lot of money. For you it does all this in AutoPilot to guarantee your profits</p>
                    </div>
                    <div class="col-md-12 QA-inner-div">
                        <p class="Q-circel">Q</p><p class="questions">How do I start?</p>
                        <img class="img-responsive down-arrow" src="/img/virtnext/down-arrow.png" />
                        <p class="A-circel">A</p><p class="answer">That’s very simple. Just fill out the registration form while still available, make your initial investment and your account will be automatically linked to their system, All the work will be 100% done for you and you will collect your winnings.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-desgin col-md-12">
            <div class="col-md-9 col-center">
                <img class="img-responsive text-center center-block col-center footer-img" src="/img/virtnext/footer-scurity.png" />
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
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