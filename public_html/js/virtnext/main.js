$(function () {
	var clock = $('.flip-clock').FlipClock({
	});
	var clock = new FlipClock($('.flip-clock'), {
	});
	clock.setCountdown(true);
	clock.setTime(690);
	$('audio').audioPlayer();

	$(".various iframe").click(function () {
		$.fancybox({
			'padding': 0,
			'autoScale': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'title': this.title,
			'width': 640,
			'height': 385
		});
		return false;
	});

	$("img.read-more").fancybox({
		showCloseButton: true,
		maxWidth: 800,
		maxHeight: 600,
		fitToView: true,
		width: '70%',
		height: '70%',
		autoSize: true,
		closeClick: true,
		openEffect: 'elastic',
		closeEffect: 'elastic'
	});
	initForScroll();
});


function bars() {
	var bars_animate = function (elem_num) {
		var progressbar = $('.bar_container:eq(' + elem_num + ') .progress_bar');
		max = progressbar.attr('max');
		value = progressbar.val();

		value += 1;
		addValue = progressbar.val(value);

		$('.bar_container:eq(' + elem_num + ') .progress-value').html(value + '%');
		var $ppc = $('.bar_container:eq(' + elem_num + ') .progress-pie-chart'),
		deg = 360 * value / 100;
		if (value > 50) {
			$ppc.addClass('gt-50');
		}

		$('.bar_container:eq(' + elem_num + ') .ppc-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
		$('.bar_container:eq(' + elem_num + ') .ppc-percents span').html(value + '%');

		if (value == max) {
			clearInterval(animate[elem_num]);
		}
	};

	var animate = {};
	var time = (10);
	animate[0] = setInterval(function () { bars_animate(0) }, time);
	animate[1] = setInterval(function () { bars_animate(1) }, time);
	animate[2] = setInterval(function () { bars_animate(2) }, time);
	animate[3] = setInterval(function () { bars_animate(3) }, time);
}
//Random Balance Numbers

function randBalance() {
	var myRand = Math.floor((Math.random() * 500000) + 20000);
	return myRand.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

var peoples_object = [
{
	name: 'Keith White',
	src: '/img/virtnext/5_f_pic.jpg',
	quote: '&#147; I’ve been investing on Virtnext as my personal money manager since 2014 and I can assure their system is awesome &#132;'
},
{
	name: 'Jennifer Brailko',
	src: '/img/virtnext/4_f_pic.jpg',
	quote: '&#147; I could not imagine I’d be able to make $2500 in one day. I’ve decided to give myself a chance and try Virtnext Ltd and I have no doubt I will get rich trading the markets before the year ends.  &#132;'
},
	{
		name: 'David Lee',
		src: '/img/virtnext/6_f_pic.jpg',
		quote: '&#147; Today I am a new man, I can afford to spend money since I invest on Virtnext. I thank you my best friend Thomas that didn’t forgot about me and sent me the invitation &#132;'
	},
{
	name: 'Christina Stevens',
	src: '/img/virtnext/3_f_pic.jpg',
	quote: '&#147; 3 months ago I started using Virtnext software and I am feeling amazing about my decision. I make huge amounts of money every single week.  &#132;'
},
		{
			name: 'Luke Breeds',
			src: '/img/virtnext/1_f_pic.jpg',
			quote: '&#147; Best trading software ever with amazing and easy to use interface.   Thank you Amanda Thomas for giving me the chance to try this killer! &#132;'
		},
	{
		name: 'Luke David',
		src: '/img/virtnext/2_f_pic.jpg',
		quote: '&#147; After the first week I start to realize this software is really working and I am making very nice profits week after week.   &#132;'
	}
];


function getWindowContainer(elem) {
	return (($(elem).offset().top + $(elem).height()) / 2);
}

var pages_animate_once = {};
pages_animate_once['bars_row'] = false;
pages_animate_once['chart_bar'] = false;
function initForScroll() {
	if( $(".members").length == 0 ){
		// do not run the function
		return;
	}
	var top = $(this).scrollTop();

	/** pages **/

	// members circle bar
	var page_bars_row_top = getWindowContainer(".news-div");

	//  Chart bar 
	var page_chart_bar_top = getWindowContainer(".companys-row");


	/** Page active functions **/

	// members circle bar
	if (page_bars_row_top <= top && pages_animate_once['bars_row'] == false) {
		bars();
		pages_animate_once['bars_row'] = true;
	}

	//  Chart bar 
	if (page_chart_bar_top <= top && pages_animate_once['chart_bar'] == false) {
		barChart();
		pages_animate_once['chart_bar'] = true;
	}
}

//My Lazy Load
$(window).scroll(function () {
	initForScroll();
});

//Bar Chart
function barChart() {
	var chart = AmCharts.makeChart("chartdiv", {
		"type": "serial",
		"theme": "light",
		"marginRight": 10,
		"dataProvider": [{
			"value": "10.0",
			"visits": 10.0,
			"color": "#ffb400"
		}, {
			"value": "6.75",
			"visits": 6.75,
			"color": "#25af44"
		}, {
			"value": "4.50",
			"visits": 4.50,
			"color": "#25af44"
		}, {
			"value": "3.13",
			"visits": 3.13,
			"color": "#25af44"
		}, {
			"value": "6.2",
			"visits": 6.2,
			"color": "#25af44"
		}, {
			"value": "3.58",
			"visits": 3.58,
			"color": "#25af44"
		}, {
			"value": "4.50",
			"visits": 4.50,
			"color": "#25af44"
		}, {
			"value": "6.50",
			"visits": 6.50,
			"color": "#25af44"
		}, {
			"value": "5.76",
			"visits": 5.76,
			"color": "#25af44"
		}, {
			"value": "2.21",
			"visits": 2.21,
			"color": "#25af44"
		}],
		"valueAxes": [{
			"axisAlpha": 0,
			"labelsEnabled": false,
			"gridColor": "#dddddd",
			"gridAlpha": 0.3,
			"dashLength": 0
		}],
		"startDuration": 2,
		"graphs": [{
			"balloonText": "<b>[[category]]: [[value]]</b>",
			"fillColorsField": "color",
			"fillAlphas": 1,
			"lineAlpha": 0.2,
			"type": "column",
			"valueField": "visits",
		}],
		"chartCursor": {
			"categoryBalloonEnabled": false,
			"cursorAlpha": 0,
			"zoomable": false
		},
		"categoryField": "value",
		"categoryAxis": {
			"gridPosition": "start",
			"gridAlpha": 0,
			"tickPosition": "start",
			"tickLength": 20
		},
		"export": {
			"enabled": true
		}
	});
}

function cl(x) {
	console.log(x);
}

$('body').on('click','#sign-me-up-btn',function () {
	$("#first-page-form").submit();
	setTimeout(function () {
		$('label[for="email-popup"]').html($('label[for="email"]').html()).css('display','block');
	},800);
});

function openTerms() {
	$('#term-modal').show();
}

function closeTerms() {
	$('#term-modal').hide();
}

$('body').on('change paste keyup','#email-popup',function () {
	$('#email').val($(this).val());
});