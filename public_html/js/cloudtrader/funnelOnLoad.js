function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function countUpTotalMembersAmount(){
    setTimeout(function(){
        this.totalMembers=document.getElementById("totalMembersAmount").innerHTML;
        this.totalMembers=this.totalMembers.replace(/,/g , "");
        this.add=(Math.random()*1).toFixed(0);
        this.totalMembers=parseFloat(this.totalMembers)+parseFloat(this.add);
        this.totalMembers=numberWithCommas(this.totalMembers);
        document.getElementById("totalMembersAmount").innerHTML = this.totalMembers;
    }, (Math.random()*10000).toFixed(0) );
}

function countUpTotalMembersProfits(){
    setTimeout(function(){
        this.totalMembersProfits=document.getElementById("totalMembersProfits").innerHTML;
        this.totalMembersProfits=this.totalMembersProfits.replace(/,/g , "");
        this.newProfit=(Math.random()*100).toFixed(0);
        this.totalMembersProfits=parseFloat(this.totalMembersProfits)+parseFloat(this.newProfit);

        this.totalMembersProfits=numberWithCommas(this.totalMembersProfits);
        document.getElementById("totalMembersProfits").innerHTML = this.totalMembersProfits;
    }, (Math.random()*10000).toFixed(0) );
}

window.onload = function(){
    setInterval(countUpTotalMembersProfits, 1000);
    setInterval(countUpTotalMembersAmount, 1000);

};

function send_data(i) {
    name = $("#sname"+i).val();
    email = $("#semail"+i).val();

    if ( name == "" || email == "" ) {
        alert("You must enter valid name and email address");
        return false;
    }

    $('#PopUpUserName').html( name );
    $("#firstname1").val( name );
    $("#email1").val( email );

    $("#interemail").val( email );
    $("#intername").val( name );
    $("#interform").submit();

    setTimeout( function() {
        $("#gremail").val( email );
        $("#grname").val( name );
        $("#grform").submit();
    }, 2000 );

    setTimeout( function() {
        $.get( "inc/optin.html", { 'p':'56e574d35fc9f', 'e':email, 'n':name } );
    }, 1000);
}

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'A_pqI_6DSZc',
        playerVars: { 'rel': 0, 'modestbranding': 1, 'autoplay': 1, 'controls': 0 },
        events: {
        }
    });
}
