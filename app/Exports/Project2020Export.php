<?php

namespace App\Exports;

use App\Project2020;
use Maatwebsite\Excel\Concerns\FromCollection;

class Project2020Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Project2020::all();
    }
}
