<?php

namespace App\Http\Controllers;
use App\Models\Cinema;
use App\Models\User;
use App\Models\Movies;
use App\Models\TimeSession;
 use DB;
use Auth;
use Illuminate\Http\Request;

class CinemasController extends Controller
{
  public function cinemasCategories()
  {
    $fetchcinema=Cinema::fetchCinema();
    return view('welcome',['available_cinema'=> $fetchcinema]);
  }
  public function addMovies()
  {
    $fetchcinema=Cinema::fetchCinema();
    return view('addMovies',['available_cinema'=> $fetchcinema]);
  }
  public function adminCategories()
  {
  
    return view('admin');

  }
  public function cinema_location(Request $request)
  {
    $cinema_location=$request->all();
    Cinema::create( $cinema_location);
    return redirect()->back();
  }
  public function admin_categories_cinema(Request $request)
  {
    
    if(count($request->cinema_location_id) > 0)
    {
     foreach($request->cinema_location_id as $values)
     {
       $data= array(
        'cinema_location_id'=>$values,
        'list_movies'=>$request->list_movies,
    
       );
       $user=Movies::create($data);
      } 
    }
return redirect()->back();
  }
  public function insert_timeMovies(Request $request)
  {
    $insert_data=$request->all();
    TimeSession::create($insert_data);
    return redirect()->back();
  }
  public function admin_addTime_cinema()
  {
    $fetchcinema=Cinema::fetchCinema();
    return view('/addTime',['available_cinema'
=> $fetchcinema]);
  }
  public function getmovieslist($getmovieslist)
  {
    $listMovies=DB::table('list_movies')
      ->where('cinema_location_id','=',$getmovieslist)
      ->get();
      if( $listMovies->count() > 0)
      {
        return response()->json( $listMovies); 
      }
return "Not Available";
   
  }
  public function getmoviestime($movies_time_id)
  {
    $MoviesTime=DB::table('show_time')
      ->where('list_movies_id','=',$movies_time_id)
      ->get();
      if( $MoviesTime->count() > 0)
      {
        return response()->json( $MoviesTime); 
      }
return response()->json("Not Available");
   
  }
}
