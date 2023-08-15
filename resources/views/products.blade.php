@extends('layout.webLayout.main')

@section('content')
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('webassets/assets/images/backgrounds/div.hero-section.jpg') }})">
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
                                                    <img style="height: 300px" src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="hot-products__content">

                                                <h3 class="hot-products__title"><a href="{{ url('/single-product/'.$product->id) }}">{{ $product->name }}</a>
                                                </h3>
                                                <p class="hot-products__desc">
                                                    {{ Str::words($product->details, 10) }}
                                                    </p>



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
                                                        <img src="assets/images/resources/hot-product-1-1.jpg"
                                                            alt="">
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
                                                        <img src="assets/images/resources/hot-product-1-2.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="hot-products__content">

                                                    <h3 class="hot-products__title"><a
                                                            href="product-details.html">بطاطا</a></h3>
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
                                                        <img src="assets/images/resources/hot-product-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="hot-products__content">

                                                    <h3 class="hot-products__title"><a
                                                            href="product-details.html">تفاح</a></h3>
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
                                                        <img src="assets/images/resources/hot-product-1-4.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="hot-products__content">

                                                    <h3 class="hot-products__title"><a
                                                            href="product-details.html">ليتوس</a></h3>
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
                                                        <img src="assets/images/resources/hot-product-1-5.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="hot-products__content">

                                                    <h3 class="hot-products__title"><a
                                                            href="product-details.html">برقوق</a></h3>
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
