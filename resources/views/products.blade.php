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
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
<link rel="stylesheet" href="{{asset('webassets/assets/vendors/vegas/vegas.min.css')}}" />
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
        style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.webp') }})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>كل المنتجات
            </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">الرئيسية
                    </a></li>
                <li><span>/</span></li>
                <li>منتجاتنا
                </li>
            </ul>

        </div>
    </div>
</section>
<!--Page Header End-->
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<section class="Products-by-types pt-5">

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="Products-by-types__data">
                    <div class="section-title ">
                        <h2 class="section-title__title">قسم منتجات : خضروات</h2>
                    </div>
                    <p class="Products-by-types__text">الفشار (بالإنجليزية: Popcorn) أو الشامية أو البوشار أو النفّيش أو
                        الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة. يوجد كمية صغيرة من الماء داخل
                        بذور
                        الذرة والذي يسبب الانفجار، حيث تتوسع نواة البذرة ويصبح حجمها أكبر، وتأخذ شكلاً شبه عشوائياً
                        ولوناً
                        أبيضاً وملمساً رقيقاً.هنالك أساليب كثيرة لتفرقع الذرة. تم اختراع آلات الفشار التجارية على نطاق
                        واسع من
                        قبل تشارلز كريترز في أواخر القرن التاسع عشر. يوجد للبوشار مؤيدين ومنتقدين، اعتماداً على كيفية
                        إعدادها
                        وطهيها، فيعتبرها البعض غذاءً صحياً في حين أن آخرين يحذرون منه لأسباب متنوعة.غالباً ما يضاف الملح
                        والزبدة
                        المذابة إلى الفشار، وأحياناً يتم صهر الكراميل ويمزج مع الفشار. ويتم صناعة الفشار في المنزل بشراء
                        نوعين
                        موجودين في الأسواق العربية، الأول معلب على شكل حبوب توضع على النار مع الزيت حتى يتفرقع ويصبح
                        جاهزاً أو
                        توضع تلك الحبوب في آلات منزلية مخصصة لصناعة الفشار، والثاني على شكل كيس يوضع في المايكروويف
                        ويتفرقع
                        ويصبح جاهزاً.يمكن أن يحضّر الفشار بنكهات متعددة منها الكراميل، في هذه الحال يحضّر من الذرة،
                        السكر،
                        الزبدة، الزيت، بيكاربونات الصوديوم، الملح والماء.</p>

                </div>
            </div>
            @foreach ($categories as $category)
            <?php
                $products=App\Models\Product::where('cat_id','=',$category->id)->get();
                ?>
            @if($products && count($products) >0)
            <div class="col-12 pt-5">
                <div class="products-for-type">
                    <div class="section-title">
                        <h2 class="section-title__title">
                            منتجات قسم {{ $category->name }}
                        </h2>
                    </div>
                    <?php
                        $products=App\Models\Product::where('cat_id','=',$category->id)->get();
                        ?>
                    <div class="section-products">
                        <ul class="hot-products__inner list-unstyled">
                            @foreach ($products as $product)
                            <li class="wow fadeInUp" data-wow-delay="100ms">
                                <a href="{{ url('/single-product/'.$product->id) }}">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img style="height: 300px"
                                                        src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a
                                                        href="{{ url('/single-product/'.$product->id) }}">{{
                                                        $product->name }}</a>
                                                </h3>
                                                {{-- <p class="hot-products__desc">
                                                    {{ Str::words($product->details, 10) }}
                                                </p> --}}



                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach


                        </ul>
                        {{-- <ul class="hot-products__inner list-unstyled">

                            <li class="wow fadeInUp" data-wow-delay="100ms">
                                <a href="product-details.html">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img src="assets/images/resources/hot-product-1-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="product-details.html">موز</a>
                                                </h3>
                                                <p class="hot-products__desc">الفشار (بالإنجليزية: Popcorn) أو الشامية
                                                    أو البوشار أو النفّيش
                                                    أو الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="200ms">
                                <a href="product-details.html">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img src="assets/images/resources/hot-product-1-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="product-details.html">بطاطا</a>
                                                </h3>
                                                <p class="hot-products__desc">الفشار (بالإنجليزية: Popcorn) أو الشامية
                                                    أو البوشار أو النفّيش
                                                    أو الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <a href="product-details.html">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img src="assets/images/resources/hot-product-1-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="product-details.html">تفاح</a>
                                                </h3>
                                                <p class="hot-products__desc">الفشار (بالإنجليزية: Popcorn) أو الشامية
                                                    أو البوشار أو النفّيش
                                                    أو الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="400ms">
                                <a href="product-details.html">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img src="assets/images/resources/hot-product-1-4.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="product-details.html">ليتوس</a>
                                                </h3>
                                                <p class="hot-products__desc">الفشار (بالإنجليزية: Popcorn) أو الشامية
                                                    أو البوشار أو النفّيش
                                                    أو الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <a href="product-details.html">
                                    <div class="hot-products__single">
                                        <div class="hot-products__single-inner">
                                            <div class="hot-products__img-box">
                                                <div class="hot-products__img">
                                                    <img src="assets/images/resources/hot-product-1-5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="product-details.html">برقوق</a>
                                                </h3>
                                                <p class="hot-products__desc">الفشار (بالإنجليزية: Popcorn) أو الشامية
                                                    أو البوشار أو النفّيش
                                                    أو الفرّأخ أو الشوش هي أسماء لشيء واحد وهو الذرة المفرقعة بالحرارة
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</section>
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
<script async  src="{{asset('webassets/assets/vendors/wow/wow.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/isotope/isotope.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/countdown/jquery.countdown.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/vegas/vegas.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/timepicker/timePicker.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script>

<script async  src="{{asset('webassets/assets/js/mainjs.min.js')}}"></script>
