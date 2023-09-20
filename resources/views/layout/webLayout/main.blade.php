{{-- @include('layout.webLayout.style') --}}


<!--end::Head-->
<style>
    .page-header-bg:before {
    content: "";
    top: 0;
    background: linear-gradient( 0deg, rgb(0 0 0 / 56%) 0, rgba(0, 0, 0, 0.24) 100% );
}
.page-header__inner h3,h1{
    color:#fff;
}
.thm-breadcrumb li a:hover {
color: #fff;
text-decoration: underline
}
    </style>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    {{-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('layout.webLayout.header')
        @yield('content')
        @include('layout.webLayout.footer')
        {{-- @include('layout.webLayout.footerScript') --}}
</body>

</html>
