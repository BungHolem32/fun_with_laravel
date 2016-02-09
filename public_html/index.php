<?php

// need to open this link(domain/?cache=0) run on some explorer, this link is secured and need to be closed when not working
// FOR CACHE - only for stage.
if(($_SERVER['REMOTE_ADDR'] == '31.154.27.50' || (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) && $_SERVER['HTTP_X_FORWARDED_FOR'] == '31.154.27.50')) {
	//$_GET['epass'] = 532;
	if (isset($_GET['cache'])) {
		mkdir("/var/www/storage/framework/views", 0777);
		$dirname = '/var/www/storage/framework/views/';
		if (is_dir($dirname))
			$dir_handle = opendir($dirname);
		if (!$dir_handle)
			return false;
		while ($file = readdir($dir_handle)) {
			if ($file != "." && $file != "..") {
				if (!is_dir($dirname . "/" . $file))
					unlink($dirname . "/" . $file);
				else {
					delete_directory($dirname . '/' . $file);
				}
			}
		}
		closedir($dir_handle);
		header('Refresh: 5');
		die();
	}
}


/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

// set the public path to this directory
$app->bind('path.public', function() {
	return __DIR__;
});

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);