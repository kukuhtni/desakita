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
        <section class="panel panel-dark">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Seting Pengguna</h2>
            </header>
            <div class="panel-body">
                <div class="row pul">
                    <div class="col-md-12">
                        <div class="mb-md pull-right">
                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-success" href="#ModalPenggunaTambah"><i class="fa fa-plus"></i></a>
                            <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#ModalPenggunaTambah"><i class="fa fa-upload"></i></a>
                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-print"></i></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">PDF</a></li>
                                <li><a href="#">EXCEL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="tabel-pengguna">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">FOTO</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">NAMA LENGKAP</th>
                            <th class="text-center">HAK AKSES</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <!-- end: page -->
</section>

<!-- Modal Tambah -->

<div id="ModalPenggunaTambah" class="modal-block modal-header-color modal-block-success mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Data Pengguna</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <form id="form-pengguna" class="form-horizontal mb-lg" novalidate="novalidate">
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" id="nik" name="nik" class="form-control" placeholder="Ketik Nomor Induk Kepundudukan" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" id="namalengkap" name="namalengkap" class="form-control" placeholder="Ketik Nama Lengkap" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" id="nohp" name="nohp" class="form-control" placeholder="Ketik Nomor HP" required />
                        </div>
                    </div>
                    <hr>
                    <div class="form-group mt-lg">
                        <label class="col-md-3 control-label" for="inputSuccess">Hak Akses</label>
                        <div class="col-md-9">
                            <select class="form-control mb-md" name="role" id="role">
                                <option values="Administrator">Administrator</option>
                                <option values="Pengelola Data">Pengelola Data</option>
                                <option values="RW">RW</option>
                                <option values="RT">RT</option>
                                <option values="Kepala Keluarga">Kepala Keluarga</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Ketik Username" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Ketik Password Login" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="verpass" name="verpass" class="form-control" placeholder="Ketik Ulang Password Login" required />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary " id="btn-pengguna-tambah">Simpan</button>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal Tambah end -->

<!-- Modal View Detail -->

<div id="ModalPenggunaDetail" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading bg-info">

            <div class="widget-profile-info">
                <div class="profile-picture">
                    <img src="<?php echo base_url(); ?>assets/fp/<?php echo $data['foto']; ?>">
                </div>
                <div class="profile-info">
                    <h4 class="name text-semibold"><?php echo $data['nama']; ?></h4>
                    <h5 class="role"><?php echo $data['role']; ?></h5>
                    <div class="profile-footer">
                        <button id="addToTable" class="btn btn-default" alt="edit"><i class="fa fa-edit"></i></button>
                        <button id="addToTable" class="btn btn-danger" alt="hapus"><i class="fa fa-times"></i></ </div> </div> </div> </header> <div class="panel-body">
                            <div class="modal-wrapper">
                                <section class="panel panel-group">

                                    <div id="accordion">
                                        <div class="panel panel-accordion panel-accordion-first">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                                        <i class="fa fa-check"></i> Detail Profil
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse1One" class="accordion-body collapse in">
                                                <div class="panel-body">
                                                    <ul class="widget-todo-list">
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-accordion">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                                        <i class="fa fa-user"></i> Detail Login
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse1Two" class="accordion-body collapse">
                                                <div class="panel-body">
                                                    <ul class="simple-user-list mb-xlg">
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="todo-label" for="todoListItem1">
                                                                <span>Nama Lengkap : <?php echo $data['nama']; ?></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-default modal-dismiss">Batal</button>
                            </div>
                        </div>
                    </footer>
    </section>
</div>

<!-- Modal View Detail end -->

<!-- Modal edit -->
<div id="ModalPenggunaEdit" class="modal modal-block modal-header-color modal-block-warning mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Data Pengguna</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <form id="form-pengguna" class="form-horizontal mb-lg" novalidate="novalidate">
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" id="nik" name="nik-edit" class="form-control" placeholder="Ketik Nomor Induk Kepundudukan" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" id="namalengkap" name="namalengkap-edit" class="form-control" placeholder="Ketik Nama Lengkap" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" id="nohp" name="nohp-edit" class="form-control" placeholder="Ketik Nomor HP" required />
                        </div>
                    </div>
                    <hr>
                    <div class="form-group mt-lg">
                        <label class="col-md-3 control-label" for="inputSuccess">Hak Akses</label>
                        <div class="col-md-9">
                            <select class="form-control mb-md" name="role-edit" id="role">
                                <option values="Administrator">Administrator</option>
                                <option values="Pengelola Data">Pengelola Data</option>
                                <option values="RW">RW</option>
                                <option values="RT">RT</option>
                                <option values="Kepala Keluarga">Kepala Keluarga</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" name="username-edit" class="form-control" placeholder="Ketik Username" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password-edit" class="form-control" placeholder="Ketik Password Login" required />
                        </div>
                    </div>
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="verpass" name="verpass" class="form-control" placeholder="Ketik Ulang Password Login" required />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary " id="btn-pengguna-tambah">Simpan</button>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal edit end -->