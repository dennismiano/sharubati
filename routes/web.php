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
//return welcome page
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

//return form
Route::post('/project/form', function () {
    return view('welcome');
});

Route::get('/test', function () {
	$msg="hit here ";
    return  $msg;
});




//BEGIN admin panel routes

//admin log in returns admin form
Route::get('/admin', 'admin@login_form');

//admin check credentials for logging in
Route::post('/admin/login', 'admin@login_admin');


//returns admin dashboard
Route::get('/admin/home', function () {
    return view('welcome');
});
//blog admin post return blog post form
Route::get('/blog/post/form', function () {
    return view('welcome');
});
//save blogpost submitted by admin
Route::post('/blog/post', function () {
    return view('welcome');
});

//end admin panel routes
