<!doctype html>
<html lang="fa" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}">
    <link href="{{ asset("assets/libs/jsvectormap/css/jsvectormap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/libs/swiper/swiper-bundle.min.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("assets/js/layout.js") }}"></script>
    <link href="{{ asset("assets/css/bootstrap-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/app-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />
    @yield("head")
</head>
<body>
<div id="layout-wrapper">
    @include("partials.header")
    @include("partials.sidebar")
    <div class="vertical-overlay"></div>
    <div class="main-content">
        @yield("content")
        @include("partials.footer")
    </div>
</div>

@include("partials.go-up")
@include("partials.preloader")
@include("partials.theme-setting")

<script src="{{ asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/libs/simplebar/simplebar.min.js") }}"></script>
<script src="{{ asset("assets/libs/node-waves/waves.min.js") }}"></script>
<script src="{{ asset("assets/libs/feather-icons/feather.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/plugins/lord-icon-2.1.0.js") }}"></script>
<script src="{{ asset("assets/js/plugins.js") }}"></script>
<script src="{{ asset("assets/libs/apexcharts/apexcharts.min.js") }}"></script>
<script src="{{ asset("assets/libs/jsvectormap/js/jsvectormap.min.js") }}"></script>
<script src="{{ asset("assets/libs/jsvectormap/maps/world-merc.js") }}"></script>
<script src="{{ asset("assets/libs/swiper/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/dashboard-ecommerce.init.js") }}"></script>
<script src="{{ asset("assets/js/app.js") }}"></script>
@yield("script")
</body>
</html>
