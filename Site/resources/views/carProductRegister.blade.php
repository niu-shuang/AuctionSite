@extends('base/layout')
@section('title', '商品登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <h2>商品登録</h2>
        <form method="POST" action="{{ route('registerCarProduct') }}" enctype="multipart/form-data">
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
