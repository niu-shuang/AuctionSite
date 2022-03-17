@extends('base/layout')
@section('content')
<style type="text/css">
    .product-plate {
        width: 100%;
        height: 256px;
        margin-bottom: 100px;
    }

    .product-content{
        display: flex;
        justify-content: left;
    }

    .product-title{
        font-size: 1rem;
    }

    .product-img{
        width: 256px;
        height: 256px;
        border:2px solid black;
        vertical-align: middle;
    }

    .product-img img{
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
    }

    .product-info{
        height: 256px;
        margin-left: 30px;
        font-size: 1rem;
    }
</style>

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <br><br>
        @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
        @endif


        @foreach($products as $product)
        <div class="product-plate">
            <div class="product-title"><p>商品名:      {{$product->product_name}}</p></div>

            <div class="product-content">
                <div class="product-img">
                    <img src='trunk/img/{{$product->thumbnail}}' alt=""/>
                </div>
                <div>
                    <table class="table table-striped product-info">
                        <tr>
                            <td>現在価額:    {{$product->start_price}}円</td>
                        </tr>
                        <tr>
                            <td>即決価額:    {{$product->buyout_price}}円</td>
                        </tr>
                        <tr>
                            <td><a class="nav-link" href="productDetail/{{ $product->id }}">詳細へ</a></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        @endforeach
    </div>
</div>
@endsection
