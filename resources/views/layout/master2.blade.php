<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <meta name="description" content="" />
  <meta name="keywords" content="admin, admin dashboard, admin template" />
  <meta name="author" content="SRGIT" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="../app/plugins/assets/img/logo.png">
  <link rel="icon" href="../app/plugins/assets/img/logo.png" type="image/x-icon">
  <!-- Data table CSS -->
  <link href="../app/plugins/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="../app/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
  <!-- Custom CSS -->
  <link href="../app/plugins/assets/css/default.css" rel="stylesheet" type="text/css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body>
  <!-- Preloader -->
  <div class="preloader-it">
    <div class="preloader">
      <div class="circles-1">
        <div class="circles-1-center"></div>
        <div class="circles-1"></div>
        <div class="circles-1"></div>
        <div class="circles-1"></div>
        <div class="circles-1"></div>
        <div class="circles-1"></div>
        <div class="circles-1"></div>
      </div>
    </div>
  </div>
  <!-- //Preloader -->
  <div class="wrapper light-theme">
    <!-- Top Header -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
          <div class="logo-wrap"> <a href="#"> <img class="brand-img" src="../app/plugins/assets/img/logo.png" alt="brand" /> <span class="brand-text">Wales<strong>Miner</strong> ]</span> </a> </div>
        </div>
        <a id="toggle-btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="mdi mdi-format-list-bulleted"></i></a> <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-search"></i></a> <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="mdi mdi-more"></i></a>
        <form id="search_form" role="search" class="top-nav-search collapse pull-left">
          <div class="input-group">
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button type="button" class="btn btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="pe-7s-search"></i></button>
            </span> </div>
        </form>
      </div>
      <div id="mobile_right_sidebar" class="mobile-right-sidebar pull-right">
        <ul class="nav navbar-right top-nav pull-right">
          <li class="dropdown auth-drp"> <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="../app/plugins/assets/img/users/avatar-2.jpg" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <li> <a href="profile.html"><i class="mdi mdi-account"></i><span>Profile</span></a> </li>
              <li> <a href="#"><i class="mdi mdi-settings"></i><span>Settings</span></a> </li>
              <li class="divider"></li>
              <li class="divider"></li>
              <li> <a href="#"><i class="mdi mdi-power"></i><span>Log Out</span></a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /Top Menu Items -->
    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header"> <span>Main</span> <i class="mdi mdi-more"></i> </li>
        <li> <a class="" href="{{ route('admindashboard') }}">
            <div class="pull-left"><i class="mdi mdi-bank mr-20"></i><span class="right-nav-text">Account Review</span></div>
            <div class="clearfix"></div>
          </a>
          <ul id="admin-dash" class="collapse collapse-level-1 in">
          </ul>
        </li>
        <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#deposit_list">
            <div class="pull-left"><i class="mdi mdi-code-greater-than-or-equal mr-20"></i><span class="right-nav-text">Deposits</span></div>
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
          </a>
          <ul id="deposit_list" class="collapse collapse-level-1">
            <li> <a href="{{ route('pendingdeposit') }}">Pending Deposit</a> </li>
            <li> <a href="{{ route('activedeposit') }}">Active Deposit</a> </li>
          </ul>
        </li>
        <li> <a href="javascript:void(0);" data-toggle="collapse" data-target="#withdrawal_list">
            <div class="pull-left"><i class="mdi mdi-cloud-circle mr-20"></i><span class="right-nav-text">Withdrawals</span></div>
            <div class="pull-right"><i class="mdi mdi-chevron-down"></i></div>
            <div class="clearfix"></div>
          </a>
          <ul id="withdrawal_list" class="collapse collapse-level-1">
            <li> <a href="{{ route('pendingwithrawal') }}">Pending Withdrawal</a> </li>
            <li> <a href="{{ route('activewithdrawal') }}">Active Withdrawal</a> </li>
          </ul>
        </li>
        <li> <a href="{{ route('allusers') }}">
            <div class="pull-left"><i class="mdi mdi-account-multiple-plus mr-20"></i><span class="right-nav-text">Users</span></div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li> <a href="{{ route('logout') }}">
            <div class="pull-left"><i class="mdi mdi-arrow-right-bold-circle mr-20"></i><span class="right-nav-text">Logout</span></div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li>
          <hr class="light-grey-hr mb-10" />
        </li>
      </ul>
    </div>
    <!-- /Left Sidebar Menu -->

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



  </div>
  <!-- /Main Content -->
  <!-- /#wrapper -->
  <!-- JavaScript -->
  <!-- jQuery -->
  <script src="../app/plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Data table JavaScript -->
  <script src="../app/plugins/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../app/plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Slimscroll JavaScript -->
  <script src="../app/plugins/assets/js/jquery.slimscroll.js"></script>
  <!-- Owl JavaScript -->
  <script src="../app/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../app/plugins/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
  <!-- Progressbar Animation JavaScript -->
  <script src="../app/plugins/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../app/plugins/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
  <!-- Fancy Dropdown JS -->
  <script src="../app/plugins/assets/js/dropdown-bootstrap-extended.js"></script>
  <!-- FlotChart JavaScript -->
  <script src="../app/plugins/vendors/bower_components/flot/jquery.flot.js"></script>
  <script src="../app/plugins/assets/js/flot-data-dashboard.js"></script>
  <script src="../app/plugins/vendors/bower_components/skycons/skycons.js"></script>
  <!-- Sparkline JavaScript -->
  <script src="../app/plugins/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- Switchery JavaScript -->
  <script src="../app/plugins/vendors/bower_components/switchery/dist/switchery.min.js"></script>
  <!-- EChartJS JavaScript -->
  <script src="../app/plugins/vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
  <!-- Toast JavaScript -->
  <script src="../app/plugins/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
  <!-- Init JavaScript -->
  <script src="../app/plugins/assets/js/init.js"></script>
  <script src="../app/plugins/assets/js/dashboard.init.js"></script>

</body>

</html>