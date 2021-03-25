<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const TYPE_PRIVATE = 'private';
    const TYPE_BUSINESS = 'business';

    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'type',
        'phone_number'    
    ];

    protected $hidden = [
        'password'
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
