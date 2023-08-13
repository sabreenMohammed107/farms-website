@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('webassets/assets/images/backgrounds/div.hero-section.jpg')}})">
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
    <section class="google-map">
      <div class="container">
        <iframe
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly&language=ar&region=EG"
          class="google-map__one" allowfullscreen></iframe>

      </div>
    </section>
    <!--Google Map End-->
  </section>
  <!--Feature Two End-->


@endsection
