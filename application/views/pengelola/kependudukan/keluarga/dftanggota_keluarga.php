<script type="text/javascript" src="<?php echo base_url();?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript">
                            $(document).ready(function(){
                               
                                $("#simpan").click(function()
                                {
var id =$('#id').val();
var no_kk=$('#no_kk').val();
var nik =$('#nik').val();

var string= $('#my-form').serialize();

if (id.length ==0)
{
	alert('Maaf, ID tidak boleh kosong');
	$('id').focus();
	return false;
}

if (no_kk.length ==0)
{
	alert('Maaf, Nomor kk tidak boleh kosong');
	$('no_kk').focus();
	return false;
}
if (nik.length ==0)
{
	alert('Maaf, ID tidak boleh kosong');
	$('nik').focus();
	return false;
}



$.ajax({
                                        type : 'POST',
                                        url : '<?php echo site_url(); ?>/pengelola/keluarga/simpan',
                                        data : string,
                                        cache : false,
                                        success: function(data)
                                        {
                                           alert("Data Sukses Di Disimpan");
                                            location.reload();
                                        }
                                    });

});
$("#tambah").click(function()
{
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

     function editData(id){

     	$.ajax({
	type : 'GET',
  	url : '<?php echo site_url(); ?>/pengelola/keluarga/cari/' + id,
   	dataType :"json",
  	success: function(data)
    {

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
                                     $('$id').attr('readonly','true');   
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
                <li><a href="<?= base_url('pengelola/keluarga/');?>"><span><?php echo $subjudul; ?></span></a></li>
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
} );

</script>
                               <div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Anggota Keluarga" title="Tambah Anggota Dari Penduduk Yang Sudah Ada" class="mb-xs mt-xs mr-xs  btn btn-success"><i class='fa fa-plus'></i> Tambah Anggota</a>
						<a href="#confirm-delete" title="Hapus Data" onclick=")" class="mb-xs mt-xs mr-xs  btn btn-danger"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
						<a href="" class="mb-xs mt-xs mr-xs  btn btn-warning"><i class="fa fa-book"></i>  Kartu Keluarga</a>
						<a href="<?php echo base_url(); ?>pengelola/keluarga" class="mb-xs mt-xs mr-xs  btn btn-info"  title="Kembali Ke Daftar Keluarga">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Keluarga
						</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr>
												<td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;" >Nomor Kartu Keluarga (KK)</td>
												<td nowrap > : </td>
											</tr>
											<tr>
												<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >Kepala Keluarga</td>
												<td nowrap > :  </td>
											</tr>
											<tr>
												<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >Alamat</td>
												<td nowrap > : </td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<form id="mainform" name="mainform" action="" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table id="tabel2" class="table table-bordered dataTable table-hover nowrap">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th><input type="checkbox" class="checkall"/></th>
																<th>No</th>
																<th>Aksi</th>
																<th>NIK</th>
																<th>Nama</th>
																<th>Tanggal Lahir</th>
																<th>Jenis Kelamin</th>
																<th>Hubungan</th>
															</tr>
														</thead>
														<tbody>
															
																<tr>
																	<td><input type="checkbox" name="id_cb[]" value="" /></td>
																	<td></td>
																	<td nowrap>
																		<a href="" class="mb-xs mt-xs mr-xs  btn btn-warning"  title="Ubah Biodata Penduduk"><i class="fa fa-edit"></i></a>
																		<a href="#" data-href="" class="mb-xs mt-xs mr-xs  btn btn-danger"  title="Pecah KK" data-toggle="modal" data-target="#confirm-status"><i class="fa fa-cut"></i></a>
																	
																			<a href="" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Hubungan Keluarga" title="Ubah Hubungan Keluarga" class="mb-xs mt-xs mr-xs  btn btn-dark"><i class='fa fa-link'></i></a>
																		
																	</td>
																	<td></td>
																	<td nowrap width="45%"></td>
																	<td nowrap></td>
																	<td></td>
																	<td nowrap></td>
																</tr>
															
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class='modal fade' id='confirm-delete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header'>
										<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
										<h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
									</div>
									<div class='modal-body btn-info'>
										Apakah Anda yakin ingin menghapus data ini?
									</div>
									<div class='modal-footer'>
										<button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
										<a class='btn-ok'>
											<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" id="ok-delete"><i class='fa fa-trash-o'></i> Hapus</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class='modal fade' id='confirm-status' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header'>
										<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
										<h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
									</div>
									<div class='modal-body btn-info'>
										Apakah Anda yakin ingin memecah Data Keluarga ini?
									</div>
									<div class='modal-footer'>
										<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
										<a class='btn-ok'>
											<button type="button" class="btn btn-social btn-flat btn-info btn-sm" id="ok-delete"><i class='fa fa-check'></i> Simpan</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div  class="modal fade" id="modalBox" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header'>
										<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
										<h4 class='modal-title' id='myModalLabel'></h4>
									</div>
									<div class="fetched-data"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
                                
							</section>
						</div>
					</div>
</div>
    <!-- end: page -->
</section> 