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
        'weight',
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
        'deliveryTypeId',
        'parcelCheckId'];


    public function order()
    {
        return $this->belongsTo(Order::class, 'id', 'orderId');
    }
    public function flight() {
        return $this->hasOne(Flight::class,'id','flightId');
    }
    public function destAddress() {
        return $this->hasOne(Address::class,'id','destAddressId');
    }
    public function depAddress() {
        return $this->hasOne(Address::class,'id','depAddressId');
    }
    public function custom() {
        //return $this->belongsTo(Custom::class, 'parcelId');
        return $this->belongsTo(Custom::class);
    }
    public function deliveryType() {
        return $this->hasOne(DeliveryType::class,'id','deliveryTypeId');
    }
    public function parcelCheck()
    {
        return $this->belongsTo(ParcelCheck::class, 'id', 'parcelId');
        //return $this->belongsTo(ParcelCheck::class, 'id', 'parcelCheckId');
    }
    public function parcelType()
    {
        return $this->hasOne(ParcelType::class, 'id', 'parcelTypeId');
    }
}
