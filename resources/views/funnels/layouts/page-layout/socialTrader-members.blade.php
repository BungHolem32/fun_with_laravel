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
    {!! $page->appendAsset(url('/js/socialTrader/form.js')) !!}
@append

@section('page-layout')
    <div class="board-count">
        ONLY
        <div class="clearfix"></div>
        <span class="timeClass2"><span id="MemberAvailable">7</span></span>
        COPIES LEFT
    </div>
    <div class="wrapper" id="members">

        <div class="top">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><img src="/img/socialTrader/logo.png"/></div>
                </div>

            </div>
        </div>
        <div class="top2" style="display:none">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo"><img src="/img/socialTrader/logo2.png"/></div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="headline"><strong>Get</strong> <u>Full Access</u> <strong>to the SocialTrader
                            Software </strong></h1>
                    <h2 class="headline2">That Makes Users $1,650 - $3,200 A Day</h2>
                </div>
            </div>
        </div>
        <div class="row section1">
            <div class="embed-background">
                <div class="container">

                    <div class="col-lg-8 col-md-8 col-sm-12 left">
                        <div class='embed-container'>
                            @include('funnels.layouts._partials._video',  ['w'=>'640', 'h'=>'360'])
                        </div>
                    </div>
                    <div class="col-md-4 right" id="membs">
                        <h2 class="headline" style="text-align:center;margin-bottom:15px;">Register Now</h2>
                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
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


        <div class="row">
            <div class="container">
                <div class="users">
                    <div class="user col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <div class="img"><img src="/img/socialTrader/f1.jpg" class="img-responsive"/>
                                <h2 class="username">Andrea Roberts</h2>
                            </div>

                            <div class="row-user">"Has made over $120,000 in just 2 months with the free groundbreaking
                                SocialTrader software."
                            </div>
                            <div class="profit"><h4>Total Profit:</h4>
                                <h3>$124,932</h3>
                            </div>
                        </a>
                    </div>
                    <div class="user col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="img"><img src="/img/socialTrader/f2.jpg" class="img-responsive"/>
                            <h2 class="username">Mark Sanders</h2>
                        </div>

                        <div class="row-user">"Connected with the world's best traders via his free copy of
                            SocialTrader and has made $185,772 in 6 weeks."
                        </div>
                        <div class="profit"><h4>Total Profit:</h4>
                            <h3>$185,772</h3>
                        </div>
                    </div>
                    <div class="user col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="img"><img src="/img/socialTrader/f3.jpg" class="img-responsive"/>
                            <h2 class="username">Ricky Liu</h2>
                        </div>
                        <div class="row-user">"Downloaded a free copy of SocialTrader and has already made over
                            $58,300 in just 3 weeks."
                        </div>
                        <div class="profit"><h4>Total Profit:</h4>
                            <h3>$58,352</h3>
                        </div>
                    </div>
                    <div class="user col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="img"><img src="/img/socialTrader/f4.jpg" class="img-responsive"/>
                            <h2 class="username">Tanesha Marcus</h2>
                        </div>
                        <div class="row-user">"Had no prior experience of trading. Set up SocialTrader and made
                            almost $50,000 in her first three weeks!"
                        </div>
                        <div class="profit"><h4>Total Profit:</h4>
                            <h3>$49,825</h3>
                        </div>
                    </div>
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


        <div class="row section3">
            <div class="container">

                <div class="col-lg-12">
                    <h2 class="text-center">SocialTrader Facts</h2>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <li>98.4% Trading Accuracy</li>
                        <li>Zero risk</li>
                        <li>Proven Daily Minimum of $1,277</li>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <li>No Initial Investment Required</li>
                        <li>Over 8.5 Million Traders</li>
                        <li>Fully Automated with NO Past Experience Required</li>
                    </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row section2" style="padding:0;">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-7" style="margin:0 auto;float:none">
                    <h2 class="headline">Register Now</h2>
                    <div class="col-md-12" style="margin:10px 0; auto;float:none">
                        <a href="#membs"><input type="button" value="INSTANT ACCESS" class="btn submit" tabindex="503"></a>
                    </div>
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
@endsection