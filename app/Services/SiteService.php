<?php

namespace App\Services;

use App\Models\Site;
use App\Models\MetaTags;
use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
use App\Models\PortifolioGeral;
use App\Models\ServicoGeral;
use App\Models\ServiceTerms;
use App\Models\PrivacyPolitics;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Oportunidade;
use App\Models\Propriedade;
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

    // ------------------------------------- SERVICE TERMS -------------------------------------

    public function serviceTerms($lingua = 'pt') {

        $serviceTerms = $this->repository->serviceTerms();

        if ($lingua == 'eng') {
            $serviceTerms->title = $this->changeLanguage($serviceTerms->title,$serviceTerms->title_eng);
            $serviceTerms->content = $this->changeLanguage($serviceTerms->content,$serviceTerms->content_eng);
        }

        return $serviceTerms;
    }

    public function saveServiceTerms(array $arr) {
        $this->repository->saveServiceTerms($arr);
    }

    // ------------------------------------- SERVICE TERMS -------------------------------------

    // ------------------------------------- PRIVACY POLITICS -------------------------------------

    public function privacyPolitics($lingua = 'pt') {

        $privacyPolitics = $this->repository->privacyPolitics();

        if ($lingua == 'eng') {
            $privacyPolitics->title = $this->changeLanguage($privacyPolitics->title,$privacyPolitics->title_eng);
            $privacyPolitics->content = $this->changeLanguage($privacyPolitics->content,$privacyPolitics->content_eng);
        }

        return $privacyPolitics;
    }

    public function savePrivacyPolitics(array $arr) {
        $this->repository->savePrivacyPolitics($arr);
    }

    // ------------------------------------- PRIVACY POLITICS -------------------------------------

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
            $index_text->about_us_title = $this->changeLanguage($index_text->about_us_title,$index_text->about_us_title_eng);
            $index_text->about_us_description = $this->changeLanguage($index_text->about_us_description,$index_text->about_us_description_eng);
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
        $arr['service_img_1'] = $this->updateImageValue($indexText->service_img_1,$arr['service_img_1']);
        $arr['service_img_2'] = $this->updateImageValue($indexText->service_img_2,$arr['service_img_2']);
        $arr['service_img_3'] = $this->updateImageValue($indexText->service_img_3,$arr['service_img_3']);
        $arr['brands_bg_img'] = $this->updateImageValue($indexText->brands_bg_img,$arr['brands_bg_img']);
        $arr['frame_img'] = $this->updateImageValue($indexText->brands_bg_img,$arr['frame_img']);
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
            $about->title = $this->changeLanguage($about->title,$about->title_eng);
            $about->description = $this->changeLanguage($about->description,$about->description_eng);
            $about->about_title_1 = $this->changeLanguage($about->about_title_1,$about->about_title_1_eng);
            $about->about_title_2 = $this->changeLanguage($about->about_title_2,$about->about_title_2_eng);
            $about->about_pre_title_1 = $this->changeLanguage($about->about_pre_title_1,$about->about_pre_title_1_eng);
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
            $about->about_pre_title_2 = $this->changeLanguage($about->about_pre_title_2,$about->about_pre_title_2_eng);
            $about->about_brands_title = $this->changeLanguage($about->about_brands_title,$about->about_brands_title_eng);
            $about->about_brands_description = $this->changeLanguage($about->about_brands_description,$about->about_brands_description_eng);
            $about->about_pre_title_3 = $this->changeLanguage($about->about_pre_title_3,$about->about_pre_title_3_eng);
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

    // ------------------------------------- TESTIMONIALS -------------------------------------

    public function testimonial($lingua = 'pt') {

        $testimonial = $this->repository->testimonial();

        if ($lingua == 'eng') {
            $testimonial->description = $this->changeLanguage($testimonial->description,$testimonial->description_eng);
        }

        return $testimonial;
    }

    public function testimonialById($id,$lingua = 'pt') {
        $testimonial = $this->repository->testimonialById($id);

        if ($lingua == 'eng') {
            $testimonial->description = $this->changeLanguage($testimonial->description,$testimonial->description_eng);
        }

        return $testimonial;
    }

    public function saveTestimonial(array $arr) {
        if ($arr['id'] == 0) {
            unset($arr['id']);
            $this->repository->saveNewTestimonial($arr);
        } else {
            $this->repository->saveTestimonial($arr);
        }
    }

    public function newBlankTestimonial() {
        return new Testimonial();
    }

    public function deleteTestimonial(array $arr) {
        $this->repository->deleteTestimonial($arr['id']);
    }

    // ------------------------------------- TESTIMONIALS -------------------------------------

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
            $portifolio->type_1_1 = $this->changeLanguage($portifolio->type_1_1,$portifolio->type_1_1_eng);
            $portifolio->type_1_2 = $this->changeLanguage($portifolio->type_1_2,$portifolio->type_1_2_eng);
            $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
            $portifolio->type_2_1 = $this->changeLanguage($portifolio->type_2_1,$portifolio->type_2_1_eng);
            $portifolio->type_2_2 = $this->changeLanguage($portifolio->type_2_2,$portifolio->type_2_2_eng);
            $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
            $portifolio->type_3_1 = $this->changeLanguage($portifolio->type_3_1,$portifolio->type_3_1_eng);
            $portifolio->type_3_2 = $this->changeLanguage($portifolio->type_3_2,$portifolio->type_3_2_eng);
            $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
            $portifolio->type_4_1 = $this->changeLanguage($portifolio->type_4_1,$portifolio->type_4_1_eng);
            $portifolio->type_4_2 = $this->changeLanguage($portifolio->type_4_2,$portifolio->type_4_2_eng);
            $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
            $portifolio->type_5_1 = $this->changeLanguage($portifolio->type_5_1,$portifolio->type_5_1_eng);
            $portifolio->type_5_2 = $this->changeLanguage($portifolio->type_5_2,$portifolio->type_5_2_eng);
            $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
            $portifolio->type_6_1 = $this->changeLanguage($portifolio->type_6_1,$portifolio->type_6_1_eng);
            $portifolio->type_6_2 = $this->changeLanguage($portifolio->type_6_2,$portifolio->type_6_2_eng);
            $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
            $portifolio->type_7_1 = $this->changeLanguage($portifolio->type_7_1,$portifolio->type_7_1_eng);
            $portifolio->type_7_2 = $this->changeLanguage($portifolio->type_7_2,$portifolio->type_7_2_eng);
            $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
            $portifolio->type_8_1 = $this->changeLanguage($portifolio->type_8_1,$portifolio->type_8_1_eng);
            $portifolio->type_8_2 = $this->changeLanguage($portifolio->type_8_2,$portifolio->type_8_2_eng);
            $portifolio->title_8 = $this->changeLanguage($portifolio->title_8,$portifolio->title_8_eng);
            $portifolio->type_9_1 = $this->changeLanguage($portifolio->type_9_1,$portifolio->type_8_1_eng);
            $portifolio->type_9_2 = $this->changeLanguage($portifolio->type_9_2,$portifolio->type_9_2_eng);
            $portifolio->title_9 = $this->changeLanguage($portifolio->title_9,$portifolio->title_9_eng);
            $portifolio->type_10_1 = $this->changeLanguage($portifolio->type_10_1,$portifolio->type_10_1_eng);
            $portifolio->type_10_2 = $this->changeLanguage($portifolio->type_10_2,$portifolio->type_10_2_eng);
            $portifolio->title_10 = $this->changeLanguage($portifolio->title_10,$portifolio->title_10_eng);
            $portifolio->type_11_1 = $this->changeLanguage($portifolio->type_11_1,$portifolio->type_11_1_eng);
            $portifolio->type_11_2 = $this->changeLanguage($portifolio->type_11_2,$portifolio->type_11_2_eng);
            $portifolio->title_11 = $this->changeLanguage($portifolio->title_11,$portifolio->title_11_eng);
            $portifolio->type_12_1 = $this->changeLanguage($portifolio->type_12_1,$portifolio->type_12_1_eng);
            $portifolio->type_12_2 = $this->changeLanguage($portifolio->type_12_2,$portifolio->type_12_2_eng);
            $portifolio->title_12 = $this->changeLanguage($portifolio->title_12,$portifolio->title_12_eng);
            $portifolio->type_13_1 = $this->changeLanguage($portifolio->type_13_1,$portifolio->type_13_1_eng);
            $portifolio->type_13_2 = $this->changeLanguage($portifolio->type_13_2,$portifolio->type_13_2_eng);
            $portifolio->title_13 = $this->changeLanguage($portifolio->title_13,$portifolio->title_13_eng);
            $portifolio->type_14_1 = $this->changeLanguage($portifolio->type_14_1,$portifolio->type_14_1_eng);
            $portifolio->type_14_2 = $this->changeLanguage($portifolio->type_14_2,$portifolio->type_14_2_eng);
            $portifolio->title_14 = $this->changeLanguage($portifolio->title_14,$portifolio->title_14_eng);
            $portifolio->type_15_1 = $this->changeLanguage($portifolio->type_15_1,$portifolio->type_15_1_eng);
            $portifolio->type_15_2 = $this->changeLanguage($portifolio->type_15_2,$portifolio->type_15_2_eng);
            $portifolio->title_15 = $this->changeLanguage($portifolio->title_15,$portifolio->title_15_eng);
            $portifolio->type_16_1 = $this->changeLanguage($portifolio->type_16_1,$portifolio->type_16_1_eng);
            $portifolio->type_16_2 = $this->changeLanguage($portifolio->type_16_2,$portifolio->type_16_2_eng);
            $portifolio->title_16 = $this->changeLanguage($portifolio->title_16,$portifolio->title_16_eng);
            $portifolio->type_17_1 = $this->changeLanguage($portifolio->type_17_1,$portifolio->type_17_1_eng);
            $portifolio->type_17_2 = $this->changeLanguage($portifolio->type_17_2,$portifolio->type_17_2_eng);
            $portifolio->title_17 = $this->changeLanguage($portifolio->title_17,$portifolio->title_17_eng);
            $portifolio->type_18_1 = $this->changeLanguage($portifolio->type_18_1,$portifolio->type_18_1_eng);
            $portifolio->type_18_2 = $this->changeLanguage($portifolio->type_18_2,$portifolio->type_18_2_eng);
            $portifolio->title_18 = $this->changeLanguage($portifolio->title_18,$portifolio->title_18_eng);
            $portifolio->type_19_1 = $this->changeLanguage($portifolio->type_19_1,$portifolio->type_19_1_eng);
            $portifolio->type_19_2 = $this->changeLanguage($portifolio->type_19_2,$portifolio->type_19_2_eng);
            $portifolio->title_19 = $this->changeLanguage($portifolio->title_19,$portifolio->title_19_eng);
            $portifolio->type_20_1 = $this->changeLanguage($portifolio->type_20_1,$portifolio->type_20_1_eng);
            $portifolio->type_20_2 = $this->changeLanguage($portifolio->type_20_2,$portifolio->type_20_2_eng);
            $portifolio->title_20 = $this->changeLanguage($portifolio->title_20,$portifolio->title_20_eng);
            $portifolio->type_21_1 = $this->changeLanguage($portifolio->type_21_1,$portifolio->type_21_1_eng);
            $portifolio->type_21_2 = $this->changeLanguage($portifolio->type_21_2,$portifolio->type_21_2_eng);
            $portifolio->title_21 = $this->changeLanguage($portifolio->title_21,$portifolio->title_21_eng);
            $portifolio->type_22_1 = $this->changeLanguage($portifolio->type_22_1,$portifolio->type_22_1_eng);
            $portifolio->type_22_2 = $this->changeLanguage($portifolio->type_22_2,$portifolio->type_22_2_eng);
            $portifolio->title_22 = $this->changeLanguage($portifolio->title_22,$portifolio->title_22_eng);
            $portifolio->type_23_1 = $this->changeLanguage($portifolio->type_23_1,$portifolio->type_23_1_eng);
            $portifolio->type_23_2 = $this->changeLanguage($portifolio->type_23_2,$portifolio->type_23_2_eng);
            $portifolio->title_23 = $this->changeLanguage($portifolio->title_23,$portifolio->title_23_eng);
            $portifolio->type_24_1 = $this->changeLanguage($portifolio->type_24_1,$portifolio->type_24_1_eng);
            $portifolio->type_24_2 = $this->changeLanguage($portifolio->type_24_2,$portifolio->type_24_2_eng);
            $portifolio->title_24 = $this->changeLanguage($portifolio->title_24,$portifolio->title_24_eng);
            $portifolio->type_25_1 = $this->changeLanguage($portifolio->type_25_1,$portifolio->type_25_1_eng);
            $portifolio->type_25_2 = $this->changeLanguage($portifolio->type_25_2,$portifolio->type_25_2_eng);
            $portifolio->title_25 = $this->changeLanguage($portifolio->title_25,$portifolio->title_25_eng);
        }

        return $portifolio;
    }

    public function work($lingua = 'pt') {
        $portifolios = $this->repository->work();

        if ($lingua == 'eng') {
            foreach($portifolios as $id => $portifolio) {
                $portifolio->title = $this->changeLanguage($portifolio->title,$portifolio->title_eng);
                $portifolio->description = $this->changeLanguage($portifolio->description,$portifolio->description_eng);
                $portifolio->type_1_1 = $this->changeLanguage($portifolio->type_1_1,$portifolio->type_1_1_eng);
                $portifolio->type_1_2 = $this->changeLanguage($portifolio->type_1_2,$portifolio->type_1_2_eng);
                $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
                $portifolio->type_2_1 = $this->changeLanguage($portifolio->type_2_1,$portifolio->type_2_1_eng);
                $portifolio->type_2_2 = $this->changeLanguage($portifolio->type_2_2,$portifolio->type_2_2_eng);
                $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
                $portifolio->type_3_1 = $this->changeLanguage($portifolio->type_3_1,$portifolio->type_3_1_eng);
                $portifolio->type_3_2 = $this->changeLanguage($portifolio->type_3_2,$portifolio->type_3_2_eng);
                $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
                $portifolio->type_4_1 = $this->changeLanguage($portifolio->type_4_1,$portifolio->type_4_1_eng);
                $portifolio->type_4_2 = $this->changeLanguage($portifolio->type_4_2,$portifolio->type_4_2_eng);
                $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
                $portifolio->type_5_1 = $this->changeLanguage($portifolio->type_5_1,$portifolio->type_5_1_eng);
                $portifolio->type_5_2 = $this->changeLanguage($portifolio->type_5_2,$portifolio->type_5_2_eng);
                $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
                $portifolio->type_6_1 = $this->changeLanguage($portifolio->type_6_1,$portifolio->type_6_1_eng);
                $portifolio->type_6_2 = $this->changeLanguage($portifolio->type_6_2,$portifolio->type_6_2_eng);
                $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
                $portifolio->type_7_1 = $this->changeLanguage($portifolio->type_7_1,$portifolio->type_7_1_eng);
                $portifolio->type_7_2 = $this->changeLanguage($portifolio->type_7_2,$portifolio->type_7_2_eng);
                $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
                $portifolio->type_8_1 = $this->changeLanguage($portifolio->type_8_1,$portifolio->type_8_1_eng);
                $portifolio->type_8_2 = $this->changeLanguage($portifolio->type_8_2,$portifolio->type_8_2_eng);
                $portifolio->title_8 = $this->changeLanguage($portifolio->title_8,$portifolio->title_8_eng);
                $portifolio->type_9_1 = $this->changeLanguage($portifolio->type_9_1,$portifolio->type_8_1_eng);
                $portifolio->type_9_2 = $this->changeLanguage($portifolio->type_9_2,$portifolio->type_9_2_eng);
                $portifolio->title_9 = $this->changeLanguage($portifolio->title_9,$portifolio->title_9_eng);
                $portifolio->type_10_1 = $this->changeLanguage($portifolio->type_10_1,$portifolio->type_10_1_eng);
                $portifolio->type_10_2 = $this->changeLanguage($portifolio->type_10_2,$portifolio->type_10_2_eng);
                $portifolio->title_10 = $this->changeLanguage($portifolio->title_10,$portifolio->title_10_eng);
                $portifolio->type_11_1 = $this->changeLanguage($portifolio->type_11_1,$portifolio->type_11_1_eng);
                $portifolio->type_11_2 = $this->changeLanguage($portifolio->type_11_2,$portifolio->type_11_2_eng);
                $portifolio->title_11 = $this->changeLanguage($portifolio->title_11,$portifolio->title_11_eng);
                $portifolio->type_12_1 = $this->changeLanguage($portifolio->type_12_1,$portifolio->type_12_1_eng);
                $portifolio->type_12_2 = $this->changeLanguage($portifolio->type_12_2,$portifolio->type_12_2_eng);
                $portifolio->title_12 = $this->changeLanguage($portifolio->title_12,$portifolio->title_12_eng);
                $portifolio->type_13_1 = $this->changeLanguage($portifolio->type_13_1,$portifolio->type_13_1_eng);
                $portifolio->type_13_2 = $this->changeLanguage($portifolio->type_13_2,$portifolio->type_13_2_eng);
                $portifolio->title_13 = $this->changeLanguage($portifolio->title_13,$portifolio->title_13_eng);
                $portifolio->type_14_1 = $this->changeLanguage($portifolio->type_14_1,$portifolio->type_14_1_eng);
                $portifolio->type_14_2 = $this->changeLanguage($portifolio->type_14_2,$portifolio->type_14_2_eng);
                $portifolio->title_14 = $this->changeLanguage($portifolio->title_14,$portifolio->title_14_eng);
                $portifolio->type_15_1 = $this->changeLanguage($portifolio->type_15_1,$portifolio->type_15_1_eng);
                $portifolio->type_15_2 = $this->changeLanguage($portifolio->type_15_2,$portifolio->type_15_2_eng);
                $portifolio->title_15 = $this->changeLanguage($portifolio->title_15,$portifolio->title_15_eng);
                $portifolio->type_16_1 = $this->changeLanguage($portifolio->type_16_1,$portifolio->type_16_1_eng);
                $portifolio->type_16_2 = $this->changeLanguage($portifolio->type_16_2,$portifolio->type_16_2_eng);
                $portifolio->title_16 = $this->changeLanguage($portifolio->title_16,$portifolio->title_16_eng);
                $portifolio->type_17_1 = $this->changeLanguage($portifolio->type_17_1,$portifolio->type_17_1_eng);
                $portifolio->type_17_2 = $this->changeLanguage($portifolio->type_17_2,$portifolio->type_17_2_eng);
                $portifolio->title_17 = $this->changeLanguage($portifolio->title_17,$portifolio->title_17_eng);
                $portifolio->type_18_1 = $this->changeLanguage($portifolio->type_18_1,$portifolio->type_18_1_eng);
                $portifolio->type_18_2 = $this->changeLanguage($portifolio->type_18_2,$portifolio->type_18_2_eng);
                $portifolio->title_18 = $this->changeLanguage($portifolio->title_18,$portifolio->title_18_eng);
                $portifolio->type_19_1 = $this->changeLanguage($portifolio->type_19_1,$portifolio->type_19_1_eng);
                $portifolio->type_19_2 = $this->changeLanguage($portifolio->type_19_2,$portifolio->type_19_2_eng);
                $portifolio->title_19 = $this->changeLanguage($portifolio->title_19,$portifolio->title_19_eng);
                $portifolio->type_20_1 = $this->changeLanguage($portifolio->type_20_1,$portifolio->type_20_1_eng);
                $portifolio->type_20_2 = $this->changeLanguage($portifolio->type_20_2,$portifolio->type_20_2_eng);
                $portifolio->title_20 = $this->changeLanguage($portifolio->title_20,$portifolio->title_20_eng);
                $portifolio->type_21_1 = $this->changeLanguage($portifolio->type_21_1,$portifolio->type_21_1_eng);
                $portifolio->type_21_2 = $this->changeLanguage($portifolio->type_21_2,$portifolio->type_21_2_eng);
                $portifolio->title_21 = $this->changeLanguage($portifolio->title_21,$portifolio->title_21_eng);
                $portifolio->type_22_1 = $this->changeLanguage($portifolio->type_22_1,$portifolio->type_22_1_eng);
                $portifolio->type_22_2 = $this->changeLanguage($portifolio->type_22_2,$portifolio->type_22_2_eng);
                $portifolio->title_22 = $this->changeLanguage($portifolio->title_22,$portifolio->title_22_eng);
                $portifolio->type_23_1 = $this->changeLanguage($portifolio->type_23_1,$portifolio->type_23_1_eng);
                $portifolio->type_23_2 = $this->changeLanguage($portifolio->type_23_2,$portifolio->type_23_2_eng);
                $portifolio->title_23 = $this->changeLanguage($portifolio->title_23,$portifolio->title_23_eng);
                $portifolio->type_24_1 = $this->changeLanguage($portifolio->type_24_1,$portifolio->type_24_1_eng);
                $portifolio->type_24_2 = $this->changeLanguage($portifolio->type_24_2,$portifolio->type_24_2_eng);
                $portifolio->title_24 = $this->changeLanguage($portifolio->title_24,$portifolio->title_24_eng);
                $portifolio->type_25_1 = $this->changeLanguage($portifolio->type_25_1,$portifolio->type_25_1_eng);
                $portifolio->type_25_2 = $this->changeLanguage($portifolio->type_25_2,$portifolio->type_25_2_eng);
                $portifolio->title_25 = $this->changeLanguage($portifolio->title_25,$portifolio->title_25_eng);
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
                $portifolio->type_1_1 = $this->changeLanguage($portifolio->type_1_1,$portifolio->type_1_1_eng);
                $portifolio->type_1_2 = $this->changeLanguage($portifolio->type_1_2,$portifolio->type_1_2_eng);
                $portifolio->title_1 = $this->changeLanguage($portifolio->title_1,$portifolio->title_1_eng);
                $portifolio->type_2_1 = $this->changeLanguage($portifolio->type_2_1,$portifolio->type_2_1_eng);
                $portifolio->type_2_2 = $this->changeLanguage($portifolio->type_2_2,$portifolio->type_2_2_eng);
                $portifolio->title_2 = $this->changeLanguage($portifolio->title_2,$portifolio->title_2_eng);
                $portifolio->type_3_1 = $this->changeLanguage($portifolio->type_3_1,$portifolio->type_3_1_eng);
                $portifolio->type_3_2 = $this->changeLanguage($portifolio->type_3_2,$portifolio->type_3_2_eng);
                $portifolio->title_3 = $this->changeLanguage($portifolio->title_3,$portifolio->title_3_eng);
                $portifolio->type_4_1 = $this->changeLanguage($portifolio->type_4_1,$portifolio->type_4_1_eng);
                $portifolio->type_4_2 = $this->changeLanguage($portifolio->type_4_2,$portifolio->type_4_2_eng);
                $portifolio->title_4 = $this->changeLanguage($portifolio->title_4,$portifolio->title_4_eng);
                $portifolio->type_5_1 = $this->changeLanguage($portifolio->type_5_1,$portifolio->type_5_1_eng);
                $portifolio->type_5_2 = $this->changeLanguage($portifolio->type_5_2,$portifolio->type_5_2_eng);
                $portifolio->title_5 = $this->changeLanguage($portifolio->title_5,$portifolio->title_5_eng);
                $portifolio->type_6_1 = $this->changeLanguage($portifolio->type_6_1,$portifolio->type_6_1_eng);
                $portifolio->type_6_2 = $this->changeLanguage($portifolio->type_6_2,$portifolio->type_6_2_eng);
                $portifolio->title_6 = $this->changeLanguage($portifolio->title_6,$portifolio->title_6_eng);
                $portifolio->type_7_1 = $this->changeLanguage($portifolio->type_7_1,$portifolio->type_7_1_eng);
                $portifolio->type_7_2 = $this->changeLanguage($portifolio->type_7_2,$portifolio->type_7_2_eng);
                $portifolio->title_7 = $this->changeLanguage($portifolio->title_7,$portifolio->title_7_eng);
                $portifolio->type_8_1 = $this->changeLanguage($portifolio->type_8_1,$portifolio->type_8_1_eng);
                $portifolio->type_8_2 = $this->changeLanguage($portifolio->type_8_2,$portifolio->type_8_2_eng);
                $portifolio->title_8 = $this->changeLanguage($portifolio->title_8,$portifolio->title_8_eng);
                $portifolio->type_9_1 = $this->changeLanguage($portifolio->type_9_1,$portifolio->type_8_1_eng);
                $portifolio->type_9_2 = $this->changeLanguage($portifolio->type_9_2,$portifolio->type_9_2_eng);
                $portifolio->title_9 = $this->changeLanguage($portifolio->title_9,$portifolio->title_9_eng);
                $portifolio->type_10_1 = $this->changeLanguage($portifolio->type_10_1,$portifolio->type_10_1_eng);
                $portifolio->type_10_2 = $this->changeLanguage($portifolio->type_10_2,$portifolio->type_10_2_eng);
                $portifolio->title_10 = $this->changeLanguage($portifolio->title_10,$portifolio->title_10_eng);
                $portifolio->type_11_1 = $this->changeLanguage($portifolio->type_11_1,$portifolio->type_11_1_eng);
                $portifolio->type_11_2 = $this->changeLanguage($portifolio->type_11_2,$portifolio->type_11_2_eng);
                $portifolio->title_11 = $this->changeLanguage($portifolio->title_11,$portifolio->title_11_eng);
                $portifolio->type_12_1 = $this->changeLanguage($portifolio->type_12_1,$portifolio->type_12_1_eng);
                $portifolio->type_12_2 = $this->changeLanguage($portifolio->type_12_2,$portifolio->type_12_2_eng);
                $portifolio->title_12 = $this->changeLanguage($portifolio->title_12,$portifolio->title_12_eng);
                $portifolio->type_13_1 = $this->changeLanguage($portifolio->type_13_1,$portifolio->type_13_1_eng);
                $portifolio->type_13_2 = $this->changeLanguage($portifolio->type_13_2,$portifolio->type_13_2_eng);
                $portifolio->title_13 = $this->changeLanguage($portifolio->title_13,$portifolio->title_13_eng);
                $portifolio->type_14_1 = $this->changeLanguage($portifolio->type_14_1,$portifolio->type_14_1_eng);
                $portifolio->type_14_2 = $this->changeLanguage($portifolio->type_14_2,$portifolio->type_14_2_eng);
                $portifolio->title_14 = $this->changeLanguage($portifolio->title_14,$portifolio->title_14_eng);
                $portifolio->type_15_1 = $this->changeLanguage($portifolio->type_15_1,$portifolio->type_15_1_eng);
                $portifolio->type_15_2 = $this->changeLanguage($portifolio->type_15_2,$portifolio->type_15_2_eng);
                $portifolio->title_15 = $this->changeLanguage($portifolio->title_15,$portifolio->title_15_eng);
                $portifolio->type_16_1 = $this->changeLanguage($portifolio->type_16_1,$portifolio->type_16_1_eng);
                $portifolio->type_16_2 = $this->changeLanguage($portifolio->type_16_2,$portifolio->type_16_2_eng);
                $portifolio->title_16 = $this->changeLanguage($portifolio->title_16,$portifolio->title_16_eng);
                $portifolio->type_17_1 = $this->changeLanguage($portifolio->type_17_1,$portifolio->type_17_1_eng);
                $portifolio->type_17_2 = $this->changeLanguage($portifolio->type_17_2,$portifolio->type_17_2_eng);
                $portifolio->title_17 = $this->changeLanguage($portifolio->title_17,$portifolio->title_17_eng);
                $portifolio->type_18_1 = $this->changeLanguage($portifolio->type_18_1,$portifolio->type_18_1_eng);
                $portifolio->type_18_2 = $this->changeLanguage($portifolio->type_18_2,$portifolio->type_18_2_eng);
                $portifolio->title_18 = $this->changeLanguage($portifolio->title_18,$portifolio->title_18_eng);
                $portifolio->type_19_1 = $this->changeLanguage($portifolio->type_19_1,$portifolio->type_19_1_eng);
                $portifolio->type_19_2 = $this->changeLanguage($portifolio->type_19_2,$portifolio->type_19_2_eng);
                $portifolio->title_19 = $this->changeLanguage($portifolio->title_19,$portifolio->title_19_eng);
                $portifolio->type_20_1 = $this->changeLanguage($portifolio->type_20_1,$portifolio->type_20_1_eng);
                $portifolio->type_20_2 = $this->changeLanguage($portifolio->type_20_2,$portifolio->type_20_2_eng);
                $portifolio->title_20 = $this->changeLanguage($portifolio->title_20,$portifolio->title_20_eng);
                $portifolio->type_21_1 = $this->changeLanguage($portifolio->type_21_1,$portifolio->type_21_1_eng);
                $portifolio->type_21_2 = $this->changeLanguage($portifolio->type_21_2,$portifolio->type_21_2_eng);
                $portifolio->title_21 = $this->changeLanguage($portifolio->title_21,$portifolio->title_21_eng);
                $portifolio->type_22_1 = $this->changeLanguage($portifolio->type_22_1,$portifolio->type_22_1_eng);
                $portifolio->type_22_2 = $this->changeLanguage($portifolio->type_22_2,$portifolio->type_22_2_eng);
                $portifolio->title_22 = $this->changeLanguage($portifolio->title_22,$portifolio->title_22_eng);
                $portifolio->type_23_1 = $this->changeLanguage($portifolio->type_23_1,$portifolio->type_23_1_eng);
                $portifolio->type_23_2 = $this->changeLanguage($portifolio->type_23_2,$portifolio->type_23_2_eng);
                $portifolio->title_23 = $this->changeLanguage($portifolio->title_23,$portifolio->title_23_eng);
                $portifolio->type_24_1 = $this->changeLanguage($portifolio->type_24_1,$portifolio->type_24_1_eng);
                $portifolio->type_24_2 = $this->changeLanguage($portifolio->type_24_2,$portifolio->type_24_2_eng);
                $portifolio->title_24 = $this->changeLanguage($portifolio->title_24,$portifolio->title_24_eng);
                $portifolio->type_25_1 = $this->changeLanguage($portifolio->type_25_1,$portifolio->type_25_1_eng);
                $portifolio->type_25_2 = $this->changeLanguage($portifolio->type_25_2,$portifolio->type_25_2_eng);
                $portifolio->title_25 = $this->changeLanguage($portifolio->title_25,$portifolio->title_25_eng);
                
            }
        }

        return $portifolios;
    }

    public function newBlankWork() {
        return new Work();
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
        $arr['img_8'] = $this->uploadImageValue($arr['img_8']);
        $arr['img_9'] = $this->uploadImageValue($arr['img_9']);
        $arr['img_10'] = $this->uploadImageValue($arr['img_10']);
        $arr['img_11'] = $this->uploadImageValue($arr['img_11']);
        $arr['img_12'] = $this->uploadImageValue($arr['img_12']);
        $arr['img_13'] = $this->uploadImageValue($arr['img_13']);
        $arr['img_14'] = $this->uploadImageValue($arr['img_14']);
        $arr['img_15'] = $this->uploadImageValue($arr['img_15']);
        $arr['img_16'] = $this->uploadImageValue($arr['img_16']);
        $arr['img_17'] = $this->uploadImageValue($arr['img_17']);
        $arr['img_18'] = $this->uploadImageValue($arr['img_18']);
        $arr['img_19'] = $this->uploadImageValue($arr['img_19']);
        $arr['img_20'] = $this->uploadImageValue($arr['img_20']);
        $arr['img_21'] = $this->uploadImageValue($arr['img_21']);
        $arr['img_22'] = $this->uploadImageValue($arr['img_22']);
        $arr['img_23'] = $this->uploadImageValue($arr['img_23']);
        $arr['img_24'] = $this->uploadImageValue($arr['img_24']);
        $arr['img_25'] = $this->uploadImageValue($arr['img_25']);

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
        $arr['img_8'] = $this->updateImageValue($work->img_8,$arr['img_8']);
        $arr['img_9'] = $this->updateImageValue($work->img_9,$arr['img_9']);
        $arr['img_10'] = $this->updateImageValue($work->img_10,$arr['img_10']);
        $arr['img_11'] = $this->updateImageValue($work->img_11,$arr['img_11']);
        $arr['img_12'] = $this->updateImageValue($work->img_12,$arr['img_12']);
        $arr['img_13'] = $this->updateImageValue($work->img_13,$arr['img_13']);
        $arr['img_14'] = $this->updateImageValue($work->img_14,$arr['img_14']);
        $arr['img_15'] = $this->updateImageValue($work->img_15,$arr['img_15']);
        $arr['img_16'] = $this->updateImageValue($work->img_16,$arr['img_16']);
        $arr['img_17'] = $this->updateImageValue($work->img_17,$arr['img_17']);
        $arr['img_18'] = $this->updateImageValue($work->img_18,$arr['img_18']);
        $arr['img_19'] = $this->updateImageValue($work->img_19,$arr['img_19']);
        $arr['img_20'] = $this->updateImageValue($work->img_20,$arr['img_20']);
        $arr['img_21'] = $this->updateImageValue($work->img_21,$arr['img_21']);
        $arr['img_22'] = $this->updateImageValue($work->img_22,$arr['img_22']);
        $arr['img_23'] = $this->updateImageValue($work->img_23,$arr['img_23']);
        $arr['img_24'] = $this->updateImageValue($work->img_24,$arr['img_24']);
        $arr['img_25'] = $this->updateImageValue($work->img_25,$arr['img_25']);

        return $arr;
    }

    // ------------------------------------- PORTIFOLIO -------------------------------------

    // ------------------------------------- SERVICO GERAL -------------------------------------

    public function servicoGeral($lingua = 'pt') {
        $servico = $this->repository->servicoGeral();

        if ($lingua == 'eng') {
            $servico->about_pre_title_1 = $this->changeLanguage($servico->about_pre_title_1,$servico->about_pre_title_1_eng);
            $servico->about_pre_title_2 = $this->changeLanguage($servico->about_pre_title_2,$servico->about_pre_title_2_eng);
            $servico->about_pre_title_3 = $this->changeLanguage($servico->about_pre_title_3,$servico->about_pre_title_3_eng);
        }

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

    public function newBlankProject() {
        return new Project();
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
            $oportunidade->type_5 = $this->changeLanguage($oportunidade->type_5,$oportunidade->type_5_eng);
            $oportunidade->title_5 = $this->changeLanguage($oportunidade->title_5,$oportunidade->title_5_eng);
            $oportunidade->type_6 = $this->changeLanguage($oportunidade->type_6,$oportunidade->type_6_eng);
            $oportunidade->title_6 = $this->changeLanguage($oportunidade->title_6,$oportunidade->title_6_eng);
            $oportunidade->type_7 = $this->changeLanguage($oportunidade->type_7,$oportunidade->type_7_eng);
            $oportunidade->title_7 = $this->changeLanguage($oportunidade->title_7,$oportunidade->title_7_eng);
            $oportunidade->type_8 = $this->changeLanguage($oportunidade->type_8,$oportunidade->type_8_eng);
            $oportunidade->title_8 = $this->changeLanguage($oportunidade->title_8,$oportunidade->title_8_eng);
            $oportunidade->type_9 = $this->changeLanguage($oportunidade->type_9,$oportunidade->type_9_eng);
            $oportunidade->title_9 = $this->changeLanguage($oportunidade->title_9,$oportunidade->title_9_eng);
            $oportunidade->type_10 = $this->changeLanguage($oportunidade->type_10,$oportunidade->type_10_eng);
            $oportunidade->title_10 = $this->changeLanguage($oportunidade->title_10,$oportunidade->title_10_eng);
            $oportunidade->type_11 = $this->changeLanguage($oportunidade->type_11,$oportunidade->type_11_eng);
            $oportunidade->title_11 = $this->changeLanguage($oportunidade->title_11,$oportunidade->title_11_eng);
            $oportunidade->type_12 = $this->changeLanguage($oportunidade->type_12,$oportunidade->type_12_eng);
            $oportunidade->title_12 = $this->changeLanguage($oportunidade->title_12,$oportunidade->title_12_eng);
            $oportunidade->type_13 = $this->changeLanguage($oportunidade->type_13,$oportunidade->type_13_eng);
            $oportunidade->title_13 = $this->changeLanguage($oportunidade->title_13,$oportunidade->title_13_eng);
            $oportunidade->type_14 = $this->changeLanguage($oportunidade->type_14,$oportunidade->type_14_eng);
            $oportunidade->title_14 = $this->changeLanguage($oportunidade->title_14,$oportunidade->title_14_eng);
            $oportunidade->type_15 = $this->changeLanguage($oportunidade->type_15,$oportunidade->type_15_eng);
            $oportunidade->title_15 = $this->changeLanguage($oportunidade->title_15,$oportunidade->title_15_eng);
            $oportunidade->type_16 = $this->changeLanguage($oportunidade->type_16,$oportunidade->type_16_eng);
            $oportunidade->title_16 = $this->changeLanguage($oportunidade->title_16,$oportunidade->title_16_eng);
            $oportunidade->type_17 = $this->changeLanguage($oportunidade->type_17,$oportunidade->type_17_eng);
            $oportunidade->title_17 = $this->changeLanguage($oportunidade->title_17,$oportunidade->title_17_eng);
            $oportunidade->type_18 = $this->changeLanguage($oportunidade->type_18,$oportunidade->type_18_eng);
            $oportunidade->title_18 = $this->changeLanguage($oportunidade->title_18,$oportunidade->title_18_eng);
            $oportunidade->type_19 = $this->changeLanguage($oportunidade->type_19,$oportunidade->type_19_eng);
            $oportunidade->title_19 = $this->changeLanguage($oportunidade->title_19,$oportunidade->title_19_eng);
            $oportunidade->type_20 = $this->changeLanguage($oportunidade->type_20,$oportunidade->type_20_eng);
            $oportunidade->title_20 = $this->changeLanguage($oportunidade->title_20,$oportunidade->title_20_eng);
            $oportunidade->type_21 = $this->changeLanguage($oportunidade->type_21,$oportunidade->type_21_eng);
            $oportunidade->title_21 = $this->changeLanguage($oportunidade->title_21,$oportunidade->title_21_eng);
            $oportunidade->type_22 = $this->changeLanguage($oportunidade->type_22,$oportunidade->type_22_eng);
            $oportunidade->title_22 = $this->changeLanguage($oportunidade->title_22,$oportunidade->title_22_eng);
            $oportunidade->type_23 = $this->changeLanguage($oportunidade->type_23,$oportunidade->type_23_eng);
            $oportunidade->title_23 = $this->changeLanguage($oportunidade->title_23,$oportunidade->title_23_eng);
            $oportunidade->type_24 = $this->changeLanguage($oportunidade->type_24,$oportunidade->type_24_eng);
            $oportunidade->title_24 = $this->changeLanguage($oportunidade->title_24,$oportunidade->title_24_eng);
            $oportunidade->type_25 = $this->changeLanguage($oportunidade->type_25,$oportunidade->type_25_eng);
            $oportunidade->title_25 = $this->changeLanguage($oportunidade->title_25,$oportunidade->title_25_eng);
            $oportunidade->contact_title = $this->changeLanguage($oportunidade->contact_title,$oportunidade->contact_title_eng);
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
            foreach($oportunidades as $id => $oportunidade) {
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
                $oportunidade->type_5 = $this->changeLanguage($oportunidade->type_5,$oportunidade->type_5_eng);
                $oportunidade->title_5 = $this->changeLanguage($oportunidade->title_5,$oportunidade->title_5_eng);
                $oportunidade->type_6 = $this->changeLanguage($oportunidade->type_6,$oportunidade->type_6_eng);
                $oportunidade->title_6 = $this->changeLanguage($oportunidade->title_6,$oportunidade->title_6_eng);
                $oportunidade->type_7 = $this->changeLanguage($oportunidade->type_7,$oportunidade->type_7_eng);
                $oportunidade->title_7 = $this->changeLanguage($oportunidade->title_7,$oportunidade->title_7_eng);
                $oportunidade->type_8 = $this->changeLanguage($oportunidade->type_8,$oportunidade->type_8_eng);
                $oportunidade->title_8 = $this->changeLanguage($oportunidade->title_8,$oportunidade->title_8_eng);
                $oportunidade->type_9 = $this->changeLanguage($oportunidade->type_9,$oportunidade->type_9_eng);
                $oportunidade->title_9 = $this->changeLanguage($oportunidade->title_9,$oportunidade->title_9_eng);
                $oportunidade->type_10 = $this->changeLanguage($oportunidade->type_10,$oportunidade->type_10_eng);
                $oportunidade->title_10 = $this->changeLanguage($oportunidade->title_10,$oportunidade->title_10_eng);
                $oportunidade->type_11 = $this->changeLanguage($oportunidade->type_11,$oportunidade->type_11_eng);
                $oportunidade->title_11 = $this->changeLanguage($oportunidade->title_11,$oportunidade->title_11_eng);
                $oportunidade->type_12 = $this->changeLanguage($oportunidade->type_12,$oportunidade->type_12_eng);
                $oportunidade->title_12 = $this->changeLanguage($oportunidade->title_12,$oportunidade->title_12_eng);
                $oportunidade->type_13 = $this->changeLanguage($oportunidade->type_13,$oportunidade->type_13_eng);
                $oportunidade->title_13 = $this->changeLanguage($oportunidade->title_13,$oportunidade->title_13_eng);
                $oportunidade->type_14 = $this->changeLanguage($oportunidade->type_14,$oportunidade->type_14_eng);
                $oportunidade->title_14 = $this->changeLanguage($oportunidade->title_14,$oportunidade->title_14_eng);
                $oportunidade->type_15 = $this->changeLanguage($oportunidade->type_15,$oportunidade->type_15_eng);
                $oportunidade->title_15 = $this->changeLanguage($oportunidade->title_15,$oportunidade->title_15_eng);
                $oportunidade->type_16 = $this->changeLanguage($oportunidade->type_16,$oportunidade->type_16_eng);
                $oportunidade->title_16 = $this->changeLanguage($oportunidade->title_16,$oportunidade->title_16_eng);
                $oportunidade->type_17 = $this->changeLanguage($oportunidade->type_17,$oportunidade->type_17_eng);
                $oportunidade->title_17 = $this->changeLanguage($oportunidade->title_17,$oportunidade->title_17_eng);
                $oportunidade->type_18 = $this->changeLanguage($oportunidade->type_18,$oportunidade->type_18_eng);
                $oportunidade->title_18 = $this->changeLanguage($oportunidade->title_18,$oportunidade->title_18_eng);
                $oportunidade->type_19 = $this->changeLanguage($oportunidade->type_19,$oportunidade->type_19_eng);
                $oportunidade->title_19 = $this->changeLanguage($oportunidade->title_19,$oportunidade->title_19_eng);
                $oportunidade->type_20 = $this->changeLanguage($oportunidade->type_20,$oportunidade->type_20_eng);
                $oportunidade->title_20 = $this->changeLanguage($oportunidade->title_20,$oportunidade->title_20_eng);
                $oportunidade->type_21 = $this->changeLanguage($oportunidade->type_21,$oportunidade->type_21_eng);
                $oportunidade->title_21 = $this->changeLanguage($oportunidade->title_21,$oportunidade->title_21_eng);
                $oportunidade->type_22 = $this->changeLanguage($oportunidade->type_22,$oportunidade->type_22_eng);
                $oportunidade->title_22 = $this->changeLanguage($oportunidade->title_22,$oportunidade->title_22_eng);
                $oportunidade->type_23 = $this->changeLanguage($oportunidade->type_23,$oportunidade->type_23_eng);
                $oportunidade->title_23 = $this->changeLanguage($oportunidade->title_23,$oportunidade->title_23_eng);
                $oportunidade->type_24 = $this->changeLanguage($oportunidade->type_24,$oportunidade->type_24_eng);
                $oportunidade->title_24 = $this->changeLanguage($oportunidade->title_24,$oportunidade->title_24_eng);
                $oportunidade->type_25 = $this->changeLanguage($oportunidade->type_25,$oportunidade->type_25_eng);
                $oportunidade->title_25 = $this->changeLanguage($oportunidade->title_25,$oportunidade->title_25_eng);
                $oportunidade->contact_title = $this->changeLanguage($oportunidade->contact_title,$oportunidade->contact_title_eng);
            }
        }

        return $oportunidade;
    }

    public function oportunidadeActive($lingua = 'pt') {
        $oportunidade = $this->repository->oportunidadeActive();

        if ($lingua == 'eng') {
            foreach($oportunidades as $id => $oportunidade) {
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
                $oportunidade->type_5 = $this->changeLanguage($oportunidade->type_5,$oportunidade->type_5_eng);
                $oportunidade->title_5 = $this->changeLanguage($oportunidade->title_5,$oportunidade->title_5_eng);
                $oportunidade->type_6 = $this->changeLanguage($oportunidade->type_6,$oportunidade->type_6_eng);
                $oportunidade->title_6 = $this->changeLanguage($oportunidade->title_6,$oportunidade->title_6_eng);
                $oportunidade->type_7 = $this->changeLanguage($oportunidade->type_7,$oportunidade->type_7_eng);
                $oportunidade->title_7 = $this->changeLanguage($oportunidade->title_7,$oportunidade->title_7_eng);
                $oportunidade->type_8 = $this->changeLanguage($oportunidade->type_8,$oportunidade->type_8_eng);
                $oportunidade->title_8 = $this->changeLanguage($oportunidade->title_8,$oportunidade->title_8_eng);
                $oportunidade->type_9 = $this->changeLanguage($oportunidade->type_9,$oportunidade->type_9_eng);
                $oportunidade->title_9 = $this->changeLanguage($oportunidade->title_9,$oportunidade->title_9_eng);
                $oportunidade->type_10 = $this->changeLanguage($oportunidade->type_10,$oportunidade->type_10_eng);
                $oportunidade->title_10 = $this->changeLanguage($oportunidade->title_10,$oportunidade->title_10_eng);
                $oportunidade->type_11 = $this->changeLanguage($oportunidade->type_11,$oportunidade->type_11_eng);
                $oportunidade->title_11 = $this->changeLanguage($oportunidade->title_11,$oportunidade->title_11_eng);
                $oportunidade->type_12 = $this->changeLanguage($oportunidade->type_12,$oportunidade->type_12_eng);
                $oportunidade->title_12 = $this->changeLanguage($oportunidade->title_12,$oportunidade->title_12_eng);
                $oportunidade->type_13 = $this->changeLanguage($oportunidade->type_13,$oportunidade->type_13_eng);
                $oportunidade->title_13 = $this->changeLanguage($oportunidade->title_13,$oportunidade->title_13_eng);
                $oportunidade->type_14 = $this->changeLanguage($oportunidade->type_14,$oportunidade->type_14_eng);
                $oportunidade->title_14 = $this->changeLanguage($oportunidade->title_14,$oportunidade->title_14_eng);
                $oportunidade->type_15 = $this->changeLanguage($oportunidade->type_15,$oportunidade->type_15_eng);
                $oportunidade->title_15 = $this->changeLanguage($oportunidade->title_15,$oportunidade->title_15_eng);
                $oportunidade->type_16 = $this->changeLanguage($oportunidade->type_16,$oportunidade->type_16_eng);
                $oportunidade->title_16 = $this->changeLanguage($oportunidade->title_16,$oportunidade->title_16_eng);
                $oportunidade->type_17 = $this->changeLanguage($oportunidade->type_17,$oportunidade->type_17_eng);
                $oportunidade->title_17 = $this->changeLanguage($oportunidade->title_17,$oportunidade->title_17_eng);
                $oportunidade->type_18 = $this->changeLanguage($oportunidade->type_18,$oportunidade->type_18_eng);
                $oportunidade->title_18 = $this->changeLanguage($oportunidade->title_18,$oportunidade->title_18_eng);
                $oportunidade->type_19 = $this->changeLanguage($oportunidade->type_19,$oportunidade->type_19_eng);
                $oportunidade->title_19 = $this->changeLanguage($oportunidade->title_19,$oportunidade->title_19_eng);
                $oportunidade->type_20 = $this->changeLanguage($oportunidade->type_20,$oportunidade->type_20_eng);
                $oportunidade->title_20 = $this->changeLanguage($oportunidade->title_20,$oportunidade->title_20_eng);
                $oportunidade->type_21 = $this->changeLanguage($oportunidade->type_21,$oportunidade->type_21_eng);
                $oportunidade->title_21 = $this->changeLanguage($oportunidade->title_21,$oportunidade->title_21_eng);
                $oportunidade->type_22 = $this->changeLanguage($oportunidade->type_22,$oportunidade->type_22_eng);
                $oportunidade->title_22 = $this->changeLanguage($oportunidade->title_22,$oportunidade->title_22_eng);
                $oportunidade->type_23 = $this->changeLanguage($oportunidade->type_23,$oportunidade->type_23_eng);
                $oportunidade->title_23 = $this->changeLanguage($oportunidade->title_23,$oportunidade->title_23_eng);
                $oportunidade->type_24 = $this->changeLanguage($oportunidade->type_24,$oportunidade->type_24_eng);
                $oportunidade->title_24 = $this->changeLanguage($oportunidade->title_24,$oportunidade->title_24_eng);
                $oportunidade->type_25 = $this->changeLanguage($oportunidade->type_25,$oportunidade->type_25_eng);
                $oportunidade->title_25 = $this->changeLanguage($oportunidade->title_25,$oportunidade->title_25_eng);
                $oportunidade->contact_title = $this->changeLanguage($oportunidade->contact_title,$oportunidade->contact_title_eng);
            }
        }

        return $oportunidade;
    }

    public function newBlankOportunidade() {
        return new Oportunidade();
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

        $arr['img_1'] = $this->uploadImageValue($arr['img_1']);
        $arr['img_2'] = $this->uploadImageValue($arr['img_2']);
        $arr['img_3'] = $this->uploadImageValue($arr['img_3']);
        $arr['img_4'] = $this->uploadImageValue($arr['img_4']);
        $arr['img_5'] = $this->uploadImageValue($arr['img_5']);
        $arr['img_6'] = $this->uploadImageValue($arr['img_6']);
        $arr['img_7'] = $this->uploadImageValue($arr['img_7']);
        $arr['img_8'] = $this->uploadImageValue($arr['img_8']);
        $arr['img_9'] = $this->uploadImageValue($arr['img_9']);
        $arr['img_10'] = $this->uploadImageValue($arr['img_10']);
        $arr['img_11'] = $this->uploadImageValue($arr['img_11']);
        $arr['img_12'] = $this->uploadImageValue($arr['img_12']);
        $arr['img_13'] = $this->uploadImageValue($arr['img_13']);
        $arr['img_14'] = $this->uploadImageValue($arr['img_14']);
        $arr['img_15'] = $this->uploadImageValue($arr['img_15']);
        $arr['img_16'] = $this->uploadImageValue($arr['img_16']);
        $arr['img_17'] = $this->uploadImageValue($arr['img_17']);
        $arr['img_18'] = $this->uploadImageValue($arr['img_18']);
        $arr['img_19'] = $this->uploadImageValue($arr['img_19']);
        $arr['img_20'] = $this->uploadImageValue($arr['img_20']);
        $arr['img_21'] = $this->uploadImageValue($arr['img_21']);
        $arr['img_22'] = $this->uploadImageValue($arr['img_22']);
        $arr['img_23'] = $this->uploadImageValue($arr['img_23']);
        $arr['img_24'] = $this->uploadImageValue($arr['img_24']);
        $arr['img_25'] = $this->uploadImageValue($arr['img_25']);
        

        return $arr;
    }

    private function updateOportunidadeImages(array $arr) {
        
        $oportunidade = $this->repository->oportunidadeById($arr['id']);

        $arr['img_1']  = $this->updateImageValue($oportunidade->img_1,$arr['img_1']);
        $arr['img_2']  = $this->updateImageValue($oportunidade->img_2,$arr['img_2']);
        $arr['img_3']  = $this->updateImageValue($oportunidade->img_3,$arr['img_3']);
        $arr['img_4']  = $this->updateImageValue($oportunidade->img_4,$arr['img_4']);
        $arr['img_5']  = $this->updateImageValue($oportunidade->img_5,$arr['img_5']);
        $arr['img_6']  = $this->updateImageValue($oportunidade->img_6,$arr['img_6']);
        $arr['img_7']  = $this->updateImageValue($oportunidade->img_7,$arr['img_7']);
        $arr['img_8']  = $this->updateImageValue($oportunidade->img_8,$arr['img_8']);
        $arr['img_9']  = $this->updateImageValue($oportunidade->img_9,$arr['img_9']);
        $arr['img_10'] = $this->updateImageValue($oportunidade->img_10,$arr['img_10']);
        $arr['img_11'] = $this->updateImageValue($oportunidade->img_11,$arr['img_11']);
        $arr['img_12'] = $this->updateImageValue($oportunidade->img_12,$arr['img_12']);
        $arr['img_13'] = $this->updateImageValue($oportunidade->img_13,$arr['img_13']);
        $arr['img_14'] = $this->updateImageValue($oportunidade->img_14,$arr['img_14']);
        $arr['img_15'] = $this->updateImageValue($oportunidade->img_15,$arr['img_15']);
        $arr['img_16'] = $this->updateImageValue($oportunidade->img_16,$arr['img_16']);
        $arr['img_17'] = $this->updateImageValue($oportunidade->img_17,$arr['img_17']);
        $arr['img_18'] = $this->updateImageValue($oportunidade->img_18,$arr['img_18']);
        $arr['img_19'] = $this->updateImageValue($oportunidade->img_19,$arr['img_19']);
        $arr['img_20'] = $this->updateImageValue($oportunidade->img_20,$arr['img_20']);
        $arr['img_21'] = $this->updateImageValue($oportunidade->img_21,$arr['img_21']);
        $arr['img_22'] = $this->updateImageValue($oportunidade->img_22,$arr['img_22']);
        $arr['img_23'] = $this->updateImageValue($oportunidade->img_23,$arr['img_23']);
        $arr['img_24'] = $this->updateImageValue($oportunidade->img_24,$arr['img_24']);
        $arr['img_25'] = $this->updateImageValue($oportunidade->img_25,$arr['img_25']);

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
            $propriedade->type_8 = $this->changeLanguage($propriedade->type_8,$propriedade->type_8_eng);
            $propriedade->legend_8 = $this->changeLanguage($propriedade->legend_8,$propriedade->legend_8_eng);
            $propriedade->type_9 = $this->changeLanguage($propriedade->type_9,$propriedade->type_9_eng);
            $propriedade->legend_9 = $this->changeLanguage($propriedade->legend_9,$propriedade->legend_9_eng);
            $propriedade->type_10 = $this->changeLanguage($propriedade->type_10,$propriedade->type_10_eng);
            $propriedade->legend_10 = $this->changeLanguage($propriedade->legend_10,$propriedade->legend_10_eng);
            $propriedade->type_11 = $this->changeLanguage($propriedade->type_11,$propriedade->type_11_eng);
            $propriedade->legend_11 = $this->changeLanguage($propriedade->legend_11,$propriedade->legend_11_eng);
            $propriedade->type_12 = $this->changeLanguage($propriedade->type_12,$propriedade->type_12_eng);
            $propriedade->legend_12 = $this->changeLanguage($propriedade->legend_12,$propriedade->legend_12_eng);
            $propriedade->type_13 = $this->changeLanguage($propriedade->type_13,$propriedade->type_13_eng);
            $propriedade->legend_13 = $this->changeLanguage($propriedade->legend_13,$propriedade->legend_13_eng);
            $propriedade->type_14 = $this->changeLanguage($propriedade->type_14,$propriedade->type_14_eng);
            $propriedade->legend_14 = $this->changeLanguage($propriedade->legend_14,$propriedade->legend_14_eng);
            $propriedade->type_15 = $this->changeLanguage($propriedade->type_15,$propriedade->type_15_eng);
            $propriedade->legend_15 = $this->changeLanguage($propriedade->legend_15,$propriedade->legend_15_eng);
            $propriedade->type_16 = $this->changeLanguage($propriedade->type_16,$propriedade->type_16_eng);
            $propriedade->legend_16 = $this->changeLanguage($propriedade->legend_16,$propriedade->legend_16_eng);
            $propriedade->type_17 = $this->changeLanguage($propriedade->type_17,$propriedade->type_17_eng);
            $propriedade->legend_17 = $this->changeLanguage($propriedade->legend_17,$propriedade->legend_17_eng);
            $propriedade->type_18 = $this->changeLanguage($propriedade->type_18,$propriedade->type_18_eng);
            $propriedade->legend_18 = $this->changeLanguage($propriedade->legend_18,$propriedade->legend_18_eng);
            $propriedade->type_19 = $this->changeLanguage($propriedade->type_19,$propriedade->type_19_eng);
            $propriedade->legend_19 = $this->changeLanguage($propriedade->legend_19,$propriedade->legend_19_eng);
            $propriedade->type_20 = $this->changeLanguage($propriedade->type_20,$propriedade->type_20_eng);
            $propriedade->legend_20 = $this->changeLanguage($propriedade->legend_20,$propriedade->legend_20_eng);
            $propriedade->type_21 = $this->changeLanguage($propriedade->type_21,$propriedade->type_21_eng);
            $propriedade->legend_21 = $this->changeLanguage($propriedade->legend_21,$propriedade->legend_21_eng);
            $propriedade->type_22 = $this->changeLanguage($propriedade->type_22,$propriedade->type_22_eng);
            $propriedade->legend_22 = $this->changeLanguage($propriedade->legend_22,$propriedade->legend_22_eng);
            $propriedade->type_23 = $this->changeLanguage($propriedade->type_23,$propriedade->type_23_eng);
            $propriedade->legend_23 = $this->changeLanguage($propriedade->legend_23,$propriedade->legend_23_eng);
            $propriedade->type_24 = $this->changeLanguage($propriedade->type_24,$propriedade->type_24_eng);
            $propriedade->legend_24 = $this->changeLanguage($propriedade->legend_24,$propriedade->legend_24_eng);
            $propriedade->type_25 = $this->changeLanguage($propriedade->type_25,$propriedade->type_25_eng);
            $propriedade->legend_25 = $this->changeLanguage($propriedade->legend_25,$propriedade->legend_25_eng);
            $propriedade->contact_title = $this->changeLanguage($propriedade->contact_title,$propriedade->contact_title_eng);
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
        $propriedades = $this->repository->propriedade();

        if ($lingua == 'eng') {
            foreach($propriedades as $id => $propriedade) {
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
                $propriedade->type_8 = $this->changeLanguage($propriedade->type_8,$propriedade->type_8_eng);
                $propriedade->legend_8 = $this->changeLanguage($propriedade->legend_8,$propriedade->legend_8_eng);
                $propriedade->type_9 = $this->changeLanguage($propriedade->type_9,$propriedade->type_9_eng);
                $propriedade->legend_9 = $this->changeLanguage($propriedade->legend_9,$propriedade->legend_9_eng);
                $propriedade->type_10 = $this->changeLanguage($propriedade->type_10,$propriedade->type_10_eng);
                $propriedade->legend_10 = $this->changeLanguage($propriedade->legend_10,$propriedade->legend_10_eng);
                $propriedade->type_11 = $this->changeLanguage($propriedade->type_11,$propriedade->type_11_eng);
                $propriedade->legend_11 = $this->changeLanguage($propriedade->legend_11,$propriedade->legend_11_eng);
                $propriedade->type_12 = $this->changeLanguage($propriedade->type_12,$propriedade->type_12_eng);
                $propriedade->legend_12 = $this->changeLanguage($propriedade->legend_12,$propriedade->legend_12_eng);
                $propriedade->type_13 = $this->changeLanguage($propriedade->type_13,$propriedade->type_13_eng);
                $propriedade->legend_13 = $this->changeLanguage($propriedade->legend_13,$propriedade->legend_13_eng);
                $propriedade->type_14 = $this->changeLanguage($propriedade->type_14,$propriedade->type_14_eng);
                $propriedade->legend_14 = $this->changeLanguage($propriedade->legend_14,$propriedade->legend_14_eng);
                $propriedade->type_15 = $this->changeLanguage($propriedade->type_15,$propriedade->type_15_eng);
                $propriedade->legend_15 = $this->changeLanguage($propriedade->legend_15,$propriedade->legend_15_eng);
                $propriedade->type_16 = $this->changeLanguage($propriedade->type_16,$propriedade->type_16_eng);
                $propriedade->legend_16 = $this->changeLanguage($propriedade->legend_16,$propriedade->legend_16_eng);
                $propriedade->type_17 = $this->changeLanguage($propriedade->type_17,$propriedade->type_17_eng);
                $propriedade->legend_17 = $this->changeLanguage($propriedade->legend_17,$propriedade->legend_17_eng);
                $propriedade->type_18 = $this->changeLanguage($propriedade->type_18,$propriedade->type_18_eng);
                $propriedade->legend_18 = $this->changeLanguage($propriedade->legend_18,$propriedade->legend_18_eng);
                $propriedade->type_19 = $this->changeLanguage($propriedade->type_19,$propriedade->type_19_eng);
                $propriedade->legend_19 = $this->changeLanguage($propriedade->legend_19,$propriedade->legend_19_eng);
                $propriedade->type_20 = $this->changeLanguage($propriedade->type_20,$propriedade->type_20_eng);
                $propriedade->legend_20 = $this->changeLanguage($propriedade->legend_20,$propriedade->legend_20_eng);
                $propriedade->type_21 = $this->changeLanguage($propriedade->type_21,$propriedade->type_21_eng);
                $propriedade->legend_21 = $this->changeLanguage($propriedade->legend_21,$propriedade->legend_21_eng);
                $propriedade->type_22 = $this->changeLanguage($propriedade->type_22,$propriedade->type_22_eng);
                $propriedade->legend_22 = $this->changeLanguage($propriedade->legend_22,$propriedade->legend_22_eng);
                $propriedade->type_23 = $this->changeLanguage($propriedade->type_23,$propriedade->type_23_eng);
                $propriedade->legend_23 = $this->changeLanguage($propriedade->legend_23,$propriedade->legend_23_eng);
                $propriedade->type_24 = $this->changeLanguage($propriedade->type_24,$propriedade->type_24_eng);
                $propriedade->legend_24 = $this->changeLanguage($propriedade->legend_24,$propriedade->legend_24_eng);
                $propriedade->type_25 = $this->changeLanguage($propriedade->type_25,$propriedade->type_25_eng);
                $propriedade->legend_25 = $this->changeLanguage($propriedade->legend_25,$propriedade->legend_25_eng);
                $propriedade->contact_title = $this->changeLanguage($propriedade->contact_title,$propriedade->contact_title_eng);
            }
        }

        return $propriedades;
    }

    public function propriedadeActive($lingua = 'pt') {
        $propriedade = $this->repository->propriedadeActive();

        if ($lingua == 'eng') {
            foreach($propriedades as $id => $propriedade) {
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
                $propriedade->type_8 = $this->changeLanguage($propriedade->type_8,$propriedade->type_8_eng);
                $propriedade->legend_8 = $this->changeLanguage($propriedade->legend_8,$propriedade->legend_8_eng);
                $propriedade->type_9 = $this->changeLanguage($propriedade->type_9,$propriedade->type_9_eng);
                $propriedade->legend_9 = $this->changeLanguage($propriedade->legend_9,$propriedade->legend_9_eng);
                $propriedade->type_10 = $this->changeLanguage($propriedade->type_10,$propriedade->type_10_eng);
                $propriedade->legend_10 = $this->changeLanguage($propriedade->legend_10,$propriedade->legend_10_eng);
                $propriedade->type_11 = $this->changeLanguage($propriedade->type_11,$propriedade->type_11_eng);
                $propriedade->legend_11 = $this->changeLanguage($propriedade->legend_11,$propriedade->legend_11_eng);
                $propriedade->type_12 = $this->changeLanguage($propriedade->type_12,$propriedade->type_12_eng);
                $propriedade->legend_12 = $this->changeLanguage($propriedade->legend_12,$propriedade->legend_12_eng);
                $propriedade->type_13 = $this->changeLanguage($propriedade->type_13,$propriedade->type_13_eng);
                $propriedade->legend_13 = $this->changeLanguage($propriedade->legend_13,$propriedade->legend_13_eng);
                $propriedade->type_14 = $this->changeLanguage($propriedade->type_14,$propriedade->type_14_eng);
                $propriedade->legend_14 = $this->changeLanguage($propriedade->legend_14,$propriedade->legend_14_eng);
                $propriedade->type_15 = $this->changeLanguage($propriedade->type_15,$propriedade->type_15_eng);
                $propriedade->legend_15 = $this->changeLanguage($propriedade->legend_15,$propriedade->legend_15_eng);
                $propriedade->type_16 = $this->changeLanguage($propriedade->type_16,$propriedade->type_16_eng);
                $propriedade->legend_16 = $this->changeLanguage($propriedade->legend_16,$propriedade->legend_16_eng);
                $propriedade->type_17 = $this->changeLanguage($propriedade->type_17,$propriedade->type_17_eng);
                $propriedade->legend_17 = $this->changeLanguage($propriedade->legend_17,$propriedade->legend_17_eng);
                $propriedade->type_18 = $this->changeLanguage($propriedade->type_18,$propriedade->type_18_eng);
                $propriedade->legend_18 = $this->changeLanguage($propriedade->legend_18,$propriedade->legend_18_eng);
                $propriedade->type_19 = $this->changeLanguage($propriedade->type_19,$propriedade->type_19_eng);
                $propriedade->legend_19 = $this->changeLanguage($propriedade->legend_19,$propriedade->legend_19_eng);
                $propriedade->type_20 = $this->changeLanguage($propriedade->type_20,$propriedade->type_20_eng);
                $propriedade->legend_20 = $this->changeLanguage($propriedade->legend_20,$propriedade->legend_20_eng);
                $propriedade->type_21 = $this->changeLanguage($propriedade->type_21,$propriedade->type_21_eng);
                $propriedade->legend_21 = $this->changeLanguage($propriedade->legend_21,$propriedade->legend_21_eng);
                $propriedade->type_22 = $this->changeLanguage($propriedade->type_22,$propriedade->type_22_eng);
                $propriedade->legend_22 = $this->changeLanguage($propriedade->legend_22,$propriedade->legend_22_eng);
                $propriedade->type_23 = $this->changeLanguage($propriedade->type_23,$propriedade->type_23_eng);
                $propriedade->legend_23 = $this->changeLanguage($propriedade->legend_23,$propriedade->legend_23_eng);
                $propriedade->type_24 = $this->changeLanguage($propriedade->type_24,$propriedade->type_24_eng);
                $propriedade->legend_24 = $this->changeLanguage($propriedade->legend_24,$propriedade->legend_24_eng);
                $propriedade->type_25 = $this->changeLanguage($propriedade->type_25,$propriedade->type_25_eng);
                $propriedade->legend_25 = $this->changeLanguage($propriedade->legend_25,$propriedade->legend_25_eng);
                $propriedade->contact_title = $this->changeLanguage($propriedade->contact_title,$propriedade->contact_title_eng);
            }
        }

        return $propriedade;
    }

    public function newBlankPropriedade() {
        return new Propriedade();
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

        $arr['img_1'] = $this->uploadImageValue($arr['img_1']);
        $arr['img_2'] = $this->uploadImageValue($arr['img_2']);
        $arr['img_3'] = $this->uploadImageValue($arr['img_3']);
        $arr['img_4'] = $this->uploadImageValue($arr['img_4']);
        $arr['img_5'] = $this->uploadImageValue($arr['img_5']);
        $arr['img_6'] = $this->uploadImageValue($arr['img_6']);
        $arr['img_7'] = $this->uploadImageValue($arr['img_7']);
        $arr['img_8'] = $this->uploadImageValue($arr['img_8']);
        $arr['img_9'] = $this->uploadImageValue($arr['img_9']);
        $arr['img_10'] = $this->uploadImageValue($arr['img_10']);
        $arr['img_11'] = $this->uploadImageValue($arr['img_11']);
        $arr['img_12'] = $this->uploadImageValue($arr['img_12']);
        $arr['img_13'] = $this->uploadImageValue($arr['img_13']);
        $arr['img_14'] = $this->uploadImageValue($arr['img_14']);
        $arr['img_15'] = $this->uploadImageValue($arr['img_15']);
        $arr['img_16'] = $this->uploadImageValue($arr['img_16']);
        $arr['img_17'] = $this->uploadImageValue($arr['img_17']);
        $arr['img_18'] = $this->uploadImageValue($arr['img_18']);
        $arr['img_19'] = $this->uploadImageValue($arr['img_19']);
        $arr['img_20'] = $this->uploadImageValue($arr['img_20']);
        $arr['img_21'] = $this->uploadImageValue($arr['img_21']);
        $arr['img_22'] = $this->uploadImageValue($arr['img_22']);
        $arr['img_23'] = $this->uploadImageValue($arr['img_23']);
        $arr['img_24'] = $this->uploadImageValue($arr['img_24']);
        $arr['img_25'] = $this->uploadImageValue($arr['img_25']);

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
        $arr['img_8']     = $this->updateImageValue($propriedade->img_8,$arr['img_8']);
        $arr['img_9']     = $this->updateImageValue($propriedade->img_9,$arr['img_9']);
        $arr['img_10']     = $this->updateImageValue($propriedade->img_10,$arr['img_10']);
        $arr['img_11']     = $this->updateImageValue($propriedade->img_11,$arr['img_11']);
        $arr['img_12']     = $this->updateImageValue($propriedade->img_12,$arr['img_12']);
        $arr['img_13']     = $this->updateImageValue($propriedade->img_13,$arr['img_13']);
        $arr['img_14']     = $this->updateImageValue($propriedade->img_14,$arr['img_14']);
        $arr['img_15']     = $this->updateImageValue($propriedade->img_15,$arr['img_15']);
        $arr['img_16']     = $this->updateImageValue($propriedade->img_16,$arr['img_16']);
        $arr['img_18']     = $this->updateImageValue($propriedade->img_18,$arr['img_18']);
        $arr['img_19']     = $this->updateImageValue($propriedade->img_19,$arr['img_19']);
        $arr['img_20']     = $this->updateImageValue($propriedade->img_20,$arr['img_20']);
        $arr['img_21']     = $this->updateImageValue($propriedade->img_21,$arr['img_21']);
        $arr['img_22']     = $this->updateImageValue($propriedade->img_22,$arr['img_22']);
        $arr['img_23']     = $this->updateImageValue($propriedade->img_23,$arr['img_23']);
        $arr['img_24']     = $this->updateImageValue($propriedade->img_24,$arr['img_24']);
        $arr['img_25']     = $this->updateImageValue($propriedade->img_25,$arr['img_25']);

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