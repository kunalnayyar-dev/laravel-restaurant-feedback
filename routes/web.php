<?php

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

// This is the home page route
Route::get('/buaji', 'SiteController@index');

// This is the form submission route
Route::post('/buaji', 'SiteController@store');

// This just defines all the auth routes (/login, /register, etc etc). This is a helper function from laravel, so no need to type all the routes separately.
Auth::routes();

// This is the route for the admin screen. See how it is grouped under a middleware auth route? That means, it checks if user is logged in, and only displays this /admin route/page only if user is logged in (only admin has a user).
Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'HomeController@index')->name('admin');
});