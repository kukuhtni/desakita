<?php
if ($submenu == "Facebook") {
    $fb = "btn-primary";
    $tw = "";
    $gg = "";
    $yt = "";
    $ig = "";
} elseif ($submenu == "Twitter") {
    $fb = "";
    $tw = "btn-primary";
    $gg = "";
    $yt = "";
    $ig = "";
} elseif ($submenu == "Google") {
    $fb = "";
    $tw = "";
    $gg = "btn-primary";
    $yt = "";
    $ig = "";
} elseif ($submenu == "Youtube") {
    $fb = "";
    $tw = "";
    $gg = "";
    $yt = "btn-primary";
    $ig = "";
} elseif ($submenu == "Instagram") {
    $fb = "";
    $tw = "";
    $gg = "";
    $yt = "";
    $ig = "btn-primary";
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
            <a class="mb-xs mt-xs mr-xs btn <?= $fb; ?> btn-block" href="<?php echo base_url(); ?>admin/media_sosial">Facebook</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $tw; ?> btn-block" href="<?php echo base_url(); ?>admin/media_sosial/twitter">Twitter</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $gg; ?> btn-block" href="<?php echo base_url(); ?>admin/media_sosial/google">Google</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $yt; ?> btn-block" href="<?php echo base_url(); ?>admin/media_sosial/youtube">Youtube</a>
            <a class="mb-xs mt-xs mr-xs btn <?= $ig; ?> btn-block" href="<?php echo base_url(); ?>admin/media_sosial/instagram">Instagram</a>
        </div>
    </section>
</div>