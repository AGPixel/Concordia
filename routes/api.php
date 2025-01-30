<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\EnsureTokenIsValid;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/logar', [LoginController::class, 'logar'])->name('api.logar');

Route::middleware([EnsureTokenIsValid::class])->group(function () {

    Route::get('/verify-token', function() { return true; })->name('api.verify-token');
    Route::post('/trocar-senha', [LoginController::class, 'trocarSenha'])->name('api.trocar-senha');
    Route::post('/save-index-page', [SiteController::class, 'saveIndexPage'])->name('api.save-index-page');
    Route::post('/save-contact-page', [SiteController::class, 'saveContactPage'])->name('api.save-contact-page');
    
});
