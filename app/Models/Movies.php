<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table="list_movies";
    public $timestamps=false;
    protected $fillable=[
            'cinema_location_id','list_movies'
    ];
   
}
