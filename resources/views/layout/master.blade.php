<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="CryptoPress - Cryptocurrency " />
  <meta name="keywords" content="bitcoin, blockchain, coin currency, crypto currency, currency, Currency Exchange, digital currency, exchange, exchange currency,litecoin, online wallet," />
  <meta name="author" content="Cpod" />

  <!-- Page Title -->
  <title>@yield('title')</title>

  <!-- Favicon and Touch Icons -->
  <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="assets/css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link href="assets/css/menuzord-megamenu.css" rel="stylesheet" />
  <link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
  <link href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

  <!-- CSS | Theme Color -->
  <link href="assets/css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="assets/js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

</head>

<body class="">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
      <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="widget text-white">
                <i class="fa fa-clock-o text-theme-colored2"></i> Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget">
                <ul class="list-inline  text-right flip sm-text-center">
                  <li class="m-0 pl-10"> <a href="{{ url('/signin')}}" class="text-white"><i class="fa fa-user-o mr-5 text-theme-colored2"></i> Login /</a> </li>
                  <li class="m-0 pl-0 pr-10">
                    <a href="{{ route('signup') }}" class="text-white"><i class="fa fa-edit mr-5 text-theme-colored2"></i>Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
          <div class="container">
            <nav id="menuzord-right" class="menuzord blue no-bg"><a class="menuzord-brand pull-left flip mb-15" href="#"><img src="assets/images/logo.png" alt=""></a>
              <ul class="menuzord-menu">

                <li class="active"><a href="{{ url('/')}}">Homepage</a></li>

                <li><a href="{{ url('/about-us')}}">About Us</a></li>

                <li><a href="#">Company News</a></li>

                <li><a href="{{ url('/affiliate')}}">Affilliate</a></li>

                <li><a href="{{ url('/faq')}}">FAQ</a></li>

                <li><a href="{{ url('contact-us')}}">Contact Us</a></li>

                <li class="active pull-right"><a href="#">Support</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    @yield('content')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function() {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5da91161df22d913399fbde6/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="assets/images/footer-bg.png" data-bg-color="#152029">
      <div class="container pt-70 pb-40">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <img class="mt-5 mb-20" alt="" src="assets/images/logo.png">
              <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
              <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">+971 55 155 8495</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">walesminer@gmail.com</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.walesminer.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Useful Links</h4>
              <ul class="list angle-double-right list-border">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Company News</a></li>
                <li><a href="#">Affilliate</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title">Twitter Feed</h4>
              <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
              <div class="opening-hours">
                <ul class="list-border">
                  <li class="clearfix"> <span> Mon - Tues : </span>
                    <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Wednes - Thurs :</span>
                    <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Fri : </span>
                    <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Sun : </span>
                    <div class="value pull-right"> Closed </div>
                  </li>
                </ul>
              </div>
              <div class="widget dark">
                <h5 class="widget-title mb-10">Connect With Us</h5>
                <ul class="styled-icons icon-bordered icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-theme-colored-transparent-5">
        <div class="container pt-20 pb-20">
          <div class="row">
            <div class="col-md-6">
              <p class="font-11 text-black-777 m-0">Copyright &copy;2019 Dcode Arena. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-right">
              <div class="widget no-border m-0">
                <ul class="list-inline sm-text-center mt-5 font-12">
                  <li>
                    <a href="#">FAQ</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Help Desk</a>
                  </li>
                  <li>|</li>
                  <li>
                    <a href="#">Support</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <script src="assets/js/custom.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>