    <section class="main-banner">
        <div class="container start">
            <div class="slides-wrap">
                <div class="owl-carousel owl-theme">
                    @foreach ($sliders as $item)
                        <div class="owl-slide d-flex align-items-center cover"
                            style="background-image: url('{{ $imgPath . '/' . $item->image_url }}');">

                            <div class="container">
                                <div class="row justify-content-center justify-content-md-start no-gutters">
                                    <div class="col-10 col-md-4 static">
                                        <div class="owl-slide-text">
                                            <h3 class="owl-slide-animated owl-slide-title">{{ $item->slide_title }}</h3>
                                            <h1 class="owl-slide-animated owl-slide-subtitle">
                                                {{ $item->slide_subtitle }}
                                            </h1>
                                            <div class="owl-slide-animated owl-slide-cta">
                                                <a class="btn btn-default me-3" href="{{ route('cause') }}"
                                                    role="button">Join
                                                    Us
                                                    Now</a>
                                                <a class="slider-link popup-video"
                                                    href="{{ asset('frontend/assets/images/vi.mp4') }}">Watch the video
                                                    <i class="charity-play_button"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <br>
            <div class="container pos-rel">
                <div class="funds-committed">
                    {{-- <small>Total Funds Committed</small> --}}
                    <span class="counte">
                        <video controls width="200" height="100">
                            <source src="{{ asset('frontend/assets/images/vi.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </span>


                </div>
            </div>
        </div>
    </section>
