<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
//use PharIo\Manifest\Url as ManifestUrl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\Welcome\WelcomeController@index');

//Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');

// Projects
Route::get('/projects', 'Frontend\Projects\ProjectController@index')->name('projects');
// Activity
Route::get('/activities', 'Frontend\Activities\ActivityController@index')->name('activities');

// Page route
Route::get('/general-info/{slug?}', 'Frontend\Pages\PageController@index');
Route::get('/site-info/{slug?}', 'Frontend\Pages\PageController@index');
Route::get('/company-info/{slug?}', 'Frontend\Pages\PageController@index');

// Project
Route::get('/project/{id}/description', 'Frontend\Project\ProjectController@index');
Route::get('/project/{id}/activities', 'Frontend\Project\ProjectController@index');
Route::get('/project/{id}/discussion', 'Frontend\Project\ProjectController@index');
Route::get('/project/{id}/author', 'Frontend\Project\ProjectController@index');
Route::get('/project/{id}/team', 'Frontend\Project\ProjectController@index');
Route::get('/project/{id}', 'Frontend\Project\ProjectController@index');

// Set locale
Route::get('locale/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ru'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    App::setLocale($locale);

    return Redirect::to(URL::to(URL::previous()));
    //return redirect(url(URL::previous()));

})->name('set_locale');

//
Route::fallback(function () {
    abort(404);
});