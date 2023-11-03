@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Contact Us
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <h1 class="heading-main">
                        <small>Get In Touch</small>
                        Contact With Us
                    </h1>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                        can make in the lives of the poor, the abused and the helpless. Spread sunshine in their
                        lives no matter what the weather may be.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-12 order-lg-last">
                    <div class="contact-wrap">
                        <div class="contact-icon-xl">
                            <i class="charity-love_hearts"></i>
                        </div>
                        <div id="sucessmessage"> </div>

                        <form action="#" method="post" id="contact_form" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="firstname" id="name" class="form-control"
                                            placeholder="First Name" value="{{ old('firstname') }}">
                                    </div>

                                    @error('firstname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                            placeholder="Last Name" value="{{ old('lastname') }}">
                                    </div>
                                    @error('lastname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Your Email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="phone" class="form-control"
                                            placeholder="Phone Number" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-0">
                                    <div class="form-group">
                                        <textarea name="message" id="comment" class="form-control" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary text-nowrap">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">

                    <div class="icon-box-4 bg-orange mb-4">
                        <i data-feather="map-pin"></i>
                        <h3>Our Address</h3>
                        <div>Envato Pty Ltd 13/2 Elizabeth St melbourne VLC 3000 Australia</div>
                    </div>


                    <div class="icon-box-4 bg-green mb-4">
                        <i data-feather="phone"></i>
                        <h3>Phone Number</h3>
                        <div>+1234567899<br>1-800-763-5400</div>
                    </div>


                    <div class="icon-box-4 bg-gray mb-4">
                        <i data-feather="mail"></i>
                        <h3>Email Address</h3>
                        <div>
                            <a href="">
                                <span class="__cf_email__"
                                    data-cfemail="9cf5f2faf3dcf4f3ecf9eefdf5eff9b2fff3f1">[email&#160;protected]
                                </span>
                            </a>

                            {{-- <a href="mailto:{!! obfuscateEmail($event->email) !!}">{!! obfuscateEmail($event->email) !!}</a> --}}

                        </div>
                        <div><a
                                href="https://mannatstudio.com/cdn-cgi/l/email-protection#592f36352c372d3c3c2b193136293c2b38302a3c773a3634"><span
                                    class="__cf_email__"
                                    data-cfemail="eb9d84879e859f8e8e99ab83849b8e998a82988ec5888486">[email&#160;protected]</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="wide-tb-100">
        <div class="map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319">
            </iframe>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="callout-style-side-img d-lg-flex align-items-center top-broken-grid mb-0">
                        <div class="img-callout">
                            <img src="{{ asset('frontend/assets/images/callout_side_img.jpg') }}" alt>
                        </div>
                        <div class="text-callout">
                            <div class="d-md-flex align-items-center">
                                <div class="heading">
                                    <h2>Let Us Come Together To Make A Difference</h2>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('donation') }}" class="btn btn-default">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     // Form submission event listener
        //     document.getElementById('contactForm').addEventListener('submit', function(event) {
        //         event.preventDefault(); // Prevent the default form submission

        //         // Get form data
        //         const name = document.getElementById('name').value;
        //         const email = document.getElementById('email').value;
        //         const message = document.getElementById('message').value;

        //         // Simulate form submission (replace this with your actual AJAX submission)
        //         // For demonstration purposes, simulate a successful submission
        //         setTimeout(function() {
        //             // Show a success toast message
        //             toastr.success('Message sent successfully');

        //             // Reset the form
        //             document.getElementById('name').value = '';
        //             document.getElementById('email').value = '';
        //             document.getElementById('message').value = '';
        //         }, 2000); // Simulate a 2-second delay for demonstration

        //         return false; // Prevent form submission
        //     });

        //     // Initialize Toastr options
        //     toastr.options = {
        //         closeButton: true,
        //         progressBar: true,
        //         positionClass: 'toast-top-right',
        //         timeOut: 3000, // 3 seconds
        //     };
        // });
    </script>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('contact_form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(form);

                axios.post('{{ url('/contact-us') }}', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data', // Important for FormData
                        }
                    })
                    .then(function(response) {
                        // Handle success, e.g., show a success message or redirect
                        if (response.data.success) {
                            form.reset();
                            toastr.success(response.data.message);
                        }
                    })
                    .catch(function(error) {
                        // Handle errors, e.g., show an error message
                        alert('Image upload failed: ' + error.response.data.error);
                    });
            });
        });
    </script>
@endsection
