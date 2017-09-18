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

    $tasks = [
        "Task 1, {input task}",
        "Task 2, {input task}",
        "Task 3, {input task}"
    ];

    return view('welcome', compact('tasks'));
    /*
    //The Three Dimensional Array will support variable pipelining to the blade file.
    return view('welcome',[
        'name' => 'Remco'
    ]);
    */

    /*
    //Works as well as the above example.
    return view('welcome')->with('name', "Remco");
    */

    /*
    //Works as well as the above example(s), but will give you a more compact codebase.
    //Compact will give you a generated array with the given key words which will search for a valid value.
    $name = "Remco";
    return view('welcome', compact('name'));
    */
});