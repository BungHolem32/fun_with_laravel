@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="/js/lp/lp.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,300italic' rel='stylesheet' type='text/css'>
    <meta name="theme-color" content="#c6ab2b">
    {!! $page->appendAsset(url('/css/generalbinary-'.Request::local()->dir.'.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
@append

@section('page-layout')
    {!! $page->htmlHeader !!}
    <div class="head">
        <div class="col-xs-12 npad">
            <div class="col-xs-12 texts">
                <div class="container col col-xs-8 col-md-10 col-lg-8">
                    <div class="pull-left col-xs-3"><div class="logo"></div></div>
                    <div class="pull-right-childs col-sm-9 col-xs-2 npads">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <nav id="bs-navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="col-md-2 emailcol" href="mailto:cs@rboptions.com"><i class="fa fa-envelope"></i>@ln(Email): cs@rboptions.com</a></li>
                                <li><a class="col-md-1 chatcol" href=""><i class="fa fa-circle"></i>@ln(Live chat)</a></li>
                                <li><a class="col-md-2 callcol" href="tel:1-647-846-8231"><i class="fa fa-phone"></i>@ln(Call us): <span class="phone">1-647-846-8231</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 bg">
                <h1>@ln(Try a Binary Platform) <span>@ln(That's Simple & Exciting!)</span></h1>
                <h2 class="sm-h">@ln(Free education & More options Help You succeed)</h2>
                <div class="form">
                    <h3 class="h3 sm-h">@ln(Complete This Form & Start Trading Binary Options Now)</h3>
                    <img class="sm-s mimg" src="/img/lp/generalbinary/trading-platform.png" />
                    <div  class="h3 sm-s">@ln(Complete This Form & <span>Start Trading Binary Options Now</span>)</div>
                    @include('funnels.layouts._partials._form-horizontal', ['funnelId' => $page->id,'btn'=>'/img/lp/generalbinary/m-button-'.Request::local()->dir.'.png'])
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container col col-xs-12 col-sm-7">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="icon ico1" src="/img/lp/generalbinary/icon-2.png"></div>
                        <div class="title">
                            The perfect account type for every trader</div>
                            <div class="text">
        From beginners to advanced traders, we offer accounts designed with your needs in mind. Choose the services that you need from an extensive list which includes dedicated brokers, trading signals, and money management.
                        </div>
                    </div>
                    <div class="per">
                        <div class="icon ico2" src="/img/lp/generalbinary/icon-3.png"></div>
                        <div class="title">Valuable education tools</div>
                        <div class="text">
                            Every trader gets a huge packet of educational materials designed to enhance your trading skills. Our Binary options e-book presents a simple breakdown of trading basics, and our team of analysts sends out daily reviews covering important market events.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="per">
                        <div class="icon ico3" src="/img/lp/generalbinary/icon-1.png"></div>
                        <div class="title">An amazing trading platform</div>
                        <div class="text">
                            Our Binary Options platform is easy to master. Our senior brokers walk you through trading step by step, and teach you how to pick winning trades on currencies, stocks, indices, and commodities, all while earning the highest payouts in the industry – up to 88%.
                        </div>
                    </div>
                    <div class="per">
                        <div class="icon ico4" src="/img/lp/generalbinary/icon-4.png"></div>
                        <div class="title">Welcome Bonuses and Rewards </div>
                        <div class="text">
                            RBoptions traders always get more! You can make your deposit go farther when we match it with a 50% deposit bonus directly into your account. Our traders also qualify for high end Apple products like iPhones and iPads.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <img src="/img/lp/generalbinary/Footer-icons.png" alt="">
        <div class="bg">
            <div class="text">
            Eligibility:<br>
            In order to claim your Iphone6 and 100% Bonus, Gold Members need to make a minimum of $10,0000 deposit. Existing traders speak to your personal broker or contact cs@rboptions.com to deposit and claim your rewards. Contract service and any accessories are the responsibility of the Trader itself. Subjected to quantities and delivery times as supported by Apple.
            </div>
        </div>
    </div>




@endsection
