<?php
if ($judul == 'Dashboard') {
    $dashboard = 'nav-active';
    $keluarga = '';
    $pengajuansurat = '';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Keluarga') {
    $dashboard = '';
    $keluarga = 'nav-active nav-expanded';
    $pengajuansurat = '';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Pengajuan Surat') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = 'nav-active';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Kotak Pesan') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = '';
    $kotakpesan = 'nav-active';
    $arsipdata = '';
} elseif ($judul == 'Arsip Data') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = '';
    $kotakpesan = '';
    $arsipdata = 'nav-active';
}
?>

<?php
if ($subjudul == "Data Keluarga") {
    $dtkeluarga = 'nav-active';
    $dtlkeluarga = '';
} elseif ($subjudul == "Detail Keluarga") {
    $dtkeluarga = '';
    $dtlkeluarga = 'nav-active';
} elseif ($subjudul == "") {
    $dtkeluarga = '';
    $dtlkeluarga = '';
}
?>


<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            <font color="white">Navigasi</font>
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="<?= $dashboard; ?>">
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-parent <?= $keluarga; ?>">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Keluarga</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?= $dtkeluarga; ?>">
                                <a href="<?php echo base_url(); ?>kk/datakeluarga">
                                    Data Keluarga
                                </a>
                            </li>
                            <li class="<?= $dtlkeluarga; ?>">
                                <a href="<?php echo base_url(); ?>kk/detailkeluarga">
                                    Detail Keluarga
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="<?= $pengajuansurat; ?>">
                        <a href="<?php echo base_url(); ?>kk/pengajuansurat">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <span>Pengajuan Surat</span>
                        </a>
                    </li>
                    <li class="<?= $kotakpesan; ?>">
                        <a href="<?php echo base_url(); ?>kk/kotakpesan">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Kotak Pesan</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

</aside>
<!-- end: sidebar -->