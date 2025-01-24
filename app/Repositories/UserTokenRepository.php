<?php

namespace App\Repositories;

use App\Models\UserToken;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTokenRepository extends BaseRepository
{
    /**
     * Begin the model
     */
    public function __construct() {
        $this->model = new UserToken();
    }

    /**
     * Create new wallet with user_id
     * @param int
     * @return void
     */
    public function createNewUserToken(int $user_id): void {
        $this->model->user_id = $user_id;
        $this->model->token = Hash::make(rand(1,9999));
        $this->model->expire_at = Carbon::now()->format("Y-m-d H:i:s");
        $this->model->save();
    }
    
    /**
     * Update the user wallet value by id user
     * @param int, int
     * @return object
     */
    public function updateUserToken(int $user_id): object {
        $token = Hash::make($user_id);
        $ua = $this->model::where('user_id', $user_id)->first();
        $ua->token = $token;
        $ua->expire_at = Carbon::now()->addMinutes(60)->format("Y-m-d H:i:s");
        $ua->save();
        return $ua;
    }

    /**
     * Verify if token exists
     * @param string
     * @return bool
     */
    public function verifyTokenExists(string $token): bool {
        return $this->model::where('token', $token)->exists();
    }

    /**
     * Verify if token expired
     * @param string
     * @return bool
     */
    public function verifyTokenExpired(string $token): bool {
        return $this->model::where('token', $token)
                           ->where('expire_at','<',Carbon::now()->format("Y-m-d H:i:s"))
                           ->exists();
    }
    
}