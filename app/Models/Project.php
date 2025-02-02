<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'title',
        'work_1',
        'work_2',
        'work_3',
        'url_project',
        'img_begin',
        'title_employees',
        'employee_job_1',
        'employee_1',
        'employee_job_2',
        'employee_2',
        'employee_job_3',
        'employee_3',
        'employee_job_4',
        'employee_4',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'img_description_4',
        'img_5',
        'img_description_5',
    ];

}
