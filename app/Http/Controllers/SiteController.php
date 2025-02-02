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

    public function index() {

        $index_text = $this->service->indexText();

        $menuWorks = $this->service->workActive();

        return view('index', ['args' => $index_text, 'menuWorks' => $menuWorks]);
    }

    public function saveIndexPage(Request $request) {

        $this->service->saveIndexText($request->all());
        
        return true;
    }

    public function contato() {

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        $menuWorks = $this->service->workActive();

        return view('contactpage', ['index_text' => $index_text, 'contact' => $contact, 'menuWorks' => $menuWorks]);
    }

    public function saveContactPage(Request $request) {

        $this->service->saveContact($request->all());
        
        return true;
    }

    public function sobre() {

        $index_text = $this->service->indexText();

        $about = $this->service->about();

        $contact = $this->service->contact();

        $menuWorks = $this->service->workActive();

        return view('about', ['args' => $index_text, 'contact' => $contact, 'about' => $about, 'menuWorks' => $menuWorks]);
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

    public function portifolio($id) {
        $work = $this->service->workById($id);

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        return view('portifolio',['index_text' => $index_text, 'contact' => $contact, 'work' => $work, 'menuWorks' => $menuWorks]);
    }

    public function servico() {

        $menuWorks = $this->service->workActive();

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        return view('servico',['index_text' => $index_text, 'contact' => $contact, 'menuWorks' => $menuWorks]);
    }
}
