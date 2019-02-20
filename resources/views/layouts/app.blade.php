<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/favicon-32x32.png"/>
    <!--link href="/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
    <link href="/css/mdb.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--link href="/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"-->

    <title>@yield('title')</title>
</head>

<body class="fixed-sn">
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="/" rel="canonical" class="logo-link"><img src="/img/custom/nav/logo-web.png" class="img-fluid flex-center" alt="Taylor Properties"></a>
                    </div>
                </li>
                <!--/. Logo -->

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="navbar-link waves-effect" href="/" rel="canonical"><i class="fas fa-fw mr-2 fa-home"></i> Home Search</a></li>
                        <li><a class="navbar-link waves-effect" href="/mortgage-information" rel="canonical"><i class="fas fa-fw mr-2 fa-search-dollar"></i> Mortgage Info</a></li>
                        <li><a class="navbar-link waves-effect" href="/title-information" rel="canonical"><i class="fas fa-fw mr-2 fa-key"></i> Title Info</a></li>
                        <li><a class="navbar-link waves-effect" href="https://www.titlecapture.com/app/30/heritagetitle" target="_blank"><i class="fas fa-fw mr-2 fa-calculator"></i> Instant Loan Quote</a></li>
                        <li><a class="navbar-link waves-effect" href="/careers" rel="canonical"><i class="fas fa-fw mr-2 fa-info-circle"></i> Careers</a></li>
                        <li><a class="navbar-link waves-effect" href="/our-agents" rel="canonical"><i class="fas fa-fw mr-2 fa-users"></i> Our Agents</a></li>
                        <li><a class="navbar-link waves-effect" href="/contact-us" rel="canonical"><i class="fas fa-fw mr-2 fa-phone"></i> Contact Us</a></li>

                    </ul>
                </li>
                <!--Social-->
                <li>
                    <div class="d-flex justify-content-between nav-social-div">
                        <a class="btn-floating btn-sm peach-gradient mx-auto nav-social" href="#" target="_blank"><i class="fab fa-linkedin mx-auto"></i></a>

                        <a class="btn-floating btn-sm blue-gradient mx-auto nav-social"  href="https://www.facebook.com/TaylorPropertiesCareers/" target="_blank"><i class="fab fa-facebook-square mx-auto"></i></a>
                    </div>
                </li>
                <!--/Social-->
            </ul>
            <div class="sidenav-bg mask-strong"></div>

        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav z-depth-3">
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>
            <div class="breadcrumb-dn mr-auto">
                <p><a href="/">Taylor Properties</a></p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tel:800-590-0925"><i class="fas fa-phone"></i> <span class="clearfix d-none d-sm-inline-block">(800) 590-0925</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://homesearch.taylorproperties.co/login/113643"><i class="far fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->


	<main class="main-index">

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

	</main>
    
    <!--Footer-->
    <footer class="page-footer pt-4 center-on-small-only wow fadeIn" data-wow-delay="0.2s">

        <!--Footer Links-->
        <div class="container">
            <div class="row my-4">
                <div class="col-md-3 col-lg-3">
                    <h5 class="title mb-4 font-bold">Corporate Location</h5>
                    <!--Info-->
                    <p><i class="fas fa-map-marker-alt mr-3"></i> 175 Admiral Cochrane Dr.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 111
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Annapolis, MD 21401</p>
                    <p><i class="fas fa-phone mr-3"></i> (800) 590-0925</p>
                    <p><i class="fas fa-print mr-3"></i> (410) 224-7265 </p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 col-lg-3">
                    <p>
                        <a href="/careers">Careers</a>
                        <br>
                        <a href="/our-agents">Our Agents</a>
                        <br>
                        <a href="/contact-us">Contact Us</a>
                        <br>
                        <a href="http://taylorproperties.info">Employee Login</a>
                        <br>
                        <a href="/privacy-policy">Privacy Policy</a>
                    </p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 col-lg-3">
                    <h5 class="title mb-4 font-bold">Office Hours</h5>
                    <p>Monday - Friday<br>
                        9:00am - 5:00pm<br> 
                        Evenings and weekends by appointment only.</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-3 col-lg-3 text-center">
                    <h5 class="title mb-4 font-bold">Follow Us</h5>
                    <!--Social buttons-->
                    <div class="social-section mt-2 ">
                        <!--Facebook-->
                        <a type="button" href="https://www.facebook.com/TaylorPropertiesCareers/" target="_blank" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook"></i></a>
                        <!--Twitter-->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            &copy; 2018 Copyright: <a href="/"> Taylor Properties </a>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.js"></script>
    <script type="text/javascript" src="/js/custom/custom.js"></script>
    <script type="text/javascript" src="/js/highlight.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
</body>

</html>