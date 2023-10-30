<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }} ">
    <link href="{{ asset('assets/css/style.css') }} " rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">

</head>

<body class="h-100 hold-transition skin-green sidebar-mini">



    <div class="h-550"><!--wrapper-->
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div align="center" style="color: #fff; font-size: 30px; padding: 10px;">
                    <b>PAULSABINNA FOUNDATION FOR THE NEEDY ADMIN PORTAL</b>
                    <div style="font-size: 18px;"><small>(Extending a Helping Hand!)</small></div>
                    {{-- <!--<img src="{{ asset('Images/coat.jpg') }}" height="45" align="left" style="border-radius: 4px;">--> --}}
                </div>
            </nav>
        </header>

        <section class="">
            <div class="box box-default">
                {{-- /////////////////////////adams --}}
                <div class="authincation h-100">
                    <div class="container-fluid">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6">
                                <div class="authincation-content">
                                    <div class="row no-gutters">
                                        <div class="col-xl-12">
                                            <div class="auth-form">
                                                <h4 class="text-center mb-4">Sign up your account</h4>
                                                <hr>
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name"><strong>Fullname</strong></label>
                                                                <input id="name" type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    name="name" value="{{ old('name') }}" required
                                                                    autocomplete="name" autofocus>

                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="username"><strong>Username</strong></label>
                                                                <input id="username" type="text"
                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                    name="username" value="{{ old('username') }}"
                                                                    required autocomplete="username" autofocus>

                                                                @error('username')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email"><strong>Email</strong></label>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password"><strong>Password</strong></label>
                                                                <input id="password" type="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    name="password" required
                                                                    autocomplete="new-password">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password-confirm"><strong>Confirm
                                                                        Password</strong></label>
                                                                <input id="password-confirm" type="password"
                                                                    class="form-control" name="password_confirmation"
                                                                    required autocomplete="new-password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center mt-4">
                                                        <button type="submit" class="btn btn-primary btn-block">Sign me
                                                            up</button>
                                                    </div>
                                                </form>
                                                <div class="new-account mt-3">
                                                    <p>Already have an account? <a class="text-primary"
                                                            href="{{ route('login') }}">Sign
                                                            in</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row"></div>
        </section>

        <footer class="main-footer" style="position: fixed; bottom: 0; width: 100%;">
            <div class="hidden-xs">
                <header class="main-header">
                    <nav class="navbar navbar-static-top">
                        <div align="center" style="color: #fff; font-size: 15px; padding: 10px;">
                            {{-- <!--<img src="{{ asset('Images/coat.jpg') }}" height="30" style="border-radius: 4px;">--> --}}
                            <b>Designed by</b> <a href="https://elidantech.com" target="_blank"
                                style="color: white;">ElidanTech</a> |
                            <strong>Copyright &copy; <?php echo date('Y'); ?> .</strong> All rights reserved.
                            {{-- <img src="{{ asset('Images/coat.jpg') }}" height="30" style="border-radius: 4px;"> --}}
                        </div>
                    </nav>
                </header>
            </div>
        </footer>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/quixnav-init.js') }}"></script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }} "></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }} "></script>
    <script src="{{ asset('assets/js/custom.min.js') }} "></script>
    <!--endRemoveIf(production)-->
</body>

</html>
