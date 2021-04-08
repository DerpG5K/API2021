<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customerId', 'totalPrice', 'isPaid', 'extraInfo'];

    public function packages()
    {
        return $this->hasMany(Parcel::class, 'orderId');
    }
}
