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
		<div class="col-md-7">
			<section class="panel panel-featured panel-featured-primary">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6 col-xl-12">
							<section class="panel">
								<div class="panel-body bg-primary">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon">
												<i class="fa fa-users"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Penduduk</h4>
												<div class="info">
													<strong class="amount"><?= $totalpenduduk; ?></strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-uppercase">Lihat Semua</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-6 col-xl-12">
							<section class="panel">
								<div class="panel-body bg-secondary">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon">
												<i class="fa fa-life-ring"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Keluarga</h4>
												<div class="info">
													<strong class="amount"><?= $totalkeluarga; ?></strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-uppercase">Lihat Semua</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-6 col-xl-12">
							<section class="panel">
								<div class="panel-body bg-tertiary">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon">
												<i class="fa fa-map-marker"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Kelompok</h4>
												<div class="info">
													<strong class="amount">0</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-uppercase">Lihat Semua</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-6 col-xl-12">
							<section class="panel">
								<div class="panel-body bg-quartenary">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon">
												<i class="fa fa-rss"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Wilayahe</h4>
												<div class="info">
													<strong class="amount">1</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-uppercase">Lihat Semua</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section class="panel panel-featured panel-featured-primary">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>
					<h2 class="panel-title">Undangan Kegiatan</h2>
				</header>
				<div class="panel-body">
					<table class="table table-bordered table-striped mb-none" id="tabel-artikel">
						<thead>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">JUDUL</th>
								<th class="text-center">DOKUMEN</th>
								<th class="text-center">TANGGAL TERBIT</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</section>
		</div>
		<div class="col-md-5">
			<section class="panel panel-featured panel-featured-primary">
				<div class="panel-body">
					<h4><strong>Aplikasi Smart Desa {Desa Kita}</strong></h4>
					<p>Informasi Seputar Website Admin Aplikasi</p>
					<div class="toggle" data-plugin-toggle>
						<section class="toggle active">
							<label>Kelola Akun Pengguna</label>
							<p>User Management merupakan fitur yang digunakan untuk memberikan akses kepada siapa saja yang dapat mengakses ke aplikasi Sistem Informasi Desa. Anda dapat memberikan akses Login Aplikasi Sistem kepada :
								<br>
								<strong>1. Perangkat Desa</strong>
								<br>
								<strong>2. RT / RW</strong>
								<br>
								<strong>3. Kepala Keluarga</strong>
								<br>

							</p>
						</section>

						<section class="toggle">
							<label>Pengelolaan Data Desa</label>
							<p>Pengelolaan Desa Digunakan untuk mengatur segala informasi desa baik dari struktur pemerintahan dan sbg :
								<br>
								<strong>1. Profil Desa</strong>
								<br>
								<strong>2. Struktur Pemerintahan Desa</strong>
								<br>
								<strong>3. Pengelolaan Data Wilayah</strong>
								<br>
							</p>
						</section>
						<section class="toggle">
							<label>Pengelolaan Data Website</label>
							<p>Pengelolaan Data Website merupakan fitur yang digunakan untuk mengelola segala informasi yang berhubungan dengan Halaman Guest, seperti :
								<br>
								<strong>1. Mengupdate informasi Artikel baik Berita Lokal, Kriminal, Informasi Pemerintahan, Peraturan Desa dsb</strong>
								<br>
								<strong>2. Mengatur Media Sosial Desa yang dapat dikunjungi oleh Guest</strong>
								<br>
								<strong>3. Mengupdate Gallery Kegiatan Desa</strong>
								<br>
								<strong>4. Mengupdate segala bentuk dokumen peraturan masyarakat maupun informasi lainnya terkait kepemerintahan</strong>
								<br>
							</p>
						</section>
						<section class="toggle">
							<label>Kotak Pesan</label>
							<p>Fitur ini untuk memberitahukan kepada Admin Aplikasi jika terjadi eror dan sebagainya.
							</p>
						</section>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="row">
		< </div> <!-- end: page -->
</section>