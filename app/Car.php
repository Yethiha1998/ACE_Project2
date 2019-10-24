<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
    'car_id',
    'owner_id',
    'brand',
    'name',
    'type',
    'price',
    'status',
    'image1',
    'image2',
    'image3',
    ];
}
