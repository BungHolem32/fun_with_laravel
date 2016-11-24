<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 5/22/2016
 * Time: 5:20 PM
 */

namespace App\Services;


class Domains
{

    private static $domains_destinations = [
        'default' => 'rboptions.com',
        'yourway2profit.com' => 'skylinemarkets.com',
        'oxfordway2profit.com' => 'skylinemarkets.com',
        'maxway2profit.com' => 'skylinemarkets.com',
        'maxiprofiter.com' => 'skylinemarkets.com',
        'cloudway2profit.com' => 'skylinemarkets.com',
        'cloudprofiter.com' => 'skylinemarkets.com',
        'walterprofiter.com' => 'skylinemarkets.com',
        'aussieway2profit.com' => 'skylinemarkets.com',
        'aussieprofiter.com' => 'skylinemarkets.com',
        'mapleway2profit.com' => 'skylinemarkets.com',
        'mapleprofiter.com' => 'skylinemarkets.com',
        'millionaireway2profit.com' => 'skylinemarkets.com',
        'millionaireprofitersystem.com' => 'skylinemarkets.com',
        'bavarianway2profit.com' => 'skylinemarkets.com',
        'alpineway2profit.com' => 'skylinemarkets.com',
        'maxiprofiter-de.com' => 'skylinemarkets.com',
        'maxway2profit-de.com' => 'skylinemarkets.com',
        'oxfordprofiter.com' => 'skylinemarkets.com',
        'alpineprofiter.com' => 'skylinemarkets.com',
        'bavarianprofiter.com' => 'skylinemarkets.com',
        'psymoneysystem.com' => 'skylinemarkets.com',
        'aussiemoneysystem.com' => 'skylinemarkets.com',
        'oxfordmoneysystem.com' => 'skylinemarkets.com',
        'maplemoneysystem.com' => 'skylinemarkets.com',
        'cloudmoneysystem.com' => 'skylinemarkets.com',
        'millionmoneysystem.com' => 'skylinemarkets.com',
        'profitmaxmoneysystems.com' => 'skylinemarkets.com',
        'profitmaxmoneysystem-de.com' => 'skylinemarkets.com',
        'bavarianmoneysystem.com' => 'skylinemarkets.com',
        'alpinemoneysystem.com' => 'skylinemarkets.com',
        'luxvacationturkish.com' => 'skylinemarkets.com',
        'football-insights.com' => 'skylinemarkets.com',
        'thefinancialife.com' => 'skylinemarkets.com',
        'theprofitmagazine.com' => 'skylinemarkets.com',
        'theweeklyfinancials.com' => 'skylinemarkets.com',
        'skylinemarkets.biz' => 'skylinemarkets.com',
        'autotradingpanel.com' => 'skylinemarkets.com',
        'aff88541.com' => self::BRAND_BCM_WW,
        'aff55845.com' => self::BRAND_BCM_WW
    ];


    const BRAND_BCM_WW = 'www.binarycm.com';

    public static function domainName($domain = '')
    {
        if (!$domain){
            $domain = $_SERVER['HTTP_HOST'];
        }
        preg_match('/[^.]+\.[^.]+$/', $domain, $domain); // remove any subdomains
        return $domain[0];
    }

    public static function getDestination($domain = '')
    {
        $domain = self::domainName($domain);
        if (!$domain || !array_key_exists($domain, self::$domains_destinations)){
            $domain = 'default';
        }
        return self::$domains_destinations[$domain];
    }

    public static function autologinLink($destination, $customer)
    {
        if (!$destination){
            $destination = self::getDestination();
        }
        if (strpos($destination, 'rboptions') !== false){
            $link = "http://www.rboptions.com/users.php?act=check&email=" . $customer->email . "&password=" . $customer->password;
        } elseif (strpos($destination, self::BRAND_BCM_WW) !== false){
            $link = "http://www.binarycm.com/remoteLogin?email=" . $customer->email . "&password=" . $customer->password;
        } elseif (strpos($destination, 'skylinemarkets') !== false){
            $data = json_encode([$customer->email, $customer->password]);
            $hash = base64_encode($data);
            $hash = strtr($hash, '+/', '-_');
            $hash = trim($hash, '=');
            $link = 'https://skylinemarkets.com/remoteLogin?login=' . $hash;
        } else{
            // destination might be a page (e.g. robot panel) or a different site. return without changing it.
            $link = $destination;
        }
        return $link;
    }

}