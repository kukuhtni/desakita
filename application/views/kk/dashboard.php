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
												<h4 class="title">Pengguna</h4>
												<div class="info">
													<strong class="amount">1281</strong>
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
												<h4 class="title">Pengunjung</h4>
												<div class="info">
													<strong class="amount">1281</strong>
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
												<h4 class="title">Wilayah Dusun</h4>
												<div class="info">
													<strong class="amount">1281</strong>
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
												<h4 class="title">Pengikut Website</h4>
												<div class="info">
													<strong class="amount">1281</strong>
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
					<p>Informasi Seputar Website Kepala Keluarga Aplikasi</p>
					<div class="toggle" data-plugin-toggle>
						<section class="toggle active">
							<label>Data Keluarga</label>
							<p>
								Data Keluarga merupakan fitur yang dapat digunakan oleh anggota keluarga untuk melihat data keluarga serta mencetaknya, dan melihat detail keluarga. </p>
						</section>

						<section class="toggle">
							<label>Pengajuan Surat</label>
							<p>Pengajuan Surat merupakan fitur yang dapat digunakan oleh anggota keluarga untuk mengajukan surat kepada RT atau RW setempat, serta untuk melihat data histori pengajuan surat yang pernah dikirimkan sebelumnya.</p>
						</section>
						<section class="toggle">
							<label>Kotak Pesan</label>
							<p>Kotak Pesan merupakan fitur yang dapat digunakan oleh anggota keluarga untuk berhubungan dengan RT atau RW setempat, anggota keluarga dapat menulis pesan, melihat kotak terkirim yang telah mereka kirim sebelumnya serta melihat kotak masuk dari RT atau RW setempat.</p>
						</section>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="row">
		< </div> <!-- end: page -->
</section>