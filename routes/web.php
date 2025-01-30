<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');

Route::get('/login', [LoginController::class, 'login'])->name('view.login');
Route::get('/home', [HomeController::class, 'home'])->name('view.home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('view.dashboard');
Route::get('/index-page', [HomeController::class, 'indexPage'])->name('view.index-page');
Route::get('/contact-page', [HomeController::class, 'contactPage'])->name('view.contact-page');
Route::get('/trocar-senha', [HomeController::class, 'trocarSenha'])->name('view.trocar-senha');
Route::get('/esqueci-senha', [LoginController::class, 'esqueciSenha'])->name('view.esqueci-senha');

/*

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
