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
    <!-- Start: page -->
    <div class="row">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Arsip Data</h2>
            </header>
            <div class="panel-body">
                <div class="row pul">
                    <div class="col-md-12">
                        <div class="mb-md pull-right">
                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#ModalTambahArsip"><i class="fa fa-plus"></i></a>
                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#ModalUploadArsip"><i class="fa fa-upload"></i></a>
                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">PDF</a></li>
                                <li><a href="#">EXCEL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="tabelarsip">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">NAMA</th>
                            <th class="text-center">DATA</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <!-- end: page -->
</section>