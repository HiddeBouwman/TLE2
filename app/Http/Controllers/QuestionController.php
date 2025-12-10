<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class QuestionController
{
    public function show($id)
    {
        if (!is_numeric($id)) {
            return redirect()->route('fallback');
        }

        try {
            $task = Task::with(['answers', 'facts'])->findOrFail($id);
            $fact = $task->facts->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('fallback');
        }

        return view('daily-question', compact('task', 'fact'));
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
