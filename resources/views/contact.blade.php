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
        {{-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> --}}
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
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/nouislider/nouislider.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/nouislider/nouislider.pips.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/odometer/odometer.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/swiper/swiper.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/ogenix-icons/style.css')}}">
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/reey-font/stylesheet.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('webassets/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('webassets/assets/vendors/vegas/vegas.min.css')}}" /> --}}
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
            <h2>تواصل معنا
            </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">الرئيسية
                    </a></li>
                <li><span>/</span></li>
                <li>اتصل بنا
                </li>
            </ul>

        </div>
    </div>
</section>
<!--Page Header End-->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Feature Two Start-->
<section class="contact-us">
    <div class="contact-us-title text-center">
        <h2>اتصل بنا</h2>
        <p>لبدايه مشروعك معنا او لمتابعه العمل<br> يمكنك التواصل معنا </p>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-between">

            <div class="col-12 col-sm-6  col-xl-4  contact-us-info-block  text-center row justify-content-center">

                <div class="feature-two__shape-1">
                    <img src="{{asset('webassets/assets/images/shapes/feature-two-shape-1.png')}}" alt="">
                </div>
                <div class="conatct-content col-11 row justify-content-center">
                    <div class="contact-us-shape d-flex justify-content-center">
                        <img src="{{asset('webassets/assets/images/shapes/pin.png')}}" alt="" srcset="">
                    </div>
                    <p class="contact-us-info-data mt-3">{!! $contact->address !!}</p>

                </div>
            </div>
            <div class="col-12 col-sm-6   col-xl-4  contact-us-info-block text-center row justify-content-center">
                <div class="feature-two__shape-1">
                    <img src="{{asset('webassets/assets/images/shapes/feature-two-shape-1.png')}}" alt="">
                </div>
                <div class="conatct-content col-11 row justify-content-center">
                    <div class="contact-us-shape d-flex justify-content-center">
                        <img src="{{asset('webassets/assets/images/shapes/mail.svg')}}" alt="" srcset="">
                    </div>
                    <p class="contact-us-info-data mt-3">{!! $contact->email !!}</p>

                </div>
            </div>
            <div
                class="col-12 col-sm-12 mt-sm-3 mt-0 mt-md-0   col-xl-4  contact-us-info-block text-center row justify-content-center">
                <div class="feature-two__shape-1">
                    <img src="{{asset('webassets/assets/images/shapes/feature-two-shape-1.png')}}" alt="">
                </div>
                <div class="conatct-content col-11 row justify-content-center">
                    <div class="contact-us-shape d-flex justify-content-center">
                        <img src="{{asset('webassets/assets/images/shapes/phone.svg')}}" alt="" srcset="">
                    </div>
                    <p class="contact-us-info-data mt-3">{!! $contact->mobile !!}</p>
                    <p class="contact-us-info-data " style="direction: ltr">{!! $contact->phone !!}</p>

                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-between">
        <div class="contact-us-info-block col-12 col-sm-4">

        </div>
        <div class="contact-us-info-block col-12 col-sm-4">
          <div class="contact-us-shape row">
            <img src="{{asset('webassets/assets/images/shapes/mail.svg')}}" alt="" srcset="">
          </div>
          <p class="contact-us-info-data">20 Margaret st, London</p>
          <p class="contact-us-info-data">Great britain, 3NM98-LK</p>
        </div>
        <div class="contact-us-info-block col-12 col-sm-4">
          <div class="contact-us-shape row">
            <img src="{{asset('webassets/assets/images/shapes/pin.png')}}" alt="" srcset="">
          </div>
          <p class="contact-us-info-data">20 Margaret st, London</p>
          <p class="contact-us-info-data">Great britain, 3NM98-LK</p>
        </div>
      </div> -->
    </div>
    <!--Google Map Start-->
    <section class="google-map mb-4">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3458.4147505398228!2d31.207061775548674!3d29.9099597749916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjnCsDU0JzM1LjkiTiAzMcKwMTInMzQuNyJF!5e0!3m2!1sen!2seg!4v1692302129347!5m2!1sen!2seg"
                class="google-map__one" allowfullscreen></iframe>

        </div>
    </section>
    <!--Google Map End-->
</section>
<!--Feature Two End-->


@endsection
<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script><script async  src="{{asset('webassets/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/odometer/odometer.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/swiper/swiper.min.js')}}"></script>

<script async  src="{{asset('webassets/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/wnumb/wNumb.min.js')}}"></script>
{{-- <script async  src="{{asset('webassets/assets/vendors/wow/wow.js')}}"></script> --}}
<script async  src="{{asset('webassets/assets/vendors/isotope/isotope.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/countdown/jquery.countdown.min.js')}}"></script>
{{-- <script async  src="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script> --}}
<script async  src="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
{{-- <script async  src="{{asset('webassets/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script> --}}
<script async  src="{{asset('webassets/assets/vendors/vegas/vegas.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/timepicker/timePicker.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script>

<script async  src="{{asset('webassets/assets/js/mainjs.min.js')}}"></script>
