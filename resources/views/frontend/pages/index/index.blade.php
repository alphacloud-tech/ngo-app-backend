@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Welcome to Paulsabinna Foundation
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    @include('frontend.pages.common.slider')


    {{-- <section class="wide-tb-100 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Welcome To Raise Hope</small>
                        Small Actions Lead To Big changes
                    </h1>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section class="wide-tb-100 bg-green pt-0 welcome-broke-grid">
        <div class="container">
            <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="causes-single.html"><img src="{{ asset('frontend/assets/images/causes/causes_img_1.jpg') }} "
                                    alt></a>
                        </div>
                        <div class="text">
                            <h3>Help For Education</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-end">
                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="causes-single.html"><img src="{{ asset('frontend/assets/images/causes/causes_img_4.jpg') }} "
                                    alt></a>
                        </div>
                        <div class="text">
                            <h3>Help For Humanity</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-end">
                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>

                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="causes-single.html"><img src="{{ asset('frontend/assets/images/causes/causes_img_3.jpg') }} "
                                    alt></a>
                        </div>
                        <div class="text">
                            <h3>Help For Water</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-end">
                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">

                    <div class="icon-box-with-img">
                        <div class="img">
                            <a href="causes-single.html"><img src="{{ asset('frontend/assets/images/causes/causes_img_5.jpg') }} "
                                    alt></a>
                        </div>
                        <div class="text">
                            <h3>Help For Food</h3>
                            <p>A wonderful serenity has taken possession of my entire soul</p>
                            <div class="text-md-end">
                                <a href="causes-single.html" class="read-more-line"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto welcome-home-first">
                    <div class="text-center mt-5">
                        That’s 14% of the world’s population. Put another way, that's 1 in 8 people alive today
                        living without hope amongst trash, sewage, drugs, and abuse in unimaginable conditions.
                        Life without secure housing is a life without basic needs being met.
                    </div>
                    <div class="row my-5">

                        <div class="col-sm-6 col-sm-6 mb-sm-0">
                            <div class="icon-box-1">
                                <i class="charity-volunteer_people"></i>
                                <div class="text">
                                    <h3>3,750 <br> <span class="txt-black">Volunteers</span></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="icon-box-1">
                                <i class="charity-donate_money"></i>
                                <div class="text">
                                    <h3>14,800 <br> <span class="txt-black">Trusted Funds</span></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-5">
                        <a href="become-volunteers.html" class="btn btn-default">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="wide-tb-100 bg-white featured-heart-icon-hidden">
        {{-- <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="featured-causes-img">
                        <img src="{{ asset('frontend/assets/images/causes/featured_cause.jpg') }} " alt>
                        <div class="featured-cause-timer">
                            <h3><strong class="txt-orange">$75,864</strong> pledged of <strong
                                    class="txt-blue">$100,000</strong></h3>
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-bar"></div>
                            </div>
                            <ul id="featured-cause" class="list-unstyled list-inline">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-content">
                        <div class="featured-heart-icon"><i class="charity-hearts"></i></div>
                        <h1 class="heading-main">
                            <small>Featured Cause</small>
                            Emergency Relief Donations for a Mighty Cause
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <a href="donation-page.html" class="btn btn-default">Donate Now</a>
                            <div class="share-on-text">
                                <strong>Share On</strong> <a href="#"><img
                                        src="{{ asset('frontend/assets/images/facebook.svg') }} " alt></a> <a href="#"><img
                                        src="{{ asset('frontend/assets/images/instagram.svg') }} " alt></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container-fluid">
            <div class="row align-items-center">
                @if ($featuredCause)
                    <div class="col-lg-7">
                        <div class="featured-causes-img">
                            <img src="{{ $imgPath . '/' . $featuredCause->image_url }}" alt>
                            <div class="featured-cause-timer">
                                <h3><strong class="txt-orange">${{ $featuredCause->raised_amount }}</strong> pledged of
                                    <strong class="txt-blue">${{ $featuredCause->target_amount }}</strong>
                                </h3>
                                @php
                                    $percentage = ($featuredCause->raised_amount / $featuredCause->target_amount) * 100;
                                @endphp
                                <div class="skillbar" data-percent="{{ $percentage }}%">
                                    <div class="skillbar-bar"></div>
                                </div>
                                {{-- <ul id="featured-cause" class="list-unstyled list-inline">
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

                                <div id="countdown-timer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-content">
                            <div class="featured-heart-icon"><i class="charity-hearts"></i></div>
                            <h1 class="heading-main">
                                <small>Featured Cause</small>
                                {{ $featuredCause->title }}
                            </h1>
                            <p>{!! $featuredCause->description !!}</p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a href="{{ route('donation') }}" class="btn btn-default">Donate Now</a>
                                <div class="share-on-text">
                                    <strong>Share On</strong> <a href="#"><img
                                            src="{{ asset('frontend/assets/images/facebook.svg') }}" alt></a>
                                    <a href="#"><img src="{{ asset('frontend/assets/images/instagram.svg') }}" alt></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Handle the case when there is no featured cause -->
                    <div class="col-lg-7">
                        <p>No featured cause available.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-4 col-md-6">
                    <h1 class="heading-main">
                        <small>Help Us Now</small>
                        More Recent Causes
                    </h1>
                </div>
                <div class="col-lg-8 col-md-6 text-md-end btn-team">
                    <a href="{{ route('cause') }}" class="btn btn-outline-dark">View All Causes</a>
                </div>
            </div>
            <div class="row">
                @foreach ($causes as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="causes-list.html">
                                    {{-- <img src="{{ isset($welcomeNote) ? $imgPath . '/welcomenote_photo/' . $welcomeNote->image_name : '' }}"
                        alt=" " width="230" height="270" />  338 × 265 --}}
                                    <img width="338px" height="265px" src="{{ $imgPath . '/' . $item->image_url }}" alt>
                                </a>
                                <div class="raised-progress">
                                    <div class="skillbar-wrap">
                                        <div class="clearfix">
                                            ${{ $item->raised_amount }} raised of ${{ $item->target_amount }}
                                        </div>

                                        @php
                                            $percentage = ($item->raised_amount / $item->target_amount) * 100;
                                        @endphp
                                        <div class="skillbar" data-percent="{{ $percentage }}%">
                                            <div class="skillbar-percent">{{ number_format($percentage, 2) }}%</div>
                                            <div class="skillbar-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <span class="tag">{{ $item->category_name }}</span>
                                <h3><a href="causes-list.html">{{ $item->title }}</a></h3>
                                <p>{!! $item->description !!}</p>
                                <div class="btn-wrap">
                                    <a class="btn-primary btn" href="{{ route('donation') }}">Donate Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- Help Other People --}}
    @include('frontend.pages.common.help')
    @include('frontend.pages.common.gallery')

    {{-- Get to Know Us --}}
    <section class="wide-tb-100 bg-white mb-spacer-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Get to Know Us</small>
                        Let Us Come Together To Make a Difference
                    </h1>
                    <p>
                        Helpless poor children are innocent in their struggle for survival. This evokes the necessity for
                        concerted action to help families in attaining the basic needs for decent living.</p>

                    <div class="skillbar-wrap">
                        <div class="clearfix">
                            Food Help
                        </div>
                        <div class="skillbar" data-percent="67%">
                            <div class="skillbar-percent">67%</div>
                            <div class="skillbar-bar"></div>
                        </div>
                    </div>


                    <div class="skillbar-wrap">
                        <div class="clearfix">
                            Medical Help
                        </div>
                        <div class="skillbar" data-percent="85%">
                            <div class="skillbar-percent">85%</div>
                            <div class="skillbar-bar"></div>
                        </div>
                    </div>

                </div>

                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

                <div class="col-lg-7 col-md-12">

                    <ul class="nav nav-pills theme-tabbing mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" href="#pills-mission"
                                role="tab" aria-controls="pills-mission" aria-selected="true">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" href="#pills-vision"
                                role="tab" aria-controls="pills-vision" aria-selected="false">Our Vision</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="pills-history-tab" data-bs-toggle="pill" href="#pills-history"
                                role="tab" aria-controls="pills-history" aria-selected="false">Our History</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content theme-tabbing" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                            aria-labelledby="pills-mission-tab">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="about-img-small">
                                        <img src="{{ asset('frontend/assets/images/about_img_2.jpg') }} " class="about-us-2" alt>
                                        <div class="since-year">
                                            <span>Since</span>
                                            14
                                            <span class="text-end">Years</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        <li>Eradicate hunger and malnutrition by providing food assistance and nutritional
                                            support.</li>
                                        <li>Alleviate poverty and improve the quality of life for underserved communities
                                            worldwide.</li>
                                        <li>We strive to provide disaster relief, humanitarian aid, and support to those in
                                            crisis</li>
                                        <li>We aim to foster education and skills development to create brighter futures for
                                            youth and adults.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="about-img-small">
                                        <img src="{{ asset('frontend/assets/images/about_img_2.jpg') }} " class="about-us-2" alt>
                                        <div class="since-year">
                                            <span>Since</span>
                                            14
                                            <span class="text-end">Years</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        <li>We envision a future where education is accessible to all, regardless of
                                            socioeconomic background.</li>
                                        <li>We aspire to eliminate hunger and ensure everyone has access to nutritious food.
                                        </li>
                                        <li>We see a world where disasters no longer devastate communities, as we build
                                            resilience and preparedness.</li>
                                        <li>We see a world where healthcare is a fundamental right and accessible to all.
                                        </li>
                                        <li>We aim to protect the world's wildlife and ecosystems, leaving a legacy of
                                            biodiversity for future generations.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Team Member --}}
    @include('frontend.pages.common.team')


    {{-- Frequently Asked Questions --}}
    <section class="wide-tb-100 pattern-orange pt-0 mb-spacer-md">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="faqs-wrap pos-rel">
                        <div class="bg-overlay blue opacity-80"></div>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-12">
                                <h1 class="heading-main light-mode">
                                    <small>Have Questions</small>
                                    Frequently Asked Questions
                                </h1>
                                <p> At Paulsabinna Foundation for the Needy, we are a collective of passionate individuals,
                                    committed to
                                    a common purpose – to
                                    make the world a better place. Our organization's story began with a belief that
                                    everyone,
                                    regardless of their circumstances, deserves a chance for a brighter future. From that
                                    belief, our
                                    mission was born.
                                </p>
                                <a class="btn btn-default" href="{{ route('faq') }}">Ask It Now</a>
                            </div>

                            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

                            <div class="col-12 col-lg-6 col-md-12">
                                <div class="theme-collapse light">

                                    <div class="toggle arrow-down">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> What is Paulsabinna Foundation?
                                    </div>


                                    <div class="collapse show">
                                        <div class="content">
                                            Paulsabinna Foundation is a non-profit organization dedicated to transform lives
                                            for the better.
                                        </div>
                                    </div>


                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> How can I get involved with Paulsabinna Foundation?
                                    </div>


                                    <div class="collapse">
                                        <div class="content">
                                            There are various ways to get involved with us. Volunteering, donating, becoming
                                            a member, or attending events.
                                        </div>
                                    </div>


                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> Where does my donation go?
                                    </div>


                                    <div class="collapse">
                                        <div class="content">
                                            Your donations go directly to support our projects and initiatives. We
                                            prioritize transparency and accountability, ensuring that your contribution
                                            makes a meaningful impact.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">

                <div class="col col-12 col-lg-3 col-sm-6">
                    <div class="counter-style-box">
                        <div class="counter-txt"><span class="counter">180</span>+</div>
                        <div>Featured Campaign</div>
                    </div>
                </div>


                <div class="col col-12 col-lg-3 col-sm-6">
                    <div class="counter-style-box">
                        <div class="counter-txt"><span class="counter">7120</span>+</div>
                        <div>Money Raised</div>
                    </div>
                </div>


                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>


                <div class="col col-12 col-lg-3 col-sm-6">
                    <div class="counter-style-box">
                        <div class="counter-txt"><span class="counter">250</span>+</div>
                        <div>Dedicated Volunteers</div>
                    </div>
                </div>


                <div class="col col-12 col-lg-3 col-sm-6">
                    <div class="counter-style-box">
                        <div class="counter-txt"><span class="counter">1530</span>+</div>
                        <div>People Helped Happily</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Latest Events --}}
    <section class="wide-tb-100">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-6 col-md-8">
                    <h1 class="heading-main">
                        <small>Join Us</small>
                        Reach Out & Help In Our Latest Events
                    </h1>
                </div>
                <div class="col-lg-6 col-md-4 text-md-end btn-team">
                    <a href="{{ route('event') }}" class="btn btn-outline-dark">View All Events</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-wrap">
                        @if ($latentEvent)
                            <div class="img-wrap">
                                <a href="{{ route('event.single', $latentEvent->id) }}">
                                    @if ($latentEvent)
                                        <img height="356px" src="{{ $imgPath . '/' . $latentEvent->image_url }} " alt>
                                    @else
                                        <img src="{{ asset('frontend/assets/images/events/event_img_1.jpg') }} " alt>
                                    @endif
                                </a>
                            </div>
                            @php
                                $date = \Carbon\Carbon::parse($latentEvent->date);
                                $day = $date->format('d'); // Extract the day
                                $month = $date->format('M'); // Extract the abbreviated month name
                            @endphp
                            <div class="content-wrap">
                                <div class="date-wrap d-lg-flex align-items-end">
                                    <div class="date-box">
                                        {{ $day }} <span>{{ $month }}</span>
                                    </div>
                                    <div class="event-details">
                                        <div><i data-feather="clock"></i>
                                            {{ \Carbon\Carbon::parse($latentEvent->start_time)->format('h:i A') }}
                                        </div>
                                        <div><i data-feather="map-pin"></i> {{ $latentEvent->location }}</div>
                                    </div>
                                </div>
                                <h3><a href="{{ route('event.single', $latentEvent->id) }}">{{ $latentEvent->title }}</a>
                                </h3>
                                <p>{!! \Illuminate\Support\Str::limit($latentEvent->description, 131) !!}
                                </p>
                            </div>
                            <div class="text-md-end read-more-wrap">
                                <a href="{{ route('event.single', $latentEvent->id) }}" class="read-more-line"><span>Read
                                        More</span></a>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="w-100 d-none d-sm-none d-lg-none spacer-60 d-md-block"></div>

                <div class="col-lg-6">
                    <div class="row h-100">
                        @foreach ($events as $item)
                            @php
                                $date = \Carbon\Carbon::parse($item->date);
                                $day = $date->format('d'); // Extract the day
                                $month = $date->format('M'); // Extract the abbreviated month name
                            @endphp
                            <div class="col-12 mb-5">
                                <div class="event-wrap-single">
                                    <div class="date-wrap d-md-flex align-items-start">
                                        <div class="date-box">
                                            {{ $day }} <span>{{ $month }}</span>
                                        </div>
                                        <div class="event-details">
                                            <div class="mb-3">
                                                <span class="mr-3"><i
                                                        data-feather="clock"></i>{{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}</span>
                                                <i data-feather="map-pin"></i> {{ $item->location }}
                                            </div>
                                            <h3><a href="{{ route('event.single', $item->id) }}">{{ $item->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-md-end">
                                        <a href="{{ route('event.single', $item->id) }}"
                                            class="read-more-line"><span>Read
                                                More</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    @include('frontend.pages.common.testimonial')

    {{-- News & Blogs --}}
    <section class="wide-tb-100">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-6 col-md-8">
                    <h1 class="heading-main">
                        <small>News & Blogs</small>
                        Some Of Our Recent Stories &amp; News Blog
                    </h1>
                </div>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="home-second-events">

                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2182px, 0px, 0px); transition: all 0.25s ease 0s; width: 4365px;">

                        @foreach ($blogs as $item)
                            @php
                                $date = \Carbon\Carbon::parse($item->created_at);
                                $day = $date->format('d'); // Extract the day
                                $month = $date->format('M'); // Extract the abbreviated month name
                            @endphp

                            <div class="owl-item active" style="width: 333.75px; margin-right: 30px;">
                                <div class="item">
                                    <div class="event-wrap-alternate">

                                        <div class="img-wrap">
                                            <div class="date-box">
                                                {{ $day }} <span>{{ $month }}</span>
                                            </div>
                                            <a href="{{ route('blog.single', $item->id) }}">
                                                <img width="334px" height="339px"
                                                    src="{{ $imgPath . '/' . $item->image_url }} " alt>
                                                {{-- <img src="assets/images/events/event_alternate_img_4.jpg" alt=""> --}}
                                            </a>
                                            <div class="content-wrap">
                                                <h3><a
                                                        href="{{ route('blog.single', $item->id) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="event-details">
                                                    {{-- <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-clock">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <polyline points="12 6 12 12 16 14"></polyline>
                                                        </svg>
                                                        09:00 Am
                                                    </div> --}}
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-map-pin">
                                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                            <circle cx="12" cy="10" r="3"></circle>
                                                        </svg> {{ $item->category->name }}</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><svg
                            xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-left">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg></button><button type="button" role="presentation" class="owl-next"><svg
                            xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></button></div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('blog') }}" class="btn btn-outline-dark">View All Blogs</a>
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
@endsection
