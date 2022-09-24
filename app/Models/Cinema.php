<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
USE Request;

class Cinema extends Model
{
    use HasFactory;
    protected $table="cinema";
    public $timestamps=false;
    protected $fillable=[
            'cinema_location',
    ];
   public static function fetchCinema()
   {
    $tablefetch=DB::table('cinema')
    ->get();
    if(($tablefetch->count()) > 0)
{     
return  $tablefetch;
        
 }
 else{
  $alldata=([
    'error'=> "No Data Available"
    ]);
  }
}
   
      
   
}
