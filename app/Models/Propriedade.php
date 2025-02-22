<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    use HasFactory;

    protected $table = 'propriedade';

    protected $fillable = [
        'meta_tags_title',
        'meta_tags_description',
        'meta_tags_keywords',
        'title',
        'title_eng',
        'description',
        'description_eng',
        'year',
        'job_1',
        'job_1_eng',
        'job_2',
        'job_2_eng',
        'img_1',
        'type_1',
        'type_1_eng',
        'legend_1',
        'legend_1_eng',
        'img_2',
        'type_2',
        'type_2_eng',
        'legend_2',
        'legend_2_eng',
        'img_3',
        'type_3',
        'type_3_eng',
        'legend_3',
        'legend_3_eng',
        'img_4',
        'type_4',
        'type_4_eng',
        'legend_4',
        'legend_4_eng',
        'img_5',
        'type_5',
        'type_5_eng',
        'legend_5',
        'legend_5_eng',
        'img_6',
        'type_6',
        'type_6_eng',
        'legend_6',
        'legend_6_eng',
        'img_7',
        'type_7',
        'type_7_eng',
        'legend_7',
        'legend_7_eng',
        'contact_title',
        'contact_title_eng',
    ];

}
