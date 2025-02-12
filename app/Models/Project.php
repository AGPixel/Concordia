<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'title_1',
        'title_1_eng',
        'description_1',
        'description_1_eng',
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
