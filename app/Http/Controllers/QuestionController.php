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
        $today = date("Y-m-d");
        if (!is_numeric($id)) {
            return redirect()->route('fallback');
        }

        try {
            $task = Task::with(['answers', 'facts'])->findOrFail($id);
            $fact = $task->facts->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('fallback');
        }

        foreach ($task->users as $userDate) {
            $date = $userDate->pivot->date;
            $date = date("Y-m-d", strtotime($date));


            if ($date === $today) {
                return redirect()->route('reeks-overzicht');
            }
        }
        return view('daily-question', compact('task', 'fact'));
    }

    public function submit(Request $request)
    {
        $user = User::where('id', Auth::id())
            ->first();
        
        $answerId = $request->input('answer');
        $answer = Answer::find($answerId);

        $streak = $user->streak_counter ?? 0;
        $task = Task::where('id', $streak)->first();

        $user->tasks()->attach($task, [
            'date' => date("Y-m-d"),
        ]);

        if ($answer && $answer->correct_option == 1) {
            $user->streak_counter += 1;
            $user->save();


            return redirect()->route('juist-antwoord', ['id' => $answerId]);
        } else {
            return redirect()->route('fout-antwoord', ['id' => $answerId]);

        }
    }
}
