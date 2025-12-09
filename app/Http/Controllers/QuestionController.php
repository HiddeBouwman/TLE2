<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController
{
    public function show()
    {
        $question = [
            'text' => 'Welke kleine gewoonte helpt indirect mee aan het behoud van soorten zoals de vliegenzwam?',
            'options' => [
                'A' => 'Kiezen voor biologische producten wanneer mogelijk.',
                'B' => 'Regenwater drinken in plaats van kraanwater.',
                'C' => 'Elke dag een uur wandelen in de natuur.',
                'D' => 'Nooit foto’s maken van paddenstoelen.',
            ],
            'correct' => 'A'
        ];

        return view('daily-question', compact('question'));
    }

    public function submit(Request $request)
    {
        $answer = $request->input('answer');
        if ($answer == 'A') {
            return redirect()->route('juist-antwoord');
        } else {
            return redirect()->route('fout-antwoord');
        }
    }
}
