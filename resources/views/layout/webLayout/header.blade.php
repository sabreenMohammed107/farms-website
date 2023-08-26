<header class="main-header">
    <div class="main-header__wrapper">
        <div class="main-header__wrapper-inner">
            <div class="main-header__logo">
                <a href="{{ url('/') }}">
                    <img src="{{asset('webassets/assets/images/resources/logo-1.webp')}}"
                        alt="logo-1.webp"> </a>
            </div>
            <div class="main-header__right">
                <div class="main-header__top">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-left">
                            <p class="main-header__top-left-text">مرحبا بكم في مزرعة جمال جمعة</p>
                        </div>
                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:{{ $contact->mobile }}">{{ $contact->mobile }}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-header__right-bottom">
                    <nav class="main-menu">

                        <div class="main-menu__wrapper">
                            <div class="main-menu__wrapper-inner">

                                <div class="main-menu__main-menu-box">



                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">

                                        <!-- <a class="main-header__logo__nestedNav" href="index.html"><img
                                                src="assets/images/resources/logo-1.png" alt=""></a> -->

                                        <li class="{{ Request::segment(1) == null ? 'current' : '' }}">
                                            <a href="{{ url('/') }}">الرئيسية </a>
                                        </li>
                                        <li class="{{ Request::segment(1) == 'about' ? 'current' : '' }}">
                                            <a href="{{ url('/about') }}">من نحن</a>

                                        </li>
                                        <li class="{{ Request::segment(1) == 'services' ? 'current' : '' }}">
                                            <a href="{{ url('/services') }}">الخدمات</a>

                                        </li>

                                        </li>

                                        <li class="{{ Request::segment(1) == 'products' ? 'current' : '' }}">
                                            <a href="{{ url('/products') }}">منتجاتنا</a>
                                        </li>
                                        <li class="{{ Request::segment(1) == 'news' ? 'current' : '' }}">
                                            <a href="{{ url('/news') }}">الأخبار</a>

                                        </li>
                                        <li class="{{ Request::segment(1) == 'jobs' ? 'current' : '' }}">
                                            <a href="{{ url('/jobs') }}">وظائف</a>
                                        </li>
                                        <li class="{{ Request::segment(1) == 'contact-us' ? 'current' : '' }}">
                                            <a href="{{ url('/contact-us') }}">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
