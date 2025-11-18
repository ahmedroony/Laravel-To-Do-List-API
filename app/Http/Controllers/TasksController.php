<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('master');
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $data = request()->all();
        $task = Task::create([
            'description' => request('description'),
        ]);
        return dd($task);
        }
}
