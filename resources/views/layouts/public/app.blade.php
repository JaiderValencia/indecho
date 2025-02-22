<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INDECHO - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    @vite([
        'resources/assets/lib/public/animate/animate.min.css',
        'resources/assets/lib/public/lightbox/css/lightbox.min.css',
        'resources/assets/lib/public/owlcarousel/assets/owl.carousel.min.css'
    ])

    <!-- Customized Bootstrap Stylesheet -->
    @vite('resources/assets/css/public/bootstrap.min.css')

    <!-- Template Stylesheet -->
    @vite('resources/assets/css/public/style.css')

    <!-- custom css -->
    @yield('css')
</head>

<body>
    @include('partials.public.loader')

    @include('partials.public.topbar')

    @include('partials.public.navbar')

    @yield('content')

    @include('partials.public.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite([        
        'resources/assets/lib/public/easing/easing.min.js',
        'resources/assets/lib/public/waypoints/waypoints.min.js',
        'resources/assets/lib/public/counterup/counterup.min.js',
        'resources/assets/lib/public/lightbox/js/lightbox.min.js',
        'resources/assets/lib/public/owlcarousel/owl.carousel.min.js',
    ])
    <script src="
https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css
" rel="stylesheet">


    <!-- Template Javascript -->
    @vite('resources/assets/js/public/main.js')

    <!-- custom scripts -->
    @yield('scripts')
</body>