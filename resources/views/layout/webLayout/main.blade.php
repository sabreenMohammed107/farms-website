
    {{-- @include('layout.webLayout.style') --}}


<!--end::Head-->
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
