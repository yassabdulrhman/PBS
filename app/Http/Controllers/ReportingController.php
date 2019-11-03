<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportingController extends Controller
{
  public function export()
  {
    if(auth()->user()->type==1)
    {
      return Excel::download(new ReportExport, 'report.xlsx');
    }
    else {
      return redirect('404');
    }

  }
}
