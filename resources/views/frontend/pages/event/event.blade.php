@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Our Events
@endsection


@section('setHomeActive')
    active
@endsection


@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Our Events</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-sm-1">
                @foreach ($events as $item)
                    @php
                        $date = \Carbon\Carbon::parse($item->date);
                        $day = $date->format('d'); // Extract the day
                        $month = $date->format('M'); // Extract the abbreviated month name
                    @endphp
                    <div class="col mb-5">
                        <div class="event-wrap">

                            <div class="img-wrap">
                                <a href="{{ route('event.single', $item->id) }}">
                                    {{-- <img src="{{ asset('frontend/assets/images/events/event_alternate_img_2.jpg') }} " alt> --}}
                                    <img height="356px" src="{{ $imgPath . '/' . $item->image_url }} " alt>

                                </a>
                            </div>
                            <div class="content-wrap">
                                <div class="date-wrap d-lg-flex align-items-end">
                                    <div class="date-box">
                                        {{ $day }} <span>{{ $month }}</span>
                                    </div>
                                    <div class="event-details">
                                        <div><i data-feather="clock"></i>
                                            {{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}</div>
                                        <div><i data-feather="map-pin"></i> {{ $item->location }}</div>
                                    </div>
                                </div>
                                <h3>
                                    <a href="{{ route('event.single', $item->id) }}">{{ $item->title }}</a>
                                </h3>
                            </div>
                            <div class="text-md-end read-more-wrap">
                                <a href="{{ route('event.single', $item->id) }}" class="read-more-line"><span>Read
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="wide-tb-150 bg-scroll bg-img-6 pos-rel callout-style-1">
        <div class="bg-overlay blue opacity-70"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="heading-main light-mode">
                        <small>Help Other People</small>
                        We Dream to Create A Bright Future Of The Underprivileged Children
                    </h1>
                </div>
                <div class="col-sm-12">
                    <a href="{{ route('donation') }}" class="btn btn-primary">Donate Now</a>
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
@endsection
