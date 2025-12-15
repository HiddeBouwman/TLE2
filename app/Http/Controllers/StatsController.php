<?php

namespace App\Http\Controllers;

use App\Models\User;

class StatsController extends Controller
{
    public function index()
    {
        $users = User::with('rewards')->get();

        return view('stats.index',
            compact('users'));
    }
}
