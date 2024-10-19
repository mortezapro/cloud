<!doctype html>
<html lang="fa" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-bs-theme="dark" data-body-image="img-1" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}">
    <script src="{{ asset("assets/js/layout.js") }}"></script>
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/app.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />
</head>

<body class="rtl">
@yield("content")

<script src="{{ asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assets/libs/simplebar/simplebar.min.js") }}"></script>
<script src="{{ asset("assets/libs/node-waves/waves.min.js") }}"></script>
<script src="{{ asset("assets/libs/feather-icons/feather.min.js") }}"></script>
<script src="{{ asset("assets/js/pages/plugins/lord-icon-2.1.0.js") }}"></script>
<script src="{{ asset("assets/js/plugins.js") }}"></script>
<script src="{{ asset("assets/js/pages/form-validation.init.js") }}"></script>
<script src="{{ asset("assets/js/pages/passowrd-create.init.js") }}"></script>
</body>
</html>
