@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Startup CSS -->
    {!! $page->appendAsset(url('/css/aussie/style.css')) !!}
    <!--[if lt IE 9]>
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/js/aussie/first.js"></script>
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
@append

@section('bottom-scripts')
    <script language="javascript">
        var loading=1;
        var loadingTimeOut=1000;
        var loadingMsg = '<div class="loading"><img src="/img/aussie/loadingBL2.gif" alt=""><div class="loading-text"> Registration is in progress.. </div></div>';
    </script>
    @com('funnel_scripts')
    <script src="/js/aussie/bootstrap.min.js"></script>

    <script src="/js/fancybox/jquery.fancybox.js"></script>


    <!-- need to move all this to appropriate .css .js files -->

    <style>
        .error {
            color: red;
        }
        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 9999;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 30px;
            background: #f5f5f5;
            color: #444;
            cursor: pointer;
            border: 0;
            border-radius: 2px;
            text-decoration: none;
            transition: opacity 0.2s ease-out;
            opacity: 0;
            font-size: 50px;
            padding-top: 10px;
            font-weight: bolder;
        }
        #back-to-top:hover {
            background: #e9ebec;
        }
        #back-to-top.show {
            opacity: 1;
        }
        #content {
            height: 2000px;
        }
        .fancybox_iframe {
            font-size: 11px;;
        }

    </style>

    <script>
        // need to put in js file all of this
        $("a.fancybox").fancybox();


        $(document).on('click', '.fancybox_iframe', function(e) {
            e.preventDefault();
            $.fancybox({
                href : $(this).attr('href'),
                type : 'iframe'
            });
        });


        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                    backToTop = function () {
                        var scrollTop = $(window).scrollTop();
                        if (scrollTop > scrollTrigger) {
                            $('#back-to-top').addClass('show');
                        } else {
                            $('#back-to-top').removeClass('show');
                        }
                    };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    </script>

    <!-- until here -->

    {!! $page->appendAsset(url('/js/firstPage.js')) !!}


@append


@section('page-layout')

<img src="/img/aussie/callout.png" style="position:fixed; top:0; right:0">
<div class="staticsignup" id="staticsignup">
    <center>
        <img src="/img/aussie/sloo.png" width="180" style="padding-bottom:10px;padding-left:5px;">
    </center>
</div>

<!-- Header Starts --><!-- // Parallax Header Ends -->

<!-- Container -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/bg.png">
    <tr>
        <td height="134" valign="top"><center>
            <a name="startnow"></a><img src="/img/aussie/tit.png" width="970" height="108" style="padding-bottom:-10px;">
        </center></td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#f3f3f3;" background="/img/aussie/ausbg.jpg">
    <tr>
        <td><center>
            <p>

                <table width="980" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="654" class="videowrap"><table width="650" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b">
                            <tr>
                                <td height="370" bgcolor="#1e387b"><center>
                                    <div class="first_em">
                                        @include('funnels.layouts._partials._video', ['poster'=>"", 'w'=>636, 'h'=>356])
                                    </div>
                                </center></td>
                            </tr>
                        </table></td>
                        <td width="326" class="f_first"><center>
                            <br>
            <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b">START <strong>NOW</strong></p>
            <br>
            <p style="font-family: 'Cabin', sans-serif;">Enter your email below to gain instant <br>
                free access to the Aussie Method system</p>
            <br>
            {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post','align'=>'center']) !!}
                <input type="hidden" name="pageId" value="{{ $page->id }}">
                @if($page->switches->showEmailField)
                    <input id="firstPageSignUpMail" type="email" name="email" placeholder="YOUR EMAIL ADDRESS.." required="required" style="width:300px; text-align:center;" />
                @endif
                <input type="submit" src="/img/aussie/buttonfree.png" style="outline: none; width:200px;" />
            {!! Form::close() !!}

            <br>
            <img src="/img/aussie/certs.png" width="250">
        </center></td>
    </tr>
</table>
<p> </p>
</p>
<p>
</p>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b" style="color:#090;">
    <tr>
        <td height="50" bgcolor="#1e387b"><center>
            <table width="900" border="0" cellspacing="0" cellpadding="0" style="color:#cedbff;">
                <tr>
                    <!-- <td><Center>What is the Aussie Method?</Center></td>-->
                    <td><Center>
                        <a href="#aboutme" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">Who am I?</a>
                    </Center></td>
                    <td><Center>
                        <a href="#success" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">Success Stories</a>
                    </Center></td>
                    <td><Center>
                        <a href="#howitworks" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">How It Works</a>
                    </Center></td>
                    <td><Center>
                        <a href="#results" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">Live Results</a>
                    </Center></td>
                    <td><Center>
                        <a href="#faq" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">FAQs</a>
                    </Center></td>
                    <td><Center>
                        <a href="#startnow" style="color:#cedbff; font-family: 'Montserrat', sans-serif; display: none;">Get Started</a>
                    </Center></td>
                </tr>
            </table>
        </center></td>
    </tr>
</table>
<p>&nbsp;</p>

<Center>
    <a name="aboutme"></a> <a class="fancybox" rel="group" href="/img/aussie/guarantee.png"><img src="/img/aussie/hey.png" alt="" /></a>
</Center>
<br>
<br>
<p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong><a name="success"></a>Success Stories</strong></p>
<p>&nbsp;</p>
<Center>
    <p><img src="/img/aussie/iphone.png" width="921" height="523"><br>
        <img src="/img/aussie/face.png" width="921" height="434"></p>
    <p style="font-family: 'Cabin', sans-serif; font-size:26px; color:#1e387b"><strong>LIVE MINUTE BY MINUTE UPDATING TWITTER AND FACEBOOK FEEDS</p>

    <table id="social"  width="921" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/blank.png">
        <tr>
            <td height="521"><center>
                <table width="100" border="0">
                    <tr>
                        <td><center>
                            <img class="fwimg" src="/img/aussie/fb.png" width="250"> <br>
                            <br>
                            <div id="facebook_feed1">
                                <div id="feed1">
                                    <div class="title"><h3>Comments</h3></div>
                                    <div id="feed_content1"></div>
                                </div>
                            </div>
                            <script>
                                var nm = ["Harvey","Christopher","David","Morgan","Jason","Travis","Charlie","Robert","Henry","Kieran","Charles","Joseph","Ellis","Billy","Andrew","Johnny","George","Sebastian","Cameron","Tory","Joel","Adam","Bryce","Dwayne","Vincent","Leon","Aidan","Aidan","David","Jacob","Ben","Alex","Enrique","Dennis","Nathan","Charles","Robert","Alfie","Dominic","Leon","John","Daniel","Charles","Romeo","Noah","Anthony","James","Mohammed","Louis","Joseph","Ellis","Kai","Jay","Noah","Lewis","Anthony","Jamie","Elliot","Ronald","Troy","Reece","Richard","Joel","Callum","Jack","Richard","Nicholas","Cameron","Harry","William","Lyle","Frank","Norman","Anthony","Morgan","Geoffrey","Alejandro","Zak","Anthony","Kieran","Ross","Paul","Sam","Richard","Michael","Roger","Charles","Reece","Brandon","Robert","Luca","Harrison","Ryan","Taylor","Frank","Larry","Billy","Sam","Finlay","Zara","Georgia","Sylvie","Kiera","Margaret","Patria","Ava","Diane","Skye","Helen","Jennifer","Isabella","Faith","Jessica","Penny","Rebecca","Summer","Tamara","Tamika","Magdalene","Wendy","Genevieve","Stephanie","Erin","Abby","Ann","Abbie","Leigh","Shanna","Tilly","Laura","Mary","Paula","Isabel","Ella","Tatiana","Mary","Tegan","Cynthia","Abigail","Lauren","Laura","Katherine","Naomi","Barbara","Melisa","Pamela","Leeann","Jodie","Terri","Caitlin","Roberta","Daisy","Molly","Frieda","Louise","Elizabeth","Stella","Billie","Gracie","Sienna","Katie","Mildred","Kayleigh","Christy","Kiera","Yun","Courtney","Tegan","Sheila","Ray","Lydia","Mamie","Keira","Matilda","Sonya","Ava","Cerys","Eleanor","Grace","Jodie","Sharon","Elva","Eleanor","Freya","Bessie","Sofia","Amelie","Brenda","Poppy","Tegan","Sienna","Leah","Antoinette","Zoe"];
                                var data = [
                                    "Wow this might sound cheesy but I LOVE you guys <b class='p-nickname'>Aussie Method</b> the ONLY system u need for making money online makemoney Aussie Method awesome",
                                    "How long until the money hits my account from my broker account? <b class='p-nickname'>Aussie Method</b> Just withdrawn 5 figures 5figureprofits profits awesome",
                                    "This is like printing money...For Real Take it off the market <b class='p-nickname'>Aussie Method</b> dont want others getting their hands on this selfish",
                                    "Celebrating another profitable day using the <b class='p-nickname'>Aussie Method</b> not had a losing day yet",
                                    "Brilliant stuff, u guys are the bomb <b class='p-nickname'>Aussie Method</b> First trade today and just made $389.11 profit moreprofits Aussie Method",
                                    "Awesome system, made over $2000 in my first 2 hours using the <b class='p-nickname'>Aussie Method</b> system",
                                    "Thank You Thank You Thank You <b class='p-nickname'>Aussie Method</b>",
                                    "Holy crap, this is amazing, I've made $7,891.32 on my very first day using the verified trader system <b class='p-nickname'>Aussie Method</b> system binary amazing",
                                    "<b class='p-nickname'>Aussie Method</b> Sup guys, super sick system u got here",
                                    "Deposited $250 <b class='p-nickname'>Aussie Method</b> with the verified trader system now my account sits at over $30k in just a week Lovethis millionairestatus",
                                    "At last a legit binary system <b class='p-nickname'>Aussie Method</b>",
                                    "Can't thank you guys enough <b class='p-nickname'>Aussie Method</b> been scammed so many times before but this really is the real deal",
                                    "Thanks to <b class='p-nickname'>Aussie Method</b> for finally making a binary system that really works amazing makemoney",
                                    "<b class='p-nickname'>Aussie Method</b> Already up over $3800 and the day is still young",
                                    "Just made $868.44 in a single trade <b class='p-nickname'>Aussie Method</b>",
                                    "<b class='p-nickname'>Aussie Method</b> Just made $918.88 in 34 minutes",
                                    "what is happening?? My account now sits at $23,891.44 I only deposited $300 4 days ago, this is insane <b class='p-nickname'>Aussie Method</b>",
                                    "Thanks support for solving my small problem, looking forward to making lots of cash with this cash thanks Aussie Method support <b class='p-nickname'>Aussie Method</b>",
                                    "WTF.... Thank You This thing is awesome <b class='p-nickname'>Aussie Method</b>"];

                                var images = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg","21.jpg","22.jpg","23.jpg","24.jpg","25.jpg","26.jpg","27.jpg","28.jpg","29.jpg","30.jpg","31.jpg","32.jpg","33.jpg","34.jpg","35.jpg","36.jpg","37.jpg","38.jpg","39.jpg","40.jpg","41.jpg","42.jpg","43.jpg","44.jpg","45.jpg","46.jpg","47.jpg","48.jpg","49.jpg","50.jpg","51.jpg","52.jpg","53.jpg","54.jpg","55.jpg","56.jpg","57.jpg","58.jpg","59.jpg","60.jpg","61.jpg","62.jpg","63.jpg","64.jpg","65.jpg","66.jpg","67.jpg","68.jpg","69.jpg","70.jpg","71.jpg","72.jpg","73.jpg","74.jpg","75.jpg","76.jpg","77.jpg","78.jpg","79.jpg","80.jpg","81.jpg","82.jpg","83.jpg","84.jpg","85.jpg","86.jpg","87.jpg","88.jpg","89.jpg","90.jpg","91.jpg","92.jpg","93.jpg","94.jpg","95.jpg","96.jpg","97.jpg","98.jpg","99.jpg","1(1).jpg","2(1).jpg","3(1).jpg","4(1).jpg","5(1).jpg","6(1).jpg","7(1).jpg","8(1).jpg","9(1).jpg","10(1).jpg","11(1).jpg","12(1).jpg","13(1).jpg","14(1).jpg","15(1).jpg","16(1).jpg","17(1).jpg","18(1).jpg","19(1).jpg","20(1).jpg","21(1).jpg","22(1).jpg","23(1).jpg","24(1).jpg","25(1).jpg","26(1).jpg","27(1).jpg","28(1).jpg","29(1).jpg","30(1).jpg","31(1).jpg","32(1).jpg","33(1).jpg","34(1).jpg","35(1).jpg","36(1).jpg","37(1).jpg","38(1).jpg","39(1).jpg","40(1).jpg","41(1).jpg","42(1).jpg","43(1).jpg","44(1).jpg","45(1).jpg","46(1).jpg","47(1).jpg","48(1).jpg","49(1).jpg","50(1).jpg","51(1).jpg","52(1).jpg","53(1).jpg","54(1).jpg","55(1).jpg","56(1).jpg","57(1).jpg","58(1).jpg","59(1).jpg","60(1).jpg","61(1).jpg","62(1).jpg","63(1).jpg","64(1).jpg","65(1).jpg","66(1).jpg","67(1).jpg","68(1).jpg","69(1).jpg","70(1).jpg","71(1).jpg","72(1).jpg","73(1).jpg","74(1).jpg","75(1).jpg","76(1).jpg","77(1).jpg","78(1).jpg","79(1).jpg","80(1).jpg","81(1).jpg","82(1).jpg","83(1).jpg","84(1).jpg","85(1).jpg","86(1).jpg","87(1).jpg","88(1).jpg","89(1).jpg","90(1).jpg","91(1).jpg","92(1).jpg","93(1).jpg","94(1).jpg","95(1).jpg"];


                                setInterval('autoRefresh()',60000);
                                var cnt=1;
                                function autoRefresh()
                                {
                                    var counter = rand_num(0,images.length);
                                    var dc = rand_num(0,data.length);
                                    var oldtime = new Date();
                                    var old_time = oldtime.getSeconds();
                                    document.getElementById("feed_content1").innerHTML = "<div style='clear:both;'></div><div id='feed_name1'><img src='/img/aussie/fw/" + images[counter] + "' height='40' /><b><a href='#'>" + nm[counter] + "</a></b><br/><span id='curr_time_"+cnt+"' class='ctime' sec='60'>1 minute</span><div style='clear:both;'></div><div id='data1'> <span> " + data[dc] + "</span></div><div class='comment'>Like <span class='dash'>-</span> Comment <span class='dash'>-</span> Share </div></div>"+document.getElementById("feed_content1").innerHTML;
                                    cnt++;

                                    for(i=1;i<cnt;i++)
                                    {
                                        var day=hour=minute=0;
                                        sec1=$("#curr_time_"+i).attr('sec');
                                        sec1=parseInt(sec1)+60;//rand_num(60,360);
                                        $("#curr_time_"+i).attr('sec',sec1)
                                        minute=sec1/60;
                                        if(minute>60)
                                            hour=minute/60;
                                        if(hour>24)
                                            day=hour/24;

                                        if(day>0)
                                            $("#curr_time_"+i).html(parseInt(day)+" days");
                                        else if(hour>0)
                                            $("#curr_time_"+i).html(parseInt(hour)+" hrs");
                                        else if(minute>0)
                                            $("#curr_time_"+i).html(parseInt(minute)+" mins");
                                    }
                                }

                                function rand_num(min,max) {
                                    var number = min + Math.floor(Math.random() * max);
                                    return number;
                                }

                                for(i=0;i<10;i++)
                                    autoRefresh();

                            </script>
                        </center></td>
                        <td><center>
                            <img class="twimg" src="/img/aussie/twt.png" width="250"><br>
                            <br>
                            <div id="facebook_feed2">
                                <div id="feed2">
                                    <div class="title"><h3>Tweets</h3></div>
                                    <div id="feed_content2"></div>
                                </div>
                            </div>
                            <script>
                                var nm = ["Harvey","Christopher","David","Morgan","Jason","Travis","Charlie","Robert","Henry","Kieran","Charles","Joseph","Ellis","Billy","Andrew","Johnny","George","Sebastian","Cameron","Tory","Joel","Adam","Bryce","Dwayne","Vincent","Leon","Aidan","Aidan","David","Jacob","Ben","Alex","Enrique","Dennis","Nathan","Charles","Robert","Alfie","Dominic","Leon","John","Daniel","Charles","Romeo","Noah","Anthony","James","Mohammed","Louis","Joseph","Ellis","Kai","Jay","Noah","Lewis","Anthony","Jamie","Elliot","Ronald","Troy","Reece","Richard","Joel","Callum","Jack","Richard","Nicholas","Cameron","Harry","William","Lyle","Frank","Norman","Anthony","Morgan","Geoffrey","Alejandro","Zak","Anthony","Kieran","Ross","Paul","Sam","Richard","Michael","Roger","Charles","Reece","Brandon","Robert","Luca","Harrison","Ryan","Taylor","Frank","Larry","Billy","Sam","Finlay","Zara","Georgia","Sylvie","Kiera","Margaret","Patria","Ava","Diane","Skye","Helen","Jennifer","Isabella","Faith","Jessica","Penny","Rebecca","Summer","Tamara","Tamika","Magdalene","Wendy","Genevieve","Stephanie","Erin","Abby","Ann","Abbie","Leigh","Shanna","Tilly","Laura","Mary","Paula","Isabel","Ella","Tatiana","Mary","Tegan","Cynthia","Abigail","Lauren","Laura","Katherine","Naomi","Barbara","Melisa","Pamela","Leeann","Jodie","Terri","Caitlin","Roberta","Daisy","Molly","Frieda","Louise","Elizabeth","Stella","Billie","Gracie","Sienna","Katie","Mildred","Kayleigh","Christy","Kiera","Yun","Courtney","Tegan","Sheila","Ray","Lydia","Mamie","Keira","Matilda","Sonya","Ava","Cerys","Eleanor","Grace","Jodie","Sharon","Elva","Eleanor","Freya","Bessie","Sofia","Amelie","Brenda","Poppy","Tegan","Sienna","Leah","Antoinette","Zoe"];
                                var data = [
                                    "Wow this might sound cheesy but I LOVE you guys @<b class='p-nickname'>aussiemethod</b> the ONLY system u need for making money online #makemoney #aussiemethod #awesome",
                                    "How long until the money hits my account from my broker account? @<b class='p-nickname'>aussiemethod</b> Just withdrawn 5 figures #5figureprofits #profits #awesome",
                                    "This is like printing money...For Real Take it off the market @<b class='p-nickname'>aussiemethod</b> dont want others getting their hands on this #selfish",
                                    "Celebrating another profitable day using the @<b class='p-nickname'>aussiemethod</b> not had a losing day yet",
                                    "Brilliant stuff, u guys are the bomb @<b class='p-nickname'>aussiemethod</b> First trade today and just made $389.11 profit #moreprofits #aussiemethod",
                                    "Awesome system, made over $2000 in my first 2 hours using the @<b class='p-nickname'>aussiemethod</b> system",
                                    "Thank You Thank You Thank You @<b class='p-nickname'>aussiemethod</b>",
                                    "Holy crap, this is amazing, I've made $7,891.32 on my very first day using the verified trader system @<b class='p-nickname'>aussiemethod</b> #system #binary #amazing",
                                    "@<b class='p-nickname'>aussiemethod</b> Sup guys, super sick system u got here",
                                    "Deposited $250 @<b class='p-nickname'>aussiemethod</b> with the verified trader system now my account sits at over $30k in just a week #Lovethis #millionairestatus",
                                    "At last a legit binary system @<b class='p-nickname'>aussiemethod</b>",
                                    "Can't thank you guys enough @<b class='p-nickname'>aussiemethod</b> been scammed so many times before but this really is the real deal",
                                    "Thanks to @<b class='p-nickname'>aussiemethod</b> for finally making a binary system that really works #amazing #makemoney",
                                    "@<b class='p-nickname'>aussiemethod</b> Already up over $3800 and the day is still young",
                                    "Just made $868.44 in a single trade @<b class='p-nickname'>aussiemethod</b>",
                                    "@<b class='p-nickname'>aussiemethod</b> Just made $918.88 in 34 minutes",
                                    "what is happening?? My account now sits at $23,891.44 I only deposited $300 4 days ago, this is insane @<b class='p-nickname'>aussiemethod</b>",
                                    "Thanks support for solving my small problem, looking forward to making lots of cash with this #cash #thanks #aussiemethod support @<b class='p-nickname'>aussiemethod</b>",
                                    "WTF.... Thank You This thing is awesome @<b class='p-nickname'>aussiemethod</b>"];

                                var images = ["27(1).jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg","21.jpg","22.jpg","23.jpg","24.jpg","25.jpg","26.jpg","27.jpg","28.jpg","29.jpg","30.jpg","31.jpg","32.jpg","33.jpg","34.jpg","35.jpg","36.jpg","37.jpg","38.jpg","39.jpg","40.jpg","41.jpg","42.jpg","43.jpg","44.jpg","45.jpg","46.jpg","47.jpg","48.jpg","49.jpg","50.jpg","51.jpg","52.jpg","53.jpg","54.jpg","55.jpg","56.jpg","57.jpg","58.jpg","59.jpg","60.jpg","61.jpg","62.jpg","63.jpg","64.jpg","65.jpg","66.jpg","67.jpg","68.jpg","69.jpg","70.jpg","71.jpg","72.jpg","73.jpg","74.jpg","75.jpg","76.jpg","77.jpg","78.jpg","79.jpg","80.jpg","81.jpg","82.jpg","83.jpg","84.jpg","85.jpg","86.jpg","87.jpg","88.jpg","89.jpg","90.jpg","91.jpg","92.jpg","93.jpg","94.jpg","95.jpg","96.jpg","97.jpg","98.jpg","99.jpg","1(1).jpg","2(1).jpg","3(1).jpg","4(1).jpg","5(1).jpg","6(1).jpg","7(1).jpg","8(1).jpg","9(1).jpg","10(1).jpg","11(1).jpg","12(1).jpg","13(1).jpg","14(1).jpg","15(1).jpg","16(1).jpg","17(1).jpg","18(1).jpg","19(1).jpg","20(1).jpg","21(1).jpg","22(1).jpg","23(1).jpg","24(1).jpg","25(1).jpg","26(1).jpg","27(1).jpg","28(1).jpg","29(1).jpg","30(1).jpg","31(1).jpg","32(1).jpg","33(1).jpg","34(1).jpg","35(1).jpg","36(1).jpg","37(1).jpg","38(1).jpg","39(1).jpg","40(1).jpg","41(1).jpg","42(1).jpg","43(1).jpg","44(1).jpg","45(1).jpg","46(1).jpg","47(1).jpg","48(1).jpg","49(1).jpg","50(1).jpg","51(1).jpg","52(1).jpg","53(1).jpg","54(1).jpg","55(1).jpg","56(1).jpg","57(1).jpg","58(1).jpg","59(1).jpg","60(1).jpg","61(1).jpg","62(1).jpg","63(1).jpg","64(1).jpg","65(1).jpg","66(1).jpg","67(1).jpg","68(1).jpg","69(1).jpg","70(1).jpg","71(1).jpg","72(1).jpg","73(1).jpg","74(1).jpg","75(1).jpg","76(1).jpg","77(1).jpg","78(1).jpg","79(1).jpg","80(1).jpg","81(1).jpg","82(1).jpg","83(1).jpg","84(1).jpg","85(1).jpg","86(1).jpg","87(1).jpg","88(1).jpg","89(1).jpg","90(1).jpg","91(1).jpg","92(1).jpg","93(1).jpg","94(1).jpg","95(1).jpg"];


                                setInterval('autoRefresh()',60000);
                                var cnt=1;
                                function autoRefresh()
                                {
                                    var counter = rand_num(0,images.length);
                                    var dc = rand_num(0,data.length);
                                    var oldtime = new Date();
                                    var old_time = oldtime.getSeconds();
                                    document.getElementById("feed_content2").innerHTML = "<div style='clear:both;'></div><div id='feed_name2'><img src='/img/aussie/tw/" + images[counter] + "' height='50' /><div id='data2'><b><a href='#'>" + nm[counter] + "</a></b><span id='curr_time_"+cnt+"' class='ctime' sec='60'>1 minute ago</span><p> " + data[dc] + "</p></div></div>"+document.getElementById("feed_content2").innerHTML;
                                    cnt++;

                                    for(i=1;i<cnt;i++)
                                    {
                                        var day=hour=minute=0;
                                        sec1=$("#curr_time_"+i).attr('sec');
                                        sec1=parseInt(sec1)+60;//rand_num(60,360);
                                        $("#curr_time_"+i).attr('sec',sec1)
                                        minute=sec1/60;
                                        if(minute>60)
                                            hour=minute/60;
                                        if(hour>24)
                                            day=hour/24;

                                        if(day>0)
                                            $("#curr_time_"+i).html(parseInt(day)+"d");
                                        else if(hour>0)
                                            $("#curr_time_"+i).html(parseInt(hour)+"h");
                                        else if(minute>0)
                                            $("#curr_time_"+i).html(parseInt(minute)+"m");
                                    }
                                }

                                function rand_num(min,max) {
                                    var number = min + Math.floor(Math.random() * max);
                                    return number;
                                }

                                for(i=0;i<10;i++)
                                    autoRefresh();

                            </script>
                        </center></td>
                    </tr>
                </table>
            </center></td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong><a name="howitworks"></a>How The Aussie Method Works</strong></p>
    <p>&nbsp;</p>
    <table class="videowrap" width="921" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/ipad.png">
        <tr>
            <td height="521" valign="top"><center>
                <br>
                <br>
                <br>
                <br>
                    <div class="sec_em onscroll_video">
                        @include('funnels.layouts._partials._video', ['video_url'=>'http://video.chaki.netdna-cdn.com/guide4f.mp4','w'=>663, 'h'=>385,'autoplay'=>'false'])
                    </div>
            </center></td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong><a name="results"></a>Live Third Party Verified Results!</strong></p>
    <p>&nbsp;</p>
    <table width="921" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/blank.png">
        <tr>
            <td height="521" valign="top"><center>
                <br>
                <br>
                <div class="tradessect">
                    <table class="table table-striped table-bordered shadowed table-hover" id="positionsHistoryTable" style="background-color:#FFF;" bgcolor="#FFFFFF" width="820px">
                        <thead>
                        <tr>
                            <th background="/img/aussie/topb.png"><font style="font-family: 'Cabin', sans-serif;; color:#000 !important;"><center>Aussie Method Member</center></font></th>
                            <th background="/img/aussie/topb.png"><font style="font-family: 'Cabin', sans-serif;; color:#000 !important;"><center>Profit</center></font></th>
                            <th background="/img/aussie/topb.png"><font style="font-family: 'Cabin', sans-serif;; color:#000 !important;"><center>Trade Time</center></font></th>
                            <th background="/img/aussie/topb.png"><font style="font-family: 'Cabin', sans-serif;; color:#000 !important;"><center>
                                Currency
                            </center></font></th>


                            <th background="/img/aussie/topb.png"><font style="font-family: 'Cabin', sans-serif;; color:#000 !important;"><center>Results</center></font></th>
                        </tr>
                        </thead>
                        <tbody id="trades">

                        </tbody>
                    </table>
                   </div>
            </center></td>
        </tr>
    </table>
    <br>
    <br>
    <center>
        <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong><a name="faq"></a>Frequently Asked Questions</strong></p>
        <br>
    </center>
    <div class="FAQ-pan">
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>What is the Aussie Method?</p>
        </div>
        <div class="a-section" style="">
            <p>The Aussie Method is a 100% FREE software that will trade on the binary options markets with just 1 click! It's fully automated and places the winning trades for you!</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>How much money can I make  with this software?</p>
        </div>
        <div class="a-section" style="">
            <p>To put it in short, there's no limit. To put it more technically, it really depends on how much money you fund your account with. Most of our members fund their account with $300, and make about $800-1000 daily. Those who fund their account with $1,000 or over make over $2,500 per day!</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>How long does each trade last?</p>
        </div>
        <div class="a-section" style="">
            <p>Anywhere from a minute to an hour. So you will see your profits right away, no more waiting for long periods of time.</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>Do I need to use my credit card when I signup?</p>
        </div>
        <div class="a-section" style="">
            <p><u><strong>NO WAY</strong></u>. The Aussie Method App is 100% FREE. You will NOT be asked for your credit card or paypal or bank information when you download the Aussie Method System!</p>
            <p>&nbsp;</p>
            <p>Once you are in the members area, we will recommend a binary options broker that you can exploit. For this, you'll need funds to deposit in order to start making profits. This is YOUR money that you are just depositing to trade with, and you can withdraw it at any time!</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>Does your software work with Mac computers? </p>
        </div>
        <div class="a-section" style="">
            <p>Yes! It is a web based application which means it can be used on Windows, Mac or Linux based systems! You just need a web browser.</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>I don't have much free time - Is the Aussie Method really automated?</p>
        </div>
        <div class="a-section" style="">
            <p><strong>YES!</strong> You simply click play in the software and it will trade for you! You can walk away from your computer, and enjoy your profits! You don't have to be anywhere near the software for it to work for you and make you thousands per day! </p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>How easy is it to use the software?</p>
        </div>
        <div class="a-section" style="">
            <p>VERY EASY! Once you sign up in the members area by filling in a simple form, the software is in front of you, click play, make profits! There is no complicated setup!</p>
        </div>
        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
            <p>What about customer support?</p>
        </div>
        <div class="a-section" style="">
            <p>Our customer support team operates 7 days per week - 24 hours a day. <strong>We have email support but more importantly we have a FULL live chat system in the members area with our support agents ready to help you at ANY time! 2 am? NO PROBLEM!</strong></p>
        </div>
    </div>
</Center>
<p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b">&nbsp;</p>
<p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b">&nbsp;</p>

<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b" style="color:#090;">
    <tr>
        <td height="50" bgcolor="#1e387b" align="center">
            <table class="footer" width="880" border="0" cellspacing="0" cellpadding="0" style="color:#cedbff;">
                <tr>
                    <td align="left"> Copyright 2016 Aussie Method. All Right Reserved. </td>
                    <td align="right">
                        @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                        |
                        @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/terms", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Terms'])
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


</td>
</tr>
</table>



<a href="#" id="back-to-top" title="Back to top">&uarr;</a>

@endsection