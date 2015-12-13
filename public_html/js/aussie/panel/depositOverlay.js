(function(){
	$('#broker-login-form-fallback').on('submit', function(){
		$(this).attr('action', data.broker.loginTargetNoSecure);
	});

	// REMOVE THIS LINE TO DISABLE DEPOSIT TROUGH API ####  DEPOSITAPI  ####
	if(parseInt(hasAPI)) {
		$('*[data-target=#depositModal]').attr('data-target', '#formDepositModal');
		$('#formDepositIframe').ready(function(){
		$('#deposit-loading').fadeOut();
		});
	}
}());