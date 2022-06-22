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







        <div class="col-md-12">
            <section class="panel panel-success">
                <header class="panel-heading">


                    <h2 class="panel-title ">Data Keluarga</h2>
                </header>



                <div class="panel-body">
                    <div class="box-header with-border">
                        <a href="#modalkeluarga" class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-success"><i class="fa fa-plus "></i> Tambah KK</a>

                        <a href="" class=" btn btn-dark" title="">
                            <i class="fa fa-download "></i>Unduh
                        </a>
                        <a href="" class=" btn btn-primary" title="">
                            <i class="fa fa-arrow-circle-down "></i>Aksi Data Terpilih
                        </a>
                    </div>
                    <br>
                    <div class="table-responsive">

                        <table class="table table-bordered table-striped mb-none dataTable no-footer" id="tabelpenduduk" role="grid" aria-describedby="datatable-editable_info">

                            <thead class="center">
                                <tr role="row">
                                    <th class="sorting_asc center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 201px;">ID</th>
                                    <th class="sorting_disabled center" rowspan="1" colspan="1" aria-label="Actions" style="width: 97px;">Actions</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 267px;">Nomor KK</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Kepala Keluarga</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">NIK </th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Jumlah Anggota</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Jenis Kelamin</th>

                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Alamat</th>
                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Dusun</th>

                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">RW</th>

                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">RT</th>

                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Tanggal Terdaftar</th>

                                    <th class="sorting center" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 249px;">Tanggal Cetak KK</th>
                                </tr>



                            </thead>
                            <tbody>


                                <?php
                                $i = 1;


                                foreach ($data as $dt) {

                                    ?>
                                    <tr>
                                        <td class="center span1"><?php echo $dt->id; ?></td>
                                        <td class="td-actions">

                                            <div class="btn-group action-buttons">
                                                <a href="#modal-table" onclick="javascript: editData('<?php echo $dt->id; ?>')" data-toggle="modal" title="Edit" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo site_url(); ?>/pengelola/keluarga/hapus/<?php echo $dt->id; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>

                                        </td>
                                        <td class="center span2"><a href="<?= base_url('pengelola/keluarga/form_keluarga/' . $dt->id . '/' . $dt->nik); ?>"><?php echo $dt->no_kk; ?></a></td>

                                        <td class="center"><?php echo $dt->nama; ?></td>
                                        <td class="center"><?php echo $dt->nik; ?></td>
                                        <td class="center"><?php echo $dt->jumlah_anggota; ?></td>
                                        <td class="center"><?php echo $dt->jenis_kelamin; ?></td>
                                        <td class="center"><?php echo $dt->alamat_sekarang; ?></td>
                                        <td class="center"><?php echo $dt->dusun; ?></td>
                                        <td class="center"><?php echo $dt->rw; ?></td>
                                        <td class="center"><?php echo $dt->rt; ?></td>

                                        <td class="center"></td>
                                        <td class="center"></td>


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








    <div id="modalkeluarga" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h2 class="modal-title"><i class="fa fa-pencil"></i> Data Keluarga</h2>
                </div>
                <!-- END Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body">

                    <form name="my-form" id="my-form" class="form-horizontal form-bordered">
                        <fieldset>
                            <legend>Tambah Data Kepala Keluarga </legend>

                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Kepala Keluarga</label>
                                <div class="col-md-8 controls">

                                    <select class="form-control" id="nikkeluarga" name="nik">
                                        <?php
                                        foreach ($listpenduduk as $data) {
                                            ?>
                                            <option value="<?= $data['nik']; ?>"><?= $data['nik']; ?>/<?= $data['nama']; ?></option>
                                        <?php
                                        } ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group control-group">
                                <label class="col-md-4 control-label" for="form-field-1">Nomor Kartu Keluarga</label>
                                <div class="col-md-8 controls">
                                    <input type="text" id="kepala_keluarga" name="kepala_keluarga" class="form-control" placeholder="Kepala Keluarga">
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
                            <button type="button" class="btn btn-sm btn-default  modal-dismiss" data-dismiss="modal">Close</button>
                            <button type="button" name="simpan" id="simpan" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>

                </div>
                <!-- END Modal Body -->
                <p></p>
            </div>
        </div>
    </div>
</section>

</div>
</div>
</div>
</div>
<!-- end: page -->
</section>