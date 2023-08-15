@extends('layout.webLayout.main')

@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

 <!--Main Slider Start-->
 <section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },

        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider-bg-shape"
                    style="background-image: url({{asset('webassets/assets/images/shapes/main-slider-bg-shape.png')}});"></div>
                <div class="main-slider-bg-shape-two"
                    style="background-image: url({{asset('webassets/assets/images/shapes/main-slider-bg-shape-two.png')}});"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-2 float-bob-x">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3 float-bob-x">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4 float-bob-y">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="main-slider__shape-5 zoominout">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-5.png')}}" alt="">
                </div>
                <div class="main-slider__shape-6 float-bob-x">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-6.png')}}" alt="">
                </div>
                <div class="main-slider__shape-7 float-bob-y">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-7.png')}}" alt="">
                </div>
                <div class="main-slider__shape-8 float-bob-x">
                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-8.png')}}" alt="">
                </div>
                <div class="main-slider__img-one">
                    <img src="{{asset('webassets/assets/images/resources/main-slider-img-1.png')}}" alt="" class="img-bounce">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__shape-9 float-bob-y">
                                    <img src="{{asset('webassets/assets/images/shapes/main-slider-shape-9.png')}}" alt="">
                                </div>
                                <h4 class="main-slider__sub-title"><span><img
                                            src="{{asset('webassets/assets/images/shapes/1.png.png')}}"
                                            class="main-slider__sub-title__icn" alt="" srcset=""></span>
                                     {!! $homedata->title !!}</h4>
                                <h2 class="main-slider__title">{!! $homedata->details !!}   </h2>
                                <div class="main-slider__btn-box">
                                    <a href="{{ url('/products') }}" class="thm-btn main-slider__btn-two">اكتشف
                                        المنتجات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <!-- If we need navigation buttons -->


    </div>
</section>
<!--Main Slider End-->

<!--About One Start-->
<section class="about-one">
    <div class="about-one__shape-11 float-bob-y">
        <img src="{{asset('webassets/assets/images/shapes/about-one-shape-11.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <!-- <div class="about-one__big-text">Gamal</div> -->
                        <div class="about-one__shape-1">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-1.png')}}" alt="">
                        </div>
                        <div class="about-one__shape-2">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-2.png')}}" alt="">
                        </div>

                        <div class="about-one__shape-4 float-bob-y">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-4.png')}}" alt="">
                        </div>
                        <div class="about-one__shape-5 zoominout">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-5.png')}}" alt="">
                        </div>

                        <div class="about-one__shape-7 zoominout">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-7.png')}}" alt="">
                        </div>
                        <div class="about-one__shape-8 float-bob-y">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-8.png')}}" alt="">
                        </div>
                        <div class="about-one__shape-9">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-9.png')}}" alt="">
                        </div>

                        <div class="about-one__img">
                            <img src="{{ asset('uploads/about_us') }}/{{ $about->image }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-2 mt-sm-5 mt-xl-0">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">من نحن</span>
                        <h2 class="section-title__title">{!! $about->title !!} </h2>
                    </div>

                    <p class="about-one__text-1">
                        {!! $about->text !!}

                    <div class="about-one__btn-box">
                        <a href="{{ url('/about') }}" class="about-one__btn thm-btn">إكتشف أكثر
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->
<!--Brand One Start-->
<section class="hot-products partners-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">شركاء النجاح</span>
            <h2 class="section-title__title">
                <a href="Partners.html">عملاؤنا الحالين</a>
            </h2>
        </div>
        <div class="hot-products__inner list-unstyled hot-product-three__carousel owl-carousel owl-theme thm-owl__carousel"
            data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": false,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 3000,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 3
                },
                "992": {
                    "items": 5
                },
                "1200": {
                    "items": 7
                }
            }
        }'>

            @foreach ($customers as $customer)


            <div class="wow fadeInUp" data-wow-delay="100ms">

                <div class="hot-products__single">
                    <div class="hot-products__single-inner">
                        <div class="hot-products__img-box">
                            <div class="hot-products__img">
                                <img src="{{ asset('uploads/customers') }}/{{ $customer->image }}" alt="">
                            </div>
                        </div>


                    </div>
                    <div class="hot-products__content">

                        <h3 class="hot-products__title">  {!! $customer->name !!}</h3>

                    </div>
                </div>

            </div>

            @endforeach


        </div>
    </div>
</section>
<!--Brand One End-->


<!-- our services -->
<section class="our-products-services">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">ما نقدمه لعملاؤنا</span>
            <h2 class="section-title__title">
                <a href="#">خدماتنا المميزة</a>
            </h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="banner-one__left wow slideInLeft animated" data-wow-delay="100ms"
                    data-wow-duration="2500ms"
                    style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                    <div class="banner-one__inner">
                        <div class="banner-one__img-1">
                            <img src="assets/images/resources/banner-img-1.png" alt="">
                        </div>

                        <div class="banner-one__shape-2">
                            <img src="assets/images/shapes/banner-shape-2.png" alt="">
                        </div>
                        <div class="banner-one__shape-3">
                            <img src="assets/images/shapes/banner-shape-3.png" alt="">
                        </div>
                        <p class="banner-one__tagline">عضوي 100٪</p>
                        <h3 class="banner-one__title">توريد الخضار للفنادق
                        </h3>
                        <p class="banner-one__tagline sub-title">استجابة منا لشغفنا بالتجديد المستمر واحترامنا
                            للبيئة،
                            نراهن على التكنولوجيات الحديثة التي تسهل أن نضع في السوق منتجات تتسم بالجودة
                            الممتازة وتمت تعبئتها تحت إشراف صارم ويتم توريدها في الوقت المناسب بحيث ترضي مطالب
                            عملائنا.</p>
                        <div class="banner-one__btn-box">
                            <a href="services.html" class="banner-one__btn thm-btn">تفاصيل الخدمة</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our services end -->

<section class="hot-products">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">تحقق من المنتجات الجديدة</span>
            <h2 class="section-title__title">
                <a href="all-products.html">كل المنتجات </a>
            </h2>
        </div>
        <div class="hot-products__inner list-unstyled hot-product-three__carousel owl-carousel owl-theme thm-owl__carousel"
            data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": true,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 3000,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 3
                },
                "992": {
                    "items": 4
                },
                "1200": {
                    "items": 5
                }
            }
        }'>
        @foreach ($products as $product)
        <div class="wow fadeInUp" data-wow-delay="100ms">
            <a href="{{ url('/single-product/'.$product->id) }}">
                <div class="hot-products__single">
                    <div class="hot-products__single-inner">
                        <div class="hot-products__img-box">
                            <div class="hot-products__img">
                                <img style="height: 300px" src="{{ asset('uploads/products') }}/{{ $product->image }}" alt="">
                            </div>
                        </div>
                        <div class="hot-products__content">

                            <h3 class="hot-products__title"><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->name }}</a></h3>

                        </div>

                    </div>
                </div>
            </a>
        </div>
        @endforeach



        </div>
    </div>
</section>
<!--Hot Products End-->
<!--Why Choose One Start-->
<section class="why-choose-one">
    <div class="why-choose-one__bg"
        style="background-image: url({{asset('webassets/assets/images/backgrounds/why-choose-one-bg.jpg')}});">
    </div>
    <div class="why-choose-one__shape-1 float-bob-y">
        <img src="{{asset('webassets/assets/images/shapes/why-choose-one-shape-1.png')}}" alt="">
    </div>
    <div class="why-choose-one__shape-2 float-bob-x">
        <img src="{{asset('webassets/assets/images/shapes/why-choose-one-shape-2.png')}}" alt="">
    </div>
    <div class="why-choose-one__shape-3">
        <img src="{{asset('webassets/assets/images/shapes/why-choose-one-shape-3.png')}}" alt="">
    </div>
    <div class="why-choose-one__shape-4">
        <img src="{{asset('webassets/assets/images/shapes/why-choose-one-shape-4.png')}}" alt="">
    </div>
    <div class="why-choose-one__img-1 wow fadeInUp" data-wow-duration="1500ms">
        <img src="{{asset('webassets/assets/images/resources/why-choose-one-img-1.png')}}" alt="">
    </div>
    <div class="why-choose-one__img-2 wow fadeInDown" data-wow-duration="1500ms">
        <img src="{{asset('webassets/assets/images/resources/why-choose-one-img-2.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="why-choose-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">لماذا تختار
                            <span class="inside-section-title">
                            {!!$homedata ->why_us_title !!}</span></span>

                        <h2 class="section-title__title">
               {!! $homedata ->why_us_details !!}</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 ">
                            <div class="why-choose-one__single">
                                <div class="why-choose-one__icon">
                                    <span class="icon-organic-food"></span>
                                </div>
                                <h4 class="why-choose-one__title">منتجات عضوية</h4>

                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="why-choose-one__single">
                                <div class="why-choose-one__icon">
                                    <span class="icon-salad"></span>
                                </div>
                                <h4 class="why-choose-one__title">العناصر الطبيعية</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4"></div>
        </div>
    </div>
</section>
<!--Why Choose One End-->

<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">من مشاركات المدونة</span>
            <h2 class="section-title__title">آخر تحديثات الأخبار
                <br>والمقالات
            </h2>
        </div>
        <div class=" owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": false,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 2000,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                },
                "1200": {
                    "items": 3
                }
            }
        }'>
@foreach ($news as $obj)
<div class="news-one__single">
    <div class="news-one__img-box">
        <div class="news-one__img" style="height: 100%">
            <img src="{{ asset('uploads/news') }}/{{ $obj->image }}" style="height: 450px" alt="">
        </div>
    </div>
    <div class="news-one__content-box">

        <h3 class="news-one__title"><a href="news-details.html">

{!! $obj->title !!}

        </a></h3>


    </div>
</div>
@endforeach



        </div>

    </div>
</section>
<!--Blog One End-->

@endsection
