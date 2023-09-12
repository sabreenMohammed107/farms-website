@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">الوظائف</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item text-muted">الوظائف</li>


                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->

        </div>
    </div>
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">

            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">بيانات الوظيفة</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_comments">Comments</a>
                        </li> --}}

                    </ul>
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">

                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">




                                    <div class="mb-3">
                                        <label class="form-label"> الوظيفة</label>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                                            maxlength="50" class="form-control  @error('title') is-invalid @enderror">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
  <!--begin::Input group-->
  <div class="mb-10 fv-row">
    <!--begin::Label-->
    <label class=" form-label"> تاريخ إعلان الوظيفة</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control  form-control-solid dPick @error('start_date') is-invalid @enderror" name="start_date"
        value="{{ old('start_date') }}" placeholder=" تاريخ الإعلان" id="kt_datepicker_3" />
        @error('start_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


</div>
<!--end::Input-->
<!--begin::Input group-->
<div class="mb-10 fv-row">
    <!--begin::Label-->
    <label class=" form-label"> تاريخ إنتهاء إعلان الوظيفة</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input class="form-control  form-control-solid dPick @error('end_date') is-invalid @enderror" name="end_date"
        value="{{ old('end_date') }}" placeholder="تاريخ الإنتهاء " id="kt_datepicker_4" />
        @error('end_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror


</div>
<!--end::Input-->


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label"> التفاصيل</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <textarea class=" form-control" name="details">{{ old('details') }} </textarea>

                                        <!--end::Editor-->

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"> البريد الإلكتروني</label>
                                        <input type="email" id="title" name="email" value="{{ old('email') }}"
                                            maxlength="50" class="form-control  @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->


                            <div class="d-flex justify-content-center mt-3">
                                <!--begin::Button-->
                                <a href="{{ route('jobs.index') }}" id="kt_ecommerce_add_product_cancel"
                                    class="btn btn-light me-5" style="background: #eee">رجوع</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                    <span class="indicator-label">حفظ</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>


                        {{-- start 2 tab --}}

                    </div>
                    <!--end::Main column-->
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(".dPick").flatpickr();
            $("#kt_datepicker_3").flatpickr();
            $("#kt_datepicker_4").flatpickr();
        });
    </script>
@endsection
