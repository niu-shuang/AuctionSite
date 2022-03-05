@extends('base/layout')
@section('title', 'ログイン')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ユーザーログイン</h2>
        <form method="POST" action="{{ route('checkLogin') }}" onSubmit="return true">
            @csrf
            <div class="form-group">
                <label for="userName">
                    ユーザー名
                </label>
                <input
                    id="userName"
                    name="userName"
                    class="form-control"
                    value="{{ old('userName') }}"
                    type="text"
                >
                @if ($errors->has('userName'))
                <div class="text-danger">
                    {{ $errors->first('userName') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">
                    パスワード
                </label>
                <input
                    id="password"
                    name="password"
                    class="form-control"
                    value=""
                    type="text"
                >
                @if ($errors->has('password'))
                    <div class="text-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('all') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    ログイン
                </button>
            </div>
        </form>
        <div class="mt-5">
            <a class="btn btn-primary" href="{{ route('all') }}">
                ユーザー登録
            </a>
        </div>
    </div>
</div>
@endsection
