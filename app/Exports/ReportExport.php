<?php

namespace App\Exports;

use App\projects;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ReportExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      $files = DB::table('projects')
      ->select('projects.id as id','projects.projectID as pid','projects.name as name','projects.nationalID as nid','projects.email as email','projects.mobile as mobile','projects.details as details','projects.specialization as specialization',DB::raw('if(projects.patented=1, "Yes","No") as patented'),'cityt.Country as city','natinalt.Nationality as nainal',DB::raw('avg(rating.rate-1) as total1'),DB::raw('avg(rating.rate2-1) as total2'),DB::raw('avg(rating.rate3-1) as total3'),DB::raw('avg(rating.rate4-1) as total4'),DB::raw('avg(rating.rate5-1) as total5'),DB::raw('SUM(rating.rate-1+rating.rate2-1+rating.rate3-1+rating.rate4-1+rating.rate5-1)/Count(rating.projectID)/5 as total'))
      ->leftJoin('rating', 'projects.id', '=', 'rating.projectID')
      ->leftJoin('_countries as cityt', 'projects.contrary', '=', 'cityt.id')
      ->leftJoin('_countries as natinalt', 'projects.Nationality', '=', 'natinalt.id')
      ->groupBy('id','name','pid','nid','email','mobile','details','specialization','patented','city','nainal')
      ->orderBy('total', 'desc')
      ->limit(30)
      ->get();
      //$files = DB::select(DB::raw('select projects.*,rating.* from projects,rating where projects.id = rating.projectID'));
      return $files;
        //->where('attachments.projetID', '=1')
    }
    public function headings(): array
    {
    return [

        '#',

        'Project ID',

        'Name',

        'National ID',

        'Email',

        'Mobile',

        'Details',

        'Specialization',

        'Patented',

        'Contrary',

        'Nationality',

        'Q1',

        'Q2',

        'Q3',

        'Q4',

        'Q5',

        'Total',

    ];
  }
}
