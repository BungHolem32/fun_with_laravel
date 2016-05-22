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
        'yourway2profit.com' => 'skylinemarkets.com'
    ];

    public static function domainName($domain=''){
        if(!$domain) {
            $domain = $_SERVER['HTTP_HOST'];
        }
        preg_match('/[^.]+\.[^.]+$/', $domain, $domain); // remove any subdomains
        return $domain[0];
    }

    public static function getDestination($domain=''){
        $domain=self::domainName($domain);
        if(!$domain || !array_key_exists($domain, self::$domains_destinations)) {
            $domain = 'default';
        }
        return self::$domains_destinations[$domain];
    }

    public static function autologinLink($destination, $customer){
        if(!$destination){
            $destination = self::getDestination();
        }
        switch($destination){
            case 'rboptions.com':
                $link = "http://www.rboptions.com/users.php?act=check&email=".$customer->email."&password=".$customer->password;
                break;
            case 'skylinemarkets.com':
                $data = json_encode([$customer->email, $customer->password]);
                $hash = base64_encode($data);
                $hash = strtr($hash, '+/', '-_');
                $hash = trim($hash, '=');
                $link = 'https://skylinemarkets.com/remoteLogin?login='.$hash;
                break;
            default:
                throw new Exception('domain not configured correctly');
        }
        return $link;
    }

}