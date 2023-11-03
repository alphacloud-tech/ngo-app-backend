@extends('frontend.layouts.siteLayout')


@section('pageTitle')
    Paulsabinna Foundation - About us
@endsection


@section('setHomeActive')
    active
@endsection


@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="wide-tb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/about_img.png') }} " alt>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>About Us</small>
                        Step Forward Serve The Huminity Reach Out & Help
                    </h1>
                    <p>
                        At Paulsabinna Foundation for the Needy, we are a collective of passionate individuals, committed to
                        a common purpose – to
                        make the world a better place. Our organization's story began with a belief that everyone,
                        regardless of their circumstances, deserves a chance for a brighter future. From that belief, our
                        mission was born.

                        We work tirelessly to address the most pressing challenges of our time, from poverty and inequality
                        to environmental sustainability and disaster relief. Our approach is holistic and inclusive,
                        ensuring that no one is left behind. Our team consists of dedicated professionals, volunteers, and
                        partners who share a vision of a world filled with compassion, justice, and opportunities for all.

                        Every day, we strive to turn that vision into a reality. Together, we can write a story of hope,
                        resilience, and transformation."</p>
                    {{-- <div class="icon-box-1 my-4">
                        <i class="charity-volunteer_people"></i>
                        <div class="text">
                            <h3>Work As An Intern</h3>
                            <p>Sed quia consequuntur agni dolores eos qui ratoluptatem sequi nesciun porquis</p>
                        </div>
                    </div> --}}
                    <div class="d-flex">
                        <a class="btn btn-default mr-3" href="#">Join Now</a>
                        <div class="about-phone">
                            <i data-feather="phone-call"></i>
                            Conatct Us <br> +234(0)807 481 6791
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wide-tb-100 bg-white mb-spacer-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Get to Know Us</small>
                        Let Us Come Together To Make a Difference
                    </h1>
                    <p>Helpless poor children are innocent in their struggle for survival. This evokes the necessity for
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
                                        <ul class="list-unstyled icons-listing theme-orange mb-0">
                                            <li>Eradicate hunger and malnutrition by providing food assistance and
                                                nutritional
                                                support.</li>
                                            <li>Alleviate poverty and improve the quality of life for underserved
                                                communities
                                                worldwide.</li>
                                            <li>We strive to provide disaster relief, humanitarian aid, and support to those
                                                in
                                                crisis</li>
                                            <li>We aim to foster education and skills development to create brighter futures
                                                for
                                                youth and adults.</li>
                                        </ul>
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




    @include('frontend.pages.common.team')


    {{-- <section class="wide-tb-100 pattern-orange pt-0 mb-spacer-md">
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
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
                                            Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In
                                            aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor
                                            placerat, nec elementum ipsum convall.
                                        </div>
                                    </div>


                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> Our Organization
                                    </div>


                                    <div class="collapse">
                                        <div class="content">
                                            Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In
                                            aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor
                                            placerat, nec elementum ipsum convall.
                                        </div>
                                    </div>


                                    <div class="toggle">
                                        <span class="icon">
                                            <i class="icofont-plus"></i>
                                        </span> Know More About Adoption
                                    </div>


                                    <div class="collapse">
                                        <div class="content">
                                            Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In
                                            aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor
                                            placerat, nec elementum ipsum convall.
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
    </section> --}}


    {{-- Testimonials --}}
    @include('frontend.pages.common.testimonial')


    {{-- Help Other People --}}
    @include('frontend.pages.common.help')

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
