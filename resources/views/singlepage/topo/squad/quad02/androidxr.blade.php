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
                        <img class="img-fluid w-100" src="http://127.0.0.1:8000/src/img/news-700x435-android-xr.jpg" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                                    <a class="text-body" href="">{{--{{ $article->created_at->format('M d, Y') }}--}}<a class="text-body" href="">{{ $article['created_at']->format('M d, Y') }}</a></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Android XR: Glasses That Think, Speak and Remember — Welcome to Google 2.0</h1>

                                <p>Here comes the vision, Google’s on the scene, With glasses so smart, it feels like a dream. Android XR is the name they chose, It sees what you see — and totally knows. Gemini in the brain, Qualcomm in the core,
                                    Backed by Samsung — need we say more? Unveiled at Google I/O with a grin, As if to say: “The future? We’re in.”
                                </p>

                                <br>
                                <h3 class="text-uppercase font-weight-bold mb-3">It sees, it hears — your sixth <br>sense in gear</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-31.jpg') }}">

                                <p>With mics and cams, and AI on deck, Gemini’s watching, making notes in your tech. Need directions? A store? A place to be? Just speak — it answers, instantly.
 Forget your phone glued to your hand, The glasses alone will understand. They’ll recall that sign you barely saw, And schedule your dentist, without a flaw.
 Need to chat in French on a busy train? No sweat — real-time subs in your frame. It's subtitles floating in the air, Google saying, “Relax — I’m there.”</p>


                                <br><br>
                                <h3 class="mb-3 text-secondary text-uppercase font-weight-bold">Final Analytical Wrap-Up:</h3>
                                <p>Gentle Monster and Warby got the call, To keep you looking sharp — not like a mall cop, y’all. Tech that flexes with influencer charm, No cyborg vibes, just futuristic calm. And if you're a dev with flair to spare, The prototypes are out — go build, go dare. Wanna code for lenses that read the day? Now’s the time — create, display.
                                </p>

                                <p>Still think action films are brainless fun? Watch Baba Yaga — and rethink everything. Loved this rhymed analysis? Want it as a video script or voiceover? Comment below — and join the Wick cult.
                                </p>

                                <h3 class="mb-3 text-secondary text-uppercase font-weight-bold">Project Moohan: headset from space, world in your face</h3>
                                <p> But wait — for those who want the full display,There’s Moohan, the headset that leads the way.An infinite screen wrapped 'round your head,With Gemini whispering all that’s said.
Wanna walk Tokyo from your chair?Watch a match with stats in the air?It’s Google’s clapback to Apple’s Pro,With Samsung tech — and room to grow.
No flights, no queues, no need to roam,It’s mixed reality from the comfort of home.Ask, explore, learn and see,This headset says: “You’re everything, to me.”
                                </p>


                                <h3 class="mb-3 text-secondary text-uppercase font-weight-bold">Rhyme-wrapped conclusion, with just a pinch of suspicion</h3>
                                <p> Android XR — genius or too far? Your face is now the interface star. It talks, it sees, it knows your day, But how much of you does it take away? In the end, my friend, it’s your own ride,
                                    Pilot the ship or watch from the side. But know this: the future’s got its specs on tight — And it's calling you in… to join the light.
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
