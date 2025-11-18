<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('id','DESC')->get();
        return view('master',[
            'tasks'=> $tasks,
        ]);
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $data = request()->all();
        $task = Task::create([
            'description' => request('description'),
        ]);
            return Redirect('/');
        }
}
