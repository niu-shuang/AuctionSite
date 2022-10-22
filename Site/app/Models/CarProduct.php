<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProduct extends Model
{
    use HasFactory;

    protected  $table = 'car_products';

    protected $fillable = [
        'product_name',
        'thumbnail',
        'start_price',
        'buyout_price',
        'photos'
    ];
}
