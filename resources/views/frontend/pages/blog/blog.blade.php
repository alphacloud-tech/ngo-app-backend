@extends('frontend.layouts.siteLayout')
@section('pageTitle')
   Paulsabinna Foundation - Blog
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Blog Post</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="sidebar-spacer">
                        <div class="row">
                            @foreach ($blogs as $item)
                                @php
                                    $date = \Carbon\Carbon::parse($item->created_at);
                                    $day = $date->format('d'); // Extract the day
                                    $month = $date->format('M'); // Extract the abbreviated month name
                                    $year = $date->format('Y'); // Extract the abbreviated month name
                                @endphp

                                <div class="col-md-6 mb-0">
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <a href="{{ route('blog.single', $item->id) }}">
                                                {{-- <img src="assets/images/blogs/blog_img_1.jpg" alt> --}}
                                                <img width="338px" height="404px"
                                                    src="{{ $imgPath . '/' . $item->image_url }} " alt>
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-date">{{ $day }}, {{ $month }},
                                                {{ $year }}</div>
                                            <h3 class="post-title"><a
                                                    href="{{ route('blog.single', $item->id) }}">{{ $item->title }}</a>
                                            </h3>
                                            <div class="post-category">{{ $item->category->name }}</div>
                                            <div class="text-md-end">
                                                <a href="{{ route('blog.single', $item->id) }}"
                                                    class="read-more-line"><span>Read
                                                        More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        {{-- <div class="theme-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i data-feather="chevron-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i data-feather="chevron-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}

                        <div class="theme-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i data-feather="chevron-left"></i></span>
                                        </a>
                                    </li> --}}

                                    <!-- Replace this static pagination with Laravel pagination -->
                                    {{ $blogs->links() }}

                                    {{-- <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i data-feather="chevron-right"></i></span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>



                <div class="col-lg-3 col-md-12">
                    <aside class="row sidebar-widgets">

                        <div class="sidebar-primary col-lg-12 col-md-6">

                            {{-- <div class="widget-wrap">
                                <h3 class="widget-title">Search Keywords</h3>
                                <form class="sidebar-search">
                                    <input type="text" class="form-control" placeholder="Enter here search...">
                                    <button type="submit" class="btn-link"><i class="icofont-search"></i></button>
                                </form>
                            </div> --}}


                            <div class="widget-wrap">
                                <h3 class="widget-title">Categories</h3>
                                <div class="blog-list-categories">
                                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        @foreach ($categories as $item)
                                            <li><a href="#">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                            <div class="widget-wrap">
                                <h3 class="widget-title">Popular Posts</h3>
                                <div class="popular-post">
                                    <ul class="list-unstyled">
                                        @foreach ($resentBlogs as $item)
                                            @php
                                                $date = \Carbon\Carbon::parse($item->created_at);
                                                $day = $date->format('d'); // Extract the day
                                                $month = $date->format('M'); // Extract the abbreviated month name
                                                $year = $date->format('Y'); // Extract the abbreviated month name
                                            @endphp
                                            <li>
                                                {{-- <img src="assets/images/post_thumb_1.jpg" alt> --}}
                                                <img width="60px" height="60px"
                                                    src="{{ $imgPath . '/' . $item->image_url }}" alt>

                                                <div>
                                                    <h6><a
                                                            href="{{ route('blog.single', $item->id) }}">{{ $item->title }}</a>
                                                    </h6>
                                                    <small>{{ $day }} {{ $month }}
                                                        {{ $year }}</small>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="sidebar-secondary col-lg-12 col-md-6">

                            <div class="widget-wrap">
                                <h3 class="widget-title">Recent Causes</h3>
                                <div class="owl-carousel owl-theme" id="sidebar-causes">

                                    @foreach ($causes as $item)
                                        <div class="causes-wrap">
                                            <div class="img-wrap">
                                                <a href="{{ route('cause.single', $item->id) }}">
                                                    <img src="{{ $imgPath . '/' . $item->image_url }}" alt>
                                                    {{-- <img src="assets/images/causes/causes_img_3.jpg" alt> --}}
                                                </a>
                                                <div class="raised-progress">
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            <span class="txt-orange">
                                                                ${{ $item->raised_amount }}</span> raised of
                                                            <span class="txt-green">${{ $item->target_amount }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-wrap">
                                                <span class="tag">{{ $item->category_name }}</span>
                                                <h3><a
                                                        href="{{ route('cause.single', $item->id) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="text-md-end">
                                                    <a href="{{ route('cause.single', $item->id) }}"
                                                        class="read-more-line"><span>Read
                                                            More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    {{-- <div class="item">
                                        <div class="causes-wrap">
                                            <div class="img-wrap">
                                                <a href="causes-single.html"><img
                                                        src="assets/images/causes/causes_img_2.jpg" alt></a>
                                                <div class="raised-progress">
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            <span class="txt-orange">$10086</span> raised of
                                                            <span class="txt-green">$15000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-wrap">
                                                <span class="tag">People</span>
                                                <h3><a href="causes-single.html">Help For Homeless People</a>
                                                </h3>
                                                <div class="text-md-end">
                                                    <a href="causes-single.html" class="read-more-line"><span>Read
                                                            More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="causes-wrap">
                                            <div class="img-wrap">
                                                <a href="causes-single.html"><img
                                                        src="assets/images/causes/causes_img_6.jpg" alt></a>
                                                <div class="raised-progress">
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            <span class="txt-orange">$10086</span> raised of
                                                            <span class="txt-green">$15000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-wrap">
                                                <span class="tag">Health</span>
                                                <h3><a href="causes-single.html">Help From Natural
                                                        Disaster</a></h3>
                                                <div class="text-md-end">
                                                    <a href="causes-single.html" class="read-more-line"><span>Read
                                                            More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>


                            <div class="widget-wrap">
                                <div class="sidebar-ads">
                                    <img src="{{ asset('frontend/assets/images/sidebar_ads.jpg') }}" alt>
                                    <div class="content">
                                        <i class="charity-donate_money"></i>
                                        <h3>Let Us Come Together To Make A Difference</h3>
                                        <a href="{{ route('donation') }}" class="btn btn-secondary">Donate Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </aside>
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
