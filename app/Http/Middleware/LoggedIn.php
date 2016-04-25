<?php
/**
 * Created by PhpStorm.
 * User: simchay
 * Date: 3/30/2016
 * Time: 5:38 PM
 */

namespace app\Http\Middleware;


use App\Customer;

class LoggedIn
{

    public function handle($request, $next){
        if(Customer::isLogged())
            return $next($request);
        return ['err'=>1, 'errs'=>['error'=>['Your session has expired, please log in again.']], 'refresh'=>true];
    }

}