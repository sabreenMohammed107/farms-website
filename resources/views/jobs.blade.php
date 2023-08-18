@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('webassets/assets/images/backgrounds/div.hero-section.jpg')}})">
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

                <h4 class="product-list__title">  {{ $job->title }}
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
