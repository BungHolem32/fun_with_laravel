@section('head')
    {{-- maybe put it elsewere--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Startup CSS -->
    {!! $page->appendAsset(url('/css/aussie/style.css')) !!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->
    {!! $page->appendAsset(url('/js/vendor/jquery-1.11.2.min.js')) !!}
    <script type="text/javascript" src="/js/aussie/first.js?v=1"></script>
@append

@section('bottom-scripts')
        <script language="javascript">
            var loadingMsg = '<div class="loading"><img src="/img/aussie/loadingBL2.gif" alt=""><div class="loading-text"> Registration is in progress.. </div></div>';
            var requiredMsg = '<span class="arrow_box"></span>This field is required.';
        </script>
        @com('funnel_scripts')
        <script src="/js/aussie/bootstrap.min.js"></script>
@append


@section('page-layout')

    <table width="100%" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/bg.png">
        <tbody><tr>
            <td height="134" valign="top"><center>
                <img src="/img/aussie/tit.png" width="790" height="103" style="padding-bottom:-10px;">
            </center></td>
        </tr>
        </tbody></table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#f3f3f3;" background="../ausbg.jpg">
        <tbody><tr>
            <td><center>
                <p>

                <table width="980" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td width="654" class="videowrap"><table width="650" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b">
                            <tbody><tr>
                                <td height="370" bgcolor="#1e387b"><center>
                                        <div class="first_em">
                                            @include('funnels.layouts._partials._video', ['w'=>636, 'h'=>356])
                                        </div>
                                </center></td>
                            </tr>
                            </tbody></table></td>
                        <td width="326"><center>
                            <div id="form-element" class="boaforms theme-default"><div class="form-container theme-default">
                                <div class="logos-container">

                                </div>
                                <div class="form second">
                                    @include('funnels.layouts._partials._form', ['funnelId' => $page->getParent()->id])
                                </div>
                        </center></td>
                    </tr>
                    </tbody></table>
                </p><p> </p>
                <p></p>
                <p>
                </p>
                <br>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b" style="color:#090;">
                    <tbody><tr>
                        <td height="50" bgcolor="#1e387b"><center>
                            <table width="900" border="0" cellspacing="0" cellpadding="0" style="color:#cedbff;">
                                <tbody><tr>
                                    <!-- <td><Center>What is the Aussie Method?</Center></td>-->
                                    <td><center>
                                        <a href="#start" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">Getting Started</a>
                                    </center></td>
                                    <td><center>
                                        <a href="#accounts" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">Current Members Trading Accounts</a>
                                    </center></td>
                                    <td><center>
                                        <a href="#social" style="color:#cedbff; font-family: 'Montserrat', sans-serif;">See Live Facebook &amp; Twitter Feedback</a>
                                    </center></td>
                                </tr>
                                </tbody></table>
                        </center></td>
                    </tr>
                    </tbody></table>
                <p>&nbsp;</p>
                <div class="highlight">
                    <div class="section-title"> <a name="start"></a><img src="/img/aussie/3step.png" width="900" height="295"><br>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b;"><strong><a name="accounts"></a>Check Out My LIVE Personal Trading Account</strong></p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="container">
                        <div style="height:300px; width:1070px; background: #FFF;padding: 15px; border-radius:10px;box-shadow: 0px 0px 25px #999;">
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle"><img src="/img/aussie/man.png" width="250" style="padding-top:20px;"></div>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <div class="plan-features">
                                    <p>&nbsp;</p>
                                    <p><span style="font-size:19px; font-family: 'Cabin', sans-serif;">Jake Pertu - Aussie Method Founder<br>
                  <strong>Profit To Date: <u>$2,187,612.00</u> </strong></span><br>
                                        <br>
                                        <strong><a href="#customers" onclick="tbox0();" style="font-family: 'Cabin', sans-serif; font-size:40px; line-height:1; color:#1e387b;">Click Here To View <br>
                                            My Live Account</a></strong> <br>
                                        <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <center style="padding-top:35px;">
                                <img src="/img/aussie/vta.png" width="200" height="200">
                            </center>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <!--<div class="action-btn"> <a href="http://tradeverify.net/?i=CP001" class="btn btn-warning btn-min-width" target="_blank"><strong>VERIFY #CP001</strong></a> </div>-->
                            </div>
                        </div>
                        <div style="clear:both"></div>
                        <div class="section-title">
                            <p>&nbsp;</p>
                            <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong>More Accounts From Our Customers</strong></p>
                            <p>&nbsp;</p>
                        </div>
                        <div style="height:300px; width:1070px; background: #FFF;padding: 15px; border-radius:10px;box-shadow: 0px 0px 25px #999;margin-bottom: 30px;">
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle"><img src="/img/aussie/p1.png" alt="" width="237" height="237" style="margin-top:16px"></div>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <div class="plan-features">
                                    <p>&nbsp;</p>
                                    <p><span style="font-size:19px; font-family: 'Cabin', sans-serif;">NUALA GATHERCOLE  <br>
                  Start Date: 19th May 2015<br>
                  <strong>Profit To Date: <u>$212,450.00</u> </strong></span><br>
                                        <br>
                                        <strong><a href="#customers" onclick="tbox1();" style="font-family: 'Cabin', sans-serif; font-size:40px; line-height:1; color:#1e387b;">Click Here To View <br>
                                            Live Statement</a></strong> <br>
                                        <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <center style="padding-top:35px;">
                                <img src="/img/aussie/vta.png" width="200" height="200">
                            </center>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <!--<div class="action-btn"> <a href="http://tradeverify.net/?i=CP001" class="btn btn-warning btn-min-width" target="_blank"><strong>VERIFY #CP001</strong></a> </div>-->
                            </div>
                        </div>
                        <div style="clear:both"></div>

                        <div style="height:300px; width:1070px; background: #FFF;padding: 15px; border-radius:10px;box-shadow: 0px 0px 25px #999;margin-bottom: 30px;">
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle"><img src="/img/aussie/p2.png" alt="" width="237" height="237" style="margin-top:16px"></div>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <div class="plan-features">
                                    <p>&nbsp;</p>
                                    <p><span style="font-size:19px; font-family: 'Cabin', sans-serif;">JAMES TAYLOR <br>
                  Start Date: 28th May 2015<br>
                  <strong>Profit To Date: <u>$196,201.00</u> </strong></span><br>
                                        <br>
                                        <strong><a href="#customers" onclick="tbox2();" style="font-family: 'Cabin', sans-serif; font-size:40px; line-height:1; color:#1e387b;">Click Here To View <br>
                                            Live Statement</a></strong> <br>
                                        <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <center style="padding-top:35px;">
                                <img src="/img/aussie/vta.png" width="200" height="200">
                            </center>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <!--<div class="action-btn"> <a href="http://tradeverify.net/?i=CP001" class="btn btn-warning btn-min-width" target="_blank"><strong>VERIFY #CP001</strong></a> </div>-->
                            </div>
                        </div>
                        <div style="clear:both"></div>

                        <div style="height:300px; width:1070px; background: #FFF;padding: 15px; border-radius:10px;box-shadow: 0px 0px 25px #999;margin-bottom: 30px;">
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle"><img src="/img/aussie/p3.png" alt="" width="237" height="237" style="margin-top:16px"></div>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <div class="plan-features">
                                    <p>&nbsp;</p>
                                    <p><span style="font-size:19px; font-family: 'Cabin', sans-serif;">DEMETRIS BELL <br>
                  Start Date: 2nd June 2015<br>
                  <strong>Profit To Date: <u>$103,870.00</u> </strong></span><br>
                                        <br>
                                        <strong><a href="#customers" onclick="tbox3();" style="font-family: 'Cabin', sans-serif; font-size:40px; line-height:1; color:#1e387b;">Click Here To View <br>
                                            Live Statement</a></strong> <br>
                                        <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                            <center style="padding-top:35px;">
                                <img src="/img/aussie/vta.png" width="200" height="200">
                            </center>
                            <div style="float:left; width:33%; text-align: center;vertical-align:middle;padding-top: 20px;">
                                <!--<div class="action-btn"> <a href="http://tradeverify.net/?i=CP001" class="btn btn-warning btn-min-width" target="_blank"><strong>VERIFY #CP001</strong></a> </div>-->
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p style="font-family: 'Cabin', sans-serif; font-size:26px; color:#1e387b"><strong>LIVE MINUTE BY MINUTE UPDATING TWITTER AND FACEBOOK FEEDS</strong></p><strong>

                <table id="social" width="921" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/blank.png">
                    <tbody><tr>
                        <td height="521"> <center><table width="100" border="0">
                            <tbody><tr>
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

                                    </script> </center></td>
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

                                        var images = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg","21.jpg","22.jpg","23.jpg","24.jpg","25.jpg","26.jpg","27.jpg","28.jpg","29.jpg","30.jpg","31.jpg","32.jpg","33.jpg","34.jpg","35.jpg","36.jpg","37.jpg","38.jpg","39.jpg","40.jpg","41.jpg","42.jpg","43.jpg","44.jpg","45.jpg","46.jpg","47.jpg","48.jpg","49.jpg","50.jpg","51.jpg","52.jpg","53.jpg","54.jpg","55.jpg","56.jpg","57.jpg","58.jpg","59.jpg","60.jpg","61.jpg","62.jpg","63.jpg","64.jpg","65.jpg","66.jpg","67.jpg","68.jpg","69.jpg","70.jpg","71.jpg","72.jpg","73.jpg","74.jpg","75.jpg","76.jpg","77.jpg","78.jpg","79.jpg","80.jpg","81.jpg","82.jpg","83.jpg","84.jpg","85.jpg","86.jpg","87.jpg","88.jpg","89.jpg","90.jpg","91.jpg","92.jpg","93.jpg","94.jpg","95.jpg","96.jpg","97.jpg","98.jpg","99.jpg","1(1).jpg","2(1).jpg","3(1).jpg","4(1).jpg","5(1).jpg","6(1).jpg","7(1).jpg","8(1).jpg","9(1).jpg","10(1).jpg","11(1).jpg","12(1).jpg","13(1).jpg","14(1).jpg","15(1).jpg","16(1).jpg","17(1).jpg","18(1).jpg","19(1).jpg","20(1).jpg","21(1).jpg","22(1).jpg","23(1).jpg","24(1).jpg","25(1).jpg","26(1).jpg","27(1).jpg","28(1).jpg","29(1).jpg","30(1).jpg","31(1).jpg","32(1).jpg","33(1).jpg","34(1).jpg","35(1).jpg","36(1).jpg","37(1).jpg","38(1).jpg","39(1).jpg","40(1).jpg","41(1).jpg","42(1).jpg","43(1).jpg","44(1).jpg","45(1).jpg","46(1).jpg","47(1).jpg","48(1).jpg","49(1).jpg","50(1).jpg","51(1).jpg","52(1).jpg","53(1).jpg","54(1).jpg","55(1).jpg","56(1).jpg","57(1).jpg","58(1).jpg","59(1).jpg","60(1).jpg","61(1).jpg","62(1).jpg","63(1).jpg","64(1).jpg","65(1).jpg","66(1).jpg","67(1).jpg","68(1).jpg","69(1).jpg","70(1).jpg","71(1).jpg","72(1).jpg","73(1).jpg","74(1).jpg","75(1).jpg","76(1).jpg","77(1).jpg","78(1).jpg","79(1).jpg","80(1).jpg","81(1).jpg","82(1).jpg","83(1).jpg","84(1).jpg","85(1).jpg","86(1).jpg","87(1).jpg","88(1).jpg","89(1).jpg","90(1).jpg","91(1).jpg","92(1).jpg","93(1).jpg","94(1).jpg","95(1).jpg"];


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
                            </tbody></table></center></td>
                    </tr>
                    </tbody></table>
                <center>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b"><strong><a name="results"></a>Live Third Party Verified Results!</strong></p>
                    <p>&nbsp;</p>
                    <table width="921" border="0" cellspacing="0" cellpadding="0" background="/img/aussie/blank.png">
                        <tbody><tr>
                            <td height="521" valign="top"><center>
                                <br>
                                <br>
                             <div class="tradessectbg">
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
                                    <script>
                                        position=['CALL','PUT'];
                                        asset=['USD/CHF','GBP/USD','CHF/JPY','EUR/USD','NZD/USD','USD/CAD','EUR/JPY','EUR/CHF','EUR/GBP','NZD/USD','GBP/CHF'];
                                        profit=0;

                                        win=0;
                                        lost=0;
                                        names=['Max','Janice','Emery','George','James','Edwin','Mary','James','Ronald','Robert','Dagmar','Manuel','Michael','Cora','Francisco','Mary','Robin','Inez','Leon','Leann','Kelly','Iris','Andreas','Elizabeth','Susan','Charles','Maurice','Susan','Rhonda','Kathleen','Russell','Lonnie','Phoebe','Carlos','Nancy','Matthew','Mildred','Hermine','Karlene','Pamela','David','Holly','Juanita','Jeffery','Mark','Kelsey','Julia','Richard','Thomas','Harold','Mohammed','Grace','Steven','Jules','Melanie','Claudia','Jessie','Judy','Frances','William','Denise','Mark','Shane','Lisa','Jo','Terry','George','Ronald','Sheena','Wilbert','Harold','Don','Samuel','Jose','Kenneth','Suzanne','Tiffany','David','Alma','John','James','Arturo','Jessica','Janet','Jeanine','Allyson','Lorene','Terry','Stacy','Benjamin','Daniel','Daniel','Heather','Abraham','Maureen','Caroline','Johnny','David','Tori','Monty','Carol','Wendy','Eve','Robert','Crystal','Ruth','Kenny','Rachel','Gary','David','Nicholas','Jeffery','Matthew'];
                                        function rand_num(min,max) {
                                            var number = min + Math.floor(Math.random() * max);
                                            return number;
                                        }
                                        function rand_num2(min,max) {
                                            var number = min + Math.floor((Math.random() * max)/2);
                                            return number;
                                        }
                                        function numberCom(val) {
                                            while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1"+","+"$2");
                                            return val;
                                        }
                                        var html;
                                        function mkChanges() {
                                            var p = rand_num(1,100);
                                            p=p%2;
                                            var xposition=position[p];

                                            var a = rand_num(0,10);
                                            var xasset=asset[a];

                                            var payout = rand_num2(200,800);
                                            profit+=payout;
                                            var name=names[rand_num(0,names.length)];
                                            html='<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;"><span style="color:#1e387b; font-weight:bold; font-size:14px;">'+name+'</span> just won a trade...</font></td><td class="payoutwon" align="center"><font style="font-family: \'Cabin\', sans-serif !important; font-size:16px; font-weight:bold">$ '+numberCom(payout)+'</font></td><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">'+getDateTime(rand_num(1,2))+'</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">'+xasset+'</span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/bluetick.png" height="20px"></span></td></tr>'+html;

                                            $("#trades").html(html);
                                            /*$("#TOTAL").html("$"+numberCom(profit));
                                             $("#WON").html("100 %");
                                             $("#LOST").html("0 %");*/
                                            clearInterval(mC);
                                            mC=setInterval(mkChanges,rand_num(700,3000));
                                        }
                                        var mC=setInterval(mkChanges,rand_num(700,3000));
                                        /*$("#TOTAL").html("$"+numberCom(profit));*/
                                        function getDateTime(sec) {

                                            var now     = new Date(Date.now() - (sec*1000));
                                            //return now.getDate();
                                            var year    = now.getFullYear();
                                            var month   = now.getMonth()+1;
                                            var day     = now.getDate();
                                            var hour    = now.getHours();
                                            var minute  = now.getMinutes();
                                            var second  = now.getSeconds();
                                            if(month.toString().length == 1) {
                                                var month = '0'+month;
                                            }
                                            if(day.toString().length == 1) {
                                                var day = '0'+day;
                                            }
                                            if(hour.toString().length == 1) {
                                                var hour = '0'+hour;
                                            }
                                            if(minute.toString().length == 1) {
                                                var minute = '0'+minute;
                                            }
                                            if(second.toString().length == 1) {
                                                var second = '0'+second;
                                            }
                                            var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;
                                            return dateTime;
                                        }

                                        function AddTrade() {
                                            for(var i=0;i<600;i+=rand_num(60,65))
                                            {
                                                //alert(i);
                                                var p = rand_num(1,100);
                                                p=p%2;
                                                var xposition=position[p];

                                                var a = rand_num(0,10);
                                                var xasset=asset[a];

                                                var payout = rand_num2(100,900);
                                                profit+=payout;
                                                var name=names[rand_num(0,names.length)];
                                                html+='<tr rv-class-success="position.status | eq won" rv-show="position.status | not_eq open" class="success"><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;"><span style="color:#1e387b; font-size:14px; font-weight:bold">'+name+'</span> just won a trade... </font></td><td class="payoutwon" align="center"><font style="font-family: \'Cabin\', sans-serif !important; font-size:16px; font-weight:bold">$ '+numberCom(payout)+'</font></td><td rv-text="position.optionEndDate" align="center"><font style="font-family: \'Cabin\', sans-serif;">'+getDateTime(i)+'</font></td><td align="center"><span rv-text="position.name"><font style="font-family: \'Cabin\', sans-serif;">'+xasset+'</span></font></td><td align="center"><span rv-text="position.status | capitalize" rv-class-label-success="position.status | eq won" rv-class-label-danger="position.status | eq lost" rv-class-label-info="position.status | tie_or_sold"><img src="/img/aussie/bluetick.png" height="20px"></span></td></tr>';
                                            }
                                            $("#trades").html(html);
                                            /*$("#TOTAL").html("$"+numberCom(profit));
                                             $("#WON").html("100 %");
                                             $("#LOST").html("0 %");*/
                                        }
                                        AddTrade();
                                    </script></div>
                                </div>
                                </center></td>
                        </tr>
                        </tbody></table>
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
                        <div class="a-section" style="display: block;">
                            <p>The Aussie Method is a 100% FREE software that will trade on the binary options markets with just 1 click! It's fully automated and places the winning trades for you!</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>How much money can I make  with this software?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p>To put it in short, there's no limit. To put it more technically, it really depends on how much money you fund your account with. Most of our members fund their account with $300, and make about $800-1000 daily. Those who fund their account with $1,000 or over make over $2,500 per day!</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>How long does each trade last?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p>Anywhere from a minute to an hour. So you will see your profits right away, no more waiting for long periods of time.</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>Do I need to use my credit card when I signup?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p><u><strong>NO WAY</strong></u>. The Aussie Method App is 100% FREE. You will NOT be asked for your credit card or paypal or bank information when you download the Aussie Method System!</p>
                            <p>&nbsp;</p>
                            <p>Once you are in the members area, we will recommend a binary options broker that you can exploit. For this, you'll need funds to deposit in order to start making profits. This is YOUR money that you are just depositing to trade with, and you can withdraw it at any time!</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>Does your software work with Mac computers? </p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p>Yes! It is a web based application which means it can be used on Windows, Mac or Linux based systems! You just need a web browser.</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>I don't have much free time - Is the Aussie Method really automated?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p><strong>YES!</strong> You simply click play in the software and it will trade for you! You can walk away from your computer, and enjoy your profits! You don't have to be anywhere near the software for it to work for you and make you thousands per day! </p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>How easy is it to use the software?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p>VERY EASY! Once you sign up in the members area by filling in a simple form, the software is infront of you, click play, make profits! There is no complicated setup!</p>
                        </div>
                        <div class="q-section"> <img alt="" src="/img/aussie/plus-icon.png">
                            <p>What about customer support?</p>
                        </div>
                        <div class="a-section" style="display: block;">
                            <p>Our customer support team operates 7 days per week - 24 hours a day. <strong>We have email support but more importantly we have a FULL live chat system in the members area with our support agents ready to help you at ANY time! 2am? NO PROBLEM!</strong></p>
                        </div>
                    </div>
                </center>
                <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b">&nbsp;</p>
                <p style="font-family: 'Cabin', sans-serif; font-size:46px; color:#1e387b">&nbsp;</p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#1e387b" style="color:#090;">
                    <tbody><tr>
                        <td height="50" bgcolor="#1e387b"><center>
                            <table class="footer" width="880" border="0" cellspacing="0" cellpadding="0" style="color:#cedbff;">
                                <tbody><tr>
                                    <!-- <td><Center>What is the Aussie Method?</Center></td>-->
                                    <td><center>
                                        Copyright 2015 Aussie Method. All Right Reserved.
                                    </center></td>
                                    <td><center>
                                            @include('funnels.layouts._partials._link', ['page' => \App\Page::find(40), 'text'=>'Privacy', 'target'=>'_blank'])
                                            | @include('funnels.layouts._partials._link', ['page' => \App\Page::find(40), 'target'=>'_blank'])
                                            | @include('funnels.layouts._partials._link', ['page' => \App\Page::find(40), 'text'=>'Disclaimer', 'target'=>'_blank'])
                                            | @include('funnels.layouts._partials._link', ['page' => \App\Page::find(40), 'text'=>'Support', 'target'=>'_blank'])
                                    </center></td>
                                </tr>
                                </tbody></table>
                        </center></td>
                    </tr>
                    </tbody></table></strong></center></td>
        </tr>
        </tbody></table>

    <!-- Placed at the end of the document so the pages load faster -->
    <div id="expop_dim"></div>
    <div id="tb1" class="popup" style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;" onClick="closex()">X</div>

        <h4 align="center"><strong class="grey">Average Profit Per Hour: $1,350</strong></h4>

        <iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>
    </div>
    <div id="tb2" class="popup" style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;" onClick="closex()">X</div>

        <h4 align="center"><strong class="grey">Average Profit Per Hour: $2,140</strong></h4>

        <iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>
    </div>
    <div id="tb3" class="popup" style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;" onClick="closex()">X</div>

        <h4 align="center"><strong class="grey">Average Profit Per Hour: $1,700</strong></h4>

        <iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>
    </div>
    <div id="tb0" class="popup" style="position:fixed;z-index:1; display:none; border:1px solid #FFF; width:60%; border-radius:5px; height:80%; overflow:hidden; background-color:#FFF; left:20%; top:10%;">
        <div style="position: absolute;right: 0;top: 0;width: 25px;height: 25px;background: #000;border-radius: 4px;text-align: center;font-size: 18px;color: #FFF; cursor:pointer;" onClick="closex()">X</div>

        <h4 align="center"><strong class="grey">Average Profit Per Hour: $3,760</strong></h4>

        <iframe src="/aussie/results" width="100%" height="100%" scrolling="no" frameborder="0"></iframe>
    </div>
    <div id="hoverbox" style="display: none; filter: alpha(opacity=60); KHTMLOpacity: 0.60; MozOpacity: 0.60; opacity: 0.60; position: fixed;background-color: #000000; z-index:0; width: 100%; height: 100%; left: 0px; top:0px;" onClick="closex()"></div>

@endsection
