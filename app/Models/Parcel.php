<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
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


    public function order()
    {
        return $this->belongsTo(Order::class, 'id');
    }
    public function flight() {
        return $this->hasOne(Flight::class);
    }
    public function destAddress() {
        return $this->hasOne(Address::class,'id','destAddressId');
    }
    public function depAddress() {
        return $this->hasOne(Address::class,'id','depAddressId');
    }
    public function custom() {
        return $this->belongsTo(Custom::class, 'id','customsId');
    }
    public function deliveryType() {
        return $this->hasOne(DeliveryType::class,'id','deliveryTypeId');
    }

}
