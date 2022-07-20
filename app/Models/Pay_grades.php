<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay_grades extends Model
{
    use HasFactory;
    protected $fillable = [

        'pay_grade',
        'currency',
        'max_sal',
        'min_sal',
    ];
}
