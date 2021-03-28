<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['description', 'image', 'height', 'width', 'length', 'kind', 'order_id'];
//    public function adress()
//    {
//        return $this->hasMany('App\Address');
//    }
    //
}
