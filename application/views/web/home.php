<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Website Resmi Desa Kita &amp; Branda</title>

    <link rel="icon" href="<?php echo base_url(); ?>assets/octopus/assets/images/logo-desa.png">

    <link rel="stylesheet" href="<?php echo base_url('/assets/guest') ?>/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <?php $this->load->view('web/header'); ?>

    <?php $this->load->view($konten); ?>

    <!-- Footer Area Start -->
    <?php $this->load->view('web/footer'); ?>
    <script src="<?php echo base_url('/assets/guest') ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/guest') ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url('/assets/guest') ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('/assets/guest') ?>/js/roberto.bundle.js"></script>
    <script src="<?php echo base_url('/assets/guest') ?>/js/default-assets/active.js"></script>

</body>

</html>