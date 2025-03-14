<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/tasks',[TaskController::class,'index']) -> name('tasks.index');

Route::get('tasks/add',[TaskController::class,'add']) -> name('tasks.create');