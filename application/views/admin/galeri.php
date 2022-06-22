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
						<?php $this->load->view('admin/submenu/galeri_menu'); ?>
						<div class="col-md-9">
							<section class="panel panel-featured panel-featured-dark">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title"><?= $submenu; ?> <?= $nama_album; ?></h2>
								</header>
								<div class="panel-body">
									<div class="row pul">
										<div class="col-md-12">
											<div class="mb-md pull-right">
												<a class="mb-xs mt-xs mr-xs modal-basic btn btn-sm btn-primary" href="#ModalPenggunaTambah"><i class="fa fa-plus"></i> Tambah Data</a>
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
										<thead class="">
											<tr>
												<th class="text-center">NO</th>
												<th class="text-center">FOTO</th>
												<th class="text-center">TANGGAL TERBIT</th>
												<th class="text-center">AKSI</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($album as $data) { ?>
												<tr>
													<td class="text-center"><?= $no++; ?></td>
													<td class="text-center"><img src="<?= base_url('assets/fp/galeri/' . $data['gambar']); ?>" alt="" width="200"></td>
													<td class="text-center"><?= $data['tanggal']; ?></td>
													<td class="text-center">
														<div class="btn-group">
															<button class="btn btn-xs btn-warning" title="Edit" data-toggle="modal" data-target="#modaledit<?php echo $data['id']; ?>"><i class="fa fa-edit"></i></button>
															<button class="btn btn-xs  btn-danger" title="Hapus" data-toggle="modal" data-target="#modalhapus<?php echo $data['id']; ?>"><i class="fa fa-times"></i></button>
														</div>
													</td>

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