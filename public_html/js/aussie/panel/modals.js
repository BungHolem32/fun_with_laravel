

$('#welcomeModal').on('hidden.bs.modal', function() {
    setTimeout(function(){
        $('body').addClass('modal-open');
    }, 280 )
});


var data = {"user":{"Id":20817199,"OriginId":587937,"FirstName":"testtestcom","LastName":"asdasdas","Email":"te2323st1@test.com","PhoneNumber":"97266477443","Country":"Israel","BrokerName":"bigoption","Currency":"USD","CampaignId":64,"SubcampaignId":"1650_5442_102c9f6be77db1ef890fc6e63e6750","Password":"sdfasdas","Activated":false,"Amount":25,"WasActivated":false,"LoggedOn":false,"Comment":"","RegTime":{"date":"2015-12-10 08:08:42.000000","timezone_type":3,"timezone":"UTC"},"IsNew":1,"StrategyId":7,"TradesOpen":0,"Whiteouted":1,"PasswordUrl":"sdfasdas","EmailUrl":"te2323st1%40test.com","Launch":"aussiemethod"},"data":[{"id":"587937","FirstName":"testtestcom","LastName":"asdasdas","gender":"male","email":"te2323st1@test.com","password":"b285810ddc8fca7e65b72837cb85711f","cellphone":{},"phone":"97266477443","fax":{},"specialAccountNumber":{},"personalId":{},"firstDepositDate":"0000-00-00","Country":"Israel","registrationCountry":"Israel","City":{},"state":{},"newCustomer":"1","street":{},"houseNumber":{},"aptNumber":{},"risk":"low","callBackTime":{},"verification":"None","referLink":{},"siteLanguage":"en","customerSelectedLang":{},"timezone":{},"promotionalEmails":"1","tradingEmails":"1","employeeInChargeId":"30","employeeInChargeName":"BAD \/ IGNORE","type":"customer","approvesEmailAds":"0","campaignId":"64","campaignName":"BOA","birthday":"1970-01-01","lastLoginDate":"AM 12:00 00\/00\/00","subCampaignId":"547450","subCampaignParam":"1650_5442_102c9f6be77db1ef890fc6e63e6750","regTime":"2015-12-10 08:08:40","regTimeFormatted":"AM 08:08 10\/12\/15","lastTimeActive":"AM 08:08 10\/12\/15","lastTimeActiveNoFormat":"2015-12-10 08:08:40","lastUpdate":"AM 08:08 10\/12\/15","regStatus":"activated","postCode":{},"accountBalance":"0.00","saleStatus":"new","leadStatus":"new","regulateStatus":"none","isSuspended":"0","isBlackList":"0","pnl":"0.00000000","currencySign":"$","currency":"USD","isLead":"0","a_aid":"0","a_bid":{},"a_cid":{},"isDemo":"0","VIPGroup":"Regular","group":{},"potential":"low","affiliateId":"0","regIP":{},"accumulatedFtd":"0"}],"assets":[],"positions":[],"summary":{"total":0},"date":1449734949,"broker":{"Name":"Big Option","ShowMinDepositPopup":0,"redirectionInputName":"extRedir","loginTarget":"\/\/binarybonus.net\/api\/redirect_login.php?brokername=bigoption","brokerLogo":"https:\/\/binarypromos.com\/regforms_iframe\/general\/media\/images\/brokers\/light\/bigoption.png","homeTarget":"http:\/\/www.bigoption.com","depositTarget":"http:\/\/www.bigoption.com\/my-account\/deposit\/","streamerUrl":"http:\/\/sst-super-p0-ie.spotoption.com:443","token":"","tradeTarget":"http:\/\/www.bigoption.com\/","spotoptionBrokerName":"bigoption","spotPluginUrl":"","ApiSupport":"1","MinDepositValidation":"250","ApiSupportUs":"1","DisplayName":"Big Option","PlatformId":"1","ptfmId.Name":"spotoption","ptfmId.HandlerName":"SpotAPI","DepositIframeContainerStyle":null,"DepositIframeStyle":null,"DepositFormId":null,"support":"support@aussiemethod.com","launch":"Aussie Method","loginTargetOld":"http:\/\/www.bigoption.com\/bigoptionsignin.php","plugin_url":""},"currencySign":"$","lastPosition":null,"language":"en_EN","isIE":false,"doLogin":true,"launchDisplayName":"Aussie Method","upsellToken":"9200e929e8bd18c37e4f475d562b09d32212b0e1"};

data.lastDepositDate = data.data[0].firstDepositDate.substr(0, '0000-00-00'.length);

data.allowManualTrading = function() {

    if (data.data[0].firstDepositDate.substr(0, '0000-00-00'.length) == '0000-00-00') {

        openDepositDialog();
        return false;

    }

    return true;

}

data.user.working = false;
data.user.cantChangeAmount = function() {
    return data.user.working || !data.user.Activated;
}

data.deposit = function() {
    data.lastDepositDate = data.data[0].firstDepositDate.substr(0, '0000-00-00'.length);
    $("#loginForm").submit();
};


var openDepositDialog = function() {
    data.deposit();
    $(document.body).addClass('modal-open');
    $("#depositBtn").click();
}

data.dismissWelcome = openDepositDialog;

var updateData = function(newData) {
    $.extend(true, data, newData);
}

var updateDataAndSetIdle = function(newData) {
    updateData(newData);
    data.user.working = false;
}

data.activate = function() {

    var activated = $(this).data('activated');
    if (activated && data.data[0].firstDepositDate.substr(0, '0000-00-00'.length) == '0000-00-00') {
        openDepositDialog();
        return;
    }

    data.user.working = true;

    $.getJSON('/setActivatedRpc', {'activated' : activated}, updateDataAndSetIdle);
};

data.setAmount = function() {

    var amount = $(this).data('amount');

    if (amount == 'custom') {
        amount = prompt("Set amount in " + data.currencySign + " : ", data.user.Amount);
        var val = parseInt(amount);

        if (val == "NaN" || val < 25 || val % 1 != 0) {
            alert("Could not set amount to " + amount + ", Please enter a number larger than 25.");
            return;
        }

        amount = val;
    }

    data.user.working = true;
    $.getJSON('/setAmountRpc', {'amount' : amount}, updateDataAndSetIdle);
};

var getData = function() {

    $.getJSON('/rpcGetData', function(newData) {

        updateData(newData);

        var timeoutInSeconds = 60;
        if (data.data[0].firstDepositDate.substr(0, '0000-00-00'.length) == '0000-00-00') {
            timeoutInSeconds = 7;
        }

        //setTimeout(getData, timeoutInSeconds * 1000);

    });
};

getData();

$(function() {
//
    //       if (!data.user.LoggedOn) {
    //           $("#welcomeModal").modal({backdrop:false});
    //          return;
    //     }

    //      if (data.data[0].firstDepositDate.substr(0, '0000-00-00'.length) == '0000-00-00') {
    //          openDepositDialog();
    //      };


})

rivets.bind($("#wrapper"), data);



var $element = $('#clock');
setInterval(function(){
    var date = new Date();
    var dateString = '';

    dateString += date.getUTCHours() + ':';
    dateString += date.getUTCMinutes() + ':';
    dateString += date.getUTCSeconds() + ' ';
    dateString += date.getUTCDate() + '/';
    dateString += date.getUTCMonth() + 1 +'/';
    dateString += date.getUTCFullYear();

    $element.text(dateString);
}, 1000);

var hasAPI = "1";
$('#welcomeModal').on('hidden.bs.modal', function() {


});

function closewelcome(){
    setTimeout(function(){
        $('body').addClass('modal-open');
    }, 800 )
}