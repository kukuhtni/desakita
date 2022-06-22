<?php
if ($submenu == "Headline") {
    $tb = "btn-primary";
    $bk = "";
    $bl = "";
    $bd = "";
    $kd = "";
    $pd = "";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Berita Kriminal") {
    $tb = "";
    $bk = "btn-primary";
    $bl = "";
    $bd = "";
    $kd = "";
    $pd = "";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Berita Lokal") {
    $tb = "";
    $bk = "";
    $bl = "btn-primary";
    $bd = "";
    $kd = "";
    $pd = "";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Berita Desa") {
    $tb = "";
    $bk = "";
    $bl = "";
    $bd = "btn-primary";
    $kd = "";
    $pd = "";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Kegiatan Desa") {
    $tb = "";
    $bk = "";
    $bl = "";
    $bd = "";
    $kd = "btn-primary";
    $pd = "";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Produk Desa") {
    $tb = "";
    $bk = "";
    $bl = "";
    $bd = "";
    $kd = "";
    $pd = "btn-primary";
    $prd = "";
    $ld = "";
} elseif ($submenu == "Peraturan Desa") {
    $tb = "";
    $bk = "";
    $bl = "";
    $bd = "";
    $kd = "";
    $pd = "";
    $prd = "btn-primary";
    $ld = "";
} elseif ($submenu == "Laporan Desa") {
    $tb = "";
    $bk = "";
    $bl = "";
    $bd = "";
    $kd = "";
    $pd = "";
    $prd = "";
    $ld = "btn-primary";
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
            <a class="mb-xs mt-xs mr-xs btn <?= $tb; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel">Headline</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $bk; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/berita_kriminal">Berita Kriminal</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $bl; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/berita_lokal">Berita Lokal</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $bd; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/berita_desa">Berita Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $kd; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/kegiatan_desa">Kegiatan Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $pd; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/produk_desa">Produk Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $prd; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/peraturan_desa">Peraturan Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $ld; ?> btn-block" href="<?php echo base_url(); ?>admin/web_artikel/laporan_desa">Laporan Desa</a>
        </div>
    </section>
</div>