<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo_black.png" type="image/ico" />

    <title>IUT 10th ICT FEST</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../css/sweetalert.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href={{route('front')}} class="site_title"><span>IUT 10<sup>th</sup> ICT FEST</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h4>{{Auth::user()->name}}</h4>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                  </li>
                </ul>
                <h3>Events</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i>Math Olympiad<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_mo')}}>Register</a></li>
                      <li><a href={{route('mo_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i>ICT Olympiad<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_io')}}>Register</a></li>
                      <li><a href={{route('io_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i>Programming Contest<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_pc')}}>Register</a></li>
                      <li><a href={{route('pc_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Project Showcasing<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_ps')}}>Register</a></li>
                      <li><a href={{route('ps_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>IT Business Case Competition<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_business')}}>Register</a></li>
                      <li><a href={{route('business_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>FIFA 19<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_fifa')}}>Register</a></li>
                      <li><a href={{route('fifa_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Rainbow Six Siege<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_siege')}}>Register</a></li>
                      <li><a href={{route('siege_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>DOTA 2<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_dota')}}>Register</a></li>
                      <li><a href={{route('dota_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Poster Presentation<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href={{route('register_poster')}}>Register</a></li>
                      <li><a href={{route('poster_list')}}>Participants' Info</a></li>
                    </ul>
                  </li>

                </ul>

                
                  
              <div class="menu_section">
                <h3>Services</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-money"></i> Transactions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">History</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope-o"></i> SMS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Send</a></li>
                      <li><a href="page_404.html">History</a></li>
                      <li><a href="page_404.html">Balance</a></li>  
                    </ul>
                            
                </ul>
              </div>
            </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href={{route('register')}}>Register</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>    
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        
        <!-- /page content -->
        <main>
          @yield('body')
        </main>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed by CSE'15 , IUT
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Data Tables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    @include('sweet::alert')
	
  </body>
</html>
