<?php

namespace App\Services;

use App\Models\Site;
use App\Models\Work;
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

        $arr['about_img'] = $this->updateImageValue($indexText->about_img,$arr['about_img']);
        $arr['about_img_3'] = $this->updateImageValue($indexText->about_img_3,$arr['about_img_3']);
        $arr['testimonials_img_1'] = $this->updateImageValue($indexText->testimonials_img_1,$arr['testimonials_img_1']);
        $arr['testimonials_img_2'] = $this->updateImageValue($indexText->testimonials_img_2,$arr['testimonials_img_2']);
        $arr['employee_img_1'] = $this->updateImageValue($indexText->employee_img_1,$arr['employee_img_1']);
        $arr['employee_img_2'] = $this->updateImageValue($indexText->employee_img_2,$arr['employee_img_2']);
        $arr['employee_img_3'] = $this->updateImageValue($indexText->employee_img_3,$arr['employee_img_3']);

        return $arr;
    }

    public function contact() {
        return $this->repository->contact();
    }

    public function saveContact(array $arr) {
        $this->repository->saveContact($arr);
    }

    public function about() {
        return $this->repository->about();
    }

    public function saveAbout(array $arr) {
        $arr = $this->updateAboutImages($arr);
        $this->repository->saveAbout($arr);
    }

    private function updateAboutImages(array $arr) {
        
        $about = $this->repository->about();

        $arr['about_img_1'] = $this->updateImageValue($about->about_img_1,$arr['about_img_1']);
        $arr['about_img_2'] = $this->updateImageValue($about->about_img_2,$arr['about_img_2']);
        $arr['about_img_3'] = $this->updateImageValue($about->about_img_3,$arr['about_img_3']);
        $arr['about_img_4'] = $this->updateImageValue($about->about_img_4,$arr['about_img_4']);
        $arr['about_service_img_1'] = $this->updateImageValue($about->about_service_img_1,$arr['about_service_img_1']);
        $arr['about_service_img_2'] = $this->updateImageValue($about->about_service_img_2,$arr['about_service_img_2']);
        $arr['about_service_img_3'] = $this->updateImageValue($about->about_service_img_3,$arr['about_service_img_3']);
        $arr['about_service_img_4'] = $this->updateImageValue($about->about_service_img_4,$arr['about_service_img_4']);
        $arr['about_service_img_5'] = $this->updateImageValue($about->about_service_img_5,$arr['about_service_img_5']);
        $arr['about_service_img_6'] = $this->updateImageValue($about->about_service_img_6,$arr['about_service_img_6']);
        $arr['about_brands_img_1'] = $this->updateImageValue($about->about_brands_img_1,$arr['about_brands_img_1']);
        $arr['about_brands_img_2'] = $this->updateImageValue($about->about_brands_img_2,$arr['about_brands_img_2']);
        $arr['about_brands_img_3'] = $this->updateImageValue($about->about_brands_img_3,$arr['about_brands_img_3']);
        $arr['about_brands_img_4'] = $this->updateImageValue($about->about_brands_img_4,$arr['about_brands_img_4']);

        return $arr;
    }

    public function workById($id) {
        return $this->repository->workById($id);
    }

    public function work() {
        return $this->repository->work();
    }

    public function saveNewWork(array $arr) {
        $arr = $this->uploadWorkImages($arr);
        $this->repository->saveNewWork($arr);
    }

    public function saveWork(array $arr) {
        if ($arr['id'] == 0) {
            unset($arr['id']);
            $arr = $this->uploadWorkImages($arr);
            $this->repository->saveNewWork($arr);
        } else {
            $arr = $this->updateWorkImages($arr);
            unset($arr['active']);
            $this->repository->saveWork($arr);
        }
    }

    private function uploadWorkImages(array $arr) {

        $arr['img_1'] = $this->uploadImageValue($arr['img_1']);
        $arr['img_2'] = $this->uploadImageValue($arr['img_2']);
        $arr['img_3'] = $this->uploadImageValue($arr['img_3']);
        $arr['img_4'] = $this->uploadImageValue($arr['img_4']);
        $arr['img_5'] = $this->uploadImageValue($arr['img_5']);
        $arr['img_6'] = $this->uploadImageValue($arr['img_6']);
        $arr['img_7'] = $this->uploadImageValue($arr['img_7']);

        return $arr;
    }

    private function updateWorkImages(array $arr) {
        
        $work = $this->repository->workById($arr['id']);

        $arr['img_1'] = $this->updateImageValue($work->img_1,$arr['img_1']);
        $arr['img_2'] = $this->updateImageValue($work->img_2,$arr['img_2']);
        $arr['img_3'] = $this->updateImageValue($work->img_3,$arr['img_3']);
        $arr['img_4'] = $this->updateImageValue($work->img_4,$arr['img_4']);
        $arr['img_5'] = $this->updateImageValue($work->img_5,$arr['img_5']);
        $arr['img_6'] = $this->updateImageValue($work->img_6,$arr['img_6']);
        $arr['img_7'] = $this->updateImageValue($work->img_7,$arr['img_7']);

        return $arr;
    }

    public function updateActiveWork(array $arr) {
        return $this->repository->updateActiveWork($arr);
    }

    private function uploadImageValue($arrImg) {
        if ($arrImg) return $this->saveFile($arrImg);
        return $arrImg;
    }

    private function updateImageValue($img,$arrImg) {
        if ($arrImg) {
            $arrImg = $this->uploadImageValue($arrImg);
            if ($img) $this->deleteImage($img);
        }
        return $arrImg;
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

}