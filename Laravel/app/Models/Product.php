<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $table = 'products';

    protected $fillable = [
        'product_name',
        'thumbnail',
        'start_price',
        'buyout_price',
        'maker_name',
        'car_type_name',
        'model_year',
        'displacement',
        'mile_age',
        'has_repaired',
        'body_color'
    ];
}
