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
    ];

}
