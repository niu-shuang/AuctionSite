@extends('base/layout')
@section('title', '商品登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
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
            <label for="thumbnail" class="sr-only">サムネイル</label>
            <input type="file" id="thumbnail" name="thumbnail" accept="image/*"/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>
        </form>
    </div>
</div>
@endsection
