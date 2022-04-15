<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pass_id',

       
    ];
    function User(){
        return $this->belongsTo(User::class);
    }
    function pass(){
        return $this->belongsTo(pass::class);
    }
}
