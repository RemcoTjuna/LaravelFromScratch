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

//Controller based pipeline request.
Route::get('/tasks', "TasksController@index");

//Controller based pipeline request (with a wildcard {})
Route::get('/tasks/{task}', "TasksController@show");

//Controller based pipeline request
Route::get('/posts', "PostsController@index");
Route::get('/posts/{id}', "PostsController@show");