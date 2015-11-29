@section('head')
<meta charset="UTF-8"/>
{!! $page->appendAsset(url('/css/insight/style.css')) !!}
<link rel='stylesheet' id='open-sans-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.8' type='text/css' media='all'/>
<link rel='stylesheet' id='Oswald-css' href='http://fonts.googleapis.com/css?family=Oswald%3Aregular%2C700&#038;ver=4.1.8' type='text/css' media='all'/>
@append

@section('page-layout')
<div id="top" class="single single-post postid-1215 single-format-standard logged-in admin-bar no-customize-support">
<div class="background-cover"></div>
<div class="wrapper animated">
    <div class="top-nav fade-in animated1 ">
        <div class="container">
            <div class="search-block">
                <form method="get" id="searchform" action="#">
                    <button class="search-button" type="submit" value="Search"></button>
                    <input type="text" id="s" name="s" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}"/>
                </form>
            </div>
            <div class="social-icons icon_flat">
            </div>
        </div>
    </div>
    <div class="container">
        <header id="theme-header">
            <div class="header-content fade-in animated1">
                <div class="logo" style="margin-top:15px">
                    <h2> <a title="InvestorSign.com" href="#">
                            <img src="/img/insight/investorsign-340.png" alt="InvestorSign.com"/><strong>InvestorSign.com </strong>
                        </a>
                    </h2> </div>
                <div class="ads-top"> <div id="vtop">
                        <div class="users"></div>
                        <div class="date"></div>
                    </div>
                    <script src="http://widgets.freestockcharts.com/js/jquery-1.3.1.min.js" type="text/javascript"></script>
                    <script src="http://widgets.freestockcharts.com/script/WBIHorizontalTicker2.js?ver=12334" type="text/javascript"></script> <link href="http://widgets.freestockcharts.com/WidgetServer/WBITickerblue.css" rel="stylesheet" type="text/css" />
                    <script>
                        var gainerTick = new WBIHorizontalTicker('gainers');
                        gainerTick.start();
                        var loserTick = new WBIHorizontalTicker('losers');
                        loserTick.start();
                    </script>

                    <style>
                        .ads-top {
                            margin-right: 2px;
                            width: 953px;
                            margin-bottom: -25px;
                        }
                        .scrollingtext span:first-child {
                            display: none;
                        }
                    </style>
                </div> <div class="clear"></div>
            </div>

            <nav id="main-nav" class="nav menu fade-in animated2 fixed-enabled">
                <div class="container">
                    <div class="main-menu"><ul id="menu-menus" class="menu"><li id="menu-item-987" class="menu-item  menu-item-type-custom  menu-item-object-custom  menu-item-home"><a href="#">Home</a></li>
                            <li id="menu-item-988" class="menu-item  menu-item-type-taxonomy  menu-item-object-category  current-post-ancestor  current-menu-parent  current-post-parent"><a href="#">News</a></li>
                            <li id="menu-item-1191" class="menu-item  menu-item-type-taxonomy  menu-item-object-category  current-post-ancestor  current-menu-parent  current-post-parent"><a href="#">Finance</a></li>
                            <li id="menu-item-1192" class="menu-item  menu-item-type-taxonomy  menu-item-object-category  current-post-ancestor  current-menu-parent  current-post-parent"><a href="#">Personal Finance</a></li>
                            <li id="menu-item-1193" class="menu-item  menu-item-type-taxonomy  menu-item-object-category  current-post-ancestor  current-menu-parent  current-post-parent"><a href="#">Opinion</a></li>
                        </ul></div> </div>
            </nav>
        </header>
        <div id="main-content" class="container fade-in animated3 sidebar-narrow-left"><div class="content-wrap">
                <div class="content">
                    <div class="ads-post"> <a class="ubm-banner" data-id="5"></a> </div>
                    <article class="post-1215 post type-post status-publish format-standard hentry category-finance category-news category-opinion category-personal-finance category-uncategorized post-listing">
                        {!! $page->article !!}
                    </article>
                    <div class="ads-post"> <a class="ubm-banner" data-id="4"></a> </div>
                    <div id="comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/news/the-secret-bankers-hold-back-on-this-system-will-shock-you/#respond" style="display:none;">Cancel reply</a></small></h3>
                            <form action="#" method="post" id="commentform" class="comment-form">
                                <p class="logged-in-as">Logged in as <a href="#">Your Name</a>. <a href="#" title="Log out of this account">Log out?</a></p> <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true"></textarea></p> <p class="form-allowed-tags" id="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p> <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment"/>
                                    <input type='hidden' name='comment_post_ID' value='1215' id='comment_post_ID'/>
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <aside class="sidebar-narrow">
                    <div id="ads160_600-widget-9" class="ads160-600">
                        <div class="ad-cell">
                            <a class="ubm-banner" data-id="2"></a>
                        </div>
                    </div>
                    <div id="text-html-widget-14" class="text-html-box">
                        <div class="asidetext"> Advertisement</div> </div>
                    <div id="rss-6" class="widget widget_rss"><div class="widget-top"><h4><a class='rsswidget' href='http://www.sharkclick.com/taking-stock.xml'><img style='border:0' width='14' height='14' src='/img/insight/rss.png' alt='RSS'/></a> <a class='rsswidget' href='http://www.bloomberg.com/feed/podcast/taking-stock.xml'>Taking Stock</a></h4><div class="stripe-line"></div></div>
                        <div class="widget-container"><ul><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vHNpj5SBX_c4'>Taking Stock: Winners and Losers, Stock of the Day</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vM8_NdG6Yv9k'>Taking Stock: Moorman Says Not a Good Time for Consolidation</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_v_AvCkNjprCM'>Taking Stock: Aquila Says Weak Euro Good for M&amp;A</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vFsMD1RqHLC8'>Taking Stock: Sullivan on Northeast Blizzard</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vzqx6v4pJKNg'>Taking Stock: Greet the Week, Business Development Companies</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vyOcHMK6o.i4'>Taking Stock: Shepherd Says Rolls Grew 30% in North America</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_v_V3g16q0DfM'>Taking Stock: Reading Sees Relief Rally for Home Builders</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vy6SkKwRvtaU'>Taking Stock: China Uses 2/3 of Global Oil Supply</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_vufB5OrmMDao'>Taking Stock: Das Says ECB Policy Will Not Stimulate Growth</a></li><li><a class='rsswidget' href='http://it.sharkclick.com/click_66ldqCsOgYdsp4Qg_v_sUcNQwp3oI'>Taking Stock: Winners and Losers, Stock of the Day</a></li></ul></div></div>  <div class="widget" id="tabbed-widget">
                        <div class="widget-container">
                            <div class="widget-top">
                                <ul class="tabs posts-taps">
                                    <li class="tabs"><a href="#tab1">Popular</a></li>
                                    <li class="tabs"><a href="#tab2">Recent</a></li>
                                    <li class="tabs" style="margin-left:0; "><a href="#tab3">Comments</a></li>
                                </ul>
                            </div>
                            <div id="tab1" class="tabs-wrap">
                                <ul>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to You Will Not Believe This Wall Street Trick Bankers are Holding Back On. Ex Banker Whistleblower Shows You Exactly How To Turn a Profit On Your Investment. Simple Quick &amp; Profitable." rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2012/07/iqOnIhTqa0gQ-70x70.jpg" class="attachment-tie-small wp-post-image" alt="FXCM Inc. Chief Executive Officer"/><span class="overlay-icon"></span></a>
                                        </div>
                                        <h3><a href="#" title="You Will Not Believe This Wall Street Trick Bankers are Holding Back On. Ex Banker Whistleblower Shows You Exactly How To Turn a Profit On Your Investment. Simple Quick &#038; Profitable.">You Will Not Believe This Wall Street Trick Bankers are Holding Back On. Ex Banker Whistleblower Shows You Exactly How To Turn a Profit On Your Investment. Simple Quick &#038; Profitable.</a></h3>
                                        <span class="date"><span class="tie-date">July 30, 2012</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Strong dollar, weak oil and emerging markets growth" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/20120724101227-petrodollar-goldsilver-com-70x70.jpeg" class="attachment-tie-small wp-post-image" alt="20120724101227-petrodollar-goldsilver-com"/><span class="overlay-icon"></span></a>
                                        </div>
                                        <h3><a href="#" title="Strong dollar, weak oil and emerging markets growth">Strong dollar, weak oil and emerging markets growth</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Female Investors Often Beat Men" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/150218103446-women-investing-780x439-70x70.jpg" class="attachment-tie-small wp-post-image" alt="150218103446-women-investing-780x439"/><span class="overlay-icon"></span></a>
                                        </div>
                                        <h3><a href="#" title="Female Investors Often Beat Men">Female Investors Often Beat Men</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to The Federal Reserve&#8217;s &#8216;Game of Thrones&#8217;" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/Screen-shot-2015-02-24-at-8.11.40-PM-70x70.png" class="attachment-tie-small wp-post-image" alt="Janet Yellen"/><span class="overlay-icon"></span></a>
                                        </div>
                                        <h3><a href="#" title="The Federal Reserve&#8217;s &#8216;Game of Thrones&#8217;">The Federal Reserve&#8217;s &#8216;Game of Thrones&#8217;</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Fixed Income Money Management" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/fixedexpenses-70x70.png" class="attachment-tie-small wp-post-image" alt="fixedexpenses"/><span class="overlay-icon"></span></a>
                                        </div>
                                        <h3><a href="#" title="Fixed Income Money Management">Fixed Income Money Management</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab2" class="tabs-wrap">
                                <ul>
                                    <li>
                                        <h3><a href="#">EXPOSED: Dad Makes $48,000/Month And You Won&#8217;t Believe How He Does It! I&#8217;m about to SHOW YOU EXACTLY how to turn $100 into $181 EVERY 15 Minutes.. GUARANTEED!</a></h3>
                                        <span class="date"><span class="tie-date">March 10, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Strong dollar, weak oil and emerging markets growth" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/20120724101227-petrodollar-goldsilver-com-70x70.jpeg" class="attachment-tie-small wp-post-image" alt="20120724101227-petrodollar-goldsilver-com"/></a>
                                        </div>
                                        <h3><a href="#">Strong dollar, weak oil and emerging markets growth</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Female Investors Often Beat Men" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/150218103446-women-investing-780x439-70x70.jpg" class="attachment-tie-small wp-post-image" alt="150218103446-women-investing-780x439"/></a>
                                        </div>
                                        <h3><a href="#">Female Investors Often Beat Men</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to The Federal Reserve&#8217;s &#8216;Game of Thrones&#8217;" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/Screen-shot-2015-02-24-at-8.11.40-PM-70x70.png" class="attachment-tie-small wp-post-image" alt="Janet Yellen"/></a>
                                        </div>
                                        <h3><a href="#">The Federal Reserve&#8217;s &#8216;Game of Thrones&#8217;</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="#" title="Permalink to Fixed Income Money Management" rel="bookmark"><img width="70" height="70" src="http://www.investorsign.com/wp-content/uploads/2015/02/fixedexpenses-70x70.png" class="attachment-tie-small wp-post-image" alt="fixedexpenses"/></a>
                                        </div>
                                        <h3><a href="#">Fixed Income Money Management</a></h3>
                                        <span class="date"><span class="tie-date">February 24, 2015</span></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab3" class="tabs-wrap">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <aside class="sidebar" style="margin-top: 0px;">
                <div id="text-html-widget-22" class="text-html-box">
                    <div class="reltar" style="text-align:center;font-size:12pt;">Related Articles</div>
                    @foreach($page->banners->pics->getChildren() as $banner)
                        <a target="_blank" class="ubm_banner" href="{{$banner->link}}" onclick="" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(/images/uploads/{{$banner->pic}}) 0 0 no-repeat;  border: 1px solid transparent !important;" title="">&nbsp;</a><div class="relavent"><a href="{{$banner->link}}" onclick="">{{$banner->title}}</a></div>
                    @endforeach
                    {{--<a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_pDNWwilkEcKbCQxH?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'pDNWwilkEcKbCQxH'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(/img/insight/banner_5qUt4zJ6gRkM9dhq.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="Rich People Don’t Want You To Find Out About This System">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_pDNWwilkEcKbCQxH?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'pDNWwilkEcKbCQxH'});">Rich People Don’t Want You To Find Out About This System</a></div>
                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_MuqnUQ8HVZZfMknj?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'MuqnUQ8HVZZfMknj'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(/img/insight/banner_w7U87IlbtXDf1Ldl.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="5 Investments Millionaires Will NEVER Share and For a Good Reason!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_MuqnUQ8HVZZfMknj?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'MuqnUQ8HVZZfMknj'});">5 Investments Millionaires Will NEVER Share and For a Good Reason!</a></div>
                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_wT3Uhxr6ZOxXXaav?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'wT3Uhxr6ZOxXXaav'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(/img/insight/banner_y8BuzGr74hP91Y1y.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_wT3Uhxr6ZOxXXaav?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'wT3Uhxr6ZOxXXaav'});">You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!</a></div> </div>
                --}}<div id="text-html-widget-5" class="text-html-box">
                    <iframe frameborder="0" scrolling="no" height="192" width="318" allowtransparency="true" marginwidth="0" marginheight="0" src="http://comrates.investing.com/index.php?force_lang=1&amp;pairs_ids=8830;8831;8836;8849;8910;8917;8988;&amp;header-text-color=%23FFFFFF&amp;curr-name-color=%230059b0&amp;inner-text-color=%23000000&amp;green-text-color=%232A8215&amp;green-background=%23B7F4C2&amp;red-text-color=%23DC0001&amp;red-background=%23FFE2E2&amp;inner-border-color=%23CBCBCB&amp;border-color=%23cbcbcb&amp;bg1=%23F6F6F6&amp;bg2=%23ffffff&amp;last=hide&amp;open=hide&amp;month=hide&amp;change=hide&amp;last_update=hide"></iframe><br><span style="font-size: 11px;color: #333333;text-decoration: none;">Commodities are powered by <a href="http://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a></span> </div>
                <div id="text-html-widget-17" class="text-html-box">
                    <div class="asidetext" style="left:240px;"> Advertisement</div> </div>
            </aside>
            <div class="clear"></div> <div class="clear"></div>
        </div>
        <div class="ads-bottom"> <a class="ubm-banner" data-id="4"></a> </div> </div>
    <footer class="fade-in animated4">
        <div id="footer-widget-area" class="footer-1c container">
            <div id="footer-first" class="footer-widgets-box">
                <div id="text-html-widget-15" class="text-html-box">
                    <div class="missit">Like This Article? Don't miss out on these!</div><div class="abottom">Advertisement</div>
                    <section class="cat-box wide-cat-box tie-cat-11">
                        <div class="cat-box-content">
                            @foreach($page->bannersBottom->pics->getChildren() as $banner)
                                <div class="wide-news-item">
                                    <div class="post-thumbnail">
                                        <a target="_blank" class="ubm_banner" href="{{$banner->link}}" onclick="" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(/images/uploads/{{$banner->pic}}) 0 0 no-repeat;  border: 1px solid transparent !important;" title="{{$banner->title}}">&nbsp;</a><div class="relavent"><a href="{{$banner->link}}" onclick="">{{$banner->title}}</a></div>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="wide-news-item">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_skDvskx1uisii6NQ?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'skDvskx1uisii6NQ'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(/img/insight/banner_SGVCs1hfDF1gqSmD.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="The One Big Secret Millionaire Traders will NEVER Share">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_skDvskx1uisii6NQ?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'skDvskx1uisii6NQ'});">The One Big Secret Millionaire Traders will NEVER Share</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col2">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_Emfd7bJ8eVo5nYWb?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Emfd7bJ8eVo5nYWb'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(/img/insight/banner_aSMwc535ggheLhQg.png) 0 0 no-repeat;  border: 1px solid transparent !important;" title="You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_Emfd7bJ8eVo5nYWb?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Emfd7bJ8eVo5nYWb'});">You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col3">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_Ms9QKbeiU5hVJnVL?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Ms9QKbeiU5hVJnVL'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(/img/insight/banner_D6W1Z3Te8c99CcZa.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="5 Investments Millionaires Will NEVER Share and For a Good Reason!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_Ms9QKbeiU5hVJnVL?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Ms9QKbeiU5hVJnVL'});">5 Investments Millionaires Will NEVER Share and For a Good Reason!</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_ExDUA7fXRJM8kTD7?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'ExDUA7fXRJM8kTD7'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(/img/insight/banner_Di4zvprVTXlF3EKi.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="Rich People Don’t Want You To Find Out About This System">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_ExDUA7fXRJM8kTD7?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'ExDUA7fXRJM8kTD7'});">Rich People Don’t Want You To Find Out About This System</a></div>
                                </div>
                            </div>--}}<div class="clear"></div>
                        </div>
                    </section> </div>
            </div>
            <div id="footer-second" class="footer-widgets-box">
            </div>
            <div id="footer-third" class="footer-widgets-box">
            </div>
            <div id="footer-fourth" class="footer-widgets-box">
            </div>
        </div>
        <div class="clear"></div>
    </footer>
    <div class="clear"></div>
    <div class="footer-bottom fade-in animated4">
        <div class="container">
            <div class="alignleft">
                © Copyright 2015, All Rights Reserved. </div>
        </div>
    </div>
</div>
<div id="topcontrol" class="tieicon-up-open" title="Scroll To Top"></div>
    </div>
@endsection

@section('bottom-scripts')
    @if(Request::get('epass')!=532)
        <script language="javascript">
            var exitsplashmessage = '***************************************\n\n{!! br2nl($page->onExitPopup->msg) !!}\n\n\n***************************************';
            var exitsplashpage = '{{$page->onExitPopup->link}}'; //http://nana10.co.il'; //http://clickxo.com/LP/10kBONUS.php?a_aid=tenbonus';
        </script>
        <script language="javascript" src="/js/ExitSplashScript.js"></script>
    @endif
@append