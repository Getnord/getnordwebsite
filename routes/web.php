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

Route::get('/test', function() {
    return view('pages.test.index');
});

Route::prefix('{locale?}')->group(function() {
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('/contact', 'PagesController@contact')->name('contact');
    Route::get('/compatibilty', 'PagesController@compatibility')->name('compatibility');
    Route::get('/shipping', 'PagesController@shipping')->name('shipping');
    Route::get('/cookies', 'PagesController@cookies')->name('cookies');
    Route::get('/warranty', 'PagesController@warranty')->name('warranty');
    Route::get('/legal', 'PagesController@legal')->name('legal');
});

/**
 * The following route handles generating a javascript object that will be served 
 * to the front-end. It will be consumed by the shoppingCart only.
 * After doing some further testing and finishing up the front-end 
 * This will be converted into its own controller
 */
Route::get('js/lang-{locale}.js', function ($locale) {
    $localeExists = !array_key_exists($locale, config('app.locales'));
    // config('app.locales') gives all supported locales
    if (!$localeExists ) {
        $locale = config('app.fallback_locale');
    };

    // Add locale to the cache key
    $json = \Cache::rememberForever("lang-{$locale}.js", function () use ($locale) {

        // $files   = glob(resource_path('lang/' . $locale . '/*.php'));
        /**
         * currently we only want the translations form the shopping cart
         */
        $files = glob(resource_path('lang/' . $locale . '/shoppingCart.php'));
        $strings = [];

        foreach ($files as $file) {
            $name           = basename($file, '.php');
            $strings[$name] = require $file;
        }

        return $strings;
    });

    $contents = 'window.i18n = ' . json_encode($json, config('app.debug', false) ? JSON_PRETTY_PRINT : 0) . ';';
    $response = \Response::make($contents, 200);
    $response->header('Content-Type', 'application/javascript');

    return $response;
});


Route::post('/contact', 'ContactFormController');


