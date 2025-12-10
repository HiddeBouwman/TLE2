<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Answer;

class TaskController extends Controller
{
    //
    public function show()
    {
        $task = Task::where('id', 1)->first();

        if ($task) {
            $fact = Fact::where('task_id', $task->id)->first();

        }
        return view('daily-task', compact('fact', 'task'));

    }


    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'image_base64' => 'required|string',
                'task_id' => 'required|exists:tasks,id',
                'option' => 'nullable|string',
            ]);


            $image = preg_replace('#^data:image/\w+;base64,#', '', $validated['image_base64']);
            $image = str_replace(' ', '+', $image);
            $decoded = base64_decode($image, true);
            if ($decoded === false) {
                return response()->json(['success' => false, 'error' => 'Invalid base64 image'], 422);
            }

            $filename = 'made-images/' . uniqid() . '.png';
            Storage::disk('public')->put($filename, $decoded);


            $answer = Answer::create([
                'image' => $filename,
                'task_id' => $validated['task_id'],
                'option' => $validated['option'] ?? null,
            ]);

            return response()->json([
                'success' => true,
                'path' => Storage::url($filename),
                'id' => $answer->id,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
