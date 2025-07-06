@extends("layouts.interapp")

@section("content")

<!-- Breaking News Start -->
<div class="container-fluid mt-5 mb-3 pt-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="section-title border-right-0 mb-0" style="width: 180px;">
                        <h4 class="m-0 text-uppercase font-weight-bold">{{-- Trading --}}Scoop</h4>
                    </div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                        style="width: calc(100% - 180px); padding-right: 100px;">
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">James Gunn doubles down on Superman’s iconic look.</a></div>
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">F1 film races to box-office victory</a></div>
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">Christopher Nolan takes on Homer with a full-IMAX adaptation</a></div>
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="#">Grease lightning strikes again. John Travolta made a surprise appearance at a “Grease” sing-along event at the Hollywood Bowl, showing up in full Danny Zuko costume.</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="http://127.0.0.1:8000/src/img/news-800x500-F100.png" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                    <a class="text-body" href="">{{--{{ $article->created_at->format('M d, Y') }}--}}<a class="text-body" href="">{{ $article['created_at']->format('M d, Y') }}</a></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">"Formula 1" – More Than Speed, It's Pure Cinema Adrenaline</h1>

                                <p>Ladies and gentlemen, start your engines… because today we’re diving helmet-first into the high-octane world of Formula 1, the movie that brings the roar of engines, the drama of rivalries, and the elegance of speed straight to the big screen.
                                    <br><br>Directed by none other than Joseph Kosinski — yes, that same visual magician behind Tron: Legacy and Top Gun: Maverick — this film doesn’t just flirt with the edge of your seat. It straps you in, hits the accelerator, and doesn’t slow down until the credits roll. Kosinski is a master of mixing human emotion with mechanical intensity, and Formula 1 is no exception.
                                    <br><br>Oh, and here's a juicy pit stop of info for you: Brad Pitt — yes, that Brad Pitt — plays a retired Formula 1 driver making a dramatic return to mentor a rising star. The plot? Classic. The execution? Chef’s kiss. And wait for it… real F1 teams and drivers are involved. I’m not kidding. They filmed at actual Grand Prix events. That’s the real smell of burnt rubber you’re sensing.
                                    <br><br>Come closer… just between us, do you remember the last time a sports movie gave you goosebumps before the final race? This one does it in the first 15 minutes. And it’s not just adrenaline — it’s heart. It’s struggle. It’s legacy.
                                    <br><br>From the sound design that makes your chest vibrate to the cinematography that puts you inside the cockpit, Formula 1 is not just a movie — it’s a visceral experience. Whether you’re a die-hard fan of the sport or someone who thinks "DRS" is just a typo for "DRSsing," you’ll be hooked.
                                    <br><br>So, buckle up, my friend. You’re not just watching a movie — you’re living a lap in the world’s fastest, most glamorous, and most dangerous sport.
                                    <br><br>And if you make it through without wanting to floor it down your nearest highway (don’t do that, seriously), you’re stronger than I am.</p>

                                <br>
                                <h3 class="text-uppercase font-weight-bold mb-3">My fellas will speak very quietly to you</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-28.jpg') }}">

                            <p>Come closer… just between us, do you remember the last time a sports movie gave you goosebumps before the final race? This one does it in the first 15 minutes. And it’s not just adrenaline — it’s heart. It’s struggle. It’s legacy.
                                <br><br>From the sound design that makes your chest vibrate to the cinematography that puts you inside the cockpit, Formula 1 is not just a movie — it’s a visceral experience. Whether you’re a die-hard fan of the sport or someone who thinks "DRS" is just a typo for "DRSsing," you’ll be hooked.
                                <br><br>So, buckle up, my friend. You’re not just watching a movie — you’re living a lap in the world’s fastest, most glamorous, and most dangerous sport.
                                <br><br>And if you make it through without wanting to floor it down your nearest highway (don’t do that, seriously), you’re stronger than I am.</p>

                            </p>


                        </div>

                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="{{ asset('src/img/user00.jpg') }}" width="25" height="25" alt="">
                                <span>Jessica Karl</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->


                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="{{ asset('src/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{ asset('src/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="{{ asset('src/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum.</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>

                <x-sidebar />

            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->






@endsection
