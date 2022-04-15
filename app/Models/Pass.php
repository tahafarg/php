<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'idcard',
        'carnum',
        'personalImage',
         'driverLicense',
        'carLicense',
        'drugAnalaysis',
        'status'
        
    ];
    function User(){
        return $this->belongsTo(User::class);
    }
    function admin(){
        return $this->belongsTo(admin::class);
    }
    function trip(){
        return $this->belongsTo(trip::class);
    }
}
