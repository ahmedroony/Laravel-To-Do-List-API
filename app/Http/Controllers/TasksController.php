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
        $tasks = Task::orderBy('id', 'DESC')->get();
        return view('master', [
            'tasks' => $tasks,
        ]);
    }
    public function create()
    {
        return view('create');
    }



    public function store()
    {
        $data = request()->all();
        $task = Task::create([
            'description' => request('description'),
        ]);
        return Redirect('/');
    }

    public function update($id)
    {
        $task = Task::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }
}
