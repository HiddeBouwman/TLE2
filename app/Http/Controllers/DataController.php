<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Fact;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index()
    {
        try {
            $task = Task::with(['answers', 'facts'])->inRandomOrder()->firstOrFail();
            $fact = $task->facts->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('fallback');
        }

        return view('dashboard', compact('task', 'fact'));
    }

    public function show($id)
    {
        $task = Task::with('answers')->findOrFail($id);
        $fact = Task::with('facts')->findOrFail($id);

        return view('task.show', compact('task', 'fact'));
    }

    public function explanation($id)
    {
        $answer = Answer::with('explanation')->findOrFail($id);

        return view('wrongAnswer.index', compact('answer'));
    }


}

