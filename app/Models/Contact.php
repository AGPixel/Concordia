<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'meta_tags_title',
        'meta_tags_description',
        'meta_tags_keywords',
        'email1',
        'email2',
        'contact_form_title',
        'contact_form_title_eng',
        'business_hours1',
        'business_hours2',
        'business_hours3',
        'address1',
        'address2',
        'address3',
        'map_lat',
        'map_len',
        'footer_email',
        'footer_call',
        'footer_skype',
    ];

}
