@extends('base/layout')
@section('title', '商品登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <h2>商品登録</h2>
        <form method="POST" action="{{ route('registerProduct') }}" enctype="multipart/form-data">
            @csrf
            @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">
                <li>{{$error}}</li>
            </ul>
            @endforeach

            <label for="product_name" class="sr-only">商品名</label>
            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Product Name" required autofocus>
            <label for="start_price" class="sr-only">初期価格</label>
            <input type="number" id="start_price" name="start_price" class="form-control" required autofocus>
            <label for="buyout_price" class="sr-only">即決価格</label>
            <input type="number" id="buyout_price" name="buyout_price" class="form-control" required>
            <label for="maker_name" class="sr-only">メーカー名</label>
            <input type="text" id="maker_name" name="maker_name" class="form-control" placeholder="Maker Name" required>
            <label for="car_type_name" class="sr-only">車種名</label>
            <input type="text" id="car_type_name" name="car_type_name" class="form-control" placeholder="Car Type Name" required>
            <label for="model_year" class="sr-only">年式</label>
            <input type="number" id="model_year" name="model_year" class="form-control" required>
            <label for="displacement" class="sr-only">排気量</label>
            <input type="number" id="displacement" name="displacement" class="form-control" required>
            <label for="mile_age" class="sr-only">走行距離</label>
            <input type="number" id="mile_age" name="mile_age" class="form-control" required>
            <label for="body_color" class="sr-only">車体カラー</label>
            <input type="text" id="body_color" name="body_color" class="form-control" required>
            <input type="checkbox" id="has_repaired" name="has_repaired" value="1" {{ old('has_repaired') == '1' ? 'checked' : '' }}>
            <label for="has_repaired">修復歴あり</label><br>
            <label for="thumbnail" class="sr-only">サムネイル</label>
            <input type="file" id="thumbnail" name="thumbnail" accept="image/*"/><br>
            <label for="photo1" class="sr-only">写真1</label><br>
            <input type="file" id="photo1" name="photo1" accept="image/*"/><br>
            <label for="photo2" class="sr-only">写真2</label><br>
            <input type="file" id="photo2" name="photo2" accept="image/*"/><br>
            <label for="photo3" class="sr-only">写真3</label><br>
            <input type="file" id="photo3" name="photo3" accept="image/*"/><br>
            <label for="photo4" class="sr-only">写真4</label><br>
            <input type="file" id="photo4" name="photo4" accept="image/*"/><br>
            <label for="photo5" class="sr-only">写真5</label><br>
            <input type="file" id="photo5" name="photo5" accept="image/*"/><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>
        </form>
    </div>
</div>
@endsection
