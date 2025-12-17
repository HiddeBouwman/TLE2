<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

use App\Models\Fact;
use App\Models\Task;
use App\Models\User;

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

        $user = auth()->user();
        $streak = $user->streak_counter ?? 0;
        $id = $streak + 1;

        try {
            $task = Task::with(['answers', 'facts'])->findOrFail($id);
            $fact = $task->facts->first();

            if (!$fact || !$fact->scenario) {
                return redirect()->route('fallback');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('fallback');
        }

        return view('daily-task', compact('fact', 'task'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'image_base64' => 'required|string',
            'task_id' => 'required|exists:tasks,id',
            'option' => 'nullable|string',
        ]);

        $image = preg_replace('#^data:image/\w+;base64,#', '', $validated['image_base64']);
        $image = str_replace(' ', '+', $image);
        $decoded = base64_decode($image, true);

        $filename = 'made-images/' . uniqid() . '.png';
        Storage::disk('public')->put($filename, $decoded);


        $answer = Answer::create([
            'image' => $filename,
            'task_id' => $validated['task_id'],
            'option' => $validated['option'] ?? null,
        ]);

        $user = User::where('id', Auth::id())
            ->first();
        $user->streak_counter += 1;
        $user->save();
        return response()->json([
            'success' => true,
            'path' => Storage::url($filename),
            'id' => $answer->id,
            'redirect' => route('reeks-overzicht'),

        ]);

    }
}
