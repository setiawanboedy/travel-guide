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
    Route::get('/destination-detail/{slug}', 'DestDetailController@index')->name('destination-detail');

});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(TourDetailController::class)
    ->group(function(){
        Route::get('/guide-detail/{slug}', 'index')->name('guide-detail');
});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(UploadPaymentController::class)
    ->group(function(){
        Route::get('/upload-payment/{transId}', 'index')->name('upload-payment');
        Route::post('/upload-payment/update/{id}', 'update')->name('update-payment');
});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(ReviewGuideController::class)
    ->group(function(){
        Route::get('/hire-guide/review-guide/{id}', 'index')->name('review-guide');
        Route::post('/hire-guide/review-guide/create/{id}', 'create')->name('review-guide-create');
});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(HireGuideController::class)
    ->group(function(){
        Route::get('/hire-guide/{id}', 'index')->name('hire');
        Route::post('/hire-guide/create/{id}','create')->name('hire-create');

});

Route::namespace('App\Http\Controllers')
    ->middleware(['auth','web'])
    ->controller(CheckoutController::class)
    ->group(function(){
        Route::post('/checkout/process/{id}', 'process')->name('checkout-process');
        Route::get('/checkout/{id}', 'index')->name('checkout-package');
        Route::post('/checkout/create/{detail_id}', 'create')->name('checkout-create');
        Route::get('/checkout/remove/{detail_id}', 'remove')->name('checkout-remove');
        Route::get('/checkout/confirm/{id}', 'success')->name('checkout-success');
});

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('guide-package', TourGuidePackageController::class);
        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);

        Route::post('transaction/filter', 'TransactionController@filter')->name('filter-trans');
        Route::post('transaction/pdf', 'TransactionController@pdf')->name('pdf-trans');
        Route::resource('transaction', TransactionController::class);

    });

Auth::routes();
