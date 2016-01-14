<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 1/14/2016
 * Time: 12:48 AM
 */

namespace App;


use Franzose\ClosureTable\Models\Entity;

class IpLog extends Entity
{

    private $ip;
    private $date;
    private $action;

    public static function count($ip, $action=null, $time=24*60*60){
        $sql = 'SELECT count(*) `count` from `ip_logs` where `ip`=? AND `time` > ? ';
        $params = [$ip, date('Y-m-d H:i:s', time() - $time)];
        if($action){
            $sql .= ' AND `action` = ?';
            $params[] = $action;
        }
        return intval(\DB::selectOne($sql, $params)->count);
    }

    public static function add($ip, $action){
        return \DB::insert('insert into `ip_logs`(`ip`,`action`) VALUES (?, ?)', [$ip, $action]);
    }

}
