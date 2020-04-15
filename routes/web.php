<?php
/**
 * prefix works like a wild card instead of manually settin each prefix
 * on its own
 */
Route::get('/csv/{lang}/{name}', 'CsvFilesController@csv_to_array');

// to clear the cache from a route
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/test', function() {
    return view('pages.test.index');
});
Route::post('/api', 'ProductsController@index');
Route::post('/api/product', 'ProductsController@product');

Route::prefix('{locale}')->group(function() {
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('/onyx', 'PagesController@onyx')->name('onyx');
    Route::get('/contact', 'PagesController@contact')->name('contact');
    Route::get('/compatibilty', 'PagesController@compatibility')->name('compatibility');
    Route::get('/shipping', 'PagesController@shipping')->name('shipping');
    Route::get('/cookies', 'PagesController@cookies')->name('cookies');
    Route::get('/warranty', 'PagesController@warranty')->name('warranty');
    Route::get('/legal', 'PagesController@legal')->name('legal');
    Route::get('/leo', 'PagesController@leo')->name('leo');
    Route::get('/leo/{image}', 'PagesController@leoImage')->name('leoImage');
    Route::get('/coupon', 'PagesController@test')->name('test');
    Route::post('/coupon', 'PagesController@couponSubscribe')->name('coupon');
    Route::get('/lock', 'PagesController@lock')->name('lock');
    Route::post('/lock', 'PagesController@lockPost')->name('lockPost');

    Route::get('/discount', 'PagesController@discount')->name('discount');
});
Route::get('/', 'PagesController@index')->name('index');
// Get data from OpenCart



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

/**
 * used by the contact form submission
 */
Route::post('/contact', 'ContactFormController');


