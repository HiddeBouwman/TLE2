<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function show()
    {
        $task = 'Maak een foto van de vliegenzwam.';

        return view('daily-task', compact('task'));

    }
}
