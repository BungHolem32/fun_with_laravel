var now				= new Date();
var nextYearUnix	= new Date(new Date().setTime(now.getTime() + 360*24*60*60*1000)).toUTCString();
var locationContent = null;

$(document).ready(function() {

	if($('#clock1').length) {
		var startTime = parseFloat(getCookies().clock) || (60 * 7);

		var clockOne = $('#clock1').FlipClock({
			clockFace: 'MinuteCounter',
			autoStart: false,
			callbacks: {
				stop: function() {
					// $('.message').html('The clock has stopped!')
				}
			}
		});

		var clockTwo = $('#clock2').FlipClock({
			clockFace: 'MinuteCounter',
			autoStart: false,
			callbacks: {
				stop: function() {
					// $('.message').html('The clock has stopped!')
				},
				interval: function () {
					document.cookie="clock="+(--startTime)+"; expires="+nextYearUnix;
				}
			}
		});

		clockOne.setTime(startTime);
		clockOne.setCountdown(true);
		clockOne.start();

		clockTwo.setTime(startTime);
		clockTwo.setCountdown(true);
		clockTwo.start();
	}


	$('#phone').parent().removeClass('col-lg-6 col-md-6 col-sm-6').addClass('col-lg-12 col-md-12 col-sm-12');
	$('#submit').removeClass().addClass('go2 active-submit').val('YES! TAKE ME TO THE FINAL STEP');
	$('input').removeClass('form-control');

	getUserContent();
});

function cl(x) {
	console.log(x);
}

function tick() {
	$('#ticker li:first').slideUp(function () {
		$(this).appendTo($('#ticker')).slideDown();
	});
}

function getUserContent() {
	$.ajax({
		method: 'get',
		url: '/ajax/zulanderContent',
		success: function (data) {
			locationContent = data;
			var stories		= '';
			var traders		= '';

			for(var i=0; i<data.content.avatars.length; i++) {
				var avatar	= {};

				avatar.pic			= data.content.avatars[i].pic + ".jpg";
				avatar.name			= data.content.avatars[i].pic.split('-')[0].split('+').join(' ');
				avatar.address		= data.content.avatars[i].pic.split('-')[1].split('+').join(' ');
				avatar.flag			= 'small-' + data.content.avatars[i].flag + '.png';
				avatar.startDate	= data.avatarsText[i].startDate;
				avatar.balance		= data.avatarsText[i].balance;
				avatar.earned		= data.avatarsText[i].earned;
				avatar.medal		= data.avatarsText[i].medal;

				stories += '<div class="col-md-4 col-sm-4 active story-section animated"><div class="block"> <div class="row"> <div class="col-md-5 col-sm-5 col-xs-5 photo"> <img src="/img/zulander/content/peoples/'+avatar.pic+'" width="100" alt="" class="img-circle"> <div class="flag"><img src="/img/zulander/content/flags/' + avatar.flag + '" alt=""/></div> </div> <div class="col-md-7 col-sm-7 col-xs-7 name"><strong>'+avatar.name+'</strong><br/>'+avatar.address+'</div><div class="clear clearfix"></div> <div class="col-md-12 col-sm-12 col-xs-12"> <div class="text story">';

				for(var x=0; x<data.avatarsText[i].story.length; x++) {
					stories += data.avatarsText[i].story[x];
				}
				stories += '<p>Started Using Software: <strong>'+avatar.startDate+'</strong></p> <p>Starting Balance: <strong>$'+avatar.balance+'</strong></p> </div> <div class="total text-center">Total earned: <span>$'+avatar.earned+'</span> <strong>(withdrawn)</strong></div> <div class="rate"> <div class="star text-center"><img src="/img/zulander/star.png" alt="" /></div> <div class="trade text-center"><img src="/img/zulander/'+avatar.medal+'.png" alt="" /></div> <div class="verified text-right"><img src="/img/zulander/verified.png" alt="" /></div></div></div></div></div></div>';
			}

			for(i=0; i<data.traders.length; i++) {
				traders += '<li>'+data.traders[i]+'</li>';
			}

			$('.country-logo').attr('src',"/img/zulander/content/flags/small-"+data.countryCode+".png");
			$('.country-name').html(data.countryName.capitalizeFirstLetter());
			$('#ticker').html(traders);
			$('#stories').html(stories);
			$('.date').html(moment().format("D MMMM YYYY"));
			$('#month-days').html(moment().format('1 MMM YYYY') + " - " + moment().format('D MMM YYYY') + ":");
			$('#licenses-count').html(locationContent.content.licenses.count);

			setInterval(updateLicensesCounter,locationContent.content.licenses.timer.interval);
			updateLicensesCounter();
			updateLiveResultCounter();
			updateVideoViewers();
			realTimeDisplay();
			setInterval(tick, 2000);
			setInterval(realTimeDisplay, 1000);
		},
		dataType: 'json'
	})
}

function realTimeDisplay() {
	var time = moment().format('D MMMM YYYY, h:mm:ss a');
	$('.current-time').html(time);
}

String.prototype.capitalizeFirstLetter = function() {
	var words = this.split(' ');
	for(var i=0; i<words.length; i++) {
		words[i] = words[i].charAt(0).toUpperCase() +  words[i].slice(1);
	}
	return words.join(' ');
};

function updateLiveResultCounter() {
	var rand		= Math.round(Math.random() * (8000 - 200)) + 200;
	var amount		= parseFloat(getCookies().live_result) || 112369;
	var increase	= Math.random() * (50 - 20) + 20;
	var newAmount	= amount + increase;
	var htmlNumber	= newAmount.toLocaleString();

	var tempNumber	= htmlNumber.split('.');
	tempNumber[1]	= tempNumber[1].substring(0,2);
	htmlNumber 		= tempNumber.join('.');

    $('#result').html(htmlNumber);
	document.cookie="live_result="+newAmount+"; expires="+nextYearUnix;
	setTimeout(updateLiveResultCounter,rand);
}

function getCookies() {
	var currCookie	= {};
    var cookie		= document.cookie;
	var cookieArr	= cookie.split(' ');
	var tempCookie	= null;

	for(var i=0; i<cookieArr.length; i++) {
		tempCookie = cookieArr[i].split('=');
		currCookie[tempCookie[0]] = tempCookie[1];
	}
	return currCookie;
}

function updateLicensesCounter() {
	var animationElement	= $('.progress-radial');
	var animationState		= 100;
	var licenses			= parseInt(getCookies().licenses) || locationContent.content.licenses.count;


	if(licenses != locationContent.content.licenses.count) {
		animationState = parseInt((licenses / locationContent.content.licenses.count) * 10) * 10;
	}

	if(licenses > 1) licenses--;

	animationElement.removeClass().addClass('progress-radial progress-' + animationState);
	$('.overlay strong').html(licenses);
	$('.count').html(licenses);
	document.cookie="licenses="+licenses+"; expires="+nextYearUnix;
}

function updateVideoViewers() {
	if(document.getElementsByClassName('video-progress').length > 1) return;
	var rand		= Math.round(Math.random() * (8000 - 200)) + 200;
	var viewers		= parseInt(getCookies().viewers) || 1871;
	var newViewers	= viewers + 1;

	$('.video-progress-viewers-count').each(function () {
		$(this).html(newViewers);
	});

	document.cookie="viewers="+newViewers+"; expires="+nextYearUnix;
	setTimeout(updateVideoViewers,rand);
}

/**/
// if (screen.width < 768) {
//     $('#carousel-example-generic').attr('data-ride', 'carousel');
//     $('#carousel-example-generic .col-md-4').addClass('item');
//     $('#carousel-example-generic .col-md-4').removeClass('col-md-4');
// }

$('body').on('click','.goToMembers',function() {
	$('#getLicenseBtn').click();
});


$('body').on('click','.slide-stories',function() {
	var direction	= $(this).attr('data-direction');
	var currSlide	= $('.story-section:visible');

	if(direction == 'right') {
		var nextSlide = currSlide.next();
		if(!nextSlide.length) return;
		currSlide.removeClass('bounceInRight').addClass('bounceOutLeft').delay(500).queue(function (next) {
			currSlide.hide().removeClass('bounceOutLeft');
			nextSlide.show().addClass('bounceInRight');
			next();
		});
	}
	else {
		var prevSlide = currSlide.prev();
		if(!prevSlide.length) return;
		currSlide.removeClass('bounceInLeft').addClass('bounceOutRight').delay(500).queue(function (next) {
			currSlide.hide().removeClass('bounceOutRight');
			prevSlide.show().addClass('bounceInLeft');
			next();
		});
	}
});
