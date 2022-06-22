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
						<?php
						if (!empty($back)) { ?>
							<div class="mb-md pull-left">
								<a class="btn btn-sm btn-dark" href="<?= base_url('admin'); ?>/<?= $back; ?>"><i class="fa fa-arrow-left"></i> Kembali</a>
							</div>
						<?php

					}
					?>
					</div>
					<div class="row pul">
						<div class="col-md-12">
							<div class="mb-md pull-right">
								<?php
								if (!empty($next)) { ?>
									<a class="btn btn-sm btn-primary" href="<?= base_url('admin'); ?>/<?= $next; ?>"><i class="fa fa-plus"></i> Tambah <?= $kelola; ?></a>
								<?php
							}
							?>
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
								<th class="text-center">Dusun</th>
								<th class="text-center">Kepala Dusun</th>
								<th class="text-center">RW</th>
								<th class="text-center">RT</th>
								<th class="text-center">KK</th>
								<th class="text-center">L+P</th>
								<th class="text-center">L</th>
								<th class="text-center">P</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($kelola == 'Dusun') {
								$kel = 'kelola_rw';
							} elseif ($kelola == 'RW') {
								$kel = 'kelola_rt';
							} elseif ($kelola == 'RT') {
								$kel = '';
							}

							$no = 1;
							foreach ($datawilayah as $data) : ?>
								<tr>
									<td class="text-center"><?= $no++ ?></td>
									<td class="text-center">
										<div class="btn-group">
											<a href="<?= base_url('admin/peldatwil'); ?>/<?= $kel; ?>" class="btn btn-sm btn-primary" title="Kelola Wilayah RW"><i class="fa fa-list"></i></a>
											<button class="btn btn-sm btn-warning" title="Edit" <?php echo $data['id']; ?>"><i class="fa fa-edit"></i></button>
											<button class="btn btn-sm  btn-danger" title="Hapus" <?php echo $data['id']; ?>"><i class="fa fa-times"></i></button>
										</div>
									</td>
									<td><?= $data['dusun']; ?></td>
									<td><?= $data['nama_kadus']; ?> - <?= $data['nik_kadus']; ?></td>
									<td class="text-center"><?= $data['jumlah_rw']; ?></td>
									<td class="text-center"><?= $data['jumlah_rt']; ?></td>
									<td class="text-center"><?= $data['jumlah_kk']; ?></td>
									<td class="text-center"><?= $data['jumlah_warga']; ?></td>
									<td class="text-center"><?= $data['jumlah_warga_l']; ?></td>
									<td class="text-center"><?= $data['jumlah_warga_p']; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td>Total</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</section>
		</div>
	</div>

	<!-- end: page -->
</section>