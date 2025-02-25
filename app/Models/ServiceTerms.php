<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTerms extends Model
{
    use HasFactory;

    protected $table = 'service_terms';

    protected $fillable = [
        'title',
        'title_eng',
        'content',
        'content_eng',
    ];

}
