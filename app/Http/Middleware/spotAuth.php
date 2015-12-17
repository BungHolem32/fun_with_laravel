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
            $efresh = floatval(Customer::get()->authKeyExpiry) - floatval(date('YmdHis'));
            if($efresh > 0){
                \View::share( 'isLogged', true );
                \View::share( 'customer', Customer::get());
            }
            else {
                Customer::logout();
                return redirect()->guest('/');
            }

        }

		return $next($request);
	}

}
