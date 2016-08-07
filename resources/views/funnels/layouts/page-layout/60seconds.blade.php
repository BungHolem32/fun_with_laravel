@section('head')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    {!! $page->appendAsset(url('/css/60seconds/bootstrap.css')) !!}
    {!! $page->appendAsset(url('/css/60seconds/main.css')) !!}
        <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>

@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {{--{!! $page->appendAsset(url('/js/firstPage.js')) !!}--}}
    {!! $page->appendAsset(url('/js/jquery-1.11.2.min.js')) !!}
    {!! $page->appendAsset(url('/js/60seconds/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/60seconds/jquery.main.js')) !!}
    {!! $page->appendAsset(url('/js/jquery.validate.min.js')) !!}

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
@append

@section('page-layout')
    {{--{!! $page->htmlHeader !!}--}}

    {{--<div class="wrap">--}}
    {{--<div class="ppl">--}}
    {{--@include('funnels.layouts._partials._video')--}}
    {{--</div>--}}

    {{--{!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}--}}
    {{--<input type="hidden" name="pageId" value="{{ $page->id }}">--}}
    {{--<button class="submit en"><span>@ln(FREE ACCESS)</span></button>--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--<img class="cer" src="/img/psy/cer.png" />--}}
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"><a href="#"><img src="/img/60seconds/Skyline-LogoSVG-forblackbg.svg"
                                                           height="88" width="185" alt="Skyline Markets"/></a></div>
                    </div>
                </div>
            </div>
        </header>
        <main id="main">
            <div class="bg">
                <img src="/img/60seconds/bg-img.png" alt="image description">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-lg-offset-3 col-md-offset-0">
                        <h1>
                            <span><span>You are</span> <mark>60 seconds</mark> away</span>
                            from becoming a successful investor!
                            <i><img src="/img/60seconds/mark-arrow.png" height="178" width="143"
                                    alt="image description"></i>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-6  col-md-12 col-md-offset-5">

                        {{--<div class="form-group">--}}
                        {{--<input type="text" placeholder="First Name" >--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="text" placeholder="Last Name" >--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="email" placeholder="Email" >--}}
                        {{--</div>--}}
                        {{--<div class="form-group phone-row">--}}
                        {{--<input type="text" placeholder="043" >--}}
                        {{--<input type="text" placeholder="Phone Number" >--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<input type="password" placeholder="Password" >--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn-arrow">create account <span><img src="/img/60seconds/btn-arrow.png" height="45" width="34" alt="image description"></span></button>--}}
                        {{--</div>--}}
                        @include('funnels.layouts._partials._form-60seconds', ['funnelId' => $page->getParent()->id])
                    </div>

                    {{--<div class="form second">--}}

                    {{--</div>--}}
                    {{--<div class="wrap">--}}
                    {{--<div class="ppl">--}}
                    {{--@include('funnels.layouts._partials._video')--}}
                    {{--</div>--}}


                    {{--</div>--}}
                    <div class="row columns-holder">
                        <div class="col-md-2">
                            <div class="info-box">
                                <div class="icon"><img src="/img/60seconds/icon01.png" height="130" width="153"
                                                       alt="image description"></div>
                                <div class="frame">
                                    <div class="hold">
                                        <h3>Education</h3>
                                        <p>Take advantage of a comprehensive library complete with eBooks, tutorials and
                                            video guides. Brokers are standing by to teach you the skills that will turn
                                            you into a top trader.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="info-box">
                                <div class="icon"><img src="/img/60seconds/icon02.png" alt="image description"></div>
                                <div class="frame">
                                    <div class="hold">
                                        <h3>Excellent <br>Customer Service</h3>
                                        <p>Our Support staff is available 24/7 to answer questions. We have the quickest
                                            processing times in the industry, with withdrawal approvals in as little as
                                            one business day.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="info-box">
                                <div class="icon"><img src="/img/60seconds/icon03.png" alt="image description"></div>
                                <div class="frame">
                                    <div class="hold">
                                        <h3>Welcome Bonuses and Rewards</h3>
                                        <p>Make the most of your deposit with up to a 100% bonus, and promotions such as
                                            free* iPads, iPhones, and gaming system bundles.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="info-box">
                                <div class="icon"><img src="/img/60seconds/icon04.png" height="138" width="135"
                                                       alt="image description"></div>
                                <div class="frame">
                                    <div class="hold">
                                        <h3>State of the Art Platform</h3>
                                        <p>Discover a simple to use platform that makes trading fun. Choose from the
                                            most popular stocks, currencies, indices, and commodities. Work with
                                            embedded charts and indicators.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 text-center">
                            <a class="btn-arrow" href="#">create account <span><img src="/img/60seconds/btn-arrow.png"
                                                                                    height="45" width="34"
                                                                                    alt="image description"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pay-list">
                                <li><a href="#"><img src="/img/60seconds/pay-icon01.png" height="33" width="55"
                                                     alt="image description"></a></li>
                                <li><a href="#"><img src="/img/60seconds/pay-icon02.png" height="33" width="55"
                                                     alt="image description"></a></li>
                                <li><a href="#"><img src="/img/60seconds/pay-icon03.png" height="33" width="55"
                                                     alt="image description"></a></li>
                                <li><a href="#"><img src="/img/60seconds/pay-icon04.png" height="33" width="55"
                                                     alt="image description"></a></li>
                                <li><a href="#"><img src="/img/60seconds/pay-icon05.png" height="33" width="55"
                                                     alt="image description"></a></li>
                                <li><a href="#"><img src="/img/60seconds/pay-icon06.png" height="33" width="55"
                                                     alt="image description"></a></li>
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
                                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/../policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
