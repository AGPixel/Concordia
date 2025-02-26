<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() { return redirect('/pt/'); });
Route::get('/{lingua}/', [SiteController::class, 'index'])->name('site.index');
Route::get('/{lingua}/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::get('/{lingua}/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
Route::get('/{lingua}/service-terms', [SiteController::class, 'serviceTerms'])->name('site.service-terms');
Route::get('/{lingua}/privacy-politics', [SiteController::class, 'privacyPolitics'])->name('site.privacy-politics');
Route::get('/{lingua}/portifolio', [SiteController::class, 'portifolioGeral'])->name('site.portifolio-geral');
Route::get('/{lingua}/portifolio/{id}', [SiteController::class, 'portifolio'])->name('site.portifolio');
Route::get('/{lingua}/servico', [SiteController::class, 'servicoGeral'])->name('site.servico-geral');
Route::get('/{lingua}/servico/{id}', [SiteController::class, 'servico'])->name('site.servico');
Route::get('/{lingua}/oportunidades', [SiteController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/{lingua}/oportunidade/{id}', [SiteController::class, 'oportunidadeDetalhe'])->name('site.oportunidade-detalhe');
Route::get('/{lingua}/propriedades', [SiteController::class, 'propriedades'])->name('site.propriedades');
Route::get('/{lingua}/propriedade/{id}', [SiteController::class, 'propriedadeDetalhe'])->name('site.propriedade-detalhe');

Route::get('/project-3', function() {
    return view('project-3');
})->name('site.project-3');

Route::get('/pt/login', [LoginController::class, 'login'])->name('view.login');
Route::get('/pt/esqueci-senha', [LoginController::class, 'esqueciSenha'])->name('view.esqueci-senha');

Route::get('/pt/trocar-senha', [HomeController::class, 'trocarSenha'])->name('view.trocar-senha');

Route::get('/pt/home', [HomeController::class, 'home'])->name('view.home');

Route::get('/pt/dashboard', [HomeController::class, 'dashboard'])->name('view.dashboard');

Route::get('/pt/meta-tags-page', [HomeController::class, 'metaTagsPage'])->name('view.meta-tags-page');

Route::get('/pt/index-page', [HomeController::class, 'indexPage'])->name('view.index-page');

Route::get('/pt/contact-page', [HomeController::class, 'contactPage'])->name('view.contact-page');

Route::get('/pt/about-page', [HomeController::class, 'aboutPage'])->name('view.about-page');

Route::get('/pt/service-terms-page', [HomeController::class, 'serviceTerms'])->name('view.service-terms-page');

Route::get('/pt/privacy-politics-page', [HomeController::class, 'privacyPolitics'])->name('view.privacy-politics-page');

Route::get('/pt/list-testimonial-page', [HomeController::class, 'listTestimonialPage'])->name('view.list-testimonial-page');
Route::get('/pt/new-testimonial-page', [HomeController::class, 'newTestimonialPage'])->name('view.new-testimonial-page');
Route::get('/pt/testimonial-page/{id}', [HomeController::class, 'testimonialPage'])->name('view.testimonial-page');

Route::get('/pt/list-work-page', [HomeController::class, 'listWorkPage'])->name('view.list-work-page');
Route::get('/pt/new-work-page', [HomeController::class, 'newWorkPage'])->name('view.new-work-page');
Route::get('/pt/work-page/{id}', [HomeController::class, 'workPage'])->name('view.work-page');

Route::get('/pt/list-project-page', [HomeController::class, 'listProjectPage'])->name('view.list-project-page');
Route::get('/pt/new-project-page', [HomeController::class, 'newProjectPage'])->name('view.new-project-page');
Route::get('/pt/project-page/{id}', [HomeController::class, 'projectPage'])->name('view.project-page');

Route::get('/pt/list-oportunidade-page', [HomeController::class, 'listOportunidadePage'])->name('view.list-oportunidade-page');
Route::get('/pt/new-oportunidade-page', [HomeController::class, 'newOportunidadePage'])->name('view.new-oportunidade-page');
Route::get('/pt/oportunidade-page/{id}', [HomeController::class, 'oportunidadePage'])->name('view.oportunidade-page');

Route::get('/pt/list-propriedade-page', [HomeController::class, 'listPropriedadePage'])->name('view.list-propriedade-page');
Route::get('/pt/new-propriedade-page', [HomeController::class, 'newPropriedadePage'])->name('view.new-propriedade-page');
Route::get('/pt/propriedade-page/{id}', [HomeController::class, 'propriedadePage'])->name('view.propriedade-page');

/*

Route::get('/pt/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
