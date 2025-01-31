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

    public function indexPage() {
        $index_text = $this->siteService->indexText();

        return view('dashboard.viewIndexPage', ['args' => $index_text]);
    }

    public function contactPage() {
        $contact = $this->siteService->contact();

        return view('dashboard.viewContactPage', ['contact' => $contact]);
    }

    public function aboutPage() {
        $about = $this->siteService->about();

        return view('dashboard.viewAboutPage', ['about' => $about]);

    }
}
