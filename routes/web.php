<?php

use App\Http\Controllers\CorrectAnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WrongAnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('juist-antwoord', [CorrectAnswerController::class, 'index'])->name('juist-antwoord');
Route::get('fout-antwoord', [WrongAnswerController::class, 'index'])->name('fout-antwoord');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dagelijkse-vraag', [QuestionController::class, 'show'])->name('dagelijkse-vraag');

Route::post('/dagelijkse-vraag', [QuestionController::class, 'submit'])->name('dagelijkse-vraag.submit');


Route::get('/daily-task', [TaskController::class, 'show'])->name('daily-task');

Route::post('/save-photo', [TaskController::class, 'store'])->name('save-photo');


Route::middleware('auth')->group(function () {
    Route::get('/profiel', [ProfileController::class, 'edit'])->name('profiel.edit');
    Route::patch('/profiel', [ProfileController::class, 'update'])->name('profiel.update');
    Route::delete('/profiel', [ProfileController::class, 'destroy'])->name('profiel.destroy');
});

Route::get('/reeks-overzicht', function () {
    return view('streakOverview');
})->name('reeks-overzicht');

require __DIR__ . '/auth.php';
