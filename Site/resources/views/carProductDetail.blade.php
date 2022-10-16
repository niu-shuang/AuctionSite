@extends('base/layout')
@section('content')

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="module">
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
<style type="text/css">
    .swiper {
        width: 800px;
        height: 600px;
    }
</style>
<br>

<div class="container content">
    <div class="row">

        <div class="">
            <h2>{{$product->product_name}}</h2>
            <div class="banner">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!--<a class="swiper-slide" href="javascript:void(0)"><img src="img/banner/0.jpg"></a>-->
                        <!--<a class="swiper-slide" href="./notice/detail/335.html"><img src="/img/banner/335.jpg"></a>-->

                        @foreach($product->photoList as $photo)
                        <div class="swiper-slide"><img src="/trunk/img/{{$photo}}"></div>
                        @endforeach

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        <div class="product-info">
            <p>現在価額 : {{ number_format($product->start_price)}}</p>
            <p>即決価格 : {{ number_format($product->buyout_price)}}</p>
        </div>
        <div class="product-align-center">
            <form method="GET" action="{{ route('showCarProductBid') }}">
                <input type="hidden" name="id" value="{{$product->id}}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">入札する</button>
            </form>
        </div>
        <div class="product-info">
            <p>メーカー名 : {{ $product->maker_name}}</p>
            <p>車種名 : {{ $product->car_type_name}}</p>
            <p>年式 : {{ $product->model_year}}年</p>
            <p>排気量 : {{ $product->displacement}}cc</p>
            <p>走行距離 : {{ number_format($product->mile_age) }}km</p>
        </div>
    </div>
</div>
@endsection
