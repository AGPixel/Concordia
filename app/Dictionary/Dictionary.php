<?php

namespace App\Dictionary;

trait Dictionary {

    public $dictionary = [
        'error' => [
            'login' => [
                'msg' => "Erro ao logar"
            ],
            'oldPasswordIncorrect' => [
                'msg' => "Palavra passe atual incorreta"
            ],
            'notAuthenticate' => [
                'msg' => "Não autenticado"
            ],
            'expiredAuthenticate' => [
                'msg' => "Autenticação expirada"
            ]
        ]
    ];

}