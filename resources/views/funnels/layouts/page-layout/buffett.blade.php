@section('head')
    {!! $page->appendAsset(url('/css/copybuffett/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/copybuffett/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/copybuffett/copy-buffett-software.webflow.css')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/webfont.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/modernizr.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/script.js')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/copybuffett/webflow.js')) !!}
@append

@section('page-layout')
    <div id="navbar" class="w-section navbar">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4">
                    <a href="#top" class="w-inline-block brand"><img width="259" src="/img/copybuffett/gold-logo.png" class="logo">
                    </a>
                </div>
                <div class="w-col w-col-8 w-hidden-small w-hidden-tiny">
                    <div class="w-form">
                        <div id="email-form-2">
                            <div class="w-row form-row">
                                <div class="w-col w-col-7">
                                    <input id="sub-email-form" type="email" placeholder="Enter your email address" name="email" class="w-input top-field">
                                </div>
                                <div class="w-col w-col-2">
                                    <input id="sub-submit-form" type="submit" value="SIGN UP" data-wait="Please wait..." class="w-button top-btn">
                                </div>
                            </div>
                            <label id="sub-form-error" class="error"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-div" class="w-hidden-medium w-hidden-small w-hidden-tiny popup-div">
        <a href="#" data-ix="close-popup" class="w-inline-block x">
            <div>X</div>
        </a>
        <div class="w-container popup-container">
            <div class="w-row">
                <div class="w-col w-col-7 w-clearfix">
                    <div class="gif-img popup"><img src="/img/copybuffett/header.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-ix="small-navbar" class="w-section section _1 long">
        <div class="w-container">
            <h3 id="top" class="h3-title">Get on the fast track to success by copying <span class="color-txt">THE BEST!</span></h3>
            <h3 class="h3-title-smaller">Available in Israel 30 day free trial to a <span class="color-txt">$1978 daily</span> profit software<span class="color-txt"></span></h3>
            <div class="w-row">
                <div class="w-col w-col-3 w-hidden-medium w-hidden-small w-hidden-tiny"></div>
                <div class="w-col w-col-9 clm">
                    <div id="video-div" class="w-embed w-video video">
                        @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="optin" class="w-section optin-section">
        <h2 id="first-page-form" class="white-title-2">Start profiting daily with a unique system based on the strategies<br>of the most successful investor the world has ever seen! <span class="color-txt">Zero</span> cost <span class="color-txt">for 30 days</span></h2>
        <div class="w-row">
            <div class="w-col w-col-4 w-hidden-small w-hidden-tiny"><img src="/img/copybuffett/secured2.png" data-ix="icons-fade-in" class="icons">
            </div>
            <div class="w-col w-col-4 optin-clm">
                <div class="w-form optin-form">
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                    <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                        <input id="main-email-form" type="email" placeholder="Enter Your Email Address" name="email" data-name="Enter Your Email Address" required="required" class="w-input field mail">
                        <input id="main-submit-form" type="submit" value="YOUR SOFTWARE HERE" data-wait="Please wait..." data-ix="btn-fade-in-out" class="w-button optin-submit">
                        @endif
                    {!! Form::close() !!}
                    <div class="w-form-done">
                        <p>Thank you! Your submission has been received!</p>
                    </div>
                    <div class="w-form-fail">
                        <p>Oops! Something went wrong while submitting the form</p>
                    </div>
                </div><img width="483" src="/img/copybuffett/5656b6a77f808ada5a6ba424_security-logos.png">
            </div>
            <div class="w-col w-col-4"><img src="/img/copybuffett/secured.png" data-ix="icons-fade-in" class="icons">
            </div>
        </div>
    </div>
    <div class="w-section articles-section">
        <div data-animation="cross" data-duration="1000" data-infinite="1" data-delay="4000" data-autoplay="1" data-easing="ease-in-out-quart" class="w-slider news-slider">
            <h1 class="h1 blue">BUFFETT IN THE&nbsp;NEWS</h1>
            <div class="w-slider-mask">
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
    <div id="info" class="w-section software-section">
        <div class="w-row">
            <div class="w-col w-col-6 w-hidden-tiny w-clearfix">
                <div class="gif-img"><img src="/img/copybuffett/header.jpg">
                </div>
            </div>
            <div class="w-col w-col-6 txt-ckn">
                <h1 class="h1-title-black">How does Copy Buffett work?</h1>
                <p class="software-txt">For the past 6 years, we’ve been following the trading methods of <strong data-new-link="true">The Richest Investor In History.</strong>
                    <br>We’ve learned that to trade successfully, you need to study, <em data-new-link="true">learn by experience and most importantly… COPY from the <strong>BEST!</strong></em>
                </p>
                <h4 class="small-title">FACTS ABOUT THE BEST:</h4>
                <ul>
                    <li>
                        <p class="software-txt">Buffett takes a passive approach to investing.
                            <br> Rather than looking at the stock charts all day, Buffett prefers to lay back and let his money work for him.</p>
                    </li>
                    <li>
                        <p class="software-txt">Buffett has never in his life made an investment decisions based on emotional thinking (fear and stress).</p>
                    </li>
                    <li>
                        <p class="software-txt">Buffett is and has always been a math genius! Allowing him to make effective and calculated decisions which lead to record breaking profits.</p>
                    </li>
                </ul>
                <div class="text-after-software">Now after 6 years and 4 months… studying… copying… and programming, my team and I finally perfected the artificial software which has the ability to copy Buffett’s trading mentality and produce daily earnings FOR ALL OUR MEMBERS!</div><a href="#video-div" class="w-button button">FREE COPY HERE</a>
            </div>
        </div>
    </div>
    <div class="w-section graph-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <div class="clm-text-title">Why is Copy Buffett <span class="under-line">free</span> for 30 days?</div>
                    <p class="clm-text">Today you have the chance to join 100% free for 30 days as a trial member and test our $1,970 daily profit software. After the 30 days, if you chose to continue, you may as a 95% partner.
                        <br> Meaning, we profit only from your revenues and only after we prove ourselves for 30 days
                        <br>
                        <strong data-new-link="true" class="bold-txt">We can only profit after YOU DO!</strong>
                    </p>
                </div>
                <div class="w-col w-col-6"><img width="597" src="/img/copybuffett/mac.png">
                </div>
            </div>
        </div>
    </div>
    <div id="live" class="w-section w-hidden-small w-hidden-tiny live-results">
        <div class="w-container">
            <div data-animation="slide" data-duration="1500" data-infinite="1" data-delay="10000" data-autoplay="1" class="w-slider testimonial-slider">
                <div class="w-slider-mask">
                    <div class="w-slide">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/123.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Wayne George</h4>
                                    <p class="testimonial-txt">I always thought that I could make an accurate prediction just by reading financial news sites like Bloomberg.&nbsp;
                                        <br>I never knew how wrong I was until I subscribed to CopyBuffett
                                        <br>After signing up.</p>
                                </div>
                            </div>
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/5f38a11062ba11e3a36d0efe2ecb7f88_5.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Floyd	Lucas</h4>
                                    <p class="testimonial-txt">heavily relied on technical analysis when trading in the Forex market. I soon learned the hard way that if you want to increase profit, technical analysis must be complemented with fundamental analysis.&nbsp;My trade accuracy is better now</p>
                                </div>
                            </div>
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/5bdcccee5e6411e38b8f12030b12c9da_5.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Ryan	Wallace</h4>
                                    <p class="testimonial-txt">There is nothing better than getting up in the morning to see my account and how much it has grown over night. This has been my reality every morning for the 8 months. I always follow good advice when i hear of it and with no doubt copying the best does sound &nbsp;logical and that why i copy Buffett's trading strategies!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="w-row">
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/maxresdefault.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Kristy	Perry</h4>
                                    <p class="testimonial-txt">It's funny how so many people think they can make an accurate prediction just by reading financial news sites... That's why so many find it hard to profit.
                                        <br> I leave my trading decisions to the BEST! CopyBuffett has never let me down</p>
                                </div>
                            </div>
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/1.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Lynda	Joseph</h4>
                                    <p class="testimonial-txt">My partner and I were so close to losing our business last year. Actually not only our business but our mortgaged homes too. CopyBuffett changed all of that for us! With weekly returns of $15,000 coming in smoothly money isn't a problem anymore :)</p>
                                </div>
                            </div>
                            <div class="w-col w-col-4">
                                <div class="testimonial-box"><img src="/img/copybuffett/5bdcccee5e6411e38b8f12030b12c9da_6.jpg" class="testimonial-pic">
                                    <h4 class="testimonial-name">Marvin	Fields</h4>
                                    <p class="testimonial-txt">For years i've been telling my students to stay away from trading systems, to protect them of course. But when i saw this software come out on the news... i knew i had to try it.
                                        <br> CopyBuffett is an amazing real profit making software and I do recommend it deeply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="optin" class="w-section optin-section upside-down">
        <h2 class="white-title-2">Start profiting daily by copying the world’s most brilliant investor</h2>
        <div class="w-row">
            <div class="w-col w-col-4 w-hidden-small w-hidden-tiny"><img src="/img/copybuffett/secured.png" data-ix="icons-fade-in" class="icons lower">
            </div>
            <div class="w-col w-col-4 optin-clm">
                <div class="w-form optin-form">
                    <div id="email-form">
                        <a href="#video-div"><input type="submit" value="FREE TRIAL NOW" data-wait="Please wait..." data-ix="btn-fade-in-out" class="w-button optin-submit"></a>
                    </div>
                    <div class="w-form-done">
                        <p>Thank you! Your submission has been received!</p>
                    </div>
                    <div class="w-form-fail">
                        <p>Oops! Something went wrong while submitting the form</p>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4"><img src="/img/copybuffett/secured2.png" data-ix="icons-fade-in" class="icons lower">
            </div>
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
    <div class="w-section footer-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-3 w-col-small-6"><img width="232" src="/img/copybuffett/gold-logo.png" class="footer-logo">
                </div>
                <div class="w-col w-col-9 w-col-small-6">
                    <div class="text-footer">We strongly advise that you read our full Risk Disclosure Statement and Privacy Policy before accessing this website.</div>
                    <div class="text-footer _2">Copyright © 2016 Copy Buffett Software. &nbsp;All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
@endsection