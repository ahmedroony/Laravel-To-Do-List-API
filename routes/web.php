<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Mail\mytestmail;
use Illuminate\Support\Facades\Mail;
Route::middleware('guest')->controller(AuthController::class)->group(function(){
Route::get('/register','showregistar')->name('show.register');
Route::post('/register','register')->name('register');
Route::get('/login','showlogin')->name('show.login');
Route::post('/login','login')->name('login');
});
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
//middleware
Route::middleware('auth')->controller(TasksController::class)->group(function(){
Route::get('/','index')->name('home');
Route::get('create','create');
Route::post('/','store')->name('store');
Route::get('/edit/{id}','edit')->name('edit');
Route::patch('/tasks/{id}', 'update')->name('update');
Route::delete('/delete/{id}','destroy')->name('tasks.destroy');
});
Route::get('/test-mail/{name}',function($name){
    Mail::to('test@gmail.com')->send(new mytestmail($name));
    dd("mail sent successfully");
});
