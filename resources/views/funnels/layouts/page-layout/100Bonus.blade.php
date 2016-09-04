@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkylineMarkets.com</title>
    <link rel="stylesheet" href="/css/100Bonus/bootstrap.css">
    <link rel="stylesheet" href="/css/100Bonus/main.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
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
                            <span class="info-text">Earn a <strong class="text-bonus"><img
                                            src="/img/100Bonus/text-bonus.png" alt="100% bonus" width="391"
                                            height="136"></strong> on Your Deposit</span>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        @include('funnels.layouts._partials._form_100bonus', ['funnelId' => $page->getParent()->id])
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
                                <p>Advanced training and customer support are available 24/7.</p>
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
                            <li><a href="#"><img src="/img/100Bonus/pay-icon01.png" height="33" width="55"
                                                 alt="visa"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon02.png" height="33" width="55"
                                                 alt="master card"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon03.png" height="33" width="55"
                                                 alt="american express"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon04.png" height="33" width="55" alt="skrill"></a>
                            </li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon05.png" height="33" width="55"
                                                 alt="discover"></a></li>
                            <li><a href="#"><img src="/img/100Bonus/pay-icon06.png" height="33" width="55"
                                                 alt="jcb"></a></li>
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
                                Trading in binary options carries a high level of risk and can result in the
                                loss of all of your investment; as such, binary options may not be appropriate
                                for all investors. You should not invest money that you cannot afford to lose.
                                Before deciding to trade, you should become aware of all the risks associated
                                with binary options trading and seek advice from an independent and suitably
                                licensed financial adviser. For more information about the risks associated with
                                trading binary options, see our risk disclosure. Under no circumstances shall we
                                have any liability to any person or entity for (a) any loss or damage in whole
                                or part caused by, resulting from, or relating to any transactions related to
                                binary options trading or (b) any direct, indirect, special, consequential or
                                incidental damages whatsoever.
                                A number of attractive reward features are given to new and current
                                customers including but not limited to: welcome bonuses, giveaways and
                                awards. All these are part of a promotions' program. These bonuses and awards
                                are limited-time offers and the
                                terms and conditions associated with any bonus rewards are subject to change.
                                Please read carefully before accepting a special offer, refund, benefit,
                                give away or bonus.
                            </dd>
                            <dd>
                                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/../policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy Policy'])
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/js/fancybox/jquery.fancybox.js"></script>
        <script>
            $(document).on('click', '.fancybox_iframe', function(e){
                e.preventDefault();
                $.fancybox({
                    href: $(this).attr('href'),
                    type: 'iframe'
                });
            });
        </script>
    </div>
    <!-- START Exoclick Goal Tag | Re targeting -->
    <img width="1" height="1" src="http://main.exoclick.com/tag.php?goal=c01bb5a306ff305fccf4e814d8f927d3">
    <!-- END Exoclick Goal Tag | Re targeting -->
    <img style="display:none;" src="//a.mgid.com/1x1.gif?id=186216&type=c&g=x&t=x&tg=&v=1&r=">
@stop