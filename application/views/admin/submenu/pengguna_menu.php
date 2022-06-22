<?php
if ($submenu == "Perangkat Desa") {
    $pd = "btn-primary";
    $rw = "";
    $rt = "";
    $kk = "";
} elseif ($submenu == "RW") {
    $pd = "";
    $rw = "btn-primary";
    $rt = "";
    $kk = "";
} elseif ($submenu == "RT") {
    $pd = "";
    $rw = "";
    $rt = "btn-primary";
    $kk = "";
} elseif ($submenu == "Kepala Keluarga") {
    $pd = "";
    $rw = "";
    $rt = "";
    $kk = "btn-primary";
}
?>
<div class="col-md-3">
    <section class="panel panel-featured panel-featured-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Kategori</h2>
        </header>
        <div class="panel-body">
            <a class="mb-xs mt-xs mr-xs btn <?= $pd; ?> btn-block" href="<?php echo base_url(); ?>admin/pengguna">Perangkat Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $rw; ?> btn-block" href="<?php echo base_url(); ?>admin/pengguna/rw">RW</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $rt; ?> btn-block" href="<?php echo base_url(); ?>admin/pengguna/rt">RT</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $kk; ?> btn-block" href="<?php echo base_url(); ?>admin/pengguna/kepala_keluarga">Kepala Keluarga</a>
        </div>
    </section>
</div>