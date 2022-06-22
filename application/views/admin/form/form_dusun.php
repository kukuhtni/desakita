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
                    <li><span><?php echo $submenu; ?></span></li>
                <?php

                }
                ?>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- Start: page -->
    <div class="row">
        <div class="col-md-12">
            <section class="panel panel-featured panel-featured-dark">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title"><?= $submenu; ?></h2>
                </header>
                <div class="panel-body">
                    <div class="row container">
                        <div class="col-md-12">
                            <div class="row">
                                <?php
                                if (!empty($back)) { ?>
                                    <div class="mb-md pull-left">
                                        <a class="btn btn-sm btn-dark" href="<?= base_url('admin'); ?>/<?= $back; ?>/<?= $id_dusun; ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                            if (!empty($submenu === "Kelola Dusun")) { ?>
                                <div class="row">
                                    <form class="form-horizontal form-nobordered" id="struktur_form_cek" action="<?= base_url('admin/peldatwil/tambah_dusun'); ?>" method="POST">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">Nama Dusun : </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="namadusun" name="namadusun" value="<?= $dusun; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">NIK / Nama Kepala Dusun : </label>
                                                <div class="col-md-5">
                                                    <select class="form-control" id="nikaparat" name="nik">
                                                        <option value="">Pilih Kepala Dusun </option>
                                                        <?php
                                                        foreach ($listpenduduk as $data) {
                                                            ?>
                                                            <option value="<?= $data['id']; ?>"><?= $data['nik']; ?> / <?= $data['nama']; ?> </option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if (!empty($submenu === "Kelola RW")) { ?>
                                <div class="row">
                                    <form class="form-horizontal form-nobordered" id="struktur_form_cek" action="<?= base_url('admin/' . $form_action); ?>" method="POST">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">No RW : </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="norw" name="norw" value="<?= $rw; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">NIK / Nama RW : </label>
                                                <div class="col-md-5">
                                                    <select class="form-control" id="nikaparat" name="nik">
                                                        <option value="">Pilih Ketua RW </option>
                                                        <?php
                                                        foreach ($listpenduduk as $data) {
                                                            ?>
                                                            <option value="<?= $data['id']; ?>"><?= $data['nik']; ?> / <?= $data['nama']; ?> </option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if (!empty($submenu === "Kelola RT")) { ?>
                                <div class="row">
                                    <form class="form-horizontal form-nobordered" id="struktur_form_cek" action="<?= base_url('admin/' . $form_action); ?>" method="POST">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">No RT : </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="nort" name="nort" value="<?= $rt; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="">NIK / Nama RT : </label>
                                                <div class="col-md-5">
                                                    <select class="form-control" id="nikaparat" name="nik">
                                                        <option value="">Pilih Ketua RT </option>
                                                        <?php
                                                        foreach ($listpenduduk as $data) {
                                                            ?>
                                                            <option value="<?= $data['id']; ?>"><?= $data['nik']; ?> / <?= $data['nama']; ?> </option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="row">
                                <div class="mb-md pull-right">
                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-plus"></i> Simpan Data</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>