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
                                            <h5 class="text-primary">عضویت در وینکس</h5>
                                            <p class="text-muted">با عضویت در وینکس کلاد از فضای ابری رایگان وینکس استفاده کنید</p>
                                        </div>

                                        <div class="mt-4">
                                            <form class="needs-validation" method="post" action="{{ route("verify.authenticate") }}">
                                                @csrf
                                                <div class="mb-3">

                                                    <span class="badge bg-success p-2" style="font-size: 1em">
                                                        کد تایید برای شما ارسال شد. لطفا در کادر زیر وارد کنید
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="verification-code" class="form-label">کد تایید <span class="text-danger">*</span></label>
                                                    <input type="text" name="verification-code" class="form-control ltr" id="verification-code" placeholder="کد تایید را وارد کنید" required>
                                                </div>

                                                <div class="mb-4">
                                                    <p class="mb-0 fs-12 text-muted fst-italic">با عضویت در وینکس قوانین و مقررات وینکس کلاد را می‌پذیرید</p>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">ادامه</button>
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
