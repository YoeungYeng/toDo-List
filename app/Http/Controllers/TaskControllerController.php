<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskControllerController extends Controller
{
    // index
    public function index()
    {
        $tasks = Task::all();
        return view('toDoList.index', compact('tasks'));
    }

    // store
    public function store(Request $request)
    {
        // validation
        $attributes = $request->validate([
            'name' => 'required|max:255',
        ]);

        // store
        Task::create($attributes);
        return redirect('/');
    }

    // destroy
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }

    // edit
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $tasks = Task::all();
        return view('toDoList.edit', compact('tasks', 'task'));
    }
    // update
    public function update(Request $request, $id)
    {
        // validation
        $attributes = $request->validate([
            'name' => 'required|max:255',
        ]);
        // update
        $task = Task::findOrFail($id);
        $task->update($attributes);
        return redirect('/');
    }
}
