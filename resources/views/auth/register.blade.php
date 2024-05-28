<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('softui/assets/img/favicon.png') }}">
    <title>Soft UI Design System by Creative Tim</title>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <style>
        .overlay-container {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('softui/assets/img/background-jilid.png') no-repeat center center;
            background-size: 50% 80%;

        }

        .overlay-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 60%;
            max-width: 600px;
}


        .overlay-form .form-control {
            margin-bottom: 10px;
        }

        .navbar {
            z-index: 1000;
        }
    </style>
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ route('welcome') }}">Home</a>
                          </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content Section -->
    <div class="overlay-container">
        <div class="overlay-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="custname" class="form-label">{{ __('Name') }}</label>
                    <input id="custname" type="text" class="form-control @error('custname') is-invalid @enderror" name="custname" value="{{ old('custname') }}" required autocomplete="name" autofocus>
                    @error('custname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="custemail" class="form-label">{{ __('Email Address') }}</label>
                    <input id="custemail" type="email" class="form-control @error('custemail') is-invalid @enderror" name="custemail" value="{{ old('custemail') }}" required autocomplete="email">
                    @error('custemail')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="custpassword" class="form-label">{{ __('Password') }}</label>
                    <input id="custpassword" type="password" class="form-control @error('custpassword') is-invalid @enderror" name="custpassword" required autocomplete="new-password">
                    @error('custpassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="custpassword-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="custpassword-confirm" type="password" class="form-control" name="custpassword_confirmation" required autocomplete="new-password">
                </div>
                <div class="mb-3">
                    <label for="custphone" class="form-label">{{ __('Phone') }}</label>
                    <input id="custphone" type="tel" class="form-control @error('custphone') is-invalid @enderror" name="custphone" required autocomplete="phone">
                    @error('custphone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="custaddress" class="form-label">{{ __('Address') }}</label>
                    <textarea id="custaddress" class="form-control @error('custaddress') is-invalid @enderror" name="custaddress" required autocomplete="address"></textarea>
                    @error('custaddress')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Content Section -->

    <!-- Footer -->
    <footer class="footer pt-5 mt-5" style="background-color: #A37E2D">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 style="color: white; font-size: 1.5rem; font-weight: 500; margin-bottom: 0;">ENJOY WELCOMING<br>ATMOSPHERE & MOMENTS<br>OF DELIGHT</h6>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="hr" style="width: 100%; height: 1px; background-color: white;"></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <ul class="list-inline" style="font-size: 1rem;">
                        <li class="list-inline-item">
                            <a href="{{ route('welcome') }}" style="color: white; text-decoration: none;">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color: white; text-decoration: none;">Menu</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color: white; text-decoration: none;">Login</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color: white; text-decoration: none;">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" style="color: white; text-decoration: none;">Events</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <a href="#" style="text-decoration: none;">
                        <i class="fab fa-instagram" style="font-size: 2rem; color: white;"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Core JS Files -->
    <script src="{{ asset('softui/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('softui/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('softui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('softui/assets/js/plugins/countup.min.js') }}"></script>
    <script src="{{ asset('softui/assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('softui/assets/js/soft-design-system.min.js?v=1.0.9') }}"></script>
</body>

</html>
