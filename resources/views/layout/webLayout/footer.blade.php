<!--Subscribe One Start-->
<section class="subscribe-one">
    <div class="container">
        <div class="subscribe-one__inner">
            <div class="subscribe-one__shape-1 float-bob-x">
                <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-1.webp')}}"
                    alt="subscribe-one-shape">
            </div>
            <div class="subscribe-one__shape-2 float-bob-y">
                <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-2.webp')}}"
                    alt="subscribe-one-shape">
            </div>
            <div class="subscribe-one__shape-4 float-bob-y">
                <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-4.webp')}}"
                    alt="subscribe-one-shape">
            </div>
            <div class="subscribe-one__shape-5 zoominout">
                <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-5.webp')}}"
                    alt="subscribe-one-shape">
            </div>
            <div class="subscribe-one__inner-content">
                <div class="subscribe-one__shape-3 float-bob-x">
                    <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-3.webp')}}"
                        alt="subscribe-one-shape">
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="subscribe-one__left">

                            <div class="subscribe-one__title-box">
                                <div class="footer-widget__logo">
                                    <a title="gmal" href="{{ url('/') }}"><img
                                            src="{{asset('webassets/assets/images/resources/footer-logo.webp')}}"
                                            alt="footer-logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="subscribe-one__right">
                            <div class="subscribe-one__shape-6 float-bob-x">
                                <img src="{{asset('webassets/assets/images/shapes/subscribe-one-shape-6.webp')}}"
                                    alt="footer-logo">
                            </div>
                            <div class="subscribe-one__form-box">

                                <h2 class="footer-page-main-title">طعام عضوي لذيذ <br>وصحي</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subscribe One End-->
<!--Site Footer Start-->
<style>
    .footer-widget__explore-list.list-unstyled {
        padding-right: 0;
    }

    @media (max-width: 800px) {
        .footer-widget__about {
            text-align: center;
        }

        .footer-widget__social-box {
            justify-content: center;
        }

        .footer-widget__explore-list-box {
            display: flex;
            justify-content: space-around;
        }

        .list-unstyled.footer-widget__contact-list {
            padding-right: 0;
        }

        .list-unstyled.footer-widget__contact-list li {
            display: flex;
            justify-content: center;
        }

        .footer-widget__contact-list li::before {
            left: 35px;
            right: 35px;
        }

        .footer-google-map .container {
            display: flex;
            justify-content: center;
        }
    }
</style>
<footer class="site-footer  text-center text-md-end">
    <div class="site-footer__bg"
        style="background-image: url({{asset('webassets/assets/images/backgrounds/site-footer-bg-img.webp')}});"></div>
    <div class="site-footer__ripped-paper"
        style="background-image: url({{asset('webassets/assets/images/shapes/site-footer-ripped-paper.webp')}});"></div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a title="gmal" href="{{ url('/') }}"><img
                                    src="{{asset('webassets/assets/images/resources/footer-logo.webp')}}"
                                    alt="footer-logo"></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text" style="word-spacing: 2px;">نحن نقدم
                                <br> منتجات طازجة وعالية الجودة كل يوم
                            </p>
                        </div>
                        <div class="footer-widget__social-box">
                            {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
                            <a href="https://www.facebook.com/gamalgomaafarm?mibextid=ZbWKwL" target="_blank"
                                title="facebook"><i class="fab fa-facebook"></i></a>
                            {{-- <a href="#"><i class="fab fa-pinterest-p"></i></a> --}}
                            <a href="https://www.instagram.com/gamalgomaafarms/?igshid=MzRlODBiNWFlZA%3D%3D"
                                target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp " data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">استكشف</h3>
                        </div>
                        <div class="footer-widget__explore-list-box">
                            <ul class="footer-widget__explore-list list-unstyled text-center">
                                <li><a title="about" href="{{ url('/about') }}">عن الشركة</a></li>
                                <li><a title="services" href="{{ url('/services') }}">خدماتنا</a></li>
                                <li><a title="products" href="{{ url('/products') }}">المنتجات</a></li>
                                <li><a title="news" href="{{ url('/news') }}">الاخبار</a></li>
                                <li><a title="jobs" href="{{ url('/jobs') }}">الوظائف</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">اتصل بنا</h3>
                        </div>
                        <p class="footer-widget__contact-text"><i class="fas fa-map-marker-alt px-1"></i>{{
                            $contact->address }}
                        </p>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="text">
                                    <p style="direction: ltr"><a title="tel"
                                            href="tel:{{$contact->phone}}">{{$contact->phone}} <i
                                                class="fas fa-phone px-1"></i></a></p>
                                    <p style="direction: ltr"><a title="htel"
                                            href="tel:{{$contact->mobile}}">{{$contact->mobile}} <i
                                                class="fas fa-phone px-1"></i></a></p>

                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p><a title="to" href="mailto:{{ $contact->email }} "><i
                                                class="fas fa-envelope px-1"></i>{{
                                            $contact->email }}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__gallery">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">موقعنا</h3>
                        </div>

                        <!--Google Map Start-->
                        <section class="footer-google-map">
                            <div class="container">
                                <a href="#" title="gogle" target="_blank">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3458.4147505398228!2d31.207061775548674!3d29.9099597749916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjnCsDU0JzM1LjkiTiAzMcKwMTInMzQuNyJF!5e0!3m2!1sen!2seg!4v1692302129347!5m2!1sen!2seg"
                                        class="google-map__one" allowfullscreen></iframe>
                                </a>

                            </div>
                        </section>
                        <!--Google Map End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__bottom-left">
                            <p class="site-footer__bottom-text"> حقوق الطبع والنشر © <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ url('/') }}" title="home" aria-label="logo image"><img
                    src="{{asset('webassets/assets/images/resources/footer-logo.webp')}}" width="104" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a title="mail" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a title="mob" href="tel:0021002642073">{{ $contact->mobile }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                {{-- <a href="#" class="fab fa-twitter"></a> --}}
                <a href="https://www.facebook.com/gamalgomaafarm?mibextid=ZbWKwL" target="_blank" title="face"
                    class="fab fa-facebook-square"></a>
                {{-- <a href="#" class="fab fa-pinterest-p"></a> --}}
                <a href="https://www.instagram.com/gamalgomaafarms/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank"
                    title="insta" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>