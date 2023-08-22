@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{asset('webassets/assets/images/backgrounds/div.hero-section.webp')}})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2> الوظائف
            </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">الرئيسية
                    </a></li>
                <li><span>/</span></li>
                <li> وظائف
                </li>
            </ul>

        </div>
    </div>
</section>
<!--Page Header End-->
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<section class="contact-us jobs-page">
    <div class="contact-us-title text-center">
        <h2>وظائف متاحة</h2>
        <p>يمكنك الإنضمام لفريق العمل , والتقديم علي الوظائف المتاحة</p>
    </div>
    <div class="container mt-5">
        <div class="row">

            <div class="col-12 ">
                @foreach ($jobs as $job)
                <div class="product-list__single">
                    <div class="product-list__single-inner">
                        <div class="product-list__img-box p-4">
                            <div class="jobs-page__img">
                                <img src="{{asset('webassets/assets/images/favicons/apple-touch-icon.png')}}" alt="">
                            </div>

                        </div>
                        <div class="jobs-list__content ">

                            <h4 class="product-list__title"> {{ $job->title }}
                            </h4>

                            <p class="product-list__text"> {!! $job->details !!}
                            </p>
                            <p class="product-list__text"> ارسل السيرة الذاتية الى
                                <span>{{ $job->email }}</span>
                            </p>

                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>

    </div>

</section>


@endsection
<script async  src="{{asset('webassets/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script async  src="{{asset('webassets/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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

<script async  src="{{asset('webassets/assets/js/mainjs.js')}}"></script>
