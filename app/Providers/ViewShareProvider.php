<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        //dd('test2');
        //dd(Auth::getUser());
        //\View::share( 'user', Auth::getUser() );
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
