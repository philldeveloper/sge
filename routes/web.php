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

Route::namespace('Site')->group(function() {
    Route::get('/', 'HomepageController');
    Route::get('/casamentos', 'WeddingController');
    Route::get('/aniversarios', 'BirthdayController');
});

Route::get('/page1', function () {
    return view('site.pages.weddings.examples.one.page1');

});
Route::get('/niver1', function () {
    return view('site.pages.birthdays.examples.one.page1');

});



