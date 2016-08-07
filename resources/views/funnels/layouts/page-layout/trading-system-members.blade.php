@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradingSystem</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/trading-system/main.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
    <script src="/js/jquery.validate.min.js"></script>

@stop

@section('bottom-scripts')

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.main.js"></script>


    <script>
        (function(){
            var captchaChangeSize = setTimeout(captchaChange, 5000);

            function captchaChange(){
                var captcha = document.querySelector('.rc-anchor-normal');
                captcha.style = "width:285px";
            };
        })();
    </script>
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
                            @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/../policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </footer>
    </div>

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
@stop


