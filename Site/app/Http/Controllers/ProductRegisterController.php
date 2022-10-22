<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarProduct;

class ProductRegisterController extends Controller
{
    //
    public function registerCarProduct(Request $request)
    {
        $inputs = $request->all();
        $start_price = $request->start_price;
        $buyout_price = $request->buyout_price;
        if($buyout_price < $start_price)
        {
            return back()->withErrors(['err_msg'=>'即決価格が初期価格より低い']);
        }
        $inputs['photos'] = "";
        if($file = $request->thumbnail)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['thumbnail']=$fileName;
        }
        else
        {
            return back()->withErrors(['err_msg'=>'ファイルが正しくアップロードしませんでした']);
        }

        if($file = $request->photo1)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['photos'].=$fileName;
            $inputs['photos'].=';';
        }

        if($file = $request->photo2)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['photos'].=$fileName;
            $inputs['photos'].=';';
        }

        if($file = $request->photo3)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['photos'].=$fileName;
            $inputs['photos'].=';';
        }

        if($file = $request->photo4)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['photos'].=$fileName;
            $inputs['photos'].=';';
        }

        if($file = $request->photo5)
        {
            $fileName = time().$file->getClientOriginalName();
            $target_path = public_path('trunk/img/');
            $file->move($target_path, $fileName);
            $inputs['photos'].=$fileName;
            $inputs['photos'].=';';
        }


        if( !array_key_exists('has_repaired', $inputs)){
            $inputs['has_repaired'] = 0;
        }

        \DB::beginTransaction();
        try{
            CarProduct::create($inputs);
            \DB::commit();
        }catch(\Throwable $e)
        {
            echo $e->getMessage();
            \DB::rollback();
            abort(500);
        }
        return redirect('carProductRegister')->with('upload_success','アップロード成功しました');
    }

    public function showCar()
    {
        return view('carProductRegister');
    }
}
