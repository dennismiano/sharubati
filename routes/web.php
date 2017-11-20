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
Route::get('/blog','blog@user_view');

//blog user comment form
Route::get('/blog/comment/form/{id}', 'blog@cmt_form');
//save blog user comment
Route::post('/blog/comment', 'blog@cmt_save');
//user msg form
Route::get('/msg/form', 'messages@form');
//save user messages
Route::post('/msg/save', 'messages@save_msg');
//save subscriber
Route::post('/sub/save','subscribers@save_sub');


Route::get('/test', 'adminz@ser');




//**************BEGIN admin panel routes

//admin log in returns admin form
Route::get('/admin', 'adminz@login_form');
//admin check credentials for logging in
Route::post('/admin/login', 'adminz@login_admin');
//returns admin dashboard
Route::get('/admin/home', "adminz@homess");
//blog admin post return blog post form and blog base view
Route::get('/blog/admin', 'blog@view_post');
//save blogpost submitted by admin
Route::post('/blog/post', 'blog@create_post');
//admin del post
Route::get('/blog/del/post/{id}', 'blog@del_post');
//update post ,form
Route::get('/blog/update/form/{id}','blog@update_post');
//save updated post
Route::post('/blog/update/save','blog@update_save');
//view  a selected post
Route::get('/blog/view/{id}','blog@sel_post');
//admin delete comment
Route::get('/cmt/del/{id}','blog@del_comnt');
//return admin comment form
Route::get('/blog/cmt/{id}','blog@ad_cmt_form');
//save admin cmt
Route::post('/blog/cmt','blog@ad_cmt_save');
//return admin messages base view
Route::get('/msg/view','messages@msg_view');


//************END admin panel routes




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

Route::get('more', function () {
    return view('moresection');
});

