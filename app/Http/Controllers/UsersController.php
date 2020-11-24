<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rating;
use App\User;
use App\usertype;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
  public function show()
  {
    if(auth()->user()->type!=1)
    {
      return redirect('home/');
    }

    $users = DB::table('users')
    ->select('users.id','users.name','users.email','usertype.level',DB::raw('count(rating.userID) as num'))
    ->leftJoin('usertype', 'users.type', '=', 'usertype.id')
    ->leftJoin('rating', 'users.id', '=', 'rating.userID')
    ->groupBy('users.id','users.name','users.email','usertype.level')
    ->get();

    return view('users')->with('users',$users);

  }
  public function userid($id)
  {
    if(auth()->user()->type!=1)
    {
      return redirect('home/');
    }

    $pros = DB::table('projects')
    ->select('projects.id','projects.ProjectID','projects.name','projects.created_at','rating.rate','rating.rate2','rating.rate3','rating.rate4','rating.rate5')
    ->rightJoin('rating', 'projects.id', '=', 'rating.projectID')
    ->where('rating.userID','=',$id)
    ->get();

    return view('userspro')->with('pros',$pros);
    return $pros;

  }

  public function test()
  {
    return view('test');
  }

}
