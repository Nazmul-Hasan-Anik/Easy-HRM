<?php

namespace App\Models;

use App\Models\Structure;
use App\Models\Job_Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname','lastname',
        'email','phone',
        'dept_name','job_Category_name','avatar',
    ];
    public function department(){
        return $this->belongsTo(Structure::class);
    }

    public function designation(){
        return $this->belongsTo(Job_Category::class);
    }
}
