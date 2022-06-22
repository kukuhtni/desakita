<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$("#simpan").click(function() {
			var id = $('#id').val();
			var no_kk = $('#no_kk').val();
			var nik = $('#nik').val();

			var string = $('#my-form').serialize();

			if (id.length == 0) {
				alert('Maaf, ID tidak boleh kosong');
				$('id').focus();
				return false;
			}

			if (no_kk.length == 0) {
				alert('Maaf, Nomor kk tidak boleh kosong');
				$('no_kk').focus();
				return false;
			}
			if (nik.length == 0) {
				alert('Maaf, ID tidak boleh kosong');
				$('nik').focus();
				return false;
			}



			$.ajax({
				type: 'POST',
				url: '<?php echo site_url(); ?>/pengelola/keluarga/simpan',
				data: string,
				cache: false,
				success: function(data) {
					alert("Data Sukses Di Disimpan");
					location.reload();
				}
			});

		});
		$("#tambah").click(function() {
			$('#id').val('');


			$('#kepala_keluarga').val('');
			$('#nik').val('');

			$('#jml_anggota').val('');

			$('#jenis_kelamin').val('');
			$('#alamat').val('');
			$('#dusun').val('');
			$('#rw').val('');
			$('#rt').val('');
			$('#tgl_terdaftar').val('');


		});
	});

	function editData(id) {

		$.ajax({
			type: 'GET',
			url: '<?php echo site_url(); ?>/pengelola/keluarga/cari/' + id,
			dataType: "json",
			success: function(data) {

				$('#id').val(data.id);

				$('#kepala_keluarga').val(data.kepala_keluarga);



				$('#nik').val(data.nik);

				$('#jml_anggota').val(data.jml_anggota);

				$('#jenis_kelamin').val(data.jenis_kelamin);
				$('#alamat').val(data.alamat);
				$('#dusun').val(dusun);
				$('#rw').val(data.rw);
				$('#rt').val(data.rt);
				$('#tgl_terdaftar').val(data.tgl_terdaftar);
				$('$id').attr('readonly', 'true');
			}
		});

	}
</script>
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
					<li><a href="<?= base_url('pengelola/keluarga/'); ?>"><span><?php echo $subjudul; ?></span></a></li>
					<li><span><?php echo $subjudul2; ?></span></li>
				<?php

				}
				?>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- Start: page -->
	<div class="row">
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
			$kk = $data['no_kk'];
		}
		?>
		<?php
		foreach ($kepala_kk as $data) {
			$nama_kk = $data['nama'];
			$id_kk = $data['id_kk'];
			$nik = $data['nik'];
		}
		?>



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
								<a href="<?php echo base_url(); ?>pengelola/keluarga/tambah_anggota" class="mb-xs mt-xs mr-xs btn btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
								<a href="<?php echo base_url('pengelola/keluarga/cetak_kk/' . $id_kk . '/' . $nik) ?>" target="_blank" class="mb-xs mt-xs mr-xs  btn btn-primary" target="_blank"><i class="fa fa-print "></i> Cetak</a>
								<!-- <a href="" class="mb-xs mt-xs mr-xs  btn btn-dark" target="_blank"><i class="fa fa-download"></i> Unduh</a> -->
								<a href="<?php echo base_url(); ?>comingsoon" class="mb-xs mt-xs mr-xs  btn btn-info" title="Kembali Ke Daftar Anggota Keluarga">
									<i class="fa fa-arrow-circle-left "></i>Daftar Anggota Keluarga
								</a>.
								<a href="<?php echo base_url(); ?>pengelola/keluarga" class="mb-xs mt-xs mr-xs  btn btn-primary" title="Kembali Ke Daftar Anggota Keluarga">
									<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Keluarga
								</a>
							</div>
							<div class="box-header">
								<h3 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h3>
								<h5 class="text-center"><strong>No. <?= $kk; ?></strong></h5>
							</div>
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