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
                        <img class="img-fluid w-100" src="http://127.0.0.1:8000/src/img/news-700x435-MI8.jpg" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                    <a class="text-body" href="">{{ $article['created_at']->format('M d, Y') }}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">MI 8 - All or Nothing</h1>

                                <p>The eighth film in the Mission: Impossible franchise is now showing in theaters. That’s right,
                                    the eighth, my friends! And the promise is clear: it’s all or nothing this time. Big thrills
                                    await us on the big screen — get ready to jump out of your seat!
                                </p>
                                <p>It all begins with the looming threat that puts Ethan Hunt’s (Tom Cruise) life at risk. But before diving into the plot, let’s take a moment to reflect: this is the eighth film in the saga, and according to the director, it might mark the end of the character’s journey in theaters. Do you really believe that? Honestly, it’s hard to imagine. This is one of Hollywood’s most successful franchises — a true blockbuster.
                                    <br><br>To put it into perspective, the film had a massive $400 million budget (gross value), making it one of the five most expensive movies of all time. Mission: Impossible – Dead Reckoning has already grossed $540 million worldwide. In the U.S. alone, it’s brought in $178 million, with another $6.55 million added in its fourth weekend. So, my friends, the outlook is excellent. It doesn’t look like this franchise is ending anytime soon.
                                    <br><br>Tom Cruise, our eternal “golden boy” of Hollywood, still has the stamina of a teenager — or better yet, a leopard! His physical dedication and energy are truly impressive.The film’s greatest strength is the combination of experience and breathtaking action scenes. Just from the trailer, we can already see Cruise’s willingness to perform unbelievable stunts — like jumping from a plane mid-air. The suspenseful moments also work very well in the plot.

                                </p>

                                <p>
                                    To put it into perspective, the film had a massive $400 million budget (gross value), making it one of the five most expensive movies of all time. Mission: Impossible – Dead Reckoning has already grossed $540 million worldwide. In the U.S. alone, it’s brought in $178 million, with another $6.55 million added in its fourth weekend. So, my friends, the outlook is excellent. It doesn’t look like this franchise is ending anytime soon.
                                </p>

                                <br>
                                <h3 class="text-uppercase font-weight-bold mb-3">Box Office earnings in American</h3>
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('src/img/poster-MI8.jpg') }}">

                            <p>Tom Cruise, our eternal “golden boy” of Hollywood, still has the stamina of a teenager — or better yet, a leopard! His physical dedication and energy are truly impressive.The film’s greatest strength is the combination of experience and breathtaking action scenes. Just from the trailer, we can already see Cruise’s willingness to perform unbelievable stunts — like jumping from a plane mid-air. The suspenseful moments also work very well in the plot.
                                <br><br>However, not everything is perfect. Due to the writers' strike, the story development was noticeably affected, resulting in plot holes and a lack of coherence in some parts of the film. Important scenes lost focus due to a rushed and underdeveloped script. The submarine scene, for example, was mentioned by director Christopher McQuarrie during a pre-release event as one of the moments compromised by the lack of a stronger script. Critics who saw the film agree: Mission: Impossible 8 falls short of its predecessor when it comes to writing, leaving the more demanding audience a bit disappointed.
                                <br><br>Still, this sequel had the biggest debut of the franchise in both the U.S. and globally. In the U.S., it surpassed Fallout, which opened in 2018 with $61 million. The movie also contributed to the highest Memorial Day weekend box office earnings in American history, with a combined total of $322 million across all releases. The film came in second place that weekend, just behind the Lilo & Stitch remake, which made over $180 million.
                                <br><br>On its release day (June 23), the eighth installment grossed $24.5 million in the U.S. alone — marking the franchise’s best opening day ever in the country.
                            </p>

                            <h3 class="text-uppercase font-weight-bold mb-3">Back to the film</h3>

                            <p> Back to the story: the main threat revolves around the ongoing mission to stop the "Entity" from falling into the hands of Gabriel (played by Esai Morales). Ethan Hunt once again becomes humanity’s only hope in preventing a nuclear catastrophe. As is often the case with films in this genre, the stakes are high — with nuclear war and annihilation looming. And in Mission: Impossible 8, it’s no different.
                            <br><br>The complex series of events places our protagonist in extreme danger, constantly giving us the feeling that this could truly be his final mission.
                            <br><br>Mission: Impossible – Dead Reckoning will still be a hot topic here on the channel, with more videos exploring the market, public response, and other elements. And honestly? I don’t believe this is the end of the Mission: Impossible franchise. The name alone carries enormous weight — with or without Tom Cruise.</p>


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
                                <img src="{{ asset('src/img/user01.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">noahlovesmovies</a> <small><i>20 Jun 2025</i></small></h6>
                                    <p>
                                        Just watched Mission: Impossible 8 and WOW 😱 Tom Cruise is literally defying age and gravity. That plane scene?? Insane. Totally worth the ticket.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{ asset('src/img/user02.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">emma_writes</a> <small><i>20 Jun 2025</i></small></h6>
                                    <p>I don't care what anyone says, this franchise still delivers. The action scenes are top-tier. The submarine part was a bit confusing though 🤔 anyone else felt that?</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="{{ asset('src/img/user03.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">geekygabe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Solid movie but the plot wasn’t as tight as Fallout. Still, Cruise doing his own stunts in his 60s? Mad respect. 🔥</p>
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
