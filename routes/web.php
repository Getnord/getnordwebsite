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
/**
 * prefix works like a wild card instead of manually settin each prefix 
 * on its own
 */
Route::prefix('{locale?}')->group(function() {
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('/contact', 'PagesController@contact')->name('contact');
    Route::get('/compatibilty', 'PagesController@compatibility')->name('compatibility');
    Route::get('/shipping', 'PagesController@shipping')->name('shipping');
    Route::get('/cookies', 'PagesController@cookies')->name('cookies');
    Route::get('/warranty', 'PagesController@warranty')->name('warranty');
    Route::get('/legal', 'PagesController@legal')->name('legal');
});

Route::post('/contact', 'ContactFormController');

