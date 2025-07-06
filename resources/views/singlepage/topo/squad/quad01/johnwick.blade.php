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
                        <img class="img-fluid w-100" src="http://127.0.0.1:8000/src/img/news-700x435-JW.jpg" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                                    <a class="text-body" href="">{{--{{ $article->created_at->format('M d, Y') }}--}}<a class="text-body" href="">{{ $article['created_at']->format('M d, Y') }}</a></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Abnormal success in action movie series</h1>
                            <h3 class="mb-3 text-secondary text-uppercase font-weight-bold">The Myth completes (Rhymed & Analytical)</h3>

                                <p>With its fourth chapter, John Wick becomes more than just a franchise — it's a cultural icon, blending emotion and violence into a stylish visual revolution that conquered the world.
                                   <br><br>In the world of action movies, John Wick isn’t just another franchise — it's an abnormal success case. It began with a simple premise: a grieving man, a stolen car, a dead
                                   dog… and a thirst for revenge. But what seemed like a basic setup evolved into a global phenomenon. And with John Wick 4: Baba Yaga, this saga reaches its peak — mixing mythology, style, and violence like no other modern series.
                                   Now, the man in the bulletproof suit becomes a global legend — and yes, we’re doing this in rhyme.
                                </p>

                                <br>
                                <h3 class="text-uppercase font-weight-bold mb-3">We rhyme the chaos, decode the charm, and critique the craft</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-33.jpg') }}">

                                <p>It started with loss, a quiet rage, And became a saga that shook the stage.
                                John Wick — the name they whisper low, With a single mission, he stole the show. He breaks the rules,
                                rewrites the frame, Blends cold execution with burning flame. A silent hero, deadly and sleek, Turned pure
                                revenge into something unique. With every chapter, the stakes grew high, Baba Yaga came — and touched the sky.
                                Three hours long, yet never slow, A masterpiece of pain and flow. It’s strange success, rare and raw, From
                                humble roots, it dropped jaws. The saga proved with style and grace, Even gunfire can leave a trace.
                                Anime, comics, samurai west, Each scene a duel, each fight a test. The camera spins, the pacing flies,
                                And fans erupt with eager cries.  Keanu plays it with mournful charm, Quiet intensity, calm with alarm.
                                A tragic knight, with pain suppressed, That pulls emotion from every chest. This isn’t just action — it’s
                                cinema reborn, A legacy built from grief and scorn. And if this is the end of the dance, John Wick stands
                                tall — the myth, the stance.</p>

                            <h3 class="mb-3 text-secondary text-uppercase font-weight-bold">Final Analytical Wrap-Up:</h3>

                                <p>John Wick is more than just bullets and bravado. It's a lesson in building cinematic identity — a rare case where
                                    choreography, narrative minimalism, and myth-building created something enduring. John Wick 4 doesn’t
                                    just close a chapter — it immortalizes a character and redefines modern action.
                                </p>



                                <p>Still think action films are brainless fun? Watch Baba Yaga — and rethink everything.
                                    Loved this rhymed analysis? Want it as a video script or voiceover?
                                    Comment below — and join the Wick cult.
                                </p>
                                <br>


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
