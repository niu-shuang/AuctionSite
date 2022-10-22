@extends('base/layout')
@section('content')
@section('title', '株式会社最好')
<!--Modernizr Js-->
<script src="js/modernizr.js"></script>

<body>

<!--Preloader Start-->
<div class="preloader">
    <div class="loader">
        <!--Your Name-->
        <h4>株式会社最好</h4>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--Preloader End-->


<!--Ajax Portfolio Container Start-->
<div class="ajax-portfolio-popup">
    <span class="ajax-loader"></span>

</div>
<!--Ajax Portfolio Container End-->

<!--Jquery JS-->
<script src="js/jquery.min.js"></script>
<!--Plugins JS-->
<script src="js/plugins.min.js"></script>
<!--Site Main JS-->
<script src="js/main.js"></script>
<div class="site-main">
    <ul>
        <li><a href="http://54.250.50.84/carTop"><img src="/img/CarAuction.png"></a></li>
        <li><a href="http://photosite.local/"><img  src="/img/PhotoAuction.png"></a></li>
        <li><a href="http://businesssupport.local/"><img src="/img/M&AAuction.png"></a></li>
    </ul>
</div>

@endsection
