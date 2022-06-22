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

	<div class="row">
		<section class="panel">
			<header class="panel-heading">
				<h2 class="panel-title">Form Pengajuan</h2>
			</header>

			<div class="panel-body">
				<form class="form-horizontal form-bordered" action="<?= base_url('kk/pengajuansurat/tambahpengajuan') ?>" method="post">
					<input type="hidden" name="rt" value="<?= $datakeluarga[0]['rt'] ?>">
					<input type="hidden" name="rw" value="<?= $datakeluarga[0]['rw'] ?>">
					<div class="form-group"><br>
						<label class="col-md-3 control-label">Layanan Administrasi Surat</label>
						<div class="col-md-6">
							<select data-plugin-selectTwo class="form-control populate" name="layanansurat">
								<option>Pilih Keterangan Surat</option>
								<?php foreach ($listsurat as $data) : ?>
									<option value="<?= $data['id']; ?>"><?= $data['nama']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Nama Anggota Keluarga</label>
						<div class="col-md-6">
							<select data-plugin-selectTwo class="form-control populate" name="namakeluarga">
								<option>Pilih Anggota</option>
								<?php foreach ($datakeluarga as $data) : ?>
									<option value="<?= $data['id'] ?>"><?= $data['nama']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaAutosize">Keperluan</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize name="keperluan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="textareaAutosize">Keterangan</label>
						<div class="col-md-6">
							<textarea class="form-control" rows="4" id="textareaAutosize" data-plugin-textarea-autosize name="keterangan"></textarea>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<!-- Modal Bootstrap -->
						<a class="btn btn-sm btn-dark" href="<?= base_url('kk/'); ?>/pengajuansurat"><i class="fa fa-arrow-left"></i> Kembali</a>
						<button class="mb-xs mt-xs mr-xs btn btn-default" type="submit">Ajukan</button>
					</div>
				</form>
			</div>
		</section>





	</div>