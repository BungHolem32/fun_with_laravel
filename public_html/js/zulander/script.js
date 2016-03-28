var now				= new Date();
var nextYearUnix	= new Date(new Date().setTime(now.getTime() + 360*24*60*60*1000)).toUTCString();
var locationContent = null;

$(document).ready(function() {
	if(window.location.pathname == '/zulander/members') {
		$('#clock1').myClock({
			endTime:7,
			circle:0,
			separTime:'',
			dateOff:0,
			cookie:1,
			cookieTime:30
		});

		$('#clock2').myClock({
			endTime:7.5,
			circle:0,
			separTime:'',
			dateOff:0,
			cookie:1,
			cookieTime:30
		});

		$('#phone').parent().removeClass('col-lg-6 col-md-6 col-sm-6').addClass('col-lg-12 col-md-12 col-sm-12');
		$('#submit').removeClass().addClass('go2 active-submit').val('YES! TAKE ME TO THE FINAL STEP');
		$('input').removeClass('form-control');
	}
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

			for(var i=0; i<data.content.stories.length; i++) {
				var avatar	= {};
				avatar.pic			= data.content.stories[i].avatar;
				avatar.name			= data.content.stories[i].avatar.split('-')[0].replace('+',' ');
				avatar.address		= data.content.stories[i].avatar.split('-')[1].replace('+',' ').replace('.jpg',' ');
				avatar.flag			= data.content.stories[i].flag;
				avatar.startDate	= data.content.stories[i].startDate;
				avatar.balance		= data.content.stories[i].balance;

				stories += '<div class="col-md-4 col-sm-4 active"><div class="block"> <div class="row"> <div class="col-md-5 col-sm-5 col-xs-5 photo"> <img src="/img/zulander/content/peoples/'+avatar.pic+'" width="100" alt="" class="/img-circle"> <div class="flag"><img src="/img/zulander/content/flags/' + avatar.flag + '" alt=""/></div> </div> <div class="col-md-7 col-sm-7 col-xs-7 name"><strong>'+avatar.name+'</strong><br/>'+avatar.address+'</div><div class="clear clearfix"></div> <div class="col-md-12 col-sm-12 col-xs-12"> <div class="text">';

				for(var x=0; x<data.avatarsText[i].length; x++) {
					stories += data.avatarsText[i][x];
				}

				stories += '<p>Started Using Software: <strong>'+avatar.startDate+'</strong></p> <p>Starting Balance: <strong>$'+avatar.balance+'</strong></p> </div> <div class="total text-center">Total earned: <span>$121,589</span> <strong>(withdrawn)</strong></div> <div class="rate"> <div class="star text-center"><img src="/img/zulander/star.png" alt="" /></div> <div class="trade text-center"><img src="/img/zulander/trader.png" alt="" /></div> <div class="verified text-right"><img src="/img/zulander/verified.png" alt="" /></div></div></div></div></div></div>';
			}

			for(i=0; i<data.content.traders.length; i++) {
				traders += '<li>'+data.content.traders[i]+'</li>';
			}

			$('.country-logo').attr('src',"/img/zulander/content/flags/small-"+data.countryCode+".png");
			$('.country-name').html(data.countryName);
			$('#ticker').html(traders);
			$('#stories').html(stories);
			$('.date').html(moment().format("MMM Do YYYY"));

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
	var time = moment().format('MMMM Do YYYY, h:mm:ss a');
	$('.current-time').html(time);
}

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
if (screen.width < 768) {
    $('#carousel-example-generic').attr('data-ride', 'carousel');
    $('#carousel-example-generic .col-md-4').addClass('item');
    $('#carousel-example-generic .col-md-4').removeClass('col-md-4');
}

$('body').on('click','.goToMembers',function() {
	$('#getLicenseBtn').click();
});