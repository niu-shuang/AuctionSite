<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProductBid extends Model
{
    use HasFactory;

    protected  $table = 'car_product_bid';

    protected $fillable = [
        'product_id',
        'user_id',
        'bid_price',
        'is_available',
    ];
}
