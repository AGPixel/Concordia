<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoGeral extends Model
{
    use HasFactory;

    protected $table = 'servico_geral';

    protected $fillable = [
        'video',
        'pre_title_1',
        'pre_title_1_eng',
        'pre_title_2',
        'pre_title_2_eng',
        'pre_title_3',
        'pre_title_3_eng',
    ];

}
