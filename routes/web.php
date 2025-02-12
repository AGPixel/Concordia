<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
Route::get('/portifolio', [SiteController::class, 'portifolioGeral'])->name('site.portifolio-geral');
Route::get('/portifolio/{id}', [SiteController::class, 'portifolio'])->name('site.portifolio');
Route::get('/servico', [SiteController::class, 'servicoGeral'])->name('site.servico-geral');
Route::get('/servico/{id}', [SiteController::class, 'servico'])->name('site.servico');
Route::get('/oportunidades', [SiteController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/oportunidade/{id}', [SiteController::class, 'oportunidadeDetalhe'])->name('site.oportunidade-detalhe');
Route::get('/propriedades', [SiteController::class, 'propriedades'])->name('site.propriedades');
Route::get('/propriedade/{id}', [SiteController::class, 'propriedadeDetalhe'])->name('site.propriedade-detalhe');

Route::get('/login', [LoginController::class, 'login'])->name('view.login');
Route::get('/esqueci-senha', [LoginController::class, 'esqueciSenha'])->name('view.esqueci-senha');

Route::get('/trocar-senha', [HomeController::class, 'trocarSenha'])->name('view.trocar-senha');

Route::get('/home', [HomeController::class, 'home'])->name('view.home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('view.dashboard');

Route::get('/meta-tags-page', [HomeController::class, 'metaTagsPage'])->name('view.meta-tags-page');

Route::get('/index-page', [HomeController::class, 'indexPage'])->name('view.index-page');

Route::get('/contact-page', [HomeController::class, 'contactPage'])->name('view.contact-page');

Route::get('/about-page', [HomeController::class, 'aboutPage'])->name('view.about-page');

Route::get('/list-work-page', [HomeController::class, 'listWorkPage'])->name('view.list-work-page');
Route::get('/new-work-page', [HomeController::class, 'newWorkPage'])->name('view.new-work-page');
Route::get('/work-page/{id}', [HomeController::class, 'workPage'])->name('view.work-page');

Route::get('/list-project-page', [HomeController::class, 'listProjectPage'])->name('view.list-project-page');
Route::get('/new-project-page', [HomeController::class, 'newProjectPage'])->name('view.new-project-page');
Route::get('/project-page/{id}', [HomeController::class, 'projectPage'])->name('view.project-page');

Route::get('/list-oportunidade-page', [HomeController::class, 'listOportunidadePage'])->name('view.list-oportunidade-page');
Route::get('/new-oportunidade-page', [HomeController::class, 'newOportunidadePage'])->name('view.new-oportunidade-page');
Route::get('/oportunidade-page/{id}', [HomeController::class, 'oportunidadePage'])->name('view.oportunidade-page');

Route::get('/list-propriedade-page', [HomeController::class, 'listPropriedadePage'])->name('view.list-propriedade-page');
Route::get('/new-propriedade-page', [HomeController::class, 'newPropriedadePage'])->name('view.new-propriedade-page');
Route::get('/propriedade-page/{id}', [HomeController::class, 'propriedadePage'])->name('view.propriedade-page');

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
