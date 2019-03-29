<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/fest_icon.png" type="image/ico" />
    <title>IUT 10th ICT FEST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../snipp/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../snipp/css/animate.css">
    
    <link rel="stylesheet" href="../snipp/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../snipp/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../snipp/css/magnific-popup.css">

    <link rel="stylesheet" href="../snipp/css/aos.css">

    <link rel="stylesheet" href="../snipp/css/ionicons.min.css">

    <link rel="stylesheet" href="../snipp/../snipp/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../snipp/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../snipp/css/flaticon.css">
    <link rel="stylesheet" href="../snipp/css/icomoon.css">
    <link rel="stylesheet" href="../snipp/css/style.css">
    <link href="../css/sweetalert.css" rel="stylesheet">

    

    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
  

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

      <img align="center" src={{asset('images/brand.png')}} width="10%" height="10%">

      <a class="navbar-brand" href="{{route('front')}}">   IUT 10<sup>th</sup> ICT FEST.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <!-- @if (Route::has('login'))
                
                    @auth
                        <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    @else
                        <li class="nav-item active"><a href="{{route('login')}}" class="nav-link">ADMIN PANEL</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item active"><a href="{{route('register')}}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                
            @endif -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selected Participants</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('selected_mo')}}">Math Olympiad</a>
                <a class="dropdown-item" href="{{route('selected_io')}}">ICT Olympiad</a>
                <a class="dropdown-item" href="{{route('selected_pc')}}">Programming Contest</a>
                <a class="dropdown-item" href="{{route('selected_ps')}}">Project Showcasing</a>
                <a class="dropdown-item" href="{{route('selected_business')}}">IT Business Case Competition</a>
                <a class="dropdown-item" href="{{route('selected_fifa')}}">FIFA 19</a>
                <a class="dropdown-item" href="{{route('selected_siege')}}">Rainbow Six Siege</a>
                <a class="dropdown-item" href="{{route('selected_dota')}}">DOTA 2</a>
                <a class="dropdown-item" href="{{route('selected_poster')}}">Poster Presentation</a>
                <a class="dropdown-item" href="{{route('selected_appdev')}}">Application Development</a>
                <a class="dropdown-item" href="{{route('selected_hackathon')}}">Hackathon</a>
              </div>
          </li> -->
          <li class="nav-item"><a href={{route('payment')}} class="nav-link">Payment</a></li>
          <li class="nav-item"><a href={{route('schedule')}} class="nav-link">Schedule</a></li>
          <li class="nav-item"><a href={{route('events')}} class="nav-link"><span>Events</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <main>
    @yield('body')
    </main>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">IUT 10<sup>th</sup> ICT Fest</h2>
              <!-- <p>“Champions do not become champions when they win the event, but in the hours, weeks, months and years they spend preparing for it.” -T. Alan Armstrong</p> -->
              <img align="center" src={{asset('images/fest_icon.png')}} width="60%" height="60%">
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href={{route('events')}}>Events</a></li>
                <li><a href={{route('payment')}} class="py-2 d-block">Payment</a></li>
                <li><a href={{route('schedule')}} class="py-2 d-block">Schedule</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Islamic University of Technology,<br>Board Bazar, Gazipur - 1704</a></li>
                <li><a href="#" class="py-2 d-block">+8801946733033 (HELP LINE)</a></li>
                <li><a href="#" class="py-2 d-block">admin@ictfest2019.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                
                <li class="ftco-animate"><a href="https://www.facebook.com/events/2210175945978123/"><span class="icon-facebook"></span></a></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & website is developed by IUT CSE 15.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../snipp/js/jquery.min.js"></script>
  <script src="../snipp/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../snipp/js/popper.min.js"></script>
  <script src="../snipp/js/bootstrap.min.js"></script>
  <script src="../snipp/js/jquery.easing.1.3.js"></script>
  <script src="../snipp/js/jquery.waypoints.min.js"></script>
  <script src="../snipp/js/jquery.stellar.min.js"></script>
  <script src="../snipp/js/owl.carousel.min.js"></script>
  <script src="../snipp/js/jquery.magnific-popup.min.js"></script>
  <script src="../snipp/js/aos.js"></script>
  <script src="../snipp/js/jquery.animateNumber.min.js"></script>
  <script src="../snipp/js/bootstrap-datepicker.js"></script>
  <script src="../snipp/js/jquery.timepicker.min.js"></script>
  <script src="../snipp/js/particles.min.js"></script>
  <script src="../snipp/js/particle.js"></script>
  <script src="../snipp/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../snipp/js/google-map.js"></script>
  <script src="../snipp/js/main.js"></script>

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



    


  <script src="../js/sweetalert.min.js"></script>
  @include('sweet::alert')
    
  </body>
</html>