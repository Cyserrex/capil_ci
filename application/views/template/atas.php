<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $TITLE ?></title>
    
    <!-- jQuery -->
    <script src="<?=base_url()?>vendor/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="<?=base_url()?>vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Table -->
    <link href="<?=base_url()?>vendor/bootstrap-datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>vendor/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>vendor/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url()?>vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url()?>vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>css/custom.min.css" rel="stylesheet">

    <link href="<?=base_url()?>css/capil.css" rel="stylesheet">
  </head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url()?>utama" class="site_title"><img id="logo_c" src="<?=base_url()?>css/images/logo_bjm.png"> <span> Disdukcapil</span></a>
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
                      <li><a href="<?=base_url()?>utama">Jumlah Penduduk</a></li>
                      <li><a href="<?=base_url()?>utama/kecamatan">Jumlah Kecamatan</a></li>
                      <li><a href="<?=base_url()?>utama/kelurahan">Jumlah Kelurahan</a></li>
                      <li><a href="<?=base_url()?>utama/agama">Jumlah Agama</a></li>
                      <li><a href="<?=base_url()?>utama/pekerjaan">Jumlah Pekerjaan</a></li>
                      <li><a href="<?=base_url()?>utama/kelahiran">Jumlah Kelahiran & Kematian</a></li>
                      <li><a href="<?=base_url()?>utama/status">Jumlah Status</a></li>
                      <li><a href="<?=base_url()?>utama/wni">Jumlah WNA dan WNI</a></li>
                      <li><a href="<?=base_url()?>utama/kitas">Jumlah KITAS</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data Penduduk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>utama2">Jumlah Penduduk</a></li>
                      <li><a href="<?=base_url()?>utama2/kecamatan">Jumlah Kecamatan</a></li>
                      <li><a href="<?=base_url()?>utama2/kelurahan">Jumlah Kelurahan</a></li>
                      <li><a href="<?=base_url()?>utama2/agama">Jumlah Agama</a></li>
                      <li><a href="<?=base_url()?>utama2/pekerjaan">Jumlah Pekerjaan</a></li>
                      <li><a href="<?=base_url()?>utama2/kelahiran">Jumlah Kelahiran & Kematian</a></li>
                      <li><a href="<?=base_url()?>utama2/status">Jumlah Status</a></li>
                      <li><a href="<?=base_url()?>utama2/wni">Jumlah WNA dan WNI</a></li>
                      <li><a href="<?=base_url()?>utama2/kitas">Jumlah KITAS</a></li>                   
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
                 <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url()?>css/images/user.png" alt="">Admin Capil
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Pengaturan</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Bantuan</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                  </ul>
                </li>
              <!-- BAR ATAS -->

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->