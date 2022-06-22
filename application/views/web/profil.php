<!-- Breadcrumb Area Start -->
<?php foreach ($artikelbaru as $data) {
    $gambar = $data['gambar1'];
} ?>
<?php foreach ($datadesa as $d) {
    $namadesa = $d['nama_desa'];
    $alamatkantor = $d['alamat_kantor'];
    $logo = $d['logo'];
    $email = $d['email_desa'];
    $tlp = $d['telepon'];
    $kepaladesa = $d['nama_kepala_desa'];
    $provinsi = $d['nama_propinsi'];
} ?>
<?php foreach ($ket_desa as $d) {
    $sejarah = $d['sejarah'];
    $visi = $d['visi'];
    $misi = $d['misi'];
    $g1 = $d['g1'];
    $g2 = $d['g2'];
    $g3 = $d['g3'];
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
<?php if ($judul == "Sejarah Desa" || $judul == "Visi & Misi") : ?>
    <section class="roberto-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <?php if ($judul == "Sejarah Desa") : ?>
                            <img src="<?= base_url('assets/fp/galeri/' . $g1); ?>" alt="">
                        <?php elseif ($judul == "Visi & Misi") : ?>
                            <img src="<?= base_url('assets/fp/galeri/' . $g2); ?>" alt="">
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h2><?= $judul; ?></h2>
                        <h6><?= $namadesa; ?> / <?= $provinsi; ?></h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <?php if ($judul == "Sejarah Desa") : ?>
                            <p class="text-justify"><?= $sejarah; ?></p>
                            <img src="img/core-img/signature.png" alt="">
                            <p class="wow fadeInUp" data-wow-delay="400ms">Kepala Desa: <span><?= $kepaladesa; ?></span></p>
                        <?php elseif ($judul == "Visi & Misi") : ?>
                            <h6>Visi : </h6>
                            <p class="text-justify"><?= $visi; ?></p>
                            <h6>Misi : </h6>
                            <p class="text-justify"><?= $misi; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php elseif ($judul == "Struktur Pemerintahan Desa") : ?>
    <section class="roberto-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h2><?= $judul; ?></h2>
                        <h6><?= $namadesa; ?> / <?= $provinsi; ?></h6>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th class="text-center">No</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Pendidikan Terakhir</th>
                        <th class="text-center">Jabatan</th>
                        <th class="text-center">Masa Periode Jabatan</th>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($aparatur as $data) : ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-center"><img width="100" height="200" src="<?= base_url('assets/fp/aparatur'); ?>/<?= $data['foto']; ?>" alt="">
                                </td>
                                <td><?= $data['aparatur_nama']; ?></td>
                                <td><?= $data['aparatur_pendidikan']; ?></td>
                                <td><?= $data['jabatan']; ?></td>
                                <td><?= $data['aparatur_masajab']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php elseif ($judul == "Peta Wilayah Desa") : ?>
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>No Telepon</h4>
                            <p><?= $tlp; ?></p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Alamat Kantor</h4>
                            <p><?= $alamatkantor; ?></p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Pelayanan : </h4>
                            <p>Senin - Jumat Pukul 08:00 - 16:00 & Sabtu Pukul 08:00 - 14:00 </p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p><?= $email; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.395161998756!2d110.39994912204595!3d-6.985991780597563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b487149ea23%3A0xdf6b256c5e78718f!2sBulustalan%2C+Kec.+Semarang+Sel.%2C+Kota+Semarang%2C+Jawa+Tengah%2C+Indonesia!5e0!3m2!1sid!2sbd!4v1563960705024!5m2!1sid!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- About Us Area End -->

<!-- Video Area Start -->

<!-- Video Area End -->

<!-- Service Area Start -->

<!-- Service Area End -->

<!-- Call To Action Area Start -->

<!-- Call To Action Area End -->

<!-- Partner Area Start -->

<!-- Partner Area End -->