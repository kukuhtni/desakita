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

                <h2 class="panel-title">Pengajuan Surat</h2>
            </header>
            <div class="panel-body">
                <div class="row pul">
                    <div class="col-md-12">
                        <div class="mb-md pull-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>kk/pengajuansurat/form_pengajuan"><i class="fa fa-plus"> </i> Tambah Pengajuan</a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="tabel-pengajuan">
                    <thead class="bg-grey">
                        <tr>
                            <th class="text-center" rowspan="2">No</th>
                            <th class="text-center" rowspan="2">Nama Pemohon</th>
                            <th class="text-center" rowspan="2">Jenis Pengajuan</th>
                            <th class="text-center" rowspan="2">Keperluan</th>
                            <th class="text-center" colspan="3">Persetujuan </th>
                            <th class="text-center" rowspan="2">Status</th>
                        </tr>
                        <tr>
                            <th class="text-center">RT</th>
                            <th class="text-center">RW</th>
                            <th class="text-center">Desa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($datapengajuan as $data) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['nama_surat']; ?></td>
                                <td><?= $data['keperluan']; ?></td>
                                <td class="text-center">
                                    <?php if ($data['rt_status'] > 0) : ?>
                                        <span class="btn btn-xs btn-success ">Verified <i class="fa fa-check"></i></span>
                                    <?php else : ?>
                                        <a href="#konfirmasi<?= $data['id_pengajuan'] ?>" class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-xs btn-danger ">Not Verified <i class="fa fa-refresh"></i></a>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($data['rw_status'] > 0) : ?>
                                        <span class="btn btn-xs btn-success ">Verified <i class="fa fa-check"></i></span>
                                    <?php else : ?>
                                        <a href="#konfirmasi<?= $data['id_pengajuan'] ?>" class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-xs btn-danger ">Not Verified <i class="fa fa-refresh"></i></a>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($data['desa_status'] > 0) : ?>
                                        <span class="btn btn-xs btn-success ">Verified <i class="fa fa-check"></i></span>
                                    <?php else : ?>
                                        <span class="btn btn-xs btn-danger ">Not Verified <i class="fa fa-refresh"></i></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($data['status'] == '1') : ?>
                                        <span>Menunggu RT</span>
                                    <?php elseif ($data['status'] == '2') : ?>
                                        <span>Menunggu RW</span>
                                    <?php elseif ($data['status'] == '3') : ?>
                                        <span>Menunggu Desa</span>
                                    <?php elseif ($data['status'] == '4') : ?>
                                        <span>Konfirmasi Pemohon</span>
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
<?php
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
                    <form class="form-horizontal mb-lg" id="test" action="<?= base_url('rtrw/pj_surat/update/' . $role . '/' . $id); ?>" method="POST">
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
<?php endforeach; ?>