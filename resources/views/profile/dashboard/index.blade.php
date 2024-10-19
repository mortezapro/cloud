@extends("layouts.velzon-panel")
@section("head")
    <title>داشبورد | وینکس کلاد</title>
    <meta content="داشبورد | وینکس کلاد" name="description" />

@endsection
@section("content")
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">داشبورد</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">داشبورد</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-5">
                    <div class="d-flex flex-column h-100">
                        <div class="row h-100">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle text-warning me-2 icon-sm"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                            <div class="flex-grow-1 text-truncate">
                                                اعتبار حساب شما <b>17</b> روز آینده به پایان می‌رسد.
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="pages-pricing.html" class="text-reset text-decoration-underline"><b>خرید اشتراک</b></a>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-sm-8">
                                                <div class="p-3">
                                                    <p class="fs-16 lh-base">
                                                        <i class="mdi mdi-arrow-left"></i>
                                                        کاربر گرامی، برای استفاده از فضای ابری دائمی وینکس، می‌توانید با استفاده از لینک زیر اشتراک تهیه کنید.
                                                    </p>
                                                    <div class="mt-3">
                                                        <a href="pages-pricing.html" class="btn btn-success waves-effect waves-light">خرید اشتراک</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="px-3">
                                                    <img src="{{ asset("assets/images/user-illustarator-2.png") }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">کل اسناد</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="2460"></span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                                            </span> رشد نسبت به ماه گذشته</p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-primary rounded-circle fs-2">
                                                                <i class="ri-folder-2-line"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">تصاویر</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="1540"></span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                                <i class="ri-arrow-down-line align-middle"></i> 3.96 %
                                                            </span> رشد نسبت به ماه گذشته</p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger rounded-circle fs-2">
                                                        <i class="ri-folder-image-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">فایل ویئویی</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="360"></span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                                <i class="ri-arrow-down-line align-middle"></i> 0.24 %
                                                            </span> کاهش نسبت به ماه گذشته</p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning rounded-circle fs-2">
                                                        <i class="ri-folder-video-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="fw-medium text-muted mb-0">دیگر اسناد</p>
                                                <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="560"></span></h2>
                                                <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 %
                                                            </span> افزایش نسبت به ماه گذشته</p>
                                            </div>
                                            <div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success rounded-circle fs-2">
                                                        <i class="ri-folder-unknow-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">گزارش عملکرد</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                    کل
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                    ماهانه
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                    6 ماه گذشته
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                    سالانه
                                </button>
                            </div>
                        </div>
                        <div class="card-header p-0 border-0 bg-light-subtle">
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-4">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="1000"></span> مگابایت</h5>
                                        <p class="text-muted mb-0">ظرفیت کل</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="530"></span> مگابایت</h5>
                                        <p class="text-muted mb-0">فضای استفاده شده</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="367">284</span></h5>
                                        <p class="text-muted mb-0">پرونده‌ها</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0 pb-2">
                            <div class="w-100">
                                <div id="customer_impression_charts" data-colors='["--vz-success", "--vz-primary", "--vz-danger"]' class="apex-charts" dir="rtl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
@endsection
