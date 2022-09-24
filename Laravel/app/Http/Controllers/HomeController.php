<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductBid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DateTime;

class HomeController extends Controller
{
    public  function show()
    {
        return view("home");
    }

    /**
     * @return view
     */
    public function showList()
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

        return view("productList",['products' => $products]);
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
        $photoList = array($product->thumbnail);
        $split = explode(";",$product->photos);
        foreach ($split as $item) {
            if($item != "")
                $photoList[] = $item;
        }
        $product->photoList = $photoList;
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
                'bid_error' =>'入札金額が現在価格より低いです！',
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
