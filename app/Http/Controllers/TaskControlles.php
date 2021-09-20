<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskControlles extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index' ,['tasks' => $tasks]);
    }

}
