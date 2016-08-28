@section('head')
    {!! $page->appendAsset(url('/css/binarycurrency-sky/bootstrap.css')) !!}
    {!! $page->appendAsset(url('/css/binarycurrency-sky/main.css')) !!}
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>window.jQuery||document.write('<script src="js/binarycurrency-sky/jquery-1.11.2.min.js"><\/script>')</script>
    {!! $page->appendAsset(url('/js/binarycurrency-sky/jquery-1.11.2.min.js')) !!}
    {!! $page->appendAsset(url('/js/binarycurrency-sky/jquery.main.js')) !!}
@append

@section('bottom-scripts')
    {!! $page->appendAsset(url('/js/jquery.validate.min.js')) !!}

    <script>
        $('.button-bottom').on('click', function(e){
            console.log(123);
            e.preventDefault();
            $('#form').submit();
        })
    </script>
@append

@section('page-layout')
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="#"><img src="/img/binarycurrency-sky/logo.png" alt="Skyline Markets" height="98"
                                             width="307"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="bg-stretch" style="background-image:url(/img/binarycurrency-sky/img1.jpg)">
                <img src="/img/binarycurrency-sky/img1.jpg" alt="images description" width="1920" height="1240">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>
                            <img src="/img/binarycurrency-sky/text-heading.png"
                                 alt="Discover The Easy Way To Trade Currencies Get On The Fast Track with binary options"
                                 width="720" height="192">
                        </h1>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 form-holder">
                        @include('funnels.layouts._partials.custom-forms._form-freesignals', ['funnelId' => $page->getParent()->id,'funnelName'=>'binarycurrency'])
                    </div>
                </div>
                <div class="row features-block">
                    <div class="col-lg-4">
                        <div class="feature-box">
                            <div class="text-holder">
                                <div class="ico-holder">
                                    <img src="/img/binarycurrency-sky/ico1.svg" alt="image description" width="60"
                                         height="33">
                                </div>
                                <h2>More Perks </h2>
                                <div class="text-frame">
                                    <p>Traders are eligible for welcome bonuses of up to 100%, and free* gifts of high
                                        end products like iPads, iPhones, luxury cars, and all-inclusive vacations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-box">
                            <div class="text-holder">
                                <div class="ico-holder">
                                    <img src="/img/binarycurrency-sky/ico1.svg" alt="image description" width="60"
                                         height="33">
                                </div>
                                <h2>More Support</h2>
                                <div class="text-frame">
                                    <p>Get in touch with our team of experienced brokers who can guide you through
                                        becoming a top trader.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-box">
                            <div class="text-holder">
                                <div class="ico-holder">
                                    <img src="/img/binarycurrency-sky/ico1.svg" alt="image description" width="60"
                                         height="33">
                                </div>
                                <h2>More Security</h2>
                                <div class="text-frame">
                                    <p>Your account information is protected by 256 bit SSL encryption, the same
                                        standard used by the banking industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pay-list">
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon01.png" height="33" width="55"
                                                 alt="visa"></a></li>
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon02.png" height="33" width="55"
                                                 alt="master card"></a></li>
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon03.png" height="33" width="55"
                                                 alt="american express"></a></li>
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon04.png" height="33" width="55"
                                                 alt="skrill"></a>
                            </li>
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon05.png" height="33" width="55"
                                                 alt="discover"></a>
                            </li>
                            <li><a href="#"><img src="/img/binarycurrency-sky/pay-icon06.png" height="33" width="55"
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
                                Trading in Binary Options carries a high level of risk and can result in the loss of all of your investment; as such,
                                Binary Options may not be appropriate for all investors. You should not invest money that you cannot afford to lose.
                                Before deciding to trade, you should become aware of all the risks associated with Binary Options trading and seek advice
                                from an independent and suitably licensed financial adviser. For more information about the risks associated with trading Binary Options,
                                see our risk disclosure. Under no circumstances shall we be liable to any person or entity for,(a) any loss or damage in whole or
                                part caused by, resulting from, or relating to any transactions related to Binary Options trading or,(b) any direct, indirect, special,
                                consequential or incidental damages whatsoever. A number of attractive reward features are given to new and current customers, including
                                but not limited to: Welcome bonuses, giveaways and awards. All these are part of a promotions program. These bonuses and awards are
                                limited-time offers and the terms and conditions associated with any bonus rewards are subject to change. Please read carefully before
                                accepting a special offer, refund, benefit, give away or bonus.
                            </dd>
                            <dd>
                                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/../policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy Policy'])
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
@endsection


