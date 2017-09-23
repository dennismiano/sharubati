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
//return first page
Route::get('/', function () {
    return view('welcome');
});
//blog user base view
Route::get('/blog', function () {
    return view('welcome');
});
//blog user comment form
Route::get('/blog/comment/form', function () {
    return view('welcome');
});
//blog user comment
Route::post('/blog/comment', function () {
    return view('welcome');
});



//admin panel routes

//return log in form for admin
Route::get('/admin', function () {
    return view('welcome');
});
//return admin dashboard

Route::get('/admin/dashboard', function () {
    return view('welcome');
});

//end admin panel routes
