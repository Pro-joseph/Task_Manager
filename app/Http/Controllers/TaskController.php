<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth()->id())
                    ->with('categorie')
                    ->latest()
                    ->get();
        return view('task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $categories = Category::all();
    return view('create_task', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'title'        => 'required|string|max:255',
        'description'  => 'nullable|string',
        'category_id' => 'required|integer',
        'status'       => 'in:todo,in_progress,completed',
        'due_date'     => 'nullable|date',
    ]);

    $progress = match($validated['status'] ?? 'todo') {
        'completed' => 100,
        'in_progress' => 50,
        default => 0,
    };

    Task::create([
        ...$validated,
        'user_id' => auth()->id(),
        'progress' => $progress,
    ]);
 return redirect()->route('tasks.index')
                   ->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(task $task)
{
    $categories = Category::all();
    return view('edit_task', compact('task', 'categories'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'category_id' => 'required|integer',
            'status'       => 'in:todo,in_progress,completed',
            'due_date'     => 'nullable|date',
        ]);

        $progress = match($validated['status']) {
            'completed' => 100,
            'in_progress' => 50,
            default => 0,
        };

        $task->update([...$validated, 'progress' => $progress]);
        return redirect()->route('tasks.index')
                   ->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
                   ->with('success', 'Task deleted successfully!');
    }
}
