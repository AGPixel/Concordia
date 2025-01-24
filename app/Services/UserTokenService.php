<?php

namespace App\Services;

use App\Models\UserToken;
use App\Repositories\UserTokenRepository;
use Illuminate\Support\Facades\Hash;

class UserTokenService extends BaseService
{
    /**
     * Constructor, set model and repository
     */
    public function __construct() {
        $this->repository = new UserTokenRepository();
    }

    /**
     * Create new wallet with user_id
     * @param int
     * @return void
     */
    public function createNewUserToken(int $user_id): void {
        $this->repository->createNewUserToken($user_id);
    }

    /**
     * Update the user wallet value by id user
     * @param int, string
     * @return object
     */
    public function updateUserToken(int $user_id): object {
        return $this->repository->updateUserToken($user_id);
    }

    /**
     * Verify if token exists
     * @param string
     * @return bool
     */
    public function verifyTokenExists(string $token): bool {
        return $this->repository->verifyTokenExists($token);
    }

    /**
     * 
     */
    public function verifyTokenExpired(string $token): bool {
        return $this->repository->verifyTokenExpired($token);
    }
}
