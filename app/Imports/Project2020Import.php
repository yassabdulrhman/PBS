<?php

namespace App\Imports;

use App\Project2020;
use Maatwebsite\Excel\Concerns\ToModel;

class Project2020Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project2020([
            'govid'    => $row[10],
        'name_ar'    => $row[11],
        'name_en'    => $row[12],
        'age'    => $row[13],
        'saudi_owner'    => true,
        'employess_num'    => $row[15],
        'incomes'    => $row[16],
        'username'    => $row[17],
        'job_title'    => $row[18],
        'mobile'    => 123,
        'email'    => $row[20],
        'dropdown1'    => $row[21],
        'dropdown2'    => $row[22],
        'dropdown3'    => $row[23],
        'dropdown4'    => $row[24],
        'dropdown5'    => $row[25],
        'dropdown6'    => $row[26],
        'dropdown7'    => $row[27],
        'dropdown8'    => $row[28],
        'dropdown9'    => $row[29],
        'checkbox1'    => $row[30] === "X" ? true : false ,
        'checkbox2'    => $row[31] === "X" ? true : false ,
        'checkbox3'    => $row[32] === "X" ? true : false ,
        'checkbox4'    => $row[33] === "X" ? true : false ,
        'checkbox5'    => $row[34] === "X" ? true : false ,
        'checkbox6'    => $row[35] === "X" ? true : false ,
        'checkbox7'    => $row[36] === "X" ? true : false ,
        'checkbox8'    => $row[37] === "X" ? true : false
        ]);
    }
}
