<!DOCTYPE html>
<html>

 <meta charset="utf-8">
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/ico" />

    <!-- Bootstrap -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{asset('assets/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">
   <head>
	<title>BLOG</title>
</head>
<body class="nav-md">

  <div class="container body">
      <div class="main_container">
      <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>BLOG</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ADMIN</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Blog</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Review Post <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/admin/review_post') }}">Unpublic Post</a></li>
                      <li><a href="{{ url('/admin/unpublic_post') }}">Public Post</a></li>
                     
                    </ul>
                  </li>
                  <li><a href="{{ url('/admin/member_profile') }}"><i class="fa fa-edit"></i> Member Profile <span class="fa fa-chevron-down"></span></a>
                   {{--  <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul> --}}
                  </li>
                  <li><a href="{{url('/admin/login') }}"><i class="fa fa-desktop"></i> Log Out<span class="fa fa-chevron-down"></span></a>

                  </li>
                
                 
                </ul>
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
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
                    <li>
                      <a>
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
                    <li>
                      <a>
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
                    <li>
                      <a>
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
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Public Post</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

         <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="{{url('admin/')}}"><h2><i class="fa fa-align-left"></i><small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                   
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach ($post as $arr)
                      <div class="panel">
                        <div class="panel-heading collapsed"  aria-controls="collapseOne">
                          <h4 class="panel-title"><a href="{{url('/admin/publicpost/'.$arr['id'])}}"  ><?php echo $arr['tag']?></a></h4>
                        </div>
                       </div>
                    @endforeach 
                   

                </div>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
	<!-- jQuery -->
    <script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/iCheck/icheck.min.js')}}"></script>
    <!-- PNotify -->
    <script src="{{asset('assets/pnotify/dist/pnotify.js')}}"></script>
    <script src="{{asset('assets/pnotify/dist/pnotify.buttons.js')}}"></script>
    <script src="{{asset('assets/pnotify/dist/pnotify.nonblock.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('assets/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('assets/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('assetsendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('assets/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('assets/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

</body>
</html>