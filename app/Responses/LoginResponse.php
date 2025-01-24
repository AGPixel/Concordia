<?php

namespace App\Responses;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginResponse extends BaseResponse {

    public function response(object $object) {
        $message = "Login feito com sucesso";
        return $this->baseResponse($message,$object);
    }

    public function responsePassword() {
        $message = "Palavra passe modificada com sucesso";
        return $this->baseResponse($message,null);
    }
}