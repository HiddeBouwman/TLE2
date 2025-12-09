<?php

use App\Http\Controllers\CorrectAnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WrongAnswerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('juist-antwoord', [CorrectAnswerController::class, 'index'])->name('juist-antwoord');
Route::get('fout-antwoord', [WrongAnswerController::class, 'index'])->name('fout-antwoord');


Route::get('/feitje', function () {
    return view('dashboard');
})->name('feitje');

Route::get('/dagelijkse-vraag/{id}', [QuestionController::class, 'show'])->name('dagelijkse-vraag');

Route::post('/dagelijkse-vraag', [QuestionController::class, 'submit'])->name('dagelijkse-vraag.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profiel', [ProfileController::class, 'edit'])->name('profiel.edit');
    Route::patch('/profiel', [ProfileController::class, 'update'])->name('profiel.update');
    Route::delete('/profiel', [ProfileController::class, 'destroy'])->name('profiel.destroy');
});

Route::get('/reeks-overzicht', function () {
    return view('streakOverview');
})->name('reeks-overzicht');

Route::get('data/show', [\App\Http\Controllers\DataController::class, 'index']);
Route::get('answer/show/{id}', [\App\Http\Controllers\DataController::class, 'show']);
Route::get('explanation/show/{id}', [\App\Http\Controllers\DataController::class, 'explanation']);

require __DIR__ . '/auth.php';
