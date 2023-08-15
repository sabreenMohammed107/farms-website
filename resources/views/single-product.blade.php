@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
    style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.jpg') }})">
</div>

    <div class="container">
      <div class="page-header__inner">
        <h2>{!! $product->name !!}
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

  <!--Product Details Start-->
  <section class="product-details single-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-6">
          <div class="product-details__img">
            <img src="{{ asset('uploads/products') }}/{{ $product->image }}" alt="" />
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 ">
          <div class="product-details__top">
            <h3 class="product-details__title"> {!! $product->name !!} </h3>
          </div>

          <div class="product-details__content mt-3">
            <p class="product-details__content-text1"{!! $product->details !!}</p>

          </div>






        </div>
      </div>
      <div class="row">
        <div class="section-products">
          <div class="hot-products__inner list-unstyled row">
            @foreach ($galleries as $gallery)
            <div class="wow fadeInUp col-12 col-md-6 col-lg-3" data-wow-delay="100ms">
                <div class="hot-products__single">
                  <div class="hot-products__single-inner">
                    <div class="hot-products__img-box">
                      <div class="hot-products__img">
                        <img src="{{ asset('uploads/galleries') }}/{{ $gallery->image }}" alt="">
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            @endforeach



          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Product Details End-->


  <div class="container single-product">
    <div class="sidebar__single sidebar__tags">
      <div class="row align-items-center mb-3">
        @isset($tags)
        <div class="col-12">
            <h3 class="sidebar__title">Tags :</h3>
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

  <section class="Products-by-types single-product pt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 pt-5">
          <div class="products-for-type">
            <div class="section-title">
              <h2 class="section-title__title">
                منتجات أخري
              </h2>
            </div>
            <div class="section-products">
              <ul class="hot-products__inner list-unstyled">

    @foreach ($otherProducts as $obj)
    <li class="wow fadeInUp" data-wow-delay="100ms">
        <a href="{{ url('/single-product/'.$obj->id) }}">
          <div class="hot-products__single">
            <div class="hot-products__single-inner">
              <div class="hot-products__img-box">
                <div class="hot-products__img">
                  <img style="height: 300px" src="{{ asset('uploads/products') }}/{{ $obj->image }}" alt="">
                </div>
              </div>
              <div class="hot-products__content">

                <h3 class="hot-products__title"><a href="{{ url('/single-product/'.$obj->id) }}">{{ $obj->name }}</a></h3>

              </div>

            </div>
          </div>
        </a>
      </li>
                @endforeach


              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--Subscribe One Start-->
@endsection
