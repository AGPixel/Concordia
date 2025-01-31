<?php

namespace App\Repositories;

use App\Models\IndexText;
use App\Models\Contact;
use App\Models\About;
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
          $indexText = $this->contact();
          $indexText->fill($arr);
          $indexText->save();
     }

     public function about(): object {
          $modelAbout = new About();
          return $modelAbout::first();
     }

     public function saveAbout(array $arr) {
          $indexText = $this->about();
          $indexText->fill($arr);
          $indexText->save();
     }

}