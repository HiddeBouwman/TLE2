<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
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
        dd($request->all());
        if ($request->image_base64) {

            // Base64 string opschonen
            $image = $request->image_base64;
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);

            // Decoderen
            $decoded = base64_decode($image);

            // Bestandsnaam maken
            $filename = 'made-images/' . uniqid() . '.png';

            // Opslaan in public storage
            Storage::disk('public')->put($filename, $decoded);

            // ELOQUENT OPSLAAN
            $answer = Answer::create([
                'image' => $filename,
                'task_id' => $request->task_id ?? 1,
                'option' => $request->option ?? null
            ]);

            return response()->json([
                'success' => true,
                'path' => Storage::url($filename),
                'id' => $answer->id
            ]);
        }

        return response()->json(['success' => false], 400);
    }


    /*
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('made-images', 'public');

        $answer = Answer::create([
            'image' => $path,
            'task_id' => $request->task_id ?? 1, // foreign key verplicht
            'option' => $request->option ?? null
        ]);

        return response()->json([
            'success' => true,
            'path' => Storage::url($path),
            'id' => $answer->id
        ]);
    }

    return response()->json(['success' => false], 400);
}
*/

}
