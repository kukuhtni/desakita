<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
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
		<div class="col-md-9">
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
						<?php
						foreach ($profildesa as $data) {
							$kodeprovinsi = $data['kode_propinsi'];
							$id = $data['id'];
							$logo = $data['logo'];
							?>
							<form class="form-horizontal form-nobordered" action="<?= base_url('admin/profildesa'); ?>/updatedesa" method="POST">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Nama Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="namadesa" name="namadesa" value="<?= $data['nama_desa']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Kode Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kodedesa" name="kodedesa" value="<?= $data['kode_desa']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Kode Pos Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kodeposdesa" name="kodeposdesa" value="<?= $data['kode_pos']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Kepala Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kepaladesa" name="kepaladesa" value="<?= $data['nama_kepala_desa']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">NIP Kepala Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="nipkades" name="nipkades" value="<?= $data['nip_kepala_desa']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Alamat Kantor Desa</label>
										<div class="col-md-6">
											<textarea type="text" class="form-control" id="alamatdesa" name="alamatdesa"><?= $data['alamat_kantor']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Email Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="emaildesa" name="emaildesa" value="<?= $data['email_desa']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Telepon Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="telpondesa" name="telpondesa" value="<?= $data['telepon']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Website Desa</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="webdesa" name="webdesa" value="<?= $data['website']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Nama Kecamatan</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $data['nama_kecamatan']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Kode Kecamatan</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kodekecamatan" name="kodekecamatan" value="<?= $data['kode_kecamatan']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Nama Camat</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="namacamat" name="namacamat" value="<?= $data['nama_kepala_camat']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">NIP Camat</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="nipcamat" name="nipcamat" value="<?= $data['nip_kepala_camat']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Nama Kabupaten</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $data['nama_kabupaten']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Kode Kabupaten</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="kodekabupaten" name="kodekabupaten" value="<?= $data['kode_kabupaten']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="">Provinsi</label>
										<div class="col-md-6">
											<input type="text" readonly class="form-control" id="provinsi" name="provinsi" value="<?= $data['nama_propinsi']; ?>">
											<select class="form-control" id="gantiprovinsi" name="gantiprovinsi" multiple="multiple">
											<?php
										}
										?>
											<?php
											foreach ($listprovinsi as $data) {
												?>
												<option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
											<?php
										} ?>
										</select>
									</div>
								</div>
							</div>
					</div>
					<div class="row pull-right">
						<div class="form-group">
							<div>
								<input type="hidden" class="form-control" id="id" name="id" value="<?= $id; ?>">
								<input type="hidden" class="form-control" id="logo" name="logo" value="<?= $logo; ?>">
								<button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-times"></i> Batal</button>
								<button type="submit" class="mb-xs mt-xs mr-xs btn btn-success"><i class="fa fa-save"></i> Simpan</button>
							</div>
						</div>
					</div>
					</form>

				</div>
			</section>
		</div>
		<?php $this->load->view('admin/submenu/profildesa_menu'); ?>
	</div>

	<!-- end: page -->
</section>