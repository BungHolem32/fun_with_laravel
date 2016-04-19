function rand_num(min,max) {
    var number = min + Math.floor(Math.random() * max);
    return number;
}
function numberCom(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) val = val.toString().replace(/(\d+)(\d{3})/, "$1"+","+"$2");
    return val;
}
function mkChanges() {
    var member = $("#MemberAvailable").html().replace(/\,/g,'');
    var member_minus = rand_num(1,1);
    var newMember = parseInt(member) - member_minus;
    if(member>7)
        $("#MemberAvailable").html(numberCom(newMember));
}


$(document).ready(function() {
    $("#testimonials").owlCarousel({
        autoPlay: 1000,
        items :8,
        itemsDesktop : [950,1],
        itemsDesktopSmall : [800,2],
        itemsTablet : [768,1],
        itemsTabletSmall : [550,1],
        itemsMobile : [479,1],
        navigation:false
    });
});

$('.modal-bg').click(function(){
    $('#myModal').modal('hide');
});
$('.modal-bg').click(function(){
    $('#myModal2').modal('hide');
});
$('.modal-bg').click(function(){
    $('#myModal3').modal('hide');
});

$('.focus-button').click(function(){
    $('#myModal').modal('hide');
    setTimeout(function(){
    },350);

});
$('.focus-button').click(function(){
    $('#myModal2').modal('hide');
    setTimeout(function(){
    },350);

});
$('.focus-button').click(function(){
    $('#myModal3').modal('hide');
    setTimeout(function(){
    },350);

});

setInterval(mkChanges,60000);