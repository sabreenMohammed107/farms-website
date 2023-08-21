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
