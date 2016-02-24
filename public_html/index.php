<?php

/**
 * Checking if the url is cache able - meaning the page should be cached
 * if request is GET
 * AND if not an admin page
 * AND if url is assumed to be a home page - only '/', or one slug, possibly with two-digit language code.
 */
$uri = explode("?", $_SERVER['REQUEST_URI']);
$url = $_SERVER['HTTP_HOST'].$uri[0];
$cacheable = ($_SERVER['REQUEST_METHOD'] == 'GET'
				&& strpos($url, $_SERVER['HTTP_HOST'].'/admin') !== 0
				&& strpos($url, $_SERVER['HTTP_HOST'].'/getLocation') !== 0
				&& strpos($url, $_SERVER['HTTP_HOST'].'/runBot') !== 0
				&& strpos($url, $_SERVER['HTTP_HOST'].'/logout') !== 0
				&& strpos($url, $_SERVER['HTTP_HOST'].'/lp/') !== 0
				&& preg_match('/^\/((\w{2}\/)?\w+\/?)?$/', $uri[0])
				&& $_SERVER['REMOTE_ADDR'] != '31.154.27.50');
if($cacheable){
	// its not admin: do cache
	$filename = '../storage/html/'.md5($url).'.html';
	/*echo time();
	echo '<br>'.filemtime($filename);
	echo '<br>'.(time() - filemtime($filename)).'<br>';*/
	if (file_exists($filename) && time() - filemtime($filename) < (5 * 60)) {
		// load from html file
		header('X-brute-cache: true');
		ob_end_clean();
		readfile($filename);
		die;
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

// Save cache in html file
if($cacheable){
	file_put_contents($filename,$response->getContent().'<!-- Url: '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'-->');
}



$response->send();

$kernel->terminate($request, $response);