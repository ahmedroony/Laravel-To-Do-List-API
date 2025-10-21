<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [TaskController::class,'index']);
Route::get('create', [TaskController::class,'create']);
Route::post('home', [TaskController::class,'store'])->name('store');
