@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkylineMarkets.com</title>
    <link rel="stylesheet" href="/css/100Bonus/bootstrap.css">
    <link rel="stylesheet" href="/css/100Bonus/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans%7CRaleway:400,700" rel="stylesheet">
    <script src="/js/jquery.validate.min.js"></script>
@stop


@section('page-layout')
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="#"><img src="/img/100Bonus/logo.svg" alt="Skyline Markets" height="88" width="185"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="bg-stretch">
                <img src="/img/100Bonus/img1.jpg" alt="images description" width="1290" height="908">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">
                        <h1>
                            <span><span class="large-text">Double</span> Your Binary Dollars Instantly!</span>
                            <span class="info-text">Earn a <strong class="text-bonus"><img src="/img/100Bonus/text-bonus.png" alt="100% bonus" width="391" height="136"></strong> on Your Deposit</span>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        @include('funnels.layouts._partials._form_100Bonus', ['funnelId' => $page->getParent()->id])
                    </div>
                </div>
                <div class="row features-block">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box">
                            <div class="text-holder">
                                <h2>Simple Choices </h2>
                                <p>You only need to decide whether the price will go up or down.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box">
                            <div class="text-holder">
                                <h2>Built-in Strategy Advisors</h2>
                                <p>Proven tools help you determine market direction.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box">
                            <div class="text-holder">
                                <h2>Personalized Support</h2>
                                <p>Advanced training and Customer support is available 24/7.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box">
                            <div class="text-holder">
                                <h2>Risk Free Demo Trading</h2>
                                <p>Practice makes perfect with a $50,000 demo account.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-holder">
                    <a href="#" class="button">create account</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pay-list">
                            <li><a href="#"><img src="/img/100Bonus/pay-icon01.png" height="33" width="55" alt="visa"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon02.png" height="33" width="55" alt="master card"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon03.png" height="33" width="55" alt="american express"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon04.png" height="33" width="55" alt="skrill"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon05.png" height="33" width="55" alt="discover"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon06.png" height="33" width="55" alt="jcb"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <dl>
                            <dt>Eligibility:</dt>
                            <dd>In order to claim your Iphone6 and 100% Bonus, Gold Members need to make a minimum of $10,0000 deposit. Existing traders speak to your personal broker or contact <a href="mailto:&#099;&#115;&#064;&#114;&#098;&#111;&#112;&#116;&#105;&#111;&#110;&#115;&#046;&#099;&#111;&#109;">&#099;&#115;&#064;&#114;&#098;&#111;&#112;&#116;&#105;&#111;&#110;&#115;&#046;&#099;&#111;&#109;</a> to deposit and claimyour rewards. Contract service and any accessories are the responsibility of the Trader itself. Subjected to quantities and delivery times as supported by <a href="#">Apple</a>.</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@stop

@section('bottom-scripts')
    <script></script>
@stop