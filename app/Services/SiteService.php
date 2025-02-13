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

    // ------------------------------------- META TAGS -------------------------------------

    public function metaTags() {
        return $this->repository->metaTags();
    }

    public function saveMetaTags(array $arr) {
        $this->repository->saveMetaTags($arr);
    }

    // ------------------------------------- META TAGS -------------------------------------

    // ------------------------------------- INDEX_TEXT -------------------------------------

    public function indexText($lingua = 'pt') {
        $index_text = $this->repository->indexText();

        if ($lingua == 'eng') {
            $index_text->about_title = $this->changeLanguage($index_text->about_title,$index_text->about_title_eng);
            $index_text->about_description = $this->changeLanguage($index_text->about_description,$index_text->about_description_eng);
            $index_text->about_description_1 = $this->changeLanguage($index_text->about_description_1,$index_text->about_description_1_eng);
            $index_text->about_description_2 = $this->changeLanguage($index_text->about_description_2,$index_text->about_description_2_eng);
            $index_text->about_description_3 = $this->changeLanguage($index_text->about_description_3,$index_text->about_description_3_eng);
            $index_text->service_title = $this->changeLanguage($index_text->service_title,$index_text->service_title_eng);
            $index_text->service_title_1 = $this->changeLanguage($index_text->service_title_1,$index_text->service_title_1_eng);
            $index_text->service_description_1 = $this->changeLanguage($index_text->service_description_1,$index_text->service_description_1_eng);
            $index_text->service_title_2 = $this->changeLanguage($index_text->service_title_2,$index_text->service_title_2_eng);
            $index_text->service_description_2 = $this->changeLanguage($index_text->service_description_2,$index_text->service_description_2_eng);
            $index_text->service_title_3 = $this->changeLanguage($index_text->service_title_3,$index_text->service_title_3_eng);
            $index_text->service_description_3 = $this->changeLanguage($index_text->service_description_3,$index_text->service_description_3_eng);
            $index_text->portifolio_title = $this->changeLanguage($index_text->portifolio_title,$index_text->portifolio_title_eng);
            $index_text->frame_legend_1 = $this->changeLanguage($index_text->frame_legend_1,$index_text->frame_legend_1_eng);
            $index_text->frame_description_1 = $this->changeLanguage($index_text->frame_description_1,$index_text->frame_description_1_eng);
            $index_text->frame_legend_2 = $this->changeLanguage($index_text->frame_legend_2,$index_text->frame_legend_2_eng);
            $index_text->frame_description_2 = $this->changeLanguage($index_text->frame_description_2,$index_text->frame_description_2_eng);
            $index_text->testimonials_title = $this->changeLanguage($index_text->testimonials_title,$index_text->testimonials_title_eng);
            $index_text->testimonials_description = $this->changeLanguage($index_text->testimonials_description,$index_text->testimonials_description_eng);
            $index_text->testimonials_description_1 = $this->changeLanguage($index_text->testimonials_description_1,$index_text->testimonials_description_1_eng);
            $index_text->testimonials_description_2 = $this->changeLanguage($index_text->testimonials_description_2,$index_text->testimonials_description_2_eng);
            $index_text->employee_title = $this->changeLanguage($index_text->employee_title,$index_text->employee_title_eng);
            $index_text->employee_name_1 = $this->changeLanguage($index_text->employee_name_1,$index_text->employee_name_1_eng);
            $index_text->employee_work_1 = $this->changeLanguage($index_text->employee_work_1,$index_text->employee_work_1_eng);
            $index_text->employee_name_2 = $this->changeLanguage($index_text->employee_name_2,$index_text->employee_name_2_eng);
            $index_text->employee_work_2 = $this->changeLanguage($index_text->employee_work_2,$index_text->employee_work_2_eng);
            $index_text->employee_name_3 = $this->changeLanguage($index_text->employee_name_3,$index_text->employee_name_3_eng);
            $index_text->employee_work_3 = $this->changeLanguage($index_text->employee_work_3,$index_text->employee_work_3_eng);
            $index_text->works_title = $this->changeLanguage($index_text->works_title,$index_text->works_title_eng);
            $index_text->works_title_1 = $this->changeLanguage($index_text->works_title_1,$index_text->works_title_1_eng);
            $index_text->works_description_1 = $this->changeLanguage($index_text->works_description_1,$index_text->works_description_1_eng);
            $index_text->works_title_2 = $this->changeLanguage($index_text->works_title_2,$index_text->works_title_2_eng);
            $index_text->works_description_2 = $this->changeLanguage($index_text->works_description_2,$index_text->works_description_2_eng);
            $index_text->works_title_3 = $this->changeLanguage($index_text->works_title_3,$index_text->works_title_3_eng);
            $index_text->works_description_3 = $this->changeLanguage($index_text->works_description_3,$index_text->works_description_3_eng);
            $index_text->final_title = $this->changeLanguage($index_text->final_title,$index_text->final_title_eng);
            $index_text->sign_title = $this->changeLanguage($index_text->sign_title,$index_text->sign_title_eng);
            $index_text->sign_description = $this->changeLanguage($index_text->sign_description,$index_text->sign_description_eng);
            $index_text->sign_rolling = $this->changeLanguage($index_text->sign_rolling,$index_text->sign_rolling_eng);
            $index_text->navigation_title_1 = $this->changeLanguage($index_text->navigation_title_1,$index_text->navigation_title_1_eng);
            $index_text->navigation_title_2 = $this->changeLanguage($index_text->navigation_title_2,$index_text->navigation_title_2_eng);
            $index_text->navigation_title_3 = $this->changeLanguage($index_text->navigation_title_3,$index_text->navigation_title_3_eng);
        }

        return $index_text;
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
        $arr['brands_bg_img'] = $this->updateImageValue($indexText->brands_bg_img,$arr['brands_bg_img']);
        $arr['brands_img_1'] = $this->updateImageValue($indexText->brands_img_1,$arr['brands_img_1']);
        $arr['brands_img_2'] = $this->updateImageValue($indexText->brands_img_2,$arr['brands_img_2']);
        $arr['brands_img_3'] = $this->updateImageValue($indexText->brands_img_3,$arr['brands_img_3']);
        $arr['brands_img_4'] = $this->updateImageValue($indexText->brands_img_4,$arr['brands_img_4']);
        $arr['brands_img_5'] = $this->updateImageValue($indexText->brands_img_5,$arr['brands_img_5']);
        $arr['brands_img_6'] = $this->updateImageValue($indexText->brands_img_6,$arr['brands_img_6']);

        return $arr;
    }

    // ------------------------------------- INDEX_TEXT -------------------------------------

    // ------------------------------------- CONTACT -------------------------------------

    public function contact($lingua = 'pt') {

        $contact = $this->repository->contact();

        if ($lingua == 'eng') {
            $contact->about_title = $contact->contact_form_title_eng != '' ? $contact->contact_form_title_eng : $contact->contact_form_title;
        }

        return $contact;
    }

    public function saveContact(array $arr) {
        $this->repository->saveContact($arr);
    }

    // ------------------------------------- CONTACT -------------------------------------

    // ------------------------------------- ABOUT -------------------------------------

    public function about($lingua = 'pt') {

        $about = $this->repository->about();

        if ($lingua == 'eng') {
            $about->about_title_1 = $this->changeLanguage($about->about_title_1,$about->about_title_1_eng);
            $about->about_title_2 = $this->changeLanguage($about->about_title_2,$about->about_title_2_eng);
            $about->about_service_title = $this->changeLanguage($about->about_service_title,$about->about_service_title_eng);
            $about->about_service_1 = $this->changeLanguage($about->about_service_1,$about->about_service_1_eng);
            $about->about_service_2 = $this->changeLanguage($about->about_service_2,$about->about_service_2_eng);
            $about->about_service_3 = $this->changeLanguage($about->about_service_3,$about->about_service_3_eng);
            $about->about_service_4 = $this->changeLanguage($about->about_service_4,$about->about_service_4_eng);
            $about->about_service_5 = $this->changeLanguage($about->about_service_5,$about->about_service_5_eng);
            $about->about_service_6 = $this->changeLanguage($about->about_service_6,$about->about_service_6_eng);
            $about->about_experience_title = $this->changeLanguage($about->about_experience_title,$about->about_experience_title_eng);
            $about->about_experience_title_1 = $this->changeLanguage($about->about_experience_title_1,$about->about_experience_title_1_eng);
            $about->about_experience_description_1 = $this->changeLanguage($about->about_experience_description_1,$about->about_experience_description_1_eng);
            $about->about_experience_title_2 = $this->changeLanguage($about->about_experience_title_2,$about->about_experience_title_2_eng);
            $about->about_experience_description_2 = $this->changeLanguage($about->about_experience_description_2,$about->about_experience_description_2_eng);
            $about->about_experience_title_3 = $this->changeLanguage($about->about_experience_title_3,$about->about_experience_title_3_eng);
            $about->about_experience_description_3 = $this->changeLanguage($about->about_experience_description_3,$about->about_experience_description_3_eng);
            $about->about_experience_title_4 = $this->changeLanguage($about->about_experience_title_4,$about->about_experience_title_4_eng);
            $about->about_experience_description_4 = $this->changeLanguage($about->about_experience_description_4,$about->about_experience_description_4_eng);
            $about->about_brands_title = $this->changeLanguage($about->about_brands_title,$about->about_brands_title_eng);
            $about->about_brands_description = $this->changeLanguage($about->about_brands_description,$about->about_brands_description_eng);
        }

        return $about;
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

    // ------------------------------------- ABOUT -------------------------------------

    // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

    public function portifolioGeral($lingua = 'pt') {

        $portifolio = $this->repository->portifolioGeral();

        if ($lingua == 'eng') {
            $portifolio->title = $this->changeLanguage($portifolio->title,$portifolio->title_eng);
            $portifolio->description = $this->changeLanguage($portifolio->description,$portifolio->description_eng);
        }

        return $portifolio;
    }

    public function savePortifolioGeral(array $arr) {
        $this->repository->savePortifolioGeral($arr);
    }

    // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

    // ------------------------------------- PORTIFOLIO -------------------------------------

    public function workById($id,$lingua = 'pt') {
        $portifolio = $this->repository->workById($id);

        if ($lingua == 'eng') {
            $portifolio->title = $this->changeLanguage($portifolio->title,$portifolio->title_eng);
            $portifolio->description = $this->changeLanguage($portifolio->description,$portifolio->description_eng);
            $portifolio->type_1 = $this->changeLanguage($portifolio->type_1,$portifolio->type_1_eng);
            $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
            $portifolio->type_2 = $this->changeLanguage($portifolio->type_2,$portifolio->type_2_eng);
            $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
            $portifolio->type_3 = $this->changeLanguage($portifolio->type_3,$portifolio->type_3_eng);
            $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
            $portifolio->type_4 = $this->changeLanguage($portifolio->type_4,$portifolio->type_4_eng);
            $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
            $portifolio->type_5 = $this->changeLanguage($portifolio->type_5,$portifolio->type_5_eng);
            $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
            $portifolio->type_6 = $this->changeLanguage($portifolio->type_6,$portifolio->type_6_eng);
            $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
            $portifolio->type_7 = $this->changeLanguage($portifolio->type_7,$portifolio->type_7_eng);
            $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
        }

        return $portifolio;
    }

    public function work($lingua = 'pt') {
        $portifolios = $this->repository->work();

        if ($lingua == 'eng') {
            foreach($portifolios as $id => $portifolio) {
                $portifolio->title = $this->changeLanguage($portifolio->title,$portifolio->title_eng);
                $portifolio->description = $this->changeLanguage($portifolio->description,$portifolio->description_eng);
                $portifolio->type_1 = $this->changeLanguage($portifolio->type_1,$portifolio->type_1_eng);
                $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
                $portifolio->type_2 = $this->changeLanguage($portifolio->type_2,$portifolio->type_2_eng);
                $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
                $portifolio->type_3 = $this->changeLanguage($portifolio->type_3,$portifolio->type_3_eng);
                $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
                $portifolio->type_4 = $this->changeLanguage($portifolio->type_4,$portifolio->type_4_eng);
                $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
                $portifolio->type_5 = $this->changeLanguage($portifolio->type_5,$portifolio->type_5_eng);
                $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
                $portifolio->type_6 = $this->changeLanguage($portifolio->type_6,$portifolio->type_6_eng);
                $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
                $portifolio->type_7 = $this->changeLanguage($portifolio->type_7,$portifolio->type_7_eng);
                $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
            }
        }

        return $portifolios;
    }

    public function workActive($lingua = 'pt') {
        $portifolios = $this->repository->workActive();

        if ($lingua == 'eng') {
            foreach($portifolios as $id => $portifolio) {
                $portifolio->title = $this->changeLanguage($portifolio->title,$portifolio->title_eng);
                $portifolio->description = $this->changeLanguage($portifolio->description,$portifolio->description_eng);
                $portifolio->type_1 = $this->changeLanguage($portifolio->type_1,$portifolio->type_1_eng);
                $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
                $portifolio->type_2 = $this->changeLanguage($portifolio->type_2,$portifolio->type_2_eng);
                $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
                $portifolio->type_3 = $this->changeLanguage($portifolio->type_3,$portifolio->type_3_eng);
                $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
                $portifolio->type_4 = $this->changeLanguage($portifolio->type_4,$portifolio->type_4_eng);
                $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
                $portifolio->type_5 = $this->changeLanguage($portifolio->type_5,$portifolio->type_5_eng);
                $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
                $portifolio->type_6 = $this->changeLanguage($portifolio->type_6,$portifolio->type_6_eng);
                $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
                $portifolio->type_7 = $this->changeLanguage($portifolio->type_7,$portifolio->type_7_eng);
                $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
            }
        }

        return $portifolios;
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

    public function deleteWork(array $arr) {
        $this->repository->deleteWork($arr['id']);
    }

    public function updateActiveWork(array $arr) {
        return $this->repository->updateActiveWork($arr);
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

    // ------------------------------------- PORTIFOLIO -------------------------------------

    // ------------------------------------- SERVICO GERAL -------------------------------------

    public function servicoGeral($lingua = 'pt') {
        $servico = $this->repository->servicoGeral();
        return $servico;
    }

    public function saveServicoGeral(array $arr) {
        $arr = $this->updateServicoFile($arr);
        $this->repository->saveServicoGeral($arr);
    }

    private function uploadServicoFile(array $arr) {

        $arr['video'] = $this->uploadVideoValue($arr['video']);

        return $arr;
    }

    private function updateServicoFile(array $arr) {

        $servico = $this->servicoGeral();
        
        $arr['video'] = $this->updateVideoValue($servico->video,$arr['video']);

        return $arr;
    }

    // ------------------------------------- SERVICO GERAL -------------------------------------

    // ------------------------------------- PROJECT -------------------------------------

    public function projectById($id,$lingua = 'pt') {
        $project = $this->repository->projectById($id);

        if ($lingua == 'eng') {
            $project->title_1 = $this->changeLanguage($project->title_1,$project->title_1_eng);
            $project->description_1 = $this->changeLanguage($project->description_1,$project->description_1_eng);
            $project->title_2 = $this->changeLanguage($project->title_2,$project->title_2_eng);
            $project->description_2 = $this->changeLanguage($project->description_2,$project->description_2_eng);
        }

        return $project;
    }

    public function getProjectThatIsNotId($id) {
        return $this->repository->getProjectThatIsNotId($id);
    }

    public function getRandomProject($nextprojects) {
        return $nextprojects[mt_rand(0,count($nextprojects)-1)];
    }

    public function project($lingua = 'pt') {
        $project = $this->repository->project();

        if ($lingua == 'eng') {
            foreach($project as $id => $p) {
                $p->title_1 = $this->changeLanguage($p->title_1,$p->title_1_eng);
                $p->description_1 = $this->changeLanguage($p->description_1,$p->description_1_eng);
                $p->title_2 = $this->changeLanguage($p->title_2,$p->title_2_eng);
                $p->description_2 = $this->changeLanguage($p->description_2,$p->description_2_eng);
            }
        }

        return $project;
    }

    public function projectActive($lingua = 'pt') {
        $project = $this->repository->projectActive();
        if ($lingua == 'eng') {
            foreach($project as $id => $p) {
                $p->title_1 = $this->changeLanguage($p->title_1,$p->title_1_eng);
                $p->description_1 = $this->changeLanguage($p->description_1,$p->description_1_eng);
                $p->title_2 = $this->changeLanguage($p->title_2,$p->title_2_eng);
                $p->description_2 = $this->changeLanguage($p->description_2,$p->description_2_eng);
            }
        }
        return $project;
    }

    public function saveNewProject(array $arr) {
        $arr = $this->uploadProjectImages($arr);
        $this->repository->saveNewProject($arr);
    }

    public function saveProject(array $arr) {
        if ($arr['id'] == 0) {
            unset($arr['id']);
            $arr = $this->uploadProjectImages($arr);
            $this->repository->saveNewProject($arr);
        } else {
            $arr = $this->updateProjectImages($arr);
            unset($arr['active']);
            $this->repository->saveProject($arr);
        }
    }

    public function deleteProject(array $arr) {
        $this->repository->deleteProject($arr['id']);
    }

    public function updateActiveProject(array $arr) {
        return $this->repository->updateActiveProject($arr);
    }

    private function uploadProjectImages(array $arr) {

        $arr['img_begin'] = $this->uploadImageValue($arr['img_begin']);
        $arr['img_1']     = $this->uploadImageValue($arr['img_1']);
        $arr['img_2']     = $this->uploadImageValue($arr['img_2']);
        $arr['img_3']     = $this->uploadImageValue($arr['img_3']);
        $arr['img_4']     = $this->uploadImageValue($arr['img_4']);

        return $arr;
    }

    private function updateProjectImages(array $arr) {
        
        $project = $this->repository->projectById($arr['id']);

        $arr['img_begin'] = $this->updateImageValue($project->img_begin,$arr['img_begin']);
        $arr['img_1']     = $this->updateImageValue($project->img_1,$arr['img_1']);
        $arr['img_2']     = $this->updateImageValue($project->img_2,$arr['img_2']);
        $arr['img_3']     = $this->updateImageValue($project->img_3,$arr['img_3']);
        $arr['img_4']     = $this->updateImageValue($project->img_4,$arr['img_4']);

        return $arr;
    }

    // ------------------------------------- PROJECT -------------------------------------

    // ------------------------------------- OPORTUNIDADE -------------------------------------

    public function oportunidadeById($id,$lingua = 'pt') {
        $oportunidade = $this->repository->oportunidadeById($id);

        if ($lingua == 'eng') {
            $oportunidade->title = $this->changeLanguage($oportunidade->title,$oportunidade->title_eng);
            $oportunidade->description = $this->changeLanguage($oportunidade->description,$oportunidade->description_eng);
            $oportunidade->job_1 = $this->changeLanguage($oportunidade->job_1,$oportunidade->job_1_eng);
            $oportunidade->job_2 = $this->changeLanguage($oportunidade->job_2,$oportunidade->job_2_eng);
            $oportunidade->type_1 = $this->changeLanguage($oportunidade->type_1,$oportunidade->type_1_eng);
            $oportunidade->title_1 = $this->changeLanguage($oportunidade->title_1,$oportunidade->title_1_eng);
            $oportunidade->type_2 = $this->changeLanguage($oportunidade->type_2,$oportunidade->type_2_eng);
            $oportunidade->title_2 = $this->changeLanguage($oportunidade->title_2,$oportunidade->title_2_eng);
            $oportunidade->type_3 = $this->changeLanguage($oportunidade->type_3,$oportunidade->type_3_eng);
            $oportunidade->title_3 = $this->changeLanguage($oportunidade->title_3,$oportunidade->title_3_eng);
            $oportunidade->type_4 = $this->changeLanguage($oportunidade->type_4,$oportunidade->type_4_eng);
            $oportunidade->title_4 = $this->changeLanguage($oportunidade->title_4,$oportunidade->title_4_eng);
        }

        return $oportunidade;
    }

    public function getOportunidadeThatIsNotId($id) {
        return $this->repository->getOportunidadeThatIsNotId($id);
    }

    public function getRandomOportunidade($nextoportunidades) {
        return $nextoportunidades[mt_rand(0,count($nextoportunidades)-1)];
    }

    public function oportunidade($lingua = 'pt') {
        $oportunidade = $this->repository->oportunidade();

        if ($lingua == 'eng') {
            $oportunidade->title = $this->changeLanguage($oportunidade->title,$oportunidade->title_eng);
            $oportunidade->description = $this->changeLanguage($oportunidade->description,$oportunidade->description_eng);
            $oportunidade->job_1 = $this->changeLanguage($oportunidade->job_1,$oportunidade->job_1_eng);
            $oportunidade->job_2 = $this->changeLanguage($oportunidade->job_2,$oportunidade->job_2_eng);
            $oportunidade->type_1 = $this->changeLanguage($oportunidade->type_1,$oportunidade->type_1_eng);
            $oportunidade->title_1 = $this->changeLanguage($oportunidade->title_1,$oportunidade->title_1_eng);
            $oportunidade->type_2 = $this->changeLanguage($oportunidade->type_2,$oportunidade->type_2_eng);
            $oportunidade->title_2 = $this->changeLanguage($oportunidade->title_2,$oportunidade->title_2_eng);
            $oportunidade->type_3 = $this->changeLanguage($oportunidade->type_3,$oportunidade->type_3_eng);
            $oportunidade->title_3 = $this->changeLanguage($oportunidade->title_3,$oportunidade->title_3_eng);
            $oportunidade->type_4 = $this->changeLanguage($oportunidade->type_4,$oportunidade->type_4_eng);
            $oportunidade->title_4 = $this->changeLanguage($oportunidade->title_4,$oportunidade->title_4_eng);
        }

        return $oportunidade;
    }

    public function oportunidadeActive($lingua = 'pt') {
        $oportunidade = $this->repository->oportunidadeActive();

        if ($lingua == 'eng') {
            $oportunidade->title = $this->changeLanguage($oportunidade->title,$oportunidade->title_eng);
            $oportunidade->description = $this->changeLanguage($oportunidade->description,$oportunidade->description_eng);
            $oportunidade->job_1 = $this->changeLanguage($oportunidade->job_1,$oportunidade->job_1_eng);
            $oportunidade->job_2 = $this->changeLanguage($oportunidade->job_2,$oportunidade->job_2_eng);
            $oportunidade->type_1 = $this->changeLanguage($oportunidade->type_1,$oportunidade->type_1_eng);
            $oportunidade->title_1 = $this->changeLanguage($oportunidade->title_1,$oportunidade->title_1_eng);
            $oportunidade->type_2 = $this->changeLanguage($oportunidade->type_2,$oportunidade->type_2_eng);
            $oportunidade->title_2 = $this->changeLanguage($oportunidade->title_2,$oportunidade->title_2_eng);
            $oportunidade->type_3 = $this->changeLanguage($oportunidade->type_3,$oportunidade->type_3_eng);
            $oportunidade->title_3 = $this->changeLanguage($oportunidade->title_3,$oportunidade->title_3_eng);
            $oportunidade->type_4 = $this->changeLanguage($oportunidade->type_4,$oportunidade->type_4_eng);
            $oportunidade->title_4 = $this->changeLanguage($oportunidade->title_4,$oportunidade->title_4_eng);
        }

        return $oportunidade;
    }

    public function saveNewOportunidade(array $arr) {
        $arr = $this->uploadOportunidadeImages($arr);
        $this->repository->saveNewOportunidade($arr);
    }

    public function saveOportunidade(array $arr) {
        if ($arr['id'] == 0) {
            unset($arr['id']);
            $arr = $this->uploadOportunidadeImages($arr);
            $this->repository->saveNewOportunidade($arr);
        } else {
            $arr = $this->updateOportunidadeImages($arr);
            unset($arr['active']);
            $this->repository->saveOportunidade($arr);
        }
    }

    public function deleteOportunidade(array $arr) {
        $this->repository->deleteOportunidade($arr['id']);
    }

    public function updateActiveOportunidade(array $arr) {
        return $this->repository->updateActiveOportunidade($arr);
    }

    private function uploadOportunidadeImages(array $arr) {

        $arr['img_1']     = $this->uploadImageValue($arr['img_1']);
        $arr['img_2']     = $this->uploadImageValue($arr['img_2']);
        $arr['img_3']     = $this->uploadImageValue($arr['img_3']);
        $arr['img_4']     = $this->uploadImageValue($arr['img_4']);

        return $arr;
    }

    private function updateOportunidadeImages(array $arr) {
        
        $oportunidade = $this->repository->oportunidadeById($arr['id']);

        $arr['img_1']     = $this->updateImageValue($oportunidade->img_1,$arr['img_1']);
        $arr['img_2']     = $this->updateImageValue($oportunidade->img_2,$arr['img_2']);
        $arr['img_3']     = $this->updateImageValue($oportunidade->img_3,$arr['img_3']);
        $arr['img_4']     = $this->updateImageValue($oportunidade->img_4,$arr['img_4']);

        return $arr;
    }

    // ------------------------------------- OPORTUNIDADE -------------------------------------

    // ------------------------------------- PROPRIEDADE -------------------------------------

    public function propriedadeById($id,$lingua = 'pt') {
        $propriedade = $this->repository->propriedadeById($id);

        if ($lingua == 'eng') {
            $propriedade->title = $this->changeLanguage($propriedade->title,$propriedade->title_eng);
            $propriedade->description = $this->changeLanguage($propriedade->description,$propriedade->description_eng);
            $propriedade->job_1 = $this->changeLanguage($propriedade->job_1,$propriedade->job_1_eng);
            $propriedade->job_2 = $this->changeLanguage($propriedade->job_2,$propriedade->job_2_eng);
            $propriedade->type_1 = $this->changeLanguage($propriedade->type_1,$propriedade->type_1_eng);
            $propriedade->legend_1 = $this->changeLanguage($propriedade->legend_1,$propriedade->legend_1_eng);
            $propriedade->type_2 = $this->changeLanguage($propriedade->type_2,$propriedade->type_2_eng);
            $propriedade->legend_2 = $this->changeLanguage($propriedade->legend_2,$propriedade->legend_2_eng);
            $propriedade->type_3 = $this->changeLanguage($propriedade->type_3,$propriedade->type_3_eng);
            $propriedade->legend_3 = $this->changeLanguage($propriedade->legend_3,$propriedade->legend_3_eng);
            $propriedade->type_4 = $this->changeLanguage($propriedade->type_4,$propriedade->type_4_eng);
            $propriedade->legend_4 = $this->changeLanguage($propriedade->legend_4,$propriedade->legend_4_eng);
            $propriedade->type_5 = $this->changeLanguage($propriedade->type_5,$propriedade->type_5_eng);
            $propriedade->legend_5 = $this->changeLanguage($propriedade->legend_5,$propriedade->legend_5_eng);
            $propriedade->type_6 = $this->changeLanguage($propriedade->type_6,$propriedade->type_6_eng);
            $propriedade->legend_6 = $this->changeLanguage($propriedade->legend_6,$propriedade->legend_6_eng);
            $propriedade->type_7 = $this->changeLanguage($propriedade->type_7,$propriedade->type_7_eng);
            $propriedade->legend_7 = $this->changeLanguage($propriedade->legend_7,$propriedade->legend_7_eng);
        }

        return $propriedade;
    }

    public function getPropriedadeThatIsNotId($id) {
        return $this->repository->getPropriedadeThatIsNotId($id);
    }

    public function getRandomPropriedade($nextpropriedades) {
        return $nextpropriedades[mt_rand(0,count($nextpropriedades)-1)];
    }

    public function propriedade($lingua = 'pt') {
        $propriedade = $this->repository->propriedade();

        if ($lingua == 'eng') {
            $propriedade->title = $this->changeLanguage($propriedade->title,$propriedade->title_eng);
            $propriedade->description = $this->changeLanguage($propriedade->description,$propriedade->description_eng);
            $propriedade->job_1 = $this->changeLanguage($propriedade->job_1,$propriedade->job_1_eng);
            $propriedade->job_2 = $this->changeLanguage($propriedade->job_2,$propriedade->job_2_eng);
            $propriedade->type_1 = $this->changeLanguage($propriedade->type_1,$propriedade->type_1_eng);
            $propriedade->legend_1 = $this->changeLanguage($propriedade->legend_1,$propriedade->legend_1_eng);
            $propriedade->type_2 = $this->changeLanguage($propriedade->type_2,$propriedade->type_2_eng);
            $propriedade->legend_2 = $this->changeLanguage($propriedade->legend_2,$propriedade->legend_2_eng);
            $propriedade->type_3 = $this->changeLanguage($propriedade->type_3,$propriedade->type_3_eng);
            $propriedade->legend_3 = $this->changeLanguage($propriedade->legend_3,$propriedade->legend_3_eng);
            $propriedade->type_4 = $this->changeLanguage($propriedade->type_4,$propriedade->type_4_eng);
            $propriedade->legend_4 = $this->changeLanguage($propriedade->legend_4,$propriedade->legend_4_eng);
            $propriedade->type_5 = $this->changeLanguage($propriedade->type_5,$propriedade->type_5_eng);
            $propriedade->legend_5 = $this->changeLanguage($propriedade->legend_5,$propriedade->legend_5_eng);
            $propriedade->type_6 = $this->changeLanguage($propriedade->type_6,$propriedade->type_6_eng);
            $propriedade->legend_6 = $this->changeLanguage($propriedade->legend_6,$propriedade->legend_6_eng);
            $propriedade->type_7 = $this->changeLanguage($propriedade->type_7,$propriedade->type_7_eng);
            $propriedade->legend_7 = $this->changeLanguage($propriedade->legend_7,$propriedade->legend_7_eng);
        }

        return $propriedade;
    }

    public function propriedadeActive($lingua = 'pt') {
        $propriedade = $this->repository->propriedadeActive();

        if ($lingua == 'eng') {
            $propriedade->title = $this->changeLanguage($propriedade->title,$propriedade->title_eng);
            $propriedade->description = $this->changeLanguage($propriedade->description,$propriedade->description_eng);
            $propriedade->job_1 = $this->changeLanguage($propriedade->job_1,$propriedade->job_1_eng);
            $propriedade->job_2 = $this->changeLanguage($propriedade->job_2,$propriedade->job_2_eng);
            $propriedade->type_1 = $this->changeLanguage($propriedade->type_1,$propriedade->type_1_eng);
            $propriedade->legend_1 = $this->changeLanguage($propriedade->legend_1,$propriedade->legend_1_eng);
            $propriedade->type_2 = $this->changeLanguage($propriedade->type_2,$propriedade->type_2_eng);
            $propriedade->legend_2 = $this->changeLanguage($propriedade->legend_2,$propriedade->legend_2_eng);
            $propriedade->type_3 = $this->changeLanguage($propriedade->type_3,$propriedade->type_3_eng);
            $propriedade->legend_3 = $this->changeLanguage($propriedade->legend_3,$propriedade->legend_3_eng);
            $propriedade->type_4 = $this->changeLanguage($propriedade->type_4,$propriedade->type_4_eng);
            $propriedade->legend_4 = $this->changeLanguage($propriedade->legend_4,$propriedade->legend_4_eng);
            $propriedade->type_5 = $this->changeLanguage($propriedade->type_5,$propriedade->type_5_eng);
            $propriedade->legend_5 = $this->changeLanguage($propriedade->legend_5,$propriedade->legend_5_eng);
            $propriedade->type_6 = $this->changeLanguage($propriedade->type_6,$propriedade->type_6_eng);
            $propriedade->legend_6 = $this->changeLanguage($propriedade->legend_6,$propriedade->legend_6_eng);
            $propriedade->type_7 = $this->changeLanguage($propriedade->type_7,$propriedade->type_7_eng);
            $propriedade->legend_7 = $this->changeLanguage($propriedade->legend_7,$propriedade->legend_7_eng);
        }

        return $propriedade;
    }

    public function saveNewPropriedade(array $arr) {
        $arr = $this->uploadPropriedadeImages($arr);
        $this->repository->saveNewPropriedade($arr);
    }

    public function savePropriedade(array $arr) {
        if ($arr['id'] == 0) {
            unset($arr['id']);
            $arr = $this->uploadPropriedadeImages($arr);
            $this->repository->saveNewPropriedade($arr);
        } else {
            $arr = $this->updatePropriedadeImages($arr);
            unset($arr['active']);
            $this->repository->savePropriedade($arr);
        }
    }

    public function deletePropriedade(array $arr) {
        $this->repository->deletePropriedade($arr['id']);
    }

    public function updateActivePropriedade(array $arr) {
        return $this->repository->updateActivePropriedade($arr);
    }

    private function uploadPropriedadeImages(array $arr) {

        $arr['img_1']     = $this->uploadImageValue($arr['img_1']);
        $arr['img_2']     = $this->uploadImageValue($arr['img_2']);
        $arr['img_3']     = $this->uploadImageValue($arr['img_3']);
        $arr['img_4']     = $this->uploadImageValue($arr['img_4']);
        $arr['img_5']     = $this->uploadImageValue($arr['img_5']);
        $arr['img_6']     = $this->uploadImageValue($arr['img_6']);
        $arr['img_7']     = $this->uploadImageValue($arr['img_7']);

        return $arr;
    }

    private function updatePropriedadeImages(array $arr) {
        
        $propriedade = $this->repository->propriedadeById($arr['id']);

        $arr['img_1']     = $this->updateImageValue($propriedade->img_1,$arr['img_1']);
        $arr['img_2']     = $this->updateImageValue($propriedade->img_2,$arr['img_2']);
        $arr['img_3']     = $this->updateImageValue($propriedade->img_3,$arr['img_3']);
        $arr['img_4']     = $this->updateImageValue($propriedade->img_4,$arr['img_4']);
        $arr['img_5']     = $this->updateImageValue($propriedade->img_5,$arr['img_5']);
        $arr['img_6']     = $this->updateImageValue($propriedade->img_6,$arr['img_6']);
        $arr['img_7']     = $this->updateImageValue($propriedade->img_7,$arr['img_7']);

        return $arr;
    }

    // ------------------------------------- PROPRIEDADE -------------------------------------

    // ------------------------------------- FUNÇÕES GERAIS -------------------------------------

    /**
     * Função que recebe por referencia e salva ele
     */
    private function changeLanguage($pt,$eng) {
        return $eng != '' ? $eng : $pt;
    }

    private function uploadVideoValue($arrImg) {
        if ($arrImg) return $this->saveVideoFile($arrImg);
        return $arrImg;
    }

    private function uploadImageValue($arrImg) {
        if ($arrImg) return $this->saveFile($arrImg);
        return $arrImg;
    }

    private function updateImageValue($img,$arrImg) {
        if ($arrImg) {
            $arrImg = $this->uploadImageValue($arrImg);
            if ($img) $this->deleteFile($img);
        } else {
            $arrImg = $img;
        }
        return $arrImg;
    }

    private function updateVideoValue($img,$arrImg) {
        if ($arrImg) {
            $arrImg = $this->uploadVideoValue($arrImg);
            if ($img) $this->deleteFile($img);
        } else {
            $arrImg = $img;
        }
        return $arrImg;
    }

    private function saveFile($fileToSave) {
        $fileToSave = explode(',', $fileToSave);
        $file       = base64_decode($fileToSave[1]);
        $safeName   = Str::random(10).'.'.'png';
        $path       = public_path()."\\storage\\";
        if (env("APP_ENV") == "production") $path = "storage/";
        file_put_contents($path.$safeName, $file);
        return $safeName;
    }

    private function saveVideoFile($fileToSave) {
        $fileToSave = explode(',', $fileToSave);
        $file       = base64_decode($fileToSave[1]);
        $safeName   = Str::random(10).'.'.'mp4';
        $path       = public_path()."\\storage\\";
        if (env("APP_ENV") == "production") $path = "storage/";
        file_put_contents($path.$safeName, $file);
        return $safeName;
    }

    private function deleteFile($fileToDelete) {
        $path = public_path()."\\storage\\";
        if (env("APP_ENV") == "production") $path = "storage/";
        if ($fileToDelete) unlink($path.$fileToDelete);
    }

    // ------------------------------------- FUNÇÕES GERAIS -------------------------------------

}