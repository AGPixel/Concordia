<?php

namespace App\Repositories;

use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
use App\Models\Project;
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

     // ------------------------------------- PROJECT -------------------------------------

     public function projectById($id): object {
          $modelProject = new Project();
          return $modelProject->where('id',$id)->first();
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

}