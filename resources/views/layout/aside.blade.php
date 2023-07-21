<!--begin::Aside-->
<div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="#">
            <img alt="Logo" src="{{ asset('img/logo.PNG') }}" class="max-h-50px logo-default "
                style="height: 120px" />
            <img alt="Logo" src="{{ asset('img/logo.PNG') }}" class="max-h-50px logo-minimize "
                style="height: 120px" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <!--begin::Menu-->
        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
            id="kt_aside_menu" data-kt-menu="true">
            <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px"
                data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                        fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                        rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                        rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                        rx="2" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">أقسام النظام</span>

                    </span>

                </div>




                <div class="menu-item">
                    <a class="menu-link" href="{{ route('home-page.edit', 1) }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">الصفحة الرئيسية</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link" href="{{ route('about-page.edit', 1) }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">من نحن</span>
                    </a>
                </div>
                <!-- start Event -->
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">من نحن</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> الصورة</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> الفقرات </span>
                            </a>
                        </div>

                    </div>
                </div> --}}
                <!-- end Event -->

                <div class="menu-item">
                    <a class="menu-link" href="{{ route('contact.edit', 1) }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">اتصل بنا</span>
                    </a>
                </div>
                <!-- start Event -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">الوظائف</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('jobs.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة الوظائف </span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('jobs.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> إضافة وظيفة </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end Event -->
                <!-- start Event -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title"> الأخبار</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('news.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة الأخبار </span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('news.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> إضافة خبر </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end Event -->



                   <!-- start order -->
                   <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title"> التصنيفات</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('categories.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة التصنيفات </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('categories.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> إضافة تصنيف </span>
                            </a>
                        </div>






                    </div>
                </div>
                <!-- end Event -->
                <!-- start order -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title"> المنتجات</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('products.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة المنتجات </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('products.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> إضافة منتج </span>
                            </a>
                        </div>






                    </div>
                </div>
                <!-- end Event -->

                <!-- start order -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title"> العملاء</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('customers.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة العملاء </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('customers.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> إضافة عميل </span>
                            </a>
                        </div>






                    </div>
                </div>
                <!-- end Event -->

 <!-- start order -->
 <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <span class="menu-link">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title"> العلامات</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link" href="{{ route('tags.index') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title"> قائمة العلامات </span>
            </a>
        </div>

        <div class="menu-item">
            <a class="menu-link" href="{{ route('tags.create') }}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title"> إضافة علامة </span>
            </a>
        </div>






    </div>
</div>
<!-- end Event -->



                {{-- <div class="menu-item"> --}}
                <div class="menu-content">
                    <div class="separator mx-1 my-4"> </div>
                </div>
                {{-- </div> --}}

            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
        <a href="#" class="btn btn-light-primary w-100">Button</a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
