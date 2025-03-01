<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SiteService;
use Illuminate\Support\Facades\Route;

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

    // ------------------------------------- META TAGS -------------------------------------

    public function saveMetaTagsPage(Request $request) {

        $this->service->saveMetaTags($request->all());
        
        return true;
    }

    // ------------------------------------- META TAGS -------------------------------------

    // ------------------------------------- INDEX -------------------------------------

    public function index($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $testimonials = $this->service->testimonial($lingua);
        $projects = $this->service->projectActive($lingua);
        $portifolios = $this->service->workActive($lingua);
        $oportunidades = $this->service->oportunidade($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        return view('index', ['metaTags' => $metaTags, 
                              'contact' => $contact, 
                              'args' => $index_text, 
                              'menuWorks' => $menuWorks, 
                              'menuProjects' => $menuProjects,
                              'oportunidades' => $oportunidades,
                              'projects' => $projects, 
                              'testimonials' => $testimonials, 
                              'portifolios' => $portifolios]);
    }

    public function saveIndexPage(Request $request) {

        $this->service->saveIndexText($request->all());
        
        return true;
    }

    // ------------------------------------- INDEX -------------------------------------

    // ------------------------------------- SERVICE TERMS -------------------------------------

    public function serviceTerms($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $serviceTerms = $this->service->serviceTerms($lingua);

        return view('service-terms', ['metaTags' => $metaTags, 'contact' => $contact, 
                              'index_text' => $index_text, 
                              'menuWorks' => $menuWorks, 
                              'menuProjects' => $menuProjects,
                              'serviceTerms' => $serviceTerms,
                            ]);
    }

    public function saveServiceTerms(Request $request) {

        $this->service->saveServiceTerms($request->all());
        
        return true;
    }

    // ------------------------------------- SERVICE TERMS -------------------------------------

    // ------------------------------------- PRIVACY POLITICS -------------------------------------

    public function privacyPolitics($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $privacyPolitics = $this->service->privacyPolitics($lingua);

        return view('privacy-politics', ['metaTags' => $metaTags, 'contact' => $contact, 
                              'index_text' => $index_text, 
                              'menuWorks' => $menuWorks, 
                              'menuProjects' => $menuProjects,
                              'privacyPolitics' => $privacyPolitics,
                            ]);
    }

    public function savePrivacyPolitics(Request $request) {

        $this->service->savePrivacyPolitics($request->all());
        
        return true;
    }

    // ------------------------------------- PRIVACY POLITICS -------------------------------------

    // ------------------------------------- CONTATO -------------------------------------

    public function contato($lingua) {

        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $dataSiteKey = env('HCAPTCHA_SITEKEY');

        return view('contactpage', ['metaTags' => $metaTags, 
                                    'contact' => $contact, 
                                    'dataSiteKey' => $dataSiteKey,
                                    'index_text' => $index_text, 
                                    'menuWorks' => $menuWorks, 
                                    'menuProjects' => $menuProjects]);
    }

    public function saveContactPage(Request $request) {

        $this->service->saveContact($request->all());
        
        return true;
    }

    public function sendEmail(Request $request) {
        return $this->service->sendEmail($request->all());
    }

    // ------------------------------------- CONTATO -------------------------------------

    // ------------------------------------- SOBRE -------------------------------------

    public function sobre($lingua) {

        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $about = $this->service->about($lingua);

        $testimonials = $this->service->testimonial($lingua);
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        return view('about', ['metaTags' => $metaTags, 
                              'contact' => $contact, 
                              'args' => $index_text, 
                              'about' => $about, 
                              'testimonials' => $testimonials, 
                              'menuWorks' => $menuWorks, 
                              'menuProjects' => $menuProjects]);
    }

    public function saveAboutPage(Request $request) {
        $this->service->saveAbout($request->all());
        
        return true;
    }

    // ------------------------------------- SOBRE -------------------------------------

    // ------------------------------------- WORK -------------------------------------

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

    // ------------------------------------- WORK -------------------------------------

    // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

    public function portifolioGeral($lingua) {
        $portifolioGeral = $this->service->portifolioGeral($lingua);

        $works = $this->service->work($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $portifolios = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        return view('portifoliogeral',['metaTags' => $metaTags, 
                                       'contact' => $contact, 
                                       'index_text' => $index_text, 
                                       'portifolioGeral' => $portifolioGeral, 
                                       'portifolios' => $portifolios, 
                                       'works' => $works, 
                                       'menuWorks' => $menuWorks, 
                                       'menuProjects' => $menuProjects]);
    }

    public function portifolio($lingua,$id) {
        $work = $this->service->workById($id,$lingua);
        $metaTags = $this->service->metaTags($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        $index_text = $this->service->indexText($lingua);

        $contact = $this->service->contact($lingua);

        return view('portifolio',['metaTags' => $metaTags, 'contact' => $contact, 'index_text' => $index_text, 'work' => $work, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    public function savePortifolioGeral(Request $request) {
        $this->service->savePortifolioGeral($request->all());
        
        return true;
    }

    // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

    // ------------------------------------- PROJECT PAGE -------------------------------------

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

    // ------------------------------------- PROJECT PAGE -------------------------------------

    // ------------------------------------- SERVICO GERAL -------------------------------------

    public function saveServicoGeral(Request $request) {
        $this->service->saveServicoGeral($request->all());
        
        return true;
    }

    public function servicoGeral($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $servicoGeral = $this->service->servicoGeral($lingua);
        $servicos = $this->service->projectActive($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);

        $menuProjects = $this->service->projectActive($lingua);

        return view('servicosgeral',['metaTags' => $metaTags, 'contact' => $contact, 
                                     'index_text' => $index_text, 
                                     'servicos' => $servicos, 
                                     'servicoGeral' => $servicoGeral,
                                     'menuWorks' => $menuWorks, 
                                     'menuProjects' => $menuProjects]);
    }

    // ------------------------------------- SERVICO GERAL -------------------------------------

    // ------------------------------------- SERVICO -------------------------------------

    public function servico($lingua,$id) {
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        
        $project = $this->service->projectById($id,$lingua);

        $menuProjects = $this->service->projectActive($lingua);

        $nextprojects = $this->service->getProjectThatIsNotId($id);
        $nextProject = $this->service->getRandomProject($nextprojects);

        return view('servico',['metaTags' => $metaTags, 'contact' => $contact, 'index_text' => $index_text, 'project' => $project, 'nextProject' => $nextProject, 'menuWorks' => $menuWorks, 'menuProjects' => $menuProjects]);
    }

    // ------------------------------------- SERVICO -------------------------------------

    // ------------------------------------- TESTIMONIAL -------------------------------------

    public function saveTestimonialPage(Request $request) {
        $this->service->saveTestimonial($request->all());
        
        return true;
    }

    public function deleteTestimonialPage(Request $request) {
        $this->service->deleteTestimonial($request->all());
        
        return true;
    }

    // ------------------------------------- TESTIMONIAL -------------------------------------

    // ------------------------------------- OPORTUNIDADE -------------------------------------

    public function oportunidades($lingua) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);

        $oportunidades = $this->service->oportunidade($lingua);

        return view('oportunidades',['metaTags' => $metaTags, 'contact' => $contact, 
                                     'index_text' => $index_text, 
                                     'menuWorks' => $menuWorks, 
                                     'oportunidades' => $oportunidades]);
    }

    public function oportunidadeDetalhe($lingua,$id) {
        
        $index_text = $this->service->indexText($lingua);
        $oportunidade = $this->service->oportunidadeById($id,$lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);

        return view('oportunidadedetalhe',['metaTags' => $metaTags, 'contact' => $contact,
                                     'index_text' => $index_text,
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

    // ------------------------------------- OPORTUNIDADE -------------------------------------

    // ------------------------------------- PROPRIEDADES -------------------------------------

    public function propriedades($lingua) {

        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);

        $menuWorks = $this->service->workActive($lingua);

        $propriedades = $this->service->propriedade($lingua);

        return view('propriedades',['metaTags' => $metaTags, 'contact' => $contact, 
                                     'index_text' => $index_text, 
                                     'menuWorks' => $menuWorks, 
                                     'propriedades' => $propriedades]);
    }

    public function propriedadeDetalhe($lingua,$id) {
        
        $index_text = $this->service->indexText($lingua);
        $metaTags = $this->service->metaTags();
        $contact = $this->service->contact($lingua);
        
        $menuWorks = $this->service->workActive($lingua);
        $menuProjects = $this->service->projectActive($lingua);
        
        $propriedade = $this->service->propriedadeById($id,$lingua);

        return view('propriedadedetalhe',['metaTags' => $metaTags, 'contact' => $contact, 
                                     'index_text' => $index_text, 
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

    // ------------------------------------- PROPRIEDADES -------------------------------------
}
