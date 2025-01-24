<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('viewHome');
    }

    public function dashboard() {
        return view('dashboard.viewDashboard');
    }

    public function trocarSenha() {
        return view('dashboard.viewTrocarSenha');
    }
}
