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

				<?php

				}
				?>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- Start: page -->
	<div class="row">
		<?php foreach ($penduduk as $data) : ?>
			<div class="col-md-12">
				<section class="panel panel-success">
					<header class="panel-heading">


						<h2 class="panel-title ">Data Keluarga</h2>
					</header>



					<div class="panel-body">

						<div class="table-responsive">

							<table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
								<script type="text/javascript">
									$(document).ready(function() {
										$('#datatable-editable').DataTable();
									});
								</script>
								<div class="row">
									<div class="col-md-12">
										<div class="box box-info">
											<div class="box-header">

												<a href="<?php echo base_url('pengelola/penduduk/form_data_diri') ?>" class="mb-xs mt-xs mr-xs  btn btn-warning" title="Ubah Biodata"><i class="fa fa-edit"></i> Ubah Biodata</a>

												<a href="" class="mb-xs mt-xs mr-xs  btn btn-primary" title="Cetak Biodata" target="_blank"><i class="fa fa-print"></i>Cetak Biodata</a>
												<a href="<?php echo base_url(); ?>pengelola/penduduk" class="mb-xs mt-xs mr-xs  btn btn-info" title="Kembali Ke Daftar Penduduk">
													<i class="fa fa-arrow-circle-left"></i>Kembali Ke Daftar Penduduk
												</a>
											</div>
											<div class="box-body">
												<div class="row">
													<div class="col-md-12">
														<div class="box-header with-border">
															<h3 class="box-title">Biodata Penduduk (NIK : <?= $data['nik'] ?>)</h3>
														</div>
													</div>
													<div class="col-md-12">
														<div class="table-responsive">
															<table class="table table-bordered table-striped table-hover">
																<tr>
																	<td colspan="3">
																		<center>
																			<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/fp/penduduk/<?= $data['foto'] ?>" alt="Foto" width="10%">
																		</center>
																	</td>
																</tr>
															</table>
														</div>
														<div class="table-responsive">
															<table class="table table-bordered table-striped table-hover">
																<tbody>
																	<tr>
																		<td>Status Dasar</td>
																		<td>:</td>
																		<td><span class="<?= ($data['status_dasar_id'] != 1) ? 'label label-danger' : '' ?>"><strong><?= strtoupper($data['status_dasar']) ?></strong></span></td>
																	</tr>
																	<tr>
																		<td width="300">Nama</td>
																		<td width="1">:</td>
																		<td> <?= $data['nama'] ?></td>
																	</tr>
																	<tr>
																		<td>Status Kepemilikan KTP</td>
																		<td>:</td>
																		<td>
																			<table id='ektp' class="table table-bordered" style="width:60%">
																				<tr>
																					<th>Wajib KTP</th>
																					<th>KTP-EL</th>
																					<th>Status Rekam</th>
																				</tr>
																				<tr>
																					<td>0</td>
																					<td><?= strtoupper($data['ktp_el']) ?></td>
																					<td><?= strtoupper($data['status_rekam']) ?></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td>Nomor Kartu Keluarga</td>
																		<td>:</td>
																		<td><?= $data['no_kk'] ?>
																		</td>
																	</tr>
																	<tr>
																		<td>Nomor KK Sebelumnya</td>
																		<td>:</td>
																		<td><?= $data['no_kk_sebelumnya'] ?></td>
																	</tr>
																	<tr>
																		<td>Hubungan Dalam Keluarga</td>
																		<td>:</td>
																		<td><?= $data['hubungan'] ?></td>
																	</tr>
																	<tr>
																		<td>Jenis Kelamin</td>
																		<td>:</td>
																		<td><?= strtoupper($data['sex']) ?></td>
																	</tr>
																	<tr>
																		<td>Agama</td>
																		<td>:</td>
																		<td><?= strtoupper($data['agama']) ?></td>
																	</tr>
																	<tr>
																		<td>Status Penduduk</td>
																		<td>:</td>
																		<td><?= strtoupper($data['status']) ?></td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>DATA KELAHIRAN</strong></th>
																	</tr>
																	<tr>
																		<td>Akta Kelahiran</td>
																		<td>:</td>
																		<td><?= strtoupper($data['akta_lahir']) ?></td>
																	</tr>
																	<tr>
																		<td>Tempat / Tanggal Lahir</td>
																		<td>:</td>
																		<td><?= strtoupper($data['tempatlahir']) ?> / <?= strtoupper($data['tanggallahir']) ?></td>
																	</tr>
																	<tr>
																		<td>Tempat Dilahirkan</td>
																		<td>:</td>
																		<td><?= $data['tempatlahir'] ?></td>
																	</tr>
																	<tr>
																		<td>Jenis Kelahiran</td>
																		<td>:</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>Kelahiran Anak Ke</td>
																		<td>:</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>Penolong Kelahiran</td>
																		<td>:</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td>Berat Lahir</td>
																		<td>:</td>
																		<td>Kg</td>
																	</tr>
																	<tr>
																		<td>Panjang Lahir</td>
																		<td>:</td>
																		<td>cm</td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>PENDIDIKAN DAN PEKERJAAN</strong></th>
																	</tr>
																	<tr>
																		<td>Pendidikan dalam KK</td>
																		<td>:</td>
																		<td><?= strtoupper($data['pendidikan_kk']) ?></td>
																	</tr>
																	<tr>
																		<td>Pendidikan sedang ditempuh</td>
																		<td>:</td>
																		<td><?= strtoupper($data['pendidikan_saat']) ?></td>
																	</tr>
																	<tr>
																		<td>Pekerjaan</td>
																		<td>:</td>
																		<td><?= strtoupper($data['pekerjaan']) ?></td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>DATA KEWARGANEGARAAN</strong></th>
																	</tr>
																	<tr>
																		<td>Warga Negara</td>
																		<td>:</td>
																		<td><?= strtoupper($data['warganegara']) ?></td>
																	</tr>
																	<tr>
																		<td>Nomor Paspor</td>
																		<td>:</td>
																		<td><?= strtoupper($data['dokumen_pasport']) ?></td>
																	</tr>
																	<tr>
																		<td>Tanggal Berakhir Paspor</td>
																		<td>:</td>
																		<td><?= strtoupper($data['tanggal_akhir_paspor']) ?></td>
																	</tr>
																	<tr>
																		<td>Nomor KITAS/KITAP</td>
																		<td>:</td>
																		<td><?= strtoupper($data['dokumen_kitas']) ?></td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>ORANG TUA</strong></th>
																	</tr>
																	<tr>
																		<td>NIK Ayah</td>
																		<td>:</td>
																		<td><?= strtoupper($data['ayah_nik']) ?></td>
																	</tr>
																	<tr>
																		<td>Nama Ayah</td>
																		<td>:</td>
																		<td><?= strtoupper($data['nama_ayah']) ?></td>
																	</tr>
																	<tr>
																		<td>NIK Ibu</td>
																		<td>:</td>
																		<td><?= strtoupper($data['ibu_nik']) ?></td>
																	</tr>
																	<tr>
																		<td>Nama Ibu</td>
																		<td>:</td>
																		<td><?= strtoupper($data['nama_ibu']) ?></td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>ALAMAT</strong></th>
																	</tr>
																	<tr>
																		<td>Nomor Telepon</td>
																		<td>:</td>
																		<td><?= strtoupper($data['telepon']) ?></td>
																	</tr>
																	<tr>
																		<td>Alamat</td>
																		<td>:</td>
																		<td><?= strtoupper($data['alamat']) ?></td>
																	</tr>
																	<tr>
																		<td>Dusun</td>
																		<td>:</td>
																		<td><?= strtoupper($data['dusun']) ?></td>
																	</tr>
																	<tr>
																		<td>RT/ RW</td>
																		<td>:</td>
																		<td><?= strtoupper($data['rt']) ?> / <?= strtoupper($data['rw']) ?></td>
																	</tr>
																	<tr>
																		<td>Alamat Sebelumnya</td>
																		<td>:</td>
																		<td><?= strtoupper($data['alamat_sebelumnya']) ?></td>
																	</tr>
																	<tr>
																		<td>Alamat Sekarang</td>
																		<td>:</td>
																		<td><?= strtoupper($data['alamat_sekarang']) ?></td>
																	</tr>
																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>STATUS KAWIN</strong></th>
																	</tr>
																	<tr>
																		<td>Status Kawin</td>
																		<td>:</td>
																		<td><?= strtoupper($data['status_kawin']) ?></td>
																	</tr>
																	<tr>
																		<td>Akta perkawinan</td>
																		<td>:</td>
																		<td><?= strtoupper($data['akta_perkawinan']) ?></td>
																	</tr>
																	<tr>
																		<td>Tanggal perkawinan</td>
																		<td>:</td>
																		<td><?= strtoupper($data['tanggalperkawinan']) ?></td>
																	</tr>
																	<tr>
																		<td>Akta perceraian</td>
																		<td>:</td>
																		<td><?= strtoupper($data['akta_perceraian']) ?></td>
																	</tr>
																	<tr>
																		<td>Tanggal perceraian</td>
																		<td>:</td>
																		<td><?= strtoupper($data['tanggalperceraian']) ?></td>
																	</tr>

																	<tr>
																		<th colspan="3" class="subtitle_head"><strong>DATA KESEHATAN</strong></th>
																	</tr>
																	<tr>
																		<td>Golongan Darah</td>
																		<td>:</td>
																		<td><?= strtoupper($data['golongan_darah']) ?></td>
																	</tr>
																	<tr>
																		<td>Cacat</td>
																		<td>:</td>
																		<td><?= strtoupper($data['cacat']) ?></td>
																	</tr>
																	<tr>
																		<td>Sakit Menahun</td>
																		<td>:</td>
																		<td><?= strtoupper($data['sakit_menahun']) ?></td>
																	</tr>
																	<?php if ($data['status_kawin'] == 2) : ?>
																		<tr>
																			<td>Akseptor KB</td>
																			<td>:</td>
																			<td><?= strtoupper($data['cara_kb']) ?></td>
																		</tr>
																	<?php endif ?>
																	<?php if ($data['id_sex'] == 2) : ?>
																		<tr>
																			<td>Status Kehamilan</td>
																			<td>:</td>
																			<td><?= empty($data['hamil']) ? 'TIDAK HAMIL' : 'HAMIL' ?></td>
																		</tr>
																	<?php endif ?>
																	</thead>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

				</section>
			</div>
		<?php endforeach; ?>
	</div>
	</div>
	<!-- end: page -->
</section>