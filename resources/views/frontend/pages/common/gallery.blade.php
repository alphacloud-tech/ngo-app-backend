@php
    $galleries = DB::table('galleries')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->take(8)
        ->get();

    // $imgPath = {{ env('IMG_PATH') }}; //'http://127.0.0.1:8000';

@endphp

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

                        <a href="{{ env('IMG_PATH') . '/' . $item->image_url }}" title="Paulsabinna Foundation">
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
                            <img src="{{ env('IMG_PATH') . '/' . $item->image_url }}" alt="">
                        </a>
                    </div>

                </div>
            @endforeach


        </div>
        <div class="text-center mt-5">
            <a href="{{ route('gallery') }}" class="btn btn-outline-dark">View All Gallery</a>
        </div>
    </div>
</section>
