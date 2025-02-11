<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SiteService;

class HomeController extends Controller
{

    public function __construct() {
        $this->siteService = new SiteService();
    }

    public function home() {
        return view('viewHome');
    }

    public function dashboard() {
        return view('dashboard.viewDashboard');
    }

    public function trocarSenha() {
        return view('dashboard.viewTrocarSenha');
    }

    // ------------------------------------- META TAGS -------------------------------------

    public function metaTagsPage() {
        $metaTags = $this->siteService->metaTags();

        return view('dashboard.viewMetaTagsPage', ['metaTags' => $metaTags]);
    }
    
    // ------------------------------------- META TAGS -------------------------------------

    // ------------------------------------- INDEX_TEXT -------------------------------------

    public function indexPage() {
        $index_text = $this->siteService->indexText();

        return view('dashboard.viewIndexPage', ['args' => $index_text]);
    }

    // ------------------------------------- INDEX_TEXT -------------------------------------

    // ------------------------------------- CONTACT -------------------------------------

    public function contactPage() {
        $contact = $this->siteService->contact();

        return view('dashboard.viewContactPage', ['contact' => $contact]);
    }

    // ------------------------------------- CONTACT -------------------------------------

    // ------------------------------------- ABOUT -------------------------------------

    public function aboutPage() {
        $about = $this->siteService->about();

        return view('dashboard.viewAboutPage', ['about' => $about]);
    }

    // ------------------------------------- ABOUT -------------------------------------

    // ------------------------------------- WORK -------------------------------------

    public function listWorkPage() {
        $portifolioGeral = $this->siteService->portifolioGeral();
        $works = $this->siteService->work();

        return view('dashboard.viewListWorkPage', ['works' => $works, 'portifolioGeral' => $portifolioGeral]);
    }

    public function workPage($id) {
        $works = $this->siteService->workById($id);
        
        return view('dashboard.viewCreateUpdateWorkPage', ['work' => $works]);
    }

    public function newWorkPage() {
        return view('dashboard.viewCreateUpdateWorkPage', ['work' => []]);
    }

    // ------------------------------------- WORK -------------------------------------

    // ------------------------------------- PROJECT -------------------------------------

    public function listProjectPage() {
        $projects = $this->siteService->project();
        $servicoGeral = $this->siteService->servicoGeral();

        return view('dashboard.viewListProjectPage', ['projects' => $projects, 'servicoGeral' => $servicoGeral]);
    }

    public function projectPage($id) {
        $projects = $this->siteService->projectById($id);
        
        return view('dashboard.viewCreateUpdateProjectPage', ['project' => $projects]);
    }

    public function newProjectPage() {
        return view('dashboard.viewCreateUpdateProjectPage', ['project' => []]);
    }

    // ------------------------------------- PROJECT -------------------------------------

    // ------------------------------------- OPORTUNIDADE -------------------------------------

    public function listOportunidadePage() {
        $oportunidades = $this->siteService->oportunidade();
        $servicoGeral = $this->siteService->servicoGeral();

        return view('dashboard.viewListOportunidadePage', ['oportunidades' => $oportunidades, 'servicoGeral' => $servicoGeral]);
    }

    public function oportunidadePage($id) {
        $oportunidade = $this->siteService->oportunidadeById($id);
        
        return view('dashboard.viewCreateUpdateOportunidadePage', ['oportunidade' => $oportunidade]);
    }

    public function newOportunidadePage() {
        return view('dashboard.viewCreateUpdateOportunidadePage', ['oportunidade' => []]);
    }

    // ------------------------------------- OPORTUNIDADE -------------------------------------
}
