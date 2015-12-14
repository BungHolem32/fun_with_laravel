<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 13/12/2015
 * Time: 15:56
 */

namespace app\Lib\Facades;

use Illuminate\Support\Facades\Facade;

class CustomerFacade extends Facade{
    protected static function getFacadeAccessor(){
        return 'customer';
    }
}
