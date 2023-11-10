@php

    $setting = DB::table('settings')
        ->where('id', 1)
        ->first();

    // $imgPath = {{ env('IMG_PATH') }}; //'http://127.0.0.1:8000';

@endphp
<header>
    <div class="top-bar-right d-flex align-items-center text-md-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center contact-info">
                    <div>
                        <i data-feather="phone"></i> <a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a>
                    </div>
                    <div>
                        <i data-feather="mail"></i>
                        <a href="mailto:{!! obfuscateEmail($setting->email_1) !!}">
                            <span class="" data-cfemail="mailto:{!! obfuscateEmail($setting->email_1) !!}" style="font-size: 10px">
                                mailto:{!! obfuscateEmail($setting->email_1) !!}
                            </span>
                        </a>
                    </div>
                    {{-- <div>
                        <i data-feather="clock"></i> Mon-Fri / 9:00 AM - 19:00 PM
                    </div> --}}
                    <div>
                        <i data-feather="map-pin"></i>{{ $setting->address }}
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="social-icons">
                        <a target="_blank" href="{{ $setting->facebook }}"><i class="icofont-facebook"></i></a>
                        {{-- <a target="_blank" href="#"><i class="icofont-twitter"></i></a> --}}
                        <a target="_blank" href="{{ $setting->instagram }}"><i class="icofont-instagram"></i></a>
                        <a target="_blank" href="{{ $setting->youtube }}"><i class="icofont-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg header-fullpage">
        <div class="container text-nowrap">
            <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                <a class="navbar-brand rounded-bottom light-bg" href="{{ url('/') }}">
                    {{-- <img style="width: 250px" src="{{ asset('frontend/assets/images/Graphic1.png') }} " alt> --}}
                    <img style="width: 250px" src="{{ asset($setting->logo) }} " alt>
                </a>
            </div>

            <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">

                <a class="nav-link btn btn-default ms-3 donate-btn" href="{{ route('donation') }}">Donate</a>

                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="navbar-collapse">

                <div class="offcanvas-header">
                    <a href="{{ url('/') }}" class="logo-small">
                        <img style="width: 250px" src="{{ asset($setting->logo) }} " alt>
                    </a>
                </div>


                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle-mob" href="{{ url('/') }}" id="dropdown03"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="{{ url('/') }}">Home</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown  ">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('about') }}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
                                <li><a class="dropdown-item" href="{{ route('volunteer') }}">Meet Our Team</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown  ">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('event') }}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Get Involved </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('event') }}">Upcoming Events</a></li>
                                <li><a class="dropdown-item" href="{{ route('volunteer.become') }}">Become
                                        Volunteer</a></li>
                                <li><a class="dropdown-item" href="{{ route('cause') }}">Causes List</a></li>
                                <li><a class="dropdown-item" href="{{ route('donation') }}">Donate To Us</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('gallery') }}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Image Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ route('video') }}">Video Gallery</a></li>
                                <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown  ">
                            <a class="nav-link dropdown-toggle-mob" href="{{ route('blog') }}"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                            </ul>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="close-nav"></div>

            </div>
        </div>
    </nav>

</header>
