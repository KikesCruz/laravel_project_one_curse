<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/tasks',[TaskController::class,'index']) -> name('tasks.index');

Route::get('tasks/add',[TaskController::class,'storage']) -> name('tasks.storage');

Route::post('tasks',[TaskController::class,'storage']) -> name('tasks.storage');