$(function() {

    guiders.createGuider({
        buttons : [{name : "Let's Start", onclick:function() { guiders.next();}}, {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Welcome to the Aussie Method Trading App!",
        description : "We will now guide you briefly on how to use The automatic Aussie Method Trading App that will take the trading sessions for you.",
        id : "_1",
        next : "_2",
        overlay : true
    });

    guiders.createGuider({
        attachTo : "#depositBtn",
        buttons : [{name : "Previous", onclick : function() { guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                scrollTop: $("#activationStatus").offset().top
            }, "slow");
             guiders.next();
                }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Deposit & Activation",
        description : "First click on the deposit button and fund your trading account with " + data.broker.DisplayName +  ".",
        id : "_2",
        next : "_3",
        overlay: true,
        position : "bottom"
    });

    guiders.createGuider({
        attachTo : "#activationStatus",
        buttons : [{name : "Previous", onclick : function() {

            $("html,body").animate({
                scrollTop: $("#depositBtn").offset().top
            }, "slow");



            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#balanceStatus").offset().top -270
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Deposit & Activation",
        description : "Then make sure your App status is on activated.",
        id : "_3",
        next : "_4",
        overlay: true,
        position : "bottom" 
    });

    guiders.createGuider({
        attachTo : "#accountdetailz",
        buttons : [{name : "Previous", onclick : function() {



            $("html,body").animate({
                scrollTop: $("#activationStatus").offset().top
            }, "slow");


            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#amountOfTrade").offset().top
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Balance Info",
        description : "This is your balance with " + data.broker.DisplayName + ", Your balance is updated automatically.",
        id : "_4",
        next : "_5",
        overlay: true,
        position : 3
    });

    guiders.createGuider({
        attachTo : "#amountOfTrade",
        buttons : [{name : "Previous", onclick : function() {



            $("html,body").animate({
                scrollTop: $("#balanceStatus").offset().top
            }, "slow");




            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#runningPositionsTable").offset().top - 270
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Amount",
        description : "Please choose your preferred amount per each trade.",
        id : "_5",
        next : "_6",
        overlay: true,
        position : "bottom"
    });

    guiders.createGuider({
        attachTo : "#runningPositionsTable",
        buttons : [{name : "Previous", onclick : function() {


            $("html,body").animate({
                scrollTop: $("#amountOfTrade").offset().top
            }, "slow");





            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#positionsHistoryTable").offset().top - 270
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Running Positions",
        description : "Here you can see Aussie Method Trading App searching for the best opportunity to trade for you. Once our system will find a good opportunity it will automatically execute the trading for you.",
        id : "_6",
        next : "_7",
        overlay: true,
        position : "top"
    });

    guiders.createGuider({
        attachTo : "#positionsHistoryTable",
        buttons : [{name : "Previous", onclick : function() {


            $("html,body").animate({
                scrollTop: $("#runningPositionsTable").offset().top - 270
            }, "slow");



            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#manualTrading").offset().top
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Trading History Panel",
        description : "Here you can see the latest open and closed position made by the Aussie Method Trading App ONLY! Also you can see if the sessions expired in the money or not.",
        id : "_7",
        next : "_8",
        overlay: true,
        position : "top"
    });

    guiders.createGuider({
        attachTo : "#manualTrading",
        buttons : [{name : "Previous", onclick : function() {
            $("html,body").animate({
                scrollTop: $("#positionsHistoryTable").offset().top -350 
            }, "slow");



            guiders.prev(); }},
            {name : "Next", onclick:function(){
                $("html,body").animate({
                    scrollTop: $("#toggleProfileDetailsLink").offset().top
                }, "slow");
                guiders.next();
            }},
            {name : "Close", onclick : function() { guiders.hideAll() }}],
        title : "Broker Trading Area",
        description : "If you wish to go to the official " + data.broker.DisplayName + " site, you can click on this button. On the broker's site you can find more information about the binary options industry, promotions, and more assets you can trade on by yourself without using Aussie Method Trading App recommendations.",
        id : "_8",
        next : "_9",
        overlay: true,
        position : "bottom"
    });

    guiders.createGuider({
        attachTo : "#accountdetailz",
        buttons : [{name : "Previous", onclick : function() {

            $("html,body").animate({
                scrollTop: $("#manualTrading").offset().top
            }, "slow");



            guiders.prev(); }}, {name : "Done", onclick : function() { guiders.hideAll() }}],
        title : "Account Details",
        description : "Here you can see your profile details, if you would like to change your details, please contact Aussie Method Trading App support.",
        id : "_9",
        // next : "_9",
        overlay: true,
        position : 3
    });


    $("#manual").click(function() {
        guiders.show("_1");
    });

});
