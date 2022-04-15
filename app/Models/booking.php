<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'user_id',
        'driver_id',
        'status',
        'aces',
        'count',
        'spos_id',
        'espos_id'
       
    ];

    function User(){
        return $this->belongsTo(User::class);
    }
    function driver(){
        return $this->belongsTo(pass::class);
    }
    function trip(){
        return $this->belongsTo(Trip::class);
     }
    function spos(){
        return $this->belongsTo(Station::class);

    } 
    function espos(){
        return $this->belongsTo(Station::class);

    } 
}
