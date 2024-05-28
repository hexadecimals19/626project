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
    <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <style>
        .overlay-container {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('{{ asset('softui/assets/img/background-jilid.png') }}') no-repeat center center;
            background-size: 50% 80%;
        }

        .overlay-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .overlay-form .form-control {
            margin-bottom: 15px;
        }

        .navbar {
            z-index: 1000;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #000;
        }

        .navbar-nav .nav-link:hover {
            color: #A37E2D;
        }

        footer {
            background-color: #A37E2D;
            color: white;
            padding: 20px 0;
        }

        footer h6 {
            font-size: 1.5rem;
            font-weight: 500;
        }

        footer .hr {
            background-color: white;
            height: 1px;
        }

        footer .list-inline-item a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        footer .list-inline-item a:hover {
            text-decoration: underline;
        }

        footer .fab {
            font-size: 2rem;
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
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content Section -->
    <div class="overlay-container">
        <div class="overlay-form">
            <h2>Login as:</h2>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block mt-3">Staff</a>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block mt-3">User</a>
            <p class="mt-4">New user? <a href="{{ route('register') }}">Register as customer</a></p>
        </div>
    </div>
    <!-- End Content Section -->

    <!-- Footer -->
    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6>ENJOY WELCOMING<br>ATMOSPHERE & MOMENTS<br>OF DELIGHT</h6>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="hr"></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Menu</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Login</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
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
