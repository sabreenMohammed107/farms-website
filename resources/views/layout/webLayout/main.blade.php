<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Gamal Gomaa Farm </title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="assets/images/resources/232659713_204434118362200_47229516744215480_n_1-1-removebg-preview.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="assets/images/resources/232659713_204434118362200_47229516744215480_n_1-1-removebg-preview.png" />
    {{-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> --}}
    <meta name="description"
        content="تأسست الشركة بهدف إنتاج وتوريد منتجات البساتين الطازجة ذات الجودة الممتازة والآمنة والصحية والتي تتسم بالاستدامة لعملائنا طوال السنة بأسعار تتسم بالتنافسية العالية.

    تأسست الشركة بهدف استجابة منا لشغفنا بالتجديد المستمر واحترامنا للبيئة، نراهن على التكنولوجيات الحديثة التي تسهل أن نضع في السوق منتجات تتسم بالجودة الممتازة وتمت تعبئتها تحت إشراف صارم ويتم توريدها في الوقت المناسب بحيث ترضي مطالب عملائنا." />

    @include('layout.webLayout.style')

</head>
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
        @include('layout.webLayout.footerScript')
    </body>
</html>
