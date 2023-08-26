<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Gamal Gomaa Farm </title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="assets/images/resources/232659713_204434118362200_47229516744215480_n_1-1-removebg-preview.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="assets/images/resources/232659713_204434118362200_47229516744215480_n_1-1-removebg-preview.png" />
    {{--
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="تأسست الشركة بهدف إنتاج وتوريد منتجات البساتين الطازجة ذات الجودة الممتازة والآمنة والصحية والتي تتسم بالاستدامة لعملائنا طوال السنة بأسعار تتسم بالتنافسية العالية.

    تأسست الشركة بهدف استجابة منا لشغفنا بالتجديد المستمر واحترامنا للبيئة، نراهن على التكنولوجيات الحديثة التي تسهل أن نضع في السوق منتجات تتسم بالجودة الممتازة وتمت تعبئتها تحت إشراف صارم ويتم توريدها في الوقت المناسب بحيث ترضي مطالب عملائنا." />

    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    {{--
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/jarallax/jarallax.css')}}" />
    {{--
    <link rel="stylesheet"
        href="{{asset('webassets/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" /> --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/nouislider/nouislider.pips.css')}}" /> --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/swiper/swiper.min.css')}}" /> --}}
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/ogenix-icons/style.css')}}">
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/tiny-slider/tiny-slider.min.css')}}" /> --}}
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/reey-font/stylesheet.css')}}" />
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.css')}}" /> --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" /> --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.css')}}" /> --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    --}}
    {{--
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/vegas/vegas.min.css')}}" /> --}}
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/nice-select/nice-select.css')}}" />


    <link rel="stylesheet" href="{{asset('webassets/assets/css/mainstyle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/css/mainstyle-responsive.min.css')}}" />
</head>
@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{asset('webassets/assets/images/backgrounds/div.hero-section.webp')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>من نحن
            </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">الرئيسية
                    </a></li>
                <li><span>/</span></li>
                <li>من نحن
                </li>
            </ul>

        </div>
    </div>
</section>
<!--Page Header End-->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--About One Start-->
<section class="about-one">
    <div class="about-one__shape-11 float-bob-y">
        <img src="{{asset('webassets/assets/images/shapes/about-one-shape-11.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
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
                        <h2 class="section-title__title"> {!! $about->title !!} </h2>
                    </div>

                    <p class="about-one__text-1"> {!! $about->text !!}</p>


                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->
<!--Why Choose One Start-->

<section class="why-choose-one about-us">
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
        <img src="{{asset('webassets/assets/images/resources/why-choose-one-img-1.webp')}}" alt="">
    </div>
    <div class="why-choose-one__img-2 wow fadeInDown" data-wow-duration="1500ms">
        <img src="{{asset('webassets/assets/images/resources/why-choose-one-img-2.webp')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="why-choose-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">لماذا تختار <span class="inside-section-title">{!!$homedata
                                ->why_us_title !!}</span></span>

                        <h2 class="section-title__title"> {!! $homedata ->why_us_details !!} </h2>
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

<!--About One Start-->
<section class="about-us-one">
    <div class="about-us-one__shape-11 float-bob-y">
        <img src="{{asset('webassets/assets/images/shapes/about-one-shape-11.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="about-us-one__right">
                    <div class="section-title text-left">

                        <h2 class="section-title__title">{!! $about->mission !!} </h2>
                    </div>

                    <p class="about-us-one__text-1">{!! $about->details !!}</p>

                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-us-one__left">
                    <div class="about-us-one__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">

                        <div class="about-us-one__shape-1">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-1.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-2">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-2.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-3">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-3.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-4 float-bob-y">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-4.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-5 zoominout">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-5.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-6 float-bob-x">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-6.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-7 zoominout">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-7.png')}}" alt="">
                        </div>
                        <div class="about-us-one__shape-8 float-bob-y">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-8.png')}}" alt="">
                        </div>

                        <div class="about-us-one__shape-10 float-bob-x">
                            <img src="{{asset('webassets/assets/images/shapes/about-one-shape-10.png')}}" alt="">
                        </div>
                        <div class="about-us-one__img">
                            <img src="{{asset('webassets/assets/images/resources/about-one-img-1.png.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->


@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script async src="{{asset('webassets/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script async src="{{asset('webassets/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/odometer/odometer.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/swiper/swiper.min.js')}}"></script> --}}
{{--
<script async src="{{asset('webassets/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/wnumb/wNumb.min.js')}}"></script> --}}
<script async src="{{asset('webassets/assets/vendors/wow/wow.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/isotope/isotope.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/countdown/jquery.countdown.min.js')}}"></script>
{{-- <script async src="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script> --}}
<script async src="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
{{-- <script async src="{{asset('webassets/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
--}}
{{-- <script async src="{{asset('webassets/assets/vendors/vegas/vegas.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/timepicker/timePicker.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script async src="{{asset('webassets/assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script> --}}

<script async src="{{asset('webassets/assets/js/mainjs.about.js')}}"></script>
{{-- <script async src="{{asset('webassets/assets/js/mainjs.js')}}"></script> --}}