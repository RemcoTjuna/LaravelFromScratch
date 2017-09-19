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

//Blog Routes
Route::get('/blogs', "BlogController@index");
Route::get('/blogs/{blog}', "BlogController@show");
Route::get('/blogs/create', "BlogController@create");
Route::post('/blogs', "BlogController@store");

//Post Routes
Route::get('/blogs/{blog}/posts', "PostController@index");
Route::get('/blogs/{blog}/posts/{post}', "PostController@show");
Route::get('/blogs/{blog}/posts/{post}/create', "PostController@create");
Route::post('/blogs/{blog}/posts', "PostController@store");

//Comment Routes
Route::post('/blogs/posts/{post}/comments', "CommentsController@store");
