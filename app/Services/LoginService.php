<?php

namespace App\Services;

use App\Models\Login;
use App\Repositories\LoginRepository;
use App\Exceptions\LoginException;
use App\Exceptions\OldPasswordIncorrectException;
use Illuminate\Support\Facades\Hash;

class LoginService extends BaseService
{
    /**
     * Constructor, set repository
     */
    public function __construct() {
        $this->repository = new LoginRepository();
    }

    /**
     * Verify if cpf and password is correct
     * @param array
     * @return object
     */
    public function login(array $arr) {
        $email = $arr['email'];
        $password = $arr['password'];
        $login = $this->repository->login($email);
        if (!$login || !Hash::check($password, $login->password)) throw new LoginException();
        return $login;
    }

    public function verifySenha(array $arr) {
        $email = $arr['email'];
        $oldPassword = $arr['oldPassword'];
        $login = $this->repository->login($email);
        if (!Hash::check($oldPassword, $login->password)) throw new OldPasswordIncorrectException();
        return $login;
    }
    
    public function trocarSenha(object $login, array $arr) {
        $newPassword = $arr['newPassword'];
        $this->repository->trocarSenha($login, $newPassword);
    }

}