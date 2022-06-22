<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#simpan").click(function() {
            var id = $('#id_pindah_keluar').val();
            var tgl_pindah_keluar = $('#tgl_pindah_keluar').val();
            var string = $('#my-form').serialize();

            if (id_pindah_keluar.length == 0) {
                alert('Maaf, ID tidak boleh kosong');
                $('id_pindah_keluar').focus();
                return false;
            }

            if (tgl_pindah_keluar.length == 0) {
                alert('Maaf, tanggal tidak boleh kosong');
                $('tgl_pindah_keluar').focus();
                return false;
            }

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>pengelola/pindah_keluar/simpan',
                data: string,
                cache: false,
                success: function(data) {
                    alert("Data Sukses Di Disimpan");
                    location.reload();
                }
            });

        });
        $("#tambah").click(function() {
            $('#id_pindah_keluar').val('');
            $('#tgl_pindah_keluar').val('');
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
            url: '<?php echo site_url(); ?>pengelola/pindah_keluar/cari/' + id,
            dataType: "json",
            success: function(data) {

                $('#id_pindah_keluar').val(data.id_pindah_keluar);

                $('#tgl_pindah_keluar').val(data.tgl_pindah_keluar);
                $('#nama_bayi').val(data.nama_bayi);

                $('#nama').val(data.nama);

                $('#panjang_bayi').val(data.panjang_bayi);

                $('#nama_ayah').val(data.nama_ayah);

                $('#nama_ibu').val(data.nama_ibu);
                $('$id_pindah_keluar').attr('readonly', 'true');
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


                    <h2 class="panel-title ">Data pindah_keluar</h2>
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
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">Alamat jalan</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Tanggal Pindah</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">id penduduk</th>
                                    <th class="sorting_disabled center" rowspan="1" colspan="1" aria-label="Actions" style="width: 97px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                $i = 1;


                                foreach ($data as $dt) {

                                    ?>
                                    <tr>
                                        <td class="center span1"><?php echo $dt->id_pindah_keluar; ?></td>

                                        <td class="center"><?php echo $dt->alamat_jalan; ?></td>
                                        <td class="center span2"><?php echo $dt->tgl_pindah_keluar; ?></td>

                                        <td class="center"><?php echo $dt->id_penduduk; ?></td>
                                        <td class="td-actions">
                                            <center>
                                                <div class="btn-group action-buttons">
                                                    <a href="#modal-table" onclick="javascript: editData('<?php echo $dt->id_pindah_keluar; ?>')" data-toggle="modal" title="Edit" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo site_url(); ?>pengelola/pindah_keluar/hapus/<?php echo $dt->id_pindah_keluar; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
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
                                    <input type="text" id="id_pindah_keluar" name="id_pindah_keluar" class="form-control" placeholder="ID" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Nomor KK</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="tgl_pindah_keluar" name="tgl_pindah_keluar" class="form-control" placeholder="Nomor KK">
                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">No Kepala Keluarga</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="nama_bayi" name="nama_bayi" class="form-control" placeholder="tgl_pindah_keluarl_keluarga" maxlength="20">
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