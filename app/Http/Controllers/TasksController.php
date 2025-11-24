<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function Symfony\Component\Clock\now;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('completed_at', 'DESC')->get();
        return view('master', [
            'tasks' => $tasks,
        ]);
    }
    public function create()
    {
        return view('CeateAndDelete');
    }
    public function store()
    {
        $data = request()->all();
        $task = Task::create([
            'description' => request('description'),
        ]);
        return Redirect('/');
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->description = $request->description;
        $task->save();
        return redirect('/')->with('success', 'Task updated successfully');
    }
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'task deleted successfully');
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit',compact('task'));
    }
}
