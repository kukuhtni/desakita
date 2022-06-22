                    <?php
                    if ($judul == 'Dashboard') {
                        $dashboard = 'nav-active';
                        $pengguna = '';
                        $pldata = '';
                        $pldatawil = '';
                        $potensi = '';
                        $kotakmasuk = '';
                    } elseif ($judul == 'Pengguna') {
                        $dashboard = '';
                        $pengguna = 'nav-active';
                        $pldata = '';
                        $pldatawil = '';
                        $potensi = '';
                        $kotakmasuk = '';
                    } elseif ($judul == 'Pengelolaan Data Web') {
                        $dashboard = '';
                        $pengguna = '';
                        $pldata = 'nav-active nav-expanded';
                        $pldatawil = '';
                        $potensi = '';
                        $kotakmasuk = '';
                    } elseif ($judul == 'Pengelolaan Data Desa') {
                        $dashboard = '';
                        $pengguna = '';
                        $pldata = '';
                        $pldatawil = 'nav-active nav-expanded';
                        $potensi = '';
                        $kotakmasuk = '';
                    } elseif ($judul == 'Kotak Pesan') {
                        $dashboard = '';
                        $pengguna = '';
                        $pldata = '';
                        $pldatawil = '';
                        $potensi = '';
                        $kotakmasuk = 'nav-active nav-expanded';
                    }
                    ?>
                    <?php
                    if ($subjudul == 'Profil Desa') {
                        $pfdesa = 'nav-active';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = '';
                        $dokumen = '';
                        $struktur = '';
                        $petadesa = '';
                    } elseif ($subjudul == 'Artikel') {
                        $pfdesa = '';
                        $artikel = 'nav-active';
                        $Galeri = '';
                        $medsos = '';
                        $dokumen = '';
                        $struktur = '';
                        $petadesa = '';
                    } elseif ($subjudul == 'Gallery Kegiatan') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = 'nav-active';
                        $medsos = '';
                        $dokumen = '';
                        $struktur = '';
                        $petadesa = '';
                    } elseif ($subjudul == 'Media Sosial') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = 'nav-active';
                        $dokumen = '';
                        $struktur = '';
                        $petadesa = '';
                    } elseif ($subjudul == 'Dokumen Publik') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = '';
                        $struktur = '';
                        $petadesa = '';
                        $dokumen = 'nav-active';
                    } elseif ($subjudul == 'Struktur Pemerintahan Desa') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = '';
                        $struktur = 'nav-active';
                        $dokumen = '';
                        $petadesa = '';
                    } elseif ($subjudul == 'Pengelolaan Data Wilayah') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = '';
                        $struktur = '';
                        $dokumen = '';
                        $petadesa = 'nav-active';
                    } elseif ($subjudul == '') {
                        $pfdesa = '';
                        $artikel = '';
                        $Galeri = '';
                        $medsos = '';
                        $dokumen = '';
                        $struktur = '';
                        $petadesa = '';
                    }
                    ?>

                    <!-- start: sidebar -->
                    <aside id="sidebar-left" class="sidebar-left">

                        <div class="sidebar-header">
                            <div class="sidebar-title">
                                <strong>Navigation</strong>
                            </div>
                            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                            </div>
                        </div>

                        <div class="nano">
                            <div class="nano-content">
                                <nav id="menu" class="nav-main" role="navigation">
                                    <ul class="nav nav-main">
                                        <li class="nav-link <?php echo $dashboard; ?>">
                                            <a href="<?php echo base_url(); ?>admin/home">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-link <?php echo $pengguna; ?>">
                                            <a href="<?php echo base_url(); ?>admin/pengguna">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                <span>Pengguna</span>
                                            </a>
                                        </li>
                                        <li class="nav-parent nav-link <?php echo $pldatawil; ?>">
                                            <a>
                                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                                <span>Pengelolaan Data Desa</span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li class="nav-link <?php echo $pfdesa; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/profildesa">
                                                        Profil Desa
                                                    </a>
                                                </li>
                                                <li class="nav-link <?php echo $struktur; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/struktur">
                                                        Struktur Pemerintahan Desa
                                                    </a>
                                                </li>
                                                <li class="nav-link <?php echo $petadesa; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/peldatwil">
                                                        Pengelolaan Data Wilayah
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-parent nav-link <?php echo $pldata; ?> ">
                                            <a>
                                                <i class="fa fa-copy" aria-hidden="true"></i>
                                                <span>Pengelolaan Data Web</span>
                                            </a>
                                            <ul class="nav nav-children ">
                                                <li class="nav-link <?php echo $artikel; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/web_artikel">
                                                        Artikel
                                                    </a>
                                                </li>
                                                <li class="nav-link <?php echo $medsos; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/media_sosial">
                                                        Media Sosial
                                                    </a>
                                                </li>
                                                <li class="nav-link <?php echo $Galeri; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/galeri">
                                                        Gallery Kegiatan
                                                    </a>
                                                </li>
                                                <li class="nav-link <?php echo $dokumen; ?>">
                                                    <a href="<?php echo base_url(); ?>admin/dokumen">
                                                        Dokumen Public
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-link <?php echo $kotakmasuk; ?>">
                                            <a href="<?php echo base_url(); ?>admin/kotakpesan">
                                                <span class="pull-right label label-primary">182</span>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <span>Kotak Pesan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--            
                        <hr class="separator" />
            
                        <div class="sidebar-widget widget-tasks">
                            <div class="widget-header">
                                <h6>Projects</h6>
                                <div class="widget-toggle">+</div>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled m-none">
                                    <li><a href="#">JSOFT HTML5 Template</a></li>
                                    <li><a href="#">Tucson Template</a></li>
                                    <li><a href="#">JSOFT Admin</a></li>
                                </ul>
                            </div>
                        </div>
            
                        <hr class="separator" />
            
                        <div class="sidebar-widget widget-stats">

                            <div class="widget-header">
                                <h6>Company Stats</h6>
                                <div class="widget-toggle">+</div>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <span class="stats-title">Stat 1</span>
                                        <span class="stats-complete">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="stats-title">Stat 2</span>
                                        <span class="stats-complete">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="stats-title">Stat 3</span>
                                        <span class="stats-complete">2%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                <span class="sr-only">2% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
-->
                            </div>

                        </div>

                    </aside>
                    <!-- end: sidebar -->