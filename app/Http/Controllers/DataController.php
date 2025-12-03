<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $tasks = Task::all();
        $answers = Answer::all();
        return view('data.show',compact('users', 'tasks', 'answers'));
    }
}

