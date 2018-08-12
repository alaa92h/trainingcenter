<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title><?php if(isset($title))  echo $title; else  echo "مظام ادارة المدارس"; ?></title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-rtl.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href="fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css" />

    <!--Beyond styles-->
    <link href="<?php echo base_url(); ?>/assets/css/beyond-rtl.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/4095-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/typicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />
    <style type="text/css">
        html * {font-family: "Noto Kufi Arabic", Helvetica, Arial, sans-serif;}
    </style>

</head>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-right">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="<?php echo base_url(); ?>/assets/img/" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
           <?php  $this->load->view($sidebar); //  include $sidebar; ?> 
            <!-- /Page Sidebar -->
          
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">لوحة التحكم</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            لوح التحكم 
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="#">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered bg-white">
                                        <div class="databox-right bg-themesecondary">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-left">
                                            <span class="databox-number themesecondary"><?php ;?></span>
                                            <div class="databox-text darkgray">عدد  اساتذه</div>
                                            <div class="databox-stat themesecondary radius-bordered">
                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered bg-white">
                                        <div class="databox-right bg-themethirdcolor">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)"><span class="white font-90">15%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-left">
                                            <span class="databox-number themethirdcolor">145</span>
                                            <div class="databox-text darkgray"> دورة تديبيه</div>
                                            <div class="databox-stat themethirdcolor radius-bordered">
                                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered bg-white">
                                        <div class="databox-right bg-themeprimary">
                                            <div class="databox-piechart">
                                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)"><span class="white font-90">76%</span></div>
                                            </div>
                                        </div>
                                        <div class="databox-left">
                                            <span class="databox-number themeprimary">98</span>
                                            <div class="databox-text darkgray">مشترکین جدد</div>
                                            <div class="databox-state bg-themeprimary">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php 
                   if (isset($page)) {
                //    include $page;
                    $this->load->view($page);
                   }
                    ?>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url(); ?>/assets/js/skins.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/beyond.min.js"></script>


    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="<?php echo base_url(); ?>/assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/charts/sparkline/sparkline-init.js"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="<?php echo base_url(); ?>/assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/charts/easypiechart/easypiechart-init.js"></script>

  
</body>
<!--  /Body -->

<!-- Mirrored from beyondadmin-v1.6.0.s3-website-us-east-1.amazonaws.com/index-rtl-ar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2017 07:23:19 GMT -->
</html>
