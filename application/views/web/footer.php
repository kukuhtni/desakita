<?php foreach ($datadesa as $d) {
    $namadesa = $d['nama_desa'];
    $alamatkantor = $d['alamat_kantor'];
    $logo = $d['logo'];
    $email = $d['email_desa'];
    $tlp = $d['telepon'];
} ?>
<footer class="footer-area section-padding-80-0">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row align-items-baseline justify-content-between">
                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="<?php echo base_url('assets/octopus/assets/images/' . $logo); ?>" width="70%" alt=""></a>

                        <h4><?= $tlp; ?></h4>
                        <span><?= $email; ?></span>
                        <span><?= $alamatkantor; ?></span>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Berita Terbaru</h5>

                        <!-- Single Blog Area -->
                        <?php foreach ($artikelbaru as $data) : ?>
                            <div class="latest-blog-area">
                                <a href="<?= base_url('berita/detail_berita/' . $data['id']); ?>" class="post-title"><?= $data['judul']; ?></a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $data['tgl_upload']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Media Sosial</h5>

                        <!-- Footer Nav -->
                        <ul class="footer-nav">
                            <?php foreach ($mediasosial as $data) : ?>
                                <li><a href="<?= $data['link']; ?>"><img src="<?= base_url('assets/fp/mediasosial/' . $data['gambar']); ?>" alt="" height="50" width="50"> <?= $data['nama']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Kotak Pesan & Pengaduan</h5>
                        <span>Sampaikan Laporan Anda Kepada Instansi Perintah</span>
                        <div class="roberto-contact-form">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" name="message-name" class="form-control mb-30" placeholder="Nama Anda">
                                    </div>
                                    <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                        <input type="email" name="message-email" class="form-control mb-30" placeholder="Email Anda">
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                        <textarea name="message" class="form-control mb-30" placeholder="Subjek : Pengaduan/Tanya, Isi Pesan : ....."></textarea>
                                    </div>
                                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                        <button type="submit" class="btn roberto-btn mt-15">Send Message</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Made In<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?= base_url('homepage'); ?>/" target="_blank">CodePedia | Mahasiswa Unisbank</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Social Info -->
                    <div class="social-info">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>