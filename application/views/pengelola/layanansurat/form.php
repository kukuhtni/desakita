<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
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
    </header><!-- Start: page -->
    <div class="row">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Form <strong>DATA PEMOHON :</strong></h2>
            </header>
            <div class="panel-body">
                <div class="row pul">
                </div>
                <div class='col-sm-12'>
                    <div class="form-group subtitle_head">
                        <label class="text-right"></label>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label for="nik">NIK </label>
                        <input id="nik" name="nik" class="form-control input-sm" type="text" disabled value="<?= $nik; ?>">
                    </div>
                </div>
                <div class='col-sm-8'>
                    <div class='form-group'>
                        <label for="nama">Nama Lengkap <code> (Tanpa Gelar )</code> </label>
                        <input id="nama" name="nama" class="form-control input-sm" type="text" disabled value="<?= $nama; ?>">
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Tempat </label>
                        <input class="form-control input-sm" type="text" value="<?= $tempatlahir; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Tanggal Lahir </label>
                        <input class=" form-control input-sm" type="text" value="<?= $tanggallahir; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Umur </label>
                        <input class=" form-control input-sm" type="text" value="<?= $umur; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label>Alamat </label>
                        <input class="form-control input-sm" type="text" value="<?= $alamat; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Pendidikan </label>
                        <input class="form-control input-sm" type="text" value="<?= $pendidikan; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Kewarganegaraan </label>
                        <input class="form-control input-sm" type="text" value="<?= $kewarganegaraan; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-4'>
                    <div class='form-group'>
                        <label>Agama </label>
                        <input class="form-control input-sm" type="text" value="<?= $agama; ?>" disabled>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='form-group'>
                        <label>Nomor Surat </label>
                        <input class="form-control input-sm" type="text" value="">
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label>Keperluan </label>
                        <textarea class="form-control input-sm" data-plugin-textarea-autosize type="text" value=""><?= $keperluan; ?></textarea>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label>Keterangan </label>
                        <textarea class="form-control input-sm" data-plugin-textarea-autosize type="text" value=""><?= $keterangan; ?></textarea>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label>Berlaku Dari - Sampai</label>
                        <div class="input-daterange input-group" data-plugin-datepicker>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input type="text" class="form-control" name="start">
                            <span class="input-group-addon">to</span>
                            <input type="text" class="form-control" name="end">
                        </div>
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='form-group'>
                        <label>Staff Pemerintah </label>
                        <input class="form-control input-sm" disabled type="text" value="<?= $namaperangkat ?>">
                    </div>
                </div>
                <div class='col-sm-6'>
                    <div class='form-group'>
                        <label>Jabatan </label>
                        <input class="form-control input-sm" disabled type="text" value="<?= $role ?>">
                    </div>
                </div>
                <br>
            </div>
            <div class="panel-footer panel-footer-btn-group">
                <a href="#"><i class="fa fa-times mr-xs"></i> Hapus</a>
                <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim"><i class="fa fa-file-word-o mr-xs"></i> Export to Word</a>
            </div>
        </section>
    </div>

    <!-- end: page -->
</section>