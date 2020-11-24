<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\Project2020Export;
use App\Imports\Project2020Import;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('uploadExcel');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new Project2020Export, 'peojects.xlsx');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new Project2020Import,request()->file('file'));
        return back();
    }
}
