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

                <h2 class="panel-title">Pengajuan Surat Warga</h2>
            </header>
            <div class="panel-body">
                <div class="row pul">
                </div>
                <table class="table table-bordered table-striped mb-none" id="tabel-pengajuan">
                    <thead class="bg-grey">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Aksi</th>
                            <th class="text-center">Nama Surat</th>
                            <th class="text-center">Kode Klasifikasi</th>
                            <th class="text-center">Url</th>
                            <th class="text-center">Template Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($listsurat as $data) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-center">
                                    <a href="#konfirmasi" class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-xs btn-danger ">Edit <i class="fa fa-pen"></i></a>
                                </td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['kode_surat'] ?></td>
                                <td><?= $data['url_surat'] ?></td>
                                <td class="text-center">
                                    <?php $surat = "surat/" . $data['url_surat'] . "/" . $data['url_surat'] . ".rtf"; ?>
                                    <?php if ($surat != "") : ?>
                                        <a href="<?= base_url($surat) ?>" class="btn btn-xs btn-primary" title="Unduh Template Format Surat"><i class="fa fa-download"></i>Unduh </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <h6 class="text-danger">#NB : Apabila Status telah mencapai "Konfirmasi Pemohon", Silahkan datang ke Kantor Desa/Kelurahan.</h6>
            </div>
        </section>
    </div>
    <!-- end: page -->
</section>
<!-- <?php
        $no = 1;
        foreach ($datapengajuan as $data) :
            $id = $data['id_pengajuan'];
            $nama = $data['nama'];
            $namasurat = $data['nama_surat'];
            $keperluan = $data['keperluan'];
            $keterangan = $data['keterangan'];
            ?>
                                                                                                                                                                            <div id="konfirmasi<?= $id; ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                                                                                                                                                                                <section class="panel">
                                                                                                                                                                                    <header class="panel-heading">
                                                                                                                                                                                        <h2 class="panel-title">Form Verified Permohonan Warga</h2>
                                                                                                                                                                                    </header>
                                                                                                                                                                                    <div class="panel-body">
                                                                                                                                                                                        <div class="row pull">
                                                                                                                                                                                            <form class="form-horizontal mb-lg" id="test" action="<?= base_url('pengelola/layanansurat/update/' . $role . '/' . $id); ?>" method="POST">
                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                                        <label class="col-md-4 control-label" for="">Nama Pemohon </label>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <input type="text" disabled class="form-control" value="<?= $nama; ?>">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                                        <label class="col-md-4 control-label" for="">Jenis Pengajuan </label>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <input type="text" disabled class="form-control" value="<?= $namasurat; ?>">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                                        <label class="col-md-4 control-label" for="">Keperluan </label>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <textarea class="form-control" disabled rows="3" id="textareaAutosize" data-plugin-textarea-autosize><?= $keperluan; ?></textarea>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                                        <label class="col-md-4 control-label" for="">Keterangan </label>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <textarea class="form-control" disabled rows="3" id="textareaAutosize" data-plugin-textarea-autosize><?= $keterangan; ?></textarea>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group">
                                                                                                                                                                                                        <label class="col-md-4 control-label" for="">Setujui Permohonan? </label>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <select name="konfirmasi" class="form-control mb-md">
                                                                                                                                                                                                                <option value="0">Tidak</option>
                                                                                                                                                                                                                <option value="1">Ya</option>
                                                                                                                                                                                                            </select>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <footer class="panel-footer">
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-md-12 text-right">
                                                                                                                                                                                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah</button>
                                                                                                                                                                                                <button class="btn btn-default modal-dismiss">Batal</button>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </footer>
                                                                                                                                                                                    </form>
                                                                                                                                                                                </section>
                                                                                                                                                                            </div>
<?php endforeach; ?> -->