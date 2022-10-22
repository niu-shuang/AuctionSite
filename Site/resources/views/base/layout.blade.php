<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!--Main Styles Css-->
    <link rel="stylesheet" href="/css/style-light.css">

    <link rel="stylesheet" href="/css/header.css">
    <script src="/js/app.js" defer></script>
    <!--Site Main JS-->
    <script src="/js/main.js"></script>
</head>
<body>
<header>
    @include('base/header')
</header>

<div class="container content">
    @yield('content')
</div>
<footer class="footer bg-dark  fixed-bottom">
    @include('base/footer')
</footer>
</body>
</html>
