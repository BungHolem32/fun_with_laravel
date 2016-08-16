@section('head')
    {!! $page->appendAsset(url('/css/freesignals/bootstrap.css')) !!}
    {!! $page->appendAsset(url('/css/freesignals/main.css')) !!}
    {!! $page->appendAsset(url('/js/freesignals/jquery-1.11.2.min.js')) !!}
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
    <script>window.jQuery||document.write('<script src="js/freesignals/jquery-1.11.2.min.js"><\/script>')</script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans%7CRaleway:400,700" rel="stylesheet">

    {!! $page->appendAsset(url('/js/freesignals/jquery.main.js')) !!}
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

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="#"><img src="/img/freesignals/logo.svg" alt="Skyline Markets" height="88"
                                         width="185"></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="bg-stretch">
            <img src="/img/freesignals/img1.jpg" alt="images description" width="1920" height="988">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0 info-block">
                    <h1>Even a superhero <span>needs a signal!</span></h1>
                    <div class="text-block">
                        <p>Our Analysts Point You Straight <span>To The Hottest Opportunities</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    {{--<form action="#" class="account-form">--}}
                    @include('funnels.layouts._partials.custom-forms._form-freesignals', ['funnelId' => $page->getParent()->id,'funnelName'=>'freesignals'])
                </div>
            </div>
            <div class="row features-block">
                <div class="col-sm-6 col-md-2">
                    <div class="feature-box">
                        <div class="text-holder">
                            <div class="heading-block">
                                <h2>Education</h2>
                            </div>
                            <p>Take control of your development through a comprehensive library complete with
                                eBooks, tutorials and video guides</p>
                            <div class="ico-holder">
                                <img src="/img/freesignals/ico1.png" alt="image description" width="60" height="38">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="feature-box">
                        <div class="text-holder">
                            <div class="heading-block">
                                <h2>Excellent Customer Service</h2>
                            </div>
                            <p>Our dedicated and efficient support team is available 24/7 to answer questions and
                                process requests</p>
                            <div class="ico-holder">
                                <img src="/img/freesignals/ico2.png" alt="image description" width="40" height="48">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="feature-box">
                        <div class="text-holder">
                            <div class="heading-block">
                                <h2>Knowledgeable Mentors</h2>
                            </div>
                            <p>Your personal broker is standing by to teach you the skills that will turn you into a
                                top trader.</p>
                            <div class="ico-holder">
                                <img src="/img/freesignals/ico3.png" alt="image description" width="43" height="55">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="feature-box">
                        <div class="text-holder">
                            <div class="heading-block">
                                <h2>State of the Art Platform</h2>
                            </div>
                            <p>Discover a platform that makes trading fun and profitable. Choose from the most
                                popular stocks, currencies, indices, and commodities</p>
                            <div class="ico-holder">
                                <img src="/img/freesignals/ico4.png" alt="image description" width="55" height="26">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-holder">
                <a href="#" class="button-bottom button">create account </a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pay-list">
                        <li><a href="#"><img src="/img/freesignals/pay-icon01.png" height="33" width="55"
                                             alt="visa"></a></li>
                        <li><a href="#"><img src="/img/freesignals/pay-icon02.png" height="33" width="55"
                                             alt="master card"></a></li>
                        <li><a href="#"><img src="/img/freesignals/pay-icon03.png" height="33" width="55"
                                             alt="american express"></a></li>
                        <li><a href="#"><img src="/img/freesignals/pay-icon04.png" height="33" width="55"
                                             alt="skrill"></a>
                        </li>
                        <li><a href="#"><img src="/img/freesignals/pay-icon05.png" height="33" width="55"
                                             alt="discover"></a>
                        </li>
                        <li><a href="#"><img src="/img/freesignals/pay-icon06.png" height="33" width="55" alt="jcb"></a>
                        </li>
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

    </footer>
@endsection


