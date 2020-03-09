<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SI-UATF') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('sgs/images/favicon.ico') }}" type="image/ico" />


    <!-- Bootstrap -->
    <link href="{{ asset('sgs/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('sgs/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('sgs/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('sgs/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('sgs/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('sgs/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('sgs/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    @stack('css')
    <!-- Custom Theme Style -->
    <link href="{{ asset('sgs/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md footer_fixed" id="principal">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ asset('/') }}" class="site_title"><i class="fa fa-cogs"></i> <span>SI - UATF</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            @guest
                {{-- <div class="profile_info">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                </div> --}}
            @else
                <div class="profile_pic">
                    <img src="{{ asset('sgs/images/img.jpg') }}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Bienvenido</span>
                    <h2><strong>{{ Auth::user()->designation->employee->person->name }} </strong></h2>
                </div>
            @endguest
            </div>
            <!-- /menu profile quick info -->

            <br />
            @yield('options')
            <!-- sidebar menu -->
            @guest
      
            @else
            @endguest
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="{{ asset('/') }}" data-toggle="tooltip" data-placement="top" title="Menu Principal">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Pantalla Completa" onclick = "pantallaCompleta(document.getElementById('principal'))">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesion" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                  
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('sgs/images/img.jpg') }}" alt="">{{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item"   href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>{{ __('Cerrar Sesión') }}</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
    
                    <li role="presentation" class="nav-item dropdown open">
                      <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                      </a>
                      <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                          <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <div class="text-center">
                            <a class="dropdown-item">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </li>
                @endguest
                <li role="presentation" class="nav-item dropdown open" style="padding-right: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      INFORMACION DE INTERES
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> NORMATIVA</a>
                      <a class="dropdown-item"  href="javascript:;"> CONTACTOS</a>
                      <a class="dropdown-item"  href="javascript:;"> CHAT CORPORATIVO</a>
                      <a class="dropdown-item"  href="javascript:;"> EMAIL</a>.
                      <a class="dropdown-item"  href="javascript:;"> CALENDARIO ACADEMICO</a>
                    </div>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
          <!-- /top tiles -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('sgs/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('sgs/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('sgs/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('sgs/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('sgs/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('sgs/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('sgs/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('sgs/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('sgs/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('sgs/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('sgs/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('sgs/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('sgs/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('sgs/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('sgs/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('sgs/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('sgs/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('sgs/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('sgs/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('sgs/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('sgs/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    @stack('script')
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('sgs/build/js/custom.min.js') }}"></script>
    <script>
      function pantallaCompleta(elem) {
    //Si el navegador es Mozilla Firefox
        if(elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        }
        //Si el navegador es Google Chrome
        else if(elem.webkitRequestFullScreen) {
          elem.webkitRequestFullScreen();
        }
        //Si el navegador es otro
        else if(elem.requestFullScreen) { 
          elem.requestFullScreen(); 
        }
      }
      function pantallaNormal() {
    //Mozilla Firefox
        if(document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        }
        //Google Chrome
        else if(document.webkitCancelFullScreen) {
          document.webkitCancelFullScreen();
        }
        //Otro
        else if(document.cancelFullScreen) { 
          document.cancelFullScreen(); 
        }
      }
    </script>
  </body>
</html>
