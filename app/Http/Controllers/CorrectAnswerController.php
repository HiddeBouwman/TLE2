<?php

namespace App\Http\Controllers;

use App\Models\CorrectAnswer;
use Illuminate\Http\Request;

class CorrectAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('correctAnswer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorrectAnswer $correctAnswer)
    {
        //
    }
}
