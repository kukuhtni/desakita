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

<!-- Blog Area Start -->
<div class="roberto-news-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <?php foreach ($berita as $data) : ?>
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="<?= base_url('assets/fp/artikel/' . $data['gambar1']) ?>" alt="">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <?php echo $data['isi'] ?>

                        <!-- Blockquote -->
                        <!-- <blockquote class="roberto-blockquote d-flex">
                            <div class="icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <div class="text">
                                <h5>“Before you took that first cruise, your thoughts about cruise ships and cruise vacations consisted of flashbacks to Love Boat re-runs. Cruising was all about sunny, tropical destinations like Bermuda”</h5>
                            </div>
                        </blockquote>

                        <p>The city of southern California, san diego is locally known as ‘America’s Finest City’. It’s located on San Diego Bay, an inlet of the Pacific Ocean near the Mexican border. San Diego is the second largest city in California and the seventh largest in the United States. It is also nicknamed as ‘America’s biggest small town’.</p> -->
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->