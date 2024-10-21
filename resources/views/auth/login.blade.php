@extends("layouts.velzon-auth")
@section("head")
    <title>عضویت | فضای ابری وینکس</title>
@endsection
@section("content")
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden m-0 card-bg-fill border-0 card-border-effect-none">
                            <div class="row justify-content-center g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="{{ asset("assets/images/logo-light.png") }}" alt="" height="18">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">عضویت/ورود در وینکس</h5>
                                            <p class="text-muted">با عضویت در وینکس کلاد از فضای ابری رایگان وینکس استفاده کنید</p>
                                        </div>

                                        <div class="mt-4">
                                            @session("user-exist")
                                                <div class="alert bg-danger text-white">
                                                    شماره موبایل وارد شده قبلا ثبت شده است!
                                                </div>
                                            @endsession
                                            @if(isset($mismatch))
                                                <span class="badge bg-danger p-2 mb-3" style="font-size: 1em">
                                                    کد وارد شده اشتباه است. لطفا مجددا تلاش کنید
                                                </span>
                                            @endif
                                            <form class="needs-validation" method="post" action="{{ route("send.Authenticate.code") }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="mobile" class="form-label">تلفن همراه <span class="text-danger">*</span></label>
                                                    <input type="text" name="mobile" class="form-control ltr" id="mobile" placeholder="تلفن همراه خود را وارد کنید" required>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">با عضویت در وینکس قوانین و مقررات وینکس کلاد را می‌پذیرید</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">عضویت</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title text-muted">عضویت با</h5>
                                                    </div>

                                                    <div class="btn-auth-socials">
                                                        <button type="button" class="btn btn-google  waves-effect waves-light"><i class="ri-google-fill me-1 fs-16"></i> گوگل</button>
                                                        <button type="button" class="btn btn-github waves-effect waves-light"><i class="ri-github-fill me-1 fs-16"></i>گیتهاب</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">قبلا عضو سایت شده‌اید؟ <a href="auth-signin-cover.html" class="fw-semibold text-primary text-decoration-underline"> ورود</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
