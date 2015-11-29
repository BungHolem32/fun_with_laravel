<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/


if(!function_exists('br2nl')){
    function br2nl($string, $type=null){
        if($type==null)
            return preg_replace('/\<br(\s*)?\/?\>/i', "\\n", $string);
        elseif($type=='raw')
            return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
    }
}

if(!function_exists('mb_internal_encoding')){
	function mb_internal_encoding(){}
}
if(!function_exists('mb_strtolower')){
	function mb_strtolower($str){return strtolower($str);}
}
if(!function_exists('mb_strtoupper')){
	function mb_strtoupper($str){return strtoupper($str);}
}
if(!function_exists('mb_substr')){
	function mb_substr($str, $s, $l, $p=null){return substr($str, $s, $l);}
}
if(!function_exists('mb_regex_encoding')){
	function mb_regex_encoding(){return 'UTF-8';}
}

if(!function_exists('mb_strlen')){
    function mb_strlen($str){return strlen($str);}
}

$app = new Illuminate\Foundation\Application(
	realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/


$app->singleton(
	'Illuminate\Contracts\Http\Kernel',
	'App\Http\Kernel'
);

$app->singleton(
	'Illuminate\Contracts\Console\Kernel',
	'App\Console\Kernel'
);

$app->singleton(
	'Illuminate\Contracts\Debug\ExceptionHandler',
	'App\Exceptions\Handler'
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
