<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('q');

        if (empty($search)) {
            return redirect()->back()->withErrors(['error' => 'Vul een zoekterm in!']);
        }

        $users = User::with('rewards')
            ->where(function ($query) use ($search) {

                if (is_numeric($search)) {
                    $query->where('users.streak_counter', '=', $search);
                }

                $query->orWhereHas('rewards', function ($q) use ($search) {
                    $q->where('description', 'LIKE', "%{$search}%");
                });
            })
            ->get();
        
        $total = $users->count();

        return view('stats.index',
            compact('users', 'search', 'total'));
    }
}
