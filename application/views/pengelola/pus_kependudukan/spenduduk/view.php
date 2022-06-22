<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#simpan").click(function() {
            var id_pendidikan = $('#id_pendidikan').val();
            var deskripsi = $('#deskripsi').val();
            var string = $('#my-form').serialize();

            if (id_pendidikan.length == 0) {
                alert('Maaf, ID tidak boleh kosong');
                $('id_pendidikan').focus();
                return false;
            }

            if (deskripsi.length == 0) {
                alert('Maaf, Deskripsi tidak boleh kosong');
                $('deskripsi').focus();
                return false;
            }

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>/pengelola/pendidikan/simpan',
                data: string,
                cache: false,
                success: function(data) {
                    alert("Data Sukses Di Disimpan");
                    location.reload();
                }
            });

        });
        $("#tambah").click(function() {
            $('#id_pendidikan').val('');
            $('#deskripsi').val('');
            $('#is_bsm').val('');




        });
    });

    function editData(id) {

        $.ajax({
            type: 'GET',
            url: '<?php echo site_url(); ?>/pengelola/pendidikan/cari/' + id,
            dataType: "json",
            success: function(data) {

                $('#id_pendidikan').val(data.id_pendidikan);

                $('#deskripsi').val(data.deskripsi);
                $('#is_bsm').val(data.is_bsm);

                $('$id_pendidikan').attr('readonly', 'true');
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
        <?php $this->load->view('pengelola/sub_menu/pustaka'); ?>

        <div class="col-md-9">
            <section class="panel panel-success">
                <header class="panel-heading">


                    <h2 class="panel-title ">Data Pendidikan</h2>
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
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">

                                    <thead class="center">
                                        <tr role="row">
                                            <th class="sorting_asc center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 201px;">ID</th>
                                            <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">Status Penduduk</th>
                                            <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">Action</th>
                                        </tr>



                                    </thead>
                                    <tbody>


                                        <?php
                                        $i = 1;


                                        foreach ($data as $dt) {

                                            ?>
                                            <tr>
                                                <td class="center span1"><?php echo $dt->id; ?></td>
                                                <td class="center span2"><?php echo $dt->nama; ?></a></td>
                                                <td class="td-actions center span2">

                                                    <div class="btn-group action-buttons">
                                                        <a href="#modal-table" onclick="javascript: editData('<?php echo $dt->id; ?>')" data-toggle="modal" title="Edit" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo site_url(); ?>/pengelola/keluarga/hapus/<?php echo $dt->id; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                    </div>

                                                </td>

                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

            </section>









            <div id="modal-tabel" class="modal-block modal-header-color modal-block-success mfp-hide">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Data Pendidikan</h2>
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
                                            <input type="text" id="id_pendidikan" name="id_pendidikan" class="form-control" placeholder="ID" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">Status Pendidikan</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">Status BSM</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="is_bsm" name="is_bsm" class="form-control" placeholder="Status BSM" maxlength="20">
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