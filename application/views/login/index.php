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
    <?php $this->load->view($page); ?>
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
</html>