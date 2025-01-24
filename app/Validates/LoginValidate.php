<?php

namespace App\Validates;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginValidate extends BaseValidate {

    public function validate(Request $request) {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }
}