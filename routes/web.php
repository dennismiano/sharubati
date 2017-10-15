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

Route::get('/', function () {
    return view('welcome');
});



/**************************************************PAGE ROUTES**********************************/
Route::get('design-and-print', function () {
    return view('design');
});


Route::get('branding', function () {
    return view('branding');
});


Route::get('web', function () {
    return view('web-design');
});

Route::get('development', function () {
    return view('development');
});

Route::get('digital-marketing', function () {
    return view('digital-marketing');
});