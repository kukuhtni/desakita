<?php
if ($judul == 'Dashboard') {
    $dashboard = 'nav-active';
    $keluarga = '';
    $pengajuansurat = '';
    $verfikasi = '';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Keluarga') {
    $dashboard = '';
    $keluarga = 'nav-active nav-expanded';
    $pengajuansurat = '';
    $verfikasi = '';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Pengajuan Surat') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = 'nav-active';
    $verfikasi = '';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Verifikasi Pengajuan Surat') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = '';
    $verfikasi = 'nav-active';
    $kotakpesan = '';
    $arsipdata = '';
} elseif ($judul == 'Kotak Pesan') {
    $dashboard = '';
    $keluarga = '';
    $pengajuansurat = '';
    $verfikasi = '';
    $kotakpesan = 'nav-active';
    $arsipdata = '';
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
            <font color="white"> Navigation </font>
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
                            <i class="fa fa-users" aria-hidden=" true"></i>
                            <span>Data Keluarga</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?= $dtkeluarga; ?>">
                                <a href="<?php echo base_url(); ?>rtrw/dt_keluarga">
                                    <span>Data Keluarga</span>
                                </a>
                            </li>
                            <li class="<?= $dtlkeluarga; ?>">
                                <a href="<?php echo base_url(); ?>rtrw/detailkeluarga">
                                    <span>Detail Keluarga</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= $pengajuansurat; ?>">
                        <a href="<?php echo base_url(); ?>rtrw/pj_surat">
                            <i class="fa  fa-file-text" aria-hidden="true"></i>
                            <span>Pengajuan Surat</span>
                        </a>
                    </li>
                    <!-- <li class="<?= $verfikasi; ?>">
                        <a href="<?php echo base_url(); ?>rtrw/vp_surat">
                            <i class="fa  fa-fax" aria-hidden="true"></i>
                            <span>Verifikasi Pengajuan Surat</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa  fa-clipboard" aria-hidden="true"></i>
                            <span>Kegiatan RT / RW</span>
                        </a>
                    </li>
                    <li class="<?= $kotakpesan; ?>">
                        <a href="<?php echo base_url(); ?>rtrw/kotakpesan">
                            <span class="pull-right label label-primary">12</span>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Kotak Pesan</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

</aside>