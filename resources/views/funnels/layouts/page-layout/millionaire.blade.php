@section('head')
    {!! "<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/millionaire/funnel-style.css')) !!}
    {!! $page->appendAsset(url('/css/millionaire/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery-ui.min.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery.main7ef2.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery.fitvids.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/funnelOnLoad.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/modal.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/script.js')) !!}
@append

@section('page-layout')
    <div id="wrapper">
        <header id="header">
            <div class="logo"><a href="#"><img src="/img/millionaire/logo-min.png" alt="The Online Millionaire System"></a></div>
        </header>
        <main role="main" id="main">
            <section class="promo-section">
                <div class="holder">
                    <div class="form-block">
                        <div class="video-holder">
                            {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/z9x2755eKIE?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0" allowfullscreen></iframe>--}}
                            @include('funnels.layouts._partials._video',  ['w'=>'100%', 'h'=>'100%'])
                        </div>
                        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post']) !!}
                            <input type="hidden" name="pageId" value="{{ $page->id }}">
                            <fieldset>
                                <h2>Fill in your Email below to <br> get FREE INSTANT ACCESS to The <mark><b>OnlineMillionaireSystem</b></mark></h2>
                                @if($page->switches->showEmailField)
                                    <input class="text" id="awf_field-78362880" type="email" name="email" placeholder="Enter Your Email Address" value="" tabindex="500" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} "  value="get free access now!" required />
                                    <input id="af-submit-image-1059861972" type="submit" alt="Submit Form" tabindex="501" value="get free access now!" />
                                @endif
                                {{--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jAysnBxsjJzsTA==" alt="" /></div>--}}
                                <span class="info">Limited time offer!</span>
                                <ul class="logo-list">
                                    <li><img src="/img/millionaire/logo-01-min.png" alt="image description" width="32" height="32"></li>
                                    <li><img src="/img/millionaire/logo-02-min.png" alt="image description" width="97" height="31"></li>
                                    <li><img src="/img/millionaire/logo-03-min.png" alt="image description" width="28" height="30"></li>
                                </ul>
                            </fieldset>
                        {!! Form::close() !!}

                        {{--<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jAysnBxsjJzsTA==" alt="" /></div>--}}
                    </div>
                    <span class="bottom-message"><mark><b>EXCLUSIVE!</b></mark> Finally a ridiculously EASY way to <br>AUTOMATICALLY Earn BIG MONEY that Let's Anyone <br><b>Earn $1,000, $5,000,</b> <b>Even $10,000 per DAY!</b></span>
                </div>
            </section>
            <div class="panel info">
                <div class="holder">
                    <h2>Profit that is being generated by members NOW!</h2>
                    <span class="count"><b class='counter'></b></span>
                    <p>Live updating trades that are made by TheOnlineMillionaireSystem members! All verified and confirmed by a third party.<br/>All accounts have been looked at by a a legal team before publishing on this website.</p>
                </div>
            </div>
            <section class="info-section">
                <div class="holder">
                    <div class="content-holder">
                        <img class="hide" src="/img/millionaire/photo-01-min.png" alt="image description">
                        <div class="content">
                            <p>No doubt you've heard about smart traders who are earning <br>thousands per day. It's the rich guy's "Fun Zone" where <br> you drop a few bucks and get ONE THOUSAND back.</p>
                            <h2>Heck yeah! Earning thousands per day <br>would make your life a dream.</h2>
                            <ul class="list">
                                <li>Pay off Bills -- ALL of them!</li>
                                <li>Buy a NEW Home in ANY Neighborhood</li>
                                <li>Purchase a NEW Car or Truck</li>
                                <li>Send Kids to College with NO Loans</li>
                                <li>RETIRE YOUNG!</li>
                            </ul>
                            <div class="text">
                                <img class="show" src="/img/millionaire/photo-01-min.png" alt="image description">
                                <p>$1,000 per day is a cool THIRTY GRAND per month. <br>We've got some people earning $10,000 per day. <br>That's $3.6 MILLION per year.<br>How would you like THAT for your annual income?</p>
                            </div>
                            <p>Join NOW by filling up this form, and take advantage of this limited <br>time offer that will change your life!</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="panel">
                <div class="holder">
                    <h2>Get started today before all spots are filled!</h2>
                    <a href="#header" class="btn-scroll">GET FREE ACCESS NOW!</a>
                    <p>Start on your path to financial freedom today! You are guaranteed to make money. Sign up now for FREE. Let's get YOU started!</p>
                </div>
            </div>
            <div class="section-frame-02">
                <section class="main-section">
                    <div class="holder">
                        <div class="heading">
                            <h1>Our Success Stories</h1>
                            <p>All proof and verified by a third party. All accounts have been looked at by a legal team before publishing on this website.</p>
                        </div>
                        <ul class="photo-block same-parent">
                            <li>
                                <img src="/img/millionaire/photo-02-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“I had zero experience with Binary. But this amazing automated system had me earning $150 in about <br>15 minutes,”</p>
                                    <span class="author">Joe P., Sydney, Australia</span>
                                </div>
                            </li>
                            <li>
                                <img src="/img/millionaire/photo-03-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“Nobody could believe I earned $2,500 this week on autopilot. <br>But it happened and will continue <br>to happen for life. I love this!”</p>
                                    <span class="author">Wendy U, London UK</span>
                                </div>
                            </li>
                            <li class="hide">
                                <img src="/img/millionaire/photo-04-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“Frankly I don't know how they came up with this. Works perfect without a glitch. Fabulous automated trading at its finest,” </p>
                                    <span class="author">Raynaldo G., Toronto, CA</span>
                                </div>
                            </li>
                            <li class="hide">
                                <img src="/img/millionaire/photo-05-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“TheOnlineMillionaireSystem changed my life! I recommend it to anyone”</p>
                                    <span class="author">Lizzie R., Johannesburg, South Africa</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <div class="section-frame-01">
                    <section class="main-section new">
                        <div class="holder">
                            <div class="top-box">
                                <h1>Making Complicated Binary Trading <br>So Easy Your Grandma Can Do It</h1>
                                <div class="note">
                                    <img src="/img/millionaire/ico-01-min.png" alt="image description">
                                    <p>Sure, you took a peek at Binary Trading once and it looked kinda complicated. There were figures and estimates and deadlines and numbers flying all over the place.</p>
                                </div>
                                <p>If you decided it took an MBA from Wharton to understand, you were probably right. Doing Binary Trading right is not for Boy Scouts. You need to know what you're doing.</p>
                            </div>
                            <div class="content-holder">
                                <img class="hide" src="/img/millionaire/photo-06-min.png" alt="image description">
                                <div class="content">
                                    <p>And that is exactly what we did. I partnered with my friend Rick who is an experienced Binary trader who also happens to be a brilliant computer programmer. I asked Rick "Is there some way you could write a program that wins at Binary Trading on autopilot?"</p>
                                    <p><mark class="d-block">I could see the gears in his brilliant mind working.</mark> <br>He said, "Yes, but it won't be easy to create. <br>There are already automated trading systems out there <br>but they all have killer flaws. <br>I will design a new system that succeeds where the others fail."</p>
                                    <p>One thing I've learned over the years is Rick does what <br>he says. He spent evenings, weekends, holidays <br> -- for nearly a <mark>YEAR</mark> - writing this software.</p>
                                    <p>When the day came to test the software I could hardly contain my excitement. We logged on and started trading. At first the program wasn't making much money. I think we were up to $30 after a few minutes.</p>
                                    <p>My heart sank. "Is this all?" I asked Rick. </p>
                                    <p>He smiled. "Just wait a second. Now watch this."</p>
                                    <p>All of a sudden the numbers started to rise. Within an hour we had earned $1,000. We took a break for dinner and came back to see how the System <br>was doing. <mark>WOW!</mark> It had earned $3,500!!!</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="panel">
                        <div class="holder">
                            <h2>Get started today before all spots are filled!</h2>
                            <a href="#header" class="btn-scroll">GET FREE ACCESS NOW!</a>
                            <p>Start on your path to financial freedom today! You are guaranteed to make money. Sign up now for FREE. Let's get YOU started!</p>
                        </div>
                    </div>
                    <section class="table-section hide">
                        <div class="holder">
                            <h1>LIVE TRADES BEEN MADE BY THE SYSTEM NOW!</h1>
                            <h2>LIVE SYSTEM TRADES – APPROVED & VERIFIED</h2>
                            <div class="table-box">
                                <div id="info-table" class="info-table">
                                    <div class="tr">
                                        <div class="th">TheOnlineMillionaireSystem Members</div>
                                        <div class="th">Profit</div>
                                        <div class="th">Trade Time</div>
                                        <div class="th">Currency</div>
                                    </div>
                                </div>
                                <div id="live_trades" class="info-table">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="main-section add">
                        <div class="holder">
                            <div class="main-block">
                                <h1>Offered To the Public For the FIRST Time</h1>
                                <div class="note">
                                    <img src="/img/millionaire/ico-02-min.png" alt="image description">
                                    <p>Now that we've fully tested and proven our One Touch Automated Trading System, we're offering it to the world. It features a unique algorithm that blows the doors off anything that has gone before.</p>
                                </div>
                                <div class="text-box">
                                    <img class="right-img hide" src="/img/millionaire/img-01-min.png" alt="image description">
                                    <p>This system is 100% secure and safe. We've built all kinds of safeguards into it, <br>and we work with only <b>REGULATED BROKERS</b> to insure the security <br>of our members.</p>
                                </div>
                                <p>This is your once in a lifetime opportunity to cash in on the <b>EARLY</b> use of a ground breaking <br> new auto trading system. Get in NOW and take advantage of this <a href="#"><mark>LIMITED TIME OFFER for FREE!</mark></a></p>
                                <p>Jump in <b>NOW</b> and prove to yourself, to those you love, to your friends and family, and especially to <br> <b>ALL THOSE WHO DOUBTED YOU!</b> Show everyone just how successful YOU can be.</p>
                                <div class="text-box">
                                    <img class="left-img" src="/img/millionaire/img-03-min.png" alt="image description">
                                    <p>You are just moments away from watching your <b>FIRST</b> income arrive in your account. You started today as a working person. You will end the day as a wealthy person of leisure. <br><a href="#"><mark class="d-block">Get started HERE!</mark></a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="panel">
                <div class="holder">
                    <h2>Get started today before all spots are filled!</h2>
                    <a href="#header" class="btn-scroll">GET FREE ACCESS NOW!</a>
                    <p>Start on your path to financial freedom today! You are guaranteed to make money. Sign up now for FREE. Let's get YOU started!</p>
                </div>
            </div>
            <section class="accordion-section">
                <div class="holder">
                    <div class="accordion-holder">
                        <h1>Helpful Answers To All Your Questions</h1>
                        <ul class="accordion">
                            <li class="active">
                                <a href="#" class="opener"><i class="ico"></i>What is TheOnlineMillionaireSystem?</a>
                                <div class="slide">
                                    <p>TheOnlineMillionaireSystem is cutting edge online Software you get completely FREE! It allows you to smartly trade binary options with a single click. You get wining trades through easy automation.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>How can I be sure this is real?</a>
                                <div class="slide">
                                    <p>We understand every investor must do their due diligence. We have fully tested every aspect of TheOnlineMillionaireSystem. A CPA specializing in binary trading has gone through all our accounts and results to verify this system is just as powerful and profitable as our experience indicates it is.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>What kind of profits can I expect?</a>
                                <div class="slide">
                                    <p>We put no limits on what you can earn. The sky is the limit! Of course your profits will be dependent on how much money you invest. Most people spend around $300 per day and earn between $800 and $1,000. Once you start making money you can expand the amount you invest. Spend $1,000 and you can earn in the $2,500 range each day.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>What is the Broker minimum deposit?</a>
                                <div class="slide">
                                    <p>Like everything else, it takes money to make money. You must put some money in your account before you can start collecting profits. It's a good idea to start with $200 in your account. If you can spare $500, that's even better. That will allow you to start making money right away. Remember you can withdraw your profits the same day. Most people make all their money back on day one.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>How long do trades last?</a>
                                <div class="slide">
                                    <p>It's quick. The shortest is one minute but some last up to one hour. You will get profits very fast. You don't have to wait a long time like in the old days.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>Can you tell me exactly how this works?</a>
                                <div class="slide">
                                    <p>It's takes just 4 simple steps to get started. 1. Watch our video and opt-in to get access to the member's area. 2. Create your account with our chosen broker. Now you're ready to start trading. 3. Put funds in your account. 4. Start pulling in cash on your first day!</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>Do you require a credit card?</a>
                                <div class="slide">
                                    <p>NO! TheOnlineMillionaireSystem is completely FREE. We never ask for your credit card or Paypal. After you are in the member's area, you will get access to our favorite broker. Then you can invest funds and start trading. Of course you can collect your profits same day. Most people earn their money back on day one.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>Does this work on a Mac?</a>
                                <div class="slide">
                                    <p>Yes!TheOnlineMillionaireSystem is web based. That means any computer platform will work equally as well.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>I'm short on time. Did you say this is automated?</a>
                                <div class="slide">
                                    <p>Absolutely! TheOnlineMillionaireSystem is a fully automated one button system that lets you do profitable binary trading on autopilot. That means you can trade automatically while you're having dinner, while watching TV, even take a nap and make money.</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>Is this software complicated?</a>
                                <div class="slide">
                                    <p>No! There is nothing to download. The entire system is online and ready to use. You simply set up your account and click "Trade."</p>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="opener"><i class="ico"></i>How do I reach Customer Support?</a>
                                <div class="slide">
                                    <p>We pride ourselves in caring customer support that is always available 24/7. If you have a problem or question, please contact us through our full chat system. You will find that in the Members Area.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="link-row">
                <div class="holder">
                    <div class="link-list">
                        {{--<a class="email" href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#116;&#104;&#101;&#111;&#110;&#108;&#105;&#110;&#101;&#109;&#105;&#108;&#108;&#105;&#111;&#110;&#097;&#105;&#114;&#101;&#115;&#121;&#115;&#116;&#101;&#109;&#046;&#099;&#111;&#109;">--}}
                            {{--<span class="title">Email</span>--}}
                            {{--<span>support@theonlinemillionairesystem.net</span>--}}
                        {{--</a>--}}
                        {{--<a class="chat" href="#">--}}
                            {{--<span class="title">24/7 Live Chat</span>--}}
                            {{--<span>Available For Members</span>--}}
                        {{--</a>--}}
                        {{--<a class="terms" id="open-terms" onclick="openTerms()">--}}
                        <a class="terms" id="open-terms">
                            <span class="title">Terms</span>
                            <span>Disclaimer &amp; Privacy Policy</span>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer id="footer">
            <div class="holder">
                <span class="copy">Copyright 2015 | All Right Reserved by OnlineMillionaireSystem</span>
            </div>
        </footer>
    </div>
    <div id="ouibounce-modal">
        <div class="underlay"></div>
        <div class="message-box">
            <h2>wait before you go!</h2>
            <h3>get free access to the online millionaire system right now</h3>
            <div class="message-holder">
                <img src="/img/millionaire/photo-11-min.jpg" alt="image description">
                <div class="text">
                    <h4>enter your email below <br>for instant free access!</h4>
                    <div class="email-form access-form email-form" >
                        <fieldset>
                            <input class="text" id="email-modal-form" type="email" name="email" placeholder="Enter Your Email Address" tabindex="500" required />
                            <label id="email-modal-form-error" class="error" for="email-modal-form"></label>
                            <input id="submit-modal-form" onclick="mainFormBinding()" name="submit" type="submit" tabindex="501" value="get free access now!"  />
                        </fieldset>
                    </div>
                    <span class="bottom-text">limited time offer!</span>
                    <ul class="logo-list">
                        <li><img src="/img/millionaire/logo-01-min.png" alt="image description" width="32" height="32"></li>
                        <li><img src="/img/millionaire/logo-02-min.png" alt="image description" width="97" height="31"></li>
                        <li><img src="/img/millionaire/logo-03-min.png" alt="image description" width="28" height="30"></li>
                    </ul>
                    <div class="close-box">
                        <a href="#" class="close">close this message and continue watching</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="term-modal">
        <div class="gray-background" onclick="closeTerms()"></div>
        <div class="content">
            <center>
                <h2>Privacy Policy Statement</h2>
                </center><br /><b>Updated January 2016</b><br /><br /><b>Note on translation:</b>&nbsp;This Privacy Policy Statement may have been translated into various languages for the convenience of Zulander Hack Users. While the translation is correct to the best of Zulander Hack&rsquo;s knowledge, Zulander Hack is not responsible or liable in the event of an inaccuracy. English is the controlling language of this Privacy Policy Statement, and any translation has been prepared for you as a courtesy only. In the event of a conflict between the English-language version of this Privacy Policy Statement and a version that has been translated into another language, the English-language version shall control.<br /><br /><b>IMPORTANT:</b>&nbsp;This Privacy Policy Statement outlines the use of all personally identifiable information submitted and collected on http://zulanderhack.net (the &ldquo;Site&rdquo;). This privacy notice does not encompass other websites or third-party links referenced by Zulander Hack in print, online, or in e-mail. Zulander Hack, its affiliates, and all of their respective authorized representatives, officers, directors, employees, agents, shareholders, licensors, attorneys, successors, and assigns (&ldquo; Zulander Hack&rdquo;), is firmly committed to protecting both our current and former members&rsquo; personal and financial information. This Privacy Policy embodies our commitment to its protection through adherence to fair electronic information practices.<br /><br /><b>1. ACKNOWLEDGEMENT AND ACCEPTANCE OF TERMS</b><br />Zulander Hack is committed to protecting your privacy. This Privacy Statement sets forth our current privacy practices with regard to the information we collect when you or your computer interact with our website. By accessing http://zulanderhack.net, you acknowledge and fully understand the Privacy Statement and freely consent to the information collection and use practices described in this Website Privacy Policy Statement.<br /><br /><b>2. PARTICIPATING MERCHANT AND THIRD-PARTY VENDOR POLICIES</b><br />Related services and offerings with links from this website, including vendor sites, have their own privacy statements that can be viewed by clicking on the corresponding links within each respective website. Online merchants and others who participate in the services offered on http://zulanderhack.net/ are encouraged to participate in industry privacy initiatives and to take a responsible attitude towards consumer privacy. However, since we do not have direct control over the policies or practices of participating merchants and other third parties, we are not responsible for the privacy practices or content of those sites. We recommend and encourage that you always review the privacy policies of merchants and other third parties before you provide any personal information or complete any transaction with such parties.<br /><br /><b>3. INFORMATION WE COLLECT AND HOW WE USE IT</b><br />When you use or connect to the Zulander Hack website through your computer or a mobile device, the owners and publishers of http://zulanderhack.net collect certain information from and about its users in a few ways: directly from our web server logs, from the User, with the aid of cookies, with web beacons, and through the use of website analytics through a third party service provider. We collect personally identifiable information necessary for internal marketing purposes, registration and billing from customers who purchase our products and services online.<br />Visitors to our website can register to create an account, access the website, download Software, and possibly purchase services. When you register, we will request some personal information such as your name, address, e-mail, telephone number or facsimile number, location, account number and other relevant information. We also collect your IP computer address. If you are purchasing a service, we will request financial information. Any financial information we collect is used only to bill you for the services you purchased. If you purchase by credit card, this information may be forwarded to your credit card provider. For other types of registrations, we will ask for the relevant information. You may also be asked to disclose personal information to us so that we can provide assistance and information to you. For example, such data may be warranted in order to provide online technical support and troubleshooting.<br />Web Server Logs<br />When you visit our Website, we may track information through web server logs to better administer the site and analyze its usage. Examples of information we may track include but is not limited to your Internet Protocol address, the type of browser or computer you use, the number of links you click within the site, the geographical location from which you accessed the site, the date and time of your visit, the name of your Internet service provider, any web pages you linked to our Site from, and pages you viewed on the Site.<br />Use of Cookies<br />Zulander Hack may use cookies to personalize or enhance your user experience. A cookie is a small text file that is placed on your hard disk by a Web page server to identify that specific user the next time he or she visits the website. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a Web Server in the domain that issued the cookie to you.<br />One of the primary purposes of cookies is to provide a convenience feature to save you time. For example, if you personalize a web page, or navigate within a site, a cookie helps the site to recall your specific information on subsequent visits. Hence, this simplifies the process of delivering relevant content and eases site navigation by providing and saving your preferences and login information as well as providing personalized functionality.<br />We do not allow other companies to place cookies on our website unless there is a temporary, overriding customer value (such as integrating another site that relies on third-party cookies into the existing website).<br />Modifying cookie settings<br />You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to delete or decline cookies. If you reject cookies by changing your browser settings then be aware that this may disable some of the functionality on our Website.<br />Use of Web Beacons or GIF Files<br />This website may contain electronic images known as &ldquo;Web Beacons&rdquo; (also called single-pixel gifs) that allow the owners and publishers of http://zulanderhack.net/ to count users who have visited those pages and to deliver co-branded services. The owners and publishers of http://zulanderhack.net/ may include Web Beacons in promotional e-mail messages or newsletters in order to determine whether messages have been opened and acted upon.<br />Some Web Beacons may be placed by third party service providers to help us determine the effectiveness of our advertising campaigns or e-mail communications. These Web Beacons may be used by these service providers to place a persistent cookie on your computer, for the benefit of Zulander Hack. This allows the service provider to recognize your computer each time you visit certain pages or e-mails and compiles anonymous information in relation to those page views, which in turn enables us and our service providers to learn which advertisements and e-mails bring you to our website and how you use the site. Zulander Hack prohibits Web Beacons from being used to collect or access your personal information.<br />Information Submitted by the User<br />Registered Site Users will have the opportunity to submit feedback and information regarding their trading activity through the software and through the website, which will be subsequently displayed on the website on an anonymous basis. Such information is submitted on a voluntary basis. Zulander Hack maintains no control over the accuracy or correctness of such self-reporting and accordingly disclaims all liability from User reliance on this data.<br /><br /><b>4. NOTICE ON DISCLOSURE OF USER PERSONAL INFORMATION</b><br />Zulander Hack reserves the right to share aggregated site statistics with partner companies and affiliates, including brokers, to help enhance its service offerings, but does not sell identifiable personal information to third party marketing companies. Personal User information collected by or submitted to Zulander Hack shall not be disclosed to any third parties without your permission, unless such information: (i) to fulfill your service requests; (ii) is required to be disclosed by law, regulation, legal process, or law enforcement or government regulatory authorities, in which case we shall give you as much advance notice as is reasonably practicable in order to allow you to limit or restrict to such disclosure; or (iii) is required to be disclosed in order for us to protect our legal rights or defend against liability; or (iv) in connection with a merger, acquisition, or liquidation of Zulander Hack.<br /><br /><b>5. OPTING OUT</b><br />If you wish, you may choose not to receive emails, newsletters or other communications from the Site by clicking the &ldquo;Unsubscribe&rdquo; link in the email communication sent to your registered email account with the website.<br /><br /><b>6. ACCESSING AND CHANGING PERSONAL INFORMATION</b><br />You can ensure that your personally identifiable information in your web account file is correct and up to date by contacting our support attendants via our support desk at support [at] zulanderhack.net<br /><br /><b>7. INTERNET BASED DATA TRANSFER</b><br />Given that the Internet is a global environment, using the Internet to collect and process personal data necessarily involves the transmission of data on an international basis. Therefore by browsing this website and communicating electronically with us, you acknowledge and agree to our processing of personal data in this manner.<br /><br /><b>8. UNDER 18 POLICY</b><br />People under 18 years of age are not permitted to use the Zulander Hack website.<br /><br /><b>9. CHANGES TO THIS STATEMENT</b><br />The owners and publishers of http://zulanderhack.net/ have the discretion to periodically update this Privacy Policy Statement. When we do, we will also revise the &ldquo;updated&rdquo; date at the top of this Privacy page. We encourage you to periodically review this privacy statement to stay informed about how we are helping to protect the personal information we collect. Your continued use of the service constitutes your agreement to this privacy statement and any updates.<br /><br /><b>10. CONTACT US</b><br />If you have questions regarding the security of http://zulanderhack.net, our Privacy Statement, its implementation, and/or our information collection and dissemination practices, please contact us via our support desk at support [at] zulanderhack.net<br /><center>Zulander Hack &copy; 2016 All rights reserved.</center>
        </div>
    </div>
@endsection