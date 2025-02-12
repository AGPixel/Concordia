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
        'description',
        'year',
        'job_1',
        'job_2',
        'img_1',
        'type_1',
        'title_1',
        'img_2',
        'type_2',
        'title_2',
        'img_3',
        'type_3',
        'title_3',
        'img_4',
        'type_4',
        'title_4',
    ];

}
