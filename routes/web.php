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

Route::get('/', 'SiteController@home');

Route::get('/calendar', 'SiteController@calender');
Route::get('/hospitals', 'SiteController@hospitals');
Route::get('/hotels', 'SiteController@hotels');
Route::get('/resturants', 'SiteController@resturants');
Route::get('/embassies', 'SiteController@embassies');
Route::get('/emergencies', 'SiteController@emergencies');
Route::get('/umra', 'SiteController@umra');
Route::get('/hejj', 'SiteController@hejj');
Route::get('/markets', 'SiteController@markets');
Route::get('/transportation', 'SiteController@transportation');
Route::get('/emb', 'SiteController@get_embassies');
Route::get('/test', 'SiteController@test');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/train', function () {
    return view('user.pages.train');
});
Route::get('/Camp', function () {
    return view('Campaigns');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
