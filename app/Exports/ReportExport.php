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
      ->select('projects.id as id','projects.projectID as pid','projects.name as name','projects.nationalID as nid','projects.email as email','projects.mobile as mobile','projects.details as details','projects.specialization as specialization',DB::raw('if(projects.patented=1, "Yes","No") as patented'),DB::raw('if(aprovels.aprovel=1, "Yes","No") as Aprovel'),'cityt.Country as city','natinalt.Nationality as nainal',DB::raw('avg(rating.rate-1) as total1'),DB::raw('avg(rating.rate2-1) as total2'),DB::raw('avg(rating.rate3-1) as total3'),DB::raw('avg(rating.rate4-1) as total4'),DB::raw('avg(rating.rate5-1) as total5'),DB::raw('SUM(rating.rate-1+rating.rate2-1+rating.rate3-1+rating.rate4-1+rating.rate5-1)/Count(rating.projectID)/5 as total'),DB::raw('Count(rating.userID) as numb'))
      ->leftJoin('rating', 'projects.id', '=', 'rating.projectID')
      ->leftJoin('_countries as cityt', 'projects.contrary', '=', 'cityt.id')
      ->leftJoin('_countries as natinalt', 'projects.Nationality', '=', 'natinalt.id')
      ->leftJoin('aprovels', 'projects.id', '=', 'aprovels.projectID')
      ->groupBy('id','name','pid','nid','email','mobile','details','specialization','patented','city','nainal','Aprovel')
      ->orderBy('total', 'desc')
      ->get();
      //$files = DB::select(DB::raw('select projects.*,rating.* from projects,rating where projects.id = rating.projectID'));

/*
select projects.id as id,projects.projectID as pid,projects.name as name,projects.nationalID as nid,projects.email as email,projects.mobile as mobile,projects.details as details,projects.specialization as specialization,if(projects.patented=1, "Yes","No") as patented,if(aprovels.aprovel=1, "Yes","No") as Aprovel,cityt.Country as city,natinalt.Nationality as nainal,avg(rating.rate-1) as total1,avg(rating.rate2-1) as total2,avg(rating.rate3-1) as total3,avg(rating.rate4-1) as total4,avg(rating.rate5-1) as total5,SUM(rating.rate-1+rating.rate2-1+rating.rate3-1+rating.rate4-1+rating.rate5-1)/Count(rating.projectID)/5 as total,Count(rating.projectID)/5 as total,Count(rating.userID) as numb
FROM projects
LEFT JOIN rating ON projects.id = rating.projectID
LEFT JOIN _countries as cityt ON projects.contrary = cityt.id
LEFT JOIN _countries as natinalt ON projects.Nationality = natinalt.id
LEFT JOIN aprovels ON projects.id = aprovels.projectID
GROUP BY id,name,pid,nid,email,mobile,details,specialization,patented,city,nainal,Aprovel
ORDER BY total DESC
LIMIT 30
*/
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

        'Aprovel',

        'Contrary',

        'Nationality',

        'Q1',

        'Q2',

        'Q3',

        'Q4',

        'Q5',

        'Total',

        'Raters',

    ];
  }
}
