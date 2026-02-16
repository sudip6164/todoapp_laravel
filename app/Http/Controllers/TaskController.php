<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TaskController extends Controller
{
    use AuthorizesRequests;
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

    public function delete($id)
    {
        $task = Task::findOrFail($id);

        $this->authorize('delete', $task);

        $task->delete();

        return redirect()->route('tasksIndex')->with('success', 'Task deleted successfully!');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        $this->authorize('view', $task);

        return view('tasks.show', compact('task'));
    }

    public function editPage($id)
    {
        $task = Task::findOrFail($id);

        $this->authorize('update', $task);

        return view('tasks.edit', compact('task'));
    }

    public function edit(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $this->authorize('update', $task);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:todo,doing,done',
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('tasksIndex')->with('success', 'Task updated successfully!');
    }
}
