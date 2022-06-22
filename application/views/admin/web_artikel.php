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
	</header>
	<!-- Start: page -->
	<div class="row">
		<?php $this->load->view('admin/submenu/web_menuartikel'); ?>
		<div class="col-md-9">
			<section class="panel panel-featured panel-featured-dark">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title"><?= $submenu; ?></h2>
				</header>
				<div class="panel-body">
					<div class="row pul">
						<div class="col-md-12">
							<div class="mb-md pull-right">
								<?php if ($submenu == "Headline") : ?>
									<a class="mb-xs mt-xs mr-xs modal-basic btn btn-sm btn-primary" href="#ModalSettingHeadline"><i class="fa fa-plus"></i> Setting Headline</a>
								<?php else : ?>
									<a class="mb-xs mt-xs mr-xs modal-basic btn btn-sm btn-primary" href="#ModalTambah"><i class="fa fa-plus"></i> Tambah Data</a>
								<?php endif; ?>
								<a class="mb-xs mt-xs mr-xs modal-basic btn btn-sm btn-default" href="#ModalPenggunaTambah"><i class="fa fa-upload"></i> Upload Data</a>
								<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">PDF</a></li>
									<li><a href="#">EXCEL</a></li>
									<li><a href="#">DOWNLOAD</a></li>
								</ul>
							</div>
						</div>
					</div>
					<table class="table table-bordered table-striped mb-none" id="tabel-artikel">
						<thead>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">AKSI</th>
								<th class="text-center">JUDUL</th>
								<th class="text-center">STATUS</th>
								<th class="text-center">TANGGAL TERBIT</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($artikel as $data) {
								if ($data['enabled'] == 1) {
									$status = "Aktif";
								} else {
									$status = "Non-Aktif";
								}
								?>
								<tr>
									<td class="text-center"><?= $no++; ?></td>
									<td class="text-center">
										<div class="btn-group">
											<button class="btn btn-xs btn-warning" title="Edit" data-toggle="modal" data-target="#modaledit<?php echo $data['id']; ?>"><i class="fa fa-edit"></i></button>
											<button class="btn btn-xs  btn-danger" title="Hapus" data-toggle="modal" data-target="#modalhapus<?php echo $data['id']; ?>"><i class="fa fa-times"></i></button>
										</div>
									</td>
									<td class="text-center"><?= $data['judul']; ?></td>
									<td class="text-center"><?= $status; ?></td>
									<td class="text-center"><?= $data['tgl_upload']; ?></td>

								</tr>
							<?php }
							?>

						</tbody>
					</table>
				</div>
			</section>
		</div>
	</div>

	<!-- end: page -->
</section>
<div id="ModalSettingHeadline" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Form Setting Headline</h2>
		</header>
		<div class="panel-body">
			<div class="row pull">
				<form class="form-horizontal mb-lg" action="<?= base_url('admin/web_artikel/setingheadline'); ?>" method="POST">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-3 control-label" for="">Nama Penduduk </label>
							<div class="col-md-9">
								<select class="form-control" id="listartikel" name="artikel">
									<?php foreach ($headline as $data) :
										?>
										<option value="<?= $data['id']; ?>"><?= $data['judul']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
			</div>
			<hr>
			<div class="form-group">
				<label class="control-label col-md-3">Status</label>
				<div class="col-md-9">
					<select name="status" id="">
						<option value="1">Aktifkan</option>
						<option value="0">Non-Aktifkan</option>
					</select>
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