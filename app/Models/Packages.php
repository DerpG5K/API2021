<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable =  [
        'id',
        'Tracking_Nr',
        'weight',
        'width',
        'height',
        'length',
        'FlightID',
        'Dep_Address',
        'Dep_Nr',
        'Dep_zip',
        'Dep_Country',
        'priority',
        'delievered'
    ];
}
