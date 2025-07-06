
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>GorilaNews 🦍 | Jungle-Powered News, Roars & Breaking Stories</title>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- START - New Code ================================================= -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Meta Description -->
    <meta name="description" content="GorilaNews delivers raw, wild, and powerful news from the world of pop culture, movies, sports, and viral trends. Tap into the roar of the jungle!">
    <!-- Meta Keywords -->
    <meta name="keywords" content="news, gorilanews, jungle news, wild news, breaking news, pop culture, movies, sports, viral news, the wild feed, primal news, roar news, fresh news">
    <!-- Author -->
    <meta name="author" content="GorilaNews Team">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Robots -->
    <meta name="robots" content="index, follow">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.gorilanews.com/">
    <meta property="og:title" content="GorilaNews 🦍 | The Wild Feed of Real News">
    <meta property="og:description" content="Your wild source for movie news, sports, viral trends, and global roars. Welcome to the primal pulse of the internet.">
    <meta property="og:image" content="https://www.gorilanews.com/images/banner-og.jpg">


    <!-- Favicon -->
    <link href="{{ asset('src/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('src/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
    <!-- END - New Code ================================================= -->
    @stack("styles")
</head>

<body>

    <x-header />

    <x-banner />

    <main>
        @yield("content")
    </main>

    <x-footer />

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('src/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('src/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('src/js/main.js') }}"></script>
</body>

</html>