@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Image Gallery
@endsection
@section('setHomeActive')
    active
@endsection

@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Gallery</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="wide-tb-100">
        <div class="container">
            <div class="row img-gallery">
                <div class="col-lg-4">
                    <h1 class="heading-main mb-lg-0">
                        <small>Images Gallery</small>
                        Project We Have Done
                    </h1>
                </div>

                @foreach ($galleries as $item)
                    <div class="col-lg-4 col-md-6">

                        <div class="img-gallery-item">
                            {{-- <img src="{{ env('IMG_PATH') . '/' . $item->image_url }} " alt> --}}

                            <a href="{{ asset($item->image_url) }}" title="Paulsabinna Foundation">
                                <div class="gallery-content">
                                    {{-- <div class="tag"><span>Education</span></div>
                                    <h3>School Development</h3> --}}
                                    <div class="img-open">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus-circle">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                                <img src="{{ asset($item->image_url) }}" alt="">
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="theme-pagination">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{-- <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i data-feather="chevron-left"></i></span>
                            </a>
                        </li> --}}

                        <!-- Replace this static pagination with Laravel pagination -->
                        {{ $galleries->links() }}

                        {{-- <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i data-feather="chevron-right"></i></span>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
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
