<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#simpan").click(function() {
            var id = $('#id_kelahiran').val();
            var tgl_kelahiran = $('#tgl_kelahiran').val();
            var string = $('#my-form').serialize();

            if (id_kelahiran.length == 0) {
                alert('Maaf, ID tidak boleh kosong');
                $('id_kelahiran').focus();
                return false;
            }

            if (tgl_kelahiran.length == 0) {
                alert('Maaf, tanggal tidak boleh kosong');
                $('tgl_kelahiran').focus();
                return false;
            }

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>pengelola/kelahiran/simpan',
                data: string,
                cache: false,
                success: function(data) {
                    alert("Data Sukses Di Disimpan");
                    location.reload();
                }
            });

        });
        $("#tambah").click(function() {
            $('#id_kelahiran').val('');
            $('#tgl_kelahiran').val('');
            $('#nama_bayi').val('');

            $('#nama').val('');

            $('#berat_bayi').val('');

            $('#panjang_bayi').val('');
            $('#nama_ayah').val('');
            $('#nama_ibu').val('');


        });
    });

    function editData(id) {

        $.ajax({
            type: 'GET',
            url: '<?php echo site_url(); ?>pengelola/kelahiran/cari/' + id,
            dataType: "json",
            success: function(data) {

                $('#id_kelahiran').val(data.id_kelahiran);

                $('#tgl_kelahiran').val(data.tgl_kelahiran);
                $('#nama_bayi').val(data.nama_bayi);

                $('#nama').val(data.nama);

                $('#panjang_bayi').val(data.panjang_bayi);

                $('#nama_ayah').val(data.nama_ayah);

                $('#nama_ibu').val(data.nama_ibu);
                $('$id_kelahiran').attr('readonly', 'true');
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

        <?php $this->load->view('pengelola/sub_menu/peristiwa'); ?>

        <div class="col-md-9">
            <section class="panel panel-success">
                <header class="panel-heading">


                    <h2 class="panel-title ">Data Kelahiran</h2>
                </header>
                <div class="panel-body">
                    <div class="row pul">
                        <div class="col-md-12">
                            <div class="mb-md pull-right">
                                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#modal-tabel"><i class="fa fa-plus"></i></a>
                                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modal-tabel"><i class="fa fa-upload"></i></a>
                                <button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">PDF</a></li>
                                    <li><a href="#">EXCEL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#datatable-editable').DataTable();
                                });
                            </script>
                            <thead class="center">
                                <tr role="row">
                                    <th class="sorting_asc center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 201px;">ID</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">tanggal lahir</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">nama bayi</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">jenis kelamin</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">berat</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">panjang</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">nama ayah</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">nama ibu</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">kembar</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">lokasi lahir</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">tempat lahir</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">penolong</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">id_keluarga</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">nama pelapor</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">id penduduk/th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">id surat</th>
                                    <th class="sorting_disabled center" rowspan="1" colspan="1" aria-label="Actions" style="width: 97px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php 
                                $i = 1;


                                foreach ($data as $dt) {

                                    ?>
                                <tr>
                                    <td class="center span1"><?php echo $dt->id_kelahiran; ?></td>
                                    <td class="center span2"><?php echo $dt->tgl_kelahiran; ?></td>

                                    <td class="center"><?php echo $dt->nama_bayi; ?></td>
                                    <td class="center"><?php echo $dt->id_jen_kel; ?></td>
                                    <td class="center"><?php echo $dt->berat_bayi; ?></td>
                                    <td class="center"><?php echo $dt->panjang_bayi; ?></td>
                                    <td class="center"><?php echo $dt->nama_ayah; ?></td>
                                    <td class="center"><?php echo $dt->nama_ibu; ?></td>

                                    <td class="center"><?php echo $dt->is_kembar; ?></td>
                                    <td class="center"><?php echo $dt->lokasi_lahir; ?></td>
                                    <td class="center"><?php echo $dt->tempat_lahir; ?></td>
                                    <td class="center"><?php echo $dt->penolong; ?></td>
                                    <td class="center"><?php echo $dt->id_keluarga; ?></td>
                                    <td class="center"><?php echo $dt->nama_pelapor; ?></td>
                                    <td class="center"><?php echo $dt->id_pelapor; ?></td>
                                    <td class="center"><?php echo $dt->id_penduduk; ?></td>
                                    <td class="center"><?php echo $dt->id_surat; ?></td>
                                    <td class="td-actions">
                                        <center>
                                            <div class="btn-group action-buttons">
                                                <a href="#modal-table" onclick="javascript: editData('<?php echo $dt->id_kelahiran; ?>')" data-toggle="modal" title="Edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo site_url(); ?>pengelola/kelahiran/hapus/<?php echo $dt->id_kelahiran; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <?php

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>








    <div id="modal-tabel" class="modal-block modal-header-color modal-block-success mfp-hide">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h2 class="modal-title"><i class="fa fa-pencil"></i> Data Bantuan sosial</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">

                    <form name="my-form" id="my-form" class="form-horizontal form-bordered">
                        <fieldset>
                            <legend>Masukan Data Dengan Benar </legend>

                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">ID</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="id_kelahiran" name="id_kelahiran" class="form-control" placeholder="ID" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Nomor KK</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="tgl_kelahiran" name="tgl_kelahiran" class="form-control" placeholder="Nomor KK">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">No Kepala Keluarga</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="nama_bayi" name="nama_bayi" class="form-control" placeholder="tgl_kelahiranl_keluarga" maxlength="20">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Nama</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" maxlength="20">
                                </div>
                            </div>

                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">panjang_bayi</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="panjang_bayi" name="panjang_bayi" class="form-control" placeholder="panjang_bayi" maxlength="15">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">nama_ayah</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" placeholder="Bantuan pen miskin" maxlength="10">
                                </div>
                            </div>


                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Status Ekonomi</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" placeholder="nama_ibu" maxlength="10">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <p></p>
                    <div class="row">
                        <p style="margin-left: 10px;">Pastikan anda telah memasukan data dengan benar</p>
                    </div>


                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button class="btn btn-default modal-dismiss">Close</button>
                            <button name="simpan" id="simpan" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>


                </div>
                <!-- END Modal Body -->
                <p></p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end: page -->
</section> 