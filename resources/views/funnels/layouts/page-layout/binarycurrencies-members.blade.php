@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet' type='text/css'>
    <script src="/js/lp/lp.js"></script>
    {!! $page->appendAsset(url('/css/lp/binary-currencies-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    <div class="head">
        <div class="col-xs-12 npad">
            <div class="col-xs-12 texts">
                <div class="container col col-xs-8 col-md-10 col-lg-8">
                    <div class="pull-left col-xs-3"><div class="logo"></div></div>
                </div>
            </div>
            <div class="col-xs-12 bg">
                {!! $page->htmlHeader !!}
                <div class="form">
                    {!! $page->smallHeader !!}
                    @include('funnels.layouts._partials._form-horizontal', ['funnelId' => $page->id,'btn'=>'/img/lp/binary-currencies/m-button-'.Request::local()->dir.'.png'])
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container col col-xs-12 col-sm-8 pers">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="icon ico1"></div>
                        <div class="title">
                            Valuable Education Tools </div>
                            <div class="text">
                                Every trader gets a huge packet of educational materials designed to enhance your trading skills. Our Binary options e-book presents a simple breakdown of trading basics, and our team of analysts sends out daily reviews covering important market events.
                        </div>
                    </div>
                    <div class="per">
                        <div class="icon ico2"></div>
                        <div class="title">Dedicated Account Managers and Customer Service available 24/7</div>
                        <div class="text">
                            RBoptions is always here to help, with a team of experienced professionals trained to answer your questions. Feel free to contact us at any time, day or night, for inquiries about trading or your account. We are devoted to your success.offering the perfect training environment.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="icon ico3"></div>
                        <div class="title">Welcome Bonuses And Rewards </div>
                        <div class="text">
                            RBoptions traders always get more! You can make your deposit go farther when we match it with a 50% deposit bonus directly into your account. Our traders also qualify for high end Apple products like iPhones and iPads.
                        </div>
                    </div>
                    <div class="per">
                        <div class="icon ico4"></div>
                        <div class="title">$50,000 Demo Account </div>
                        <div class="text">
                            Every new binary options trading account gets access to a $50,000 demo where you can try out strategies and techniques risk-free. The demo account offers the same range of assets as your live trading account, offering the perfect training environment.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row icons">
                <button class="submit onsubmit"><span class="img" style="display:none;" data-url="" data-text="TRADE NOW"></span> <span>TRADE NOW</span></button>
                <img class="sm-h" src="/img/lp/binary-currencies/payment.png" alt="">
                <img class="sm-s" src="/img/lp/binary-currencies/m-payments.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="bg">
            <div class="text">
            Eligibility:<br>
            In order to claim your Iphone6 and 100% Bonus, Gold Members need to make a minimum of $10,0000 deposit. Existing traders speak to your personal broker or contact cs@rboptions.com to deposit and claim your rewards. Contract service and any accessories are the responsibility of the Trader itself. Subjected to quantities and delivery times as supported by Apple.
            </div>
        </div>
    </div>



    <script src="/js/lp/binary-currencies.js"></script>
@endsection
