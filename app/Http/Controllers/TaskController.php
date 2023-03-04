<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {

    public function index (Request $request) {
        $query = Task::query();

        if ($request->has('status')) {
            $statuses = $request->input('status');
            $query->whereIn('status', $statuses);
        }

        $tasks = $query->get();

        return view('tasks.index', compact('tasks'));
    }

    public function show (Task $task) {
        return view('tasks.show', compact('task'));
    }

    public function create () {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:todo,done,in_progress,completed'
        ]);

        $todo = new Task();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->status = $request->input('status');
        $todo->save();

        return redirect()->route('tasks.index')->with('success', 'task created successfully');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:todo,done,in_progress,completed'
        ]);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->status = $request->input('status');
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
