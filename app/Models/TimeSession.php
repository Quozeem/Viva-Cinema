<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSession extends Model
{
    use HasFactory;
    protected $table="show_time";
    public $timestamps=false;
    protected $fillable=[
            'list_movies_id','time_from','time_to'
            ,'date'
    ];
}
