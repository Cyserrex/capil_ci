<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kecamatan | Catatan Sipil</title>

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

    <link href="../build/css/capil.css" rel="stylesheet">

    <link href="cart/chartist.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img id="logo_c" src="images/logo_bjm.png"> <span> Disdukcapil</span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Utama</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Jumlah Penduduk</a></li>
                      <li><a href="index_kec.html">Jumlah Kecamatan</a></li>
                      <li><a href="index_kel.html">Jumlah Kelurahan</a></li>
                      <li><a href="index_agm.html">Jumlah Agama</a></li>
                      <li><a href="index_lhr.html">Jumlah Kelahiran & Kematian</a></li>
                      <li><a href="index_status.html">Jumlah Status</a></li>
                      <li><a href="index_wni.html">Jumlah WNA dan WNI</a></li>
                      <li><a href="index_kitas.html">Jumlah KITAS</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data Penduduk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>                     
                    </ul>
                  </li>       
                </ul>
              </div>

              <div class="menu_section">
                <h3>Menu Kedua</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Log <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Lain-lain <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      
                      <li><a href="login.html">Login Page</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
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
               
              <!-- BAR ATAS -->

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total Kelurahan</span>
              <div class="count green">29</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RT</b> /Kelurahan</span>
              <div class="count green">38</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RW</b> /Kelurahan</span>
              <div class="count green">38</div>
            </div>           
            
            
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3><i class="fa fa-line-chart"></i> Penduduk <small>Grafik pertumbuhan penduduk per Kecamatan</small></h3>
                  </div>
                <div class="pull-right">
                  <div class="col-md-7">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-map-marker"></i>
                      <label for="exampleSelect1">Kelurahan</label>
                      <select class="form-control" id="exampleSelect1">
                        <option>Sungai Miai</option>
                        <option>Pangeran</option>                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-calendar"></i>
                      <label for="exampleSelect1">Tahun</label>
                      <select class="form-control" id="exampleSelect1">
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="ct-chart ct-golden-section"></div>
                

                  <!--div id="chart_plot_01" class="demo-placeholder"></div-->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Jumlah RT dan RW</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-xs-12 bg-white progress_summary">

                      <div class="row">
                        
                        <div class="col-xs-2">
                          <span>RT</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>89</span>
                        </div>
                      </div>
                      <div class="row">
                        

                        <div class="col-xs-2">
                          <span>RW</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>79</span>
                        </div>
                      </div>
                      

                    </div>
                  

                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Jumlah Penduduk</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-xs-12 bg-white progress_summary">


                    <div>
                      <p>Laki-laki</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                          <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">40%</div>
                        </div>

                      </div>
                    </div>
                    <div>
                      <p>Perempuan</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />


         </div>
        <!-- /page content -->

        <!-- footer content -->
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script src="cart/chartist.js"></script>

    <script type="text/javascript">
      new Chartist.Line('.ct-chart', {
        labels: [2012, 2013, 2014, 2015, 2016, 2017],
        series: [
          [700, 800, 900, 1000, 1100, 1200],
          [600, 700, 800, 900, 1000, 1100],
        ]
      }, {
        width: 800,
        height: 400,
        fullWidth: true,
        
        axisY: {
          onlyInteger: false,
          offset: 50
        },
        //Untuk Mempaskan Tahun
        chartPadding: {
          right: 50
        }
      });
    </script>
  
  </body>
</html>
