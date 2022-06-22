<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Bulustalan - <?php echo $judul; ?></title>
    <meta name="keywords" content="Sistem Informasi Desa" />
    <meta name="description" content="Projek Sistem Pengelolaan Data Kelurahan">
    <meta name="author" content="codepedia">
    <link rel="icon" href="<?php echo base_url(); ?>assets/octopus/assets/images/logo-desa.png" sizes="16x16" type="image/png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />


    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.css" />

    <!--tambahan-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/select2.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/select2-bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatabel/assets/css/datatables.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">
        <?php $this->load->view('template/header'); ?>

        <div class="inner-wrapper">

            <?php $this->load->view($menu); ?>

            <?php $this->load->view($content); ?>

        </div>

        <?php $this->load->view('template/sider'); ?>

    </section>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/raphael/raphael.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/gauge/gauge.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!--tambahan-->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/pnotify/pnotify.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datatabel/assets/js/datatables.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-autosize/jquery.autosize.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sweetarlet/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/ios7-switch/ios7-switch.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.init.js"></script>

    <!-- Examples -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/dashboard/examples.dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/ui-elements/examples.notifications.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/modals.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scriptku.js"></script>

</body>

</html>