@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2"> الفقرات الرئيسية</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>

                    <li class="breadcrumb-item text-muted">الفقرات الرئيسية</li>


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
                action="{{ route('home-page.update', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title ">
                                <h2 class="text-primary">الفقرة الاولي</h2>
                            </div>
                        </div>
                        <!--begin::Card body-->
                        <div class="card-body pt-0">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label "> العنوان</label>

                                        <input type="text" id="title" value="{{ $row->title }}" name="title"
                                            class="form-control  @error('title') is-invalid @enderror">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row"> <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">التفاصيل</label>
                                    <textarea  class="form-control @error('details') is-invalid @enderror" name="details" rows="3">{{ $row->details }}</textarea>

                                    @error('details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                        </div>
                            <div class="card-header">
                                <div class="card-title ">
                                    <h2 class="text-primary">الفقرة الثانية</h2>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label "> العنوان</label>

                                        <input type="text" id="why_us_title" value="{{ $row->why_us_title }}" name="why_us_title"
                                            class="form-control  @error('why_us_title') is-invalid @enderror">
                                        @error('why_us_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row"> <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">التفاصيل</label>
                                    <textarea  class="form-control @error('why_us_details') is-invalid @enderror" name="why_us_details" rows="3">{{ $row->why_us_details }}</textarea>

                                    @error('why_us_details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center">
                            <!--begin::Button-->
                            {{-- <a href="{{ route('home') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">الغاء</a> --}}
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">حفظ</span>
                                <span class="indicator-progress">يرجي الانتظار...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                    </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
