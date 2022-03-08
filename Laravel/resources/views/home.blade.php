@extends('base/layout')
@section('content')
<p>Welcome : {{ Auth::user()->name }}</p>
@endsection
