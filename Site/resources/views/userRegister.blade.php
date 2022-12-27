@extends('base/blankLayout')
@section('title', '登録')
@section('content')
<div class="user-login">
    <img src="/img/user_login_logo.jpg">
        <h2>ユーザー新規登録</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">
                <li>{{$error}}</li>
            </ul>
            @endforeach

            <label for="inputName" class="sr-only">Name</label><br>
            <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus><br>
            <label for="inputEmail" class="sr-only">Email address</label><br>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><br>
            <label for="inputPassword" class="sr-only">Password</label><br>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>
            <button class="btn btn-info" type="submit">登録</button>
        </form>
</div>
@endsection
