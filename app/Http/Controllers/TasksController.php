<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    //The (Task $task) parameter is also known as model binding. It will pass the wildcard to the ::find method within the model.
    public function show(Task $task){
        //$task = Task::find($id);
        return view('tasks.task', compact('task'));
    }
}
