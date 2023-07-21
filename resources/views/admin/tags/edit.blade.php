@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">العلامات</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item text-muted">إضافة علامة</li>


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
            action="{{ route('tags.update', $row->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">بيانات العلامة</a>
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
                                        <label class="form-label">  العلامة</label>
                                        <input type="text" id="title" name="text" value="{{ $row->text }}"
                                            maxlength="50" class="form-control  @error('text') is-invalid @enderror">
                                        @error('text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1" {{ $row->type == 1 ? 'checked' : '' }} >
                                        <label class="form-check-label" for="inlineRadio1">منتجات</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="0" {{ $row->type != 1 ? 'checked' : '' }} >
                                        <label class="form-check-label" for="inlineRadio2">أخبار</label>
                                      </div>



                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->


                            <div class="d-flex justify-content-center mt-3">
                                <!--begin::Button-->
                                <a href="{{ route('tags.index') }}" id="kt_ecommerce_add_product_cancel"
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
