@section('head')
    {!! $page->appendAsset(url('/css/copybuffett/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/copybuffett/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/copybuffett/copy-buffett-software.webflow.css')) !!}
    {!! $page->appendAsset(url('/css/copybuffett/form.css')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/webfont.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/modernizr.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/script.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/copybuffett/webflow.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/form.js')) !!}
@append


@section('page-layout')
    <div id="navbar" class="w-section navbar smaller-2">
        <div class="w-container">
            <a href="#top" class="w-inline-block brand"><img width="259" src="/img/copybuffett/gold-logo.png" class="logo small-logo">
            </a>
        </div>
    </div>
    <div data-ix="small-navbar" class="w-section section _1">
        <div class="w-container">
            <h3 id="top" class="h3-title small2">Congratulations  ! You will soon receive full access to the Copy Buffett Software<span class="color-txt"></span></h3>
            <h3 class="h3-title-smaller">Follow these 3 steps below and <span class="color-txt">GET STARTED</span><span class="color-txt"></span></h3>
            <div class="w-row">
                <div class="w-col w-col-9">
                    <div id="video-div" class="w-embed w-video video _2nd">
                        @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                    </div>
                </div>
                <div class="w-col w-col-3 clm">
                    <div class="w-form form-2 blue-bg">
                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                    </div>
                </div>
            </div><img width="566" src="/img/copybuffett/5656b6a77f808ada5a6ba424_security-logos.png" class="secured-icons-2">
        </div>
    </div>
    <div id="optin" class="w-section white-section">
        <div class="w-container">
            <div class="title-3 white">These 3 quick steps will lead you to quick daily profits!</div>
            <div class="w-row">
                <div class="w-col w-col-4">
                    <div class="step">
                        <div class="steps-title">
                            <div class="number">
                                <div>1</div>
                            </div>
                            <div>Register your correct details</div>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="step">
                        <div class="steps-title">
                            <div class="number">
                                <div>2</div>
                            </div>
                            <div>Fund your trading account with the amount you desire</div>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="step">
                        <div class="steps-title">
                            <div class="number">
                                <div>3</div>
                            </div>
                            <div>Check your email account for your personal software access and get started!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="live" class="w-section w-hidden-small w-hidden-tiny white-section-2">
        <div class="w-row">
            <div class="w-col w-col-4">
                <div class="w-row">
                    <div class="w-col w-col-6 w-clearfix row-2 _2">
                        <div class="testimonial-box _2 _3"><img src="/img/copybuffett/123.jpg" class="testimonial-pic _2">
                            <h4 class="testimonial-name">Wayne George</h4>
                            <p class="testimonial-txt">It's funny how so many people think they can make an accurate prediction just by reading financial news sites... That's why so many find it hard to profit.
                                <br> I leave my trading decisions to the BEST! CopyBuffett has never let me down</p>
                        </div>
                    </div>
                    <div class="w-col w-col-6 row-2 _2">
                        <div class="w-hidden-medium w-hidden-small w-hidden-tiny testimonial-box"><img src="/img/copybuffett/5f38a11062ba11e3a36d0efe2ecb7f88_5.jpg" class="testimonial-pic _2">
                            <h4 class="testimonial-name">Floyd	Lucas</h4>
                            <p class="testimonial-txt">I for the past 4 years i've tried endless tools, endless guides and endless systems....
                                <br> Not once did i succeed in making money. My friends even called me "the dreamer trader". &nbsp;I got news for them! CopyBuffett has made me over $86,000 since i've started 2 months ago!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4 form-2-clm">
                <div class="w-form form-2">
                    <div>
                        <div class="form-3-title">Fill in you correct details to get quick and easy access to Copy Buffett Software, The worlds most advanced trading software</div>
                        <input id="members-sub-submit" type="button" value="GET STARTED" class="w-button optin-submit" />
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <div class="w-row">
                    <div class="w-col w-col-6 row-2 _2">
                        <div class="w-hidden-medium w-hidden-small w-hidden-tiny testimonial-box"><img src="/img/copybuffett/123.jpg" class="testimonial-pic _2">
                            <h4 class="testimonial-name">Wayne George</h4>
                            <p class="testimonial-txt">I've never met such a kind and helpful team like the CopyBuffett team! Since day one they have always been there for me and they're 50% of the reason for me making and average daily of $2100. So i write this to you, CopyBuffett team and i mean it with all my heart! THANK YOU</p>
                        </div>
                    </div>
                    <div class="w-col w-col-6 w-clearfix row-2 _2">
                        <div class="testimonial-box _2"><img src="/img/copybuffett/5f38a11062ba11e3a36d0efe2ecb7f88_5.jpg" class="testimonial-pic _2">
                            <h4 class="testimonial-name">Floyd	Lucas</h4>
                            <p class="testimonial-txt">For years i've been telling my students to stay away from trading systems, to protect them of course. But when i saw this software come out on the news... i knew i had to try it.
                                <br> CopyBuffett is an amazing real profit making software and I do recommend it deeply.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section articles-section">
        <div data-animation="cross" data-duration="1000" data-infinite="1" data-delay="4000" data-autoplay="1" data-easing="ease-in-out-quart" class="w-slider news-slider">
            <h1 class="h1 blue">BUFFETT IN THE&nbsp;NEWS</h1>
            <div class="w-slider-mask mask">
                <div class="w-slide">
                    <div class="w-container news-container">
                        <a href="#" class="w-lightbox w-inline-block news-box"><img src="/img/copybuffett/news-1.jpg" class="news-img-1">
                            <script type="application/json" class="w-json">
                { "items": [{
                  "id": "56bbb38b23ac054969ba8df4",
                  "url": "images/news-12.jpg",
                  "fileName": "news-1.jpg",
                  "origFileName": "news-1.jpg",
                  "width": 1764,
                  "height": 606,
                  "size": 524062,
                  "type": "image"
                }] }
              </script>
                        </a>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="w-container news-container">
                        <a href="#" class="w-lightbox w-inline-block news-box"><img src="/img/copybuffett/news-2.jpg" class="news-img-1">
                            <script type="application/json" class="w-json">
                { "items": [{
                  "id": "56bbb37523ac054969ba8ddd",
                  "url": "images/news-22.jpg",
                  "fileName": "news-1.jpg",
                  "origFileName": "news-1.jpg",
                  "width": 1764,
                  "height": 606,
                  "size": 524062,
                  "type": "image"
                }] }
              </script>
                        </a>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="w-container news-container">
                        <a href="#" class="w-lightbox w-inline-block news-box"><img src="/img/copybuffett/news-3.jpg" class="news-img-1">
                            <script type="application/json" class="w-json">
                { "items": [{
                  "id": "56bbb44d92e79142091238e4",
                  "url": "images/news-33.jpg",
                  "fileName": "news-1.jpg",
                  "origFileName": "news-1.jpg",
                  "width": 1764,
                  "height": 606,
                  "size": 524062,
                  "type": "image"
                }] }
              </script>
                        </a>
                    </div>
                </div>
                <div class="w-slide">
                    <div class="w-container news-container">
                        <a href="#" class="w-lightbox w-inline-block news-box"><img src="/img/copybuffett/news-4.jpg" class="news-img-1">
                            <script type="application/json" class="w-json">
                { "items": [{
                  "url": "images/news-44.jpg",
                  "fileName": "news-44.jpg",
                  "origFileName": "news-44.jpg",
                  "width": 1011,
                  "height": 1183,
                  "size": 762442,
                  "type": "image"
                }] }
              </script>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-slider-arrow-left w-hidden-small w-hidden-tiny arrow-right left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="w-slider-arrow-right w-hidden-small w-hidden-tiny arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="w-slider-nav w-round w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny"></div>
        </div>
    </div>
    <div class="w-section w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny social-section">
        <div class="w-container facebook-container">
            <div class="facebook-header">
                <div class="facebook-search">
                    <div>#Copy Buffett Software</div>
                </div>
            </div>
            <div class="div-facebook"></div>
        </div>
    </div>
    <h1 data-ix="new-interaction" class="h1">Popular Copy Buffett Questions and Answers</h1>
    <div id="faq" class="w-section faq-section">
        <div class="w-container">
            <div class="q-div">
                <div class="q">Q: How much does Copy Buffett Software cost?</div>
                <div class="a-div">
                    <div>Copy Buffett is completely free of charge for 30 days. Our business doesn't come from charging you any fees. We don’t need nor want your credit card or PayPal details. Signup and get Copy Buffett free for 30 days while the only thing you will need is a NEW and Active trading account with one of our recommended brokers so we may link the software to it.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: How much money can I make with Copy Buffett?</div>
                <div class="a-div">
                    <div>Your profits are unlimited and are dependent on how much you are prepared to invest. Unlike any other profitable business, you can start funding your trading account with as little as $300. The more you invest will speed up your profits.
                        <br> Copy Buffett will start working for you (regardless the amount you chose to fund in the broker) and optimize your profits day by day.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: How can I get started?</div>
                <div class="a-div">
                    <div>Actually Copy Buffett will do most of the work for you, once you complete the following 4 simple steps:
                        <br>
                        <br>1. Complete the full registration form.
                        <br> 2. Open an account with our recommended broker (you'll be guided to a safe and trusted broker).
                        <br> 3. Now, Copy Buffett will be accessible for you. Just watch your account balance grow by using the system.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: Do I need any previous experience with trading in order to use Copy Buffett?</div>
                <div class="a-div">
                    <div>No, you do not. Copy Buffett has been designed to be fully user friendly, so even a complete newbie can profit daily</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: Do I need to download any other software</div>
                <div class="a-div">
                    <div>No, the trading interface is 100% web-based so no software download is required. So, there aren’t any messy downloads or installations. Everything is ready and set up for you to start making money.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: What is the minimum bid per trade?</div>
                <div class="a-div">
                    <div>The minimum bid per trade is only $25, so you don't risk your funds.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: How much does it cost to open an account with a recommended broker?</div>
                <div class="a-div">
                    <div>Opening an account at a broker doesn't cost a cent. You will just need to fund your account with the funds you desire. These funds are your money and it will remain in your account balance.
                        <br> No fees will be deducted from your investment. There is no extra charge to open a trading account, and once you have completed the short registration form, your trading account will be open. We have selected the most reliable brokers, so you will never have to experience any delays or bad experiences.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: How do I withdraw my profits from my trading account?</div>
                <div class="a-div">
                    <div>Withdrawals are simple and our preferred broker provides a selection of withdrawal options. All withdrawal requests are processed within 1-3 business days. Again, we have consistently tested all brokers, and we only choose the ones that perform the better and processed withdrawals easily and without any delays.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: On what does Copy Buffett trade on?</div>
                <div class="a-div">
                    <div>You can trade in a variety of underlying assets including stocks, currency pairs, indices and commodities. For example, you can trade the US Dollar vs. the Euro, or can also trade on wheat, sugar or stocks like Microsoft, Apple, etc.
                        <br> Copy Buffett simplifies all the process for you, choosing the right assets with the higher probabilities to profit.</div>
                </div>
            </div>
            <div class="q-div">
                <div class="q">Q: My question in not answered here, what do I do?</div>
                <div class="a-div">
                    <div>Please, don’t hesitate to contact your Personal Profit Consultant and our amazing support system. Both are available 24/7 to ensure that you will make the most possible money. Please feel free to reach out to your broker or to Support@CopyBuffett.com</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section footer-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-3 w-col-small-6"><img width="232" src="/img/copybuffett/gold-logo.png" class="footer-logo">
                </div>
                <div class="w-col w-col-9 w-col-small-6">
                    <div class="text-footer">We strongly advise that you read our full Risk Disclosure Statement and Privacy Policy before accessing this website.
                    <div class="text-footer _2">Copyright © 2016 Copy Buffett Software. &nbsp;All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
@endsection