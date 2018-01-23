<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Polling | </title>
    <script src="<?php echo base_url()."assets/" ?>js/jquery-1.11.1.min.js"></script>


    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/" ?>css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()."assets/" ?>fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()."assets/" ?>css/nprogress.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>dataTables.bootstrap.css">


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()."assets/" ?>css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()."admin/" ?>"><i class="fa fa-home"></i> Home</span></a></li>
                  <li><a href="<?php echo base_url()."admin/vote" ?>"><i class="fa fa-home"></i>Vote</span></a></li>
                  <li><a href="<?php echo base_url()."admin/add" ?>"><i class="fa fa-home"></i>Buat Vote</span></a></li>
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
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php $this->load->view('admin/'.$page) ?>
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
    <!-- Bootstrap -->
    <script src="<?php echo base_url()."assets/" ?>js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()."assets/" ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()."assets/" ?>vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.dataTables.js"></script>

    <script src="<?php echo base_url()."assets/js/"; ?>dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>Chart.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()."assets/" ?>js/custom.min.js"></script>
    <?php $this->load->view('admin/script') ?>
  </body>
</html>
