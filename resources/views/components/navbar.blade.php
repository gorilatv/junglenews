
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
    <!-- END - New Code ==============
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="#" class="navbar-brand p-0 d-none d-lg-block">
                    <img src="{{ asset('src/img/logoGorillaNews.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htm211.com/track.php?lid=763070&rid=745748&aid=18774430" target='_blank' rel='nofollow'><img class="img-fluid w-100" src="{{ asset('src/img/sleeps.jpeg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <img src="{{ asset('src/img/logoGorilla.png') }}" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="index.html" class="nav-item nav-link">Movies</a>
                    <a href="index.html" class="nav-item nav-link">Series</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">World Heroes</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Marvel</a>
                            <a href="#" class="dropdown-item">DC</a>
                            <a href="#" class="dropdown-item">HQ</a>
                            <a href="#" class="dropdown-item">Games</a>
                        </div>
                    </div>
                    <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


