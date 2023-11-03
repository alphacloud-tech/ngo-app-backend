@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Welcome to Paulsabinna Foundation
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Our FAQ’s</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>



    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <h1 class="heading-main">
                        <small>Ask Anything WIth Us</small>
                        Frequently Asked Questions
                    </h1>
                    <div class="theme-collapse">

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


                        <div class="toggle">
                            <span class="icon">
                                <i class="icofont-plus"></i>
                            </span> How do I donate to Paulsabinna Foundation?
                        </div>


                        <div class="collapse">
                            <div class="content">
                                Donating is easy. You can make a one-time donation or become a monthly donor through our
                                website. Visit our "Donate" page to make a contribution.
                            </div>
                        </div>


                        <div class="toggle">
                            <span class="icon">
                                <i class="icofont-plus"></i>
                            </span> Can my company partner with Paulsabinna Foundation?
                        </div>


                        <div class="collapse">
                            <div class="content">
                                We welcome corporate partnerships. Contact us to explore collaboration opportunities and
                                discuss how your company can make a positive impact.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="faqs-sidebar pos-rel">
                        <div class="bg-overlay blue opacity-80"></div>
                        <form>
                            @csrf
                            <h3 class="h3-sm fw-5 txt-white mb-3">Have any Question?</h3>
                            <div class="form-group">
                                <label for="name"><strong>Full Name</strong></label>
                                <input type="text" class="form-control form-light" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email"><strong>Email Address</strong></label>
                                <input type="email" class="form-control form-light" id="email">
                            </div>
                            <div class="form-group">
                                <label for="msg"><strong>How can help you?</strong></label>
                                <textarea class="form-control form-light" rows="5" id="msg"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default mt-3">Ask It Now</button>
                        </form>
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
                    <a href="{{ route('donation') }}" class="btn btn-default">Donate Now</a>
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
