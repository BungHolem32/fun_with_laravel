@section('head')
    @if(isMongoNotEmpty($page->title))
        <title>{{$page->title}}</title>
    @endif
    <link rel="shortcut icon" href="/img/moblielbot/applebot_favicon.ico"/>
    <link href='/css/mobilebot/fonts/css9413.css?family=Open+Sans:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/mobilebot/default.css"/>
    <link rel="stylesheet" type="text/css" href="/css/mobilebot/style.css"/>
    <meta name="viewport" content="width = 640, user-scalable = no">
    <style>
        a {
            color           : white;
            text-decoration : none;
        }
    </style>
@endsection


@section('bottom-scripts')
    <script>
        function getAuto(){
            return 1;
        }
    </script>
    <script src="/js/mobilebot/jquery.min.js"></script>
    <script src="/js/mobilebot/jquery.cookie.js"></script>
    <script src="/js/mobilebot/jquery.zclip.min.js"></script>
    <script src="/js/mobilebot/main3.js"></script>
    <script src="/js/mobilebot/main.js"></script>
@stop


@section('page-layout')
    <!-- HEADER -->

    <div id="stickyPop" class="pupup mobile-hide">
        <div class="row">
            <div class="box box-6 left">
                <input type="text" name="yourCode" id="yourCode" value="">
            </div>
            <div class="box box-6 left">
                <input type="image" id="copyBtn" src="/img/mobilebot/copyCode.png"
                       style="  width: 101px;height: 38px;margin-top: 167px;padding-left: 33px;"/>
            </div>
        </div>
    </div>

    <div id="stickyPop2" class="pupup2 mobile-hide">
        <div class="row">
            <div class="box box-12">
                <p class="counterNum" style="  margin-left: 198px;margin-top: 86px;font-size: 28px;color: white;"></p>
            </div>
        </div>
        <div class="row">
            <div class="box box-12">
                <p class="counterNum2" style="  margin-left: 293px;margin-top: 48px;font-size: 18px;color: white;"></p>
            </div>
        </div>
    </div>

    <div class="topContainer">
        <div class="fullWidth header">
            <div class="container">
                <div class="row pt30 pb30">
                    <div class="box box-4 left AC white-text">
                        Languages:
                        <div class="box box-12">
                            <a href="http://aplmobilebot.co/index1_ger.php"><img
                                        src="/img/mobilebot/GER.png"
                                        style="width: 30px;margin: 0 5px;height: 20px;"/></a>
                            <a href="http://aplmobilebot.co/index1.php"><img src="/img/mobilebot/ENG.png"
                                                                             style="border:1px solid white;width: 30px;margin: 0 5px;height: 20px;"/></a>
                        </div>
                    </div>
                    <div class="box box-12 AC">
                        <div class="box box-12 left">
                            <img src="/img/mobilebot/updatedLogo.png" alt="logo"
                                 class="theLogo maxWidth"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="fullWidth first_section ">
            <div class="container">
                <div class="row pt46 pb27">
                    <div class="box box-2 left h1 tablet-hide"></div>
                    <div class="box box-8 AC left black-text tablet-box-12" style="font-weight:300;">
                        <span style="font-size:50px;">The 1 Trillion Dollar Company</span><br/>
                        <span style="font-size:25px;">Watch This Video To Obtain An Access Code!</span>
                    </div>
                    <div class="box box-2 left h1 tablet-hide"></div>
                </div>
                <div class="row">
                    <div class="box box-2 left h1 tablet-hide leftShots">
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_1.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_2.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_3.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                    </div>
                    <div class="box box-8 AC left tablet-box-12 video">
                        <div class="row">
                            <div class="box box-12">
                                <div id="ytplayer">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box box-2 left h1 tablet-hide rightShots">
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_4.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_5.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div clas="box box-12 AC">
                                <img src="/img/mobilebot/screenShot_6.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fullWidth hide mobile-show">
            <div class="container">
                <div class="row pt30">
                    <div class="box box-12 AC leftShots_mobile">
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_1.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_2.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_3.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="box box-12 AC rightShots_mobile">
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_4.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_5.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box box-12">
                                <img src="/img/mobilebot/screenShot_6.png" alt="software"
                                     class="maxWidth"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt30">
                    <div class="box box-12 AC mobilePop1">
                        <div class="row">
                            <div class="box box-6 left">
                                <input type="text" name="yourCode" id="yourCode2" value=""
                                       style="  margin-top: 180px;margin-left: 228px;width: 46%;">
                            </div>
                            <div class="box box-6 left">
                                <input type="image" id="copyBtn2" src="/img/mobilebot/copyCode.png"
                                       style="  width: 101px;height: 38px;margin-top: 180px;padding-right: 27px;"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt30">
                    <div class="box box-12 AC mobilePop2 ml11">
                        <div class="row">
                            <div class="box box-12">
                                <p class="counterNum pt84 pr62"
                                   style="  margin-left: 198px;font-size: 28px;color: white;"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box box-12">
                                <p class="counterNum2 pr57 pt50"
                                   style="  margin-left: 293px;font-size: 18px;color: white;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="fullWidth second_section AC" id="copySection">
        <div class="container AC" style="font-weight:300;color:white;">
            <div class="row pt35">
                <div class="box box-12">
                    <p class="fs40">
                        This Website Is By Personal Invite Only
                    </p>
                </div>
            </div>
            <div class="row pt25">
                <div class="box box-12">
                    <p class="fs20">
                        Without an invitation key, there is no way to access this opportunity.<br/>
                        Type In your Access code & Email below to access the APL bot
                    </p>
                </div>
            </div>
            <div class="row pt23">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-4 left tablet-box-12">
                    <form method="post" action="http://aplmobilebot.co/gr.php">
                        <div class="absolute black-text accessTitle">
                            <p>
                                Your Access Code:
                            </p>
                        </div>
                        <input type="text" name="access_code" id="access_code" style="height:57px;font-size:20px;"
                               placeholder="Type your access code"/>
                </div>
                <div class="box box-4 left tablet-box-12">
                    <input type="email" name="email" style="height:57px;font-size:20px;margin-top:5px;"
                           placeholder="Type your email" required/>
                </div>
                <div class="box box-3 left tablet-box-12">
                    <input type="image" class="tablet-pt16" name="submit"
                           src="/img/mobilebot/access_btn.png"/>
                </div>
                </form>
            </div>
            <div class="row fs17 pt27 pb34">
                <div class="box box-12" style="font-weight:500;">
                    <p>Disclaimer: This site and the products and services offered on this site are not associated,
                        affiliated, endorsed,<br/>
                        or sponsored by Google or APL, nor have they been reviewed tested or certified by Google or APL.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth AC">
        <div class="container">
            <div class="row">
                <div class="box box-12">
                    <span class="AC  fs30"
                          style="font-weight:500;">As Iwatches Roll Out People Are Profiting like THIS:</span>
                </div>
            </div>
            <div class="row pt10">
                <div class="bigShots">
                    <div class="box box-6 left">
                        <img src="/img/mobilebot/big/screenShot_1-big.png"/>
                    </div>
                    <div class="box box-6 left">
                        <img src="/img/mobilebot/big/screenShot_2-big.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth AC welcome_section">
        <div class="container">
            <div class="row pt40">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">Welcome To The APL Bot</p>
                </div>
            </div>
            <div class="row">
                <div class="box box-12">
                    <img src="/img/mobilebot/appleProds.jpg" alt="apl" class="maxWidth"/>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth AL pb72 pt77" style="background:#f2f2f2;color:#212121;">
        <div class="container">
            <div class="row">
                <div class="box box-7 left tablet-box-12">
                    <div class="row">
                        <div class="box box-12">
                            <p class="fs40 tablet-AC" style="font-weight:300;">APL's Historic Earnings</p>
                            <p class="fs20 pt35" style="font-weight:300;">
                                Here are digested the results from APL's successful quarter.<br/> We have here the usual
                                series of comparisons of the numbers to the GDP of countries.

                                It is important to point out that you cannot compare the turnover of a company to the
                                GDP of a country. One is the value added in that economy,
                                The other is simply what it says on the can, the turnover.

                                If we want to compare the two things as economic units we’ve got to compare like with
                                like: either turnover with turnover or value added with value added. Which is exactly
                                wha we I did here.

                            </p>
                            <p class="fs24 pt39 tablet-AC">
                                APL Is 0.5% Of US GDP, 0.15% Of Global GDP
                            </p>
                            <p class="fs12 pt57" style="font-weight:300;">
                                Source:
                                http://www.forbes.com/sites/timworstall/2015/01/30/apple-is-0-5-of-us-gdp-0-15-of-global-gdp/
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box box-5 left tablet-box-12 AC">
                    <img src="/img/mobilebot/mac.png" alt="APL mac" class="maxWidth"/>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth testimonials AC pb34" style="color:#212121;">
        <div class="container">
            <div class="row pt45">
                <div class="box box-12">
                    <p class="fs40 ml38 tablet-ml0 pb26" style="font-weight:300;">Testimonials</p>
                </div>
            </div>
            <div class="row pt40 mobile-pt2">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12 test_box tablet-AC">
                    <!-- TEXT -->
                    <div class="row pt50">
                        <div class="box box-12">
                            <p class="fs19" style="font-weight:300;font-style: italic;">
                                “I am a big fan of APL products and I was amazed when I discovered that I can make
                                millions using this amazing bot system! Thanks Mr. Erikkson!”
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box fs22 white-text AL box-6 left mt88 tablet-mt91 name">
                            Nick Murray
                        </div>
                        <div class="box AR box-6 left mt88 tablet-mt84 flag">
                            <img src="/img/mobilebot/fr.png" alt="france" class="maxWidth"/>
                        </div>
                    </div>

                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12 test_box tablet-AC tablet-mt35">
                    <!-- TEXT -->
                    <div class="row pt50">
                        <div class="box box-12">
                            <p class="fs19" style="font-weight:300;font-style: italic;">
                                “The iPhone almost cost double here in Brazil but it doesn’t matter anymore because my
                                bank account is tripled using this bot system. Thanks Gunni!”
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box fs22 white-text AL box-6 left mt60 tablet-mt91 name">
                            Ricardo Montel
                        </div>
                        <div class="box AR box-6 left mt60 tablet-mt84 flag">
                            <img src="/img/mobilebot/br.png" alt="france" class="maxWidth"/>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pt40 mobile-pt2">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12 test_box tablet-AC tablet-mt35">
                    <!-- TEXT -->
                    <div class="row pt50">
                        <div class="box box-12">
                            <p class="fs19" style="font-weight:300;font-style: italic;">
                                “I am always a fan of the late Steve Jobs but now I am a great fan of Gunnard Erikkson.
                                His system rocks! Thanks Man!”
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box fs22 white-text AL box-6 left mt86 tablet-mt91 name">
                            Carson Baynes
                        </div>
                        <div class="box AR box-6 left mt86 tablet-mt84 flag">
                            <img src="/img/mobilebot/usa.png" alt="usa" class="maxWidth"/>
                        </div>
                    </div>

                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12 test_box tablet-AC tablet-mt35">
                    <!-- TEXT -->
                    <div class="row pt50">
                        <div class="box box-12">
                            <p class="fs19" style="font-weight:300;font-style: italic;">
                                “At first, I thought that this is just a regular bot thing until I’ve checked on my
                                account. Boom... This is the best! Just bought
                                the new MacBook and a Porsche.”
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="box fs22 white-text AL box-6 left mt66 tablet-mt91 name">
                            Antoine Michaels
                        </div>
                        <div class="box AR box-6 left mt59 tablet-mt84 flag">
                            <img src="/img/mobilebot/uk.png" alt="uk" class="maxWidth"/>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth things AC" style="color:#212121;background:#f2f2f2;">
        <div class="container">
            <div class="row pt30">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">Things That You Need To Know</p>
                </div>
            </div>
            <div class="row pt43 AL">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-4 left tablet-box-12">
                    <div class="row">
                        <div class="box box-12 fs20" style="font-weight:300;">
                            The Company is on pace for its fifth straight
                            record close this year.
                        </div>
                    </div>
                    <div class="row pt19">
                        <div class="box box-12 fs20 tablet-AC" style="font-weight:300;">
                            <img src="/img/mobilebot/appleChart.png" alt="chart" class="maxWidth"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box box-12 fs9">
                            Source:
                            http://www.forbes.com/sites/timworstall/2015/01/30/apple-is-0-5-of-us-gdp-0-15-of-global-gdp/
                        </div>
                    </div>
                </div>
                <div class="box box-1 left tablet-hide"></div>
                <div class="box box-5 left tablet-box-12 tablet-pt22">
                    <div class="row">
                        <div class="box box-12 fs20" style="font-weight:300;">
                            APL launched the IPO of its stock to the investing public and now the market value of the
                            company has risen over <b>50,000%</b>.
                        </div>
                    </div>
                    <div class="row">
                        <div class="box box-12 tablet-AC">
                            <img src="/img/mobilebot/oldApple.jpg" alt="apl" class="maxWidth"/>
                        </div>
                    </div>
                    <div class="row fs20">
                        <div class="box box-12">
                            From its first day close, the share price has risen <b>23,100%.</b>
                        </div>
                    </div>
                </div>
                <div class="box box-1  left h1 tablet-hide"></div>
            </div>
            <div class="row pt28 pb38">
                <div class="box box-12 h1 black-back">
                </div>
            </div>

            <div class="row pt46 ">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box AL fs17 box-5 left tablet-box-12" style="font-weight:300;">
                    At the Nasdaq peak in March 2000, Microsoft and Exxon, the second<br/> and third largest companies
                    in the S&P 500, were 26 and 13 times<br/>larger than APL, respectively.<br/><br/>

                    Currently, APL is now 1.86 times the size of Microsoft and 1.75 times<br/> the size of Exxon.
                </div>
                <div class="box box-4 left tablet-box-12">
                    <img src="/img/mobilebot/logos.jpg" alt="logos" class="maxWidth"/>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>
            <div class="row AL">
                <div class="box box-1 left tablet-hide h1"></div>
                <div class="box box-10 left tablet-box-12 fs17" style="font-weight:300;">
                    APL first passed Exxon Mobil, the largest company back in 2011, in market value on Aug. 10, 2011,
                    and continuously been larger than Exxon Mobil since Aug. 1, 2013.
                </div>
                <div class="box box-1 left tablet-hide h1"></div>
            </div>

            <div class="row company list pt40 pb40">
                <div class="box box-12">
                    <img src="/img/mobilebot/companyList.png" alt="companies" class="maxWidth"/>
                </div>
            </div>

            <div class="row AL AC">
                <div class="box box-12">
                    <img src="/img/mobilebot/aplGraph.jpg" alt="apl" class="maxWidth"/>
                </div>
            </div>

        </div>
    </div>

    <div class="fullWidth AC jobsEra pt32 pb32" style="color:#212121;">
        <div class="container">
            <div class="row">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">The Steve Jobs Era</p>
                </div>
            </div>
            <div class="row pt20">
                <div class="box box-12">
                    <img src="/img/mobilebot/years.jpg" alt="steve jobs era" class="maxWidth"/>
                </div>
            </div>

        </div>
    </div>

    <div class="fullWidth white-text tablet-AC" style="background:#555555;">
        <div class="container">
            <div class="row">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-1 left tablet-box-12 mt10">
                    <img src="/img/mobilebot/small_logo.png" alt="logo" class="maxWidth"/>
                </div>
                <div class="box box-3 left tablet-box-12">
                    <p class="fs17 mt20" style="font-weight:300;">
                        Without an invitation key,<br/>
                        there is <label style="font-weight:500;">no way</label> to access<br/>
                        this opportunity.
                    </p>
                </div>
                <div class="box box-6 fs17 left tablet-box-12 darkTxt" style="font-weight:300;">
                    <p class="mt20">Everyone can use the APL Bot, but the moment 50 million in deposits are reached, the
                        deposit function will cease to function until enough withdrawals occur to allow deposits to
                        resume.</p>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>
        </div>
    </div>

    <div class="fullWidth AC pb32">
        <div class="container">
            <div class="row">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">What Really Is The APL Bot?</p>
                </div>
            </div>
            <div class="row AL pt40">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12" style="font-size:17px;font-weight:300;">
                    <p>
                        This website is by <label style="color:#0076ff;font-weight:500;">personal invite only.</label>
                        If you have an access code, feel free to type it in below, but I still strongly encourage you to
                        watch this short 10 minute presentation. Maybe a friend brought you to this website, but I make
                        it mandatory to listen to a few words of advice first before you might be allowed to profit
                        heavily with APL. <label style="color:black;font-weight:500;">Without an invitation key<label>,
                                there is <label style="color:#0076ff;font-weight:500;">no way</label> to access this
                                once in a lifetime opportunity.
                    </p>

                    <p class="pt30">
                        This is not one of these binary option scams you’re probably used to seeing, so I give you the
                        benefit of having a brain. However, If you can’t even listen to some basic guidelines before
                        making about <label style="color:black;font-weight:500;">230% a month</label> and possibly
                        <label style="color:black;font-weight:500;">MILLIONS in 2015</label>, yes real millions not
                        stupid promises.. <label style="color:#0076ff;font-weight:500;">real money</label> backed up
                        by indisputable proof.
                    </p>
                    <p class="pt30">
                        <label style="color:black;font-weight:500;">I make insane money</label> by Using APL Mobile Bot
                        everyday, 5 days a week, with hundreds of transactions a day. Yes, hundreds! I capitalize
                        heavily
                        on the small movements and the APL followers that punish and reward the stock with news coming
                        out
                        on a daily and even hourly basis.
                    </p>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-5 left tablet-box-12" style="font-size:20px;font-weight:300;">
                    <p>
                        The <label style="color:black;font-weight:500;">APL cult worshippers</label> are a huge family,
                        and like sheep, they follow each other. What an ideal setup for an ‘in the know’ stock trader
                        like me with an insider source in both the development center and their press release center! I
                        automated it. Not by myself of course, but I took what worked for me 2 years ago and <label
                                style="color:black;font-weight:500;">"accelerated"</label> it a hundred times!
                    </p>
                    <p class="pt30">
                        <label style="color:black;font-weight:500;">That’s right</label> -- insider info, automatization
                        and leverage have been the <label style="color:black;font-weight:500;">keys to my
                            success!</label>
                    </p>
                    <p class="pt30">
                        <img src="/img/mobilebot/appleLaptop.png" class="maxWidth" alt="apl"/>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth fs17 pt22 white-text pb21" style="background:#343434;font-weight:300;">
        <div class="container AC">
            <div class="row">
                <img src="/img/mobilebot/howItWorks.jpg" alt="apl" class="maxWidth"/>
            </div>
        </div>
    </div>

    <div class="fullWidth pb38" style="background:#f2f2f2;">
        <div class="container">
            <div class="row fs40 pt44">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-7 left tablet-box-12">
                    <div class="row">
                        <div class="box box-12">
                            <p class="fs40 tablet-AC" style="font-weight:300;">Meet Gunnar "APL Bot” Erikkson</p>
                        </div>
                    </div>
                    <div class="row AL fs17 black-text pt30 mobile-pb43" style="font-weight:300;">
                        <div class="box box-12">
                            <p>
                                My name is <label style="color:black;font-weight:500;">Gunnar Errikson</label>. I made
                                <label style="color:#0076ff;font-weight:500;">over 26 million</label> from <label
                                        style="color:black;font-weight:500;">APL stock</label> in
                                the last 5 years, and I’m going show you how to do the same. That’s right, you’re going
                                to earn at <label style="color:black;font-weight:500;">LEAST 500,000 USD</label> in 2015
                                with my help and expertise.
                                And this is a low goal achievable by <label
                                        style="color:black;font-weight:500;">ANYONE</label> following me. I’m setting it
                                low on purpose because I’m known for under promising and <label
                                        style="color:black;font-weight:500;">OVER</label> delivering, big time.
                            </p>
                            <p class="pt30">
                                Well as a multimillionaire it is and never was my intention to gather fame. As soon as
                                you step into the light you will be subject to a lot of rumors and discussions and I’m
                                not that kind of person. I have a loving wife and 2 beautiful children, daughters that
                                do not need this kind of attention. I am very happy
                                and contented in my life so <label style="color:#0076ff;font-weight:500;">I want to
                                    share my secret to you</label>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box box-3 tablet-AC left tablet-box-12">
                    <img src="/img/mobilebot/ipad.png" class="maxWidth" alt="apl"/>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>

            <div class="row fs40 pt44">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-10 left tablet-box-12">
                    <div class="row AL fs17" style="font-weight:300;">
                        <div class="box box-12">
                            <p>
                                I am presenting to you <label style="color:black;font-weight:500;">APL bot</label>. This
                                is once my best kept secret but I am giving it for <label
                                        style="color:#0076ff;font-weight:500;">FREE</label>, so you won’t have to pay A
                                DIME for this. You’ll learn how to use it for yourself to make at <label
                                        style="color:black;font-weight:500;">LEAST</label> (at LEAST!) <label
                                        style="color:#0076ff;font-weight:500;">500,000 in 2015</label>, yes this very
                                year, starting from <label style="color:black;font-weight:500;">SCRATCH</label>, with no
                                big investment sum needed. And most importantly, you’ll understand without any
                                doubt as to why I made this very page, and how I profit from it. And here’s the kicker
                                -- I’ll tell you without charging you
                                a single penny, truly a <label style="color:black;font-weight:500;">WIN-WIN</label>
                                situation.
                            </p>
                            <p class="pt30">
                                But as it is right now, I’m happy with 1% of the <label
                                        style="color:black;font-weight:500;">PROFITS</label> on 50 million trading
                                volume, because I know that the APL
                                bot makes occasionally about <label style="color:#0076ff;font-weight:500;">230% a
                                    month</label> on all deposits, and the best month so far was back in April 2014.
                            </p>
                            <p class="pt30">
                                230% on 50 million equals <label style="color:#0076ff;font-weight:500;">115 million in
                                    PROFITS</label>, which means 1.15 million for me -- a pretty nice sum. Okay, that
                                was
                                a super hefty example. The bot usually makes between <label
                                        style="color:#0076ff;font-weight:500;">30 and 120% profits a month</label>, but
                                on the other hand,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>

            <div class="row">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-7 left tablet-box-12">
                    <div class="row AL fs17" style="font-weight:300;">
                        <div class="box box-12">
                            <p>
                                I did <label style="color:black;font-weight:500;">NOT</label> have a losing month,
                                <label style="color:black;font-weight:500;">EVER</label>, nor do I want to start with
                                that now since
                                I only get 1% of your profits. If you lose, I get nothing. So we won’t want to start
                                with that right? It’s decision time. You either give this a spin now or you WILL
                                regret your inaction later, and I can basically <label
                                        style="color:black;font-weight:500;">GUARANTEE</label> that. By now, your
                                personal activation code is displayed right under this video. Use it to access
                                the bot, but rememebr this: if you fail to fulfill your end of the bargain and
                                don’t pay what is due on your profits by the end of 30 days, I will deactivate
                                your account and never activate it again. <label style="color:#0076ff;font-weight:500;">You
                                    have been warned</label>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box box-3 left tablet-AC tablet-box-12 mobile-pt10">
                    <img src="/img/mobilebot/iphone.png" alt="iphone" class="maxWidth pt21"/>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>
            <div class="row">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-10 left tablet-box-12">
                    <p class="pt30 AL fs17" style="font-weight:300;">
                        <label style="color:black;font-weight:500;">Sign-up Now</label> and learn more about me and who
                        knows... <label style="color:black;font-weight:500;">You Could Be The Next Millionaire!</label>
                    </p>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>

        </div>
    </div>

    <div class="fullWidth second_section AC">
        <div class="container AC" style="font-weight:300;color:white;">
            <div class="row pt35">
                <div class="box box-12">
                    <p class="fs40">
                        This Website Is By Personal Invite Only
                    </p>
                </div>
            </div>
            <div class="row pt25">
                <div class="box box-12">
                    <p class="fs20">
                        Without an invitation key, there is no way to access this opportunity.<br/>
                        To get an access code, type your email and click the button.
                    </p>
                </div>
            </div>
            <div class="row pt23">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-4 left tablet-box-12">
                    <form method="post" action="http://aplmobilebot.co/gr.php">
                        <input type="text" name="access_code" style="height:57px;font-size:20px;" id="access_code2"
                               placeholder="Type your access code"/>
                </div>
                <div class="box box-4 left tablet-box-12">
                    <input type="email" name="email" style="height:57px;font-size:20px;margin-top:5px;"
                           placeholder="Type your email" required/>
                </div>
                <div class="box box-3 left tablet-box-12">
                    <input type="image" class="tablet-pt16" name="submit"
                           src="/img/mobilebot/access_btn.png"/>
                    </form>
                </div>
            </div>
            <div class="row fs17 pt27 pb34">
                <div class="box box-12">
                    <p>Disclaimer: This site and the products and services offered on this site are not associated,
                        affiliated, endorsed,<br/>
                        or sponsored by Google or APL, nor have they been reviewed tested or certified by Google or APL.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="fullWidth AC pt36 pb40" style="color:#212121;">
        <div class="container">
            <div class="row">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">Simple Facts About APL</p>
                </div>
            </div>
            <div class="row">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-10 left tablet-box-12">
                    <img src="/img/mobilebot/facts.jpg" alt="facts" class="maxWidth"/>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>
            <div class="row AC pt35 pb35">
                <div class="box box-12">
                    <p class="fs40" style="font-weight:300;">5 Reasons To Make Profit From APL Mobile Bot</p>
                </div>
            </div>
            <div class="row">
                <div class="box box-1 left h1 tablet-hide"></div>
                <div class="box box-10 left tablet-box-12">
                    <img src="/img/mobilebot/facts2.jpg" alt="facts" class="maxWidth"/>
                </div>
                <div class="box box-1 left h1 tablet-hide"></div>
            </div>
        </div>
    </div>

    <div class="fullWidth AC" style="background:#555555;color:#2d2d2d;">
        <div class="container">
            <div class="row pt30" style="color: white;font-size:16px;">
                <p>
                    Important Risk Note: Trading binary options can generate significant benefits but also involves a
                    risk of partial or full funds loss and should be considered by initial investors. we strongly advise
                    that you read our terms & conditions and disclaimer page before making any investment. customers
                    must be aware of their individual capital gain tax liability in their country of residence.

                    It is against the law to solicit U.S. persons to buy and sell commodity options, even if they are
                    called \prediction' contracts, unless they are listed for trading and traded on a CFTC-registered
                    exchange or unless legally exempt.
                </p>
                <p class="mt10">
                    Disclaimer: This site and the products and services offered on this
                    site are not associated, affiliated, endorsed, or sponsored by Google
                    or APL, nor have they been reviewed tested or certified by Google or
                    APL.
                </p>
            </div>
            <div class="row">
                <div class="box box-12 fs12" style="line-height: 5;">
                    <a href="http://aplmobilebot.co/members/terms.html" target="_blank">Terms & Conditions /</a> <a
                            href="http://aplmobilebot.co/members/earnings.html" target="_blank">Risk Disclaimer /</a> <a
                            href="mailto:support@appmobilebot.com" target="_blank">Contact Us /</a>
                </div>
            </div>
        </div>
    </div>


    <div id="exitOverlay"></div>
    <div id="exitContent">
        <img src="/img/mobilebot/ex.png" onclick="closeExitPop()"
             style="position: absolute;top:-17px;right:-20px;cursor:pointer;"/>

        <iframe id='exitVideo' width="600" height="270" src="https://www.youtube.com/embed/_zqZpa1U_mE" frameborder="0"
                allowfullscreen  autoplay></iframe>
        <form id="myForm" action="http://aplmobilebot.co/gr.php" method="post">
            <input type="email" required placeholder="Enter Your E-Mail Address" name="email" id="exitInput"/>
            <input type="submit" id="exitSubmit" value="GET FREE ACCESS"/>
        </form>
    </div>

@endsection