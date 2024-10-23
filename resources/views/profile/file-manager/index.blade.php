@extends("layouts.velzon-panel")
@section("head")
    <title>داشبورد | وینکس کلاد</title>
    <meta content="داشبورد | وینکس کلاد" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <style>
        .fm-navbar .col-auto>.btn-group:not(:last-child){
            margin-right:0!important;
            margin-left: 0.4rem;
        }
    </style>
@endsection
@section("content")

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
{{--                    <div id="file-manager-root"></div>--}}
{{--                    <div id="fm" style=""></div>--}}
                    <div id="fm" style="height: 600px;">
                        <div id="fm-main-block">
                            <file-manager
                                :config="{
                baseUrl: '/file-manager',
                windowsConfig: {
                    path: '/private',
                    disk: 'user_files'
                }
            }"
                            ></file-manager>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

@endsection
