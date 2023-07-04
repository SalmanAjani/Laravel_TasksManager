<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    //Show all tasks
    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $sort = $request->query('sort', 'desc');
        $query = $request->query('q');

        $user = auth()->user();

        $tasks = Task::query();

        if ($user->role == 1) {
            // Admin user, fetch all tasks
        } else {
            // Regular user, fetch only their tasks
            $tasks->where('user_id', $user->id);
        }

        if ($filter === 'completed') {
            $tasks->where('completed', true);
        } elseif ($filter === 'not-completed') {
            $tasks->where('completed', false);
        }

        if ($query) {
            $tasks->where('title', 'like', '%' . $query . '%');
        }

        $tasks->orderBy('id', $sort === 'desc' ? 'desc' : 'asc');

        $tasks = $tasks->paginate(5);

        return view('tasks.index', compact('tasks', 'filter'));
    }


    //Show single task
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    //Show create form
    public function create()
    {
        return view('tasks.create');
    }

    //Add task
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('tasks', 'title')],
            'description' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Task::create($formFields);

        return redirect('/tasks')->with('message', 'Task created successfully!');
    }

    //Show edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    //Update task
    public function update(Request $request, Task $task)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $formFields['completed'] = $request->has('completed') ? 1 : 0;

        $task->update($formFields);

        return redirect('/tasks')->with('message', 'Task updated successfully!');
    }

    //Delete task
    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('message', 'Listing deleted successfully!');
    }

    // Manage task
    // public function manage()
    // {
    //     return view('tasks.manage', ['tasks' => auth()->user()->tasks()->get()]);
    // }
}
