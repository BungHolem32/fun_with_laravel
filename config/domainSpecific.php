<?php

return call_user_func(function(){
	$domain = $_SERVER['HTTP_HOST'];
	preg_match('/[^.]+\.[^.]+$/', $domain, $domain); // remove any subdomains

	if(!file_exists(__DIR__ . '/domains/domain_specific.json'))
		die('Missing Domain Specific File.');

	$domainSpecificArr 	= json_decode(file_get_contents(__DIR__ . '/domains/domain_specific.json'),true);

	if(array_key_exists ($domain[0], $domainSpecificArr['domains']))
		$tempDomainSpecific = $domainSpecificArr['domains'][$domain[0]];
	else
		$tempDomainSpecific = $domainSpecificArr['domains']['default'];

	$tempCaptchaArr 	= $domainSpecificArr['captcha_groups'][$tempDomainSpecific['captcha']];
	$tempDomainSpecific['captcha'] = $tempCaptchaArr;
	return $tempDomainSpecific;
});
