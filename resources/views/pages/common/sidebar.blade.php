<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Dashboard 1</a></li>
                    <li><a href="./index2.html">Dashboard 2</a></li>
                </ul>
            </li> --}}
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Slider</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('slider.index') }}">Slider List</a></li>
                    {{-- <li><a href="./index2.html">Dashboard 2</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Cause</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('causes-list-category.index') }}">Cause List Category</a></li>
                    <li><a href="{{ route('causes.index') }}">Cause List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"></i><span
                        class="nav-text">Partner</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('partner.index') }}">Partner List</a></li>
                    <li><a href="{{ route('volunteer.index') }}">Volunteers List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"></i><span
                        class="nav-text">Gallery</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('gallery.index') }}">Gallery List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-user"></i><span
                        class="nav-text">Testimonial</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('testimonial.index') }}">Testimonial List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Event</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('event-organizer.index') }}">Event Organizer</a></li>
                    <li><a href="{{ route('event.index') }}">Event List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Blog</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('categories.index') }}">Blog Category</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog List</a></li>
                </ul>
            </li>

            <li class="nav-label"></li>


            @guest
            @else
                @if (Auth::user()->role_id == 1)
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Technical Admin Setup</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
