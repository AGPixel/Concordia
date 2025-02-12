<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    use HasFactory;

    protected $table = 'propriedade';

    protected $fillable = [
        'title',
        'description',
        'year',
        'job_1',
        'job_2',
        'img_1',
        'type_1',
        'legend_1',
        'img_2',
        'type_2',
        'legend_2',
        'img_3',
        'type_3',
        'legend_3',
        'img_4',
        'type_4',
        'legend_4',
        'img_5',
        'type_5',
        'legend_5',
        'img_6',
        'type_6',
        'legend_6',
        'img_7',
        'type_7',
        'legend_7',
    ];

}
