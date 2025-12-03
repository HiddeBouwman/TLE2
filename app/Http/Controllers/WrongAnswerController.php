<?php

namespace App\Http\Controllers;

use App\Models\WrongAnswer;
use Illuminate\Http\Request;

class WrongAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wrongAnswer.index');
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
    public function show(WrongAnswer $wrongAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WrongAnswer $wrongAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WrongAnswer $wrongAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WrongAnswer $wrongAnswer)
    {
        //
    }
}
