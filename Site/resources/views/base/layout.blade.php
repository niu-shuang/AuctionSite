<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
