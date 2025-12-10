<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class QuestionController
{
    public function show($id)
    {
//        $question = [
//            'text' => 'Welke kleine gewoonte helpt indirect mee aan het behoud van soorten zoals de vliegenzwam?',
//            'options' => [
//                'A' => 'Kiezen voor biologische producten wanneer mogelijk.',
//                'B' => 'Regenwater drinken in plaats van kraanwater.',
//                'C' => 'Elke dag een uur wandelen in de natuur.',
//                'D' => 'Nooit foto’s maken van paddenstoelen.',
//            ],
//            'correct' => 'A'
//        ];
//        Test
//        return view('daily-question', compact('question'));


        $task = Task::with('answers')->findOrFail($id);
        $fact = Task::with('facts')->findOrFail($id);

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
