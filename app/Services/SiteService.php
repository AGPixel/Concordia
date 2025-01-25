<?php

namespace App\Services;

use App\Models\Site;
use App\Repositories\SiteRepository;
use App\Exceptions\SiteException;
use App\Exceptions\OldPasswordIncorrectException;
use Illuminate\Support\Facades\Hash;

class SiteService extends BaseService
{
    /**
     * Constructor, set repository
     */
    public function __construct() {
        $this->repository = new SiteRepository();
    }

    public function indexText() {
        return $this->repository->indexText();
    }

    public function saveIndexText(array $arr) {
        $this->repository->saveIndexText($arr);
    }

}