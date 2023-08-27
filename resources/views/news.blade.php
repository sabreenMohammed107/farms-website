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
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/ogenix-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('webassets/assets/vendors/reey-font/stylesheet.css')}}" />


    <link rel="stylesheet" href="{{asset('webassets/assets/css/mainstyle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('webassets/assets/css/mainstyle-responsive.min.css')}}" />
</head>
@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.webp') }})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>الأخبار
            </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">الرئيسية
                    </a></li>
                <li><span>/</span></li>
                <li>الأخبار
                </li>
            </ul>

        </div>
    </div>
</section>
<!--Page Header End-->

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="news-one">
    <div class="container">
        <div class="row">
            <!--News One Single Start-->
            @foreach ($rows as $row)
            <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms"
                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img style="height: 250px" src="{{ asset('uploads/news') }}/{{ $row->image }}" alt="">
                        </div>
                    </div>
                    <div class="news-one__content-box">

                        <h3 class="news-one__title"><a href="{{ url('/single-news/'.$row->id) }}">
                                {!! $row->title !!} </a></h3>


                    </div>
                </div>
            </div>
            @endforeach

</section>


@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script async src="{{asset('webassets/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script async src="{{asset('webassets/assets/js/mainjs.news.js')}}"></script>