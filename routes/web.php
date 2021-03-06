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

//By calling #make you will be able to resolve the service container
//This will also make a new instance of this class for you!
$stripe = App::make('App\Billing\Stripe');

//Blog Routes
Route::get('/blogs', "BlogController@index");
Route::get('/blog/{blog}', "BlogController@show");
Route::get('/blogs/create', "BlogController@create");
Route::post('/blogs', "BlogController@store");

//Post Routes
Route::get('/blog/{blog}/posts/{post}', "PostController@show");
Route::get('/blog/{blog}/newpost', "PostController@create");
Route::post('/blog/{blog}/posts', "PostController@store");

//Comment Routes
Route::post('/blog/{blog}/posts/{post}/comments', "CommentsController@store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog/{blog}/posts/tags/{tag}', 'TagController@index');