<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title" style="color:#FFFFFF;">
            Menu
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="nav-active"' : '' ?>>
                        <a href="<?php echo base_url(); ?>index.php" <?php echo $home; ?>>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent <?= $this->uri->segment(2) == 'keluarga' || $this->uri->segment(2) == 'penduduk' || $this->uri->segment(2) == 'kelompok' ? ' nav-active nav-expanded' : '' ?>">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Kependudukan</span>
                        </a>
                        <ul class="nav nav-children ">
                            <li class="<?= $this->uri->segment(2) == 'keluarga' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/keluarga">
                                    Data Keluarga
                                </a>
                            </li>
                            <li class="<?= $this->uri->segment(2) == 'penduduk' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/penduduk">
                                    Data Penduduk
                                </a>
                            </li>
                            <li class="<?= $this->uri->segment(2) == 'kelompok' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>comingsoon">
                                    Data Kelompok
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent  <?= $this->uri->segment(2) == 'bansos' || $this->uri->segment(2) == 'siswamiskin' ? ' nav-active nav-expanded' : '' ?>">
                        <a>
                            <i class="fa  fa-smile-o" aria-hidden="true"></i>
                            <span>Data sosial</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?= $this->uri->segment(2) == 'bansos' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/bansos">
                                    Bantuan
                                </a>
                            </li>
                            <li class="<?= $this->uri->segment(2) == 'siswamiskin' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>comingsoon">
                                    Kesehatan Penduduk
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url(); ?>comingsoon">
                                    <span>Peristiwa</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent <?=
                                                $this->uri->segment(2) == 'pus_kependudukan'
                                                    || $this->uri->segment(2) == 'pekerjaan'
                                                    || $this->uri->segment(2) == 'pendidikan'
                                                    || $this->uri->segment(2) == 'goldar'
                                                    || $this->uri->segment(2) == 'agama'
                                                    || $this->uri->segment(2) == 'kewarganegaraan'
                                                    || $this->uri->segment(2) == 'kompetensi'
                                                    || $this->uri->segment(2) == 'skeluarga'
                                                    || $this->uri->segment(2) == 'spenduduk'
                                                    || $this->uri->segment(2) == 'pus_lainnya'
                                                    ? ' nav-active nav-expanded' : '' ?>">
                        <a>
                            <i class="fa  fa-book" aria-hidden="true"></i>
                            <span>Pengaturan Pustaka</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?= $this->uri->segment(2) == 'pus_kependudukan' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/pus_kependudukan">
                                    Pustaka kependudukan
                                </a>
                            </li>
                            <!-- <li class="<?= $this->uri->segment(2) == 'pus_lainnya' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/pus_lainnya">
                                    Pustaka Lainnya
                                </a>
                            </li> -->
                        </ul>
                    </li>

                    <li class="nav-parent <?=
                                                $this->uri->segment(2) == 'layanansurat'
                                                    || $this->uri->segment(3) == 'formatsurat'
                                                    ? ' nav-active nav-expanded' : '' ?>">
                        <a>
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <span>Layanan Surat</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?= $this->uri->segment(2) == 'layanansurat' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/layanansurat">
                                    Daftar Pengajuan Warga
                                </a>
                            </li>
                            <li class="<?= $this->uri->segment(3) == 'formatsurat' ? ' nav-active' : '' ?>">
                                <a href="<?php echo base_url(); ?>pengelola/layanansurat/formatsurat">
                                    Setting Formas Surat
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>pengelola/statistik_pendidikan">
                            <i class="fa  fa-bar-chart-o" aria-hidden="true"></i>
                            <span>Statistik</span>
                        </a>
                    </li>
                    <li class="<?= $this->uri->segment(2) == 'pengaduan' || $this->uri->segment(2) == 'kotakpesan' ? ' nav-active nav-expanded' : '' ?>">
                        <a href="<?php echo base_url(); ?>pengelola/kotakpesan">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Kotak Pesan</span>
                        </a>

                    </li>
                </ul>
                </li>
            </nav>

            <hr class="separator" />

        </div>

    </div>

</aside>