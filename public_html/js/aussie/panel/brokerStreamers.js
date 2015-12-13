var brokerStreamers = {'optionsmaker' : 'http://sst6-a-nl.spotoption.com:8089/'};


var lastBalance = "0.01";

function updateDataOnBalance(data){
    console.log(lastBalance);
    if (lastBalance != data.balance){
        lastBalance = data.balance;
        console.log("streamer working");
        setTimeout(getData, 7000);
    }
}
$(document).ready(function(){
    //newfile 'http://sst6-a-nl.spotoption.com:8089/'
    var customerStreamer =  new SpotstreamerWrapper('customerBalance_bigoption_587937', updateDataOnBalance, 'http://sst-super-p0-ie.spotoption.com:443');
    customerStreamer.subscribe();
});




var vidd = '<video id="welcome_video" width="100%" autoplay="true" controls="" preload="auto"><source src="//s3.amazonaws.com/aussiemill/100s+Funding.mp4"></video>';

$('#welcomeModal').on('shown.bs.modal', function() {
    $('#videoc').html(vidd);


//            curVid = $('video')[0];
//            curVid.currentTime = '0';
//            curVid.play();
});

$('#welcomeModal').on('hidden.bs.modal', function() {
    $('#videoc').html('');
//            curVid = $('video')[0];
//            curVid.pause();
});// end stop/play video



$('#formDepositIframe').DepositForm({ loader: 'loading_blue.gif',
    translations: {
        en: {
            Unlock_The_Amazing: 'START RAKING IN MONEY!',
            In_Just_Few_Moments:"Fill in the necessary information in order to open your The Aussie Method account and just watch it fill with you earnings.",
            Deposit_Funds: "Get Me Started "

        }
    }
});


$('.signals-menu a').on('click', function(e){
    showSignalModal();
    e.preventDefault();
});
// close signals video
var signalsVideo = '<iframe style="max-width: 100%;" width="854" height="510" src="https://www.youtube.com/embed/N6_qyY49rBA?autoplay=1" frameborder="0" allowfullscreen></iframe>';
$('#signals_video_container')[0].innerHTML = '';

function hideSignalModal() {
    $('#signalModal2').modal('hide');

}

function showSignalModal() {
    $('#signalModal2').modal('show');
}

$('#signalModal2').on('show.bs.modal', function () {
    $('#signals_video_container')[0].innerHTML = signalsVideo;
});

$('#signalModal2').on('hide.bs.modal', function () {
    $('#signals_video_container')[0].innerHTML = '';
});

var welcomeVideo = '<video id="welcome_video" width="100%" autoplay="true" controls="" preload="auto"><source src="//s3.eu-central-1.amazonaws.com/funnel-video/copythepro/vid4.mp4"></video>';
$('#welcome_video_container')[0].innerHTML = '';

$('#welcomeModal').on('show.bs.modal', function () {
    $('#welcome_video_container')[0].innerHTML = welcomeVideo;
});

$('#welcomeModal').on('hide.bs.modal', function () {
    $('#welcome_video_container')[0].innerHTML = '';
});

if ( ! data.user.WasActivated) {
    $('#welcomeModal').modal('show');
}


setInterval(function(){
    if(data.user.Activated){
        console.log('user is activated');
    }
    else
    {
        $( ".strategy-btn" ).click(function() {
            $( ".select_copy").show();

            $( ".fadeBg").css('display', 'block');
        });
        $( ".close" ).click(function() {
            $( ".select_copy").hide();
            $( ".fadeBg").css('display', 'none');
        });
    }
},4000);