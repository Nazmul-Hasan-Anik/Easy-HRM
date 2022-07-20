<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [

        'locations_name',
        'locations_country',
        'locations_state',
        'locations_city',
        'locations_address',
        'locations_zip',
        'locations_phone',
        'locations_fax',
        'locations_note',
        'locations_numemp',
    ];
}
