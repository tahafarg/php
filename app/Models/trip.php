<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        's_time',
        'e_time',
        'spos',
        'epos',
        'price',
        'status',
        'driver_id'
    ];
    protected $hidden =['created_at','updated_at','pivot'];
    public function stations(){
        return $this->hasMany(Station :: class);
    }
    public function driver(){
        return $this->belongsTo(Pass :: class);
    }
    public function books(){
        return $this-> hasMany(Booking :: class);
    }
}
