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
            <div class="col-12 col-lg-8">
                <?php foreach ($berita as $data) : ?>
                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="<?= base_url('agenda/detail_berita/' . $data['id']); ?>"><img src="<?= base_url('assets/fp/artikel/' . $data['gambar1']); ?>" alt=""></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="<?= base_url('agenda/detail_berita/' . $data['id']); ?>" class="post-author"><?= $data['tgl_upload']; ?></a>
                                <a href="<?= base_url('agenda/detail_berita/' . $data['id']); ?>" class="post-tutorial"><?= $data['nama_kategori']; ?></a>
                            </div>
                            <!-- Post Title -->
                            <a href="<?= base_url('agenda/detail_berita/' . $data['id']); ?>" class="post-title"><?= $data['judul']; ?></a>
                            <p><?= substr($data['isi'], 0, 500); ?></p>
                            <a href="<?= base_url('agenda/detail_berita/' . $data['id']); ?>" class="btn continue-btn">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Pagination -->
                <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="roberto-sidebar-area pl-md-4">


                    <!-- Recent Post -->
                    <div class="single-widget-area mb-100">
                        <h4 class="widget-title mb-30">Recent News</h4>

                        <!-- Single Recent Post -->
                        <?php foreach ($recentberita as $data) : ?>
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?= base_url('assets/fp/artikel/' . $data['gambar1']); ?>" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="post-author"><?= $data['tgl_upload']; ?></a>
                                        <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="post-tutorial"><?= $data['nama_kategori']; ?></a>
                                    </div>
                                    <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="post-title"><?= $data['judul']; ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <!-- Popular Tags -->
                    <div class="single-widget-area mb-100 clearfix">
                        <h4 class="widget-title mb-30">Tags</h4>
                        <!-- Popular Tags -->
                        <ul class="popular-tags">
                            <li><a href="#">Bed,</a></li>
                            <li><a href="#">Hotel,</a></li>
                            <li><a href="#">Travel,</a></li>
                            <li><a href="#">Restaurant,</a></li>
                            <li><a href="#">Sport,</a></li>
                            <li><a href="#">Trip,</a></li>
                            <li><a href="#">Music,</a></li>
                            <li><a href="#">Holiday,</a></li>
                            <li><a href="#">Tourist,</a></li>
                            <li><a href="#">Foody,</a></li>
                            <li><a href="#">Resorts.</a></li>
                        </ul>
                    </div>

                    <!-- Instagram -->
                    <div class="single-widget-area mb-100 clearfix">
                        <h4 class="widget-title mb-30">Instagram</h4>
                        <!-- Instagram Feeds -->
                        <ul class="instagram-feeds">
                            <li><a href="#"><img src="img/bg-img/33.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/bg-img/34.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/bg-img/35.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/bg-img/36.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/bg-img/37.jpg" alt=""></a></li>
                            <li><a href="#"><img src="img/bg-img/38.jpg" alt=""></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->