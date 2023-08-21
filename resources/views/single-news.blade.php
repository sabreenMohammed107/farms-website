@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.webp') }})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>{!! $row->name !!}
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
<style>
    .product-details.single-product.single-news .product-details__top h3 {
        font-size: 35px;
    }

    .news-one.single-news .section-title h2 {
        text-align: right;
        font-size: 35px;
    }
</style>
<!--Product Details Start-->
<section class="product-details single-product single-news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-details__top mb-5">
                    <h3 class="product-details__title"> {!! $row->title !!}</h3>
                </div>
                <div class="product-details__img">
                    <img height="500px" src="{{ asset('uploads/news') }}/{{ $row->image }}" alt="" />
                </div>
            </div>
            <div class="col-12">
                <div class="product-details__content mt-3">
                    <p class="product-details__content-text1">{!! $row->details !!}</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Product Details End-->

<div class="container single-product">
    <div class="sidebar__single sidebar__tags">
        <div class="row align-items-center ">
            @isset($tags)
            <div class="col-12">
                <h3 class="sidebar__title mb-3">Tags :</h3>
                <div class="sidebar__tags-list">
                    @foreach ($tags as $tag)
                    <a href="#">{{ $tag->text }}</a>
                    @endforeach



                </div>
            </div>
            @endisset



        </div>
    </div>
</div>

<!--News One Start-->
<section class="news-one single-news">
    <div class="container">
        <div class="section-title">
            <h2 class="section-title__title">
                اخبار أخري
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
                        "items": <?php (count($otherNews) < 2) ? count($otherNews): 2 ; ?>;
                    },
                    "992": {
                        "items":  <?php (count($otherNews) < 3) ? count($otherNews): 3 ; ?>
                    },
                    "1200": {
                        "items":  <?php (count($otherNews) < 3) ? count($otherNews): 3 ; ?>
                    }
                }
            }'>
            @foreach ($otherNews as $obj)
            <div class="news-one__single mx-2">
                <div class="news-one__img-box">
                    <div class="news-one__img">
                        <img style="height: 250px" src="{{ asset('uploads/news') }}/{{ $obj->image }}" alt="">
                    </div>
                </div>
                <div class="news-one__content-box">

                    <h3 class="news-one__title"><a href="{{ url('/single-news/'.$obj->id) }}"> {!! $obj->title !!}</a>
                    </h3>


                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>
<!--Blog One End-->
@endsection
