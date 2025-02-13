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

    public function index($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();

        $projects = $this->service->projectActive($lingua);
        $portifolios = $this->service->workActive($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        return view('index', ['metaTags' => $metaTags, 'args' => $index_text, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects, 'projects' => $projects, 'portifolios' => $portifolios]);
    }

    public function saveIndexPage(Request $request) {

        $this->service->saveIndexText($request->all());
        
        return true;
    }

    public function contato($lingua) {

        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();

        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        return view('contactpage', ['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function saveContactPage(Request $request) {

        $this->service->saveContact($request->all());
        
        return true;
    }

    public function sobre($lingua) {

        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();

        $about = $this->service->about($lingua);

        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

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

    public function portifolioGeral($lingua) {
        $portifolioGeral = $this->service->portifolioGeral($lingua);

        $works = $this->service->work($lingua);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);
        $portifolios = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        return view('portifoliogeral',['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'portifolioGeral' => $portifolioGeral, 'portifolios' => $portifolios, 'works' => $works, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function portifolio($lingua,$id) {
        $work = $this->service->workById($id,$lingua);
        $metaTags = $this->service->metaTags($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

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

    public function servicoGeral($lingua) {
        $servicoGeral = $this->service->servicoGeral($lingua);
        $servicos = $this->service->projectActive($lingua);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $menuProjects = $this->service->projectActive($lingua);

        return view('servicosgeral',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'servicos' => $servicos, 
                                     'servicoGeral' => $servicoGeral,
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects]);
    }

    public function servico($lingua,$id) {
        $project = $this->service->projectById($id,$lingua);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $menuProjects = $this->service->projectActive($lingua);

        $nextprojects = $this->service->getProjectThatIsNotId($id);
        $nextProject = $this->service->getRandomProject($nextprojects);

        return view('servico',['metaTags' => $metaTags, 'index_text' => $index_text, 'contact' => $contact, 'project' => $project, 'nextProject' => $nextProject, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function oportunidades($lingua) {
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $oportunidades = $this->service->oportunidade($lingua);

        return view('oportunidades',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'menuWorks' => $menuWorks, 
                                     'oportunidades' => $oportunidades]);
    }

    public function oportunidadeDetalhe($lingua,$id) {
        $oportunidade = $this->service->oportunidadeById($id,$lingua);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $menuProjects = $this->service->projectActive($lingua);

        return view('oportunidadedetalhe',['metaTags' => $metaTags,
                                     'index_text' => $index_text,
                                     'contact' => $contact,
                                     'menuWorks' => $menuWorks,
                                     'menuProjects' => $menuProjects,
                                     'oportunidade' => $oportunidade]);
    }

    public function saveOportunidadePage(Request $request) {
        $this->service->saveOportunidade($request->all());
        
        return true;
    }

    public function deleteOportunidadePage(Request $request) {
        $this->service->deleteOportunidade($request->all());
        
        return true;
    }

    public function updateActiveOportunidadePage(Request $request) {
        $this->service->updateActiveOportunidade($request->all());
        
        return true;
    }

    public function propriedades($lingua) {
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $propriedades = $this->service->propriedade($lingua);

        return view('propriedades',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'menuWorks' => $menuWorks, 
                                     'propriedades' => $propriedades]);
    }

    public function propriedadeDetalhe($lingua,$id) {
        $propriedade = $this->service->propriedadeById($id,$lingua);
        $metaTags = $this->service->metaTags();

        $menuWorks = $this->service->workActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        $menuProjects = $this->service->projectActive($lingua);

        return view('propriedadedetalhe',['metaTags' => $metaTags, 
                                     'index_text' => $index_text, 
                                     'contact' => $contact, 
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects,
                                     'propriedade' => $propriedade]);
    }

    public function savePropriedadePage(Request $request) {
        $this->service->savePropriedade($request->all());
        
        return true;
    }

    public function deletePropriedadePage(Request $request) {
        $this->service->deletePropriedade($request->all());
        
        return true;
    }

    public function updateActivePropriedadePage(Request $request) {
        $this->service->updateActivePropriedade($request->all());
        
        return true;
    }
}
