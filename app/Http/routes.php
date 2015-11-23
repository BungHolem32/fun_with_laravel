<?php


use App\Page;
use App\Http\Controllers\Controller;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::post('open-account', ['uses' => 'OpenAccountController@store'] );
Route::post('accountLogin', ['uses' => 'OpenAccountController@login'] );
Route::get('logout', ['uses' => 'OpenAccountController@logout'] );


Route::group(['middleware' => 'auth', 'prefix'=>'admin'], function(){

    Request::localization();

    Route::get('settings', ['as' => 'settings', function() {return view('admin.settings.settings');}]);
    Route::get('languages', ['as' => 'languages', 'uses' => 'Admin\LanguagesController@index']);
    Route::post('languages', ['as' => 'languages', 'uses' => 'Admin\LanguagesController@update']);
    Route::get('translations', ['as' => 'translations', 'uses' => 'Admin\TranslationsController@index']);
    Route::post('translations', ['as' => 'translations', 'uses' => 'Admin\TranslationsController@update']);
    Route::controller('users', 'Admin\UsersController');

    Route::get('new-page', ['uses' => 'Admin\PageController@create', 'as' => 'newPage'] );
    Route::post('new-page', ['uses' => 'Admin\PageController@store', 'as' => 'newPage'] );
    Route::post('pages-order', ['uses' => 'Admin\PageController@order', 'as' => 'order'] );
    Route::post('mongo-order', ['uses' => 'Admin\MongoController@order', 'as' => 'mongo-order'] );
    Route::post('mongo-delete', ['uses' => 'Admin\MongoController@delete', 'as' => 'mongo-delete'] );
    Route::post('add-route/{id}', ['uses' => 'Admin\PageController@addRoute', 'as' => 'addRoute'] );
    Route::delete('delete-page/{id}', ['uses' => 'Admin\PageController@destroy', 'as' => 'deletePage'] );
    Route::post('search-pages/{q}', ['uses' => 'Admin\PageController@search', 'as' => 'searchPages'] );
    Route::get('move-under/{page_id}/{parent_id}', ['uses' => 'Admin\PageController@moveUnder', 'as' => 'moveUnder'] );

    Route::post('dropzone', ['uses' => 'Admin\DropzoneController@upload'] );
    Route::get('dropzone/{id}', ['uses' => 'Admin\DropzoneController@load'] );


    Route::post('{slug}', function(){
        $page = Page::getCurrentPage();
        return Controller::forThis($page, 'update');
    })->where('slug', '(.*)?');

    Route::get('/', function() {
        //dd(Auth::getUser());
        return view('admin.index');
    });

    Route::get('{slug}', function(){
        $page = Page::getCurrentPage();
        if($page->hasChildren() && !isset($_GET['edit']))
            return Controller::forThis($page, 'show');
        return Controller::forThis($page, 'edit');
    })->where('slug', '(.*)?');
});



/**
 * Those beyond are for the users / costumer and NOT for admin purposes
 **/

Route::get('getLocation', ['uses' => 'FormController@location'] );
Route::post('postForm',   ['uses' => 'FormController@postForm'] );

Route::any('{slug}', ['middleware' => 'spotAuth', function(){

    // Set the localization session.
    Request::localization();
    // Now you can use these:
    //  Request::local());
    //  Session::get('local');
    Route::get('/', ['uses' => 'HomeController', 'as' => 'Home'] );

    $page = App\Page::getCurrentPage();
    return Controller::forThis($page, 'index');

}])->where('slug', '(.*)?');





