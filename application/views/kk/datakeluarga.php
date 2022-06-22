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
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>

	</header>

	<!-- start: page -->
	<div class="row">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
				</div>

				<h2 class="panel-title">Data Keluarga</h2>
			</header>
			<div class="panel-body">


				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="<?= base_url('kk/detailkeluarga'); ?>" class="btn btn-primary"><i class="fa fa-chevron-right"></i> Ke Detail Keluarga</a>
							<a href="" class="btn btn-dark" target="_blank"><i class="fa fa-print "></i> Cetak</a>

						</div>
						<div class="box-header">
							<h3 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h3>
							<h5 class="text-center"><strong>No. <?= $no_kk; ?></strong></h5>
						</div>
						<?php
						foreach ($datadesa as $data) {
							$namadesa = $data['nama_desa'];
							$kades = $data['nama_kepala_desa'];
							$kecamatan = $data['nama_kecamatan'];
							$kabupaten = $data['nama_kabupaten'];
							$kodepos = $data['kode_pos'];
							$propinsi = $data['nama_propinsi'];
						}
						?>
						<?php
						foreach ($datakeluarga as $data) {
							$alamat = $data['alamat'];
							$rt = $data['rt'];
							$rw = $data['rw'];
							$ja = $data['jumlah_anggota'];
						}
						?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<label class="col-sm-3 control-label">ALAMAT</label>
										<div class="col-sm-8">
											<p class="text-muted">: <?= $alamat; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">RT/RW</label>
										<div class="col-sm-9">
											<p class="text-muted">: <?= $rt; ?> / <?= $rw; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">DESA / KELURAHAN</label>
										<div class="col-sm-9">
											<p class="text-muted">: <?= $namadesa; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">KECAMATAN</label>
										<div class="col-sm-9">
											<p class="text-muted">: <?= $kecamatan; ?></p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label class="col-sm-5 control-label">KABUPATEN</label>
										<div class="col-sm-7">
											<p class="text-muted">: <?= $kabupaten; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label">KODE POS</label>
										<div class="col-sm-7">
											<p class="text-muted">: <?= $kodepos; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label">PROVINSI</label>
										<div class="col-sm-7">
											<p class="text-muted">: <?= $propinsi; ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-5 control-label">JUMLAH ANGGOTA</label>
										<div class="col-sm-7">
											<p class="text-muted">: <?= $ja; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="table-responsive">
											<table class="table table-bordered table-hover ">
												<thead class="bg-grey disabled color-palette">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Nama Lengkap</th>
														<th class="text-center">NIK</th>
														<th class="text-center">Jenis Kelamin</th>
														<th class="text-center">Tempat Lahir</th>
														<th class="text-center">Tanggal Lahir</th>
														<th class="text-center">Agama</th>
														<th class="text-center">Pendidikan</th>
														<th class="text-center">Jenis Pekerjaan</th>
														<th class="text-center">Golongan Darah</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													foreach ($datakeluarga as $data) :
														?>
														<tr>
															<td class="text-center"><?= $no++; ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['nik']; ?></td>
															<td><?= $data['sex']; ?></td>
															<td><?= $data['tempatlahir']; ?></td>
															<td><?= $data['tanggallahir']; ?></td>
															<td><?= $data['agama']; ?></td>
															<td><?= $data['pendidikan']; ?></td>
															<td><?= $data['pekerjaan']; ?></td>
															<td><?= $data['gol_darah']; ?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
											<br>
										</div>
									</div>
									<div class="row">
										<div class="table-responsive">
											<table class="table table-bordered table-hover ">
												<thead class="bg-grey disabled color-palette">
													<tr>
														<th class="text-center">No</th>
														<th class="text-center">Status Perkawinan</th>
														<th class="text-center">Tanggal Perkawinan</th>
														<th class="text-center">Status Hubungan Dalam Keluarga</th>
														<th class="text-center">Kewarganegaraan</th>
														<th class="text-center">No. Paspor</th>
														<th class="text-center">No. KITAS / KITAP</th>
														<th class="text-center">Nama Ayah</th>
														<th class="text-center">Nama Ibu</th>
													</tr>
												</thead>
												<tbody>

													<?php
													$no = 1;
													foreach ($datakeluarga as $data) :
														?>
														<tr>
															<td class="text-center"><?= $no++; ?></td>
															<td><?= $data['kawin']; ?></td>
															<td>-</td>
															<td><?= $data['hubungan']; ?></td>
															<td><?= $data['kewarganegaraan']; ?></td>
															<td>-</td>
															<td>-</td>
															<td><?= $data['nama_ayah']; ?></td>
															<td><?= $data['nama_ibu']; ?></td>
														</tr>
													<?php endforeach; ?>

												</tbody>
											</table>
										</div>
										<center>

											<div class="table-responsive">
												<div class="col-sm-12">

													<table class="table-nobordered">
														<tbody>
															<tr>
																<td width="10%">&nbsp;</td>
																<td width="80%">&nbsp;</td>
																<td class="text-center" width="10%"><?= $namadesa; ?>, </td>
															</tr>
															<tr>
																<td class="text-center">KEPALA KELUARGA</td>
																<td>&nbsp;</td>
																<td class="text-center">KEPALA </td>
															</tr>
															<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td class="text-center"><?= $nama_kk; ?></td>
																<td width="50%">&nbsp;</td>
																<td class="text-center"><?= $kades; ?></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</center>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- end: page -->
</section>