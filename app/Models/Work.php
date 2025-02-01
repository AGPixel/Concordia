<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'work';

    protected $fillable = [
        'title',
        'description',
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
        'img_5',
        'type_5',
        'title_5',
        'img_6',
        'type_6',
        'title_6',
        'img_7',
        'type_7',
        'title_7',
    ];

}
