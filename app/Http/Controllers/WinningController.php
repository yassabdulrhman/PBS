<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

class WinningController extends Controller
{
  public function index()
  {
  return view('winning');
  }
  public function project()
  {
    $filename = '028faecf.pdf';
    $path = storage_path('app/public/attachments/32/'.$filename);

    return Response::make(file_get_contents($path), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"'
  ]);
  }
}
