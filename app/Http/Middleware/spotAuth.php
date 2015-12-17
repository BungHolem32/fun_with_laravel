<?php namespace App\Http\Middleware;

use App\Customer;
use App\Http\Controllers\OpenAccountController;
use Closure;

class spotAuth {




    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (!Customer::isLogged()){
            \View::share( 'isLogged', false );
        }
        else {
            //$efresh = floatval(Customer::get()->auth['authKeyExpiry']) - floatval(date('YmdHis'));
                \View::share( 'isLogged', true );
                \View::share( 'customer', Customer::get());
        }
		return $next($request);
	}

}
