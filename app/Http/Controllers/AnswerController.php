<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    public function show()
    {
        $answerId = Session::get('answer_id');
        if (!$answerId) {
            return redirect()->route('feitje');
        }

        $answer = Answer::with('explanation')->findOrFail($answerId);

        if ($answer->correct_option == 1) {
            return view('correctAnswer.index', compact('answer'));
        } else {
            return view('wrongAnswer.index', compact('answer'));
        }
    }
}
