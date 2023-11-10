@php
    $galleries = DB::table('galleries')
        ->where('active', 1)
        ->orderBy('created_at', 'desc')
        ->take(9)
        ->get();

    $setting = DB::table('settings')
        ->where('id', 1)
        ->first();

    $phoneNumberWithoutSpaces = str_replace(' ', '', $setting->phone_2);

@endphp

<div class="main-btn1" id="main-btn1">
    <div class="child"><i class="fa fa-user"></i> </div>
</div>

<div class="sub-btns">
    <div class="btn1 social-icon" id="btn1">
        <center>
            <a target="_blank" href="https://wa.me/{{ $phoneNumberWithoutSpaces }}">
                <i class="fab fa-whatsapp" style="font-size:30px;color:#055705;"></i>

            </a>
        </center>
    </div>
    <div class="btn2 social-icon" id="btn2">
        <center>
            <a target="_blank" href="{{ $setting->facebook }}">
                <i class="fab fa-facebook" style="font-size:30px;color:#055705;"></i>
            </a>
        </center>
    </div>
    <div class="btn3 social-icon" id="btn3">
        <center>
            <a target="_blank" href="{{ $setting->youtube }}">
                <i class="fab fa-youtube" style="font-size:30px;color:#055705;"></i>
            </a>
        </center>
    </div>
    <div class="btn4 social-icon" id="btn4">
        <center>
            <a target="_blank" href="{{ $setting->instagram }}">
                <i class="fab fa-instagram" style="font-size:30px;color:#055705;"></i>
            </a>
        </center>
    </div>
    <div class="touch btn5" id="btn5">
        <center>
            <h4>K</h4>
        </center>
    </div>
    <div class="touch btn6" id="btn6">
        <center>
            <h4>L</h4>
        </center>
    </div>
    <div class="touch btn7" id="btn7">
        <center>
            <h4>A</h4>
        </center>
    </div>
    <div class="touch btn8" id="btn8">
        <center>
            <h4>T</h4>
        </center>
    </div>
    <div class="touch btn9" id="btn9">
        <center>
            <h4>Let</h4>
        </center>
    </div>
</div>



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
                <h3>{{ $setting->phone_1 }}</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="logo-footer">
                    <img width="170px" src="{{ asset($setting->logo) }} " alt>
                </div>
                <p>{!! $setting->description !!}</p>
                <div class="social-icons">
                    <ul class="list-unstyled list-group list-group-horizontal">
                        <li><a href="{{ $setting->facebook }}"><i class="icofont-facebook"></i></a></li>
                        <li><a href="{{ $setting->instagram }}"><i class="icofont-instagram"></i></a></li>
                        <li><a href="{{ $setting->youtube }}"><i class="icofont-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <h3 class="footer-heading">Contact Info</h3>
                <div class="footer-widget-contact">
                    <ul class="list-unstyled">
                        <li>
                            <div><i data-feather="map-pin"></i> </div>
                            <div>{{ $setting->address }}</div>
                        </li>
                        <li>
                            <div><i data-feather="phone"></i> </div>
                            <div><a href="tel:{{ $setting->phone_1 }}" style="color: #fff">{{ $setting->phone_1 }}</a>
                            </div>
                        </li>
                        <li>
                            <div><i data-feather="mail"></i> </div>
                            <div><a href="mailto:{!! obfuscateEmail($setting->email_1) !!}" style="color: #fff">
                                    <span class=""
                                        data-cfemail="{!! obfuscateEmail($setting->email_1) !!}">{!! obfuscateEmail($setting->email_1) !!}</span>
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
