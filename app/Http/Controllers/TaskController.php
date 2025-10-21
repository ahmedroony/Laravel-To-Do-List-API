<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('master');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $REQUEST){
        dd($REQUEST);
    }
}
