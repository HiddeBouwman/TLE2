<?php

use App\Http\Controllers\CorrectAnswerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WrongAnswerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('correctAnswer', [CorrectAnswerController::class, 'index'])->name('correctAnswer');
Route::get('wrongAnswer', [WrongAnswerController::class, 'index'])->name('wrongAnswer');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/daily-question', [QuestionController::class, 'show'])->middleware(['auth', 'verified'])->name('daily-question');

Route::post('/daily-question', [QuestionController::class, 'submit'])->middleware(['auth', 'verified'])->name('daily-question.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/streakoverzicht', function () {
    return view('streakOverview');
});

require __DIR__.'/auth.php';
require __DIR__ . '/auth.php';
