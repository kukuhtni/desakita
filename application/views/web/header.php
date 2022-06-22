<!-- Header Area Start -->
<header class="header-area">
    <!-- Search Form -->
    <div class="search-form d-flex align-items-center">
        <div class="container">
            <form action="index.html" method="get">
                <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                <button type="submit"><i class="icon_search"></i></button>
            </form>
        </div>
    </div>
    <?php foreach ($datadesa as $d) {
        $namadesa = $d['nama_desa'];
        $alamatkantor = $d['alamat_kantor'];
        $logo = $d['logo'];
        $email = $d['email_desa'];
        $tlp = $d['telepon'];
    } ?>
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span><?= $tlp; ?></span></a>
                        <a href="#"><i class="icon_mail"></i> <span><?= $email; ?></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/octopus/assets/images/logo-1.png" width="70%" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="<?= base_url('homepage'); ?>">Branda</a></li>
                                <li><a href="#">Berita</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('berita'); ?>">- Berita Desa</a></li>
                                        <li><a href="<?= base_url('berita/lokal'); ?>">- Berita Lokal</a></li>
                                        <li><a href="<?= base_url('berita/kriminal'); ?>">- Berita Kriminal</a></li>
                                    </ul>
                                </li>
                                <li><a href="./about.html">Profil Desa</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('profil'); ?>">- Sejarah</a></li>
                                        <li><a href="<?= base_url('profil/visimisi'); ?>">- Visi & Misi</a></li>
                                        <li><a href="<?= base_url('profil/struktur'); ?>">- Struktur</a></li>
                                        <li><a href="<?= base_url('profil/peta'); ?>">- Peta</a></li>
                                        <li><a href="<?= base_url('profil/peraturan'); ?>">- Peraturan</a></li>
                                    </ul>
                                </li>
                                <li><a href="./room.html">Agenda Desa</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('agenda'); ?>">- Kegiatan Desa</a></li>
                                        <li><a href="<?= base_url('agenda/produkdesa'); ?>">- Produk Desa</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Statistik Desa</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('statistik'); ?>">- Kepala Keluarga</a></li>
                                        <li><a href="<?= base_url('statistik/penduduk'); ?>">- Penduduk</a></li>
                                        <li><a href="<?= base_url('statistik/pekerjaan'); ?>">- Pekerjaan</a></li>
                                        <li><a href="<?= base_url('statistik/pendidikan'); ?>">- Pendidikan</a></li>
                                        <li><a href="<?= base_url('statistik/statuskawin'); ?>">- Status Kawin</a></li>
                                        <li><a href="<?= base_url('statistik/golongandarah'); ?>">- Golongan Darah</a></li>
                                        <li><a href="<?= base_url('statistik/agama'); ?>">- Agama</a></li>
                                        <li><a href="<?= base_url('statistik/raskin'); ?>">- Raskin</a></li>
                                        <li><a href="<?= base_url('statistik/pkh'); ?>">- PKH</a></li>
                                        <li><a href="<?= base_url('statistik/bantuansiswa'); ?>">- Bantuan Siswa</a></li>
                                        <li><a href="<?= base_url('statistik/potensiekonomi'); ?>">- Potensi Ekonomi</a>
                                            <ul class="dropdown">
                                                <li><a href="<?= base_url('statistik/potensiekonomi/kelompokternak'); ?>">- Kel. Ternak</a></li>
                                                <li><a href="<?= base_url('statistik/potensiekonomi/kelompoktani'); ?>">- Kel. Tani</a></li>
                                                <li><a href="<?= base_url('statistik/potensiekonomi/kelompokkayu'); ?>">- Kel. Kayu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('galery'); ?>">Galery</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->