<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //
    protected $fillable = [
        'trackingNumber',
        'height',
        'width',
        'length',
        'flightId',
        'depAddressId',
        'priority',
        'destAddressId',
        'customsId',
        'departureTimeStamp',
        'arrivalTimeStamp',
        'isAllocated',
        'insurance',
        'orderId',
        'deliveryTypeId'];

//    public function depAdress(){
//           return $this->hasOne('App\Address');
//    }
//    public function arrivalAdress(){
//           return $this->hasOne('App\Address');
//    }
//    public function deliveryType(){
//           return $this->hasMany('App\DeliveryType');
//    }
}
