<?php

?>
<div class="col-md-3">
    <section class="panel panel-featured panel-featured-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Album</h2>
        </header>
        <div class="panel-body">
            <?php foreach ($list_album as $data) :
                if ($nama_album == $data['nama_album']) {
                    $aktif = "btn-primary";
                } else {
                    $aktif = "";
                }
                ?>
                <a class="mb-xs mt-xs mr-xs <?= $aktif; ?> btn btn-block" href="<?php echo base_url('admin/galeri/index/' . $data['id']); ?>"><?= $data['nama_album']; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="panel-footer panel-footer-btn-group">
            <a href="#"><i class="fa fa-upload mr-xs"></i> Tambah</a>
            <a href="#"><i class="fa fa-times mr-xs"></i> Hapus</a>
        </div>
    </section>
</div>