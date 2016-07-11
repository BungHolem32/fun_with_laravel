@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradingSystem</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/trading-system/main.css">
    <script src="/js/jquery.validate.min.js"></script>
    @stop

    @section('page-layout')


    </head>
    <body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"><a href="#"><img src="/img/trading-system/Skyline-LogoSVG-forblackbg.svg"
                                                           width="185"
                                                           height="88" alt="Skyline Markets"/></a></div>
                    </div>
                </div>
            </div>
        </header>
        <main id="main">
            <div class="bg">
                <img src="/img/trading-system/bg-img.jpg" alt="image description">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Binary Options Platforms
                            <mark>Don’t Get Easier than this!</mark>
                        </h1>
                        <div class="mob-img">
                            <img src="/img/trading-system/mob-img01.jpg" alt="image description">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-lg-offset-6 col-dmg-4 col-dm-offset-6">
                    @include('funnels.layouts._partials._form-trading-system', ['funnelId' => $page->getParent()->id])

                    {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="First Name">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="Last Name">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="email" placeholder="Email">--}}
                    {{--</div>--}}
                    {{--<div class="form-group phone-row">--}}
                    {{--<input type="text" placeholder="043">--}}
                    {{--<input type="text" placeholder="Phone Number">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<input type="password" placeholder="Password">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn-arrow">create account <span><img src="/img/trading-system/btn-arrow.png"--}}
                    {{--height="45" width="34"--}}
                    {{--alt="image description"></span>--}}
                    {{--</button>--}}
                </div>
                </form>

                <div class="row columns-holder">
                    <div class="col-lg-2 col-lg-offset-4 col-md-3 col-md-offset-0 ">
                        <div class="info-box">
                            <h3>Built-in Strategy Advisors </h3>
                            <p>Helpful tools for determining market direction with a single click, based on the most
                                popular
                                indicators.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="info-box">
                            <h3>Personalized Support </h3>
                            <p>Customer support that is available 24/7. Account walkthroughs. Brokers who provide
                                advanced
                                training for the best shot at success.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="info-box">
                            <h3>Risk Free <br> Demo Trading</h3>
                            <p>Try out new strategies in a safe environment with a $50,000 demo account. Practice makes
                                perfect when it comes to picking up new trading skills.</p>
                        </div>
                        <div class="mobile-visible">
                            <a class="btn-arrow" href="#">create account <span><img
                                            src="/img/trading-system/btn-arrow.png"
                                            height="45"
                                            width="34"
                                            alt="image description"></span></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pay-list">
                        <li><a href="#"><img src="/img/trading-system/pay-icon01.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                        <li><a href="#"><img src="/img/trading-system/pay-icon02.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                        <li><a href="#"><img src="/img/trading-system/pay-icon03.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                        <li><a href="#"><img src="/img/trading-system/pay-icon04.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                        <li><a href="#"><img src="/img/trading-system/pay-icon05.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                        <li><a href="#"><img src="/img/trading-system/pay-icon06.png" height="33" width="55"
                                             alt="image description"></a>
                        </li>
                    </ul>
                    <dl>
                        <dt>Eligibility:</dt>
                        <dd>In order to claim your Iphone6 a--nd 100% Bonus, Gold Members need to make a minimum of
                            $10,0000 deposit. Existing traders speak to your personal broker or contact cs@rboptions.com
                            to deposit and claimyour rewards. Contract service and any accessories are the
                            responsibility of the Trader itself. Subjected to quantities and delivery times as supported
                            by Apple.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </footer>
    </div>


    @stop


    @section('bottom-scripts')

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.main.js"></script>
        <script>var jQuery_1_7_0 = $.noConflict(true);</script>
@stop
