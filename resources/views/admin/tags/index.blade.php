@extends('layout.main')
@section('add-style')
    <style>
        .isDisabled {
            color: currentColor;
            cursor: not-allowed;
            opacity: 0.5;
            text-decoration: none;
            pointer-events: none;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2"> قائمة العلامات</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item text-muted">العلامات</li>


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
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="بحث" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add customer-->
                        <!--begin::Add product-->
                        <!--end::Add product-->

                        <a href="{{ route('tags.create') }}"
                        class="btn btn-primary"
                  >إضافة علامة</a>

                        <!--end::Add customer-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-50px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                    aria-label=" " style="width: 29.25px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" style="display: none" type="checkbox"
                                            data-kt-check="true"
                                            data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                            value="1">
                                    </div>
                                    م
                                </th>

                                <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                    rowspan="1" colspan="1" aria-label="العلامة: activate to sort column ascending">
                                   العلامة</th>

                                <th class="text-end min-w-70px sorting sorting_desc" tabindex="0"
                                    aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                    aria-label="Category Type: activate to sort column ascending" aria-sort="descending">
                                    النوع  </th>

                                <th class="text-end min-w-70px pe-2 sorting_disabled">تعديل </th>
                                <th class="text-end min-w-70px pe-2 sorting_disabled">حذف</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($rows as $index => $row)
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" style="display: none" type="checkbox"
                                                value="1" />
                                        </div>
                                        {{$index+1 }}
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Category=-->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-5">
                                                <!--begin::Title-->

                                                <a class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                                    data-kt-ecommerce-category-filter="category_name"
                                                    >  {{ $row->text ?? '' }} </a>
                                                <input type="hidden" name="" id=""
                                                data-kt-ecommerce-category-filter="category_id" value="{{ $row->id }}">
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category=-->

                                    <!--end::SKU=-->
                                    <!--begin::Qty=-->
                                    <td class="text-end ">




@if($row->type ==1)
منتج
    @else
خبر
@endif







                                    </td>

                                    <td class="text-end pe-0">
                                        <a href="{{ route('tags.edit', $row->id) }}"
                                            class="menu-link px-3"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td class="text-end pe-0">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-ecommerce-category-filter="delete_row"><i class="fa fa-trash"></i></a>


                                        <form id="delete_{{ $row->id }}"
                                            action="{{ route('tags.destroy', $row->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                                            @method('DELETE')

                                            <button type="submit" value=""></button>
                                        </form>
                                    </td>
                                    <!--end::Price=-->

                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            @endforeach


                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->


                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
