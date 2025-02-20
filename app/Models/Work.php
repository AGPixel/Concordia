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
        'title_eng',
        'description',
        'description_eng',
        'img_1',
        'type_1_1',
        'type_1_1_eng',
        'type_1_2',
        'type_1_2_eng',
        'title_1',
        'title_1_eng',
        'img_2',
        'type_2_1',
        'type_2_1_eng',
        'type_2_2',
        'type_2_2_eng',
        'title_2',
        'title_2_eng',
        'img_3',
        'type_3_1',
        'type_3_1_eng',
        'type_3_2',
        'type_3_2_eng',
        'title_3',
        'title_3_eng',
        'img_4',
        'type_4_1',
        'type_4_1_eng',
        'type_4_2',
        'type_4_2_eng',
        'title_4',
        'title_4_eng',
        'img_5',
        'type_5_1',
        'type_5_1_eng',
        'type_5_2',
        'type_5_2_eng',
        'title_5',
        'title_5_eng',
        'img_6',
        'type_6_1',
        'type_6_1_eng',
        'type_6_2',
        'type_6_2_eng',
        'title_6',
        'title_6_eng',
        'img_7',
        'type_7_1',
        'type_7_1_eng',
        'type_7_2',
        'type_7_2_eng',
        'title_7',
        'title_7_eng',
    ];

}
