@section('head')
    {!! $page->appendAsset(url('/css/profitmax/reset.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/bootstrap.min.css')) !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Exo:500italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,700italic,900italic,300italic' rel='stylesheet' type='text/css'>" !!}
    {!! "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/profitmax/lightbox.min.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/form.css')) !!}
    {!! $page->appendAsset(url('/css/profitmax/style.css')) !!}
@append
@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/profitmax/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/jquery.plugin.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/jquery.countdown.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/lightbox.min.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/form-en.js')) !!}
    {!! $page->appendAsset(url('/js/profitmax/script.js')) !!}
@append

@section('page-layout')
    <div class="members_page">
    <div id="wrapper">
        <div id="header">
            <div class="header_inner">
                <div class="header_content">
                    <div id="logo"><a href=""></a></div>
                    <div class="header_slogan">
                        <div class="trim_spaces">
                            <div class="scalable">
                                <div class="header_slogan_inner">
                                    <div><span>Congratulations!</span> You Are One Step Closer To Earning</div>
                                    <div><span>$<span>1,671.32</span> Per Day...</span> With Just A Couple Clicks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container">
            <div class="section section_video_members">
                <div class="section_container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div action="" class="reg_form">
                                <div id="boa-regform" class="boaforms theme-undefined"><div class="form-container theme-default">
                                        <div class="logos-container">
                                        </div>
                                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                                    </div>
                                </div>
                            </div>
                            <div class="safe"><img src="/img/profitmax/safe.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section_countdown">
                <div class="section_container">
                    <div class="secure_countdown_wrapper">
                        <div class="secure_countdown_container">
                            <div class="secure_countdown_inner" id="countdownText">
                                <div class="title">Your Profit Maximizer Membership Application</div>
                                <div class="description">Will Expire In Just A Few Minutes:</div>
                            </div>
                        </div>
                        <div class="countdown" id="secure_countdown">06:53:00</div>
                    </div>
                </div>
            </div>

            <div class="section section_testimonials">
                <div class="section_container">
                    <div class="section_title">"In Just One Day, I Made $1022.13"</div>

                    <ul class="testimonials_list">
                        <li><img src="/img/profitmax/testimonial1.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Maria S.</div>
                                    <img src="/img/profitmax/stars4.png" alt=""></div>
                                <div class="desc">
                                    I still can’t believe that I was lucky enough to try your software. I have made more in one month than I did last year. If you had told me that I can earn $41,581 in one month alone! I am overjoyed and lost for words"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax/testimonial2.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Christian W.</div>
                                    <img src="/img/profitmax/stars45.png" alt=""></div>
                                <div class="desc">
                                    Wow, I don’t even know how to describe how I feel right now James! Your software is great, it works miracles! I had no idea beta-testing could actually set me financially free. I have made so much money with your software that I have paid off my student loans already! I am forever thankful to you!"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax/testimonial3.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Wolfgang S.</div>
                                    <img src="/img/profitmax/stars5.png" alt=""></div>
                                <div class="desc">
                                    Yo! I tried online trading before and just seemed to be wasting money, however, after just 10 minutes with your software, I realized that this way I can make consistent profits. After my first withdrawal I thought it would stop but it has just kept on earning me a solid $11,862 at least every week!"
                                </div>
                            </div>
                        </li>
                        <li><img src="/img/profitmax/testimonial4.png" alt="">

                            <div class="description">
                                <div class="meta">
                                    <div class="name">Monika H.</div>
                                    <img src="/img/profitmax/stars4.png" alt=""></div>
                                <div class="desc">
                                    Dear James, Congratulations on giving me, my father and my sister a heart-attack. We all nearly dropped dead when we say my earning after a month. A staggering 40 grand! In fact it was $42.012. We are already counting the days until the next month."
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="section section_steps">
                <div class="section_container">

                    <div class="row">

                        <div class="col-md-8">
                            <div class="steps_wrapper">
                                <ul class="steps">
                                    <li>Fill in the registration form below to open your <span>FREE Profit Maximizer Account</span>.</li>
                                    <li>Fund your <span>Profit Maximizer Account</span> with the minimum brokers’ requirement to instantly activate the system. </li>
                                    <li>
                                        Once you fund your account, watch your profits grow with the <span>Profit Maximizer System</span>.
                                        <br/>Withdraw your funds any time, any day.
                                        <p><span>Zero Fees!
                                    <br/>Zero Commission! No Surprises!</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section section_live">
                <div class="section_container">
                    <div class="section_title">Current Live Trades of Profit Maximizer</div>
                </div>
            </div>


            <div class="section section_map">
                <div class="section_container">
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax/map1.png" alt=""/>

                            <div class="name">Robert Syverson</div>
                            <div class="flag">
                                <img src="/img/profitmax/flag_uk.png" alt=""/> UK
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Starting Ballance: $<span>750</span></div>
                            <div class="profit">Profit to date: $<span>221,807,53</span></div>

                        </div>
                        <div class="buttons"><a href="/img/profitmax/Robot_4_Member_1.png" class="button_view" data-lightbox="image-1" data-title="Robert Syverson Results">view verifed account</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax/map2.png" alt=""/>

                            <div class="name">Michael Lyons</div>
                            <div class="flag">
                                <img src="/img/profitmax/flag_usa.png" alt=""/> USA
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Starting Ballance: <span>$500</span></div>
                            <div class="profit">Profit to date: $<span>50,335.12</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax/Robot_4_Member_2.png" class="button_view" data-lightbox="image-1" data-title="Michael  Results">view verifed account</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax/map3.png" alt=""/>

                            <div class="name">Jack Morris</div>
                            <div class="flag">
                                <img src="/img/profitmax/flag_austr.png" alt=""/> Australia
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Starting Ballance: <span>$300</span></div>
                            <div class="profit">Profit to date: $<span>35,174.22</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax/Robot_4_Member_3.png" class="button_view" data-lightbox="image-1" data-title="Jack  Results">view verifed account</a></div>
                    </div>
                    <div class="map_item">
                        <div class="meta"><img src="/img/profitmax/map4.png" alt=""/>

                            <div class="name">Amelie Palmer</div>
                            <div class="flag">
                                <img src="/img/profitmax/flag_nz.png" alt=""/> New Zealand
                            </div>
                        </div>
                        <div class="description">
                            <div class="start">Starting Ballance: $<span>10,0000</span></div>
                            <div class="profit">Profit to date: $<span>16,593,25</span></div>
                        </div>
                        <div class="buttons"><a href="/img/profitmax/Robot_4_Member_4.png" class="button_view" data-lightbox="image-1" data-title="Amelie Results">view verifed account</a></div>
                    </div>
                </div>
            </div>

            <div class="section section_support">
                <div class="section_container">
                    <div class="support_wrapper">
                        <div class="section_title">Get 24/7 Support</div>
                        <div class="description">
                            As a member of <span>Profit Maximizer</span>, you get access to our <span>24/7 support line</span>.
                        </div>
                        <div class="contact">
                            <span>Have a question? Do not hesitate to contact us at</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div id="footer">
        <div class="footer_content">
            <div class="footer_content">
                <div class="footer_note">
                    <p>Important Risk Note: Trading binary options can generate significant benefits but also involves a risk of partial or full funds loss and should be considered by initial investors. we strongly advise that you read our terms & conditions and disclaimer page before making any investment. customers must be aware of their individual capital gain tax liability in their country of residence.</p>
                    <p>It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are called 'prediction' contracts, unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer_nav">
        <ul class="footer_nav">
            <li><a href="">Disclaimer</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Affiliate</a></li>
            <li><a href="">Support</a></li>
        </ul>
    </div>
@endsection