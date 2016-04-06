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

$('body').on('keyup','#email-side',function () {
    var email = $(this).val();
    $('#email').val(email);
});

$('body').on('click','#submit-side',function () {
    $('form').submit();
});

$('body').on('click','#goToRegistration',function () {
    scroll(0,0);
});