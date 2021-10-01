<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Front\HomeController@index')->name('index');
Route::get('/services', 'Front\HomeController@service')->name('service');
// Route::get('/abouts', 'Front\HomeController@about')->name('about');
Route::get('/solutions', 'Front\HomeController@solution')->name('solution');
Route::get('/careers', 'Front\HomeController@career')->name('career');
Route::get('/contacts', 'Front\HomeController@contact')->name('contact');
Route::get('/about-us', function () {
    return view('front.about');
});

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');
    //contact
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('sliders','Admin\SliderController');
        Route::resource('services','Admin\ServiceController');
        Route::resource('features','Admin\FeatureController');
        Route::resource('testinomials','Admin\TestinomialController');
        Route::resource('latestworks','Admin\LatestworkController');
        Route::resource('projects','Admin\ProjectController');
        Route::resource('teams','Admin\TeamController');
        Route::resource('pricings','Admin\PricingController');
        Route::resource('blogs','Admin\BlogController');
});
});
// Route::get('/home', 'HomeController@index')->name('home');