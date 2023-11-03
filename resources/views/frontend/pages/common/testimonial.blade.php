@php
    $testimonials = DB::table('testimonials')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->get();
@endphp

<section class="wide-tb-100 bg-white">
    <div class="container">
        <h1 class="heading-main">
            <small>Our Testimonials</small>
            What People Say
        </h1>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="home-client-testimonials">
                    @foreach ($testimonials as $item)
                        <div class="item">
                            <div class="client-testimonial dark">
                                <div class="client-inner-content">
                                    <i class="charity-quotes"></i>
                                    <p>{{ $item->quote }}</p>
                                </div>
                                <div class="client-testimonial-icon">
                                    <img src="{{ env('IMG_PATH') . '/' . $item->image_url }} " alt>
                                    {{-- <img height="" src="{{ $imgPath . '/' . $item->image_url }} " alt> --}}
                                    {{-- <img src="{{ asset('frontend/assets/images/team_1.jpg') }} " alt> --}}
                                    <div class="text">
                                        <div class="name">{{ $item->name }}</div>
                                        <div class="post">{{ $item->position }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
