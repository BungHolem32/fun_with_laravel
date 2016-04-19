@section('head')
    {!! $page->appendAsset(url('/css/dreamprofits/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/dreamprofit.webflow.css')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/webfont.js')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/script.js')) !!}
    {!! $page->appendAsset(url('/js/dreamprofits/modernizr.js')) !!}
    {!! $page->appendAsset(url('/css/dreamprofits/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')
    <div id="slide1" style="line-height:30px; padding-top:0px; font-size: 3.5vw;max-width: 960px; text-align:center; z-index:999; background:#F77979; color:white; position:absolute; display:none;">
        <p class="update_title">Urgent Update</p>
        <p class="update_subtitle"><span id='update_date'></span></p>
        <p class="update_title">There are only <strike>15</strike> 7 spots remaining and<br />TODAY is the final day</br ></br >sign up NOW to secure your spot!</h3>
    </div>
    <div class="w-hidden-small w-hidden-tiny left-opt-in">
        <div class="opt-in-title">GET IN FREE TODAY</div>
        <div class="w-form">
            <div>
                <input type="button" value="SIGN UP NOW!" onclick="firstPageSignUp()" class="w-button submit smaller" />
            </div>
        </div>
    </div>
    <div class="w-hidden-small w-hidden-tiny div-slider">
        <div data-animation="slide" data-duration="500" data-infinite="1" data-delay="6843" data-autoplay="1" class="w-slider slider">
            <div class="w-slider-mask">
                <div class="w-slide slider1">
                    <div class="title-slider">LIVE MEMBERS</div>
                    <div class="div1"><img src="/img/dreamprofits/56a0e2ec27aa59360308e465_5151245.png" class="img1">
                        <div class="name-t">Anita Klein
                            <br>earned <span class="dollar">$680</span>
                        </div>
                    </div>
                </div>
                <div class="w-slide"></div>
                <div class="w-slide slider1">
                    <div class="title-slider">LIVE MEMBERS</div>
                    <div class="div1"><img src="/img/dreamprofits/56a0e35f27aa59360308e515_124564as.png" class="img1">
                        <div class="name-t">Anita Klein
                            <br>earned <span class="dollar">$245</span>
                        </div>
                    </div>
                </div>
                <div class="w-slide slider1">
                    <div class="title-slider">LIVE MEMBERS</div>
                    <div class="div1"><img src="/img/dreamprofits/56a0e2c5c2d4186d5bd8e950_123.png" class="img1">
                        <div class="name-t">Neal Green
                            <br>earned <span class="dollar">$680</span>
                        </div>
                    </div>
                </div>
                <div class="w-slide"></div>
                <div class="w-slide slider1">
                    <div class="title-slider">LIVE MEMBERS</div>
                    <div class="div1"><img src="/img/dreamprofits/alex.png" class="img1">
                        <div class="name-t">Alex Bellos
                            <br>earned <span class="dollar">$610</span>
                        </div>
                    </div>
                </div>
                <div class="w-slide slider1">
                    <div class="title-slider">LIVE MEMBERS</div>
                    <div class="div1"><img src="/img/dreamprofits/austin.png" class="img1">
                        <div class="name-t">Austin Byrd
                            <br>earned <span class="dollar">$380</span>
                        </div>
                    </div>
                </div>
                <div class="w-slide"></div>
            </div>
        </div>
    </div>
    <div data-ix="show-opt-in" class="w-section first-section">
        <div class="w-container">
            <h1 class="title-white">Last Month Each One of My Members Made Over $150,000 With My Software. TODAY IT’S YOUR CHANCE TO JOIN!</h1>
            <div class="w-row row">
                <div id="mainVID" class="w-col w-col-8 video-clm">
                    <div class="w-embed w-video video">
                        <div id="homeVID">
                            @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                        </div>
                    </div>
                </div>
                <div id="regPopUp" class="w-col w-col-4">
                    <div class="form-title">GET IN FREE TODAY!</div>
                    {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                    <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                            <div class="w-form form">
                                <div>
                                    <input id="semail2" type="email" placeholder="Email Address" name="email" data-name="Email Address" required="required" class="w-input field" />
                                    <input id="SubmitOptIn" type="submit" value="SIGN UP NOW!" class="w-button submit"/>
                                </div>
                            </div>
                        @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><img src="/img/dreamprofits/letter-psd.jpg" class="letter">
    <div class="w-section section-4">
        <div class="w-row">
            <div class="w-col w-col-3">
                <div class="box"><img src="/img/dreamprofits/3.png" class="icon-img">
                    <div class="txt-icon">TOP RATES:
                        <br><strong>1.8547</strong>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-3">
                <div class="box"><img src="/img/dreamprofits/2.png" class="icon-img">
                    <div class="txt-icon">TOTAL MEMBERS:
                        <br><strong>1,231</strong>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-3">
                <div class="box"><img src="/img/dreamprofits/1.png" class="icon-img">
                    <div class="txt-icon">MEMBERS PROFITS
                        <br><strong>$128,221,776</strong>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-3">
                <div class="box"><img src="/img/dreamprofits/Untitled-1.png" class="icon-img">
                    <div class="txt-icon">safe funds:
                        <br><strong>1,231</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section w-hidden-tiny live-trades">
        <div class="w-container">
            <h1 class="black-title">Live Trades</h1>
            <div class="w-row first-row">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="first-row-txt">Date of Trader</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="first-row-txt">Asset Name</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="first-row-txt">Signal Direction</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="first-row-txt">Verified Payout</div>
                </div>
            </div>
            <div class="w-row row-2 gray">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:40:36</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">GOLD</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt"><span>DOWN</span>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 422.00</div>
                </div>
            </div>
            <div class="w-row row-2">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:39:47</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">NZD / USD</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">UP</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 249.00</div>
                </div>
            </div>
            <div class="w-row row-2 gray">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:38:00</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">GOLD</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">UP</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 339.00</div>
                </div>
            </div>
            <div class="w-row row-2">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:37:55</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">USD / CHF</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">UP</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 253.00</div>
                </div>
            </div>
            <div class="w-row row-2 gray">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:37:12</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">OIL</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt"><span>DOWN</span>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 342.00</div>
                </div>
            </div>
            <div class="w-row row-2">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:35:05</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">EUR / USD</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt"><span>DOWN</span>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 214.00</div>
                </div>
            </div>
            <div class="w-row row-2 gray">
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">2016/04/08 15:34:58</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">FACEBOOK</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">UP</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3">
                    <div class="clm-txt">$ 482.00</div>
                </div>
            </div>
            <div class="w-row row-2">
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                    <div class="clm-txt">2016/04/08 15:24:49</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                    <div class="clm-txt">APPLE</div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                    <div class="clm-txt"><span>DOWN</span>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-3">
                    <div class="clm-txt">$ 195.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section testimonial-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4">
                    <div class="testimonial-box"><img src="/img/dreamprofits/56a0e2ec27aa59360308e465_5151245.png" class="testimonial-img">
                        <div class="testimonial-name">LENA BAILEY</div>
                        <div>I was sceptic at first but after talking to henry and realizing how easy the system is I decided to try and was surprised for the better after cashing out for the first time after one month.</div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="testimonial-box"><img src="/img/dreamprofits/56a0e35f27aa59360308e515_124564as.png" class="testimonial-img">
                        <div class="testimonial-name">CAROLYN BARBER</div>
                        <div>Thank you guys so much for opening the opportunity for me and giving me the chance to free up more time to study, although after this I’m not sure I’m going to stay in college.</div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="testimonial-box"><img src="/img/dreamprofits/56a0e2c5c2d4186d5bd8e950_123.png" class="testimonial-img">
                        <div class="testimonial-name">RODERICK MOODY</div>
                        <div>Freeing up about 15 min a day and making already a monthly salary, thank you henry for the chance to spend my time with my kids and wife and not be stuck in the factory for 10 hours shifts.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section section-2">
        <div class="w-container">
            <h1 class="title">HOW WE DO IT and WHAT TO EXPECT</h1>
            <div class="w-row">
                <div class="w-col w-col-4 clm"><img src="/img/dreamprofits/icon1.png" data-ix="fade-from-top" class="icon">
                    <div class="row-txt"><p><span style="font-size: 24px; font-weight: bolder; line-height: 50px;">Bare Metal Performance</span><br>Our high performing trading technology is based on our OWN super-fast servers located across the globe, these are 10 X faster than the public servers that are generally used by other trading platforms. </p></div>
                </div>
                <div class="w-col w-col-4 clm"><img src="/img/dreamprofits/icon3.png" data-ix="fade-from-top" class="icon">
                    <div class="row-txt"><p><span style="font-size: 24px; font-weight: bolder; line-height: 50px;">Superior Technology </span><br>Our Global, super speed fibre network provides low-latency and a massive capacity bandwidth connection, providing you with super-fast winning trades no matter where you are in the world.</p></div>
                </div>
                <div class="w-col w-col-4 clm"><img src="/img/dreamprofits/icon2.png" data-ix="fade-from-top" class="icon">
                    <div data-ix="fade-from-bottom" class="row-txt"><p><span style="font-size: 24px; font-weight: bolder; line-height: 50px;">Infrastructure</span><br>With total end-to-end ownership of our vast infrastructure guarantees rapid responses to and from the markets. I own 100% of every component in our trading empire. Nothing is outsourced and this galvanizes our trading platform and we never lose a trade.</p></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/dreamprofits/popup.js"></script>
    <script type="text/javascript" src="/js/dreamprofits/webflow.js"></script>
@endsection