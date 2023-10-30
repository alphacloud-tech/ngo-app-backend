<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Dashboard 1</a></li>
                    <li><a href="./index2.html">Dashboard 2</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Slider</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('slider.index') }}">Slider List</a></li>
                    {{-- <li><a href="./index2.html">Dashboard 2</a></li> --}}
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Cause List</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('causes-list-category.index') }}">Cause List Category</a></li>
                    <li><a href="{{ route('causes.index') }}">Cause List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="fa fa-users"></i><span class="nav-text">Partner</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('partner.index') }}">Partner List</a></li>
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
