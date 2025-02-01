<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'about_title_1',
        'about_title_2',
        'about_img_1',
        'about_img_2',
        'about_img_3',
        'about_img_4',
        'about_service_title',
        'about_service_1',
        'about_service_img_1',
        'about_service_2',
        'about_service_img_2',
        'about_service_3',
        'about_service_img_3',
        'about_service_4',
        'about_service_img_4',
        'about_service_5',
        'about_service_img_5',
        'about_service_6',
        'about_service_img_6',
        'about_experience_title',
        'about_experience_title_1',
        'about_experience_description_1',
        'about_experience_data_1',
        'about_experience_title_2',
        'about_experience_description_2',
        'about_experience_data_2',
        'about_experience_title_3',
        'about_experience_description_3',
        'about_experience_data_3',
        'about_experience_title_4',
        'about_experience_description_4',
        'about_experience_data_4',
        'about_brands_title',
        'about_brands_img_1',
        'about_brands_img_2',
        'about_brands_img_3',
        'about_brands_img_4',
        'about_brands_description',
    ];

}
