@section('head')
    {!! $page->appendAsset(url('/css/cloudtrader/font-awesome.min.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/normalize.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/webflow.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/cloudtrader.webflow.css')) !!}
    {!! $page->appendAsset(url('/css/cloudtrader/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/cloudtrader/webflow.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/form.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/script.js')) !!}
    {!! $page->appendAsset(url('/js/cloudtrader/script.js')) !!}
    <!-- START Exoclick Goal Tag | Re targeting -->
    <img width="1" height="1" src="http://main.exoclick.com/tag.php?goal=c01bb5a306ff305fccf4e814d8f927d3">
    <!-- END Exoclick Goal Tag | Re targeting -->
    <img style="display:none;" src="//a.mgid.com/1x1.gif?id=186216&type=c&g=x&t=x&tg=&v=1&r=">
@append

@section('page-layout')
    <img width="162" src="/img/cloudtrader/ver.png" class="w-hidden-small w-hidden-tiny ver">
    <div class="w-section header">
        <div class="w-container"><img width="375" src="/img/cloudtrader/logo-2.png" class="logo">
        </div>
    </div>
    <div class="w-section section">
        <div class="w-container">
            <h1 data-ix="fade-in-zoom" class="h1-title smaller">Hello , Your FREE spot is almost confirmed...<br/>Fill
                in the rest correctly so we can send you the activation code</h1>
            <div class="w-row">
                <div class="w-col w-col-8">
                    @include('funnels.layouts._partials._video',['h' => '100%', 'w' => '100%'])
                </div>
                <div class="w-col w-col-4">
                    <div class="w-form members-form">
                        @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="w-section section-2">
        <h1 id="section-2" class="h1 _7 bigger"><span class="bold-blue rot">MEET </span>The Experts Behind CloudTrader
        </h1>
    </div>
    <div id="platform" class="w-section platform-section">
        <div class="w-container">
            <div class="map-div">
                <div class="w-row team-row">
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/matthew.png" class="team-profile">
                            <h1 class="team-name">Matthew Shepherd</h1>
                            <div class="position">CEO & Founder</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/JamesRichardson.png" class="team-profile">
                            <h1 class="team-name">James Richardson</h1>
                            <div class="position">CO-Founder & Senior Developer</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/GabrielaMarcs.png" class="team-profile">
                            <h1 class="team-name">Gabriela Marcs</h1>
                            <div class="position">Head Financial Analyst</div>
                        </div>
                    </div>
                </div>
                <div class="w-row team-row">
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/HenrySaintPet.png" class="team-profile">
                            <h1 class="team-name">Henry Saint Pet</h1>
                            <div class="position">Junior Developer</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/JuliaMartinez.png" class="team-profile">
                            <h1 class="team-name">Julia Martinez</h1>
                            <div class="position">Help Desk Manager</div>
                        </div>
                    </div>
                    <div class="w-col w-col-4 w-col-small-4">
                        <div class="team-div"><img src="/img/cloudtrader/LeeChue.png" class="team-profile">
                            <h1 class="team-name">Lee Chue</h1>
                            <div class="position">QA Automation Manager</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="education" class="w-section section-3">
        <div class="w-container">
            <h1 id="section-2" class="h1">frequently asked questions</h1>
            <div class="div-line"></div>
            <div data-ix="an-1-open" class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">Do I need to have any previous knowledge or experience?</div>
                    </div>
                </div>
                <div class="an">
                    <p>Knowledge is always a good thing to have BUT CloudTrader software was built to do all the work
                        for you and WILL</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">Why is it FREE?</div>
                    </div>
                </div>
                <div class="an">
                    <p>The software is free for 30 days. We’re confident that you will become a member right after the
                        trial period based on seeing your account grow by in huge profits!</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">How much will I make?</div>
                    </div>
                </div>
                <div class="an">
                    <p>Since the beginning of the year, the smallest amount of net daily profits any of our members have
                        made was $926.23</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">What do I need to get started?</div>
                    </div>
                </div>
                <div class="an">
                    <p>All one needs is a broker account so that the system can connect to it.</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">Why do I need a brokerage account?</div>
                    </div>
                </div>
                <div class="an">
                    <p>The software would need to be clinked to a platform that is connected to the international
                        markets and will help you see those high returns daily!</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">How do I contact you?</div>
                    </div>
                </div>
                <div class="an">
                    <p>Help is available 24/7 through email (SUPPORT@CLOUDTRADER.CO). For phone assistance, email us
                        with your phone number and we’ll call you ASAP.</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">Do I need to download any software?</div>
                    </div>
                </div>
                <div class="an">
                    <p>No, the software is web-based.</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">Can I access this from my MAC or mobile phone?</div>
                    </div>
                </div>
                <div class="an">
                    <p>Yes, our software can be accessible form any device that has an internet connection PC/MAC/Cell
                        Phones/ tablets</p>
                </div>
            </div>
            <div class="q">
                <div class="w-row v-row">
                    <div class="w-col w-col-1 w-col-stack">
                        <div class="v-txt center">?</div>
                    </div>
                    <div class="w-col w-col-11 w-col-stack">
                        <div class="v-txt blue">How do I withdraw my profits?</div>
                    </div>
                </div>
                <div class="an">
                    <p>Simply contact our brokers via email or telephone with the desired amount. You will receive your
                        earnings within 1-3 business days guaranteed.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="reg" class="w-section reg-section">
        <div class="w-container">
            <h1 id="time" class="update-txt">This is your chance to join our user-friendly and high performing<br>$1250
                daily income software like so many around the world</h1>
            <div class="w-row">
                <div class="w-col w-col-6 center removeFloat">
                    <div data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000"
                         data-autoplay="1" class="w-slider slider">
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
                    <input id="goToRegistration" type="button" value="SIGN UP NOW" class="w-button members-submit"/>
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
                    <div data-ix="fade-from-top-2" class="number color">$<span
                                id="totalMembersProfits">128,221,776</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-section footer">
        <div class="w-container">
            <div class="footer-txt">This site and the products and services offered on this site are not associated,
                affiliated, endorsed, or sponsored by Google, Clickbank, eBay, Amazon, Yahoo or Bing.
                <br>Copyright 2016 - CloudTrader - All Rights Reserved
            </div>
        </div>
    </div>

@endsection