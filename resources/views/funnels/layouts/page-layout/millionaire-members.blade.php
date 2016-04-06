@section('head')
    {!! "<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>" !!}
    {!! $page->appendAsset(url('/css/millionaire/funnel-style.css')) !!}
    {!! $page->appendAsset(url('/css/millionaire/members-style.css')) !!}
    {!! $page->appendAsset(url('/css/millionaire/style.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/millionaire/jquery-ui.min.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery.main7ef2.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/jquery.fitvids.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/membersOnLoad.js')) !!}
    {!! $page->appendAsset(url('/js/millionaire/script.js')) !!}
@append

@section('page-layout')
    <div id="wrapper">
        <header id="header">
            <div class="logo"><a href="#"><img src="/img/millionaire/logo-min.png" alt="The Online Millionaire System"></a></div>
        </header>
        <main role="main" id="main">
            <div class="promo-block">
                <section class="promo-section add">
                    <div class="holder">
                        <h1>automate your profits</h1>
                        <div class="step-block">
                            <div class="step-row second-step">
                                <div class="step-line">
                                    <div class="step one">
                                        <span class="num">1</span>
                                        <span class="top">step</span>
                                        <span class="bottom">Signup</span>
                                    </div>
                                    <div class="step two active">
                                        <span class="num">2</span>
                                        <span class="top">step</span>
                                        <span class="bottom">Create your account</span>
                                    </div>
                                    <div class="step three">
                                        <span class="num">3</span>
                                        <span class="top">step</span>
                                        <span class="bottom">You're done! Make profits</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-box">
                                <h2><b>Congratulations,</b> sign up now and get your lifetime free subscription!</h2>
                                <div class="wl-signup">
                                    @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id])
                                </div>
                                <span class="message">limited time offer!</span>
                                <ul class="logo-list">
                                    <li><img src="/img/millionaire/logo-01-min.png" alt="image description" width="32" height="32"></li>
                                    <li><img src="/img/millionaire/logo-02-min.png" alt="image description" width="97" height="31"></li>
                                    <li><img src="/img/millionaire/logo-03-min.png" alt="image description" width="28" height="30"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="panel info">
                    <div class="holder">
                        <h2>PROFIT GENERATED BY MEMBERS:</h2>
                        <span class="count"><b class='counter'></b></span>
                        <p>Live updating trades that are made by TheOnlineMillionaireSystem members! All verified and confirmed by a third party.<br/>All accounts have been looked at by a a legal team before publishing on this website.</p>
                    </div>
                </div>
                <section class="main-section">
                    <div class="holder">
                        <div class="heading">
                            <h1>Our Success Stories</h1>
                            <p>All proof is verified by a third party. All accounts have been looked at by a CPA and legal team before <br>publishing on this website.</p>
                        </div>
                        <ul class="photo-block same-parent">
                            <li>
                                <img src="/img/millionaire/photo-04-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“I needed some extra income I could do from home. When I saw TheOnlineMillionaireSystem I knew instantly it was perfect for me. Extra cash was super useful in my life.”</p>
                                    <span class="author">Luke W. London, UK</span>
                                </div>
                            </li>
                            <li>
                                <img src="/img/millionaire/photo-02-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“This is Truly amazing! I would like to say Thank you for TheOnlineMillionaireSystem!! I have made $47,580 in just 8 weeks.”</p>
                                    <span class="author">Sarah G.  Johannesburg, South Africa</span>
                                </div>
                            </li>
                            <li>
                                <img src="/img/millionaire/photo-03-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“I found out about TheOnlineMillionaireSystem from a co-worker that was making thousands of Euros a week using the system. At the beginning I was skeptical, but now that I reached my goal of 3,500 euros a week. I can confidently say that it works.”</p>
                                    <span class="author">Conor S. Dublin, Ireland</span>
                                </div>
                            </li>
                            <li>
                                <img src="/img/millionaire/photo-05-min.jpg" alt="image description">
                                <div class="description same">
                                    <p>“When I retired, I realized I did not save enough for the retirement I deserved… now that I found TheOnlineMillionaireSystem My life have changed and I am planning a long trip to Europe.”</p>
                                    <span class="author">Keira D. Wellington New Zeeland</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <div class="panel">
                    <div class="holder">
                        <h2>Get started today before all spots are filled!</h2>
                        <a href="#header" class="btn-scroll">GET FREE ACCESS NOW!</a>
                        <p>Start on your path to financial freedom today! You are guaranteed to make money. Sign up now for FREE. Let's get YOU started!</p>
                    </div>
                </div>
                <section class="table-section">
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
                <div class="link-row">
                    <div class="holder">
                        <div class="link-list">
                            {{--<a class="email" href="mailto:&#115;&#117;&#112;&#112;&#111;&#114;&#116;&#064;&#116;&#104;&#101;&#111;&#110;&#108;&#105;&#110;&#101;&#109;&#105;&#108;&#108;&#105;&#111;&#110;&#097;&#105;&#114;&#101;&#115;&#121;&#115;&#116;&#101;&#109;&#046;&#099;&#111;&#109;">--}}
                                {{--<span class="title">Email</span>--}}
                                {{--<span>support@theonlinemillionairesystem.co</span>--}}
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
            </div>
        </main>
        <footer id="footer">
            <div class="holder">
                <span class="copy">Copyright 2015 | All Right Reserved by OnlineMillionaireSystem</span>
            </div>
        </footer>
    </div>
    <div class="popup-holder">
        <div id="popup1" class="lightbox popup">
            <div class="lightbox-holder">
                <h2>WELCOME TO <mark>the Online Millionaire System</mark></h2>
                <div class="step-row">
                    <div class="step-line">
                        <div class="step one">
                            <span class="num">1</span>
                            <span class="top">step</span>
                            <span class="bottom"><b>FUND</b> Your Broker Account.</span>
                        </div>
                        <div class="step two">
                            <span class="num">2</span>
                            <span class="top">step</span>
                            <span class="bottom">Push AUTO TRADE to <b>ACTIVATE</b></span>
                        </div>
                        <div class="step three active">
                            <span class="num">3</span>
                            <span class="top">step</span>
                            <span class="bottom">Watch your <b>PROFIT</b> grow</span>
                        </div>
                    </div>
                </div>
                <div class="video-holder">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/a17Zqq_EQTI?rel=0&amp;controls=0&amp;showinfo=0&amp;" allowfullscreen></iframe>-->
                </div>
                <a href="#" class="btn">get free access now!</a>
                <p>Once you click on <a href="#">Get Started</a> button, <mark><b>the Online Millionaire System</b></mark> deposit page account will <br>open, so you can easily make your deposit and activate your account.  <br>Gladly, <mark class="large"><b>THE Online Millionaire System</b></mark></p>
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