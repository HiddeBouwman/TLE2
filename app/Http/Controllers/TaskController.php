<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;


class TaskController extends Controller
{
    //
    public function show()
    {
        $task = 'Maak een foto van de vliegenzwam.';

        return view('daily-task', compact('task'));

    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');

            $photo = Photo::create(['path' => $path]);

            return response()->json([
                'success' => true,
                'path' => Storage::url($path),
                'id' => $photo->id
            ]);
        }

        return response()->json(['success' => false], 400);
    }

}
