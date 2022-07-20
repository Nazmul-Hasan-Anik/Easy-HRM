<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_name',
        'user_role',
        'employee_name',
        'status',
    ];
    public function user(){
      return $this->hasOne(User::class,'id','id');

    }
}
