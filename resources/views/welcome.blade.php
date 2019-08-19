<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="landing_page/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="landing_page/image/ico" href="landing_page/images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="landing_page/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing_page/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing_page/css/themify-icons.css">
    <link rel="stylesheet" href="landing_page/css/magnific-popup.css">
    <link rel="stylesheet" href="landing_page/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="landing_page/css/normalize.css">
    <link rel="stylesheet" href="landing_page/style.css">
    <link rel="stylesheet" href="landing_page/css/responsive.css">
    <script src="landing_page/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>inventory</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#contact-page">Contact Us</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <!-- <li><a href="#service-page">Service</a></li>
                    <li><a href="#feature-page">Features</a></li>
                    <li><a href="#price-page">Pricing</a></li>
                    <li><a href="#team-page">Team</a></li>
                    <li><a href="#faq-page">FAQ</a></li>
                    <li><a href="#blog-page">Blog</a></li>
                    <li><a href="#contact-page">Contact</a></li> -->
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2>Welcome to Aplication Inventory</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ex inventore vel error quibusdam animi fugiat, doloribus dolores consectetur nulla deleniti sint blanditiis quod debitis quis vitae officiis tempora numquam.</p>
                    <a href="{{ route('login') }}" class="button white">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->

    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            <p>Silahkan mengisi form dibawah ini, <br>Apabila ingin menghubungi!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="landing_page/images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="landing_page/images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">+8801812726495</a> <br />
                                    <a href="callto:8801687420471">+8801687420471</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="landing_page/images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">youremail@example.com</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="process.php" id="contact-form" method="post" class="contact-form">
                            <div class="form-double">
                                <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                            <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                            <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                            <button type="sibmit" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum quaerat sed nemo temporibus unde, beatae vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright {{ date('Y') }} All right resurved.  SMKN 1 SUBANG</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!--Vendor-JS-->
    <script src="landing_page/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="landing_page/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="landing_page/js/owl.carousel.min.js"></script>
    <script src="landing_page/js/contact-form.js"></script>
    <script src="landing_page/js/jquery.parallax-1.1.3.js"></script>
    <script src="landing_page/js/scrollUp.min.js"></script>
    <script src="landing_page/js/magnific-popup.min.js"></script>
    <script src="landing_page/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="landing_page/js/main.js"></script>
</body>

</html>
