<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oportunidade extends Model
{
    use HasFactory;

    protected $table = 'oportunidade';

    protected $fillable = [
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
        'title_1',
        'title_1_eng',
        'img_2',
        'type_2',
        'type_2_eng',
        'title_2',
        'title_2_eng',
        'img_3',
        'type_3',
        'type_3_eng',
        'title_3',
        'title_3_eng',
        'img_4',
        'type_4',
        'type_4_eng',
        'title_4',
        'title_4_eng',
    ];

}
