@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Volunteer
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Our Volunteers</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Volunteers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="wide-tb-100">
        <div class="container">
            <h1 class="heading-main">
                <small>Team Member</small>
                Our Expert Volunteer
            </h1>
            <div class="row">
                @foreach ($volunteers as $item)
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap">
                            <div class="img green">
                                <div class="social-icons">
                                    {{-- <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a> --}}
                                </div>
                                <img width="174px" height="174px" src="{{ $imgPath . '/' . $item->image_url }}" alt class="rounded-circle">
                            </div>
                            <h4>{{ $item->name }}</h4>
                            <h5>{{ $item->position }}</h5>

                            <div class="text-md-end">
                                <a href="{{ route('volunteer.single', $item->id) }}" class="read-more-line"><span>Read
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
                {{ $volunteers->links() }}
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
