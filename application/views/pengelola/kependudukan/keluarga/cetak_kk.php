<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Web Fonts  -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />


<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.css" />

<!--tambahan-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/pnotify/pnotify.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/select2-bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatabel/assets/css/datatables.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />


<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme.css" />

<!-- Skin CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/skins/default.css" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme-custom.css">

<!-- Head Libs -->
<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/modernizr/modernizr.js"></script>
</head>
<body onload="print()">
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
		foreach ($keluarga as $data) {
			$alamat = $data['alamat'];
			$rt = $data['rt'];
			$rw = $data['rw'];
			$ja = $data['jumlah_anggota'];
			$kk = $data['no_kk'];
		}
		?>
		
			<section class="panel">

				<div class="panel-body">
					<div class="col-md-12">
						<div class="box box-info">
							<div class="box-header">
								<h3 class="text-center"><strong>SALINAN KARTU KELUARGA</strong></h3>
								<h5 class="text-center"><strong>No. <?= $kk; ?></strong></h5>
							</div>
							<div class="box-body">
                            <div class="row">
                                <br>
                                <br>
                                <div class="table-responsive">
											<table class="table-nobordered">
                                                            <tbody>
                                                                <tr>
																	<td width="15%">ALAMAT  </td>
																	<td width="15%">: <?= $alamat; ?></td>
																	<td width="45%"></td>
                                                                    <td width="15%">KABUPATEN </td>
																	<td width="15%">: <?= $kabupaten; ?></td>
                                                                </tr>
      
                                                                <tr>
																	<td width="15%">RT/RW </td>
																	<td width="15%">: <?= $rt; ?> / <?= $rw; ?></td>
																	<td width="45%"></td>
                                                                    <td width="15%">KODE POS  </td>
																	<td width="15%">: <?= $kodepos; ?></td>
                                                                </tr>
                                                               
                                                                <tr>
																	<td width="15%">DESA/KELURAHAN</td>
																	<td width="15%">: <?= $namadesa; ?></td>
                                                                    <td width="45%"></td>
                                                                    <td width="15%">PROVINSI </td>
                                                                    <td width="15%">: <?= $propinsi; ?></td>
                                                                </tr>
                                                                
                                                                <tr>
																	<td width="15%">KECAMATAN</td>
																	<td width="15%">: <?= $kecamatan; ?></td>
																	<td width="45%"></td>
                                                                    <td width="15%">JUMLAH ANGGOTA </td>
                                                                    <td width="15%">:<?= $ja; ?></td>
                                                                </tr>
                                                                
															</tbody>
                                                            </table>
                                </div>
                            </div>
                                <br>
                                <br>
								<div class="row mt-5">
									<div class="col-sm-12">
										<div class="row">
											<div class="table-responsive">
												<table class="table table-bordered table-hover ">
													<thead class="bg-grey disabled color-palette">
														<tr>
															<th class="text-center" width="0%">No</th>
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
														foreach ($keluarga as $data) :
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
														foreach ($keluarga as $data) :
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
																	<td class="text-center" ><?= $namadesa; ?>, </td>
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
                                                                <?php
		foreach ($kepala_kk as $data) {
			$nama_kk = $data['nama'];
			$id_kk = $data['id_kk'];
		}
		?>
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
        
</body>
</html>