<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'stat_place',
        'trip_id',
        'time'
    ];
    protected $hidden =['created_at','updated_at','pivot'];
   // protected $primarykey = 'id';
   
    public function trip(){
        // dd(322);
        return $this->belongsTo(Trip :: class);
    }

    public function book(){
        return $this-> hasMany(Booking:: class); 
    }
}
