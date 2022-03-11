<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * @return view
     */
    public function show()
    {
        $products = Product::all();
        return view("home",['products' => $products]);
    }
}
