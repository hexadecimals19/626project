<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('softui/assets/img/apple-icon.png') }}">

  <link rel="icon" type="image/png" href="{{ asset('softui/assets/img/favicon.png') }}">


  <title>
    Soft UI Design System by Creative Tim
  </title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Nucleo Icons -->
  <link href="{{ asset('softui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />

  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />


  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('softui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('softui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="index-page" >

<header class="header-2">
  <div class="page-header min-vh-75" style="background-image: url('{{ asset('softui/assets/img/background-jilid.png') }}'); position: relative;">
      <div class="container">
          <div class="row">
                <div class="col-12">
                    <!-- Logo and Navigation Bar Container -->
                    <div style="position: absolute; top: 0; left: 0; padding: 20px;">
                        <!-- Logo -->
                        <div class="mb-2">
                            <img src="{{ asset('softui/assets/img/logo-jilidEnam.png') }}" alt="Logo" style="width:43px; height: 65px;">
                        </div>
                        <!-- Navigation Bar -->
                        <nav class="navbar navbar-expand-lg fixed-top">
                            <div class="container-fluid">

                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('welcome') }}">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Menu</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Contact</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Events</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white py-3 mt-n5">JILID ENAM</h1>
                    <h5 class="text-white h6">Join us as we continue to explore new flavors and innovate our brewing techniques. At Jilid Enam, every cup tells a story of dedication, expertise, and a relentless pursuit of excellence.
                    </h5>



                    <a href="{{ route('login') }}" class="bg-danger border-0 px-3 py-2 font-weight-bold text-white border-radius-md d-inline-block">Login</a>
                    <a href="{{ route('register') }}" class="bg-danger border-0 px-3 py-2 font-weight-bold text-white border-radius-md d-inline-block">Register</a>

                </div>
            </div>

            </div>
        </div>
    </div>
</header>



<section class="my-5 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col align-self-center">
                <h5 class="h6">DIVING DEEPER INTO JILID ENAM'S WORLD</h5>
                <h5 class="h3">WE SPECIALIZE IN GOOD <br>BREWS AND COFFEE</h5>
                <div class="row justify-content-end">
                    <img src="{{ asset('softui/assets/img/making-dough.png') }}" width="406px" height="567px"></img>
                </div>
            </div>
            <div class="col-md">
                <img src="{{ asset('softui/assets/img/barista-machine.png') }}" width="507px" height="722px"></img>
                <br>
                <br>
                <h5 class="h6">At Jilid Enam, we believe in the art of coffee making. Our journey began over two decades ago in a small corner of the city, where a passion for perfect brews was born. Today, we stand as a testament to quality, consistency, and a deep love for coffee.
                </h5>

            </div>
        </div>
    </div>
</section>

      </div>
    </div>
  </section>

  <section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center text-center my-sm-5">
                <div class="col-lg-6">
                    <h2 class="text-dark mb-0">COME AND FEAST</h2>
                    <h2 class="text-primary text-gradient">Delicious Food & Coffee</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6 col-md-4">
                <img src="{{ asset('softui/assets/img/food 1.jpg') }}" width="85%" height="85%"></img>
                <h6>Signature Dish</h6>
                <p class="h6">Experience our famous grilled chicken, seasoned with a unique blend of spices and served with a side of fresh vegetables.</p>
            </div>

            <div class="col-6 col-md-4">
                <img src="{{ asset('softui/assets/img/food 2.jpg') }}" width="85%" height="85%"></img>
                <h6>Artisanal Coffee</h6>
                <p class="h6">Savor the rich and bold flavors of our artisanal coffee, crafted from the finest beans sourced globally.</p>
            </div>

            <div class="col-6 col-md-4">
                <img src="{{ asset('softui/assets/img/food 3.jpg') }}" width="85%" height="85%"></img>
                <h6>Decadent Desserts</h6>
                <p class="h6">Indulge in our selection of decadent desserts, from creamy cheesecakes to rich chocolate mousse.</p>
            </div>
        </div>
    </div>
</section>

      </div>
    </div>
  </section>

  <section class="my-5 py-5">
    <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <button class="bg-danger border-0 px-3 py-2 font-weight-bold text-white border-radius-md">View Menu</button>
          </div>
        </div>
      </div>
  </section>

    <section class="my-5 py-5">
      <div class="container">
          <div class="d-flex">
              <div class="p-2 bd-highlight">
                  <img src="{{ asset('softui/assets/img/s1.png') }}" width="577px" height="529px">
              </div>
              <div class="d-flex flex-column justify-content-between">
                  <div class="d-flex mb-3">
                      <div class="p-2 bd-highlight">
                          <img src="{{ asset('softui/assets/img/s2.png') }}" width="283px" height="259px">
                      </div>
                      <div class="p-2 bd-highlight">
                          <img src="{{ asset('softui/assets/img/s3.png') }}" width="283px" height="259px">
                      </div>
                  </div>
                  <div class="p-2 bd-highlight">
                      <img src="{{ asset('softui/assets/img/s4.png') }}" width="577px" height="254px">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="my-5 py-5">
    <div class="container">
      <div class="col-lg-7 text-center mx-auto">
        <h5 class="h1" style="font-family: Amiri, font-size: 200px;">“</h5>
        <h5 class="h6">Chilly ambience and the place is really nice to hangout or to just read books while sipping some coffee. The staffs are very friendly too, they definitely serve good food and good drinks!</h5>
        <h5 class="h5"><br>John Lee</h5>
        <h5 class="h6">Manager</h5>
        <img src="{{ asset('softui/assets/img/manager.png') }}" width="132px" height="132px">
      </div>
    </div>
  </section>

  <section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center text-center my-sm-5">
                <div class="col-lg-6">
                    <h2 class="text-dark mb-0">UPCOMING EVENTS</h2>
                    <h3 class="text-primary text-gradient">Don't Miss Out On Our Coffee Delights</h3>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-6 col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Latte Art Workshop</h5>
                        <p class="card-text">Join us for a hands-on workshop where you can learn the art of creating stunning latte designs. Perfect for coffee enthusiasts!</p>
                        <img src="{{ asset('softui/assets/img/poster 1.jpg') }}" width="265px" height="327px"></img>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Coffee Tasting Experience</h5>
                        <p class="card-text">Explore a variety of coffee flavors from around the world in this guided tasting session. Discover your new favorite blend!</p>
                        <img src="{{ asset('softui/assets/img/poster 2.jpg') }}" width="265px" height="327px"></img>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Live Music Nights</h5>
                        <p class="card-text">Enjoy live music performances by local artists every Friday night. Relax with a cup of coffee and good tunes.</p>
                        <img src="{{ asset('softui/assets/img/poster 3.jpg') }}" width="265px" height="327px"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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

  <!--   Core JS Files   -->
  <script src="{{ asset('softui/assets/js/core/popper.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('softui/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('softui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>


  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('softui/assets/js/plugins/countup.min.js') }}"></script>


  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>

  <script src="{{ asset('softui/assets/js/plugins/prism.min.js') }}"></script>

  <script src="{{ asset('softui/assets/js/plugins/highlight.min.js') }}"></script>

  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="{{ asset('softui/assets/js/plugins/rellax.min.js') }}"></script>

  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="{{ asset('softui/assets/js/plugins/tilt.min.js') }}"></script>

  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="{{ asset('softui/assets/js/plugins/choices.min.js') }}"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="{{ asset('softui/assets/js/plugins/parallax.min.js') }}"></script>


  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('softui/assets/js/soft-design-system.min.js?v=1.0.9') }}" type="text/javascript"></script>


  <script type="text/javascript">

    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>

</body>

</html>
