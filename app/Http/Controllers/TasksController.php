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
        $tasks = Task::orderBy('completed_at', 'DESC')->paginate(5);
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
        request()->validate([
            "description" => "required|max:255",
        ]);
        $data = request()->all();
        $task = Task::create([
            'description' => request('description'),
        ]);
        return Redirect('/');
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        if($request->has('toggle_complete')){
            if($task->completed_at){
                $task->completed_at = null;
            }else{
                $task->completed_at = now();//return currant date/hour
            }
            $task->save();
            return redirect('/')->with('success', 'Task updated successfully');
        }
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
