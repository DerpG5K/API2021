<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPassword extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'password',
        'customerId'
    ];
}
