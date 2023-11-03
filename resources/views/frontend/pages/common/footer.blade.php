@php
    $galleries = DB::table('galleries')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->take(9)
        ->get();

    // $imgPath = {{ env('IMG_PATH') }}; //'http://127.0.0.1:8000';

@endphp


<footer class="wide-tb-70 pb-0 mb-spacer-md">
    <div class="container pos-rel">
        <div class="row">
            <div class="col-lg-5 col-md-10">
                <div class="footer-subscribe">
                    <h3>Newsletter</h3>
                    <h2>Get Update Every Week</h2>
                    <div class="input-wrap">
                        <input type="text" name="name" placeholder="Enter Your Email">
                        <button type="submit" class="btn btn-default">Subscribe now</button>
                    </div>
                </div>
            </div>
            <div class="give-us-call">
                <i data-feather="phone"></i>
                <h4>Give us a call</h4>
                <h3>+234(0)807 481 6791</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="logo-footer">
                    <img width="170px" src="{{ asset('frontend/assets/images/Graphic1.png') }} " alt>
                </div>
                <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                <div class="social-icons">
                    <ul class="list-unstyled list-group list-group-horizontal">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <h3 class="footer-heading">Contact Info</h3>
                <div class="footer-widget-contact">
                    <ul class="list-unstyled">
                        <li>
                            <div><i data-feather="map-pin"></i> </div>
                            <div>Naze Industrial Clusters behind Human Race Hospital, Naze/Nekede
                                Road,
                                Owerri North,Imo State.</div>
                        </li>
                        <li>
                            <div><i data-feather="phone"></i> </div>
                            <div><a href="tel:+234(0)807 481 6791" style="color: #fff">+234(0)807 481 6791</a></div>
                        </li>
                        <li>
                            <div><i data-feather="mail"></i> </div>
                            <div><a href="info@paulsabinnafoundation.com" style="color: #fff">
                                    <span class=""
                                        data-cfemail="info@paulsabinnafoundation.com">info@paulsabinnafoundation.org</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div><i data-feather="clock"></i> </div>
                            <div>Mon-Fri / 9:00 AM - 19:00 PM</div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="w-100 d-none d-md-block d-lg-none spacer-30"></div>


            <div class="col-lg-2 col-md-6">
                <h3 class="footer-heading">Explore Us</h3>
                <div class="footer-widget-menu">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}"><i class="icofont-simple-right"></i> <span>About
                                    Us</span></a></li>
                        {{-- <li><a href="{{ route('event') }}"><i class="icofont-simple-right"></i> <span>Our History</span></a>
                        </li> --}}
                        <li><a href="{{ route('cause') }}"><i class="icofont-simple-right"></i> <span>Our
                                    Causes</span></a>
                        </li>
                        <li><a href="{{ route('event') }}"><i class="icofont-simple-right"></i> <span>Our
                                    Event</span></a>
                        </li>
                        <li><a href="{{ route('blog') }}"><i class="icofont-simple-right"></i> <span>Blog</span></a>
                        </li>
                        <li><a href="{{ route('contact') }}"><i class="icofont-simple-right"></i>
                                <span>Contact</span></a>
                        </li>
                        <li><a href="{{ route('donation') }}"><i class="icofont-simple-right"></i>
                                <span>Donation</span></a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <h3 class="footer-heading">Photo Gallery</h3>
                <ul id="basicuseOLD" class="photo-thumbs">
                    @foreach ($galleries as $item)
                        <li><img src="{{ env('IMG_PATH') . '/' . $item->image_url }}" alt="gallery" /></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container pos-rel">
            <div class="row text-md-start text-center">
                <div class="col-sm-12 col-md-auto copyright-text">
                    © Copyright <span class="txt-blue">Paulsabinna Foundation</span> <span id="yearText"></span>. |
                    Created by
                    <a href="https://eldantech.com" rel="nofollow">EldanTech</a>
                </div>
                <div class="col-sm-12 col-md-auto ms-md-auto text-md-end text-center copyright-links">
                    <a href="#">Terms & Condition</a> | <a href="#">Privacy Policy</a> | <a
                        href="#">Legal</a>
                </div>
            </div>
        </div>
    </div>
</footer>
