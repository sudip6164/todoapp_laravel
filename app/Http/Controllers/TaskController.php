<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks()->latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function createPage()
    {
        return view('tasks.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        auth()->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'todo',
        ]);

        return redirect()->route('tasksIndex')->with('success', 'Task created successfully!');
    }

    public function delete(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $task->delete();

        return redirect()->route('tasksIndex')->with('success', 'Task deleted successfully!');
    }
}
