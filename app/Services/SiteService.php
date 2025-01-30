<?php

namespace App\Services;

use App\Models\Site;
use App\Repositories\SiteRepository;
use App\Exceptions\SiteException;
use App\Exceptions\OldPasswordIncorrectException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        $arr = $this->updateImages($arr);
        $this->repository->saveIndexText($arr);
    }

    private function updateImages(array $arr) {
        
        $indexText = $this->repository->indexText();

        if ($arr['about_img']) {
            $arr['about_img'] = $this->saveFile($arr['about_img']);
            $this->deleteImage($indexText->about_img);
        }
        if ($arr['about_img_3']) {
            $arr['about_img_3'] = $this->saveFile($arr['about_img_3']);
            $this->deleteImage($indexText->about_img_3);
        }
        if ($arr['testimonials_img_1']) {
            $arr['testimonials_img_1'] = $this->saveFile($arr['testimonials_img_1']);
            $this->deleteImage($indexText->testimonials_img_1);
        }
        if ($arr['testimonials_img_2']) {
            $arr['testimonials_img_2'] = $this->saveFile($arr['testimonials_img_2']);
            $this->deleteImage($indexText->testimonials_img_2);
        }
        if ($arr['employee_img_1']) {
            $arr['employee_img_1'] = $this->saveFile($arr['employee_img_1']);
            $this->deleteImage($indexText->employee_img_1);
        }
        if ($arr['employee_img_2']) {
            $arr['employee_img_2'] = $this->saveFile($arr['employee_img_2']);
            $this->deleteImage($indexText->employee_img_2);
        }
        if ($arr['employee_img_3']) {
            $arr['employee_img_3'] = $this->saveFile($arr['employee_img_3']);
            $this->deleteImage($indexText->employee_img_3);
        }

        return $arr;
    }

    private function saveFile($fileToSave) {
        $fileToSave = explode(',', $fileToSave);
        $file       = base64_decode($fileToSave[1]);
        $safeName   = Str::random(10).'.'.'png';
        $path       = public_path()."\\storage\\";
        file_put_contents($path.$safeName, $file);
        return $safeName;
    }

    private function deleteImage($fileToDelete) {
        $path = public_path()."\\storage\\";
        if ($fileToDelete) unlink($path.$fileToDelete);
    }

    public function contact() {
        return $this->repository->contact();
    }

    public function saveContact(array $arr) {
        $this->repository->saveContact($arr);
    }

}