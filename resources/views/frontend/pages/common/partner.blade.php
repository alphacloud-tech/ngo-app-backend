@php
    $partners = DB::table('partners')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->get();

    // $imgPath = {{ env('IMG_PATH') }}; //'http://127.0.0.1:8000';
@endphp

<section class="wide-tb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h1 class="heading-main">
                    <small>Global Providers</small>
                    Our World Wide Partner
                </h1>
            </div>
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme" id="home-clients">
                    @foreach ($partners as $item)
                        <div class="item">
                            <div class="clients-logo">
                                <img src="{{ env('IMG_PATH')  . '/' . $item->image_url }} " alt>
                                {{-- <img src="{{ asset('frontend/assets/images/clients/client1.png') }}" alt> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
