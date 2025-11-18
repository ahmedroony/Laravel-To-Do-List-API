<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
Route::get('/',[TasksController::class , 'index']);
Route::get('create',[TasksController::class , 'create']);
Route::post('/',[TasksController::class,'store'])->name('store');
