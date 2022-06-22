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

    <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
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


                            <h2 class="panel-title ">Data statistik Jenis Kelamin</h2>
                        </header>
                        <div class="panel-body">

                            <canvas id="canvas"></canvas>


                            <script>
                                var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                                var randomScalingFactor = function() {
                                    return Math.round(Math.random() * 100);
                                };

                                var config = {
                                    type: 'line',
                                    data: {
                                        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017'],
                                        datasets: [{
                                            label: 'Laki-laki',
                                            backgroundColor: window.chartColors.red,
                                            borderColor: window.chartColors.red,
                                            data: [12, 19, 3, 23],
                                            fill: false,
                                        }, {
                                            label: 'Perempuan',
                                            fill: false,
                                            backgroundColor: window.chartColors.blue,
                                            borderColor: window.chartColors.blue,
                                            data: [22, 19, 13, 83],
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        title: {
                                            display: true,
                                            text: 'Stastistik Jenis Kelamin'
                                        },
                                        tooltips: {
                                            mode: 'index',
                                            intersect: false,
                                        },
                                        hover: {
                                            mode: 'nearest',
                                            intersect: true
                                        },
                                        scales: {
                                            xAxes: [{
                                                display: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Tahun'
                                                }
                                            }],
                                            yAxes: [{
                                                display: true,
                                                scaleLabel: {
                                                    display: true,
                                                    labelString: 'Value'
                                                },
                                                ticks: {
                                                    min: 0,
                                                    max: 100,

                                                    // forces step size to be 5 units
                                                    stepSize: 5
                                                }
                                            }]
                                        }
                                    }
                                };

                                window.onload = function() {
                                    var ctx = document.getElementById('canvas').getContext('2d');
                                    window.myLine = new Chart(ctx, config);
                                };

                                document.getElementById('randomizeData').addEventListener('click', function() {
                                    config.data.datasets.forEach(function(dataset) {
                                        dataset.data = dataset.data.map(function() {
                                            return randomScalingFactor();
                                        });
                                    });

                                    window.myLine.update();
                                });
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