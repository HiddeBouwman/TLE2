<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function claim(Request $request)
    {
        $user = auth()->user();
        
        $rewardDays = [3, 7, 15, 18, 25, 30];

        $claimedCount = $user->rewards()->count();

        if ($claimedCount >= count($rewardDays)) {
            return back()->with('error', 'Alle beloningen zijn al geclaimd.');
        }

        $nextRewardDay = $rewardDays[$claimedCount];

        if ($user->streak_counter < $nextRewardDay) {
            return back()->with('error', 'Deze beloning is nog niet beschikbaar.');
        }

        $reward = \App\Models\Reward::orderBy('id')->skip($claimedCount)->first();

        if (!$reward) {
            return back()->with('error', 'Beloning niet gevonden.');
        }

        $user->rewards()->attach($reward->id);

        return back()->with('success', 'Beloning geclaimd!');
    }
}
