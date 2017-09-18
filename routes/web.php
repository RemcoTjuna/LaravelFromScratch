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

Route::get('/tasks', function () {

    //Will fetch all data from the 'tasks' table.
    $tasks = DB::table('tasks')->latest()->get();

    return view('tasks.index', compact('tasks'));
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

//Wildcard {}
Route::get('/tasks/{task}', function ($id) {
    //This will find (or fail) a record with the id equal to our id parameter.
   $task = DB::table('tasks')->find($id);
   return view('tasks.task', compact('task'));
});