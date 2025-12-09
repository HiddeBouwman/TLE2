<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('registreren', [RegisteredUserController::class, 'create'])
        ->name('registreren');

    Route::post('registreren', [RegisteredUserController::class, 'store']);

    Route::get('inloggen', [AuthenticatedSessionController::class, 'create'])
        ->name('inloggen');

    Route::post('inloggen', [AuthenticatedSessionController::class, 'store']);

    Route::get('wachtwoord-vergeten', [PasswordResetLinkController::class, 'create'])
        ->name('wachtwoord.verzoek');

    Route::post('wachtwoord-vergeten', [PasswordResetLinkController::class, 'store'])
        ->name('wachtwoord.email');

    Route::get('wachtwoord-resetten/{token}', [NewPasswordController::class, 'create'])
        ->name('wachtwoord.reset');

    Route::post('wachtwoord-resetten', [NewPasswordController::class, 'store'])
        ->name('wachtwoord.opslaan');
});

Route::middleware('auth')->group(function () {
    Route::get('email-verificatie', EmailVerificationPromptController::class)
        ->name('verificatie.melding');

    Route::get('email-verificatie/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verificatie.verifiëren');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verificatie.verzenden');

    Route::get('wachtwoord-bevestigen', [ConfirmablePasswordController::class, 'show'])
        ->name('wachtwoord.bevestigen');

    Route::post('wachtwoord-bevestigen', [ConfirmablePasswordController::class, 'store'])
        ->name('wachtwoord.bevestigen.post');
});
