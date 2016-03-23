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

});

function tick(){
		$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
	}
setInterval(function(){ tick () }, 2000);

$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}
/**/
var start = 111854;
var invervat = 12;
var end = 811854;
function add_counter() {
    
    if(start < end) {
        start += invervat ;
        $('#result').html(start).digits();
    } else {
        start += 1 ;
        $('#result').html(start).digits();
    }

}
var timerId = setInterval(add_counter, 2500);
$("#result").digits();

/**/
var n = 100; 
var end = 10;
var n2 = 10; 
var end2 = 1;
setInterval(function(){
	n = n - 10;
	n2 = n2 - 1;
	n4 = n2 + 1;
	n3 = n + 10;
	if(n2 < end2) {

	}
	else {
		$('.progress-radial').removeClass('progress-'+n3);
		$('.progress-radial').toggleClass('progress-'+n);
		$('.overlay strong').html(n2);
		$('.count').html(n2);
	}
}, 5000);

/**/
(function () {
if (document.getElementsByClassName('video-progress').length > 1)
  return;
(function videoViewersCountLoop() {
  var rand = Math.round(Math.random() * (8000 - 200)) + 200;  // Random Number Delay
  setTimeout(function () {
	var peopleElements = document.getElementsByClassName('video-progress-viewers-count');
	for (var i = 0; i < peopleElements.length; i++) {
	  peopleElements[i].innerHTML = parseInt(peopleElements[i].innerHTML) + 1;
	}
	videoViewersCountLoop();
  }, rand);
}());
}());

/**/
if (screen.width < 768) {
    $('#carousel-example-generic').attr('data-ride', 'carousel');
    $('#carousel-example-generic .col-md-4').addClass('item');
    $('#carousel-example-generic .col-md-4').removeClass('col-md-4');
}