<?php

namespace App\Repositories;

use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
use App\Models\Work;
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

     public function indexText(): object {
          return $this->model::first();
     }

     public function saveIndexText(array $arr) {
          $indexText = $this->indexText();
          $indexText->fill($arr);
          $indexText->save();
     }

     public function contact(): object {
          $modelContact = new Contact();
          return $modelContact::first();
     }

     public function saveContact(array $arr) {
          $contact = $this->contact();
          $contact->fill($arr);
          $contact->save();
     }

     public function about(): object {
          $modelAbout = new About();
          return $modelAbout::first();
     }

     public function saveAbout(array $arr) {
          $about = $this->about();
          $about->fill($arr);
          $about->save();
     }

     public function work(): object {
          $modelWork = new Work();
          return $modelWork::first();
     }

     public function saveWork(array $arr) {
          $work = $this->work();
          $work->fill($arr);
          $work->save();
     }

}