<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Oregon - Multipurpose eCommerce Bootstrap 5 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="{{ asset('public/frontend/assets/css/vendor.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('public/frontend/assets/css/style.css') }}" rel="stylesheet">
    {{--  <link href="{{ asset('public/frontend/assets/css/style-2.css') }}" rel="stylesheet">  --}}



</head>

<body>


    @include('shop.layouts.header');
    @yield('content');
    @include('shop.layouts.footer');






    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- All vendor & plugins & active js include here -->
    <!--All Vendor Js -->
    <script src="{{ asset('public/frontend/assets/js/vendor.js') }}"></script>
    <!-- Active Js -->
    <script src="{{ asset('public/frontend/assets/js/active.js') }}"></script>
</body>



</html>
