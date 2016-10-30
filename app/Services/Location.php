<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 2/23/2016
 * Time: 6:38 PM
 */
namespace App\Services;
class Location
{
    public static function getByUserIp()
    {
        $ip = \Request::ip();
        return json_decode(file_get_contents('http://fbilocator.com/geoIpService/legacy/?ip=' . $ip), true);
    }
}