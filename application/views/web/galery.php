<!-- Breadcrumb Area Start -->
<?php foreach ($artikelbaru as $data) {
    $gambar = $data['gambar1'];
} ?>
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?= base_url('assets/fp/artikel/' . $gambar); ?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"><?= $judul; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url('homepage'); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $subjudul; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- About Us Area Start -->
<section class="google-maps-contact-info">
    <div class="container-fluid">
        <div class="google-maps-contact-content">
            <div class="row">
                <div class="gal">
                    <?php foreach ($galeri as $data) : ?>
                        <img src="<?= base_url('assets/fp/galeri/' . $data['gambar']); ?>" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>