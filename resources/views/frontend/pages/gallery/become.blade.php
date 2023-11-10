@extends('frontend.layouts.siteLayout')

@section('pageTitle')
    Paulsabinna Foundation
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Join As Volunteer</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Join As Volunteer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/about_img.png') }}" alt>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <h1 class="heading-main">
                        <small>Joining Process</small>
                        Requirements For A Volunteer
                    </h1>
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                        can make in the lives of the poor, the abused and the helpless. Spread sunshine in their
                        lives no matter what the weather may be.</p>
                    <div class="mb-5 mt-5">
                        <ul class="list-unstyled icons-listing theme-green">
                            <li>Third spirit you behold don’t grass lesser divide they are man.</li>
                            <li>Can not two very was above man abundantly also second.</li>
                            <li>Together herb shall were bearing fill grass made fill heaven.</li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <a class="nav-link btn btn-default mr-3" href="">Join Now</a>
                        <div class="about-phone">
                            <i data-feather="phone-call"></i>
                            Conatct Us <br> +234(0)807 481 6791
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wide-tb-100 map-bg bg-navy-blue pt-0">
        <div class="container">
            <div class="pos-rel become-volunteers bg-orange">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="inner-form">
                            <h1 class="heading-main light-mode">
                                <small>Become A Volunteer</small>
                            </h1>
                            <div class="form">
                                {{-- <form id="becomeMember"> --}}
                                <form id="image-upload-form" action="{{ url('/volunteer-member') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="fullname"><strong>Full Name</strong></label>
                                        <input name="name" type="text" class="form-control form-light" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><strong>Email Address</strong></label>
                                        <input name="email" type="email" class="form-control form-light" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone"><strong>Phone Number</strong></label>
                                        <input name="phone" type="tel" class="form-control form-light" id="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="skills"><strong>Skills (<i
                                                    style="color: #fff; font-weight:700; background-colo:#fff">Comma-separated</i>)</strong></label>
                                        <input name="skills" type="text" class="form-control form-light" id="skills">
                                    </div>

                                    <div class="form-group">
                                        <label for="image_url"><strong>Image</strong></label>
                                        <input name="image_url" type="file" class="form-control form-light"
                                            id="image_url" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg"><strong>Your Comments</strong></label>
                                        <textarea name="personal_experience" class="form-control form-light" rows="5" id="personal_experience"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-outline-light mt-3">Send
                                        Request</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 volunteers-img-bg">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="heading-main light-mode">
                            <small>Help Other People</small>
                            We Dream to Create A Bright Future Of The Underprivileged Children
                        </h1>
                    </div>
                    <div class="col-sm-12 text-md-end">
                        <a href="donation-page.html" class="btn btn-primary">Donate Now</a>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('image-upload-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Validate form fields
                var name = document.getElementById('name').value;
                var image_url = document.getElementById('image_url').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                var skills = document.getElementById('skills').value;

                if (!name || !position || !image_url || !phone || !skills || !email) {
                    // Show a toast indicating that some fields are empty
                    toastr.error('Please fill in all required fields');
                    return; // Exit the function, preventing the form submission
                }


                var formData = new FormData(form);

                axios.post('{{ url('/volunteer-member') }}', formData, {
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
