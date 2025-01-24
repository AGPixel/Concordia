<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new User();
	}

	/**
     * Makes login to use system
     * @param string
     * @return object
     */
     public function login(string $email): object|null {
          return $this->model::select('id','name','email','password')
                              ->where('email',$email)
                              ->first();
     }

    public function trocarSenha(object $login,string $password) {
          $login->password = Hash::make($password);
          $login->save();
    }

}