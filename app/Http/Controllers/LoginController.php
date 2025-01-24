<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Services\UserTokenService;
use App\Validates\LoginValidate;
use App\Responses\LoginResponse;

class LoginController extends Controller
{

    /**
     * Constructor, set service
     */    
    public function __construct() {
        $this->service = new LoginService();
        $this->validate = new LoginValidate();
        $this->response = new LoginResponse();
    }

    public function login() {
        return view('login.viewLogin');
    }

    public function esqueciSenha() {
        return view('login.viewEsqueciSenha');
    }

    public function logar(Request $request) {
        $this->validate->validate($request);
        $user = $this->service->login($request->all());
        $userTokenService = new UserTokenService();
        $userToken = $userTokenService->updateUserToken($user->id);
        $user->token = $userToken->token;
        return $this->response->response($user);
    }

    public function trocarSenha(Request $request) {
        $login = $this->service->verifySenha($request->all());
        $this->service->trocarSenha($login, $request->all());
        return $this->response->responsePassword();
    }

}
