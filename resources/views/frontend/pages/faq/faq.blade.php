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

                        @foreach ($faqs as $key => $item)
                            <div class="toggle @if ($key === 0) arrow-down @endif">
                                <span class="icon">
                                    <i class="icofont-plus"></i>
                                </span> {{ $item->title }}
                            </div>


                            <div class="collapse @if ($key === 0) show @endif">
                                <div class="content">
                                    {!! $item->description !!}
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="faqs-sidebar pos-rel">
                        <div class="bg-overlay blue opacity-80"></div>
                        <form id="faq_form">
                            @csrf
                            <h3 class="h3-sm fw-5 txt-white mb-3">Have any Question?</h3>
                            <div class="form-group">
                                <label for="name"><strong>Full Name</strong></label>
                                <input type="text" class="form-control form-light" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email"><strong>Email Address</strong></label>
                                <input type="email" class="form-control form-light" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message"><strong>How can help you?</strong></label>
                                <textarea class="form-control form-light" rows="5" id="message" name="message"></textarea>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('faq_form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Validate form fields
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var message = document.getElementById('message').value;

                if (!name || !email || !message) {
                    // Show a toast indicating that some fields are empty
                    toastr.error('Please fill in all required fields');
                    return; // Exit the function, preventing the form submission
                }

                var formData = new FormData(form);

                axios.post('{{ url('/faq') }}', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data', // Important for FormData
                        }
                    })
                    .then(function(response) {
                        // Handle success, e.g., show a success message or redirect
                        if (response.data.success) {
                            // form.reset();
                            document.getElementById('name').value = '';
                            document.getElementById('email').value = '';
                            document.getElementById('message').value = '';

                            toastr.success(response.data.message);
                        }
                    })
                    .catch(function(error) {
                        // // Handle errors, e.g., show an error message
                        // alert('Image upload failed: ' + error.response.data.error);
                        console.log('====================================');
                        console.log("faile request", error);
                        console.log('====================================');
                    });
            });
        });
    </script>
@endsection
