@section('head')
    {!! $page->appendAsset(url('/css/insight/style.css')) !!}
    {!! $page->appendAsset(url('/css/insight/custom.css')) !!}
    {!! $page->appendAsset(url('/css/insight/firefox.css')) !!}
    <style type="text/css" media="screen">body{background-color:#fff!important;background-image:url(img/body-bg10.png);background-position:top center;}#main-nav ul li.current-menu-item a,#main-nav ul li.current-menu-item a:hover,#main-nav ul li.current-menu-parent a,#main-nav ul li.current-menu-parent a:hover,#main-nav ul li.current-page-ancestor a,#main-nav ul li.current-page-ancestor a:hover,.pagination span.current,.ei-slider-thumbs li.ei-slider-element,.breaking-news span,.ei-title h2,h2.cat-box-title,a.more-link,.scroll-nav a,.flex-direction-nav a,.tagcloud a:hover,#tabbed-widget ul.tabs li.active a,.slider-caption h2,.full-width .content .slider-caption h2,.review-percentage .review-item span span,.review-final-score,.woocommerce span.onsale,.woocommerce-page span.onsale,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,.button,a.button,#main-content input[type="submit"],#main-content input[type="submit"]:focus,span.onsale{background-color:#5b9e34!important;}::-webkit-scrollbar-thumb{background-color:#5b9e34!important;}#main-nav,.top-nav{border-bottom-color:#5b9e34;}.cat-box,.footer-bottom .container{border-top-color:#5b9e34;}a{color:#5b9e34;text-decoration:none;}a:hover{color:#2e6b08;text-decoration:none;}::-moz-selection{background:#5b9e34;}::selection{background:#5b9e34;}.top-nav ul li a,.top-nav ul ul a{color:#000000!important;text-shadow:0 1px 1px #91d468!important;}.top-nav ul li a:hover,.top-nav ul li:hover>a,.top-nav ul :hover>a,.top-nav ul li.current-menu-item a{color:#47ba00!important;text-shadow:0 1px 1px #377013!important;}#main-nav ul li a,#main-nav ul ul a,#main-nav ul.sub-menu a{color:#000000!important;}body.single .post .entry a,body.page .post .entry a{color:#5b9e34;text-decoration:none;}body.single .post .entry a:hover,body.page .post .entry a:hover{color:#62d918;text-decoration:none;}div#tv-medium-widget-08995{float:right;}aside.sidebar{width:299px!important;}.home-ads>iframe{float:left;}nav#main-nav{float:right;position:relative;top:-70px;}nav#main-nav{float:right;margin-top:-70px!important;}header#theme-header{margin-bottom:-20px;height:112px;}.header-content.fade-in.animated1{padding-bottom:0;}.relavent a{color:#000;font-size:15px;font-weight:bold;}.content{width:820px!important;}aside.sidebar-narrow{display:none;}.relavent a:hover{text-decoration:underline;color:#000;}.menu-item a{color:#000!important;border:0!important;background:#fff!important;text-shadow:none!important;-webkit-box-shadow:none!important;font-size:13px;}div#comments{display:none;}.post-thumbnail{line-height:normal!important;}.missit{background:#5b9e34;width:264px;color:#fff;position:relative;top:18px;height:40px;font-size:14pt;font-family:Oswald,arial,Georgia,serif;font-weight:bolder;line-height:38px;text-align:left;padding-left:20px;}footer.fade-in.animated4{background:#fff;text-shadow:none;border:0!important;}.asidetext{left:100px;top:56px;position:relative;font-size:9.5px;color:gainsboro;}#main-nav{background:#fff!important;margin:0 auto;min-height:50px;border-bottom:0;}.logo{margin-top:14px!important;}.ads-top{margin-right:2px;width:100%;margin-bottom:-25px;}.scrollingtext span:first-child{display:none;}#if{height:52px;margin-bottom:-8px;margin-top:-8px;width:744px;float:right;margin-left:157px;position:relative;right:-8px;top:-1px;}.current_page_item>a{background:none!important;}nav#main-nav{max-width:400px!important;}#main-nav ul li{border:0!important;}div#watchlist2ad{display:none;}.search-block{display:none;}#main-nav ul li.current-menu-parent a,#main-nav ul li.current-menu-parent a:hover,#main-nav ul li.current-menu-parent a{background:#fff!important;}.abottom{float:right;margin-top:-17px;font-size:9.5px;color:gainsboro;}@media (min-width:801px) and (max-width:1024px) {.ads-top{display:none;}#main-nav{display:none;}aside.sidebar{display:none;}.wide-news-item.last-col{display:none;}.wide-cat-box .wide-news-item,.scroll-box-wide.scroll-box .scroll-item{width:32%!important;}.header-content{padding:0px 0px 0px 20px!important;}header#theme-header{margin:0 0 0 0;}.logo{padding-top:12px!important;}}nav#main-nav .container{width:auto!important;}nav#main-nav{float:right;margin-top:10px;}@media only screen and (max-width: 767px) and (min-width: 480px){.top-nav{display:none;}.ads-top{display:none;}nav#main-nav{display:none;}aside.sidebar{display:none;}.content{width:100%!important;}.header-content.fade-in.animated1{padding-top:3px;padding-bottom:0px;margin-bottom:-20px;}header#theme-header{margin-bottom:-60px;}}@media only screen and (max-width: 479px) and (min-width: 320px){.top-nav{display:none;}.ads-top{display:none;}nav#main-nav{display:none;}#main-content{width:270px!important;}aside.sidebar{display:none;}.content{width:270px!important;}.header-content.fade-in.animated1{padding-top:3px;padding-bottom:0px;margin-bottom:-20px;}header#theme-header{margin-bottom:-60px;}header#theme-header,.container,#main-nav,#footer-widget-area,#main-content,.content,.sidebar,.flexslider,.ei-slider,.ei-slider-large li,.group_items,.scroll-box-wide .group_items{max-width:98%;}}</style>
@append

@section('page-layout')
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
                    <div xmlns:v="http://rdf.data-vocabulary.org/#" id="crumbs"><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" class="crumbs-home" href="http://www.investorsign.com"><i class="tieicon-home"></i>Home</a></span> &gt; <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="http://www.investorsign.com/news/category/finance/">Finance</a></span> &gt; <span class="current">EXPOSED: Dad Makes $48,000/Month And You Won&#8217;t Believe How He Does It! I&#8217;m about to SHOW YOU EXACTLY how to turn $100 into $181 EVERY 15 Minutes.. GUARANTEED!</span></div>
                    <div class="ads-post"> <a class="ubm-banner" data-id="5"></a> </div>
                    <article class="post-1215 post type-post status-publish format-standard hentry category-finance category-news category-opinion category-personal-finance category-uncategorized post-listing">
                        <div class="post-inner">
                            <h1 class="name post-title entry-title" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><span itemprop="name">EXPOSED: Dad Makes $48,000/Month And You Won&#8217;t Believe How He Does It! I&#8217;m about to SHOW YOU EXACTLY how to turn $100 into $181 EVERY 15 Minutes.. GUARANTEED!</span></h1>
                            <p class="post-meta">
                                <span class="post-meta-author">Posted by: <a href="#" title="">invsign </a></span>
                                <span class="post-cats">in <a href="#" rel="category tag">Finance</a>, <a href="#" rel="category tag">News</a>, <a href="#" rel="category tag">Opinion</a>, <a href="#" rel="category tag">Personal Finance</a>, <a href="#" rel="category tag">Uncategorized</a></span>
                                <span class="tie-date">March 10, 2015</span>
                                <span class="post-views">12,860 Views</span> </p>
                            <div class="clear"></div>
                            <div class="entry">
                                <p><strong><span class="norm"><em>Yes, it&#8217;s a bold claim, I know. But keep reading below and you&#8217;ll experience this just like the hundreds of people before you. Based on our reports, 38 people from Your Area are already doing just that. And now it&#8217;s YOUR turn!</em></span></strong></p>
                                <p>Hey&#8230; Glad you took the next step. But then again, how can you not? <strong>When I&#8217;m giving you EVERYTHING I know for FREE</strong>&#8230; AND&#8230; Introducing you to my German Mentor who has helped me make OVER $700,000 in less than 1 year.</p>
                                <p>I didn&#8217;t have to Sell&#8230; I didn&#8217;t have to Buy&#8230; I didn&#8217;t have to Recruit&#8230; I didn&#8217;t have to talk to friends and family&#8230; I didn&#8217;t have to Market or Referr other people&#8217;s products. All I did was leverage the financial market without the usual learning curve. All I had to do is make one of 2 decisions every hour for about 3 hours a day and 3 to 4 days a week. And the results speak for themselves.</p>
                                <p><span class="hd1b"><strong>But, First Thing&#8230; Is First&#8230;</strong></span></p>
                                <p>I Want To Introduce You To WALTER GREEN, The Person That Changed MY Life&#8230; The Person That I Almost Beat Up in The Alley Last February (Yeah right!!!)&#8230; Seriously, this is the guy that is responsible for helping me to never again worry about money. EVER AGAIN!</p>
                                <p>&nbsp;</p>
                                <blockquote><p>Dear Sir</p>
                                    <p>My name is Walter Green, I&#8217;m a former banker by profession and now I am helping people make money, just like the Big Banks have always done. I&#8217;m paid $12,500 an Hour by International Banks as a consulting fee. I Normally charge $2,000 a session teaching day traders and stockbrokers how to make at least $10K a day using the same methods you will learn here today. I don&#8217;t say this to impress you, but to reflect to you that I am NOT one of those so-called &#8220;Guru&#8217;s&#8221; that will sell you anything and everything just to make a quick buck&#8230; And just to prove it to you, ask yourself this question&#8230; Did you have to pay anything to access my top secret information on this page? That&#8217;s right, NO!</p>
                                    <p>So are you prepared?!?!</p>
                                    <p>I am only looking for 1,000 people to join this cause to give once profits start accumulating. And once the 1,000 person is making $10,000 a month, this website WILL NO LONGER be available for FREE. I will begin to charge a $2,000 Consulting Fee to access this page, once we reach the 1,000th person. Since opening this to public there are already 758 people that we have helped make $10,000 a month, including 37 or 38 people from your area. So make sure you start using this method RIGHT AWAY.</p>
                                    <p>In the mean time, make sure you follow every instruction I have given you on this page. It is designed to be followed to the &#8220;T&#8221; as they are numbered in Steps. In 2 or 3 weeks, please make sure to send us your progress so that we know when we have reached the 1,000th person to make $10,000 a month.</p>
                                    <p>Thank you and Good Luck</p>
                                    <p>Yours truly,</p>
                                    <p>WALTER GREEN</p>
                                    <p>&nbsp;</p></blockquote>
                                <p><strong><em><a href="http://freemoney.systems/?campaign=115&#038;param=Text0">Watch the System In Action HERE</a>&#8211;&gt;</em></strong></p>
                                <p><span style="font-size: small;"><strong>Ex Banker Reveals What Was Hidden For Years With Full Intent</strong></span></p>
                                <p>The financial market is making Millionaires and Billionaires out of these Bankers. But even more shocking is that the financial market has created more millionaires and billionaires in the world, out of ordinary people like you and me, than any other industry. As a matter of fact, in a 12 months span between 2014 and 2015, 600,000 families became millionaires in the US. The majority of them did so by leveraging the financial market, especially during turbulent times like these. So ask yourself this question&#8230; Why aren&#8217;t YOU one of the 600,000 new millionaires?? Why haven&#8217;t you taken advantage of the same systems and methods that the banks have used to make Millions and Billions using YOUR savings account. Don&#8217;t worry, it&#8217;s not your fault! But today is your LUCKY day. I&#8217;m about to disclose what has been hidden from you for decades! A method and system that the banks have closely guarded in hopes that you will continue to deposit money in their accounts to give you the comfort of a &#8220;Savings&#8221;&#8230; While they take your money and make millions and billions with it, they give you lousy 1.5% interest rate&#8230;</p>
                                <p><span class="hd1b"><strong>It&#8217;s Over NOW&#8230;<br/>
                                            It&#8217;s YOUR Turn To Leverage The Financial Market&#8230;</strong></span></p>
                                <p>It&#8217;s time for YOU to know and leverage what the 1% have been doing for decades. Walter and his colleagues have created a system to leverage the financial market, through what is called Binary Options. This gives you the ability to &#8220;get in the game&#8221; and have the chance to become a multi millionaire, without having a HUGE startup capital like stock brokers and banks. No more endless hours of research&#8230; No more needing insider knowledge&#8230; No more difficult decisions&#8230; and <strong>NO MORE RISKING $5K TO $10K TO HAVE LEVERAGE TO MAKE 5% PROFIT</strong>. If you have ever wondered how a banker and stock broker in Wall Street can get an annual bonus of $50 million dollars, you will soon know the answer to that and even have a first-hand experience of it. Yes, your numbers will be smaller of course &#8211; but you will be working from NOW ON with the same instruments as a banker on Wall Street.</p>
                                <p>I&#8217;m sure you already know that bankers turn $1 Million Dollars into $20 Million Dollars in just 1 day&#8230;. And most do it on a daily basis, using instruments and methodologies that allow them to make FAST and INOFRMATIVE Decisions in the most SIMPLE way Possible. &#8220;Deciding UP or Down&#8221;. And NOW, you will have full access to these methodlogies and instruments to start making money like they do&#8230; And NO.. You do not need a $1 Million to &#8220;Leverage&#8221; &#8211; NO&#8230; NO&#8230; I&#8217;m going to show you now how you can &#8220;Leverage&#8221; as little as $250 to $500 and turn that into $5,000 a WEEK! By the way&#8230; It&#8217;s so simple that your 10 year old can turn $100 into $5,000 in just 1 week Flat!!!</p>
                                <p><span style="font-size: small;"><strong>Think I&#8217;m kidding?&#8230;WATCH THIS&#8230;</strong></span></p>
                                <p>This VIDEO is going to take <strong>what you know</strong> about making money (which <strong>hasn&#8217;t worked for you</strong>) and toss it out to show you the EASIEST and FASTEST method to literally grow your bank accounts to the tune of hundreds of thousands of dollars <strong>GUARANTEED!!</strong> <em>(Just Like Mine!)</em></p>
                                <p><strong><em><a href="http://freemoney.systems/members.php?campaign=115&#038;param=Text1">Watch the System In Action HERE</a>&#8211;&gt;</em></strong></p>
                                <p>&nbsp;</p>
                                <p><span class="hd1"><strong><span style="text-decoration: underline;">Proper Money and Trading Management</span></strong></span></p>
                                <p>No risk&#8230; ALL GAIN!!!&#8230; Our goal is to get you to $10,000 a month in income, just like many before you already. Ask them how, and they will tell you that it&#8217;s because of &#8220;probability&#8221; and NOT &#8220;chance&#8221; and definitely NOT &#8220;risk&#8221;. Making this kind of earnings require smart Money and Trading Management.</p>
                                <p>Remember, the goal is for you to make 75% to 94% EVERY 15 minutes (81% average). Based on this TESTED and PROVEN formula below, you can determine how much you want to start with. Whether you want to start trading at $10 a trade and make an average of $8 profit every 15 minutes or you want to be trading at $20 a trade and make an average of $16 profit every 15 minutes, the formula at which you trade is constant and can be found here:<br/>
                                    <img class=" size-full wp-image-1245 alignnone" src="/img/insight/maxinvest.png" alt="maxinvest" width="715" height="238"/></p>
                                <p>&nbsp;</p>
                                <p>Deposit an amount of money that you can afford between $250 to $500 to start with. If you want to start with more, feel free to just that. Don&#8217;t worry, you have nothing to lose based on our proven step by step system below. PLUS&#8230; remember, the broker will also give you a bonus with each deposit. We would recommend that you use the bonus money they give you first, so there is no risk on your part.</p>
                                <p><strong>Remember, <em>&#8220;NO risk&#8230; ALL GAIN!!!&#8221;</em>&#8230; this is our philosophy and methodology that guarantees you positive results EVERY time!</strong></p>
                                <p>&nbsp;</p>
                                <p><strong><em><a href="http://freemoney.systems/members.php?campaign=115&#038;param=Text2">Watch the System In Action HERE</a>&#8211;&gt;</em></strong></p>
                                <p>&nbsp;</p>
                                <p><span class="hd1"><strong><span style="text-decoration: underline;">The Trend Is Your Friend &#8211; Finding the right market!</span></strong></span></p>
                                <p><strong>Watch this part of the video again. This is VERY Important. This is the basis of the system that allows you to find the right stock or market that will allow you to profit 81% Each and EVERY time!</strong></p>
                                <p>Here you will find three more examples that you will clearly see if you should go for &#8220;PUT&#8221; (falling prices) or to &#8220;CALL&#8221; (rising rates):</p>
                                <table border="0" width="720" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                    <tr>
                                        <td valign="middle" width="471"><img class="alignright wp-image-1244 size-full" src="/img/insight/chart1.bmp" alt="chart1" width="471" height="285"/></td>
                                        <td width="20"></td>
                                        <td valign="top"><span class="txxt"><span class="txxt"><b>A beautiful classic!</b></span></span>Here is a clear, <b>long-lasting upward trend</b>. Here even a layman who has never seen a chart doesn?t needs to think about. Definitely &#8211; here we go on a &#8220;Call&#8221;!<br/>
                                            <span style="color: #0b0409;">Fix the amount</span>, maintain, and reap profits!One must not always wait until a trend will continue as long as in this example. Here one might have entered almost at any time before, and would almost always achieved 81% profit!</td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" width="471"><img class="alignright size-full wp-image-1243" src="/img/insight/chart2.bmp" alt="chart2" width="471" height="285"/></td>
                                        <td width="20"></td>
                                        <td valign="top"><b>Sure profit!</b>Here you could have made a click at any time before that on &#8220;put&#8221;. A clear downtrend. No matter when you had done that &#8211; here you would always take the 81% profit!On days with such charts, the big money is earned!<b>Remember: </b>Here you can even place multiple trades in a row, as long as the trend goes, and achieve several times a day profits of up to 91%!</td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" width="471"><img class="alignright size-full wp-image-1242" src="/img/insight/chart3.bmp" alt="chart3" width="471" height="285"/></td>
                                        <td width="20"></td>
                                        <td valign="top">In short: Stay away!No trend is discernible here! The short trend can change quickly and therefore the risk is too great to achieve a loss. Go on looking for nice charts with clear trends.<b><span style="text-decoration: underline;">Insider tip:</span></b> There are so-called Forex signal generators, where you can buy Forex signals for little money. To rely on such signals, you may be able to achieve good profits even on difficult trading days. One example is <b><i>4xstrategy.net</i></b></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" width="471"><img class="alignright wp-image-1241 size-full" src="/img/insight/chart_1.jpg" alt="chart_1" width="471" height="288"/></td>
                                        <td width="20"></td>
                                        <td valign="top"><span class="txxt"><b>Channels, lines and arrows</b></span>In the professional chart you can (even better than here) draw lines and channels. That just shows not only the trends but then finds optimum entry points.In this example you see that in the upward channel are always low points (blue arrows). These are ideal entry points. However, should you reach for the top line (red arrows), wait before placing a binary option trade.Try to draw those lines &#8211; it is much easier than you think!</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><span class="txxt"><b>Helpful Tip:</b> In the 5 minutes chart trends are discernible. However, if an option e.g. expires in 30 minutes, you should look at the one minute chart to identify trends that will help in decision making.</span></p>
                                <p><b>One thing is certain:</b> If you are trading on one or two days during 1 &#8211; 3 hours each, you quickly become a professional in the chart analysis, because it is really simple!</p>
                                <p>The easiest way to find a good trend is that we cycle through the charts of the broker. Go through one chart after another &#8211; you will very quickly develop an eye for them and, over time, have fun with it!</p>
                                <p><b>Let us therefore come to the main topic:</b></p>
                                <p><span class="hd1"><strong><span style="text-decoration: underline;">IT&#8217;S ALL ABOUT PROFITING ALL THE TIME!!!</span></strong></span></p>
                                <p>&nbsp;</p>
                                <p><strong><em><a href="http://freemoney.systems/members.php?campaign=115&#038;param=Text3">Watch the System In Action HERE</a>&#8211;&gt;</em></strong></p>
                                <p>&nbsp;</p>
                                <table width="710" cellpadding="20">
                                    <tbody>
                                    <tr>
                                        <td valign="top">
                                            <hr class="hr-green"/>
                                            <hr class="hr-blue"/>
                                            <h2>what are my odds to win?</h2>
                                            <table cellspacing="7">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="box-descricao">
                                                            <p>In anything you do, there are risks&#8230; then there are calculated risks&#8230; <strong>then there are NO risks. </strong>We are here to hold your hand and guide you through a step-by-step PROVEN system that elevates ALL of your risks to virtually <strong>Non-Existent.</strong></p>
                                                            <p>Every time you are correct in a transaction, return to the first step. If you want to invest more, you may duplicate or even triplicate the investment amount.</p>
                                                            <h3>how to start »</h3>
                                                        </div>
                                                    </td>
                                                    <td valign="top">
                                                        <div class="box-lateral-b"></div>
                                                        <div class="box-lateral-b"><img class="alignnone wp-image-1240 size-full" src="/img/insight/probabilidades.png" alt="probabilidades" width="" height=""/></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" valign="top">In order to generate a comfortable profit from home, you will have to open an account in our our recommended partner site. You will NOT need to download anything!<br/>
                                                        In case you need any help to open your account, you will be contacted immediately by an account manager. Otherwise, you may contact a Live help through the Live Chat, once you&#8217;ve opened an account. If you follow all steps bellow thoroughly, the system will work perfectly.<br/>
                                                        <strong><span style="color: #8b0000;">DON&#8217;T EVER FORGET:</span> &#8220;The Trend is Your Friend&#8221;. Use the probabilities here, along with finding the right Stock or Market that has a CLEAR &#8220;Trend&#8221; to ensure that you make money EVERY Day!</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <hr class="hr-blue"/>
                                            <h2>how to apply the system !</h2>
                                            <h3>1st step » <strong>67.4%</strong> probability of winning!</h3>
                                            <table cellspacing="7">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="box-descricao">
                                                            <p>Start by choosing a market or stock that clearly has a &#8220;Trend&#8221; (either up or down).</p>
                                                            <ul>
                                                                <li>Put $10 in HIGH and Click &#8220;CALL&#8221; if the trend is going up OR in LOW and Click on &#8220;PUT&#8221; if the trend is going down.</li>
                                                                <li>Set the amount ($10) in the investment space.</li>
                                                                <li>Click on &#8220;TRADE&#8221;.</li>
                                                            </ul>
                                                            <p>Now you have to wait the 15 minutes cycle to end. You should always wait for the cycle to end! A winning operation will have an average of 81% profit. With this example, you make $8 profit. As you build up your account balance or if you deposited a higher amount, our goal is to have you trading $100 per trade so your profit would be $81 per trade. But that&#8217;s later on.</p>
                                                        </div>
                                                    </td>
                                                    <td valign="top">
                                                        <div class="box-lateral-b">
                                                            <p class="chance-ganhar"><strong>67.4%</strong> probability of winning!</p>
                                                            <p class="text-box-big"><img class="alignright wp-image-1239 size-full" src="/img/insight/print-trade.jpg" alt="print-trade" width="310" height="134"/></p>
                                                            <p class="text-box-big">With a $10 investment and $18 of winnings, you will have an $8 profit!</p>
                                                            <p><a href="http://freemoney.systems/?campaign=115&#038;param=StartNowButton1"><img class="alignnone wp-image-1246 size-full" src="/img/insight/bottom-box1.png" alt="bottom-box" width="310" height="115"/></a></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" valign="top">
                                                        <p class="aviso next-step">When you win, start again at Step 1. If you lose here, go to step two.<img class="alignright size-full wp-image-1237" src="/img/insight/next-step.png" alt="next-step" width="73" height="29"/></p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="clr"></div>
                                            <hr class="hr-blue"/>
                                            <h3>2nd step » <strong>79.1%</strong> probability of winning!</h3>
                                            <table cellspacing="7">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="box-descricao">
                                                            <p>Stay with the same stock or Market as Step 1</p>
                                                            <ul>
                                                                <li>Put $26 in HIGH and Click &#8220;CALL&#8221; if the trend is going up OR in LOW and Click on &#8220;PUT&#8221; if the trend is going down.</li>
                                                                <li>Set the amount ($26) in the investment space.</li>
                                                                <li>Click on &#8220;TRADE&#8221;.</li>
                                                            </ul>
                                                            <p>Now you have to wait the 15 minutes cycle to end. You should always wait for the cycle to end! A winning operation will have an average of 81% profit. Look to your right to see how much you would make when you win at step 2</p>
                                                        </div>
                                                    </td>
                                                    <td valign="top">
                                                        <div class="box-lateral-b">
                                                            <p class="chance-ganhar"><strong>79.1%</strong> probability of winning!</p>
                                                            <p><img class="alignright wp-image-1239 size-full" src="/img/insight/print-trade.jpg" alt="print-trade" width="310" height="134"/></p>
                                                            <p class="text-box-big">With a $26 investment and $47.06 of winnings, you will have a $21 profit!</p>
                                                            <p><a href="http://freemoney.systems/?campaign=115&#038;param=StartNowButton2"><img class="alignnone wp-image-1246 size-full" src="/img/insight/bottom-box1.png" alt="bottom-box" width="310" height="115"/></a></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" valign="top">
                                                        <p class="aviso next-step">When you win, start again at Step 1. If you lose here, go to step three.<img class="alignright size-full wp-image-1237" src="/img/insight/next-step.png" alt="next-step" width="73" height="29"/></p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="clr"></div>
                                            <hr class="hr-blue"/>
                                            <h3>3rd step » <strong>98.9%</strong> probability of winning!</h3>
                                            <table cellspacing="7">
                                                <tbody>
                                                <tr>
                                                    <td valign="top">
                                                        <div class="box-descricao">
                                                            <p>Stay with the same stock or Market as Step 2</p>
                                                            <ul>
                                                                <li>Put $65 in HIGH and Click &#8220;CALL&#8221; if the trend is going up OR in LOW and Click on &#8220;PUT&#8221; if the trend is going down.</li>
                                                                <li>Set the amount ($65) in the investment space.</li>
                                                                <li>Click on &#8220;TRADE&#8221;.</li>
                                                            </ul>
                                                            <p>Now you have to wait the 15 minutes cycle to end. You should always wait for the cycle to end! A winning operation will have an average of 81% profit. Look to your right to see how much you would make when you win at step 3</p>
                                                        </div>
                                                    </td>
                                                    <td valign="top">
                                                        <div class="box-lateral-b">
                                                            <p class="chance-ganhar"><strong>98.9%</strong> probability of winning!</p>
                                                            <p><img class="alignright wp-image-1239 size-full" src="/img/insight/print-trade.jpg" alt="print-trade" width="310" height="134"/></p>
                                                            <p class="text-box-big">With a $65 investment and $117.65 of winnings, you will have a $52 profit!</p>
                                                            <p><a href="http://freemoney.systems/?campaign=115&#038;param=StartNowButton3"><img class="alignnone wp-image-1246 size-full" src="/img/insight/bottom-box1.png" alt="bottom-box" width="310" height="115"/></a></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" valign="top">
                                                        <p class="aviso next-step">When you win, start again at Step 1.<br/>
                                                            The chances of you losing here is 1.1%, which is almost non-existent.</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><a href="http://freemoney.systems/?campaign=115&#038;param=Text4"> <strong><em>Watch the System In Action HERE&#8211;&gt;</em></strong></a></p>
                            </div>
                            <span style="display:none" class="updated">2015-03-10</span>
                            <div style="display:none" class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><strong class="fn" itemprop="name"><a href="#" title="Posts by invsign" rel="author">invsign</a></strong></div>
                        </div>
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
                                <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="c1c8e3b9f5"/><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
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
                    <div id="rss-6" class="widget widget_rss"><div class="widget-top"><h4><a class='rsswidget' href='http://www.sharkclick.com/taking-stock.xml'><img style='border:0' width='14' height='14' src='img/rss.png' alt='RSS'/></a> <a class='rsswidget' href='http://www.bloomberg.com/feed/podcast/taking-stock.xml'>Taking Stock</a></h4><div class="stripe-line"></div></div>
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
                    <div class="reltar" style="text-align:center;font-size:12pt;">Related Articles</div><a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_pDNWwilkEcKbCQxH?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'pDNWwilkEcKbCQxH'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(http://it.sharkclick.com/files/banner_5qUt4zJ6gRkM9dhq.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="Rich People Don’t Want You To Find Out About This System">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_pDNWwilkEcKbCQxH?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'pDNWwilkEcKbCQxH'});">Rich People Don’t Want You To Find Out About This System</a></div>
                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_MuqnUQ8HVZZfMknj?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'MuqnUQ8HVZZfMknj'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(http://it.sharkclick.com/files/banner_w7U87IlbtXDf1Ldl.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="5 Investments Millionaires Will NEVER Share and For a Good Reason!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_MuqnUQ8HVZZfMknj?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'MuqnUQ8HVZZfMknj'});">5 Investments Millionaires Will NEVER Share and For a Good Reason!</a></div>
                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_wT3Uhxr6ZOxXXaav?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'wT3Uhxr6ZOxXXaav'});" style="width: 300px !important; height: 180px !important; line-height: 180px; background: transparent url(http://it.sharkclick.com/files/banner_y8BuzGr74hP91Y1y.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_wT3Uhxr6ZOxXXaav?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'wT3Uhxr6ZOxXXaav'});">You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!</a></div> </div>
                <div id="text-html-widget-5" class="text-html-box">
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
                            <div class="wide-news-item">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_skDvskx1uisii6NQ?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'skDvskx1uisii6NQ'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(http://it.sharkclick.com/files/banner_SGVCs1hfDF1gqSmD.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="The One Big Secret Millionaire Traders will NEVER Share">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_skDvskx1uisii6NQ?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'skDvskx1uisii6NQ'});">The One Big Secret Millionaire Traders will NEVER Share</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col2">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_Emfd7bJ8eVo5nYWb?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Emfd7bJ8eVo5nYWb'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(http://it.sharkclick.com/files/banner_aSMwc535ggheLhQg.png) 0 0 no-repeat;  border: 1px solid transparent !important;" title="You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_Emfd7bJ8eVo5nYWb?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Emfd7bJ8eVo5nYWb'});">You Will Not Believe This Wall Street Trick Bankers Are Holding Back On!</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col3">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_Ms9QKbeiU5hVJnVL?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Ms9QKbeiU5hVJnVL'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(http://it.sharkclick.com/files/banner_D6W1Z3Te8c99CcZa.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="5 Investments Millionaires Will NEVER Share and For a Good Reason!">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_Ms9QKbeiU5hVJnVL?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'Ms9QKbeiU5hVJnVL'});">5 Investments Millionaires Will NEVER Share and For a Good Reason!</a></div>
                                </div>
                            </div>
                            <div class="wide-news-item  last-col">
                                <div class="post-thumbnail">
                                    <a target="_blank" class="ubm_banner" href="http://it.sharkclick.com/click_ExDUA7fXRJM8kTD7?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'ExDUA7fXRJM8kTD7'});" style="width: 282px !important; height: 211px !important; line-height: 211px; background: transparent url(http://it.sharkclick.com/files/banner_Di4zvprVTXlF3EKi.jpg) 0 0 no-repeat;  border: 1px solid transparent !important;" title="Rich People Don’t Want You To Find Out About This System">&nbsp;</a><div class="relavent"><a href="http://it.sharkclick.com/click_ExDUA7fXRJM8kTD7?" onclick="ga('send', {'hitType': 'event','eventCategory': 'shark','eventAction': 'click','eventLabel': 'ExDUA7fXRJM8kTD7'});">Rich People Don’t Want You To Find Out About This System</a></div>
                                </div>
                            </div><div class="clear"></div>
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