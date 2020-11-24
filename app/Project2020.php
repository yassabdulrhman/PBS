<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project2020 extends Model
{
    protected $table = 'project2020';

    public $fillable = [
        'govid',
        'name_ar',
        'name_en',
        'age',
        'saudi_owner',
        'employess_num',
        'incomes',
        'username',
        'job_title',
        'mobile',
        'email',
        'dropdown1',
        'dropdown2',
        'dropdown3',
        'dropdown4',
        'dropdown5',
        'dropdown6',
        'dropdown7',
        'dropdown8',
        'dropdown9',
        'checkbox1',
        'checkbox2',
        'checkbox3',
        'checkbox4',
        'checkbox5',
        'checkbox6',
        'checkbox7',
        'checkbox8'];
}
