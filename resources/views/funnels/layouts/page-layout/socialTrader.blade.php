@section('head')
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,600,700,900,300' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,600,700,900,300' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    {!! $page->appendAsset(url('/css/socialTrader/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/socialTrader/style.css')) !!}
    {!! $page->appendAsset(url('/css/socialTrader/flipclock.css')) !!}
    {!! $page->appendAsset(url('/js/socialTrader/flipclock.js')) !!}
    {!! $page->appendAsset(url('/js/socialTrader/script.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/gtrader/script.js')) !!}
    {!! $page->appendAsset(url('/js/socialTrader/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/socialTrader/owl.carousel.js')) !!}
@append

@section('page-layout')
    <div class="board-count">
        ONLY
        <div class="clearfix"></div>
        <span class="timeClass2"><span id="MemberAvailable">15</span></span>
        COPIES LEFT
    </div>
    <div class="wrapper" id="home">

        <div class="top" style="display:none">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><img src="/img/socialTrader/logo.png"/></div>
                </div>

            </div>
        </div>
        <div class="top2">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><img src="/img/socialTrader/logo2.png"/></div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="headline">Conquer the Markets by <strong>Harnessing</strong> the Power of <strong>Social
                            Media</strong></h1>
                    <h2 class="headline2">"I made $24,755.81 in my first week!"</h2>
                </div>
            </div>
        </div>
        <div class="row section1">
            <div class="embed-background">
                <div class="container">

                    <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class='embed-container'>
                            {{--<iframe width="640" height="360" src="https://www.youtube.com/embed/W9KpbgkrtZY?rel=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
                            @include('funnels.layouts._partials._video',  ['w'=>'640', 'h'=>'360'])
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row gray gray1" style="padding:0;">
            <div class="container">
                <div class="col-md-9" style="margin:10px auto;float:none">
                    <div class="col-lg-12" style="padding-lefT:10px;padding-right:10px">
                        <a href="#firstPageForm"><div class="submit btn">INSTANT ACCESS</div></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row white" style="padding:0">
            <div class="container">
                <div class="col-lg-12">
                    <center><img src="/img/socialTrader/secure.jpg" class="img-responsive"/></center>
                </div>
            </div>
        </div>
        <hr class="section2hr"/>
        <div class="row section2" style="padding:0">
            <div class="container">
                <div class="col-lg-12">
                    <h1 class="headline">“SocialTrader made me $24,755.81 <br/>in my first week!”</h1>
                    <h2>If you think that two heads are better than one, <br/>how about <strong>8.5 million
                            heads</strong> thinking together?</h2>
                </div>
            </div>
            <center><img src="/img/socialTrader/arrow.png" class="top-arrow"/></center>
        </div>


        <div class="row white">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <img src="/img/socialTrader/1.jpg" class="img-responsive"/>
                </div>

                <div class="col-lg-6 sm-center">
                    <h2 class="text-left">Discover SocialTrader</h2>
                    <p class="text-left">Make the wisdom of the crowd work for you by copying the best traders in the
                        world, quickly and simply. Social Trader harnesses the power of social media to connect you to
                        the world’s best traders. Watch as their trades are copied to your account automatically and the
                        profits pile up - 100% on autopilot.</p>
                </div>
            </div>
        </div>


        <div class="row gray" style="padding-bottom:0">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12 sm-center">
                    <h2 class="text-right">How It Works</h2>
                    <p class="text-right">All you need to do to start SocialTrader is open an account. The SocialTrader
                        software will then search out the top traders in the world for you and copy their trades
                        directly to your account. </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12 sm-center">
                    <div class="video3">
                        <iframe width="400" height="252" src="https://www.youtube.com/embed/KsV8lWZeGsk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="row white">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sm-center">
                    <center><img src="/img/socialTrader/watch.png" class="img-responsive"/></center>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 sm-center">
                    <h2 class="text-left">Copy The Best, Earn Like The Best</h2>
                    <p class="text-left">SocialTrader connects you to a network of over 8.5 million traders and chooses
                        the best one for you. The software allows you to automatically follow and interact with other
                        traders.<br/><br/>
                        You can also copy multiple traders at the same time to diversify your portfolio and maximise
                        your earnings. All of this is done for you by leveraging the power of social media and is fully
                        automated. Therefore, making the same profits the pros do has never been easier.</p>
                </div>
            </div>
        </div>

        <div class="row gray">
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 sm-center">
                    <h2 class="text-right">Create Your Account</h2>
                    <p class="text-right">Simply fill out the form on this page to create your FREE SocialTrader
                        account. All information you submit is protected by the latest encryption technology and will
                        not be shared with third parties.
                        <br/><br/>
                        It really is that simple, there is nothing else to do! Simply fill out your details on this page
                        and we will create your FREE Social Trader account and give you access to your 100% FREE
                        download of the software.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sm-center">
                    <center><img src="/img/socialTrader/register.png" class="img-responsive" style="margin-top: 40px;"/></center>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="headline3">Companies That Use SocialTrader</h2>
            <div id="testimonials">
                <div class="item"><img src="/img/socialTrader/logo1.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo2.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo3.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo4.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo5.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo6.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo7.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo8.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo9.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo10.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo11.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo12.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo13.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo14.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo15.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo16.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo17.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo18.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo19.jpg"></div>
                <div class="item"><img src="/img/socialTrader/logo20.jpg"></div>
            </div>
        </div>
        <div class="row gray" style="padding:15px 0 0;border-top:1px solid #cccccc;">
            <div id="firstPageForm" class="container">
                <div class="col-md-9" style="margin:0 auto;float:none">
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                            <input id="name-1" placeholder="Name" name="name" tabindex="501" type="text">
                            <input id="email-2" placeholder="Email address" tabindex="502" name="email" type="email">
                            <input value="INSTANT ACCESS" class="btn submit" tabindex="503" type="submit">
                        @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="row white" style="padding-bottom:0">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <center><img src="/img/socialTrader/3.png" class="img-responsive"/></center>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <h2 class="text-left">Find Top Traders</h2>
                    <p class="text-left">The SocialTrader software harnesses the power of social media to seek out the
                        world’s best traders. The software will automatically check the traders' profiles and take note
                        of their portfolios, trading stats, and total earnings.<br/><br/>
                        Everything is automatic and hands-free so there is nothing for you to do!</p>
                </div>
            </div>
        </div>
        <div class="row gray">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <h2 class="text-right">Copy Their Trades</h2>
                    <p class="text-right">Once the SocialTrader software has located the most profitable traders for you
                        to copy, it will start automatically copying their positions to your account. There is nothing
                        else to do as the system is 100% automated. Every winning trade from these trading experts will
                        be copied directly to your account. All the thousands and even millions of dollars that go into
                        their bank account will go into your account too.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <img src="/img/socialTrader/copy.png" class="img-responsive"/>
                </div>
            </div>
        </div>
        <div class="row white">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <center><img src="/img/socialTrader/concept.jpg" class="img-responsive"/></center>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-center">
                    <h2 class="text-left">Sit Back and Watch Your Earnings Pile Up</h2>
                    <p class="text-left">The software will then monitor and manage your account for you, 100%
                        hands-free. All you have to do now is watch as the trades made by the traders you’ve chosen to
                        copy are recreated in your own account. And watch as the profits pile up.<br/><br/> Remember,
                        you retain full control of your account and can take the trade over, or stop copying a trader
                        altogether, at any time. </p>
                </div>
            </div>
        </div>
        <div class="row section4">
            <div class="container">
                <div class="col-lg-12">
                    <h3 class="title-line-basic">Live Minute By Minute Updating</h3>
                    <h4 class="title-line-basic">Twitter and Facebook Feeds</h4>
                    <div class="col-lg-5 col-md-5  col-lg-offset-1 col-md-offset-1 text-center">
                        <iframe src="/img/socialTrader/fb/fb.html" scrolling="no" frameborder="0" height="380" width="380"></iframe>
                        <img src="/img/socialTrader/fb.png" class="fb-icon"/></div>
                    <div class="col-lg-5 col-md-5  text-center">
                        <iframe src="/img/socialTrader/feed/feed.html" scrolling="no" frameborder="0" height="380" width="380"></iframe>
                        <img src="/img/socialTrader/tw.png" class="tw-icon"/><br/><br/><br/></div>
                </div>
            </div>
        </div>
        <div class="row gray" style="padding:15px 0 0;">
            <div class="container">
                <div class="col-md-9" style="margin:0 auto;float:none">
                    <a href="#firstPageForm"><input type="button" value="INSTANT ACCESS" class="btn submit" tabindex="503"></a>
                </div>
            </div>
        </div>
        <div class="footer row">
            <div class="footer-wrap container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 badges">
                    <img src="/img/socialTrader/badges-metalic.png" class="img-responsive"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
                    Copyright 2016 <strong>SocialTrader</strong> All Right Reserved.
                </div>
                {{--<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 footer-right">--}}
                    {{--<a href="privacy.html">PRIVACY</a> | <a href="affiliates.html">Affiliates</a> | <a href="disclaimer.html">disclaimer</a> | <a href="mailto:support@socialtrader.com">Support</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div><!-- / wrapper -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <div class="popup-form">
                            <div class="progressbar"></div>
                            <div class="popup-gray-txt">Almost there: Please enter your valid email and click the button below to gain access</div>
                            <div class="popup-title">Get Instant Access To The <span class="green-txt">SocialTrader</span>&nbsp;Software
                            </div>
                            <div class="w-form">
                                <form action="http://social-trader.co/members.html" accept-charset="utf-8" method="get">
                                    <!-- Name -->
                                    <input id="name-3" placeholder="Name" name="name" class="w-input form-field" type="text">
                                    <input id="email-2" placeholder="Email address" name="email" class="w-input form-field" type="email">
                                    <!-- Campaign token -->
                                    <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                                    <input type="hidden" name="campaign_token" value="pmptr"/>
                                    <!-- Thank you page (optional) -->
                                    <input type="hidden" name="thankyou_url" value="members.html"/><br/>
                                    <!-- Add subscriber to the follow-up sequence with a specified day (optional) -->
                                    <input type="hidden" name="start_day" value="0"/>
                                    <!-- Forward form data to your page (optional) -->
                                    <input type="hidden" name="forward_data" value="get"/>
                                    <!-- Subscriber button -->
                                    <input value="Instant Access!" class="btn submit" type="submit">
                                </form>
                            </div>
                            <div class="bottom-txt">We respect your privacy and your information is <span class="under-line-txt">100% secure</span>
                            </div>
                            <img src="/img/socialTrader/security-logos.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-bg"></div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="pop-right">
                        <!-- pop header -->
                        <div class="popup-form">

                            <div class="progressbar"></div>
                            <div class="popup-gray-txt">Almost there: Please enter your valid email and click the button
                                below to gain access
                            </div>
                            <div class="popup-title">Get Instant Access To The <span
                                        class="green-txt">SocialTrader</span>&nbsp;Software
                            </div>
                            <div class="w-form">
                                <form action="http://social-trader.co/members.html" accept-charset="utf-8" method="get">
                                    <!-- Name -->
                                    <input id="email-2" placeholder="Email" name="email" class="w-input form-field" type="email">
                                    <!-- Campaign token -->
                                    <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                                    <input type="hidden" name="campaign_token" value="pmptr"/>
                                    <!-- Thank you page (optional) -->
                                    <input type="hidden" name="thankyou_url" value="members.html"/><br/>

                                    <!-- Add subscriber to the follow-up sequence with a specified day (optional) -->
                                    <input type="hidden" name="start_day" value="0"/>
                                    <!-- Forward form data to your page (optional) -->
                                    <input type="hidden" name="forward_data" value="get"/>
                                    <!-- Subscriber button -->
                                    <input value="Instant Access!" class="btn submit" type="submit">
                                </form>
                            </div>
                            <div class="bottom-txt">We respect your privacy and your information is <span class="under-line-txt">100% secure</span>
                            </div>
                            <img src="/img/socialTrader/security-logos.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection