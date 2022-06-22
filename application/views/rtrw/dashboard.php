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
									<p>Informasi Seputar Website RT / RW Aplikasi</p>
									<div class="toggle" data-plugin-toggle>
										<section class="toggle active">
											<label>Menampilkan Data Keluarga</label>
											<p>Sistem menampilkan Data Keluarga dan Detail Keluarga 
											</p>
										</section>

										<section class="toggle">
											<label>Pengajuan Surat</label>
											<p>Sistem menampilkan Pengajuan Surat baik sudah diproses maupun belum 
											</p>
										</section>
										<section class="toggle">
											<label>Verifikasi Pengajuan Surat</label>
											<p>Sistem menampilkan Verifikasi Pengajuan Surat 
											</p>
										</section>
										<section class="toggle">
											<label>Kegiatan RT / RW</label>
											<p>Sistem menampilkan Kegiatan RT/RW 
											</p>
										</section>
										<section class="toggle">
											<label>Kotak Pesan</label>
											<p>Fitur ini untuk memberitahukan kepada Admin Aplikasi jika terjadi eror dan sebagainya.
											</p>
										</section>
									</div>
								</div>
								<div class="panel-footer panel-footer-btn-group">
									<a href="#"><i class="fa fa-plus mr-xs"></i> Tambah</a>
									<a href="#"><i class="fa fa-pencil mr-xs"></i> Edit</a>
									<a href="#"><i class="fa fa-times mr-xs"></i> Hapus</a>
								</div>
							</section>
						</div>
					</div>
					<div class="row">
						< </div> <!-- end: page -->
				</section>