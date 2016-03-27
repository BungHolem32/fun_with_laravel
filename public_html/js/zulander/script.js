var now				= new Date();
var nextYearUnix	= new Date(new Date().setTime(now.getTime() + 360*24*60*60*1000)).toUTCString();

$(document).ready(function() {

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
	$('#submit').not('.active-submit').remove();
	$('input').removeClass('form-control');
});

function cl(x) {
	console.log(x);
}

function tick() {
	$('#ticker li:first').slideUp(function () {
		$(this).appendTo($('#ticker')).slideDown();
	});
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
	var licenses			= parseInt(getCookies().licenses) || locationContent.licenses.count;


	if(licenses != locationContent.licenses.count) {
		animationState = parseInt((licenses / locationContent.licenses.count) * 10) * 10;
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
	var viewers		= parseInt((getCookies).viewers) || 1871;
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

// $('body').on('click','#getLicenseBtn',function() {
// 	var email = $('#firstPageSignUpMail').val();
// 	if(email) window.location = window.location.hostname + window.location.pathname + "/members"
// });


setInterval(updateLicensesCounter,locationContent.licenses.timer.interval);
updateLicensesCounter();
updateLiveResultCounter();
updateVideoViewers();
setInterval(tick, 2000);
