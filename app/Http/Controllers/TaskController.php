<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Show all tasks
    // public function index($filter = null){
    //     // return view('tasks.index', ['tasks' => Task::latest()->get()]);
    //     if($filter === "completed"){
    //         $tasks = Task::where('completed', true)->get();
    //     } else if($filter === "not-completed"){
    //         $tasks = Task::where('completed', false)->get();
    //     } else {
    //         $tasks = Task::latest()->get();
    //     }
    //     return view('tasks.index', compact('tasks'));
    // }

    public function index(Request $request)
{
    $filter = $request->input('filter');
    $sort = $request->query('sort', 'asc');
    $query = $request->query('q');

    $tasks = Task::query();

    if ($filter === 'completed') {
        $tasks->where('completed', true);
    } elseif ($filter === 'not-completed') {
        $tasks->where('completed', false);
    }

    if ($query) {
        $tasks->where('title', 'like', '%' . $query . '%');
    }

    $tasks->orderBy('id', $sort === 'desc' ? 'desc' : 'asc');

    $tasks = $tasks->get();

    return view('tasks.index', compact('tasks', 'filter'));
}

    //Show single task
    public function show(Task $task){
        return view('tasks.show', ['task' => $task]);
    }
}
