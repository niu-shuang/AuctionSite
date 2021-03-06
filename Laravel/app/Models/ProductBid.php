<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBid extends Model
{
    use HasFactory;

    protected  $table = 'product_bid';

    protected $fillable = [
        'product_id',
        'user_id',
        'bid_price',
        'is_available',
    ];
}
