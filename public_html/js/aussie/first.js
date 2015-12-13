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
}
AddTrade();

$('.q-section').each(function() {
    var tis = $(this), state = true, answer = tis.next('div').slideDown();
    tis.click(function() {
        state = !state;
        answer.slideToggle(state);
        tis.toggleClass('active',state);
    });
});

$(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.

    //$("#HeaderVideoBlock, #videoBlock").fitVids();

    $('.q-section').click(function(){
        $(this).next().slideToggle()
            .parent().siblings().find('.a-section').slideUp();
    });

// load video if scroll
    $(window).on('scroll',function(){
        if($('.onscroll_video').length>0)
            if(($(window).scrollTop()+200)>($('.onscroll_video').offset().top-$('.onscroll_video').parent().height()) && !$('.onscroll_video video').hasClass('on')){
                $('.onscroll_video video').addClass('on').get(0).play();
                console.log('.onscroll_video video');
            }
    });
});


function tbox0()
{
    $("#hoverbox").show();
    hideall();
    $("#tb0").show();
}
function tbox1()
{
    $("#hoverbox").show();
    hideall();
    $("#tb1").show();
}
function tbox2()

{
    $("#hoverbox").show();
    hideall();
    $("#tb2").show();
}
function tbox3()
{
    $("#hoverbox").show();
    hideall();
    $("#tb3").show();
}
function tbox4()
{
    $("#hoverbox").show();
    hideall();
    $("#tb4").show();
}
function tbox5()
{
    $("#hoverbox").show();
    hideall();
    $("#tb5").show();
}
function tbox6()
{
    $("#hoverbox").show();
    hideall();
    $("#tb6").show();
}
function closex()
{
    $("#hoverbox").hide();
    hideall();
}
function hideall()
{
    $("#tb0").hide();
    $("#tb1").hide();
    $("#tb2").hide();
    $("#tb3").hide();
    $("#tb4").hide();
    $("#tb5").hide();
    $("#tb6").hide();
}



var x=40;
var w=100;
function slide()
{
    x--;
    $("#scroll>i").attr("style","background-position:-"+x+"px 0px;");
    if(x==0)
        x=40;
}
setInterval(slide,30);
function mkchange()
{
    var t=$("#spots").html();
    t--;
    if(t!=3)
    {
        $("#spots").html(t);
        w-=4.55;
        $("#scroll").attr("style","width:"+w+"%");
    }
}
setInterval(mkchange,13600);


