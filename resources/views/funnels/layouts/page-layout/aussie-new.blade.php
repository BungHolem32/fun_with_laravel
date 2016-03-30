@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Startup CSS -->
    {!! $page->appendAsset(url('css/aussie-new/style-0.css')) !!}
    <!--[if lt IE 9]>
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
@append
@section('bottom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
    @com('funnel_scripts')
    <script src="/js/fancybox/jquery.fancybox.js"></script>
    <script>
        var nm = ["Harvey", "Christopher", "David", "Morgan", "Jason", "Travis", "Charlie", "Robert", "Henry", "Kieran", "Charles", "Joseph", "Ellis", "Billy", "Andrew", "Johnny", "George", "Sebastian", "Cameron", "Tory", "Joel", "Adam", "Bryce", "Dwayne", "Vincent", "Leon", "Aidan", "Aidan", "David", "Jacob", "Ben", "Alex", "Enrique", "Dennis", "Nathan", "Charles", "Robert", "Alfie", "Dominic", "Leon", "John", "Daniel", "Charles", "Romeo", "Noah", "Anthony", "James", "Mohammed", "Louis", "Joseph", "Ellis", "Kai", "Jay", "Noah", "Lewis", "Anthony", "Jamie", "Elliot", "Ronald", "Troy", "Reece", "Richard", "Joel", "Callum", "Jack", "Richard", "Nicholas", "Cameron", "Harry", "William", "Lyle", "Frank", "Norman", "Anthony", "Morgan", "Geoffrey", "Alejandro", "Zak", "Anthony", "Kieran", "Ross", "Paul", "Sam", "Richard", "Michael", "Roger", "Charles", "Reece", "Brandon", "Robert", "Luca", "Harrison", "Ryan", "Taylor", "Frank", "Larry", "Billy", "Sam", "Finlay", "Zara", "Georgia", "Sylvie", "Kiera", "Margaret", "Patria", "Ava", "Diane", "Skye", "Helen", "Jennifer", "Isabella", "Faith", "Jessica", "Penny", "Rebecca", "Summer", "Tamara", "Tamika", "Magdalene", "Wendy", "Genevieve", "Stephanie", "Erin", "Abby", "Ann", "Abbie", "Leigh", "Shanna", "Tilly", "Laura", "Mary", "Paula", "Isabel", "Ella", "Tatiana", "Mary", "Tegan", "Cynthia", "Abigail", "Lauren", "Laura", "Katherine", "Naomi", "Barbara", "Melisa", "Pamela", "Leeann", "Jodie", "Terri", "Caitlin", "Roberta", "Daisy", "Molly", "Frieda", "Louise", "Elizabeth", "Stella", "Billie", "Gracie", "Sienna", "Katie", "Mildred", "Kayleigh", "Christy", "Kiera", "Yun", "Courtney", "Tegan", "Sheila", "Ray", "Lydia", "Mamie", "Keira", "Matilda", "Sonya", "Ava", "Cerys", "Eleanor", "Grace", "Jodie", "Sharon", "Elva", "Eleanor", "Freya", "Bessie", "Sofia", "Amelie", "Brenda", "Poppy", "Tegan", "Sienna", "Leah", "Antoinette", "Zoe"];
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

        var images = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg", "13.jpg", "14.jpg", "15.jpg", "16.jpg", "17.jpg", "18.jpg", "19.jpg", "20.jpg", "21.jpg", "22.jpg", "23.jpg", "24.jpg", "25.jpg", "26.jpg", "27.jpg", "28.jpg", "29.jpg", "30.jpg", "31.jpg", "32.jpg", "33.jpg", "34.jpg", "35.jpg", "36.jpg", "37.jpg", "38.jpg", "39.jpg", "40.jpg", "41.jpg", "42.jpg", "43.jpg", "44.jpg", "45.jpg", "46.jpg", "47.jpg", "48.jpg", "49.jpg", "50.jpg", "51.jpg", "52.jpg", "53.jpg", "54.jpg", "55.jpg", "56.jpg", "57.jpg", "58.jpg", "59.jpg", "60.jpg", "61.jpg", "62.jpg", "63.jpg", "64.jpg", "65.jpg", "66.jpg", "67.jpg", "68.jpg", "69.jpg", "70.jpg", "71.jpg", "72.jpg", "73.jpg", "74.jpg", "75.jpg", "76.jpg", "77.jpg", "78.jpg", "79.jpg", "80.jpg", "81.jpg", "82.jpg", "83.jpg", "84.jpg", "85.jpg", "86.jpg", "87.jpg", "88.jpg", "89.jpg", "90.jpg", "91.jpg", "92.jpg", "93.jpg", "94.jpg", "95.jpg", "96.jpg", "97.jpg", "98.jpg", "99.jpg", "1(1).jpg", "2(1).jpg", "3(1).jpg", "4(1).jpg", "5(1).jpg", "6(1).jpg", "7(1).jpg", "8(1).jpg", "9(1).jpg", "10(1).jpg", "11(1).jpg", "12(1).jpg", "13(1).jpg", "14(1).jpg", "15(1).jpg", "16(1).jpg", "17(1).jpg", "18(1).jpg", "19(1).jpg", "20(1).jpg", "21(1).jpg", "22(1).jpg", "23(1).jpg", "24(1).jpg", "25(1).jpg", "26(1).jpg", "27(1).jpg", "28(1).jpg", "29(1).jpg", "30(1).jpg", "31(1).jpg", "32(1).jpg", "33(1).jpg", "34(1).jpg", "35(1).jpg", "36(1).jpg", "37(1).jpg", "38(1).jpg", "39(1).jpg", "40(1).jpg", "41(1).jpg", "42(1).jpg", "43(1).jpg", "44(1).jpg", "45(1).jpg", "46(1).jpg", "47(1).jpg", "48(1).jpg", "49(1).jpg", "50(1).jpg", "51(1).jpg", "52(1).jpg", "53(1).jpg", "54(1).jpg", "55(1).jpg", "56(1).jpg", "57(1).jpg", "58(1).jpg", "59(1).jpg", "60(1).jpg", "61(1).jpg", "62(1).jpg", "63(1).jpg", "64(1).jpg", "65(1).jpg", "66(1).jpg", "67(1).jpg", "68(1).jpg", "69(1).jpg", "70(1).jpg", "71(1).jpg", "72(1).jpg", "73(1).jpg", "74(1).jpg", "75(1).jpg", "76(1).jpg", "77(1).jpg", "78(1).jpg", "79(1).jpg", "80(1).jpg", "81(1).jpg", "82(1).jpg", "83(1).jpg", "84(1).jpg", "85(1).jpg", "86(1).jpg", "87(1).jpg", "88(1).jpg", "89(1).jpg", "90(1).jpg", "91(1).jpg", "92(1).jpg", "93(1).jpg", "94(1).jpg", "95(1).jpg"];


        setInterval(autoRefresh(), 6000);
        var cnt = 1;
        var num = null;

        function autoRefresh() {
            var counter = rand_num(0, images.length);
            var dc = rand_num(0, data.length);
            var oldtime = new Date();
            var old_time = oldtime.getSeconds();
            var feed_name1 = $('.facebook-message');

//            document.getElementById("facebook-tab").innerHTML = "<div style=\'clear:both;\'></div>\n<div class=\'feed_name1\'>\n    <img src=\'/img/aussie-new/fw/" + images[counter] + "\' height=\'40\'/>\n    <b><a class=\'fbname social-name\' href=\'#\'>" + nm[counter] + "</a></b>\n    <br/>\n    <span id=\'curr_time_" + cnt + "\' class=\'ctime1\' sec=\'60\'>1 minute</span>\n    <div style=\'clear:both;\'></div>\n    <div id=\'data1\' class=\'fb-data\'>\n        <span> " + data[dc] + "</span>\n    </div>\n    <div class=\'facebook-tab\'>Like <span class=\'dash\'>-</span> Comment <span class=\'dash\'>-</span> Share</div>\n</div> " + document.getElementById("facebook-tab").innerHTML;
            document.getElementById("facebook-tab").innerHTML = "<div class=\'facebook-message\'>\n    <div " +
                    "class=\"fb-img-name-time head\">\n    " +
                    "<div class=\'fb-img col-md-3 col-sm-3 col-xs-3 pull-left\'>\n        " +
                    "<img class=\'fb-human-image img-responsive\' src=\"/img/aussie-new/fw/" + images[counter] + "\" alt=\"\">\n    " +
                    "</div>\n        <div class=\'fb-name-n-time col-md-3 text-left pull-left\'>\n        " +
                    "<h4 class=\'fb-name bold\'>" + nm[counter] + "</h4>\n        " +
                    "<h5 id=\'curr_time_"+ cnt + "\' class=\'ctime1 fb-time\' data-sec=\'60\' class=\'fb-time\'>1 minute</h5>\n    " +
                    "</div>\n\n    </div>\n" +
                    "<div class=\"bottom\">\n    " +
                    "<p class=\"content text-left col-md-12 col-sm-12 col-xs-12\"> " + data[dc] + "<span" +
                    "class=\"bold\"></span>\n        </p>\n    " +
                    "<div class=\'fb-tab col-md-12 col-sm-12 col-xs-12 pull-left text-left\'>Like <span class=\'dash\'>-</span> Comment\n            <span class=\'dash\'>-</span> Share" +
                    "</div>\n    </div>\n</div>"+document.getElementById("facebook-tab").innerHTML;
            if (feed_name1.length > 4) {
                console.log(feed_name1.length);
                $('.facebook-message').last().remove();
            }

            cnt++;

            for (i = 1; i < cnt; i++) {
                var day = hour = minute = 0;
                sec1 = $("#curr_time_" + i).data('sec');
                sec1 = parseInt(sec1) + 60;//rand_num(60,360);
                $("#curr_time_" + i).attr('data-sec', sec1)
                minute = sec1 / 60;
                if (minute > 60)
                    hour = minute / 60;
                if (hour > 24)
                    day = hour / 24;

                if (day > 0)
                    $("#curr_time_" + i).html(parseInt(day) + " days");
                else if (hour > 0)
                    $("#curr_time_" + i).html(parseInt(hour) + " hrs");
                else if (minute > 0)
                    $("#curr_time_" + i).html(parseInt(minute) + " mins");
            }
        }

        function rand_num(min, max) {
            var number = min + Math.floor(Math.random() * max);
            return number;
        }

        for (i = 0; i < 10; i++)
            autoRefresh();
    </script>
    <script>
        var nm = ["Harvey", "Christopher", "David", "Morgan", "Jason", "Travis", "Charlie", "Robert", "Henry", "Kieran", "Charles", "Joseph", "Ellis", "Billy", "Andrew", "Johnny", "George", "Sebastian", "Cameron", "Tory", "Joel", "Adam", "Bryce", "Dwayne", "Vincent", "Leon", "Aidan", "Aidan", "David", "Jacob", "Ben", "Alex", "Enrique", "Dennis", "Nathan", "Charles", "Robert", "Alfie", "Dominic", "Leon", "John", "Daniel", "Charles", "Romeo", "Noah", "Anthony", "James", "Mohammed", "Louis", "Joseph", "Ellis", "Kai", "Jay", "Noah", "Lewis", "Anthony", "Jamie", "Elliot", "Ronald", "Troy", "Reece", "Richard", "Joel", "Callum", "Jack", "Richard", "Nicholas", "Cameron", "Harry", "William", "Lyle", "Frank", "Norman", "Anthony", "Morgan", "Geoffrey", "Alejandro", "Zak", "Anthony", "Kieran", "Ross", "Paul", "Sam", "Richard", "Michael", "Roger", "Charles", "Reece", "Brandon", "Robert", "Luca", "Harrison", "Ryan", "Taylor", "Frank", "Larry", "Billy", "Sam", "Finlay", "Zara", "Georgia", "Sylvie", "Kiera", "Margaret", "Patria", "Ava", "Diane", "Skye", "Helen", "Jennifer", "Isabella", "Faith", "Jessica", "Penny", "Rebecca", "Summer", "Tamara", "Tamika", "Magdalene", "Wendy", "Genevieve", "Stephanie", "Erin", "Abby", "Ann", "Abbie", "Leigh", "Shanna", "Tilly", "Laura", "Mary", "Paula", "Isabel", "Ella", "Tatiana", "Mary", "Tegan", "Cynthia", "Abigail", "Lauren", "Laura", "Katherine", "Naomi", "Barbara", "Melisa", "Pamela", "Leeann", "Jodie", "Terri", "Caitlin", "Roberta", "Daisy", "Molly", "Frieda", "Louise", "Elizabeth", "Stella", "Billie", "Gracie", "Sienna", "Katie", "Mildred", "Kayleigh", "Christy", "Kiera", "Yun", "Courtney", "Tegan", "Sheila", "Ray", "Lydia", "Mamie", "Keira", "Matilda", "Sonya", "Ava", "Cerys", "Eleanor", "Grace", "Jodie", "Sharon", "Elva", "Eleanor", "Freya", "Bessie", "Sofia", "Amelie", "Brenda", "Poppy", "Tegan", "Sienna", "Leah", "Antoinette", "Zoe"];
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

        var images = ["27(1).jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg", "13.jpg", "14.jpg", "15.jpg", "16.jpg", "17.jpg", "18.jpg", "19.jpg", "20.jpg", "21.jpg", "22.jpg", "23.jpg", "24.jpg", "25.jpg", "26.jpg", "27.jpg", "28.jpg", "29.jpg", "30.jpg", "31.jpg", "32.jpg", "33.jpg", "34.jpg", "35.jpg", "36.jpg", "37.jpg", "38.jpg", "39.jpg", "40.jpg", "41.jpg", "42.jpg", "43.jpg", "44.jpg", "45.jpg", "46.jpg", "47.jpg", "48.jpg", "49.jpg", "50.jpg", "51.jpg", "52.jpg", "53.jpg", "54.jpg", "55.jpg", "56.jpg", "57.jpg", "58.jpg", "59.jpg", "60.jpg", "61.jpg", "62.jpg", "63.jpg", "64.jpg", "65.jpg", "66.jpg", "67.jpg", "68.jpg", "69.jpg", "70.jpg", "71.jpg", "72.jpg", "73.jpg", "74.jpg", "75.jpg", "76.jpg", "77.jpg", "78.jpg", "79.jpg", "80.jpg", "81.jpg", "82.jpg", "83.jpg", "84.jpg", "85.jpg", "86.jpg", "87.jpg", "88.jpg", "89.jpg", "90.jpg", "91.jpg", "92.jpg", "93.jpg", "94.jpg", "95.jpg", "96.jpg", "97.jpg", "98.jpg", "99.jpg", "1(1).jpg", "2(1).jpg", "3(1).jpg", "4(1).jpg", "5(1).jpg", "6(1).jpg", "7(1).jpg", "8(1).jpg", "9(1).jpg", "10(1).jpg", "11(1).jpg", "12(1).jpg", "13(1).jpg", "14(1).jpg", "15(1).jpg", "16(1).jpg", "17(1).jpg", "18(1).jpg", "19(1).jpg", "20(1).jpg", "21(1).jpg", "22(1).jpg", "23(1).jpg", "24(1).jpg", "25(1).jpg", "26(1).jpg", "27(1).jpg", "28(1).jpg", "29(1).jpg", "30(1).jpg", "31(1).jpg", "32(1).jpg", "33(1).jpg", "34(1).jpg", "35(1).jpg", "36(1).jpg", "37(1).jpg", "38(1).jpg", "39(1).jpg", "40(1).jpg", "41(1).jpg", "42(1).jpg", "43(1).jpg", "44(1).jpg", "45(1).jpg", "46(1).jpg", "47(1).jpg", "48(1).jpg", "49(1).jpg", "50(1).jpg", "51(1).jpg", "52(1).jpg", "53(1).jpg", "54(1).jpg", "55(1).jpg", "56(1).jpg", "57(1).jpg", "58(1).jpg", "59(1).jpg", "60(1).jpg", "61(1).jpg", "62(1).jpg", "63(1).jpg", "64(1).jpg", "65(1).jpg", "66(1).jpg", "67(1).jpg", "68(1).jpg", "69(1).jpg", "70(1).jpg", "71(1).jpg", "72(1).jpg", "73(1).jpg", "74(1).jpg", "75(1).jpg", "76(1).jpg", "77(1).jpg", "78(1).jpg", "79(1).jpg", "80(1).jpg", "81(1).jpg", "82(1).jpg", "83(1).jpg", "84(1).jpg", "85(1).jpg", "86(1).jpg", "87(1).jpg", "88(1).jpg", "89(1).jpg", "90(1).jpg", "91(1).jpg", "92(1).jpg", "93(1).jpg", "94(1).jpg", "95(1).jpg"];


        setInterval('autoRefresh()', 60000);
        var cnt = 1;
        var num = null;
        function autoRefresh() {
            num = $('.twt-message').length;
            var counter = rand_num(0, images.length);
            var dc = rand_num(0, data.length);
            var oldtime = new Date();
            var old_time = oldtime.getSeconds();
///*            document.getElementById("twt-message").innerHTML = "<div style='clear:both;'></div>" +
//                    "<div class='feed_name2'><img class='twt-image' src='/img/aussie-new/tw/" + images[counter] + "' height='50' />" +
//                    "<div id='data2' class='twt-data' style='display:inline-block'>" +
//                    "<b>" +
//                    "<a class='twtname social-name' href='#'>" + nm[counter] + "</a></b>" +
//                    "<span id='curr_time_" + cnt + "' class='ctime2' sec='60'>1 minute ago</span>" +
//                    "<p> " + data[dc] + "</p></div>" +
//      */              "</div>" + document.getElementById("tweets-tab").innerHTML;

            document.getElementById("tweets-tab").innerHTML =  " <div class=\"twt-message\">\n    <div " +
                    "class=\"twt-img-name-time head\">\n    " +
                    "<div class=\'twt-img col-md-3 col-sm-3 col-xs-3 pull-left\'>\n        " +
                    "<img class=\'twt-human-image img-responsive\' src=\"/img/aussie-new/fw/" + images[counter] + "\" alt=\"\">\n    " +
                    "</div>\n    <div class=\'twt-name-n-time col-md-9 col-sm-9 col-xs-9  text-left pull-left\'>\n        " +
                    "<h4 class=\'twt-name bold col-md-8\'>" + nm[counter] + "</h4>\n        " +
                    "<h5 id=\'curr_time_"+ cnt+"\' class=\'ctime1 twt-time pull-right\' data-sec=\'60\' class=\'twt-time\'>1 minute</h5>\n    " +
                    "</div>\n\n</div>\n" +
                    "<div class=\"bottom\">\n    " +
                    "<p class=\"content text-left col-md-12 col-sm-12 col-xs-12\"> " + data[dc] + "        <span" +
                    " class=\"bold\"></span>\n    </p>\n    " + "\n    </div>\n</div>"+ document.getElementById("tweets-tab").innerHTML;
            if (num > 4) {
                $('.twt-message').last().remove();
            }
            cnt++;


            for (i = 1; i < cnt; i++) {
                var day = hour = minute = 0;
                sec2 = $("#curr_time_" + i).data('sec');
                sec2 = parseInt(sec1) + 60;//rand_num(60,360);
                $("#curr_time_" + i).attr('data-sec', sec2);
                minute = sec1 / 60;
                if (minute > 60)
                    hour = minute / 60;
                if (hour > 24)
                    day = hour / 24;

                if (day > 0)
                    $("#curr_time_" + i).html(parseInt(day) + "d");
                else if (hour > 0)
                    $("#curr_time_" + i).html(parseInt(hour) + "h");
                else if (minute > 0)
                    $("#curr_time_" + i).html(parseInt(minute) + "m");
            }
        }

        function rand_num(min, max) {
            var number = min + Math.floor(Math.random() * max);
            return number;
        }

        for (i = 0; i < 10; i++)
            autoRefresh();

    </script>
    <script type="text/javascript" src="/js/aussie-new/funnel-object.js"></script>
    {!! $page->appendAsset(url('/js/firstPage.js')) !!}
@append

@section('page-layout')

    <div id="wrapper" class="first-page">

        <!--WORK LOGO FIXED AT TOP LEFT IN  THE SCREEN-->
        <section id="works-fixed">
            <img src="/img/aussie-new/callout.png" alt="">
        </section>

        {{--TOP STRIP POSITION ABSOLUTE--}}
        <section id="top_strip">
            <div class="container-fluid"></div>
        </section>

        <!--HEADER TAG-->
        <header class="container">

            <!--LOGOS PART-->
            <div class="logos row">

                <!--COMPANY LOGO-->
                <div id="company" class="pull-left col-md-2 col-sm-2 col-xs-2  ">
                    <img src="/img/aussie-new/aussieLogo.jpg" alt="company logo">
                </div>

                <!--MAN LOGO-->
                <div class="man col-md-5 pull-right col-sm-4 col-xs-5 text-center">
                    <img src="/img/aussie-new/jake-petro.jpg" alt="man pic">
                </div>

            </div>
        </header>

        <!--MAIN TAG-->
        <main class="container-fluid">
            <!--VIDEO AND FORM TAGS-->

            <section id="video_n_form" class="container">

                <div class="row">

                    <!--Video Tag-->
                    <div id="video_part" class='col-md-7  {{--col-sm-12--}} pull-left'>
                        {{--<video width="640" height="360" autoplay style="padding-top: 17px;">--}}
                        {{--<source src="http://cdnmediahosting.com/user29339cdn3/newproducts2014/freemoneynopromo.mp4" type="video/mp4" >--}}
                        {{--</video>--}}
                        @include('funnels.layouts._partials._video',  ['w'=>'100%','h'=>'100%'])
                    </div>

                    <!--Form Tag-->
                    <div id="form_part" class='col-md-4  col-sm-12 form-first'>
                        {{--TEXT--}}
                        <p>START <strong>NOW</strong></p>
                        <p>Enter your email below to gain instant
                            free access to the Aussie Method system
                        </p>
                        {!! Form::open(['url' => url('postEmailForm'.'/'.session('local')->code), 'method'=>'post','align'=>'center']) !!}
                        <input type="hidden" name="pageId" value="{{ $page->id }}">
                        @if($page->switches->showEmailField)
                            <input id="firstPageSignUpMail" type="email" name="email" placeholder="YOUR EMAIL ADDRESS.."
                                   required="required" class="col-sm-12"/>
                        @endif
                        <input type="submit" class="align-center col-md-12 col-sm-12 submit-aussie" value=""/>
                        {!! Form::close() !!}
                        <div class="col-md-12 col-sm-12">
                            <img src="/img/aussie-new/certs.png" class="trust-pic">
                        </div>
                    </div>

                </div>
            </section>

            <!--STRIP TAG WITH LINKS TO ALL OF THE INCENTIVES-->
            <section id="strip_href">
                <div class="container">
                    <ul class="row">
                        <li class="col-md-offset-1 col-md-2 col-sm-12 col-xs-12 who"><a href="#jake-pertu">Who am I?</a>
                        </li>
                        <li class="col-md-2 col-sm-12 col-xs-12 success"><a href="#success-pic">Success Stories</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 video"><a href="#video-how-method-works">How It Works</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 live-result"><a href="#live-third-party">Live Results</a></li>
                        <li class="col-md-2 col-sm-12 col-xs-12 faq"><a href="#frequently-asked-questions">FAQs</a></li>
                    </ul>
                </div>
            </section>

            <!--========================PICS PART START================================ -->

            <!--JAKE PERTU PIC-->
            <section id="jake-pertu" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="fancybox" rel="group" href="/img/aussie-new/guarantee.png">
                            <img src="/img/aussie-new/hey.png" alt="first_pic-jake-pertu pic"
                                 class="jake-pertu img-responsive center-block">
                        </a>
                    </div>
                </div>
            </section>


            <!--WHATS UP PIC-->
            <section id="success-pic" class="container">
                <div class="row">
                    <header class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10">
                        <h2 class="title-question">Success Stories</h2>
                    </header>
                    <div class="pic-iphone col-md-12">
                        <img src="/img/aussie-new/iphone.png" alt="iphone-massage-pic"
                             class="img-responsive center-block iphone-pic">
                    </div>
                    <div class="pic-facebook col-md-12">
                        <img src="/img/aussie-new/face.png" alt="facebook-pic"
                             class="img-responsive center-block facebook-pic">
                    </div>
                </div>
            </section>

            <!--TWEETER & FACEBOOK TAGS-->
            <section id="live-result-pic" class="container">

                <div class="row">

                    <!--TITLE TWEETED + FACEBOOK PICS-->
                    <header class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-question">LIVE MINUTE BY MINUTE UPDATING TWITTER AND FACEBOOK FEEDS</h2>
                    </header>

                    {{--CONTENT PART--}}
                    <div class="social  col-md-11 col-sm-11 col-xs-11">

                        {{--TWEET AND FACEBOOK TITLES--}}
                        <div class="images col-md-12 col-xs-12">
                            <div class="logotag facebook  col-md-6  col-sm-11 col-xs-12">
                                <img src="/img/aussie-new/fb.png" alt="facebook logo"
                                     class=''>
                            </div>
                            <div class="logotag tweeter col-md-6  col-sm-5  col-xm-6">
                                <img src="/img/aussie-new/twt.png" alt="tweeter logo"
                                     class=''>
                            </div>
                        </div>

                        <div id="content-social " class="col-md-12">

                            <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12'>
                                <h4 class="fb-title capitalize">comments</h4>
                            </header>

                            <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12'>
                                <h4 class="tweets-title capitalize">Tweets</h4>
                            </header>
                            <div id="facebook-tab" class="col-md-6">
                                <div class="logotag tweet-2 col-md-6 col-sm-12  col-xm-6">
                                    <img src="/img/aussie-new/twt.png" alt="facebook logo">
                                    <!-- header FACEBOOK -->
                                </div>
                                <header class='col-lg-6 col-md-6 col-sm-12-col-xs-12'>
                                    <h4 class="tweets-title-2 capitalize">Tweets</h4>
                                </header>
                            </div>
                            <div id="tweets-tab" class="col-md-6 "></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Video How_it_work PIC-->
            <section id="video-how-method-works" class="container">
                <div class="row">
                    <header class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-question">How The Aussie Method Works</h2>
                    </header>

                    <div class="video-n-images col-md-12">
                        <img src="/img/aussie-new/ipad.png" alt="ipad image" class="img-responsive center-block">
                        <div class="video-tag">
                            @include('funnels.layouts._partials._video', ['video_url'=>'http://video.chaki.netdna-cdn.com/guide4f.mp4','w'=>'100%', 'h'=>'100%','autoplay'=>'false'])
                        </div>
                    </div>
                </div>
            </section>

            {{--LIVE THIRD PARTY  PART--}}
            <section id="live-third-party" class="container center-block">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 align-center">
                        <header>
                          <h2>Live Third Party Verified Results!</h2>
                        </header>

                        {{--table layout--}}
                        <div class="table-trader col-md-12 col-sm-12 col-xs-12 align-center">
                            <ul class="col-md-12 col-sm-12 col-xs-12 align-center">
                                <li class="col-lg-6 col-md-4 col-sm-4 col-xs-4">Aussie Method Member</li>
                                <li class="col-lg-1 col-md-2 col-sm-2 col-xs-2">Profit</li>
                                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Trade Time</li>
                                <li class="col-lg-2 col-md-3 col-sm-3 col-xs-3">Currency</li>
                            </ul>
                            <div id="trades"></div>
                        </div>

                        {{--<table class="table table-striped table-bordered shadowed table-hover"--}}
                        {{--id="positionsHistoryTable"--}}
                        {{--style="background-color:#FFF;" bgcolor="#FFFFFF">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Aussie Method Member</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Profit</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>Trade Time</center>--}}
                        {{--</font></th>--}}
                        {{--<th background="/img/aussie-new/topb.png"><font--}}
                        {{--style="font-family: 'Cabin', sans-serif;; color:#000 !important;">--}}
                        {{--<center>--}}
                        {{--Currency--}}
                        {{--</center>--}}
                        {{--</font></th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody id="trades">--}}

                        {{--</tbody>--}}
                        {{--</table>--}}
                    </div>
                </div>
            </section>


            <section>
            </section>
            <!--===========================PICS PART END===================================-->


            <!--===============================FREQUENTLY-ASKED-QUESTIONS PART===============================================-->
            <section id="frequently-asked-questions" class="row">
                {{--HEADER TITLE--}}

                <div class="container">
                    <div class="row">
                        <header class="col-md-12 col-sm-12 col-xs-12"><h2>Frequently Asked Questions</h2></header>
                        <div class="col-md-12 question_n_answer"></div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="row col-md-12">

            <div id="left-footer" class="col-md-10 col-sm-10 col-xs-9 push-left"> Copyright 2016 Aussie Method. All
                Right Reserved.
            </div>
            <div id="right-footer" class="col-md-2 col-sm-2 col-xs-3 push-right">
                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/policy", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Privacy'])
                |
                @include('funnels.layouts._partials._link', ['url' => $page->fullSlug() . "/terms", 'class'=>'fancybox_iframe','target'=>'_blank','text'=>'Terms'])
            </div>
        </footer>
    </div>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
@endsection
