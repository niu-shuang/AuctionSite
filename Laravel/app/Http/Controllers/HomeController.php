<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductBid;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return view
     */
    public function show()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $bid_results = ProductBid::where('product_id','=',$product->id)
                            ->orderby('bid_price','desc')->get();
            if(count($bid_results) > 0)
            {
                $high_price = $bid_results[0]['bid_price'];
                $product->start_price = $high_price;
            }
        }

        return view("home",['products' => $products]);
    }

    /**
     * @return view
     */
    public function showDetail($id){
        $product = Product::find($id);
        $bid_results = ProductBid::where('product_id','=',$product->id)
            ->orderby('bid_price','desc')->get();
        if(count($bid_results) > 0)
        {
            $high_price = $bid_results[0]['bid_price'];
            $product->start_price = $high_price;
        }
        $product->model_year = \DateTime::createFromFormat("Y-m-d", $product->model_year);
        $product->model_year = $product->model_year->format("Y");
        return view("productDetail",['product' => $product]);
    }

    /**
     * @return view
     */
    public function showProductBid(Request $request){
        $input = $request->all();
        $product = Product::find($input['id']);
        $bid_results = ProductBid::where('product_id','=',$product->id)
            ->orderby('bid_price','desc')->get();
        if(count($bid_results) > 0)
        {
            $high_price = $bid_results[0]['bid_price'];
            $product->start_price = $high_price;
        }
        return view("productBid",['product' => $product]);
    }

    /**
     * @return view
     */
    public  function checkProductBid(Request $request)
    {
        $input = $request->all();
        $product = Product::find($input['product_id']);
        $high_price = $product->start_price;
        $bid_results = ProductBid::where('product_id','=',$product->id)
            ->orderby('bid_price','desc')->get();
        if(count($bid_results) > 0)
        {
            $high_price = $bid_results[0]['bid_price'];
            $product->start_price = $high_price;
        }

        if($high_price >= $input['bid_price'])
        {
            return back()->withErrors([
                'bid_error' =>'????????????????????????????????????????????????',
            ]);
        }
        $bidInfo = [
            'product_id'=>$product->id,
            'user_id'=> Auth::user()->id,
            'bid_price'=>$input['bid_price'],
            'is_available'=>True
        ];
        \DB::beginTransaction();
        try{
            ProductBid::create($bidInfo);
            \DB::commit();
        }catch (\Throwable $e)
        {
            \DB::rollback();
            abort(500);
        }
        $product->start_price = $input['bid_price'];
        return view("productDetail",['product' => $product]);
    }
}
