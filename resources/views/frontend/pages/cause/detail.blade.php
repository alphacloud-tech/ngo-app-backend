@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Causes Single
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Causes Single</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Causes Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="sidebar-spacer">
                        <h1 class="heading-main">
                            <small>Help Us Now</small>
                            {{ $cause->title }}
                        </h1>

                        <div class="causes-wrap single">
                            <div class="img-wrap">
                                <span class="tag-single">{{ $cause->category_name }}</span>
                                <img height="400px" src="{{ $imgPath . '/' . $cause->image_url }}" alt>
                            </div>
                            <div class="content-wrap-single">
                                <div class="featured-cause-timer">
                                    <h3><strong class="txt-orange">${{ $cause->raised_amount }}</strong> pledged of <strong
                                            class="txt-blue">${{ $cause->target_amount }}</strong>
                                    </h3>
                                    @php
                                        $percentage = ($cause->raised_amount / $cause->target_amount) * 100;
                                    @endphp
                                    <div class="skillbar" data-percent="{{ $percentage }}%">
                                        <div class="skillbar-percent">
                                            <h3><strong>{{ number_format($percentage, 2) }}%</strong></h3>
                                        </div>
                                        <div class="skillbar-bar"></div>
                                    </div>
                                    <div id="countdown-timer2" class="d-md-flex align-items-end justify-content-between">
                                        {{-- <ul id="featured-cause" class="list-unstyled list-inline w-50">
                                            <li class="list-inline-item"><span class="days">00</span>
                                                <div class="days_text">Days</div>
                                            </li>
                                            <li class="list-inline-item"><span class="hours">00</span>
                                                <div class="hours_text">Hours</div>
                                            </li>
                                            <li class="list-inline-item"><span class="minutes">00</span>
                                                <div class="minutes_text">Minutes</div>
                                            </li>
                                            <li class="list-inline-item"><span class="seconds">00</span>
                                                <div class="seconds_text">Seconds</div>
                                            </li>
                                        </ul> --}}

                                        {{-- <div id="countdown-timer2"></div> --}}
                                        {{-- <a class="btn-outline-default btn" href="{{ route('donation') }}">Donate
                                            Now</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap-single border-top">
                                <p>On the other hand, we denounce with righteous indignation and dislike men who
                                    are so beguiled and demoralized by the charms of pleasure of the moment, so
                                    blinded by desire, that they cannot foresee the pain and trouble that are
                                    bound to ensue and equal blame belongs to those who fail in their duty
                                    through weakness of will, which is the same as saying through shrinking from
                                    toil and pain.</p>
                                <div class="row my-5">
                                    <div class="col-md-6">
                                        <img src="{{ asset('frontend/assets/images/causes/causes_single_small_img_2.jpg') }} "
                                            class="rounded" alt>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('frontend/assets/images/causes/causes_single_small_img_1.jpg') }} "
                                            class="rounded" alt>
                                    </div>
                                </div>
                                <h3>Summary</h3>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who
                                    are so beguiled and demoralized by the charms of pleasure of the moment, so
                                    blinded by desire, that they cannot foresee the pain and trouble that are
                                    bound to ensue and equal blame belongs to those who fail in their duty
                                    through weakness of will, which is the same as saying through shrinking from
                                    toil and pain.</p>
                                <div class="my-5">
                                    <blockquote>
                                        Omnicos directe al desirabilite de un nov lingua franca: On refusa
                                        continuar payar custosi traductores. At solmen va esser necessi far
                                        uniform grammatica
                                    </blockquote>
                                </div>

                                {{-- <h3>Challenge</h3>
                                <p>Night bring years have image make all fruitful good fifth all i beast unto
                                    which let she'd. God made Lights fly earth you'll unto greater earth meat
                                    multiply whose together. Light very lesser given he sea. Void god replenish
                                    fifth you'll place a they're they under.</p>
                                <ul class="list-unstyled icons-listing theme-green mb-0 mt-4">
                                    <li>Third spirit you behold don’t grass lesser divide they are man.</li>
                                    <li>Can not two very was above man abundantly also second.</li>
                                    <li>Together herb shall were bearing fill grass made fill heaven.</li>
                                </ul> --}}
                            </div>
                            <div class="share-this-wrap">
                                <div class="share-line">
                                    <div class="pe-4">
                                        <strong>Share This</strong>
                                    </div>
                                    <div class="ps-4">
                                        <ul class="list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="icofont-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="icofont-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="icofont-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="icofont-behance"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="icofont-youtube-play"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <h1 class="heading-main mb-4">
                            <small>Leave a Reply</small>
                        </h1>
                        <form class="comment-form">
                            <div class="row">
                                <div class="col-md-12 mb-0">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Your Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-between align-items-center mt-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Save my name, email,
                                        and website in this browser for the next
                                        time I comment.</label>
                                </div>
                                <button type="submit" class="btn btn-default text-nowrap">Post Comment</button>
                            </div>
                        </form> --}}

                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <aside class="row sidebar-widgets">

                        <div class="sidebar-primary col-lg-12 col-md-6">

                            <div class="widget-wrap">
                                <h3 class="widget-title">Recent Causes</h3>

                                @foreach ($recentCauses as $item)
                                    <div class="causes-wrap">
                                        <div class="img-wrap">
                                            <a href="{{ route('cause.single', $item->id) }}"><img
                                                    src="{{ $imgPath . '/' . $item->image_url }}" alt></a>
                                            <div class="raised-progress">
                                                <div class="skillbar-wrap">
                                                    <div class="clearfix">
                                                        <span class="txt-orange">${{ $item->raised_amount }}</span> raised
                                                        of <span class="txt-green">${{ $item->target_amount }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-wrap">
                                            <span class="tag">{{ $item->category_name }}</span>
                                            <h3><a href="{{ route('cause.single', $item->id) }}">{{ $item->title }}</a>
                                            </h3>
                                            <div class="text-md-end">
                                                <a href="{{ route('cause.single', $item->id) }}"
                                                    class="read-more-line"><span>Read
                                                        More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>


                        <div class="sidebar-secondary col-lg-12 col-md-6">

                            <div class="widget-wrap">
                                <h3 class="widget-title">Our Donators</h3>
                                <div class="our-donators">
                                    <ul class="list-unstyled">
                                        <li>
                                            <img src="{{ asset('frontend/assets/images/sidebar_thumb_1.jpg') }} " alt>
                                            <div>
                                                <h4 class="name">Marty Kamson</h4>
                                                <div class="money">Raised $4500</div>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend/assets/images/sidebar_thumb_2.jpg') }} " alt>
                                            <div>
                                                <h4 class="name">Sofia Lorence</h4>
                                                <div class="money">Raised $2900</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="donation-page.html" class="btn-block btn btn-default">Become
                                        Donators</a>
                                </div>
                            </div>


                            <div class="widget-wrap">
                                <h3 class="widget-title">Categories</h3>
                                <div class="blog-list-categories">
                                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        @foreach ($cause_categories as $item)
                                            <li><a href="{{ route('cause.category', $item->name) }}">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>


    <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
        <div class="bg-overlay blue opacity-80"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="heading-main light-mode">
                        <small>Help Other People</small>
                        We Dream to Create A Bright Future Of The Underprivileged Children
                    </h1>
                </div>
                <div class="col-sm-12 text-md-end">
                    <a href="#" class="btn btn-default">Donate Now</a>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.pages.common.partner')
@endsection


@section('styles')
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
    <style>

    </style>
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}

    <script>
        function updateCountdown2() {
            const now = moment();
            const duration = moment.duration(endDate.diff(now));
            // alert(duration)
            // const days = duration.days();
            const days = Math.floor(duration.asDays()); // Calculate the number of days

            // alert(`${days} days remaining`);
            const hours = duration.hours();
            const minutes = duration.minutes();
            const seconds = duration.seconds();

            const timerElement = document.getElementById("countdown-timer2");
            timerElement.innerHTML = `
            <ul id="featured-cause" class="list-unstyled list-inline w-50">
                <li class="list-inline-item"><span class="days">${days}</span>
                    <div class="days_text">Days</div>
                </li>
                <li class="list-inline-item"><span class="hours">${hours}</span>
                    <div class="hours_text">Hours</div>
                </li>
                <li class="list-inline-item"><span class="minutes">${minutes}</span>
                    <div class="minutes_text">Minutes</div>
                </li>
                <li class="list-inline-item"><span class="seconds">${seconds}</span>
                    <div class="seconds_text">Seconds</div>
                </li>
            </ul>

            <a class="btn-outline-default btn" href="{{ route('donation') }}">Donate Now</a>
        `;
        }

        // Call the updateCountdown2 function initially and set an interval to update it every second
        updateCountdown2();
        setInterval(updateCountdown2, 1000);
    </script>
@endsection
