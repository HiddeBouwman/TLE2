<?php

use App\Http\Controllers\CorrectAnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WrongAnswerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('correctAnswer', [CorrectAnswerController::class, 'index'])->name('correctAnswer');
Route::get('wrongAnswer', [WrongAnswerController::class, 'index'])->name('wrongAnswer');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/daily-question', [QuestionController::class, 'show'])->name('daily-question');

Route::post('/daily-question', [QuestionController::class, 'submit'])->name('daily-question.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/streakoverzicht', function () {
    return view('streakOverview');
})->name('streakoverzicht');

Route::get('data/show', [\App\Http\Controllers\DataController::class, 'index']);
Route::get('answer/show/{id}', [\App\Http\Controllers\DataController::class, 'show']);
Route::get('explanation/show/{id}', [\App\Http\Controllers\DataController::class, 'explanation']);

require __DIR__ . '/auth.php';
require __DIR__ . '/auth.php';
