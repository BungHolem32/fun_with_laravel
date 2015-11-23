<?php namespace App\Http\Middleware;

use App\RankedGroups;
use App\route;
use App\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		if ($this->auth->guest())
		{
			if ($request->ajax())
				return response('Unauthorized.', 401);

			else
				return redirect()->guest('auth/login');
		}

        if (!$this->checkAccess($request))
            return response(\Route::current()->uri() . ' Unauthorized.', 401);

        \View::share( 'user', \Auth::getUser() );
		return $next($request);
	}

	/**
	 * @param \Illuminate\Http\Request $request
	 * @return bool
	 */
    protected function checkAccess($request)
    {
        $allowedArray = $request->user()->group()->allowed();
        if(in_array('*', $allowedArray))
            return true;

        return (bool) in_array(\Route::current()->uri(), $allowedArray);
    }




}
