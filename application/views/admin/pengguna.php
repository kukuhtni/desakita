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
				if (!empty($submenu)) { ?>
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
		<?php $this->load->view('admin/submenu/pengguna_menu'); ?>
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
								<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-sm btn-primary" href="#ModalPenggunaTambah"><i class="fa fa-plus"></i> Tambah Data</a>
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
								<th class="text-center">No</th>
								<th class="text-center">Aksi</th>
								<th class="text-center">Foto</th>
								<th class="text-center">Nama - NIK</th>
								<th class="text-center">NO KK</th>

							</tr>
						</thead>
						<tbody>

							<?php
							$no = 1;
							foreach ($perangkat as $data) {
								?>
								<tr>
									<td class="text-center"><?= $no++; ?></td>
									<td class="text-center">
										<div class="btn-group">
											<a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-xs btn-warning" href="#ModalPenggunaedit<?php echo $data['id_pengguna']; ?>"><i class="fa fa-edit"></i></a>
											<button class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-xs btn-danger" title="Hapus" data-toggle="modal" data-target="#modalhapus<?php echo $data['id_pengguna']; ?>"><i class="fa fa-times"></i></button>
										</div>
									</td>
									<td class="text-center"><?= $data['foto']; ?></td>
									<td class="text-center"><strong><?= $data['nama_penduduk']; ?></strong> - <?= $data['nik']; ?></td>
									<td class="text-center"><?= $data['no_kk']; ?></td>
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

<div id="ModalPenggunaTambah" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Form Tambah Pengguna</h2>
		</header>
		<div class="panel-body">
			<div class="row pull">
				<form class="form-horizontal mb-lg" id="test" action="<?= base_url('admin/pengguna/tambahdata'); ?>" method="POST">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-md-3 control-label" for="">Nama Penduduk </label>
							<div class="col-md-9">
								<select class="form-control" id="nikpengguna" name="kk">
									<?php
									if ($role == 1) {
										foreach ($aparatur as $data) {
											?>
											<option value="<?= $data['aparatur_nik']; ?>"><?= $data['aparatur_nik']; ?> / <?= $data['aparatur_nama']; ?> </option>
										<?php
										}
									} else if ($role == 2) {
										foreach ($listkeluarga as $data) {
											?>
											<option value="<?= $data['nik_ketua']; ?>"><?= $data['nik_ketua']; ?> / <?= $data['nama_ketua']; ?> </option>
										<?php }
									} else if ($role == 3) {
										foreach ($listkeluarga as $data) {
											?>
											<option value="<?= $data['nik_ketua']; ?>"><?= $data['nik_ketua']; ?> / <?= $data['nama_ketua']; ?> </option>
										<?php }
									} else {
										foreach ($listkeluarga as $data) {
											?>
											<option value="<?= $data['id']; ?>"><?= $data['kk']; ?> / <?= $data['nama']; ?> </option>
										<?php
										}
									} ?>
								</select>
							</div>
						</div>
					</div>
			</div>
			<hr>
			<div class="form-group mt-lg">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-9">
					<input type="password" name="password" class="form-control" required />
				</div>
			</div>
			<div class="form-group mt-lg">
				<label class="col-sm-3 control-label">Confirm Password</label>
				<div class="col-sm-9">
					<input type="password" name="password2" class="form-control" required />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Hak Akses</label>
				<div class="col-sm-9">
					<input type="hidden" name="role" class="form-control" value="<?= $role; ?>">
					<input type="text" class="form-control" readonly value="<?= $submenu; ?>">
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
<?php
$no = 1;
foreach ($perangkat as $data) :
	$id = $data['id_pengguna'];
	$nama = $data['nama_penduduk'];
	$idkk = $data['id_kk'];
	?>
	<div id="ModalPenggunaedit<?php echo $id; ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">Form Reset Password Pengguna</h2>
			</header>
			<div class="panel-body">
				<form class="form-horizontal mb-lg" id="test" action="<?= base_url('admin/pengguna/editdata'); ?>" method="POST">
					<div class="form-group mt-lg">
						<label class="col-sm-3 control-label">Nama Penduduk</label>
						<div class="col-sm-9">
							<input type="text" name="namakk" class="form-control" readonly value="<?= $nama; ?>" />
							<input type="hidden" name="kk" class="form-control" readonly value="<?= $idkk; ?>" />
						</div>
					</div>
					<hr>
					<div class="form-group mt-lg">
						<label class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
							<input type="password" name="password" class="form-control" required />
						</div>
					</div>
					<div class="form-group mt-lg">
						<label class="col-sm-3 control-label">Confirm Password</label>
						<div class="col-sm-9">
							<input type="password" name="password2" class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Hak Akses</label>
						<div class="col-sm-9">
							<input type="hidden" name="role" class="form-control" value="<?= $role; ?>">
							<input type="text" class="form-control" readonly value="<?= $submenu; ?>">
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