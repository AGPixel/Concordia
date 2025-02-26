<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonial';

    protected $fillable = [
        'meta_tags_title',
        'meta_tags_description',
        'meta_tags_keywords',
        'num',
        'name',
        'company',
        'description',
        'description_eng',
    ];

}
