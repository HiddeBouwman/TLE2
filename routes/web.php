<?php

use App\Http\Controllers\CorrectAnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\WrongAnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('stats', [StatsController::class, 'index'])->name('stats.index');
Route::get('search', [SearchController::class, 'search'])->name('search');

Route::get('/', function () {
    return view('dashboard');
})->name('feitje');

Route::middleware('auth')->group(function () {
    Route::get('/profiel', [ProfileController::class, 'edit'])->name('profiel.edit');
    Route::patch('/profiel', [ProfileController::class, 'update'])->name('profiel.update');
    Route::delete('/profiel', [ProfileController::class, 'destroy'])->name('profiel.destroy');

    Route::get('/feitje', [\App\Http\Controllers\DataController::class,'index'])->name('feitje');

    Route::get('/dagelijkse-vraag', [QuestionController::class, 'show'])->name('dagelijkse-vraag');

    Route::post('/dagelijkse-vraag', [QuestionController::class, 'submit'])->name('dagelijkse-vraag.submit');
    Route::get('/antwoord', [\App\Http\Controllers\AnswerController::class, 'show'])->name('antwoord');


    Route::get('/dagelijkse-taak', [TaskController::class, 'show'])->name('daily-task');

    Route::post('/save-photo', [TaskController::class, 'store'])->name('save-photo');

    Route::get('/reeks-overzicht', function () {
        return view('streakOverview');
    })->name('reeks-overzicht');
});

Route::get('data/show', [\App\Http\Controllers\DataController::class, 'index']);
Route::get('answer/show/{id}', [\App\Http\Controllers\DataController::class, 'show']);
Route::get('explanation/show/{id}', [\App\Http\Controllers\DataController::class, 'explanation']);
Route::get('/fallback', function () {
    return view('fallback');
})->name('fallback');

require __DIR__ . '/auth.php';
