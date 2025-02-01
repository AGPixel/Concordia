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

        return view('index', ['args' => $index_text]);
    }

    public function saveIndexPage(Request $request) {

        $this->service->saveIndexText($request->all());
        
        return true;
    }

    public function contato() {

        $index_text = $this->service->indexText();

        $contact = $this->service->contact();

        return view('contactpage', ['index_text' => $index_text, 'contact' => $contact]);
    }

    public function saveContactPage(Request $request) {

        $this->service->saveContact($request->all());
        
        return true;
    }

    public function sobre() {

        $index_text = $this->service->indexText();

        $about = $this->service->about();

        $contact = $this->service->contact();

        return view('about', ['args' => $index_text, 'contact' => $contact, 'about' => $about]);
    }

    public function saveAboutPage (Request $request) {

        $this->service->saveAbout($request->all());
        
        return true;

    }

    public function portifolio1() {
        return view('portifolio');
    }
}
