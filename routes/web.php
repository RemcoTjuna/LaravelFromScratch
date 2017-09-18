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
Route::post('/blogs', "BlogController@store");
Route::get('/blogs/create', "BlogController@create");
Route::get('/blogs/post/{post}', "BlogController@show");
