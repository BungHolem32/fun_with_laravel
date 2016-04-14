$(document).ready(function() {
	$('#FirstName').removeClass().addClass('w-input members-field small2').parent().removeClass().addClass('w-col w-col-6 w-clearfix');
	$('#LastName').removeClass().addClass('w-input members-field').parent().removeClass().addClass('w-col w-col-6 w-clearfix');
	$('#email').removeClass().addClass('w-input members-field').parent().removeClass();
	$('#password').removeClass().addClass('w-input members-field').parent().removeClass();
	$('#prefix').removeClass().addClass('w-input members-field w-col').css({'width': '24%', 'padding': '8px 12px'}).parent().removeClass();
	$('#phone').removeClass().addClass('w-input members-field w-col').css({'width': '75%', 'float': 'right', 'padding': '8px 12px'}).parent().removeClass();
	$('#submit').removeClass().addClass('w-button members-submit').parent().removeClass();
});