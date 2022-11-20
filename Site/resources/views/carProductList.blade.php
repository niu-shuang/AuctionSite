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
        <iframe width="459" height="816" src="https://www.youtube.com/embed/CuritSGGm08" title="2022年11月20日" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <br>
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
