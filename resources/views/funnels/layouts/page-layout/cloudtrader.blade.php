@section('head')
    {!! $page->appendAsset(url('/css/cloudtrader/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/cloudtrader.webflow.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/webflow.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/script.js')) !!}
@append

@section('page-layout')
    <div class="w-hidden-medium w-hidden-small w-hidden-tiny fixed-form">
        <h1 id="section-2" class="h1 _7 small">Free registration</h1>
        <div class="w-form">
            <div>
                <input id="email-side" type="email" placeholder="Enter your email address" name="email" required="required" class="w-input fixed-field" />
                <input id="submit-side" type="button" value="INSTANT ACCESS" class="w-button submit3" />
            </div>
        </div>
    </div>


    <img width="162" src="/img/cloudtrader/ver.png" class="w-hidden-tiny ver">
    <div class="w-section header">
        <div class="w-container"><img width="375" src="/img/cloudtrader/logo-2.png" class="logo">
        </div>
    </div>
    <div class="w-section section _1">
        <div class="w-container">
            <h1 data-ix="fade-in-zoom" class="h1-title">To Make<span class="green">$1,250</span> PER DAY<br />With FREE Auto Trading Software</h1>
            <div class="video-box">
                @include('funnels.layouts._partials._video',['h' => '100%', 'w' => '100%'])
            </div>
        </div>
    </div>
    <div id="about" class="w-section section-2">
        <div data-ix="open-fixed-form" class="w-container">
            <h1 id="section-2" class="h1">It takes a few seconds to register and see how we prove our software works and will make you $1,250 every day starting now!</h1>
            <div class="div-line"></div>
            {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                <input type="hidden" name="pageId" value="{{ $page->id }}">
                <div class="w-form form-wrapper">
                    <div>
                        @if($page->switches->showEmailField)
                            <input id="email" type="email" placeholder="Enter your email address" name="email" data-name="email" class="w-input field" required />
                            <input type="submit" value="INSTANT ACCESS" class="w-button submit" />
                        @endif
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <h1 id="section-2" class="h1 _7">Members in Israel profiting daily<br>$1250 with cloud trader</h1>
    </div>
    <div class="w-section section-4">
        <div data-autoplay="data-autoplay" data-loop="data-loop" data-wf-ignore="data-wf-ignore" data-poster-url="https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-poster-00001.png" data-video-urls="https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-transcode.webm,https://daks2k3a4ib2z.cloudfront.net/56c9799c1e4c5a667cda9259/56e1709b8b19029b4bdbd488_notebook-transcode.mp4" class="w-background-video video-bg">
            <div class="w-row icons-row">
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">No risk and high reward high achieving profit software designed for any experienced or total newbie user. We all of the tools and guides waiting for you to achieve 100% success</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Software that trades at super-speed, super-cautiously and with a 100% trading win record which profits for all our user a minimum of $1250 a day.</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Cloud server power is the key to our success. Our 82 server farms places across the world allow us to offer the most accurate trades</div>
                    </div>
                </div>
                <div class="w-col w-col-3 w-col-small-3 w-col-tiny-6">
                    <div class="icon-box"><img src="/img/cloudtrader/0.png" class="icon">
                        <div class="icon-txt">Choose between full automated and manual signals trading. Let the software work for you while on the run, at work, or even on vacations. Cloud Trader profits on average $158 per each hour the markets are opened throughout the day.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="reg" class="w-section reg-section">
        <div class="w-row">
            <div class="w-col w-col-4">
                <div class="social-div"><img src="/img/cloudtrader/images.png" class="social-logo">
                    <div class="feed">
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/1.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Gabe Pain</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">Now that I’ve been using your software for a few weeks now it’s time to say THANK YOU and show you what you’ve helped me achieve!
                                With the past few weeks earning I’ve place a down payment and this new apartment which is located in a safest area for kids in town! Elizabeth (my wife) and I thank you for allowing us to achieve this for our family!
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/7.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Lizzy  Watson</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">I got to thank my loving husband Jack for pushing us to use Cloud trader
                                They told me I didn’t need experience and I said “ok”
                                They told me they’ll be there 24/7 to help and I was also sceptical…
                                But when they told me I’ll be making over $1300 a day… I really thought they were joking!
                                Thank God they weren’t and thank God Jacked pushed us to try it!
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-tiny-6"><img src="/img/cloudtrader/attachments/11.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Jack Hilson</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">My hat is off to you and your team and for many of my viewers that does mean a lot.
                                I never told you this but my main profession is to find the software that don’t work and there are many of them… fortunately for you and your members I couldn’t find any reason not to recommend your high aching software. In only 9 days of trading with your software, CloudTrader, I've made over $18,435
                            </div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-stack w-col-tiny-6"><img src="/img/cloudtrader/attachments/9.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-stack w-col-tiny-6">
                                    <div class="f-name">&nbsp; Carlos Rodriguez</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">I’m not sure if you know of the situation here in Buenos Aires but it isn’t easy to find a good job and ESPECIALLY FOR STUDENTS!  Cloud trader has really saved me… I’m making over 8k a week and that’s not even an amount possible to make in a month here!  God bless you all</div>
                        </div>
                        <div class="post">
                            <div class="w-row">
                                <div class="w-col w-col-2 w-col-stack w-col-tiny-6"><img src="/img/cloudtrader/attachments/2.jpg" class="facebook-profile">
                                </div>
                                <div class="w-col w-col-10 w-col-stack w-col-tiny-6">
                                    <div class="f-name"> &nbsp;Johnny Vince</div>
                                    <div class="f-time">10 mins</div>
                                </div>
                            </div>
                            <div class="f-text">Now that I’ve tested this software for a few weeks I will make sure to get the word out on the how effective it has been! I have many followers and FB and on my blog and such software should not be left a secret. They will be happy to ready about how I have been making an average of 1133 Euros every trading day of the week.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <h1 id="time" class="update-txt dark">2016 Verified Member Profits<br>Last Updated: 04.04.16</h1>
                <div data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1" class="w-slider slider">
                    <div class="w-slider-mask mask">
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images1.jpg" class="pic">
                                <h1 class="name-profile">Joshua Ross</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 892</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 03.02.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: France</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $13,682</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images2.jpg" class="pic">
                                <h1 class="name-profile">Mathias Gruber</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 629</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.25.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: England</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $6,850</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images6.jpg" class="pic">
                                <h1 class="name-profile">Bruce Levik</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 594</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.18.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: Canada</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $9,729</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="members-div"><img src="/img/cloudtrader/pics/images7.jpg" class="pic">
                                <h1 class="name-profile">Ronald Smit</h1>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lt">
                                        <div class="profile-txt">Member: 553</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rt">
                                        <div class="profile-txt">Joined: 02.15.2016</div>
                                    </div>
                                </div>
                                <div class="w-row row">
                                    <div class="w-col w-col-6 row-clm lb">
                                        <div class="profile-txt">Country: Australia</div>
                                    </div>
                                    <div class="w-col w-col-6 row-clm rb">
                                        <div class="profile-txt">Total Revenues: $11,108</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <div class="social-div"><img src="/img/cloudtrader/tw.png" class="social-logo">
                    <div class="feed">
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/12.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#">&nbsp; Jeannie Tran</a>&nbsp;Another morning of 8 successful trades!. <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/8.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Katie Alvarez</a> So far this week $9,030 in cash profits. <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/13.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Bert Bailey</a> Loving the autopilot!  <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/14.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Joan Richardson</a> Today, $1,545 and it just doesn’t stop growing!   <a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post t">
                            <div class="w-row">
                                <div class="w-col w-col-2">
                                    <img src="/img/cloudtrader/attachments/5.jpg">
                                </div>
                                <div class="w-col w-col-10">
                                    <div class="f-text t"><a class="t-link" href="#"> &nbsp;Jeremiah Carr</a>It's my first day, hope it goes well<a class="t-link" href="#">@cloudtrader</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="education" class="w-section section-3">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <h1 id="section-2" data-ix="fade-from-top" class="h1">Total Members:</h1>
                    <div data-ix="fade-from-top-2" id="totalMembersAmount" class="number">1,231</div>
                </div>
                <div class="w-col w-col-6">
                    <h1 id="section-2" data-ix="fade-from-top" class="h1">Total Members Profits</h1>
                    <div data-ix="fade-from-top-2" class="number color">$<span id="totalMembersProfits">128,221,776</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section footer">
        <div class="w-container">
            <div class="footer-txt">This site and the products and services offered on this site are not associated, affiliated, endorsed, or sponsored by Google, Clickbank, eBay, Amazon, Yahoo or Bing.
                <br>Copyright 2016 - CloudTrader - All Rights Reserved</div>
        </div>
    </div>
@endsection