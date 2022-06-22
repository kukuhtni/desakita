<?php foreach ($datadesa as $d) {
    $namadesa = $d['nama_desa'];
    $alamatkantor = $d['alamat_kantor'];
    $logo = $d['logo'];
    $email = $d['email_desa'];
    $tlp = $d['telepon'];
    $kepaladesa = $d['nama_kepala_desa'];
} ?>
<?php foreach ($ket_desa as $d) {
    $sejarah = $d['sejarah'];
    $visi = $d['visi'];
    $misi = $d['misi'];
    $g1 = $d['g1'];
    $g2 = $d['g2'];
    $g3 = $d['g3'];
} ?>
<!-- Welcome Area Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <?php foreach ($headline as $data) : ?>
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?= base_url('assets/fp/artikel/' . $data['gambar1']); ?>);" data-img-url="img/bg-img/16.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms"><?= $data['nama_kategori']; ?></h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms"><?= $data['judul']; ?></h2>
                                    <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Welcome Area End -->

<!-- About Us Area Start -->
<section class="roberto-about-area section-padding-100-0">
    <!-- Hotel Search Form Area -->

    <!-- <div class="hotel-search-form-area">
        <div class="container-fluid">
            <div class="row text-center align-items-end">
                <div class="col-6 col-md-2 col-lg-3">
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class="fa fa-instagram fa-3x"></i>
                    </div>
                </div>
                <div class="col-6 col-md-2 col-lg-3">
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <i class="fa fa-facebook fa-3x"></i>
                    </div>
                </div>
                <div class="col-6 col-md-2 col-lg-3">
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/peace-35-827704.png" alt="">
                        <h5>Tentram</h5>
                    </div>
                </div>
                <div class="col-6 col-md-2 col-lg-3">
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/justice-1408539-1191359.png" alt="">
                        <h5>Adil</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6>Tentang Kami</h6>
                    <h2>Selamat Datang <br>Website Kelurahan <?= $namadesa; ?></h2>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms"><?= $sejarah; ?></h5>
                    <p class="wow fadeInUp" data-wow-delay="400ms">Kepala Desa: <span><?= $kepaladesa; ?></span></p>
                    <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="<?= base_url('assets/fp/galeri/' . $g1); ?>" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="<?= base_url('assets/fp/galeri/' . $g2); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="<?= base_url('assets/fp/galeri/' . $g3); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->

<!-- Our Room Area Start -->
<section class="roberto-rooms-area">
    <h1 class="text-center">Portal Berita</h1>
    <div class="rooms-slides owl-carousel">
        <!-- Single Room Slide -->
        <?php foreach ($portalberita as $data) : ?>
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(<?= base_url('assets/fp/artikel/' . $data['gambar1']); ?>)"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?= $data['judul']; ?></h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms"><?= $data['nama_kategori']; ?></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    </ul> <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Baca Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Our Room Area End -->

<!-- Testimonials Area Start -->

<section class="roberto-testimonials-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="testimonial-thumbnail owl-carousel mb-100">
                    <?php foreach ($testimonial as $data) : ?>
                        <img src="<?= base_url('assets/fp/' . $data['foto']); ?>" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h6>Testimonials</h6>
                    <h2>Our Guests Love Us</h2>
                </div>
                <!-- Testimonial Slide -->
                <div class="testimonial-slides owl-carousel mb-100">
                    <?php foreach ($testimonial as $data) : ?>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5><?= $data['testi']; ?></h5>
                            <div class="rating-title">
                                <!-- <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div> -->
                                <h6><?= $data['nama']; ?> <span>- Develop Bag. <?= $data['role']; ?></span></h6>
                                <h6>Email <span>- <?= $data['email']; ?></span></h6>
                                <h6>CP. <span>- <?= $data['no_telepon']; ?></span></h6>
                                <h6>NIM. <span>- <?= $data['nik']; ?></span></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Area End -->

<!-- Projects Area Start -->
<section class="roberto-project-area">
    <!-- Projects Slide -->
    <div class="projects-slides owl-carousel">
        <?php foreach ($album as $data) : ?>
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(<?= base_url('assets/fp/galeri/' . $data['gambar']); ?>);">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6><?= $data['nama_album']; ?></h6>
                        <h5><?= $data['tanggal']; ?></h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6><?= $data['nama_album']; ?></h6>
                        <h5><?= $data['tanggal']; ?></h5>
                        <p><?= $data['ket']; ?></p>
                    </div>
                    <a href="<?= base_url('galery'); ?>" class="btn project-btn">Cek Selengkapnya <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- Projects Area End -->

<!-- Blog Area Start -->



<!-- Call To Action Area End -->

<!-- Partner Area Start -->
<div class="partner-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                    <!-- Single Partner Logo -->
                    <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Area End -->