<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryType extends Model
{
    //
    protected $fillable = [
        'name',
        'bookingBefore',
        'info',
        'priceFactor'];

}
