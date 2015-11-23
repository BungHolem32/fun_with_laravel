<?php namespace App\Http\Middleware;

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
        if (!OpenAccountController::isLogged()){
            \View::share( 'isLogged', false );
        }
        else {
            $customer = OpenAccountController::getCustomer();
            $efresh = floatval($customer['authKeyExpiry']) - floatval(date('YmdHis'));
            if($efresh > 0){
                \View::share( 'isLogged', true );
                \View::share( 'customer', $customer );
            }
            else {
                OpenAccountController::logout();
                return redirect()->guest('/');
            }

        }

		return $next($request);
	}

}
