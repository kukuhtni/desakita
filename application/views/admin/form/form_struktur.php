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
                if (!empty($submenu)) { ?>
                    <li><span><?php echo $submenu; ?></span></li>
                    <li><span><?php echo $submenu2; ?></span></li>
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

                    <h2 class="panel-title"><?= $submenu2; ?></h2>
                </header>
                <div class="panel-body">
                    <div class="mb-md">
                        <a class="btn btn-sm btn-dark" href="<?= base_url('admin/struktur'); ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <hr>
                    <div class="row pull">
                        <form class="form-horizontal form-nobordered" id="struktur_form_cek" action="" method="POST">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="">Nama Penduduk : </label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="nikaparat" name="nik" multiple="multiple">
                                            <?php
                                            foreach ($listpenduduk as $data) {
                                                ?>
                                                <option value="<?= $data['nik']; ?>"><?= $data['nik']; ?> / <?= $data['nama']; ?> </option>
                                            <?php
                                        } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-sm btn-info btn_struktur_cek"><i class="fa fa-check"></i> Cek</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <section class="panel panel-featured panel-featured-dark">
                <div class="panel-body">
                    <div class="panel-body panel-body-nopadding">
                        <div class="owl-carousel mb-md justify-content-center" data-plugin-carousel data-plugin-options='{ "items": 1, "autoHeight": true }'>
                            <div class="item ">
                                <img alt="" class="img-responsive img-rounded " src="<?php echo base_url(); ?>assets/fp/1.jpg">
                            </div>
                        </div>
                        <div class="p-md">
                            <p>Fomart Logo : PNG/JPG [200x200]</p>
                        </div>
                    </div>
                    <div class="panel-footer panel-footer-btn-group text-center">
                        <a href="#modallogo" class="mb-xs mt-xs mr-xs modal-with-zoom-anim"><i class="fa fa-pencil mr-xs"></i> Edit</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-9">
            <section class="panel panel-featured panel-featured-dark">
                <div class="panel-body">
                    <form class="form-horizontal form-nobordered" action="<?= base_url('admin/struktur'); ?>/" method="POST">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Nama Pegawai Desa</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" id="namae" name="nama" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Nomor Induk Kependudukan</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" id="nike" name="nik" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">NIAP</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">NIP</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Tempat Lahir</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" id="tempatle" name="tempatl" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" id="tglle" name="tanggall" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Jenis Kelamin</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Pendidikan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Agama</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Pangkat / Golongan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Nomor SK Pengangkatan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Tanggal SK Pengangkatan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Nomor SK Pemberhentian</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Tanggal SK Pemberhentian</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Jabatan</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="">Status Pegawai Desa</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="" name="" value="">
                                </div>
                            </div>
                            <div class="row pull-right">
                                <div class="form-group">
                                    <div>
                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-times"></i> Batal</button>
                                        <button type="submit" class="mb-xs mt-xs mr-xs btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>