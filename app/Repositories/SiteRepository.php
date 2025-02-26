<?php

namespace App\Repositories;

use App\Models\MetaTags;
use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
use App\Models\Testimonial;
use App\Models\PortifolioGeral;
use App\Models\ServicoGeral;
use App\Models\ServiceTerms;
use App\Models\PrivacyPolitics;
use App\Models\Project;
use App\Models\Oportunidade;
use App\Models\Propriedade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SiteRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new IndexText();
	}

     // ------------------------------------- META TAGS -------------------------------------

     public function metaTags(): object {
          $modelMetaTags = new MetaTags();
          return $modelMetaTags::first();
     }

     public function saveMetaTags(array $arr) {
          $metaTags = $this->metaTags();
          $metaTags->fill($arr);
          $metaTags->save();
     }

     // ------------------------------------- META TAGS -------------------------------------

     // ------------------------------------- INDEX_TEXT -------------------------------------

     public function indexText(): object {
          return $this->model::first();
     }

     public function saveIndexText(array $arr) {
          $indexText = $this->indexText();
          $indexText->fill($arr);
          $indexText->save();
     }
     
     // ------------------------------------- INDEX_TEXT -------------------------------------

     // ------------------------------------- CONTACT -------------------------------------

     public function contact(): object {
          $modelContact = new Contact();
          return $modelContact::first();
     }

     public function saveContact(array $arr) {
          $contact = $this->contact();
          $contact->fill($arr);
          $contact->save();
     }

     // ------------------------------------- CONTACT -------------------------------------

     // ------------------------------------- ABOUT -------------------------------------

     public function about(): object {
          $modelAbout = new About();
          return $modelAbout::first();
     }

     public function saveAbout(array $arr) {
          $about = $this->about();
          $about->fill($arr);
          $about->save();
     }

     // ------------------------------------- ABOUT -------------------------------------

     // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

     public function portifolioGeral() {
          $modelPortifolioGeral = new PortifolioGeral();
          return $modelPortifolioGeral::first();
     }

     public function savePortifolioGeral(array $arr) {
          $portifolioGeral = $this->portifolioGeral();
          $portifolioGeral->fill($arr);
          $portifolioGeral->save();
     }

     // ------------------------------------- PORTIFOLIO GERAL -------------------------------------

     // ------------------------------------- SERVICE TERMS -------------------------------------

     public function serviceTerms() {
          $modelServiceTerms = new ServiceTerms();
          return $modelServiceTerms::first();
     }

     public function saveServiceTerms(array $arr) {
          $serviceTerms = $this->serviceTerms();
          $serviceTerms->fill($arr);
          $serviceTerms->save();
     }

     // ------------------------------------- SERVICE TERMS -------------------------------------

     // ------------------------------------- PRIVACY POLITICS -------------------------------------

     public function privacyPolitics() {
          $modelPrivacyPolitics = new PrivacyPolitics();
          return $modelPrivacyPolitics::first();
     }

     public function savePrivacyPolitics(array $arr) {
          $privacyPolitics = $this->privacyPolitics();
          $privacyPolitics->fill($arr);
          $privacyPolitics->save();
     }

     // ------------------------------------- PRIVACY POLITICS -------------------------------------

     // ------------------------------------- WORK -------------------------------------

     public function workById($id): object {
          $modelWork = new Work();
          return $modelWork->where('id',$id)->first();
     }

     public function work() {
          $modelWork = new Work();
          return $modelWork::get();
     }

     public function workActive() {
          $modelWork = new Work();
          return $modelWork::where('active',1)->get();
     }

     public function saveWork(array $arr) {
          $work = $this->workById($arr['id']);
          $work->fill($arr);
          $work->save();
     }

     public function saveNewWork(array $arr) {
          $work = new Work();
          $work->fill($arr);
          $work->save();
     }

     public function updateActiveWork(array $arr) {
          Work::where('id',$arr['id'])->update(['active'=>$arr['active']]);
     }

     public function deleteWork($id) {
          Work::where('id',$id)->delete();
     }

     // ------------------------------------- WORK -------------------------------------

     // ------------------------------------- SERVICO GERAL -------------------------------------

     public function servicoGeral() {
          $modelServicoGeral = new ServicoGeral();
          return $modelServicoGeral::first();
     }

     public function saveServicoGeral(array $arr) {
          $servicoGeral = $this->servicoGeral();
          $servicoGeral->fill($arr);
          $servicoGeral->save();
     }

     // ------------------------------------- SERVICO GERAL -------------------------------------

     // ------------------------------------- TESTIMONIALS -------------------------------------

     public function testimonialById($id): object {
          $modelTestimonial = new Testimonial();
          return $modelTestimonial->where('id',$id)->first();
     }

     public function getTestimonialThatIsNotId($id) {
          $modelTestimonial = new Testimonial();
          return $modelTestimonial->where('id','!=',$id)->get();
     }

     public function testimonial() {
          $modelTestimonial = new Testimonial();
          return $modelTestimonial::get();
     }

     public function saveTestimonial(array $arr) {
          $testimonial = $this->testimonialById($arr['id']);
          $testimonial->fill($arr);
          $testimonial->save();
     }

     public function saveNewTestimonial(array $arr) {
          $testimonial = new Testimonial();
          $testimonial->fill($arr);
          $testimonial->save();
     }

     public function deleteTestimonial($id) {
          Testimonial::where('id',$id)->delete();
     }

     // ------------------------------------- TESTIMONIALS -------------------------------------

     // ------------------------------------- PROJECT -------------------------------------

     public function projectById($id): object {
          $modelProject = new Project();
          return $modelProject->where('id',$id)->first();
     }

     public function getProjectThatIsNotId($id) {
          $modelProject = new Project();
          return $modelProject->where('id','!=',$id)->get();
     }

     public function project() {
          $modelProject = new Project();
          return $modelProject::get();
     }

     public function projectActive() {
          $modelProject = new Project();
          return $modelProject::where('active',1)->get();
     }

     public function saveProject(array $arr) {
          $project = $this->projectById($arr['id']);
          $project->fill($arr);
          $project->save();
     }

     public function saveNewProject(array $arr) {
          $project = new Project();
          $project->fill($arr);
          $project->save();
     }

     public function updateActiveProject(array $arr) {
          Project::where('id',$arr['id'])->update(['active'=>$arr['active']]);
     }

     public function deleteProject($id) {
          Project::where('id',$id)->delete();
     }

     // ------------------------------------- PROJECT -------------------------------------

     // ------------------------------------- OPORTUNIDADE -------------------------------------

     public function oportunidadeById($id): object {
          $modelOportunidade = new Oportunidade();
          return $modelOportunidade->where('id',$id)->first();
     }

     public function getOportunidadeThatIsNotId($id) {
          $modelOportunidade = new Oportunidade();
          return $modelOportunidade->where('id','!=',$id)->get();
     }

     public function oportunidade() {
          $modelOportunidade = new Oportunidade();
          return $modelOportunidade::get();
     }

     public function oportunidadeActive() {
          $modelOportunidade = new Oportunidade();
          return $modelOportunidade::where('active',1)->get();
     }

     public function saveOportunidade(array $arr) {
          $oportunidade = $this->oportunidadeById($arr['id']);
          $oportunidade->fill($arr);
          $oportunidade->save();
     }

     public function saveNewOportunidade(array $arr) {
          $oportunidade = new Oportunidade();
          $oportunidade->fill($arr);
          $oportunidade->save();
     }

     public function updateActiveOportunidade(array $arr) {
          Oportunidade::where('id',$arr['id'])->update(['active'=>$arr['active']]);
     }

     public function deleteOportunidade($id) {
          Oportunidade::where('id',$id)->delete();
     }

     // ------------------------------------- OPORTUNIDADE -------------------------------------

     // ------------------------------------- PROPRIEDADE -------------------------------------

     public function propriedadeById($id): object {
          $modelPropriedade = new Propriedade();
          return $modelPropriedade->where('id',$id)->first();
     }

     public function getPropriedadeThatIsNotId($id) {
          $modelPropriedade = new Propriedade();
          return $modelPropriedade->where('id','!=',$id)->get();
     }

     public function propriedade() {
          $modelPropriedade = new Propriedade();
          return $modelPropriedade::get();
     }

     public function propriedadeActive() {
          $modelPropriedade = new Propriedade();
          return $modelPropriedade::where('active',1)->get();
     }

     public function savePropriedade(array $arr) {
          $propriedade = $this->propriedadeById($arr['id']);
          $propriedade->fill($arr);
          $propriedade->save();
     }

     public function saveNewPropriedade(array $arr) {
          $propriedade = new Propriedade();
          $propriedade->fill($arr);
          $propriedade->save();
     }

     public function updateActivePropriedade(array $arr) {
          Propriedade::where('id',$arr['id'])->update(['active'=>$arr['active']]);
     }

     public function deletePropriedade($id) {
          Propriedade::where('id',$id)->delete();
     }

     // ------------------------------------- PROPRIEDADE -------------------------------------

}