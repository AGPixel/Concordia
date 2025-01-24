<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LoginException extends BaseException
{
    public function render(Request $request): JsonResponse
    {
        $error = 'login';
        return $this->baseRenderer($error);
    }
}
