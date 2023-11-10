@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Cause Lists
@endsection


@section('setHomeActive')
    active
@endsection


@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Explore Causes</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Causes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <h1 class="heading-main">
                <small>Help Us Now</small>
                More Recent Causes
            </h1>
            <div class="row">
                @foreach ($causes as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="causes-wrap">
                            <div class="img-wrap">
                                <a href="{{ route('cause.single', $item->id) }}">
                                    {{-- <img src="{{ isset($welcomeNote) ? $imgPath . '/welcomenote_photo/' . $welcomeNote->image_name : '' }}"
                            alt=" " width="230" height="270" /> --}}
                                    <img src="{{ $imgPath . '/' . $item->image_url }}" alt>
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
                                <h3><a href="{{ route('cause.single', $item->id) }}">{{ $item->title }}</a></h3>
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


    <section class="wide-tb-150 bg-white featured-heart-icon-hidden">
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
                            <a href="{{ route('donation') }}" class="btn btn-default">Donate Now</a>
                            <div class="share-on-text">
                                <strong>Share On</strong> <a href="#"><img
                                        src="{{ asset('frontend/assets/images/facebook.svg') }} " alt></a>
                                <a href="#"><img src="{{ asset('frontend/assets/images/instagram.svg') }} " alt></a>
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
                            <img width="651px" height="" src="{{ $imgPath . '/' . $featuredCause->image_url }}" alt>
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


    <section class="wide-tb-100 feautred-faqs pb-0">
        <div class="container">
            <div class="pos-rel faqs-wrap">
                <div class="bg-overlay blue opacity-80"></div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12">
                        <h1 class="heading-main light-mode">
                            <small>Have Questions</small>
                            Frequently Asked Questions
                        </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <a class="btn btn-default" href="our-faqs.html">Ask It Now</a>
                    </div>

                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="theme-collapse light">

                            <div class="toggle arrow-down">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Our Philosophy
                            </div>


                            <div class="collapse show">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                    magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                    elementum ipsum convall.
                                </div>
                            </div>


                            <div class="toggle">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Our Organization
                            </div>


                            <div class="collapse">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                    magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                    elementum ipsum convall.
                                </div>
                            </div>


                            <div class="toggle">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> Know More About Adoption
                            </div>


                            <div class="collapse">
                                <div class="content">
                                    Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                    magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                    elementum ipsum convall.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.pages.common.partner')
@endsection


@section('styles')

@endsection


@section('scripts')
  
@endsection
