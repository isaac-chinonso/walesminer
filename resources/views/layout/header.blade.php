<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Wales-Miner" />
  <meta name="keywords" content="bitcoin, blockchain, coin currency, crypto currency, currency, Currency Exchange, digital currency, exchange, exchange currency,litecoin, online wallet," />
  <meta name="author" content="" />

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

  <!-- CSS | Theme Color -->
  <link href="assets/css/colors/theme-skin-color-set2.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="assets/js/jquery-plugin-collection.js"></script>

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
    <footer id="footer" class="footer bg-black-111">
      <div class="container p-20">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0">Copyright &copy;2019 Wales-Miner. Powered by Decode Arena All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="assets/js/custom.js"></script>

</body>

</html>