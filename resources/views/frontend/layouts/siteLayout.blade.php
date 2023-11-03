@php
    $welcomeNote = DB::table('tblwelcome_note')->first();
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    {{-- <title>Paulsabinna Foundation </title> --}}
    <title>@yield('pageTitle')</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="Paulsabinna Foundation for the Needy">
    <meta name="keywords"
        content="Paulsabinna Foundation for the Needy, charity, charity foundation, donate, donation, fundraiser, fundraising, ngo, non-profit, nonprofit, organization, volunteer">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <link href="{{ asset('frontend/assets/library/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/library/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/library/icofont/icofont.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/library/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/library/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/library/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/home-main.css') }}">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->

    {{-- {{asset('')}} --}}
</head>

<body>

    <div id="pageloader">
        <div class="loader-item">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>


    @include('frontend.pages.common.header')


    <main id="body-content">
        @yield('content')
    </main>

    @include('frontend.pages.common.footer')


    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-auto">
                        <i class="icofont-search"></i>
                    </div>
                    <div class="col">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-auto">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
    {{-- {{ asset('') }} --}}

    {{-- <script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script> --}}
    <script src="{{ asset('frontend/assets/library/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/owlcarousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jflickrfeed/jflickrfeed.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery-waypoints/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/countdown/jquery.countdown.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery-appear/jquery.appear.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/library/jquery-validate/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/site-custom.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/home-slider.js') }}"></script>

    <script>
        // Define the target end date (replace with your actual Sun Oct 29 2023 05:20:06 GMT+0100 end date)
        const endDate = moment("2023-12-31 23:59:59");
        // alert(endDate)

        function updateCountdown() {
            const now = moment();
            const duration = moment.duration(endDate.diff(now));
            // alert(duration)
            // const days = duration.days();
            const days = Math.floor(duration.asDays()); // Calculate the number of days

            // alert(`${days} days remaining`);
            const hours = duration.hours();
            const minutes = duration.minutes();
            const seconds = duration.seconds();

            const timerElement = document.getElementById("countdown-timer");
            timerElement.innerHTML = `
            <ul id="featured-cause" class="list-unstyled list-inline">
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
        `;
        }

        // Call the updateCountdown function initially and set an interval to update it every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
    <!--========================================================================-->
    @yield('scripts')
    <!--========================================================================-->

    <!--maatech whasap start here-->
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-96c04698-0316-4dfa-bf2d-c7e1a01711a6" data-elfsight-app-lazy></div>

</body>

</html>
