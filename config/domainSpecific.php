<?php

return call_user_func(function (){
    $domain = $_SERVER['HTTP_HOST'];
    preg_match('/[^.]+\.[^.]+$/', $domain, $domain); // remove any subdomains

    if (!file_exists(__DIR__ . '/domains/domain_specific.json') || json_decode(file_get_contents(__DIR__ . '/domains/domain_specific.json'), true) === null){
        $subject = 'Error missing Domain Specific file in Funnel system.';
        $msg = 'Missing Domain Specific file in Funnel system for ' . $domain[0];
        $email1 = \App\Services\Ems\StandardEmail::ALERT('rotemg@rboptions.com', $subject, $msg);
        $email2 = \App\Services\Ems\StandardEmail::ALERT('alexa@rboptions.com', $subject, $msg);
        $sender = new \App\Services\Ems\Sender(env('EMAIL_SERVER'), env('EMAIL_PASS'), 'funnels');
        $sender->addEmailToQueue($email1);
        $sender->addEmailToQueue($email2);
        $sender->commit();

        $domainSpecificArr['captcha'] = [
            'dataSiteKey' => "6Ld39RMTAAAAALVGhMswy185zq0C2bmP-gydSrSI",
            'secret' => "6Ld39RMTAAAAAPZmYhrvY0sZ1FpwcFSC0oXf9jTn"
        ];
        return $domainSpecificArr;
    }

    $domainSpecificArr = json_decode(file_get_contents(__DIR__ . '/domains/domain_specific.json'), true);

    if (array_key_exists($domain[0], $domainSpecificArr['domains']))
        $tempDomainSpecific = $domainSpecificArr['domains'][$domain[0]];
    else
        $tempDomainSpecific = $domainSpecificArr['domains']['default'];

    $tempCaptchaArr = $domainSpecificArr['captcha_groups'][$tempDomainSpecific['captcha']];
    $tempDomainSpecific['captcha'] = $tempCaptchaArr;

    return $tempDomainSpecific;
});
