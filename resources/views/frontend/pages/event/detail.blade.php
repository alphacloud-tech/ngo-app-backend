@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Event single
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Events Single</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <h1 class="heading-main">
                <small>Help Us Now</small>
                Everyone Let’s Run For The Humanity This Time
            </h1>
            <div class="events-single-img">
                <img src="{{ $imgPath . '/' . $event->image_url }}" alt>

                {{-- <img src="{{asset('assets/images/events/event_single_large.jpg')}}" alt> --}}
            </div>
        </div>

        @php
            $date = \Carbon\Carbon::parse($event->date);
            $day = $date->format('d'); // Extract the day
            $month = $date->format('M'); // Extract the abbreviated month name
            $year = $date->format('Y'); // Extract the abbreviated month name
        @endphp

        <div class="event-single-wrap">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-lg-3 order-lg-last">
                        <div class="event-single-listing pattern-green">
                            <h3>Event Info</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div><i data-feather="calendar"></i> </div>
                                    <div>{{ $day }}, {{ $month }}, {{ $year }}</div>
                                </li>
                                <li>
                                    <div><i data-feather="clock"></i> </div>
                                    <div>{{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }} -
                                        {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }}</div>
                                </li>
                                <li>
                                    <div><i data-feather="map-pin"></i> </div>
                                    <div>{{ $event->location }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-single-listing pattern-orange">
                            <h3>Organizer</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div><i data-feather="user"></i> </div>
                                    <div>{{ $event->name }}</div>
                                </li>
                                <li>
                                    <div><i data-feather="phone"></i> </div>
                                    <div><a href="tel:{{ $event->phone }}">{{ $event->phone }}</a></div>
                                </li>
                                <li>
                                    <div><i data-feather="mail"></i> </div>
                                    <div>
                                        {{-- <a href="mailto:{{ $event->email }}"><span class="__cf_email__"
                                                data-cfemail="470e2921280728352e28296924282a">{{ $event->email }}</span>
                                        </a> --}}

                                        <a href="mailto:{!! obfuscateEmail($event->email) !!}">{!! obfuscateEmail($event->email) !!}</a>

                                    </div>
                                </li>
                                <li>
                                    <div><i data-feather="globe"></i> </div>
                                    <div><a target="_blank" href="{{ $event->website }}">{{ $event->website }}</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="event-single-info">
                            <div class="map-wrap">
                                <iframe
                                    src="{{ $event->location_map }}">
                                </iframe>

                            </div>
                            <p>{!! $event->description !!}</p>

                        </div>
                    </div>
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

@endsection
