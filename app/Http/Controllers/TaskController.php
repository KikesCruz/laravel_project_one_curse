<?php

namespace App\Http\Controllers;
use App\Models\Tasks;


class TaskController extends Controller
{
    public function index(){

        $tasks = Tasks::paginate(perPage:10);

        return view('tasks.index', compact('tasks'));
    }
}
