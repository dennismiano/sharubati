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
Route::get('/blog',"blog@view_post");

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

Route::get('/test', 'adminz@ser');




//BEGIN admin panel routes

//admin log in returns admin form
Route::get('/admin', 'adminz@login_form');

//admin check credentials for logging in
Route::post('/admin/login', 'adminz@login_admin');


//returns admin dashboard
Route::get('/admin/home', "adminz@homess");
//blog admin post return blog post form
Route::get('/blog/post/form', 'blog@view_post');
//save blogpost submitted by admin
Route::post('/blog/post', 'blog@create_post');

Route::get('/admin-home', function () {
    return view('/admin/admin_home');
});
//end admin panel routes




/**************************************************PAGE ROUTES**********************************/
Route::get('design-and-print', function () {
    return view('design');
});



Route::get('branding', function () {
    return view('branding');
});
Route::get('test', "admin@er");


Route::get('web', function () {
    return view('web-design');
});

Route::get('development', function () {
    return view('development');
});

Route::get('digital-marketing', function () {
    return view('digital-marketing');
});

