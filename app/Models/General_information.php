<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_information extends Model
{
    use HasFactory;
    protected $fillable = [

        'org_name',
        'emp_num',
        'phone',
        'email',
        'add_str1',
        'add_str2',
        'city',
        'zip_code',
        'note',
        'tax_id',
        'reg_num',
        'fax',
        'state',
        'country',
        
    ];
}
