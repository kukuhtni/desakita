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
						<a href="" title="Tambah Dokumen" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Dokumen" class="mb-xs mt-xs mr-xs modal-basic btn btn-primary"><i class='fa fa-plus'></i>Tambah Dokumen</a>
						<a href="#confirm-delete" title="Hapus Data" onclick="" class="mb-xs mt-xs mr-xs modal-basic btn btn-danger"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
						<a href="" class="mb-xs mt-xs mr-xs modal-basic btn btn-info"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Biodata Penduduk</a>
					</div>
					<div class="box-body ">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover">
								<tbody>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;" >Nama Penduduk</td><td nowrap > : </td>
									</tr>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >NIK</td><td nowrap > :  </td>
									</tr>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >Alamat</td><td nowrap > : </td>
									</tr>
								</tbody>
							</table>
                        </div>
                        <div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<form id="mainform" name="mainform" action="" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-hover ">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th><input type="checkbox" id="checkall"></th>
																<th>No</th>
																<th >Aksi</th>
																<th>Nama Dokumen</th>
																<th>File</th>
																<th>Tanggal Upload</th>
															</tr>
														</thead>
														<tbody>
															
																<tr>
																	<td><input type="checkbox" name="id_cb[]" value="" ></td>
																	<td></td>
																	<td nowrap>
																		<a href="" class="btn bg-orange btn-flat btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Data" title="Ubah Data"  title="Ubah Data"><i class="fa fa-edit"></i></a>
																		<a href="#" data-href="" class="btn bg-maroon btn-flat btn-sm"  title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td width="40%"></td>
																	<td width="30%"><a href="" ></td>
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