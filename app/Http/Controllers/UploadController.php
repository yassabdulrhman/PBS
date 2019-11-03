<?php

namespace App\Http\Controllers;
use App\projects;
use App\attachments;
use App\attachmentstype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use App\Http\Controllers\Route;


class UploadController extends Controller
{
  public function index($id)
  {
    $files = DB::table('attachments')
    ->select('attachments.id','attachments.projetID','attachments.filename','attachments.created_at','attachmentstype.type')
    ->leftJoin('attachmentstype', 'attachments.filetype', '=', 'attachmentstype.id')
    ->where('attachments.projetID', '=',$id)
    ->get();

    $types = attachmentstype::all();

    return view('upload',['files' => $files,'types' => $types,'id'=>$id]);

  }
  public function upload(Request $request)
  {

foreach ($request->file as $file) {
  $filename = $file->getClientOriginalName();
  $file->storeAs('attachments/'.$request->pro_id,$filename);
  $fileModel = new attachments;
  $fileModel->projetID = $request->pro_id;
  $fileModel->filetype = $request->type;
  $fileModel->filename = $filename;
  $fileModel->save();
}
return redirect('upload/'.$request->pro_id);
  }

  public function download($id)
  {
    $file = DB::table('attachments')
    ->select('attachments.id','attachments.projetID','attachments.filename')
    ->where('attachments.id', '=',$id)
    ->get();
return response()->download(storage_path('app/public/attachments/'.$file[0]->projetID.'/'.$file[0]->filename));
  }
}
