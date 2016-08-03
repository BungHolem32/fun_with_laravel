@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BinaryStocks</title>
    <link rel="stylesheet" href="/css/binarystocks/bootstrap.css">
    <link rel="stylesheet" href="/css/binarystocks/main.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script src="/js/jquery.validate.min.js"></script>
@stop

@section('page-layout')

<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><a href="#"><img src="/img/binarystocks/Skyline-LogoSVG-forwhitebg.svg"  height="88" width="185" alt="Skyline Markets" /></a></div>
                </div>
            </div>
        </div>
    </header>
    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="visual">
                        <img src="/img/binarystocks/cube.png" height="560" width="1037" alt="image description">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1><mark>Stocks & Binary Options</mark> Make A Great Combination <span>Find The Winning Trading Solution</span></h1>
                    <div class="mobile-visual"><img src="/img/binarystocks/cube.png" alt="image description"></div>

                    @include('funnels.layouts._partials._form_binarystocks', ['funnelId' => $page->getParent()->id])


                </div>
            </div>
            <div class="row columns-holder">
                <div class="col-md-3">
                    <div class="info-box">
                        <h3 class="height-title">Valuable Education Tools</h3>
                        <p>Every trader gets a huge packet of educational materials designed to enhance your trading skills. Our Binary options e-book presents a simple breakdown of trading basics, and our team of analysts sends out daily reviews covering important market events.</p>
                    </div>
                    <span class="box-shadow"></span>
                </div>
                <div class="col-md-3">
                    <div class="info-box red-box">
                        <h3 class="height-title">Welcome Bonuses & Rewards</h3>
                        <p>RBoptions traders always get more! You can make your deposit go farther when we match it with a 50% deposit bonus directly into your account. Our traders also qualify for high end Apple products like iPhones and iPads.</p>
                    </div>
                    <span class="box-shadow"></span>
                </div>
                <div class="col-md-3">
                    <div class="info-box blue-box">
                        <h3 class="height-title">$50,000 <br> Demo Account</h3>
                        <p>Every new binary options trading account gets access to a $50,000 demo where you can try out strategies and techniques risk-free. The demo account offers the same range of assets as your live trading account, offering the perfect training environment.</p>
                    </div>
                    <span class="box-shadow"></span>
                </div>
                <div class="col-md-3">
                    <div class="info-box yellow-box">
                        <h3 class="height-title">Dedicated Account Managers & Customer Service available 24/7</h3>
                        <p>RBoptions is always here to help, with a team of experienced professionals trained to answer your questions. Feel free to contact us at any time, day or night, for inquiries about trading or your account. We are devoted to your success.offering the perfect training environment.</p>
                    </div>
                    <span class="box-shadow"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pay-list">
                        <li><a href="#"><img src="/img/binarystocks/pay-icon01.png" height="33" width="55" alt="image description"></a></li>
                        <li><a href="#"><img src="/img/binarystocks/pay-icon02.png" height="33" width="55" alt="image description"></a></li>
                        <li><a href="#"><img src="/img/binarystocks/pay-icon03.png" height="33" width="55" alt="image description"></a></li>
                        <li><a href="#"><img src="/img/binarystocks/pay-icon04.png" height="33" width="55" alt="image description"></a></li>
                        <li><a href="#"><img src="/img/binarystocks/pay-icon05.png" height="33" width="55" alt="image description"></a></li>
                        <li><a href="#"><img src="/img/binarystocks/pay-icon06.png" height="33" width="55" alt="image description"></a></li>
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
                        <dt>General Risk Warning:</dt>
                        <dd>
                            Trading in binary options carries a high level of risk and can result in the loss of all of your investment as such, binary options may not be appropriate for all investors. You should not invest money that you cannot afford to lose. Before deciding to trade, you should become aware of all the risks associated with binary options trading, and seek advice from an independent and suitably licensed financial advisor. For more information about the risks associated with trading binary, see our risk discloser. Under no circumstances shall we have any liability to any person or entity for (a) any loss or damage in whole or part caused by, resulting from, or relating to any transactions related to binary options or (b) any direct, indirect, special, consequential or incidental damages whatsoever.
                            A number of attractive reward features including; welcome bonuses, contests, give ways and awards are given to new and current customers. All these are part of a promotions program. These bonuses and awards are limited time offers and the terms and conditions associated with any bonus rewards are subject to change. Please read carefully before accepting a special offer, trade refund, benefit, give away or bonus.
                        </dd>
                        <dd>
                            @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/../policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="/js/binarystocks/jquery.main.js"></script>
<script src="/js/fancybox/jquery.fancybox.js"></script>
<script>
    $(document).on('click', '.fancybox_iframe', function(e) {
        e.preventDefault();
        $.fancybox({
            href : $(this).attr('href'),
            type : 'iframe'
        });
    });
</script>
@stop

