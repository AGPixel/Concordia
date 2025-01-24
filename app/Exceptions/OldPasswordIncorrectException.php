<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OldPasswordIncorrectException extends BaseException
{
    public function render(Request $request): JsonResponse
    {
        $error = 'oldPasswordIncorrect';
        return $this->baseRenderer($error);
    }
}
