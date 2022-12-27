@extends('base/blankLayout')
@section('title', 'ログイン')
@section('content')
<div class="user-login">
    <img src="/img/user_login_logo.jpg">
    <h2>ここから先はユーザー登録が必要です</h2>
    <h3>ユーザーIDをお持ちの方</h3>
    <form method="POST" action="{{ route('checkUserLogin') }}">
        @csrf
        @foreach ($errors->all() as $error)
        <ul class="alert alert-danger">
            <li>{{$error}}</li>
        </ul>
        @endforeach
        <label for="inputEmail" class="sr-only">Email address</label><br>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label><br>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>
        <button class="btn btn-info" type="submit">ログイン</button>
    </form>
    <div class="mt-5">
        <a class="btn btn-info" href="{{ route('userRegister') }}">
            ユーザー登録
        </a>
    </div>
</div>
@endsection
