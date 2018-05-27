<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use auth;

class TasksController extends Controller
{
    //

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',[

            'tasks' => $tasks
        ]);
    }
    public function create()
    {

        return view('tasks.create');
    }
    public function store(Request $request)
    {
       
        Task::create([
            'tasks_list' => $request->tasks_list,
            'user_id' => Auth::user()->id,
        ]);
        
       return redirect(route('tasks')); 
    }
}
