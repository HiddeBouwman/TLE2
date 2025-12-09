<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class QuestionController
{
    public function show()
    {
        $task = Task::with('answers', 'facts')->firstOrFail();

        return view('daily-question', compact('task'));
    }

    public function submit(Request $request)
    {
        $correct_answer = $request->input('answer');
        if ($correct_answer == 1) {
            return redirect()->route('juist-antwoord');
        } else if ($correct_answer == 0) {
            return redirect()->route('fout-antwoord');
        }
    }
}
