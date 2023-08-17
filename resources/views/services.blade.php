@extends('layout.webLayout.main')

@section('content')
<section class="page-header">
    <div class="page-header-bg"
            style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.jpg') }})">
        </div>

    <div class="container">
      <div class="page-header__inner">
        <h2>الخدمات
        </h2>
        <ul class="thm-breadcrumb list-unstyled">
          <li><a href="{{ url('/') }}">الرئيسية
            </a></li>
          <li><span>/</span></li>
          <li>خدماتنا
          </li>
        </ul>

      </div>
    </div>
  </section>
  <!--Page Header End-->

  <div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
  </div><!-- /.stricky-header -->
  <section class="Products-by-types services pt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="Products-by-types__data">
            <div class="section-title ">
              <h2 class="section-title__title">توريد الخضار للفنادق</h2>
            </div>

            <p class="Products-by-types__text">خدمات الاستيراد والتصدير. استيراد وتصدير المنتجات الزراعية. توريد
              وتوزيع جميع انواع المحاصيل الزراعية كالفول بأنواعه والبقوليات.

              تأسست شركة أركاديا فوود إنترناثيونال، إس. إل. سنة 2008، وهي تشكل جزءاً من مجموعة إيه. إم. بي. هولدينج،
              وهي مجموعة شركات مهمة بمنطقة مرسية لها خبرة وريادة عريضة تزيد مدتها عن 30 سنة في قطاع منتجات البساتين في
              أوروبا.

              تأسست الشركة بهدف إنتاج وتوريد منتجات البساتين الطازجة ذات الجودة الممتازة والآمنة والصحية والتي تتسم
              بالاستدامة لعملائنا طوال السنة بأسعار تتسم بالتنافسية العالية.

              استجابة منا لشغفنا بالتجديد المستمر واحترامنا للبيئة، نراهن على التكنولوجيات الحديثة التي تسهل أن نضع في
              السوق منتجات تتسم بالجودة الممتازة وتمت تعبئتها تحت إشراف صارم ويتم توريدها في الوقت المناسب بحيث ترضي
              مطالب عملائنا.
              تأسست شركة أركاديا فوود إنترناثيونال، إس. إل. سنة 2008، وهي تشكل جزءاً من مجموعة إيه. إم. بي. هولدينج،
              وهي مجموعة شركات مهمة بمنطقة مرسية لها خبرة وريادة عريضة تزيد مدتها عن 30 سنة في قطاع منتجات البساتين في
              أوروبا.

              تأسست الشركة بهدف إنتاج وتوريد منتجات البساتين الطازجة ذات الجودة الممتازة والآمنة والصحية والتي تتسم
              بالاستدامة لعملائنا طوال السنة بأسعار تتسم بالتنافسية العالية.</p>
            <div class="about-one__btn-box">
              <a href="{{ url('/products') }}" class="about-one__btn thm-btn lite-btn-bg"> اكتشف المنتجات
              </a>
              {{-- <a href="#" class="about-one__btn thm-btn ">اكتشف اكتر
              </a> --}}
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 service-image">
          <img src="{{ asset('webassets/assets/images/resources/banner-img-1.png')}}" alt="" srcset="">
        </div>
      </div>
    </div>

  </section>


@endsection
