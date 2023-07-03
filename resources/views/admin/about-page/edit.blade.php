@extends('layout.main')

@section('breadcrumb')
<div class="toolbar" id="kt_toolbar">
    <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder my-1 fs-2">من نحن</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-bold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('home') }}" class="text-muted text-hover-primary">الرئيسية</a>
                </li>

                <li class="breadcrumb-item text-muted">من نحن</li>


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
                action="{{ route('about-page.update', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    {{-- <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">General</a>
                        </li>


                    </ul> --}}
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    {{-- <div class="card-title">
                                        <h2>General</h2>
                                    </div> --}}
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">




                                    <div class="mb-3">
                                        <label class="form-label">عنوان فقرة من نحن</label>
                                        <input type="text" id="title" name="title" value="{{ $row->title }}"
                                            class="form-control ">

                                    </div>


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label"> تفاصيل من نحن</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <textarea class="ckeditor form-control" name="text">{{ $row->text }} </textarea>

                                        <!--end::Editor-->

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">عنوان أهدافنا</label>
                                        <input type="text" id="title" name="mission" value="{{ $row->mission }}"
                                            class="form-control ">

                                    </div>


                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label"> تفاصيل  أهدافنا</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <textarea class="ckeditor form-control" name="details">{{ $row->details }} </textarea>

                                        <!--end::Editor-->

                                    </div>

                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->


                            <div class="d-flex justify-content-center mt-3">
                                <!--begin::Button-->
                                {{-- <a href="#" id="kt_ecommerce_add_product_cancel"
                                    class="btn btn-light me-5">Cancel</a> --}}
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

                    </div>

                    </div>
                    <!--end::Main column-->
     <!--begin::Aside column-->
     <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10 mx-2">
        <!--begin::Card header-->
        <div class="card-header">

            <!--begin::Card title-->
            <div class="card-title">
                <h2> تحميل الصورة</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Image input wrapper-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                style="background-image: url('{{ asset('uploads/about_us') }}/{{ $row->image }}')">
                <div class="image-input-wrapper w-150px h-150px"
                    style="background-image: url(' {{ asset('uploads/about_us') }}/{{ $row->image }}')">

                </div>
                <!--end::Preview existing avatar-->
                <!--begin::Edit-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعديل الصورة">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Edit-->

            </div>
            <!--end::Image input-->
        </div>
        <!--end::Image input wrapper-->

    </div>
    <!--end::Aside column-->
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
            $("#kt_datepicker_8").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });

            $("#kt_datepicker_7").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
        });
    </script>
@endsection
