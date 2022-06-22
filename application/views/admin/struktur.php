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
					<div class="row pul">
						<div class="col-md-12">
							<div class="mb-md pull-right">
								<a class="btn btn-sm btn-primary" href="<?= base_url('admin/struktur'); ?>/form_struktur"><i class="fa fa-plus"></i> Tambah Aparat Desa</a>
								<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i> Cetak</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">PDF</a></li>
									<li><a href="#">EXCEL</a></li>
									<li><a href="#">DOWNLOAD</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-condensed mb-none" id="tabel-artikel">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Aksi</th>
									<th class="text-center">Foto</th>
									<th class="text-center">Nama,NIP/NIAP,NIK</th>
									<th class="text-center">Tempat, Tanggal Lahir</th>
									<th class="text-center">Jenis Kelamin</th>
									<th class="text-center">Agama</th>
									<th class="text-center">Pangkat / Golongan</th>
									<th class="text-center">Jabatan</th>
									<th class="text-center">Pendidikan Terakhir</th>
									<th class="text-center">Nomor SK Pengangkatan</th>
									<th class="text-center">Tanggal SK Pengangkatan</th>
									<th class="text-center">Nomor SK Pemberhentian</th>
									<th class="text-center">Nomor SK Pemberhentian</th>
									<th class="text-center">Masa/Periode Jabatan</th>
									<th class="text-center">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($aparatur as $data) {
									$status = $data['aparatur_status'];
									if ($status == "0") {
										$s = "Non-Aktif";
									} else {
										$s = "Aktif";
									}
									?>
									<tr>
										<td class="text-center"><?= $no++; ?></td>
										<td class="text-center">
											<div class="btn-group">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">Aksi</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#ModalPenggunaedit<?php echo $data['aparatur_id']; ?>">Edit Data</a></li>
													<li><a href="#ModalPenggunaedit<?php echo $data['aparatur_id']; ?>">Hapus Data</a></li>
												</ul>
											</div>
										</td>
										<td class="text-center"><img class="img-responsive" src="<?= base_url('assets/fp/aparatur'); ?>/<?= $data['foto']; ?>" alt="">
										</td>
										<td>
											<span class="text-center"><?= $data['aparatur_nama']; ?><br></span>
											<small class="text-right">NIAP : <?= $data['aparatur_nip']; ?><br></small>
											<small class="text-right">NIK : <?= $data['aparatur_nik']; ?></small>
										</td>
										<td class="text-center"><?= $data['aparatur_tempatlahir']; ?>, <?= $data['aparatur_tanggallahir']; ?></td>
										<td class="text-center"><?= $data['aparatur_sex']; ?></td>
										<td class="text-center"><?= $data['aparatur_agama']; ?></td>
										<td class="text-center"><?= $data['aparatur_pangkat']; ?></td>
										<td class="text-center"><?= $data['jabatan']; ?></td>
										<td class="text-center"><?= $data['aparatur_pendidikan']; ?></td>
										<td class="text-center"><?= $data['aparatur_nosk']; ?></td>
										<td class="text-center"><?= $data['aparatur_tglsk']; ?></td>
										<td class="text-center"><?= $data['aparatur_nohenti']; ?></td>
										<td class="text-center"><?= $data['aparatur_tglhenti']; ?></td>
										<td class="text-center"><?= $data['aparatur_masajab']; ?></td>
										<td class="text-center"><?= $s; ?></td>
									</tr>
								<?php }
								?>
							</tbody>
						</table>
					</div>

				</div>
			</section>
		</div>
	</div>

	<!-- end: page -->
</section>