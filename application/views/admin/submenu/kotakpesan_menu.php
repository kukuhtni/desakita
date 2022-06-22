<?php
if ($submenu == "Kotak Pesan") {
    $pd = "btn-primary";
    $rtrw = "";
} elseif ($submenu == "Layanan Pengaduan Eror") {
    $pd = "";
    $rtrw = "btn-primary";
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
            <a class="mb-xs mt-xs mr-xs btn <?= $pd;?> btn-block" href="<?php echo base_url(); ?>admin/kotakpesan">Kotak Pesan</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $rtrw;?> btn-block" href="<?php echo base_url(); ?>admin/kotakpesan/rtrw">Layanan Pengaduan Eror</a>
        </div>
    </section>
</div>