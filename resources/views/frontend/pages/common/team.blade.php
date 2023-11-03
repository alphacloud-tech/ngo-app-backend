@php
    $volunteers = DB::table('volunteers')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

    // $imgPath = {{ env('IMG_PATH') }}; //'http://127.0.0.1:8000';

@endphp

<section class="wide-tb-100 team-bg mb-spacer-md">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-4 col-md-6">
                <h1 class="heading-main">
                    <small>Team Member</small>
                    Our Expert Volunteer
                </h1>
            </div>
            <div class="col-lg-8 col-md-6 text-md-end btn-team">
                <a href="{{ route('volunteer') }}" class="btn btn-outline-dark">View All Members</a>
            </div>
        </div>
        <div class="row">
            @foreach ($volunteers as $item)
                <div class="col-12 col-lg-3 col-sm-6">
                    <div class="team-section-wrap mb-0">
                        <div class="img green">
                            <div class="social-icons">
                                {{-- <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a> --}}
                            </div>
                            <img width="174px" height="174px" src="{{ env('IMG_PATH') . '/' . $item->image_url }}" alt class="rounded-circle">
                        </div>
                        <h4>{{ $item->name }}</h4>
                        <h5>{{ $item->position }}</h5>
                        <div class="text-md-end">
                            <a href="{{ route('volunteer.single', $item->id) }}" class="read-more-line"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>

        </div>
    </div>
</section>
