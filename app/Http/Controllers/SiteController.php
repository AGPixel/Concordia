<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SiteService;

/**
 * Controlador de todo o site para o usuario final
 */
class SiteController extends Controller
{

    /**
     * Constructor, set service
     */    
    public function __construct() {
        $this->service = new SiteService();
    }

    public function saveMetaTagsPage(Request $request) {

        $this->service->saveMetaTags($request->all());
        
        return true;
    }

    public function index() {

        $index_text = $this->service->indexText();
        $metaTags = $this->service->metaTags();

        $projects = $this->service->projectActive();
        $portifolios = $this->service->workActive();
        
        $menuWorks = $this->service->workActive();
        $menuProjects = $this->service->projectActive();

        return view('index', ['metaTags' => $metaTags, 'args' => $index_text, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects, 'projects' => $projects, 'portifolios' => $portifolios]);
    }

    public function saveIndexPage(Request $request) {

        $this->service->saveIndexText($request->all());
        
        return true;
    }

    public function contato() {

        $index_text = $this->service->indexText();
        $metaTags = $this->service->metaTags();

        $contact = $this->service->contact();

        $menuWorks = $this->service->workActive();
        $menuProjects = $this->service->projectActive();

        return view('contactpage', ['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function saveContactPage(Request $request) {

        $this->service->saveContact($request->all());
        
        return true;
    }

    public function sobre() {

        $index_text = $this->service->indexText();
        $metaTags = $this->service->metaTags();

        $about = $this->service->about();

        $contact = $this->service->contact();

        $menuWorks = $this->service->workActive();
        $menuProjects = $this->service->projectActive();

        return view('about', ['metaTags' => $metaTags, 'args' => $index_text, 'contact' => $contact, 'about' => $about, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function saveAboutPage(Request $request) {
        $this->service->saveAbout($request->all());
        
        return true;
    }

    public function saveWorkPage(Request $request) {
        $this->service->saveWork($request->all());
        
        return true;
    }

    public function deleteWorkPage(Request $request) {
        $this->service->deleteWork($request->all());
        
        return true;
    }

    public function updateActiveWorkPage(Request $request) {
        $this->service->updateActiveWork($request->all());
        
        return true;
    }

    public function portifolioGeral() {
        $portifolioGeral = $this->service->portifolioGeral();

        $works = $this->service->work();
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();
        $portifolios = $this->service->workActive();
        $menuProjects = $this->service->projectActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        return view('portifoliogeral',['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'portifolioGeral' => $portifolioGeral, 'portifolios' => $portifolios, 'works' => $works, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function portifolio($id) {
        $work = $this->service->workById($id);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();
        $menuProjects = $this->service->projectActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        return view('portifolio',['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'work' => $work, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function savePortifolioGeral(Request $request) {
        $this->service->savePortifolioGeral($request->all());
        
        return true;
    }

    public function saveProjectPage(Request $request) {
        $this->service->saveProject($request->all());
        
        return true;
    }

    public function deleteProjectPage(Request $request) {
        $this->service->deleteProject($request->all());
        
        return true;
    }

    public function updateActiveProjectPage(Request $request) {
        $this->service->updateActiveProject($request->all());
        
        return true;
    }

    public function saveServicoGeral(Request $request) {
        $this->service->saveServicoGeral($request->all());
        
        return true;
    }

    public function servicoGeral() {
        $servicoGeral = $this->service->servicoGeral();
        $servicos = $this->service->projectActive();
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        $menuProjects = $this->service->projectActive();

        return view('servicosgeral',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'servicos' => $servicos, 
                                     'servicoGeral' => $servicoGeral,
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects]);
    }

    public function servico($id) {
        $project = $this->service->projectById($id);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        $menuProjects = $this->service->projectActive();

        $nextprojects = $this->service->getProjectThatIsNotId($id);
        $nextProject = $this->service->getRandomProject($nextprojects);

        return view('servico',['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'project' => $project, 'nextProject' => $nextProject, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function oportunidadeDetalhe() {
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        $menuProjects = $this->service->projectActive();

        return view('oportunidadedetalhe',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects]);
    }

    public function propriedadeDetalhe() {
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        $menuProjects = $this->service->projectActive();

        return view('propriedadedetalhe',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects]);
    }
}
