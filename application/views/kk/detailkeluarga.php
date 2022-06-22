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
                <h2 class="panel-title">Detail Keluarga</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group panel" id="accordion">
                            <?php
                            $no = 1;
                            foreach ($datakeluarga as $data) :

                                ?>
                                <div class="panel panel-accordion">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $data['id']; ?>">
                                                <?= $data['nama']; ?> | <?= $data['hubungan']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?= $data['id']; ?>" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <div class="col-md-2">
                                                <center><img src="<?php echo base_url(); ?>assets/fp/<?php echo $data['foto']; ?>" width="90%"></center><br>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="table-responsive">
                                                    <table class="table mb-none">
                                                        <tr>
                                                            <th>NIK :</th>
                                                            <td><?= $data['nik']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama :</th>
                                                            <td><?= $data['nama']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tempat/Tgl Lahir :</th>
                                                            <td><?= $data['tempatlahir']; ?>, <?= $data['tanggallahir']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Jenis Kelamin :</th>
                                                            <td><?= $data['sex']; ?></td>
                                                        </tr>
                                                        <th></th>
                                                        <td></td>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="table-responsive">
                                                    <table class="table mb-none">
                                                        <tr>
                                                            <th>Agama :</th>
                                                            <td><?= $data['agama']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Status Perkawinan :</th>
                                                            <td><?= $data['kawin']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pekerjaan :</th>
                                                            <td><?= $data['pekerjaan']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kewarganegaraan :</th>
                                                            <td><?= $data['kewarganegaraan']; ?></td>
                                                        </tr>
                                                        <th></th>
                                                        <td></td>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <style>
                    th {
                        text-align: right;
                    }

                    td {
                        text-align: left;
                    }
                </style>


            </div>
        </section>
    </div>
</section>