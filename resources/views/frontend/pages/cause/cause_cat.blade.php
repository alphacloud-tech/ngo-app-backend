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
                <h1>Explore {{$cause_category->name}} Causes</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore {{$cause_category->name}} Causes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <h1 class="heading-main">
                <small>Help Us Now</small>
                {{$cause_category->name}} Causes
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
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}

    <style>

    </style>
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}
@endsection
