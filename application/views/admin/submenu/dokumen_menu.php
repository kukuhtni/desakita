<?php
if ($submenu == "Peraturan Desa") {
    $fb = "btn-primary";
    $tw = "";
    
} elseif ($submenu == "Peraturan Pusat") {
    $fb = "";
    $tw = "btn-primary";
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
            <a class="mb-xs mt-xs mr-xs btn <?= $fb; ?> btn-block" href="<?php echo base_url(); ?>admin/dokumen">Peraturan Desa</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $tw; ?> btn-block" href="<?php echo base_url(); ?>admin/dokumen/perpusat">Peraturan Pusat</a>
        </div>
    </section>
</div>