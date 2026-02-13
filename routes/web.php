<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasksIndex');
    Route::get('/create', [TaskController::class, 'createPage'])->name('tasksCreatePage');
    Route::post('/create', [TaskController::class, 'create'])->name('tasksCreate');
    Route::post('/delete/{id}', [TaskController::class, 'delete'])->name('tasksDelete');
    Route::get('/show/{id}', [TaskController::class, 'show'])->name('tasksShow');
});