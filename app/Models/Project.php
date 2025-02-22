<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'meta_tags_title',
        'meta_tags_description',
        'meta_tags_keywords',
        'title_1',
        'title_1_eng',
        'description_1',
        'description_1_eng',
        'img_begin',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'title_2',
        'title_2_eng',
        'description_2',
        'description_2_eng',
    ];

}
