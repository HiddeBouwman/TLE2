<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuestionController
{
    public function show()
    {
        $user = auth()->user();
        $streak = $user->streak_counter ?? 0;
        $id = $streak + 1;

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
        }

        // Store answer ID in session
        Session::put('answer_id', $answerId);

        return redirect()->route('antwoord');
    }
}
