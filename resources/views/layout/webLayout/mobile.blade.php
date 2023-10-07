
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
