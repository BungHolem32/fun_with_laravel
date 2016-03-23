<?php
    $content = json_decode(file_get_contents(url("/js/zulander/content.json")),true);
//    $loc = \App\Services\Location::getByUserIp();
//    $countryCode = $loc['iso'];
    $countryCode = false;
    if(!$countryCode) $countryCode = 'uk';
    $locationContent    = json_encode($content[$countryCode]);
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
        <div class="wrapper">
            <div class="logo text-center">
                <a href="/"><img src={{ url("/img/zulander/logo.png" )}} alt=""/></a>
            </div>
            <div class="content">
                <div class="lenta">
                    <div class="lenta-l text-center">
                        <img src={{ url("/img/zulander/icon.png") }} alt=""/> <span><strong>CONFIRMED:</strong>You’ve been Invited to watch this Weird Presentation because you’re in Israel</span>
                    </div>
                </div>
                <div class="title text-center">
                    {!! $page->htmlHeader !!}
                </div>
                <div class="bvideo text-center">Don’t Miss The Surprise At The End Of This Short Video...</div>
                <div class="mvideo">
                    <div class="video-player">
{{--                        @include('funnels.layouts._partials._video',  ['w'=>'100%', 'hd'=>360])--}}
                        <div class="video-progress">
                            <div class="video-progress-viewers">
                                <img src={{ url("/img/zulander/eye.png") }}>
                                <span class="video-progress-viewers-count">1871</span> VIEWERS
                            </div>
                            <div class="video-progress-stream"><img src={{ url("/img/zulander/streaming.gif") }}></div>
                            <div class="video-progress-buttons">
                                <img src={{ url("/img/zulander/presetintegrate.png") }}>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="avideo text-center">Claim One Of <span class="st1"><strike>10</strike> <strong class="count">10</strong> FREE LICENSES In Israel</span> To Make <span class="st2">$1,008</span> <strong>Every 5 MINUTES >></strong></div>
                <div class="free">
                    <form>
                        <div class="f1  hidden-sm hidden-xs text-center">
                            <img src={{ url("/img/zulander/icon.png") }} alt="" />
                            <span></span>
                            <input type="email" value="" placeholder="Please enter your email here" name=""/>
                        </div>
                        <div class="f2 text-center">
                            <input type="submit" value="GIVE ME A FREE LICENSE!" class="go1"/>
                            <div class="strelka visible-xs"><img src={{ url("/img/zulander/strelka2.png") }} class="/img-responsive"  alt=""/></div>
                            <div id="timer2" class="visible-sm visible-xs">
                                <div class="col-sm-4 col-xs-4">
                                    <div class="progress-radial progress-100">
                                        <div class="overlay"><strong></strong><br><span>LEFT</span></div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-8">
                                    <div class="title"><span><strong class="count"></strong> FREE LICENSES</span> LEFT</div>
                                </div>
                                <div class="clear clearfix"></div>
                            </div>
                        </div>
                        <div class="f3 text-center">
                            <div class="fieldset">
                                <div class="legend">100% Secured By</div>
                                <img src={{ url("/img/zulander/sec1.jpg") }} alt="" />
                                <img src={{ url("/img/zulander/sec2.jpg") }} alt="" />
                                <img src={{ url("/img/zulander/sec3.jpg") }} alt="" />
                                <img src={{ url("/img/zulander/sec4.jpg") }} alt="" />
                                <img src={{ url("/img/zulander/sec5.jpg") }} alt="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="review">
                    <div class="line-l">
                        <div class="line-r">
                            <div class="title text-center"><span>latest success stories</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="carousel-example-generic" class="carousel slide">
                            <div class="carousel-inner" role="listbox">
                                @for($i=0; $i<count($content[$countryCode]['avatars']); $i++)
                                    <div class="col-md-4 col-sm-4 active">
                                        <div class="block">
                                            <div class="row">
                                                <div class="col-md-5 col-sm-5 col-xs-5 photo">
                                                    <img src={{ url("/img/zulander/".$content[$countryCode]['avatars'][$i]['pic']) }} width="100" alt="" class="/img-circle">
                                                    <div class="flag"><img src={{ url("/img/zulander/".$countryCode.".png") }} alt=""/></div>
                                                </div>
                                                <div class="col-md-7 col-sm-7 col-xs-7 name">
                                                    <strong>{{ $content[$countryCode]['avatars'][$i]['name'] }}</strong><br/>{{ $content[$countryCode]['avatars'][$i]['address'] }}
                                                </div>
                                                <div class="clear clearfix"></div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text">
                                                        <p>"It probably took about 7 or 8 clicks to set up the software.</p>
                                                        <p>I was then literally making money within five minutes of setting up the software.</p>
                                                        <p>I choose to trade on autopilot which means I don’t have to even log in if I don’t want to.</p>
                                                        <p>The software does all the hard work for me!</p>
                                                        <p>My account statistics are showing an 89.3% success rate so far - that’s AMAZING!"</p>
                                                        <p>Started Using Software: <strong>Monday 4th January 2016</strong></p>
                                                        <p>Starting Balance: <strong>$250</strong></p>
                                                    </div>
                                                    <div class="total text-center">Total earned: <span>$121,589</span> <strong>(withdrawn)</strong></div>
                                                    <div class="rate">
                                                        <div class="star text-center"><img src={{ url("/img/zulander/star.png") }} alt="" /></div>
                                                        <div class="trade text-center"><img src={{ url("/img/zulander/trader.png") }} alt="" /></div>
                                                        <div class="verified text-right"><img src={{ url("/img/zulander/verified.png") }} alt="" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class=" hidden-lg hidden-md hidden-sm">
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lasBtn text-center">
                    <a href="#"><img src={{ url("/img/zulander/btn1.png") }} alt=""/></a>
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
        <div class="live text-center hidden-sm hidden-xs">
            <div class="title">LIVE Results</div>
            <div class="desc">
                <div class="date">28 February 2016</div>
                <img src={{ url("/img/zulander/module.png") }} alt="" />
                <div class="intro">Total Profit Generated By<br/>Our Beta Tester Group<br/>In Israel:</div>
                <img src={{ url("/img/zulander/icon.png") }} alt="" width="29"/>
            </div>
            <div class="foot">
                1 Feb 2016 - 28 Feb 2016:<br/><span id="result"><img src={{ url("/img/zulander/loader.gif") }} alt="" /></span>
            </div>
        </div>
        <div class="online text-center hidden-sm hidden-xs">
            <div class="title">Traders Online</div>
            <div class="desc">
                <div class="date">28 February 2016 08:53am</div>
                <img src={{ url("/img/zulander/module.png") }} alt="" />
                <div class="intro-list">
                    <ul id="ticker">
                        @for($i=0; $i<count($content[$countryCode]['traders']); $i++)
                            <li>{{ $content[$countryCode]['traders'][$i]['name'] }}, {{ $content[$countryCode]['traders'][$i]['address'] }} {{ $content['global']['tradersOnline'][$i] }}</li>
                        @endfor
                    </ul>
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