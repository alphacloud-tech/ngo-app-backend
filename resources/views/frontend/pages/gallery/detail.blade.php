@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Volunteer single
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Volunteer Profile</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Volunteer Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>



    <section class="wide-tb-100">
        <div class="container">
            @if ($volunteer)
                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center team-image">
                            <img src="{{ $imgPath . '/' . $volunteer->image_url }}" alt>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small>Volunteer</small>
                            {{ $volunteer->name }}
                        </h1>
                        <div class="mb-5 mt-3">
                            <ul class="list-unstyled icons-listing theme-orange mb-0">
                                <li>Position: {{ $volunteer->position }}</li>
                                {{-- <li>Expertise: Gardening, Lanscaping, Floristic</li> --}}
                                {{-- <li>Experience: 15 Years</li> --}}
                                <li>E-mail:
                                    <a href="mailto:{!! obfuscateEmail($volunteer->email) !!}">
                                        <span class="" data-cfemail="">{!! obfuscateEmail($volunteer->email) !!}
                                        </span>
                                    </a>

                                    {{-- <a href="mailto:{!! obfuscateEmail($event->email) !!}">{!! obfuscateEmail($event->email) !!}</a> --}}

                                </li>
                                <li>Phone: <a href="tel: {{ $volunteer->phone }}"> {{ $volunteer->phone }}</a></li>
                                {{-- <li>Fax: 507-452-1254</li> --}}
                            </ul>
                            <div class="social-icons-team">
                                {{-- <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>


    <section class="wide-tb-100 bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <h3 class="fw-7 txt-blue mb-4">Personal Experience</h3>
                    <p>{!! $volunteer->personal_experience !!}</p>

                    <div class="row mt-4">
                        <div class="col-sm-12 mb-0">
                            <h3 class="fw-7 txt-blue head-letter-spacing mb-4">
                                {{-- {{ $volunteer->name }} --}}
                                Hobes Skills</h3>
                        </div>
                        @php
                            $skills = explode(', ', $volunteer->skills);
                        @endphp
                        @foreach ($skills as $skill)
                            <div class="col-md-6 col-sm-12 mb-0">
                                <div class="skillbar-wrap">
                                    <div class="clearfix">
                                        {{ $skill }}
                                    </div>
                                    <div class="skillbar" data-percent="80%">
                                        <div class="skillbar-percent">
                                            {{-- 67% --}}
                                        </div>
                                        <div class="skillbar-bar" style="width: 67.0021%; overflow: hidden;"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 ms-auto">
                    <div class="faqs-sidebar pos-rel">
                        <div class="bg-overlay blue opacity-80"></div>

                        <form>
                            @csrf
                            <h3 class="h3-sm fw-7 txt-white mb-3">Have any Question?</h3>
                            <div class="form-group">
                                <label for="fullname"><strong>Full Name</strong></label>
                                <input type="text" class="form-control form-light" id="fullname" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="emailform"><strong>Email Address</strong></label>
                                <input type="email" class="form-control form-light" id="emailform" name="email">
                            </div>
                            <div class="form-group">
                                <label for="questionmsg"><strong>How can help you?</strong></label>
                                <textarea class="form-control form-light" rows="5" id="questionmsg" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default mt-3">Ask It Now</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
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
