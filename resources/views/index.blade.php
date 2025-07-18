@extends("layouts.app")
@section("content")


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">{{-- Chosen by the King --}}Fresh From the Jungle &#127820;</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('src/img/news-700x435-cosmo.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Astronomy</a>
                            <a class="text-white" href=""><small></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Cosmos for the Curious:</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('src/img/news-700x435-secure.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Security</a>
                            <a class="text-white" href=""><small></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Stay alert to possible data leaks</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('src/img/news-700x435-marketing.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Market</a>
                            <a class="text-white" href=""><small></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">After all, what is Marketing?</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('src/img/news-700x435-smartphone.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Product</a>
                            <a class="text-white" href=""><small></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">You can find the best products here</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('src/img/news-700x435-iasoftware.jpg') }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Software</a>
                            <a class="text-white" href=""><small></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">All about Artificial Intelligence</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Beast Alert&#129421;</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-gta.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Game Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">THE COMPLETE COMPARISON between GTA 6 and GTA 5!!</a>
                                    <!-- <p class="m-0">Nonononon</p> -->
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-ace.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Behold The New Audiovisual Experience</a>
                                    <!-- <p class="m-0">A New Standard for Audiovisual Excellence, Where Innovation Meets Immersive Sound and Cutting-Edge Design.</p> -->
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href="https://htm211.com/track.php?lid=822679&rid=837383&aid=18774430" target='_blank' rel='nofollow'><img class="img-fluid w-100" src="{{ asset('src/img/thyroid.jpeg') }}" alt=""></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-lanterna.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Guy Gardner: The Green lantern the best Warrior of the Trop of Lantern</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-bailarina.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Ballerina</a>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Ana de Armas Says 'Ballerina' Training Was 'Next Level</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-luthor.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Nicholas Hoult as Lex Luthor his presence will steal the scene in this movie</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-supercoeca.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">The superman uniform is cool except this fucking underwear, and you need that?</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-wandinha.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">‘Wandinha’: Lady Gaga’s role in the 2nd season of the series is revealed</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-topgun.jpg') }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Guys I ear about something: Will Top Gun have another sequel?</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                        <small>Gorilla</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-reading.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Mindset</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Books that will help you level up your mindset</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-suplement.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">GrowUp</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Supplements for a better and healthier life</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-mug.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Super mug that mixes your drink</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-darevil.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Cinema Business</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The return of a major Marvel character in Season 2!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href="https://htm261.com/track.php?lid=765580&rid=839452&aid=18774430" target='_blank' rel='nofollow'><img class="img-fluid w-100" src="{{ asset('src/img/prostateplus.jpeg') }}" alt=""></a>
                        </div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="{{ asset('src/img/conan.jpg') }}" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Cinema Business</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Amazon Brings the Sword Back: Conan the Barbarian TV Series in the Works</a>
                                        <!-- <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p> -->
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                            <small>Gorilla</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-laptop.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The high-end laptop that will blow your mind</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-torre.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Monitor that will immerse you in ultra-realistic visuals</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-tv.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The monitor that will immerse you in ultra-realistic visuals</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-4.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <!-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a> -->
                            <!-- <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a> -->
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <!-- <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a> -->
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="{{ asset('src/img/news-800x500-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-Netflix.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Netflix the best top 5 series. </a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-Book.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://a573c-u6xew43mf2nj2cvpqk88.hop.clickbank.net">Build a Fortune With Real Estate Foreclosures and Short Sales.</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-Remixable.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://9f13cayxxdq9zqffs9kkhwq7fu.hop.clickbank.net">Remixable Includes The Fastest, Simplest... & Yet Most Powerful</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-Crypto.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://thecryptocode.com/partners/">Learn: The secret of the Crypto Code</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset('src/img/news-110x110-realstate.jpg') }}" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                        <a class="text-body" href=""><small></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="https://a2efbaz7xaq2uu0frztlqyycyu.hop.clickbank.net">Learn: Real Estate Investor Course</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Products</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Products</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Products</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
        <!-- News With Sidebar Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 text-uppercase font-weight-bold">The Wild Feed</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-BBBlyn.jpg') }}" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Battle for Brooklyn: The New DLC That Will Shake Up</a>
                                        <!-- <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p> -->
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                            <small>Gorilla</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-hig.jpg') }}" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Cinema </a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Highlander the movie for male whiny</a>
                                        <!-- <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p> -->
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                            <small>Gorilla</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <a href="https://htm211.com/track.php?lid=822679&rid=837383&aid=18774430" target='_blank' rel='nofollow'><img class="img-fluid w-100" src="{{ asset('src/img/thyroid.jpeg') }}" alt=""></a>
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-ghost.jpg') }}" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Series</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Oh My Ghost</a>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                            <small>Gorilla</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ asset('src/img/news-700x435-strangerthing.jpg') }}" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Cinema </a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Stranger Things</a>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                            <small>Gorilla</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-cap.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Caps Best itens</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-clothes.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Comfortable and stylish coats</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-chair.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Ergonomic and functional gaming chairs</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-fc.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The best gamers for you and your colleagues</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <a href="https://htm261.com/track.php?lid=769121&rid=837607&aid=18774430" target='_blank' rel='nofollow'><img class="img-fluid w-100" src="{{ asset('src/img/tumeric-b.jpeg') }}" alt=""></a>
                            </div>
                            <div class="col-lg-12">
                                <div class="row news-lg mx-0 mb-3">
                                    <div class="col-md-6 h-100 px-0">
                                        <img class="img-fluid h-100" src="{{ asset('src/img/jumanji.jpg') }}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                        <div class="mt-auto p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="">Cinema Business</a>
                                                <a class="text-body" href=""><small></small></a>
                                            </div>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Jumanji - The amazing adventure will be back in 2026</a>
                                            <!-- <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                                rebum clita rebum dolor stet amet justo</p> -->
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                                <small>Gorilla</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                                <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-glass.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The best virtual reality glasses</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-flexin.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href='https://htm211.com/track.php?lid=808357&rid=839128&aid=18774430' target='_blank' rel='nofollow'><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Supports your hair's natural growth process.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-rose.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Rose is still the best choice to give to a woman</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-thor.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Why the Mjornir is the hammer so fearsome</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Social Follow Start -->

                        <!-- Social Follow End -->

                        <!-- Ads Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                            </div>
                            <div class="bg-white text-center border border-top-0 p-3">
                                <a href=""><img class="img-fluid" src="{{ asset('src/img/news-800x500-2.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <!-- Ads End -->

                        <!-- Popular News Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-3">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-rose.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href=""> Rose is still the best choice to give to a woman</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-reading.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Books that will help you level up your mindset

                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-thor.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Rose is still the best choice to give to a woman</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-glass.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">The best virtual reality glasses</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img class="img-fluid" src="{{ asset('src/img/news-110x110-chair.jpg') }}" alt="">
                                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Products</a>
                                            <a class="text-body" href=""><small></small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Ergonomic and functional gaming chairs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popular News End -->

                        <!-- Newsletter Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                            </div>
                            <div class="bg-white text-center border border-top-0 p-3">
                                <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                                <div class="input-group mb-2" style="width: 100%;">
                                    <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                    </div>
                                </div>
                                <small>Lorem ipsum dolor sit amet elit</small>
                            </div>
                        </div>
                        <!-- Newsletter End -->

                        <!-- Tags Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-3">
                                <div class="d-flex flex-wrap m-n1">
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- News With Sidebar End -->

@endsection