@extends('base/layout')
@section('content')

<div class="row">
    <div class="">
        <br><br>
        @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
        @endif
        @foreach($products as $product)
        <div class="product-cell">
            <div class="product-img">
                <a href="carProductDetail/{{ $product->id }}"><img src='trunk/img/{{$product->thumbnail}}' alt=""/></a>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection
