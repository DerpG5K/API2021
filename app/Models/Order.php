<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the Customer that owns the Order.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
