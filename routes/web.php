<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
Route::get('/register',[AuthController::class,'showregistar'])->name('show.register');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'showlogin'])->name('show.login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/', [TasksController::class, 'index'])->name('home');
Route::get('create', [TasksController::class, 'create']);
Route::get('/edit/{id}',[TasksController::class,'edit'])->name('edit');
Route::post('/', [TasksController::class, 'store'])->name('store');
Route::patch('/tasks/{id}', [TasksController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[TasksController::class,'destroy'])->name('tasks.destroy');


































Route::get('test', function () {
    return view('test', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'programmer',
                'salary' => "10000$",
            ],
            [
                'id' => 2,
                'title' => 'doctor',
                'salary' => '10000',
            ],
        ],

        //can send date from the route
    ]);
});
Route::get('/test/{id}',function($id){
    dd($id);
    return view('test');
});

