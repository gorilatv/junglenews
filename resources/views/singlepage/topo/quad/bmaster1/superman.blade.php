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
                        <img class="img-fluid w-100" src="http://127.0.0.1:8000/src/img/news-700x435-Superman.jpg" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                    <a class="text-body" href="">{{ $article['created_at']->format('M d, Y') }}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Multifaceted James Gunn</h1>

                                <p>The 2025 Superman was directed by the multifaceted filmmaker James Gunn. I say this because, besides being a director, he's also a screenwriter, producer, actor, and musician from the United States. His career began in the mid-90s as a screenwriter, penning titles such as Tromeo and Juliet, Scooby-Doo, Scooby-Doo 2: Monsters Unleashed, and others.
                                <br><br>Oh, my friends, I almost forgot… come closer, I’ll whisper it to you… pssss… Do you know another movie he wrote? None other than the excellent Dawn of the Dead (2004) — if you haven’t seen it yet, watch it!
                                <br><br>Back to the topic… As a director, his most recent hits include the Guardians of the Galaxy trilogy (2014, 2017, and 2021) and The Suicide Squad (2021), in addition to directing and producing the I Am Groot series (2022), all during his time at Marvel.</p>

                                <br><br><br>
                                <h3 class="text-uppercase font-weight-bold mb-3">Switching Gears to DC and the Leadership Change</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-1.jpg') }}">

                            <p>In 2022, recognizing his talent at Marvel — and aiming to “fix the house” after several missteps in the DC Universe (DCU) — Warner Bros. Discovery hired James Gunn as co-president and co-CEO of DC Studios.
                                <br>His first project in this new phase was the creation of the Peacemaker series — which received mostly positive reviews. The show tests irreverent humor and highlights the excellent collaboration between its two biggest assets: James Gunn (as director) and John Cena (as actor). It was praised by both critics and fans.
                            </p>

                            <h3 class="text-uppercase font-weight-bold mb-3">High Investment in Superman: Legacy</h3>

                            <p>Superman: Legacy is a high-budget film, with estimates suggesting the investment exceeds $200 million, possibly reaching around $400 million. That’s a very large sum, marking the film as DC Studios’ most important release and the starting point of its new cinematic universe.
                            <br><br>Expectations are high, especially with a strong cast including David Corenswet as Superman and Rachel Brosnahan as Lois Lane. Despite the massive investment, it’s expected that the film will yield significant financial returns — driven by the character’s iconic appeal and the fresh direction taken by DC Studios.
                            <br><br>Despite the massive investment, it’s expected that the film will yield significant financial returns — driven by the character’s iconic appeal and the fresh direction taken by DC Studios.<p>

                            <h5 class="text-uppercase font-weight-bold mb-3">Positive Points Seen in the Trailers</h5>
                            <img class="img-fluid w-50 float-right mr-4 mb-2" src="{{ asset('src/img/poster-2.jpg') }}">
                            <p>Now, with the announcement and upcoming release of Superman
                            (working title), anticipation is sky-high — but not without uncertainty.</p>

                            <p>Emotional and inspiring tone: Unlike previous, darker versions, the trailer shows a Superman with classic values, hope, and a more heroic, human approach — reminiscent of Superman: The Animated Series and the Golden/Silver Age comics. Modern-retro visuals: Superman’s costume, with vibrant colors and a retro design, pleased nostalgic fans and modern audiences looking for something different among so many dark superheroes.<br><br>
                            Promising cast: David Corenswet as Clark Kent shows charisma and presence. Rachel Brosnahan as Lois Lane also stood out with a strong and energetic performance in the scenes shown. <br><br>Soundtrack and editing: The trailer is well-built, with a rising rhythm and a soundtrack that aims to capture emotion and grandeur. Massive online engagement: BoxOfficeThe.com analysts point to the record-breaking trailer views — the first full trailer had over 250 million views, making it the most-watched DC trailer in Warner Bros. history.<br><br>Strong fan sentiment and social media engagement, with early marketing reactions being very positive. Strategic release schedule: The film launches ten days after Jurassic World: Dominion, allowing Superman to dominate the following weekend with minimal direct competition.Fantastic Four by Marvel premieres two weeks later, giving both films breathing room — especially since Superman might benefit from strong word-of-mouth. Currently, expectations for Fantastic Four and the Marvel brand are relatively low.<p>


                            <h5 class="text-uppercase font-weight-bold mb-3">Negative or Controversial Points</h5>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-3.jpg') }}">
                            <p>Inevitable comparisons with the Snyderverse: Part of the fanbase remains loyal to Zack Snyder’s
                            visual style. To them, the new Superman might feel "too soft," which could divide opinions. <br><br>Lack of
                            clarity about the new DCU: As Gunn is rebooting the entire universe, casual viewers may be confused
                            about continuity. The trailer doesn’t clearly explain if there are ties to previous films, which
                            could impact broader audience engagement. <br><br>Common complaints revolve around the new Superman
                            suit, skepticism toward James Gunn, and attachment to the former actor/director Henry Cavill,
                            who had been re-hired before Gunn decided on a new direction.<p>

                            <p>Emotional and inspiring tone: Unlike previous, darker versions, the trailer shows a Superman with classic values, hope, and a more heroic, human approach — reminiscent of Superman: The Animated Series and the Golden/Silver Age comics. Modern-retro visuals: Superman’s costume, with vibrant colors and a retro design, pleased nostalgic fans and modern audiences looking for something different among so many dark superheroes.<br><br>
                            Promising cast: David Corenswet as Clark Kent shows charisma and presence. Rachel Brosnahan as Lois Lane also stood out with a strong and energetic performance in the scenes shown. <br><br>Soundtrack and editing: The trailer is well-built, with a rising rhythm and a soundtrack that aims to capture emotion and grandeur. Massive online engagement: BoxOfficeThe.com analysts point to the record-breaking trailer views — the first full trailer had over 250 million views, making it the most-watched DC trailer in Warner Bros. history.<br><br>Strong fan sentiment and social media engagement, with early marketing reactions being very positive. Strategic release schedule: The film launches ten days after Jurassic World: Dominion, allowing Superman to dominate the following weekend with minimal direct competition.Fantastic Four by Marvel premieres two weeks later, giving both films breathing room — especially since Superman might benefit from strong word-of-mouth. Currently, expectations for Fantastic Four and the Marvel brand are relatively low.<p>



                            <h5 class="text-uppercase font-weight-bold mb-3">Box Office Expectations</h5>
                            <img class="img-fluid w-50 float-right mr-4 mb-2" src="{{ asset('src/img/poster-4.jpg') }}">
                            <p>Considering all factors, the box office projections are moderately optimistic:
                                <br><br>If marketing continues emphasizing classic heroic values and adds more action in upcoming trailers, the film could open with $100 to $130 million domestically (USA) in its first weekend.
                                <br><br>Internationally, the character’s appeal and Gunn’s direction could push the global total to $300–400 million in the first few weeks — with the potential to surpass $800 million overall if reviews are favorable.
                                <br><br>Risk: If the film doesn’t deliver the expected visual and emotional weight — especially in final trailers — interest may drop, particularly among more demanding fans.
                            </p>

                            <h5 class="text-uppercase font-weight-bold mb-3">Conclusion</h5>
                            <img class="img-fluid w-50 float-right mr-4 mb-2" src="{{ asset('src/img/poster-5.jpg') }}">
                            <p>James Gunn seems to be betting on a more optimistic, classic, and emotionally rich approach to reintroduce Superman to cinema.
                           <br>Critics and fans are watching closely, torn between hope for a new era and skepticism born from DC’s past failures.
                           <br>The key to success lies in balancing nostalgia, innovation, and action — and the next trailers will be decisive in securing
                           (or losing) public trust before the film's release</p><br><br>





                        </div>

                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="{{ asset('src/img/user.jpg') }}" width="25" height="25" alt="">
                                <span>John Doe</span>
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
