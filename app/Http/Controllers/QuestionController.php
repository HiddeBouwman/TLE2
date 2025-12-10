<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $answerId = $request->input('answer');
        $answer = Answer::find($answerId);

        if ($answer && $answer->correct_option == 1) {
            $user = User::where('id', Auth::id())
                ->first();
            $user->streak_counter += 1;
            $user->save();
            return redirect()->route('juist-antwoord', ['id' => $answerId]);
        } else {
            return redirect()->route('fout-antwoord', ['id' => $answerId]);

        }
    }
}
