<?php
$content = json_decode(file_get_contents(url("/js/zulander/content.json")),true);
//    $loc = \App\Services\Location::getByUserIp();
//    $countryCode = $loc['iso'];
$countryCode = false;
if(!$countryCode) $countryCode = 'uk';
$locationContent = json_encode($content[$countryCode]);
?>

@section('head')
    {!! $page->appendAsset(url('/css/zulander/bootstrap.min.css')) !!}
    {!! $page->appendAsset(url('/css/zulander/style.css')) !!}
    {!! $page->appendAsset(url('/css/zulander/resp.css')) !!}
@append

@section('bottom-scripts')
    @com('funnel_scripts')
    {!! $page->appendAsset(url('/js/zulander/bootstrap.min.js')) !!}
    {!! $page->appendAsset(url('/js/zulander/myClock.js')) !!}
    {!! $page->appendAsset(url('/js/zulander/jquery.knob.js')) !!}
    <script type="text/javascript">
        var locationContent = <?php echo $locationContent ?>;
    </script>
    {!! $page->appendAsset(url('/js/zulander/script.js')) !!}
@append

@section('page-layout')
    <body id="second">
    <div class="wrapper">
        <div class="logo text-center">
            <a href="/"><img src={{ url("/img/zulander/logo.png") }} alt=""/></a>
        </div>
        <div class="content">
            <div class="lenta">
                <div class="lenta-l text-center">
                    <span><strong>CONGRATULATIONS:</strong>You just Completed Step One &<br />Joined the LIVE Queue For Israel!</span>
                </div>
            </div>
            <div class="title text-center">
                "You're <span>7 Clicks Away</span> From Completing Step Two & Making Up To <span>$1,008 EVERY 5 MINUTES"</span>
            </div>
            <div class="mvideo">
                <div class="video-player">
                    @include('funnels.layouts._partials._video',  ['w'=>'100%', 'hd'=>360])
                    <div class="video-progress">
                        <div class="video-progress-viewers">
                            <img src={{ url("/img/zulander/eye.png") }}>
                            <span class="video-progress-viewers-count"></span> VIEWERS
                        </div>
                        <div class="video-progress-stream"><img src={{ url("/img/zulander/streaming.gif") }}></div>
                        <div class="video-progress-buttons">
                            <img src={{ url("/img/zulander/presetintegrate.png") }}>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timer text-center">
                <div class="title">
                    You Only Have <span>7 MINUTES</span> To Open A Trading Account & Start Making Up To <span>$1,008 EVERY 5 MINUTES!</span>
                </div>
                <div><div id="clock1"></div></div>
                <div class="foot"><strong>You Must Enter Your Details In The Form</strong> Before The Clock Hits Zero. There Are Currently 1591 People In Israel Waiting To Take Your FREE License.</div>
            </div>
            <div class="simletext  hidden-sm hidden-xs">
                <p>Zulander Hack is a completely NEW and UNSEEN Binary Options software...</p>
                <p>It's <strong>proven to turn $250 into $11,321 in just a DAY...</strong></p>
                <p>However we have only been able to achieve this incredible profitability <strong>through using a BROKER WE HAVE TESTED ACROSS TENS OF THOUSANDS OF TRADES...</strong></p>
                <p>Up until now we have <strong>tried to keep the identity of our Broker hidden...</strong></p>
                <p>But today, I can <strong>LEGALLY share this SECRET information with you..</strong></p>
                <p>This is <strong>the ONLY Broker</strong> that I can say, with <strong>100% CONFIDENCE, WILL ACTUALLY WORK...</strong></p>
                <p>I strongly recommend that you <strong>DO NOT</strong> use the Zulander Hack software <strong>WITH A DIFFERENT Broker</strong> unless you want to LOSE your money...</p>
            </div>
            <div class="step text-center">
                <div class="title">STEP TWO: <span>OPEN A TRADING ACCOUNT WITH THE BROKER</span> THAT THE GURUS DON'T WANT YOU TO KNOW ABOUT</div>
                <div class="intro  hidden-sm hidden-xs">
                    <p class="text-left">To make up to <span>$1,008 EVERY 5 MINUTES today</span>...you must open an account with the secret Broker<br/>that has been carefully tested across literally TENS OF THOUSANDS of trades...</p>
                    <div class="foot text-center">You MUST do this in order to set up your Zulander Hack software license...</div>
                </div>
                <div class="green text-center">
                    <div class="title"><strong>Read This Carefully To Complete Step Two</strong><br/><br/></div>
                    <div class="stepdesc">To complete Step Two, and get your free copy of Zulander Hack...<br/>...you must FILL IN THE FORM below...</div>
                    <img src={{ url("img/zulander/RBOPTION.jpg") }} alt="" />
                    <div id="second">
                        @include('funnels.layouts._partials._form-mobile', ['funnelId' => $page->getParent()->id]);
                        <input id="submit" name="submit" type="submit" value="YES! TAKE ME TO THE FINAL STEP" class="go2 active-submit" data-cip-id="submit"/>
                        <div class="yes">I understand that if I leave this page I will never see it again. I want to be financially free and never have to worry about money again. I realize that Zulander Hack can help me achieve this and TODAY <strong>only <strike>3</strike> 2 FREE licenses</strong> are being given away.</div>
                        <div class=" hidden-sm hidden-xs">
                            <input type="submit" value="NO, LET SOMEONE ELSE HAVE MY LICENSE" class="go3"/>
                            <div class="no">I am refusing my FREE copy of Zulander Hack. I realize this is an amazing software and I will never again have a chance to own a FREE copy. I hereby release my rights to this license and you may give it to a deserving person who is next in the waiting list.</div>
                        </div>
                        <div id="timer2" class="visible-sm visible-xs">
                            <div class="col-sm-4 col-xs-4">
                                <div class="progress-radial progress-100">
                                    <div class="overlay"><strong></strong><br><span>LEFT</span></div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xs-8">
                                <div class="title2"><span><strong class="count"></strong> FREE LICENSES</span> LEFT</div>
                            </div>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="timer timerhide text-center">
                <div class="title">
                    You Only Have <span>7 MINUTES</span> To Open A Trading Account & Start Making Up To <span>$1,008 EVERY 5 MINUTES!</span>
                </div>
                <div>
                    <div id="clock2">

                    </div>
                </div>
                <div class="foot"><strong>You Must Enter Your Details In The Form</strong> Before The Clock Hits Zero. There Are Currently 1591 People In Israel Waiting To Take Your FREE License.</div>
            </div>
            <div class="step4 text-center">STEP THREE: <span>MAKE A DEPOSIT<br/>INTO YOUR BROKER ACCOUNT</span></div>
            <div class="simletext">
                <p>Once you open a trading account, you'll land on the deposit page...<br/><strong>Until you make a deposit into your account, you cannot trade...</strong><br/>That's a simple fact of trading...You trade money to <strong>MAKE MONEY...</strong></p>
                <br/>
                <p><strong>IMPORTANT:<br/>THE MORE YOU DEPOSIT, THE MORE YOU CAN TRADE, AND THE MORE YOU CAN PROFIT...</strong><br/>The sooner you make the deposit...<br/>...the quicker you will activate your account and secure your FREE license to use Zulander Hack<br/><strong><span>(to be sold globally at $100,000 - yes, $100,000 - on Monday 6th June)...</span></strong></p>
            </div>
            <div class="btn5 visible-sm visible-xs text-center">
                <a href=""><img src={{ url("/img/zulander/btn5.png") }} class="img-responsive" alt=""/></a>
            </div>
            <div class="sert text-center">
                <div class="title">FINAL STEP: <span>LOG IN AND<br/>ACCESS YOUR SOFTWARE</span></div>
                <div class="code">FREE LICENSE: <span>ZULHACK018</span></div>
                <div class="status">Status: <span>Unconfirmed</span></div>
            </div>
            <div class="box text-center">
                <img src={{ url("/img/zulander/box.png") }} alt="" />
            </div>
            <div class="faq">
                <div class="simletext">
                    <div class="one">
                        <p>
                            <span class="f1">QUESTION ONE</span>: <strong>Have you registered a new account with the correct Broker?</strong></br>
                            <span class="f2">YES</span> - you completed Step Two! Now all you need to do is make a deposit into your account to start trading and making money!</br>
                            <span class="f3">NO</span> - <strong>please make a deposit into your Broker account to complete Step Three.</strong> Your FREE LICENCE (Ref: <span class="f4">ZULHACK018</span>) has not been confirmed and you risk losing your position in the waiting list.</br>
                        </p>
                    </div>
                    <div class="one">
                        <p>
                            <span class="f1">QUESTION ONE</span>: <strong>Next, have you made a deposit into your Broker account?</strong></br>
                            <span class="f2">YES</span> - Congratulations! You completed Step Three! Go click this link here to access your software.</br>
                            <span class="f3">NO</span> - <strong>please go back up the page and complete Step Two.</strong> Your FREE LICENSE has NOT been confirmed and you risk losing your position in the waiting list.</br>
                        </p>
                    </div>
                    <h2>Remember you must make a deposit for your account to be active.</h2>
                    <p>Without making a deposit, I don't know you're serious about using this.<br/>So you must make a deposit to <strong>FULLY CONFIRM your FREE LICENCE</strong> and <strong>enjoy the money</strong> that Zulander<br/>Hack is PROVEN to make.<br/><strong>Also - THE MORE YOU DEPOSIT, THE MORE YOU CAN TRADE, AND THE MORE YOU CAN PROFIT.</strong><br/>
                    </p>
                </div>
            </div>
            <div class="stext">
                <h3>AND THAT'S IT!</h3>
                <p>If you have followed all of the steps above you are now fully set and well on your way to making money TODAY!</p>
                <p>If you experience any issues, or have any questions, just contact us on the email below so that your dedicated success coach can help you: <a href="">email@email.com</a></p>
                <p>I hope you make it and can't wait to get started with you!</p>
                <img src={{ url("/img/zulander/signature.jpg") }} class="signature" alt="" />
                <p><strong>Mike Wright and the Zulander Hack Support Team</strong></p>
            </div>
            <div class="lasBtn text-center">
                <a href="#"><img src={{ url("/img/zulander/btn2.png") }} alt=""/></a>
            </div>
        </div>
        <div class="footer text-center">
            <div class="links"><a href="#">Site Agreement</a> | <a href="#">Risk Disclaimer</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a> | <a href="#">Affiliates</a></div>
            <div class="copyright">Copyright © 2016 zulanderhack.co</div>
            <div class="right">
                <p>RISK Disclaimer: http://zulanderhack.co makes no representations regarding the legality of access to or use of this website or its content in any jurisdiction. Not all services offered through this website are permitted for use in al countries. Investing in financial instruments involves a high degree of risk and may bot be suitable for all investors. We strongly advise that you read our Website Terms of Service and Risk Disclosure Statement before accessing this website. http://zulanderhack.co and its officials are not responsible for any losses related to use of its services or software. If necessary seek independent advice prior to accessing this website. Users must be aware of their individual tax liability in their country of residence.</p>
                <p>It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are called prediction contracts, unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</p>
                <p>Hypothetical or simulated performance results have certain limitations. Unlike an actual performance record, simulated results don't represent actual trading. And since the trades haven't been executed the results may have under-or-over compensated for the impact, if any, of certain market factors, such as lack of liquidity. Simulated trading programs in general are also subject to the fact that they're designed with the benefit of hindsight.</p>
                <p>We place cookies on your computer to help make this website better. You can change your cookie settings in your web browser at any time. Use of this website indicates your acceptance of http://zulanderhack.co Privacy Policy</p>
                <p>This site and the products and services offered on this site are not associated, affiliated, endorsed, or sponsored by ClickSure or another other brand shown on this website nor have they been reviewed tested or certified by any of these brands. All trademarks, logos, and service marks displayed are registered and/or unregistered Trademarks of their respective owners.</p>
                <p>The Zulander Hack sales video is fictitious and was produced to portray the potential of the Zulander Hack 3rd party signals software. Actors have been used to present this opportunity and it should be viewed for entertainment purposes. We do not guarantee income or success, and example results in the video and anywhere else on this website do not represent an indication of future success or earnings.</p>
                <p>Risk Disclosure: Binary options trading involves significant risk of losing your investment, so we strongly advise that you read our Terms & Conditions. Also keep in mind that although the risk when trading binary options is actually fixed for each individual trade and known in advance, the trades are live and it is possible to lose the money you use to trade. If a trader chooses to place his entire investment on a single live trade, it’s possible to lose it. Because of this, it’s highly recommended that traders choose a proper money management strategy which limits the total consecutive trades or total outstanding investment. If in doubt, you should become aware of all the risks associated with binary options trading, and seek advice from an independent and suitably licensed financial advisor.</p>
            </div>
        </div>
    </div>
    <div class="time text-center hidden-sm hidden-xs">
        <div class="title"><span><strong class="count"></strong> FREE LICENSES</span> LEFT</div>
        <div class="anime text-center">
            <div class="progress-radial progress-100">
                <div class="overlay"><strong><img src={{ url("/img/zulander/loader.gif") }} alt="" /></strong><br><span>LEFT</span></div>
            </div>
        </div>
        <div class="minigo">
            <a href="#"><img src={{ url("/img/zulander/btn1.png") }} alt="" width="230"/></a>
        </div>
    </div>

@endsection