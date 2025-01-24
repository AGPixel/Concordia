<?php

namespace App\Http\Controllers;

use App\Dictionary\Dictionary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, Dictionary;

    /**
     * Controller variables
     */
    protected $return;
    protected $model;
    protected $repository;
    protected $service;
    protected $validate;
    protected $response;

    /**
     * List all datas of repositrory
     */
    public function list() {
        return $this->service->list();
    }

    /**
     * Get the data of repository by id
     * @param int
     */
    public function show(int $id) {
        return $this->service->show($id);
    }

    public function delete($id) {
        /*
        $this->return = false;
        if (!$this->service->find($id)) throw new DeleteException();
        $this->return = $this->service->delete($id);
        return $this->return;
        */
        return 1;
    }

    public function update(Request $request,int $id) {
        return 1;//$this->service->update($id);
    }

    public function patch(Request $request,int $id) {
        return 1;//$this->service->patch($id);
    }

    public function create(Request $request) {
        return $this->service->create($request);
    }
}
