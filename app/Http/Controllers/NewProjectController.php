<?php

namespace App\Http\Controllers;

use App\projects;
use App\attachments;
use App\attachmentstype;
use App\aprovels;
use App\rating;
use App\age;
use App\countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewProjectController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    if(auth()->user()->type==3)
    {
      return redirect('404');
    }

    $collection = collect();
    $recordes = DB::table('projects')
    ->select('attachments.id','attachments.projetID')
    ->leftJoin('aprovels', 'projects.id', '=', 'aprovels.projectID')
    ->rightJoin('attachments', 'projects.id', '=', 'attachments.projetID')
    ->whereNull('aprovels.aprovel')
    ->get();
    //return $recordes[0];

    $i = 0;
    foreach ($recordes as $recorde)
    {
      //$collection[$recorde->projetID]=0;
      if($collection->has($recorde->projetID))
      {
        $collection[$recorde->projetID]+=[$i=>$recorde->id];
      }
      else
      {
        $i = 0;
        $collection->put($recorde->projetID, [$i=>$recorde->id]);
      }
      $i++;
    }

    //return $collection;

    $recordes = DB::table('projects')
    ->select('projects.id','projects.name','projects.details','projects.created_at')
    ->leftJoin('aprovels', 'projects.id', '=', 'aprovels.projectID')
    ->whereNull('aprovels.aprovel')
    ->get();
    return view('projects',['recordes' => $recordes,'collection' => $collection]);
  }

  public function ratings()
  {
    if(auth()->user()->type==2)
    {
      return redirect('404');
    }
    $user_id=auth()->user()->id;

    $collection = collect();
    $recordes = DB::select( DB::raw("SELECT `attachments`.`id`,`attachments`.`projetID` FROM `projects`
    LEFT JOIN `aprovels` on `projects`.`id` = `aprovels`.`projectID`
    RIGHT JOIN `attachments` on `projects`.`id` = `attachments`.`projetID`
    WHERE `projects`.`id` NOT IN(SELECT `projectID` FROM rating WHERE `rating`.`userID` = '$user_id' )
    AND `aprovels`.`aprovel`=1") );
     //return $recordes[0];
     $i = 0;
     foreach ($recordes as $recorde)
     {
       //$collection[$recorde->projetID]=0;
       if($collection->has($recorde->projetID))
       {
         $collection[$recorde->projetID]+=[$i=>$recorde->id];
       }
       else
       {
         $i = 0;
         $collection->put($recorde->projetID, [$i=>$recorde->id]);
       }
       $i++;
     }
     //return $collection;

    $recordes = DB::select( DB::raw("SELECT `projects`.`id`,`projects`.`name`,`projects`.`details`,`projects`.`created_at` FROM `projects`
LEFT JOIN `aprovels` on `projects`.`id` = `aprovels`.`projectID`
WHERE `projects`.`id` NOT IN(SELECT `projectID` FROM rating WHERE `rating`.`userID` = '$user_id' )
AND `aprovels`.`aprovel`=1") );
   //return $recordes;
    return view('rating',['recordes' => $recordes,'collection' => $collection]);
  }

  public function newproject()
  {
    //'r.ProjectID','r.name','r.nationalID','r.email','r.mobile','r.details','r.specialization',

    //$filename = 'YaserAljedaie.pdf';
    //return response()->download(storage_path('app/public/attachments/' . $filename));
    $age = age::all();
    $city = countries::all();

    return view('newproject',['age' => $age,'city' => $city]);
  }

  public function aprove(Request $request)
  {
    $post = new aprovels;
    $post->userID  = auth()->user()->id;
    $post->projectID = $request->id;
    $post->aprovel = $request->message;
    $post->save();

    $response = array(
     'status' => 'success',
     'msg' => $request->message,
     'id' => $request->id,
   );
 return response()->json($response);
  }
  public function rate(Request $request)
  {
    $post = new rating;
    $post->userID = auth()->user()->id;
    $post->projectID = $request->id;
    $post->rate = $request->rate;
    $post->rate2 = $request->rate2;
    $post->rate3 = $request->rate3;
    $post->rate4 = $request->rate4;
    $post->rate5 = $request->rate5;
    $post->save();

    $response = array(
     'status' => 'success',
     'msg' => $request->rate,
     'id' => $request->id,
   );
 return response()->json($response);
  }


  public function create(Request $request)
  {
  //return $request;
  $post = new projects;
  $post->projectID = $request->projectID;
  $post->name = $request->name;
  $post->nationalID = $request->nationalID;
  $post->email = $request->email;
  $post->mobile = $request->mobile;
  $post->contrary = $request->contrary;
  $post->nationality = $request->nationality;
  $post->specialization = $request->specialization;
  $post->patented = $request->patented;
  $post->details  = $request->details;
  $post->createrID  = auth()->user()->id;
  $post->save();
  $lastid = $post->id;

  return redirect('upload/'.$lastid);
  //Route::put('upload/11', 'UploadController@index');
  //
  // return $request;
  }
}
