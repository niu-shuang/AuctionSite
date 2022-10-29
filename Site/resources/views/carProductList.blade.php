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
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/TuXdYwibxwQ" title="【人気キャンプ車5選】ランクルプラドにジープラングラーなど🚗アウトドアおすすめ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
