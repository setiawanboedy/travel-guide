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

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'WelcomeController@index')->name('home');
    Route::get('/auth', 'AuthController@index')->name('auth');
    Route::get('/guide', 'TourGuideController@index')->name('guide');
    Route::get('/destination-detail', 'DestDetailController@index')->name('destination-detail');
    Route::get('/guide-detail', 'TourDetailController@index')->name('guide-detail');
    Route::get('/checkout', 'CheckoutController@index')->name('checkout');
    Route::get('/review', 'ReviewController@index')->name('review');
});
Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('guide-package', TourGuidePackageController::class);
    });

Auth::routes();
