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
		<br>
		<br>
        <div class="site-main">
            <ul>
                <li><a href="http://auction.local/productList"><img src="/img/August.png"></a></li>
                <li><a href="http://auction.local/productList"><img  src="/img/September.png"></a></li>
                <li><img src="/img/October.png"></li>
            </ul>
        </div>
    </div>
</div>
@endsection
