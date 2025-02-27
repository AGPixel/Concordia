<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortifolioGeral extends Model
{
    use HasFactory;

    protected $table = 'portifolio_geral';

    protected $fillable = [
        'meta_tags_title',
        'meta_tags_description',
        'meta_tags_keywords',
        'title',
        'title_eng',
        'description',
        'description_eng',
        'title_1',
        'title_1_eng',
        'description_1',
        'description_1_eng',
    ];

}
