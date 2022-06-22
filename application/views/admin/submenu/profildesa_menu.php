<div class="col-md-3">
    <section class="panel panel-featured panel-featured-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Logo Desa</h2>
        </header>
        <div class="panel-body">
            <div class="panel-body panel-body-nopadding">
                <div class="owl-carousel mb-md" data-plugin-carousel data-plugin-options='{ "items": 1, "autoHeight": true }'>
                    <?php
                    foreach ($logo as $data) {
                        $logo = $data['logo'];
                        $icon = $data['icon_logo'];
                    }
                    ?>
                    <div class="item">
                        <img alt="" class="img-responsive img-rounded" src="<?php echo base_url(); ?>assets/octopus/assets/images/<?= $logo; ?>">
                    </div>

                </div>
                <div class="p-md">
                    <p>Fomart Logo : PNG [200x200]</p>
                </div>
            </div>
        </div>
        <div class="panel-footer panel-footer-btn-group text-center">
            <a href="#modallogo" class="mb-xs mt-xs mr-xs modal-with-zoom-anim"><i class="fa fa-pencil mr-xs"></i> Edit</a>
        </div>
        <div class="panel-body">
            <div class="panel-body panel-body-nopadding">
                <div class="owl-carousel mb-md justify-content-center" data-plugin-carousel data-plugin-options='{ "items": 1, "autoHeight": true }'>
                    <div class="item ">
                        <img alt="" class="img-responsive img-rounded " src="<?php echo base_url(); ?>assets/octopus/assets/images/<?= $icon; ?>">
                    </div>
                </div>
                <div class="p-md">
                    <p>Fomart Logo : PNG [200x200]</p>
                </div>
            </div>
        </div>
        <div class="panel-footer panel-footer-btn-group text-center">
            <a href="#modallogo" class="mb-xs mt-xs mr-xs modal-with-zoom-anim"><i class="fa fa-pencil mr-xs"></i> Edit</a>
        </div>
    </section>
    <section class="panel panel-featured panel-featured-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Deskripsi Desa</h2>
        </header>
        <?php
        foreach ($deskripsi as $data) {
            ?>
            <div class="panel-body">
                <div class="panel-body panel-body-nopadding">
                    <div class="toggle" data-plugin-toggle>
                        <section class="toggle active">
                            <label>Sejarah</label>
                            <p><?= $data['sejarah']; ?></p>
                        </section>
                        <section class="toggle">
                            <label>Visi</label>
                            <p><?= $data['visi']; ?></p>
                        </section>
                        <section class="toggle">
                            <label>Misi</label>
                            <p><?= $data['misi']; ?></p>
                        </section>
                    </div>
                </div>
            </div>
        <?php
    } ?>
        <div class="panel-footer panel-footer-btn-group text-center">
            <a href="#modaldeskrip" class="mb-xs mt-xs mr-xs modal-with-zoom-anim"><i class="fa fa-pencil mr-xs"></i> Edit</a>
        </div>
</div>
</section>
<div id="modallogo" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Logo Desa</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <p>Are you sure that you want to delete this image?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm">Simpan</button>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
    </section>
</div>
<?php
foreach ($deskripsi as $data) {
    $id = $data['id'];
    $sejarah = $data['sejarah'];
    $visi = $data['visi'];
    $misi = $data['misi'];
}
?>
<div id="modaldeskrip" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Deskripsi Desa</h2>
        </header>
        <div class="panel-body">
            <form class="form-horizontal form-nobordered" action="<?= base_url('admin/profildesa'); ?>/updatedeskrip" method="POST">

                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Sejarah Desa</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" id="sejarah" name="sejarah"><?= $sejarah; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Visi Desa</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" id="visi" name="visi"><?= $visi; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="">Misi Desa</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" id="misi" name="misi"><?= $misi; ?></textarea>
                    </div>
                </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button class="btn btn-default modal-dismiss">Batal</button>
                </div>
            </div>
        </footer>
        </form>
    </section>
</div>
</div>