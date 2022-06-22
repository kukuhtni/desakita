<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Desa Kita - <?php echo $judul; ?></title>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme-custom.css">

    <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/chart.bundle.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/chart.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
    <!-- Examples -->




    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->

        <!-- end: header -->

        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2><?php echo $judul; ?></h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span><?php echo $judul; ?></span></li>
                        <?php
                        if (!empty($subjudul)) { ?>
                            <li><span><?php echo $subjudul; ?></span></li>
                        <?php

                    }
                    ?>
                    </ol>

                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                </div>
            </header>

            <div class="row">

                <?php $this->load->view('pengelola/sub_menu/statistik'); ?>
                <div class="col-md-9">
                    <section class="panel panel-success">
                        <header class="panel-heading">


                            <h2 class="panel-title ">Data statistik Pendidikan</h2>
                        </header>
                        <div class="panel-body">
                            <div class="row pul">
                                <div class="col-md-12">
                                    <div class="mb-md pull-right">
                                        <table style="color:#545454">
                                            <tbody>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div style="width:4px;height:0;border:5px solid #0088cc;overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">SD</td>
                                                </tr>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div style="width:4px;height:0;border:5px solid #2baab1;overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">SMP</td>
                                                </tr>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div style="width:4px;height:0;border:5px solid #734ba9;overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">SMA/Sederajat</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>

                            <div class="chart chart-sm chart-active" data-sales-rel="JSOFT Admin" id="flotDashSales1" style="padding: 0px;"><canvas class="flot-base" width="609" height="184" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 609px; height: 184px;"></canvas>
                                <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 26px; text-align: center;">2011</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 105px; text-align: center;">2012</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 186px; text-align: center;">2013</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 268px; text-align: center;">2014</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 347px; text-align: center;">2015</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 429px; text-align: center;">2016</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 512px; text-align: center;">2017</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 161px; left: 590px; text-align: center;">2018</div>
                                    </div>
                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 13px; text-align: right;">0</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 101px; left: 1px; text-align: right;">100</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 68px; left: 1px; text-align: right;">200</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 34px; left: 1px; text-align: right;">300</div>
                                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">400</div>
                                    </div>
                                </div><canvas class="flot-overlay" width="609" height="184" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 609px; height: 184px;"></canvas>
                            </div>
                            <script>
                                var flotDashSales1Data = [{
                                    label: "SD",
                                    data: [
                                        ["2011", 140],
                                        ["2012", 240],
                                        ["Mar", 190],
                                        ["2014", 140],
                                        ["2015", 180],
                                        ["2016", 320],
                                        ["2017", 270],
                                        ["2018", 180]
                                    ],
                                    color: "#0088cc"
                                }, {
                                    label: "SMP",
                                    data: [
                                        ["2011", 100],
                                        ["2012", 140],
                                        ["Mar", 110],
                                        ["2014", 100],
                                        ["2015", 120],
                                        ["2016", 220],
                                        ["2017", 220],
                                        ["2018", 480]
                                    ],
                                    color: "#2baab1"

                                }, {
                                    label: "SMA/setingkat",
                                    data: [
                                        ["2011", 120],
                                        ["2012", 210],
                                        ["Mar", 120],
                                        ["2014", 240],
                                        ["2015", 380],
                                        ["2016", 420],
                                        ["2017", 280],
                                        ["2018", 280]
                                    ],
                                    color: "#734ba9"

                                }];

                                // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.
                            </script>

                        </div>
                    </section>
                </div>

            </div>





</body>

</html>
</section>
</div>

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
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/raphael/raphael.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/g2018e/g2018e.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/snap-svg/snap.svg.js"></script>
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/liquid-meter/liquid.meter.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.init.js"></script>


<script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
<!-- Examples -->
<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/ui-elements/examples.charts.js"></script>
</body>

</html>