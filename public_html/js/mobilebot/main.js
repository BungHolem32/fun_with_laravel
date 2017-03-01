var leftShots = $('.leftShots img');
var rightShots = $('.rightShots img');
var leftShots_mobile = $('.leftShots_mobile img');
var rightShots_mobile = $('.rightShots_mobile img');
var bigShots = $('.bigShots img');



var i = 1;
var j = 1;
var l = 1;

$(document).ready(function(){
  showImages();
      window.setInterval(function(){
        showImages();
        showImages_mobile();
        showImages_big();
      }, 20000);

});

function showImages_big(){
  if(l == 4){
    l = 1;
  }

  bigShots.each(function(){
    $(this).attr("src","/img/mobilebot/big/screenShot_"+l+"-big.png");
    ++l;
  });

}

function showImages(){

  leftShots.each(function(){
    //console.log(i);
      if(i==8){
        i = 1;
      }
    $(this).attr("src","/img/mobilebot/screenShot_"+i+".png");
    ++i;
  });

  rightShots.each(function(){
    //console.log(i);
      if(i==8){
        i = 1;
      }
    $(this).attr("src","/img/mobilebot/screenShot_"+i+".png");
    ++i;
  });

}

function showImages_mobile(){

  leftShots_mobile.each(function(){
    // console.log(j);
      if(j==8){
        j = 1;
      }
    $(this).attr("src","img/mobilebot/screenShot_"+j+".png");
    ++j;
  });

  rightShots_mobile.each(function(){
    // console.log(j);
      if(j==8){
        j = 1;
      }
    $(this).attr("src","/img/mobilebot/screenShot_"+j+".png");
    ++j;
  });

}

function getRand(min,max){
return random = Math.floor(Math.random() * (max - min + 1)) + min;
}

$(document).ready(function(){

  $(this).scroll(function(){
    var scrollTop = $(this).scrollTop();
    console.log(scrollTop);
    if(scrollTop > 400 && scrollTop < 763 || scrollTop > 6666 && scrollTop < 7133 || scrollTop > 8133 && scrollTop < 8866 || scrollTop > 10466 && scrollTop < 11200){
      if(scrollTop > 8133 && scrollTop < 8866 || scrollTop > 10466 && scrollTop < 11200){
        $('#stickyPop').css('top','97%');
        console.log('in new range');
      }else{
        $('#stickyPop').css('top','74%');
        console.log('in range');
      }
    }else{
      $('#stickyPop').css('top','37%');
      console.log('out of range');
    }

  });
});



jQuery.fn.center = function () {

    this.css("position","fixed");

    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 

                                                $(window).scrollTop()) + "px");

    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 

                                                $(window).scrollLeft()) + "px");

    return this;

}



$(document).ready(function(){

  var random = randomString();

   var width = $(window).width();



//   if(width <= 640){

    $('#access_code').val(random);

    $('#copyBtn2').click(function(){
      console.log('test');
      window.location.href = "#copySection";

    });

    $('#copyBtn').click(function(){
      console.log('test');
      window.location.href = "#copySection";

    });

 //  }

 	

  

  $('#yourCode').val(random);

  $('#yourCode2').val(random);



    setTimeout( function(){ 

    $('#access_code').val(random);

    $('#access_code2').val(random);

  }

 , 20000 );







	setTimeout( function(){ 

    $("#stickyPop").animate({

        right: 0

    });

  }

 , 30000 );





  setTimeout( function(){ 

    $("#stickyPop2").animate({
          left: -23
    });

  }

 , 120000 );

	



    

});


 function goToByScroll(id){
        

          // Remove "link" from the ID
        id = id.replace("link", "");
        // Scroll
        $('html,body').animate({
                scrollTop: $("#"+id).offset().top},
            'slow');


        
}

function randomString() {

  var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";

  var string_length = 8;

  var randomstring = '';

  for (var i=0; i<string_length; i++) {

    var rnum = Math.floor(Math.random() * chars.length);

    randomstring += chars.substring(rnum,rnum+1);

  }

  //document.randform.randomfield.value = randomstring;

  return randomstring;

}













$(function(){

	// setTimeout(function(){

		// $(".exitZone").on("mouseenter",function(){

			// showExitPop();

		// });	

	// },2500);

	$("#exitContent").center();

	

	

});



function showExitPop(){


  $(".exitZone").hide();

  $("#exitOverlay").show();

  $("#exitContent").fadeIn();
  
  player.pauseVideo();

  // var mainVideoSrc = $("#ytplayer").attr("src");

  //$("#ytplayer").attr("src",mainVideoSrc.replace('&autoplay=1',''));


	var popVideoSrc = $("#exitVideo").attr("src");

	$("#exitVideo").attr("src",popVideoSrc+'&autoplay=1');

	

	$("#exitContent").center();

	

}

	

	

function closeExitPop(){
  

  playTheVideo();

	var popVideoSrc = $("#exitVideo").attr("src");

	// $("#exitVideo").attr("src",popVideoSrc.replace('&autoplay=1',''));

	$("#exitVideo").attr("src",popVideoSrc.replace('&autoplay=1',''));

	$("#exitOverlay,#exitContent").hide();

  

	$(".exitZone").show();

}







function addEvent(obj, evt, fn) {

    if (obj.addEventListener) {

        obj.addEventListener(evt, fn, false);

    }

    else if (obj.attachEvent) {

        obj.attachEvent("on" + evt, fn);

    }

}



/*

	Exit popup

 */

 

var exitTime = 0;

var popupShow = 0;

var showTimes = 0;

$(function(){

	$("body").prepend('<div id="startExitPopup" style="position:fixed; width:100%; z-index:9999999; height:50px; background:rgba(0,0,0,0.0);"></div>');

		$("#startExitPopup").mouseleave(function(){

			if(!popupShow && exitTime > 1 && showTimes < 6) showExitPop();

			exitTime++;

		});

});







$(document).ready(function(){

	var obj = $('.counterNum');

	// Counter

  (function(){

    var Node = obj;

    

    //var Value = 1000720;

    var Value = 3001720;

    var cookie = parseInt($.cookie("applestockrobot_volume_new")); 



    if(cookie){

      Value = cookie;

    }





    var

    Update = function(){

      

      var

      Increase = Math.round(10 + Math.random() * 400);

      if(Value > 50000000){

        Value = 1000720;

      }



      Value2 = Value * 1.4;

      Value3 = Value * 1.2;

      



      if(Value > Value2){

        Value -= Increase;

      }else if(Value3 > Value){

        Value += Increase;

        Value2 = Value * 1.4;

        Value3 = Value * 1.2;

      }



     $.cookie("applestockrobot_volume_new", Value); 



      var

      View = '',

      STR = String(Value).split("");

      

      for(var i=STR.length-1,j=0;i>=0;i--,j++){

        if(j > 0 && j % 3 === 0){

          View = ','+View;

        }

        View = STR[i] + View;

      }

      View = '$'+View;

      Node.html(View);

      //console.log(Value);

      //console.log($.cookie("applestockrobot_volume"));

      setTimeout(Update, 600);

    };

    setTimeout(Update, 600);

  }());



// decrease



var obj = $('.counterNum2');

  // Counter

  (function(){

    var Node = obj;

    

    var

    Value = 225711;

    

    var

    Update = function(){

      var

      decrease = Math.round(10 + Math.random() * 400);

      if(Value < 100000){

        Value = 125711;

      }



      Value += decrease;

      

      var

      View = '',

      STR = String(Value).split("");

      

      for(var i=STR.length-1,j=0;i>=0;i--,j++){

        if(j > 0 && j % 3 === 0){

          View = ','+View;

        }

        View = STR[i] + View;

      }

      View = '$'+View;

      Node.html(View);

      setTimeout(Update, 2100);

    };

    setTimeout(Update, 2100);

  }());



});

//onYouTubePlayerAPIReady
var player;
  function floaded(){
    player = new YT.Player('player', {
      videoId: '_zqZpa1U_mE',
      events:
       {      
        'onStateChange': function (event)
            {
            if (event.data == YT.PlayerState.PLAYING)                                    {  alert("Playing.."); }
            else if (event.data == YT.PlayerState.PAUSED)
               { alert ("Paused.."); }
            else
            alert ("Buffering/Video Ended");                
                         
             }
       }
            
    });
  }