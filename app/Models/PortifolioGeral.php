<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortifolioGeral extends Model
{
    use HasFactory;

    protected $table = 'portifolio_geral';

    protected $fillable = [
        'title',
        'title_eng',
        'description',
        'description_eng',
    ];

}
