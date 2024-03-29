<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absences extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'employeeID',
        'startDate',
        'endDate',
        'reason'
    ];
}
