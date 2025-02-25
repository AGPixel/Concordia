<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolitics extends Model
{
    use HasFactory;

    protected $table = 'privacy_politics';

    protected $fillable = [
        'title',
        'title_eng',
        'content',
        'content_eng',
    ];

}
