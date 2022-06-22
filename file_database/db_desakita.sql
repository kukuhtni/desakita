-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2019 pada 05.32
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desakita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_penduduk`
--

CREATE TABLE `log_penduduk` (
  `id` int(10) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `id_detail` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tgl_peristiwa` date NOT NULL,
  `catatan` text,
  `no_kk` decimal(16,0) DEFAULT NULL,
  `nama_kk` varchar(100) DEFAULT NULL,
  `ref_pindah` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_sosial`
--

CREATE TABLE `media_sosial` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `media_sosial`
--

INSERT INTO `media_sosial` (`id`, `gambar`, `link`, `nama`, `enabled`) VALUES
(1, 'facebook.png', '', 'Facebook', 1),
(2, 'twitter.png', '', 'Twitter', 1),
(3, 'youtube.png', '', 'YouTube', 1),
(4, 'instagram.png', '', 'Instagram', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk_miskin`
--

CREATE TABLE `penduduk_miskin` (
  `id_pen` int(15) NOT NULL,
  `no_kk` varchar(15) NOT NULL,
  `n_kpl_keluarga` text NOT NULL,
  `nama` varchar(25) NOT NULL,
  `raskin` text NOT NULL,
  `jamkesmas` int(15) NOT NULL,
  `pkh` varchar(12) NOT NULL,
  `s_ekonomi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk_miskin`
--

INSERT INTO `penduduk_miskin` (`id_pen`, `no_kk`, `n_kpl_keluarga`, `nama`, `raskin`, `jamkesmas`, `pkh`, `s_ekonomi`) VALUES
(12313, '12312313', '3213131', 'Mimo', 'ya', 11111, 'tidak', 'kaya raya '),
(1231231, '23232123', '123123', 'ferguso', 'tidak', 1231313, 'tidak', 'kaya sanga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_miskin`
--

CREATE TABLE `siswa_miskin` (
  `id_siswa` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `bsm` text NOT NULL,
  `s_ekonomi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa_miskin`
--

INSERT INTO `siswa_miskin` (`id_siswa`, `no_kk`, `nik`, `nama`, `pendidikan`, `bsm`, `s_ekonomi`) VALUES
('1234', '321', '1111', 'diendra', 'sma', 'ya', 'miskin'),
('3432', '234324', '23432432', 'gergerger', 'regerg', 'ergerg', 'gerger'),
('4324324', '2342432423', '23432432', 'dswfswdfsf', 'ewfewfws', 'fdsfsdf', 'fsdfsdfsdf'),
('34324', '342432432', '32432432', 'frefe', 'fretfertfeertf', 'ergergfe', 'egerger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(50) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`id`, `nama_album`, `ket`, `tanggal`) VALUES
(1, 'Kordinasi Lurah dan LPMK', 'I focus a lot on helping the first time or inexperienced traveler head out prepared and confident', '2019-07-19'),
(2, 'Pelantikan dan Pembekalan', 'I focus a lot on helping the first time or inexperienced traveler head out prepared and confident', '2019-07-20'),
(3, 'Penyuluhan HIV AIDS', 'I focus a lot on helping the first time or inexperienced traveler head out prepared and confident', '2019-07-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album_galeri`
--

CREATE TABLE `tb_album_galeri` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_album_galeri`
--

INSERT INTO `tb_album_galeri` (`id`, `album_id`, `gambar`) VALUES
(1, 1, 'keg1.jpeg'),
(2, 1, 'keg2.jpeg'),
(3, 2, 'keg3.jpeg'),
(4, 3, 'keg4.jpeg'),
(5, 2, 'keg5.jpeg'),
(6, 1, 'keg6.jpeg'),
(7, 2, 'keg7.jpeg'),
(8, 3, 'keg8.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aparatur`
--

CREATE TABLE `tb_aparatur` (
  `aparatur_id` int(5) NOT NULL,
  `aparatur_nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_nip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_nik` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `aparatur_status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_tgl_terdaftar` date DEFAULT NULL,
  `aparatur_ttd` tinyint(1) DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_pend` int(11) DEFAULT NULL,
  `aparatur_tempatlahir` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_tanggallahir` date DEFAULT NULL,
  `aparatur_sex` tinyint(4) DEFAULT NULL,
  `aparatur_pendidikan` int(10) DEFAULT NULL,
  `aparatur_agama` int(10) DEFAULT NULL,
  `aparatur_nosk` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_tglsk` date DEFAULT NULL,
  `aparatur_masajab` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urut` int(5) DEFAULT NULL,
  `aparatur_niap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_pangkat` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_nohenti` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aparatur_tglhenti` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_aparatur`
--

INSERT INTO `tb_aparatur` (`aparatur_id`, `aparatur_nama`, `aparatur_nip`, `aparatur_nik`, `jabatan`, `aparatur_status`, `aparatur_tgl_terdaftar`, `aparatur_ttd`, `foto`, `id_pend`, `aparatur_tempatlahir`, `aparatur_tanggallahir`, `aparatur_sex`, `aparatur_pendidikan`, `aparatur_agama`, `aparatur_nosk`, `aparatur_tglsk`, `aparatur_masajab`, `urut`, `aparatur_niap`, `aparatur_pangkat`, `aparatur_nohenti`, `aparatur_tglhenti`) VALUES
(14, 'MURSIDIN', '', '5201142204966994', 'Kepala Desa', '1', '2014-04-20', 1, '1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'HERMAN', '197905062010011007', '5201140305936994 	', 'Sekretaris Desa', '1', '2016-08-23', NULL, '2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'IDA BAGUS MAS BUJANA', '-', '5201143112707040', 'Kaur Pemerintahan ', '1', '2016-08-23', NULL, '3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'MARSUNIN YOGA PRATAMA', '-', '5201143112677056', 'Kaur Umum ', '1', '2016-08-23', NULL, '4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'RAISHA MAULIDYA', '-', '5201144701156995', 'Kaur Keuangan', '1', '2016-08-23', NULL, '5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'NI KOMANG PONIASIH', '-', '5201146206126994', 'Kaur Pembangunan ', '1', '2016-08-23', NULL, '6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'MUHAMAD KABIR', '', '5201140107917031', 'Kaur Keamanan dan Ketertiban', '1', '2016-08-23', NULL, '7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL, 
  `gambar` varchar(200) NOT NULL,
  `gambar1` varchar(200) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `gambar3` varchar(200) NOT NULL,
  `headline` int(1) NOT NULL DEFAULT '0',
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `gambar`, `isi`, `enabled`, `tgl_upload`, `id_kategori`, `id_user`, `judul`, `headline`, `gambar1`, `gambar2`, `gambar3`, `dokumen`, `link_dokumen`, `urut`, `jenis_widget`, `boleh_komentar`) VALUES
(7, '', '<p><strong>Awal mula SID</strong><br /> \"Awalnya ada keinginan dari pemerintah Desa Balerante yang berharap pelayanan pemerintah desa bisa seperti pengunjung rumah sakit yang ingin mencari data pasien rawat inap, tinggal ketik nama di komputer, maka data tersebut akan keluar\"<br /> (Mart Widarto, pengelola Program Lumbung Komunitas)<br /> Program ini mulai dibuat dari awal 2006: <br /> 1. (2006) komunitas melakukan komunikasi dan diskusi lepas tentang sebuah sistem yang bisa digunakan untuk menyimpan data.<br /> 2. (2008) Rangkaian FDG dengan pemerintah desa membahas tentang tata kelola pendokumentasian di desa<br /> 3. (2009) Ujicoba SID yang sudah dikembangkan di balerante<br /> 4. (2009-2010) Membangun SID (aplikasi) dibeberapa desa yang lain: terong (bantul), Nglegi (Gunungkidul) <br /> 5. (2011) Kandangan (Temanggung) Gilangharjo (bantul) Girikarto (gunungkidul) Talun (klaten) Pager Gunung (magelang) <br /> 6. hingga saat ini 2013 sudah banyak desa pengguna SID.<br /> <br /> <strong>SID sebagai tanggapan atas kebutuhan:</strong><br /> Kalau dulu untuk mencari data penduduk menurut kelompok umur saja kesulitan karena tidak mempunyai databasenya. Dengan adanya SID menjadi lebih mudah.<br /> (Nuryanto, Kabag Pelayanan Pemdes Terong)<br /> <br /> Membangun sebuah sistem bukan hanya membuatkan software dan meninggalkan begitu saja, namun ada upaya untuk memadukan sistem dengan kebutuhan yang ada pada desa. sehingga software dapat memenuhi kebutuhan yang telah ada bukan memaksakan desa untuk mengikuti dan berpindah sistem. inilah yang melatari combine melaksanakan alur pengaplikasian software.<br /> 1. Bentuk tim kerja bersama pemerintah desa<br /> 2. Diskusikan basis data apa saja yang diperlukan untuk warga<br /> 3. Himpun data kependudukan warga dari Kartu Keluarga (KK)<br /> 4. Daftarkan proyek SID dan dapatkan aplikasi softwarenya di http://abcd.lumbungkomunitas.net<br /> 5. Install aplikasi software SID di komputer desa<br /> 6. Entry data penduduk ke SID<br /> 7. Basis data kependudukan sudah bisa dimanfaatkan<br /> 8. Diskusikan rencana pengembangan SID sesuai kebutuhan desa<br /> 9. Sebarluaskan informasi desa melalui beragam media untuk warga<br /> <br /> Pemberdayaan data desa yang dibangun diharapkan dapat menjunjung kesejahteraan masyarakat desa, data-data tersebut dapat diperuntukkan untuk riset lebih lanjut tentang kemiskinan, tanggap bencana, sumberdaya desa yang bisa diekspose keluar dan dengan menghubungkan dari desa ke desa dapat mencontohkan banyak hal dalam keberhasilan pemberdayaannya.<br /> (sumber: Buku Sistem Informasi Desa) <br /> <strong><br /></strong></p>', 1, '2013-03-31 13:31:04', 1, 1, 'Awal mula SID', 0, '', '', '', '', '', NULL, 3, 1),
(32, '', '<div class=\"contentText\">\r\n<div align=\"justify\">Bagian ini berisi informasi dasar mengenai desa kami. Sila klik pada tautan berikut untuk mendapatkan informasi yang lebih rinci.</div>\r\n<div align=\"justify\">&nbsp;</div>\r\n<div align=\"justify\"><ol>\r\n<li>Sejarah Desa</li>\r\n<li>Profil Wilayah Desa</li>\r\n<li>Profil Masyarakat Desa</li>\r\n<li>Profil Potensi Desa</li>\r\n</ol></div>\r\n</div>', 1, '2013-07-29 10:46:44', 1, 1, 'Profil Desa', 0, '', '', '', '', '', NULL, 3, 1),
(34, '', '<p style=\"text-align: justify;\"><span style=\"color: #ff0000;\"><strong>Contoh (Sila edit halaman ini sesuai dengan deskripsi desa ini)!</strong></span></p>\r\n<p style=\"text-align: justify;\">Berdasarkan data desa pada bulan Februari 2010, jumlah penduduk Desa Terong sebanyak 6484 orang. Jumlah Kepala Keluarga (KK) sebanyak 1605 KK.</p>\r\n<p style=\"text-align: justify;\">Jumlah penduduk Desa Terong usia produktif pada tahun 2009 adalah 4746 orang. Jumlah angkatan kerja tersebut jika dilihat berdasarkan tingkat pendidikannya adalah sebagai berikut:</p>\r\n<table style=\"width: 100%;\" border=\"1\" cellspacing=\"0\" cellpadding=\"4\">\r\n<tbody>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\"><strong>No.</strong></p>\r\n</td>\r\n<td style=\"width: 42%;\">\r\n<p style=\"text-align: center;\"><strong>Angkatan Kerja</strong></p>\r\n</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\"><strong>L</strong></p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\"><strong>P</strong></p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\"><strong>Jumlah</strong></p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">1</p>\r\n</td>\r\n<td style=\"width: 42%;\">Tidak Tamat SD</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">59</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">56</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">115</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">2</p>\r\n</td>\r\n<td style=\"width: 42%;\">SD</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">880</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">792</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">1672</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">3</p>\r\n</td>\r\n<td style=\"width: 42%;\">SLTP</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">813</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">683</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">1496</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">4</p>\r\n</td>\r\n<td style=\"width: 42%;\">SLTA</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">725</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">673</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">1398</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">5</p>\r\n</td>\r\n<td style=\"width: 42%;\">Akademi</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">13</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">11</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">24</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 8%;\">\r\n<p style=\"text-align: center;\">6</p>\r\n</td>\r\n<td style=\"width: 42%;\">Perguruan Tinggi</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">23</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">18</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">41</p>\r\n</td>\r\n</tr>\r\n<tr valign=\"top\">\r\n<td style=\"width: 50%;\" colspan=\"2\">\r\n<p style=\"text-align: center;\">Jumlah Total</p>\r\n</td>\r\n<td style=\"width: 17%;\">\r\n<p style=\"text-align: center;\">2513</p>\r\n</td>\r\n<td style=\"width: 18%;\">\r\n<p style=\"text-align: center;\">2233</p>\r\n</td>\r\n<td style=\"width: 15%;\">\r\n<p style=\"text-align: center;\">4746</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Profil sosial masyarakat</strong></p>\r\n<p style=\"text-align: justify;\">Dalam aktivitas keseharian, masyarakat Desa Terong sangat taat dalam menjalankan ibadah keagamaan. Setiap Rukung Tetangga (RT) dan pedukuhan memiliki kelompok-kelompok pengajian. Pada peringatan hari besar Islam, penduduk Desa Terong kerap menggelar acara peringatan dan karnaval budaya dengan tema yang disesuaikan dengan hari besar keagamaan. Sebagian besar warga Desa Terong terafiliasi pada organisasi kemasyarakat Islam Muhammadiyah.</p>\r\n<p style=\"text-align: justify;\">Gelaran perayaan lain selalu dilakukan dalam rangka memperingati Hari Kemerdekaan Republik Indonesia. Setiap pedukuhan akan turut serta dan semangat menampilkan ciri khasnya dalam acara peringatan dan karnaval budaya.</p>\r\n<p style=\"text-align: justify;\">Kelompok pemuda di Desa Terong yang tergabung dalam kelompok pegiat Karang Taruna menjadi aktor utama dalam banyak kegiatan desa. Kelompok ini aktif menggelar program kegiatan untuk isu demokrasi kepada warga, penguatan ekonomi produktif, pelatihan penanggulangan bencana, dan kampanye Gerakan Remaja Sayang Ibu (GEMAS).</p>\r\n<p style=\"text-align: justify;\">Sejumlah penduduk Desa Terong bekerja merantau di daerah di luar Yogyakarta. Namun, ikatan sosial mereka terhadap tanah kelahiran tetap tinggi. Penduduk asli Desa Terong yang tinggal di Jakarta dan sekitarnya misalnya, mereka membentuk paguyuban untuk memelihara silaturahmi antar sesama warga perantauan. Setiap bulan diadakan kegiatan arisan keliling secara bergilir di setiap tempat anggotanya. Setiap dua tahun sekali diadakan pula kegiatan mudik bersama ke kampung halaman di Desa Terong</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Profil politik masyarakat</strong></p>\r\n<p style=\"text-align: justify;\">Warga Desa Terong dikenal sebagai kelompok masyarakat yang paling aktif dan memiliki potensi tertinggi untuk berpartisipasi dalam pemberian suara untuk Pemilihan Umum dan Pemilihan Kepala Daerah Langsung. Tingkat partisipasi warga di desa ini terbanyak jika dibandingkan dengan desa lain di Kecamatan Dlingo, Bantul.</p>\r\n<p style=\"text-align: justify;\">Warga Desa Terong sangat aktif dalam mengawal proses penyusunan Rancangan Undang-Undang (RUU) Keistimewaan Yogyakarta. Banyak warga Desa Terong yang tergabung dalam Gerakan Rakyat Yogyakarta (GRY) dan aktif dalam beragam kegiatan serta demontrasi mendukung penetapan keistimewaan Yogyakarta. Kepala Desa Terong Sudirman Alfian merupakan Ketua Paguyuban Lurah dan Pamong Desa Ing Sedya Memetri Asrining Yogyakarta (ISMAYA) se Daerah Istimewa Yogyakarta (DIY). Beliau ditunjuk pula sebagai anggota tim perumus RUU Keistimewaan Yogyakarta bersi masyarakat Yogyakarta. Salah satu hal yang diperjuangkan dalam RUU tersebut adalah tidak adanya pelaksanaan pemilihan kepala daerah langsung dalam pemilihan Gubernur DIY; dengan mempertahankan konsep dwi tunggal Sri Sultan Hamengku Buwono dan Paku Alam sebagai Gubernur dan Wakil Bubernur DIY.</p>\r\n<p style=\"text-align: justify;\">Permasalahan mendasar yang ada di Desa Terong adalah tidak imbangnya jumlah pencari kerja dengan jumlah lapangan kerja yang tersedia. Sekalipun jumlah pengangguran di Desa Terong pada Tahun 2009 hanya orang tetapi kebanyakan mereka bekerja di luar Desa. Jadi, perlu gerakan kembali ke Desa serta menarik sumber-sumber ekonomi ke desa agar pencari kerja tidak banyak tersedot ke luar Desa.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Sumber:<br />Laporan Pertanggung Jawaban Lurah Desa Terong, Kecamatan Dlingo, Kabupaten Bantul tahun 2009.</p>', 1, '2013-07-29 11:13:36', 1, 1, 'Profil Masyarakat Desa', 0, '', '', '', '', '', NULL, 3, 1),
(36, '', '<p>Kontak kami berisi cara menghubungi desa, seperti contoh berikut :</p>\r\n<p>Alamat : Jl desa no 01</p>\r\n<p>No Telepon : 081xxxxxxxxx</p>\r\n<p>Email : xx@desa.com</p>', 1, '2013-07-29 11:28:31', 2, 1, 'Kontak Kami', 0, '', '', '', '', '', NULL, 3, 1),
(37, '', '<p><span style=\"color: #ff0000;\"><strong>Contoh (Sila edit halaman ini dan sesuaikan dengan deskripsi untuk desa ini)!</strong></span><br /><br />Susunan Organisasi Badan Permusyawaratan Desa:</p>\r\n<p>Ketua</p>\r\n<p>Sekretaris</p>\r\n<p>Anggota</p>', 1, '2013-07-29 11:33:33', 2, 1, 'Badan Permusyawaratan Desa', 0, '', '', '', '', '', NULL, 3, 1),
(38, '', '<p>Berisi data lembaga yang ada di desa beserta deskripsi dan susunan pengurusnya</p>', 1, '2013-07-29 11:38:33', 2, 1, 'Lembaga Kemasyarakatan', 0, '', '', '', '', '', NULL, 3, 1),
(41, '', '<p>Agenda Bulan Agustus :</p>\r\n<p>01/08/2013 : Rapat rutin</p>\r\n<p>04/08/2013 : Pertemuan Pengurus</p>\r\n<p>05/08/2013 : Seminar</p>\r\n<p>&nbsp;</p>', 1, '2013-07-30 07:08:52', 3, 1, 'Agenda', 0, '', '', '', '', '', NULL, 3, 1),
(42, '', '<p>Daftar Undang Undang Desa</p>\n<p><a href=\"../../../../../../assets/front/dokumen/Profil_SSN_SMP1Kepil.pdf\">1. UU No desa</a></p>\n<p>berisi asf basdaf.</p>\n<p>&nbsp;</p>\n<p><a href=\"kebumenkab.go.id/uu.pdf\">2.UU Perdangangan</a></p>', 1, '2014-04-20 11:21:56', 3, 1, 'Undang Undang', 0, '', '', '', '', '', NULL, 3, 1),
(43, '', '<p>Isi Peraturan Pemerintah</p>', 1, '2014-04-20 11:24:01', 3, 1, 'Peraturan Pemerintah', 0, '', '', '', '', '', NULL, 3, 1),
(44, '', '<p>Isi Peraturan Desa</p>', 1, '2014-04-20 11:24:35', 4, 1, 'Peraturan Desa', 0, '', '', '', '', '', NULL, 3, 1),
(45, '', '<p>Isi Peraturan Kepala Desa</p>', 1, '2014-04-20 11:25:04', 4, 1, 'Peraturan Kepala Desa', 0, '', '', '', '', '', NULL, 3, 1),
(46, '', '<p>Isi Keputusan kepala desa</p>', 1, '2014-04-20 11:25:36', 4, 1, 'Keputusan Kepala Desa', 0, '', '', '', '', '', NULL, 3, 1),
(51, '', '<p>Wahai masyarakat yang ber,,,,,,,,,,,,,,,,,,,,</p>\n<p>no hp : 097867575</p>\n<p>email: jkgkgkg</p>\n<p>ato komentar di bawah ini :</p>', 1, '2014-04-22 03:11:20', 6, 1, 'Pengaduan', 0, '', '', '', '', '', NULL, 3, 1),
(59, '', '<ol>\r\n<li><strong>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Jumlah Penduduk</strong></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<table style=\"width: 372px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Jumlah jiwa</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Jumlah laki-laki</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Jumlah perempuan</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Jumlah Kepala Keluarga</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">KK</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li><strong>b.&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Tingkat Pendidikan</strong></li>\r\n</ol>\r\n<table style=\"width: 373px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Belum sekolah</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Usia 7-45 tahun tidak pernah sekolah</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pernah sekolah SD tetapi tidak tamat</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pendidikan terakhir</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Tamat SD/sederajat</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">SLTP/sederajat</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">SLTA/sederajat</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">D-1</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">D-2</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">D-3</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">S-1</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">S-2</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">S-3</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"121\">&nbsp;</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li><strong>c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>Mata Pencaharian</strong></li>\r\n</ol>\r\n<p><strong>&nbsp;</strong></p>\r\n<table style=\"width: 372px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Petani</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">246</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Buruh tani</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">125</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Buruh/swasta</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">136</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pegawai Negeri</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">35</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pengrajin</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">&nbsp;</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pedagang</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">9</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Peternak</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">-</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Nelayan</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">-</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Montir</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">8</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Dokter</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">-</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">POLRI/ABRI</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">1</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pensiunan</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">36</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Perangkat Desa</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">15</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Pembuat Bata</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">3</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>&nbsp;</strong></p>\r\n<ol>\r\n<li><strong>d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>AGAMA</strong></li>\r\n</ol>\r\n<table style=\"width: 372px;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Islam</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">2215</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Kristen</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">5</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Katholik</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">&nbsp;</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Hindu</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">&nbsp;</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"168\">\r\n<p align=\"right\">Budha</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"120\">\r\n<p align=\"right\">1</p>\r\n</td>\r\n<td valign=\"bottom\" nowrap=\"nowrap\" width=\"84\">\r\n<p align=\"right\">orang</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>&nbsp;</strong></p>', 1, '2014-04-30 11:23:24', 7, 1, 'Profil Potensi Desa', 0, '', '', '', '', '', NULL, 3, 1),
(62, '', '<p>Lembaga Kemasyarakatan Desa (LKMD) adalah salah satu lembaga kemasyaratan yang berada di desa.</p>\n<p>TUGAS LKMD</p>\n<ol>\n<li>menyusun rencana pembangunan secara partisipatif,</li>\n<li>menggerakkan swadaya gotong royong masyarakat,</li>\n<li>melaksanakan dan</li>\n<li>mengendalikan pembangunan.</li>\n</ol>\n<p align=\"left\">FUNGSI LKMD</p>\n<ol>\n<li>penampungan dan penyaluran aspirasi masyarakat dalam pembangunan;</li>\n<li>penanaman dan pemupukan rasa persatuan dan kesatuan masyarakat dalam kerangka memperkokoh Negara Kesatuan Republik Indonesia;</li>\n<li>peningkatan kualitas dan percepatan pelayanan pemerintah kepada masyarakat;</li>\n<li>penyusunan rencana, pelaksanaan, pelestarian dan pengembangan hasil-hasil pembangunan secara partisipatif;</li>\n<li>penumbuhkembangan dan penggerak prakarsa, partisipasi, serta swadaya gotong royong masyarakat; dan</li>\n<li>penggali, pendayagunaan dan pengembangan potensi sumber daya alam serta keserasian lingkungan hidup.</li>\n</ol>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang Penetapan Pengurus Lembaga Kemasyarakatan Desa &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 1, '2014-04-30 11:39:07', 8, 1, 'LKMD', 0, '', '', '', '', '', NULL, 3, 1),
(63, '', '<p>TUGAS PKK</p>\n<ol>\n<li>menyusun rencana kerja PKK Desa/Kelurahan, sesuai dengan basil Rakerda Kabupaten/Kota;</li>\n<li>melaksanakan kegiatan sesuai jadwal yang disepakati;</li>\n<li>menyuluh dan menggerakkan kelompok-kelompok PKK Dusun/Lingkungan, RW, RT dan dasa wisma agar dapat mewujudkan kegiatan-kegiatan yang telah disusun dan disepakati;</li>\n<li>menggali, menggerakan dan mengembangkan potensi masyarakat, khususnya keluarga untuk meningkatkan kesejahteraan keluarga sesuai dengan kebijaksanaan yang telah ditetapkan;</li>\n<li>melaksanakan kegiatan penyuluhan kepada keluarga-keluarga yang mencakup kegiatan bimbingan dan motivasi dalam upaya mencapai keluarga sejahtera;.</li>\n<li>mengadakan pembinaan dan bimbingan mengenai pelaksanaan program kerja;</li>\n<li>berpartisipasi dalam pelaksanaan program instansi yang berkaitan dengan kesejahteraan keluarga di desa/kelurahan;</li>\n<li>membuat laporan basil kegiatan kepada Tim Penggerak PKK Kecamatan dengan tembusan kepada Ketua Dewan Penyantun Tim Penggerak PKK setempat;</li>\n<li>melaksanakan tertib administrasi; dan</li>\n<li>mengadakan konsultasi dengan Ketua Dewan Penyantun Tim Penggerak PKK setempat.</li>\n</ol>\n<p>&nbsp;</p>\n<p>FUNGSI PKK</p>\n<ol>\n<li>penyuluh, motivator dan penggerak masyarakat agar mau dan mampu melaksanakan program PKK; dan</li>\n<li>fasilitator, perencana, pelaksana, pengendali, pembina dan pembimbing Gerakan PKK.</li>\n</ol>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang Penetapan Pengurus Lembaga Kemasyarakatan Desa &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"center\"><strong>Alamatn</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"center\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"center\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"180\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"241\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 2, '2014-04-30 11:41:13', 8, 1, 'PKK', 0, '', '', '', '', '', NULL, 3, 1),
(64, '', '<p align=\"left\">TUGAS &nbsp;KARANGTARUNA</p>\n<p align=\"left\">menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya</p>\n<p align=\"left\">FUNGSI KARANGTAURNA</p>\n<ol>\n<li>penyelenggara usaha kesejahteraan sosial;</li>\n<li>penyelenggara pendidikan dan pelatihan bagi masyarakat;</li>\n<li>penyelenggara pemberdayaan masyarakat terutama generasi muda di lingkungannya secara komprehensif, terpadu dan terarah serta berkesinambungan;</li>\n<li>penyelenggara kegiatan pengembangan jiwa kewirausahaan bagi generasi muda di lingkungannya;</li>\n<li>penanaman pengertian, memupuk dan meningkatkan kesadaran tanggung jawab sosial generasi muda;</li>\n<li>penumbuhan dan pengembangan semangat kebersamaan, jiwa kekeluargaan, kesetiakawanan sosial dan memperkuat nilai-nilai kearifan dalam bingkai Negara Kesatuan Republik Indonesia;</li>\n</ol>\n<p align=\"left\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang Penetapan Pengurus Lembaga Kemasyarakatan Desa &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 1, '2014-04-30 11:44:28', 8, 1, 'Karang Taruna', 0, '', '', '', '', '', NULL, 3, 1),
(65, '', '<p align=\"left\">TUGAS RT/RW</p>\n<p align=\"left\">membantu Pemerintah Desa dan Lurah dalam penyelenggaraan urusan pemerintahan</p>\n<p align=\"left\">FUNGSI PKK</p>\n<ol>\n<li>pendataan kependudukan dan pelayanan administrasi pemerintahan lainnya;</li>\n<li>pemeliharaan keamanan, ketertiban dan kerukunan hidup antar warga;</li>\n<li>pembuatan gagasan dalam pelaksanaan pembangunan dengan mengembangkan aspirasi dan swadaya murni masyarakat; dan</li>\n<li>penggerak swadaya gotong royong dan partisipasi masyarakat di wilayahnya.</li>\n</ol>\n<p align=\"left\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang Penetapan Pengurus Lembaga Kemasyarakatan Desa &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\"><strong>Nama Pejabat</strong></p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">Ketua RW 1</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">Ketua RW 1 Rt 01</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">Ketua RW 1 Rt 02</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"186\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"204\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"193\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 1, '2014-04-30 11:45:19', 6, 1, 'RT RW', 0, '', '', '', '', '', NULL, 3, 1);
INSERT INTO `tb_artikel` (`id`, `gambar`, `isi`, `enabled`, `tgl_upload`, `id_kategori`, `id_user`, `judul`, `headline`, `gambar1`, `gambar2`, `gambar3`, `dokumen`, `link_dokumen`, `urut`, `jenis_widget`, `boleh_komentar`) VALUES
(66, '', '<p class=\"Default\">&nbsp;</p>\n<p class=\"Default\">Tim Koordinasi Percepatan Penanggulangan Kemiskinan Desa yang selanjutnya disingkat TKP2KDes adalah wadah koordinasi lintas sektor dan lintas pemangku kepentingan untuk percepatan penanggulangan kemiskinan di desa.</p>\n<p class=\"Default\">TKP2KDes bertugas mengkoordinasikan perencanaan, pengorganisasian, pelaksanaan dan pengendalian program penanggulangan kemiskinan di tingkat Desa.</p>\n<p>( Perda Kabupaten Kebumen Nomor 20 Tahun 2012 Tentang Percepatan Penanggulangan Kemiskinan )</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip; Nomor : &hellip;&hellip;tanggal &hellip;&hellip;.. bulan&hellip;.. tentang &hellip;..</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 2, '2014-04-30 11:46:01', 6, 1, 'TKP2KDes', 0, '', '', '', '', '', NULL, 3, 1),
(67, '', '<p class=\"Default\">&nbsp;</p>\n<p class=\"Default\">Kelompok Perlindungan Anak Desa atau Kelurahan yang selanjutnya disingkat KPAD atau KPAK adalah lembaga perlindungan anak berbasis masyarakat yang berkedudukan dan melakukan kerja&ndash;kerja perlindungan anak di wilayah desa atau kelurahan tempat anak bertempat tinggal&nbsp;&nbsp;&nbsp;&nbsp; ( Perda Kaupaten Kebumen No 3 Tahun 2013 Tentang Penyelenggaraan Perlindungan Anak&nbsp; )</p>\n<p>TUGAS-TUGAS KPAD</p>\n<p>1.1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sosialisasi</p>\n<ol>\n<li>Mensosialisasikan kepada masyarakat tentang hak-hak anak</li>\n<li>Mempromosikan CHILD RIGHTS dan CHILD PROTECTION</li>\n<li>Melakukan upaya pencegahan, respon dan penanganan kasus kasus kekerasan terhadap anak dan masalah anak.</li>\n</ol>\n<p>1.2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mediasi</p>\n<ol>\n<li>Mengedepankan upaya musyawarah dan mufakat (Rembug Desa)&nbsp; dalam menyelesaikan masalah &ndash; (Restorative Justive)</li>\n<li>Melakukan koordinasi dengan pihak terkait di level desa, kecamatan dan kabupaten dalam upaya perlindungan anak.</li>\n<li>Melakukan pendampingan kasus (dari pelaporan &ndash; medis &ndash; psikologi - reintegrasi)</li>\n</ol>\n<p>1.3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fasilitasi</p>\n<ol>\n<li>Memfasilitasi terbentuknya kelompok anak di desa sebagai media partisipasi anak</li>\n<li>Memfasilitasi partisipasi anak untuk terlibat dalam penyusunan perencanaan pembangunan yang berbasis hak anak (penyusunan RPJMDesa)</li>\n</ol>\n<p>1.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dokumentasi</p>\n<ol>\n<li>Mendokumentasikan semua proses yang dilakukan (Kegiatan Promosi; Penanganan Kasus dan mencatat kasus yang dilaporkan; Perkembangan Kasus, Pertemuan,dll)</li>\n</ol>\n<p>1.5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Advokasi</p>\n<ol>\n<li>Mendorong adanya kebijakan dan penganggaran untuk perlindungan anak di level desa</li>\n<li>Menerima pengaduan kasus dan konsultasi tentang perlindungan anak</li>\n<li>Berhubungan dengan P2TP2A dan LPA untuk pendampingan hukum kasus anak (korban dan atau pelaku)</li>\n</ol>\n<p class=\"Default\">&nbsp;</p>\n<p class=\"Default\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS &hellip;&hellip;&hellip;&hellip;</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang Penetapan Pengurus Lembaga Kemasyarakatan Desa &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p align=\"left\">&nbsp;</p>\n<p>&nbsp;</p>', 2, '2014-04-30 11:47:21', 6, 1, 'KPAD', 0, '', '', '', '', '', NULL, 3, 1),
(68, '', '<p align=\"center\"><strong>DAFTAR NAMA PENGURUS KELOMPOK TERNAK &hellip;..</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang</p>\n<p align=\"center\">&hellip;&hellip;&hellip;&hellip;&hellip;.. &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS KELOMPOK WANITA TANI TERNAK&nbsp; &hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. bulan&hellip;..</p>\n<p align=\"center\">tentang &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p>&nbsp;</p>', 2, '2014-04-30 11:47:58', 7, 1, 'Kelompok Ternak', 0, '', '', '', '', '', NULL, 3, 1),
(69, '', '<p align=\"center\"><strong>DAFTAR NAMA PENGURUS GAPOKTAN</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. Juni &hellip;.. tentang</p>\n<p align=\"center\">&hellip;&hellip;&hellip;&hellip;&hellip;.. &hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"left\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS KELOMPOK TANI &hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. bulan&hellip;..</p>\n<p align=\"center\">tentang &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\">&nbsp;</p>\n<p align=\"center\"><strong>DAFTAR NAMA PENGURUS KELOMPOK TANI &hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>MASA JABATAN &hellip;&hellip;s/d&hellip;&hellip;.</strong></p>\n<p align=\"center\"><strong>DESA &hellip;&hellip;&hellip;&hellip;.. KECAMATAN &hellip;&hellip;&hellip; KABUPATEN &hellip;&hellip;&hellip;..</strong></p>\n<p align=\"center\">Surat Keputusan Kepala Desa &hellip;&hellip;&hellip;&hellip;. Nomor : &hellip;&hellip;&hellip;&hellip;&hellip; tanggal &hellip;&hellip;.. bulan&hellip;..</p>\n<p align=\"center\">tentang &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</p>\n<p align=\"center\">&nbsp;</p>\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\"><strong>No</strong></p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"center\"><strong>Jabatan</strong></p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"center\"><strong>Nama Pengurus</strong></p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"center\"><strong>Alamat</strong></p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">1</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">2</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"center\">3</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n<tr>\n<td valign=\"top\" width=\"55\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"162\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"192\">\n<p align=\"left\">&nbsp;</p>\n</td>\n<td valign=\"top\" width=\"229\">\n<p align=\"left\">&nbsp;</p>\n</td>\n</tr>\n</tbody>\n</table>', 1, '2014-04-30 11:48:39', 7, 1, 'Kelompok Tani', 0, '', '', '', '', '', NULL, 3, 1),
(70, '', '<p>Linmas</p>', 1, '2014-04-30 11:53:18', 7, 1, 'LinMas', 0, '', '', '', '', '', NULL, 3, 1),
(71, '', '<p>Kelompok Ekonomi Lainya</p>', 2, '2014-04-30 11:54:20', 8, 1, 'Kelompok Ekonomi Lainya', 0, '', '', '', '', '', NULL, 3, 1),
(83, '', '<p>Tiap hari rapat sampai kumat</p>', 1, '2014-11-06 11:17:52', 8, 1, 'Rapat Lagi', 0, '', '', '', '', '', NULL, 3, 1),
(92, '1472006396', '<p><strong>Susunan Organisasi Pemerintah Desa Senggigi</strong><br /><br />Kepala Desa: MUHAMMAD ILHAM<br />Sekretaris Desa:&nbsp;<span>MUSTAHIQ, S.Adm</span><br />Kepala Urusan Pemerintahan: SYAFRUDIN<br />Kepala Urusan&nbsp;Pembangunan: SYAFI\'I, SE<br />Kepala Urusan&nbsp;Kesra: HAMIDIAH<br />Kepala Urusan&nbsp;Keuangan: MARDIANA<br />Kepala Urusan&nbsp;Trantib: SUPARDI RUSTAM<br />Kepala Urusan&nbsp;Umum: MAHRUP<br /><br /></p>', 1, '2016-08-24 03:39:56', 5, 1, 'Pemerintah Desa', 0, 'keg6.jpeg', '1472006396', '1472006396', '', '', NULL, 3, 1),
(94, '1527544437_gotong-royong-pantai.jpeg', '<p style=\"text-align: justify;\">Gotong royong yang dulu digagas pertama kali oleh pendiri bangsa, Ir. Soekarno kian hari semakin terkikis dengan budaya individual ditengah persaingan yang begitu ketat dalam mencapai tujuan tertentu, kenyataan inilah yang membuat nilai-nilai sosial ditatanan masyarakat yang sejak dulu sudah ditanamkan oleh nenek moyang kita luntur seiring dengan perkembangan jaman. padahal untuk mencapai suatu tujuan dan cita-cita bersama seharusnya dikerjakan secara bersama-sama.&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Maka dengan kenyataan inilah, pemerintah desa senggigi kembali melakukan sebuah inovasi baru dalam merangkul masyarakat agar terus menanamkan kebudayaan \"Gotong Raoyong\". kegitan gotong royong dalam pembangunan jalan desa sedikitnya melibatkan hampir 95% masyarakat senggigi, kebersamaan dan ikatan persaudaraan atas kepentingan bersama menjadi satu ketika semua masyarakat desa terlibat aktif, tanpa harus melihat tatanan dan golongan yang ada. masyarakat saling bahu membahu seiring kegitan gotong royong.&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 1, '2016-08-24 04:02:44', 1, 1, 'Membangun Desa Lewat Gotong Royong', 3, 'keg4.jpeg', '1472007764', '1472007764', '', '', NULL, 3, 1),
(95, '1527540313_kemerdekaan-pantai.jpg', '<p>Desa Senggigi ikut memeriahkan perayaan 17 Agustus 2016 sebagai hari jadi Indonesia yang ke 71 melalui kegiatan Karnaval yang diselenggarakan oleh Camat Batulayar Kabupaten Lombok Barat NTB. Acara karnaval dilaksanakan pada hari Rabu, 17 Agustus 2016 dimulai pukul 15.30 s/d 17.00 wita. Masing-masing desa berkumpul disekitaran kantor Camat Batulayar, dan berjalan menuju Taman Bale Pelangi Desa Sandik sebagai pusat titik kumpul seluruh peserta karnaval.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Dalam karnaval ini, Desa Senggigi melibatkan berbagai unsur masyarakat seperti tokoh masyarakat, perempuan, pemuda dan anak-anak dengan menggunakan baju adat dan berbagai macam asesoris hari kemerdekaan, kegitan tersebut adalah salah satu cara bagaimana memupuk semangat bagi setiap warga negara, khususnya kaum muda sebagai harapan bangsa, yang kian hari semakin terkikis dengan pengaruh global saat ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Lewat karang taruna desa senggigi, pemupukan pemberian semangat dalam berpacu memajukan desa dan bangsa terus dilakukan, berbagai macam kegiatan tahapan dalam pelaksanaan hari kemerdekaan terus di lakukan.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 1, '2016-08-24 06:05:21', 1, 1, 'Perayaan Hari Kemerdekaan 2016', 3, 'keg3.jpeg', '1472015120', '1472015120', '', '', NULL, 3, 1),
(96, '1472782915tb_artikel-3-1.jpeg', '<p>Dalam rapat pembahasan komitmen perekrutan karyawan hotel pada tanggal 24 Agustus 2016 di kantor desa sengigi telah menyepakati beberapa komitmen bersama diantaranya sebagai berikut:</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>1. Dalam perekrutan karyawan, pihak hotel harus memprioritaskan masyarakat senggigi minimal 35%</p>\n<p>2. Pihak Hotel harus mengikuti program perencanaan tenaga kerja desa senggigi sesua dengan VISI dan MISI desa</p>\n<p>3. Pihak hotel harus melakukan kordinasi dengan pemerintah desa ketika perekrutan karyawan&nbsp;</p>\n<p>4. Pihak Hotel harus melakukan pelatihan bagi calon karyawan, khususnya karyawan yang berasal dari desa sengggigi</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>Bagi rekan-rekan pemuda dan masyarakat harap melakukan kordinasi dengan pemerintah desa terkait dengan beberapa hasil pertemuan dalam membangun komitme dengan pihak hotel, jika ada hal mendesak terkait beberapa syarat ketentuan perekrutan, rekan-rekan pemuda dan masyarakat bisa menghubungi kami di kantor desa..</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', 1, '2016-08-24 06:55:10', 4, 1, 'Rapat membangun Komitmen antara Karang Taruna Desa Senggigi dengan Taruna Hotel', 3, 'keg2.jpeg', '1472018109', '1472018109', '', '', NULL, 3, 1),
(97, '1472019299', '<p>Halaman ini berisi tautan menuju informasi mengenai Basis Data Desa. Ada dua jenis data yang dimuat dalam sistem ini, yakni basis data kependudukan dan basis data sumber daya desa. Sila klik pada tautan berikut untuk mendapatkan tampilan data statistik per kategori.</p>\r\n<ol>\r\n<li>Data Wilayah Administratif&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Pendidikan&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Pekerjaan&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Golongan Darah&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Agama&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Jenis Kelamin&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Kelompok Umur&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Penerima Raskin&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</li>\r\n<li>Data Penerima BPJS &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n<li>Data Warga Negara &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</li>\r\n</ol>\r\n<p>Data yang tampil adalah statistik yang didapatkan dari proses olah data dasar yang dilakukan secara&nbsp;<em>offline</em>&nbsp;di kantor desa secara rutin/harian. Data dasar di kantor desa diunggah ke dalam sistem&nbsp;<em>online</em>&nbsp;di website ini secara berkala. Sila hubungi kontak pemerintah desa untuk mendapatkan data dan informasi desa termutakhir.</p>', 2, '2016-08-24 07:14:59', 4, 1, 'Data Desa', 0, 'keg1.jpeg', '1472019299', '1472019299', '', '', NULL, 3, 1),
(98, '1472192894', '<p>Wilayah desa berisi tentang penjelasan dan deskripsi letak wilayah desa. contohnya sebagai berikut :<br />Batas-batas :<br />Utara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kelurahan a<br />Timur &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Desa b<br />Selatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa c<br />Barat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kelurahan d dan Desa e<br />Luas Wilayah Desa Penglatan&nbsp;&nbsp; : 186,193 Ha<br />Letak Dan Batas Desa x<br />Desa Penglatan terletak pada posisi 115. 7.20 LS 8. 7.10 BT, dengan ketinggian kurang lebih 250 M diatas permukaan laut.</p>\r\n<p>Peta Desa:</p>\r\n<p><iframe src=\"https://www.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Logandu,+Karanggayam&amp;aq=0&amp;oq=logandu&amp;sll=-2.550221,118.015568&amp;sspn=52.267573,80.332031&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Logandu,+Karanggayam,+Kebumen,+Central+Java&amp;z=14&amp;ll=-7.55854,109.634173&amp;output=embed\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" width=\"600\" height=\"450\"></iframe></p>', 1, '2016-08-26 07:28:14', 4, 1, 'Wilayah Desa', 0, 'g3.jpg', '1472192894', '1472192894', '', '', NULL, 3, 1);
INSERT INTO `tb_artikel` (`id`, `gambar`, `isi`, `enabled`, `tgl_upload`, `id_kategori`, `id_user`, `judul`, `headline`, `gambar1`, `gambar2`, `gambar3`, `dokumen`, `link_dokumen`, `urut`, `jenis_widget`, `boleh_komentar`) VALUES
(99, '1472228892Raja Lombok 1902.jpg', '<p style=\"text-align: justify;\" align=\"center\">Sejarah telah mencatat bahwa Pulau Lombok pernah menjadi wilayah kekuasaan Kerajaan Karang Asem Bali yang berkedudukan di Cakranegara dengan seorang raja bernama Anak Agung Gde Jelantik. Berakhirnya <strong>kekuasaan</strong> Kerajaan Karang Asem Bali di Pulau Lombok setelah datangnya Belanda pada Tahun 1891, dimana Belanda pada waktu itu ingin menguasai Pulau Lombok dengan dalih pura-pura membantu rakyat Lombok yang dianggap tertindas oleh Pemerintahan Raja Lombok yaitu Anak Agung Gede Jelantik.</p>\r\n<p style=\"text-align: justify;\">Pada masa kekuasaan Raja Lombok yaitu Anak Agung Gde Jelantik, wilayah Desa Senggigi ( Dusun Mangsit, Kerandangan, Senggigi dan Dusun Loco) masih bergabung dengan Desa Senteluk yang sekarang menjadi Desa Meninting . Sedangkan pada tahun 1962 Desa Senteluk pecah menjadi 2 (Dua) desa yaitu Desa Meninting dan Desa Batulayar dan Dusun Mangsit,Kerandangan,Senggigi dan Dusun Loco bergabung ke Desa Batulayar.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Pemberian nama Desa Batulayar pada waktu itu yang lazim disebut dengan Pemusungan/Kepala Dea Batulayar berdasarkan hasil musyawarah nama Batulayar diambil dari nama tempat yang amat terkenal yaitu Makam Batulayar yang sampai saat ini banyak dikunjungi oleh masyarakat Pulau Lombok pada khususnya dan Masyarakat Nusa Tenggara Barat pada umumnya.</p>\r\n<p style=\"text-align: justify;\">Pada tahun 2001 Desa Batulayar dimekarkan menjadi 2 (dua) yaitu Desa Batulayar (sebagai Desa Induk) dan Desa Senggigi (sebagai Desa Persiapan) dengan SK.Bupati No : 30 Tahun 2001 tanggal 17 Mei 2001, yang pada waktu itu yang menjadi pejabat Kepala Desa Senggigi ialah <strong>H. ARIF RAHMAN, S.IP</strong>., dengan jumlah dusun sebanyak 3 dusun, yaitu :</p>\r\n<p>1. Dusun Senggigi</p>\r\n<p>2. Dusun Kerandangan</p>\r\n<p>3. Dusun Mangsit</p>\r\n<p>Selanjutnya pada tanggal 30 Juli 2003 Pejabat Kepala Desa Senggigi dari <strong>H. ARIF RAHMAN, S.IP</strong> diganti oleh Saudara<strong> ARIFIN</strong> dengan SK. Bupati Lombok Barat No : 409/66/pem/2003. Berhubung Desa Senggigi masih bersifat Desa Persiapan, maka berdasarkan hasil musyawarah desa, tertanggal 15 Desember 2003 , maka pada tanggal 22 Desember 2003 Desa Senggigi mengadakan Pemilihan Kepala Desa devinitif yang pertama kali dipimpin oleh&nbsp;<strong>HAJI JUNAIDI</strong>&nbsp;terpilih&nbsp;dengan SK. Bupati Lombok Barat No :01/01/Pem/2004 tertanggal 2 Januari 2004&nbsp;sampai pada tahun 2008.&nbsp;</p>\r\n<p style=\"text-align: justify;\">Selanjutnya pada tahun 2008, Desa Senggigi mengadakan pemilihan Kepala Desa Senggigi yang kedua dan dimenangkan oleh Bapak <strong>H. MUTAKIR AHMAD</strong>&nbsp;dengan&nbsp;SK. Bupati Lombok Barat No :1320/48/Pem./2008 tertanggal 23 Desember 2008, Periode 2008-2014. &nbsp;Kemudian Kepala desa terpilih Periode 2015 s/d 2021&nbsp;adalah <strong>MUHAMMAD ILHAM</strong>&nbsp;dengan SK. Bupati Lombok Barat No : 160/04/BPMPD/15 tanggal 27 Januari 2015 kini baru menjabat 2 (dua) bulan.</p>\r\n<p style=\"text-align: justify;\">Demikian selanyang pandang atau sejarah singkat Desa Senggigi yang dapat kami sampaikan kepada para pegiat Medsos, semoga dapat bermanfaat untuk kita semua, terima kasih.</p>\r\n<p style=\"text-align: justify;\" align=\"center\">&nbsp;</p>\r\n<p style=\"text-align: justify;\" align=\"center\">&nbsp;</p>', 1, '2016-08-26 08:38:09', 3, 1, 'Sejarah Desa', 1, 'g2.jpg', '1472197089', '1472197089', '', '', NULL, 3, 1),
(100, '1473071921', '<p>Ini contoh teks berjalan. Isi dengan tulisan yang menampilkan suatu ciri atau kegiatan penting di desa anda.</p>', 1, '2016-09-05 03:38:41', 3, 1, 'Contoh teks berjalan', 1, 'g1.jpg', '1473071921', '1473071921', '', '', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cacat`
--

CREATE TABLE `tb_cacat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_cacat`
--

INSERT INTO `tb_cacat` (`id`, `nama`) VALUES
(1, 'CACAT FISIK'),
(2, 'CACAT NETRA/BUTA'),
(3, 'CACAT RUNGU/WICARA'),
(4, 'CACAT MENTAL/JIWA'),
(5, 'CACAT FISIK DAN MENTAL'),
(6, 'CACAT LAINNYA'),
(7, 'TIDAK CACAT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cara_kb`
--

CREATE TABLE `tb_cara_kb` (
  `id` tinyint(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sex` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_cara_kb`
--

INSERT INTO `tb_cara_kb` (`id`, `nama`, `sex`) VALUES
(1, 'Pil', 2),
(2, 'IUD', 2),
(3, 'Suntik', 2),
(4, 'Kondom', 1),
(5, 'Susuk KB', 2),
(6, 'Sterilisasi Wanita', 2),
(7, 'Sterilisasi Pria', 1),
(99, 'Lainnya', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_deskrip_desa`
--

CREATE TABLE `tb_deskrip_desa` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `g1` varchar(225) NOT NULL,
  `g2` varchar(225) NOT NULL,
  `g3` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_deskrip_desa`
--

INSERT INTO `tb_deskrip_desa` (`id`, `sejarah`, `visi`, `misi`, `g1`, `g2`, `g3`) VALUES
(1, 'Desa Bulustalan merupakan salah satu desa dengan sejarah yang cukup panjang. Desa yang kini berada di wilayah Kabupaten Tulang Bawang Barat ini bahkan sudah berdiri sejak abad ke-13. Sejak zaman dulu Desa Karta sudah punya sistem pemerintahan yang kuat dan dikenal luas di Semarang.', 'tersebut sebagai kelurahan yang maju dalam bidang    perdagangan dengan dukungan infrastruktur yang    memadai serta tetap menjadi kelurahan yang kondusif untuk meningkatkan kesejahteraan masyarakat dalam bidang keamanan dengan dukungan pengembangan    keamanan , sosial , ekonomi dan budaya', 'Mewujudkan Pemerintahan Bulustalan Yang Semakin Handal untuk meningkatkan Pelayanan Publik kepada masyarakat.', 'g1.jpg', 'g2.jpg', 'g3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id` int(11) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `enabled` int(2) NOT NULL DEFAULT '1',
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pend` int(11) NOT NULL DEFAULT '0',
  `kategori` tinyint(3) NOT NULL DEFAULT '1',
  `attr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id`, `satuan`, `nama`, `enabled`, `tgl_upload`, `id_pend`, `kategori`, `attr`) VALUES
(2, 'SK+TIM+Penyusun+RPJMDes+Tahun+2017_uwdc6N_grafik-statistik-ada-jumlah.png', 'SK TIM Penyusun RPJMDes Tahun 2017', 1, '2018-05-27 09:49:28', 0, 2, '{\"uraian\":\"SK TIM Penyusun RPJMDes Tahun 2017\",\"no_kep_kades\":\"1\",\"tgl_kep_kades\":\"13-01-2017\",\"no_lapor\":\"1\",\"tgl_lapor\":\"13-01-2017\",\"keterangan\":\"Sudah Terbit\"}'),
(3, 'SK+Pengangkatan+RT+dan+Pemberentian+RT+Baru_OzjhwE_surat-kk-peraturan.jpg', 'SK Pengangkatan RT dan Pemberentian RT Baru', 1, '2018-05-27 09:51:53', 0, 2, '{\"uraian\":\"SK Pengangkatan RT dan Pemberentian RT Baru\",\"no_kep_kades\":\"2\",\"tgl_kep_kades\":\"14-01-2017\",\"no_lapor\":\"2\",\"tgl_lapor\":\"14-01-2017\",\"keterangan\":\"Sudah Terbit\"}'),
(4, 'Perdes+SPJ+Tentang+Keuang+Desa+Tahun+2016_cXJUfP_user-setting-pengaturan.png', 'Perdes SPJ Tentang Keuang Desa Tahun 2016', 1, '2018-05-27 09:57:37', 0, 3, '{\"uraian\":\"Perdes SPJ Tentang Keuang Desa Tahun 2016\",\"jenis_peraturan\":\"Perdes SPJ Tahun 2016\",\"no_ditetapkan\":\"1\",\"tgl_ditetapkan\":\"09-01-2016\",\"tgl_kesepakatan\":\"05-01-2016\",\"no_lapor\":\"1\",\"tgl_lapor\":\"05-01-2016\",\"no_lembaran_desa\":\"1\",\"tgl_lembaran_desa\":\"05-01-2017\",\"no_berita_desa\":\"1\",\"tgl_berita_desa\":\"05-01-2017\",\"keterangan\":\"Sudah Terbit\"}'),
(5, 'RPJMDes+Miau+Merah+Tahun+2016+s%2Fd+2022_fMaZGt_cetak-log-penduduk.png', 'RPJMDes Miau Merah Tahun 2016 s/d 2022', 1, '2018-05-27 10:09:56', 0, 3, '{\"uraian\":\"Rencana Pembangunan Jangka Menengah Desa\",\"jenis_peraturan\":\"RPJMDes\",\"no_ditetapkan\":\"2\",\"tgl_ditetapkan\":\"13-01-2017\",\"tgl_kesepakatan\":\"13-01-2017\",\"no_lapor\":\"2\",\"tgl_lapor\":\"13-01-2017\",\"no_lembaran_desa\":\"2\",\"tgl_lembaran_desa\":\"14-01-2017\",\"no_berita_desa\":\"2\",\"tgl_berita_desa\":\"14-01-2017\",\"keterangan\":\"Sudah Terbit\"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_format_surat`
--

CREATE TABLE `tb_format_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `url_surat` varchar(100) NOT NULL,
  `kode_surat` varchar(10) NOT NULL,
  `lampiran` varchar(100) DEFAULT NULL,
  `kunci` tinyint(1) NOT NULL DEFAULT '0',
  `favorit` tinyint(1) NOT NULL DEFAULT '0',
  `jenis` tinyint(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_format_surat`
--

INSERT INTO `tb_format_surat` (`id`, `nama`, `url_surat`, `kode_surat`, `lampiran`, `kunci`, `favorit`, `jenis`) VALUES
(1, 'Keterangan Pengantar', 'surat_ket_pengantar', 'S-01', NULL, 0, 0, 1),
(2, 'Keterangan Penduduk', 'surat_ket_penduduk', 'S-02', NULL, 0, 0, 1),
(3, 'Biodata Penduduk', 'surat_bio_penduduk', 'S-03', 'f-1.01.php', 0, 0, 1),
(5, 'Keterangan Pindah Penduduk', 'surat_ket_pindah_penduduk', 'S-04', 'f-1.08.php,f-1.25.php', 0, 0, 1),
(6, 'Keterangan Jual Beli', 'surat_ket_jual_beli', 'S-05', NULL, 0, 0, 1),
(8, 'Pengantar Surat Keterangan Catatan Kepolisian', 'surat_ket_catatan_kriminal', 'S-07', NULL, 0, 0, 1),
(9, 'Keterangan KTP dalam Proses', 'surat_ket_ktp_dalam_proses', 'S-08', NULL, 0, 0, 1),
(10, 'Keterangan Beda Identitas', 'surat_ket_beda_nama', 'S-09', NULL, 0, 0, 1),
(11, 'Keterangan Bepergian / Jalan', 'surat_jalan', 'S-10', NULL, 0, 0, 1),
(12, 'Keterangan Kurang Mampu', 'surat_ket_kurang_mampu', 'S-11', NULL, 0, 0, 1),
(13, 'Pengantar Izin Keramaian', 'surat_izin_keramaian', 'S-12', NULL, 0, 0, 1),
(14, 'Pengantar Laporan Kehilangan', 'surat_ket_kehilangan', 'S-13', NULL, 0, 0, 1),
(15, 'Keterangan Usaha', 'surat_ket_usaha', 'S-14', NULL, 0, 0, 1),
(16, 'Keterangan JAMKESOS', 'surat_ket_jamkesos', 'S-15', NULL, 0, 0, 1),
(17, 'Keterangan Domisili Usaha', 'surat_ket_domisili_usaha', 'S-16', NULL, 0, 0, 1),
(18, 'Keterangan Kelahiran', 'surat_ket_kelahiran', 'S-17', 'f-2.01.php', 0, 0, 1),
(20, 'Permohonan Akta Lahir', 'surat_permohonan_akta', 'S-18', NULL, 0, 0, 1),
(21, 'Pernyataan Belum Memiliki Akta Lahir', 'surat_pernyataan_akta', 'S-19', NULL, 0, 0, 1),
(22, 'Permohonan Duplikat Kelahiran', 'surat_permohonan_duplikat_kelahiran', 'S-20', NULL, 0, 0, 1),
(24, 'Keterangan Kematian', 'surat_ket_kematian', 'S-21', 'f-2.29.php', 0, 0, 1),
(25, 'Keterangan Lahir Mati', 'surat_ket_lahir_mati', 'S-22', NULL, 0, 0, 1),
(26, 'Keterangan Untuk Nikah (N-1 s/d N-7)', 'surat_ket_nikah', 'S-23', NULL, 0, 0, 1),
(33, 'Keterangan Pergi Kawin', 'surat_ket_pergi_kawin', 'S-30', NULL, 0, 0, 1),
(35, 'Keterangan Wali Hakim', 'surat_ket_wali_hakim', 'S-32', NULL, 0, 0, 1),
(36, 'Permohonan Duplikat Surat Nikah', 'surat_permohonan_duplikat_surat_nikah', 'S-33', NULL, 0, 0, 1),
(37, 'Permohonan Cerai', 'surat_permohonan_cerai', 'S-34', NULL, 0, 0, 1),
(38, 'Keterangan Pengantar Rujuk/Cerai', 'surat_ket_rujuk_cerai', 'S-35', NULL, 0, 0, 1),
(45, 'Permohonan Kartu Keluarga', 'surat_permohonan_kartu_keluarga', 'S-36', 'f-1.15.php,f-1.01.php', 0, 0, 1),
(51, 'Domisili Usaha Non-Warga', 'surat_domisili_usaha_non_warga', 'S-37', NULL, 0, 0, 1),
(76, 'Keterangan Beda Identitas KIS', 'surat_ket_beda_identitas_kis', 'S-38', NULL, 0, 0, 1),
(85, 'Keterangan Izin Orang Tua/Suami/Istri', 'surat_izin_orangtua_suami_istri', 'S-39', NULL, 0, 0, 1),
(86, 'Pernyataan Penguasaan Fisik Bidang Tanah (SPORADIK)', 'surat_sporadik', 'S-40', NULL, 0, 0, 1),
(89, 'Permohonan Perubahan Kartu Keluarga', 'surat_permohonan_perubahan_kartu_keluarga', 'S-41', 'f-1.16.php,f-1.01.php', 0, 0, 1),
(110, 'Non Warga', 'surat_non_warga', '', NULL, 0, 0, 2),
(156, 'Keterangan Domisili', 'surat_ket_domisili', 'S-41', NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan_darah`
--

CREATE TABLE `tb_golongan_darah` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_golongan_darah`
--

INSERT INTO `tb_golongan_darah` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O'),
(5, 'A+'),
(6, 'A-'),
(7, 'B+'),
(8, 'B-'),
(9, 'AB+'),
(10, 'AB-'),
(11, 'O+'),
(12, 'O-'),
(13, 'TIDAK TAHU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `tipe` int(4) NOT NULL DEFAULT '1',
  `urut` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `parrent` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `tipe`, `urut`, `status`, `parrent`) VALUES
(1, 'Berita Desa', 1, 1, 1, 0),
(2, 'Berita Kriminal', 1, 3, 2, 0),
(3, 'Berita Lokal', 2, 2, 1, 0),
(5, 'Kegiatan Desa', 2, 6, 2, 0),
(6, 'Produk Desa', 2, 3, 2, 0),
(7, 'Peraturan Desa', 1, 0, 2, 5),
(8, 'Laporan Desa', 1, 0, 2, 1),
(11, 'Berita Kriminal', 1, 0, 2, 1),
(12, 'teks_berjalan', 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_pengguna`
--

CREATE TABLE `tb_kategori_pengguna` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `tipe` int(4) NOT NULL DEFAULT '1',
  `urut` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `parrent` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_kategori_pengguna`
--

INSERT INTO `tb_kategori_pengguna` (`id`, `nama_kategori`, `tipe`, `urut`, `status`, `parrent`) VALUES
(1, 'Perangkat Desa', 1, 1, 1, 0),
(2, 'RW', 1, 3, 2, 0),
(3, 'RT', 2, 2, 1, 0),
(4, 'Kepala Keluarga', 2, 5, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keluarga`
--

CREATE TABLE `tb_keluarga` (
  `id` int(10) NOT NULL,
  `no_kk` varchar(160) DEFAULT NULL,
  `nik_kepala` varchar(200) DEFAULT NULL,
  `tgl_daftar` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `kelas_sosial` int(4) DEFAULT NULL,
  `tgl_cetak_kk` datetime DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `id_cluster` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`id`, `no_kk`, `nik_kepala`, `tgl_daftar`, `kelas_sosial`, `tgl_cetak_kk`, `alamat`, `id_cluster`) VALUES
(1, '5201140104126994', '1', '2016-09-13 16:28:03', NULL, NULL, NULL, 4),
(2, '5201140104126995', '5', '2016-09-13 16:28:03', NULL, NULL, NULL, 8),
(3, '5201140104166999', '9', '2016-09-13 16:28:03', NULL, NULL, NULL, 12),
(4, '5201140105136997', '12', '2016-09-13 16:28:03', NULL, NULL, NULL, 16),
(5, '5201140106166996', '16', '2016-09-13 16:28:03', NULL, NULL, NULL, 8),
(6, '5201140106167002', '17', '2016-09-13 16:28:03', NULL, NULL, NULL, 17),
(7, '5201140106167003', '19', '2016-09-13 16:28:03', NULL, NULL, NULL, 16),
(8, '5201140107126996', '21', '2016-09-13 16:28:03', NULL, NULL, NULL, 18),
(9, '5201140108146995', '25', '2016-09-13 16:28:03', NULL, NULL, NULL, 18),
(10, '5201140109126996', '26', '2016-09-13 16:28:03', NULL, NULL, NULL, 19),
(11, '5201140109156994', '30', '2016-09-13 16:28:03', NULL, NULL, NULL, 19),
(12, '5201140110137011', '32', '2016-09-13 16:28:03', NULL, NULL, NULL, 20),
(13, '5201140110137038', '35', '2016-09-13 16:28:03', NULL, NULL, NULL, 18),
(14, '5201140110156997', '37', '2016-09-13 16:28:03', NULL, NULL, NULL, 18),
(15, '5201140111126997', '38', '2016-09-13 16:28:03', NULL, NULL, NULL, 17),
(16, '5201140111126999', '39', '2016-09-13 16:28:03', NULL, NULL, NULL, 21),
(17, '5201140112107003', '42', '2016-09-13 16:28:03', NULL, NULL, NULL, 12),
(18, '5201140112126998', '45', '2016-09-13 16:28:03', NULL, NULL, NULL, 22),
(19, '5201140202167000', '51', '2016-09-13 16:28:03', NULL, NULL, NULL, 23),
(20, '5201140202167002', '52', '2016-09-13 16:28:03', NULL, NULL, NULL, 24),
(21, '5201140203136994', '55', '2016-09-13 16:28:03', NULL, NULL, NULL, 8),
(22, '5201140203136995', '56', '2016-09-13 16:28:03', NULL, NULL, NULL, 16),
(23, '5201140203167003', '59', '2016-09-13 16:28:03', NULL, NULL, NULL, 23),
(24, '5201140204166994', '61', '2016-09-13 16:28:03', NULL, NULL, NULL, 25),
(25, '5201140205156994', '62', '2016-09-13 16:28:03', NULL, NULL, NULL, 26),
(26, '5201140205156995', '65', '2016-09-13 16:28:03', NULL, NULL, NULL, 26),
(27, '5201140205156996', '68', '2016-09-13 16:28:03', NULL, NULL, NULL, 25),
(28, '5201140205156997', '71', '2016-09-13 16:28:03', NULL, NULL, NULL, 25),
(29, '5201140206157000', '74', '2016-09-13 16:28:03', NULL, NULL, NULL, 17),
(30, '5201140206157004', '76', '2016-09-13 16:28:03', NULL, NULL, NULL, 27),
(31, '5201140207156998', '77', '2016-09-13 16:28:03', NULL, NULL, NULL, 28),
(32, '5201140207157000', '80', '2016-09-13 16:28:03', NULL, NULL, NULL, 29),
(33, '5201140209156996', '83', '2016-09-13 16:28:03', NULL, NULL, NULL, 30),
(34, '5201140210137022', '84', '2016-09-13 16:28:03', NULL, NULL, NULL, 29),
(35, '5201140211117001', '88', '2016-09-13 16:28:03', NULL, NULL, NULL, 31),
(36, '5201140211117002', '91', '2016-09-13 16:28:03', NULL, NULL, NULL, 31),
(37, '5201140211117003', '95', '2016-09-13 16:28:03', NULL, NULL, NULL, 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` decimal(16,0) NOT NULL,
  `id_kk` int(11) DEFAULT '0',
  `kk_level` tinyint(2) NOT NULL DEFAULT '0',
  `id_rtm` int(11) NOT NULL,
  `rtm_level` int(11) NOT NULL,
  `sex` tinyint(4) UNSIGNED DEFAULT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `agama_id` int(10) UNSIGNED NOT NULL,
  `pendidikan_kk_id` int(10) UNSIGNED NOT NULL,
  `pendidikan_sedang_id` int(10) UNSIGNED NOT NULL,
  `pekerjaan_id` int(10) UNSIGNED NOT NULL,
  `status_kawin` tinyint(4) UNSIGNED NOT NULL,
  `warganegara_id` int(10) UNSIGNED NOT NULL,
  `dokumen_pasport` varchar(45) DEFAULT NULL,
  `dokumen_kitas` int(10) DEFAULT NULL,
  `ayah_nik` varchar(16) NOT NULL,
  `ibu_nik` varchar(16) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `golongan_darah_id` int(11) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL,
  `alamat_sebelumnya` varchar(200) NOT NULL,
  `alamat_sekarang` varchar(200) NOT NULL,
  `status_dasar` tinyint(4) NOT NULL DEFAULT '1',
  `hamil` int(1) DEFAULT NULL,
  `cacat_id` int(11) DEFAULT NULL,
  `sakit_menahun_id` int(11) NOT NULL,
  `akta_lahir` varchar(40) NOT NULL,
  `akta_perkawinan` varchar(40) NOT NULL,
  `tanggalperkawinan` date DEFAULT NULL,
  `akta_perceraian` varchar(40) NOT NULL,
  `tanggalperceraian` date DEFAULT NULL,
  `cara_kb_id` tinyint(2) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `tanggal_akhir_paspor` date DEFAULT NULL,
  `no_kk_sebelumnya` varchar(30) DEFAULT NULL,
  `ktp_el` tinyint(4) NOT NULL,
  `status_rekam` tinyint(4) NOT NULL DEFAULT '0',
  `waktu_lahir` varchar(5) NOT NULL,
  `tempat_dilahirkan` tinyint(2) NOT NULL,
  `jenis_kelahiran` tinyint(2) NOT NULL,
  `kelahiran_anak_ke` tinyint(2) NOT NULL,
  `penolong_kelahiran` tinyint(2) NOT NULL,
  `berat_lahir` varchar(10) NOT NULL,
  `panjang_lahir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `nama`, `nik`, `id_kk`, `kk_level`, `id_rtm`, `rtm_level`, `sex`, `tempatlahir`, `tanggallahir`, `agama_id`, `pendidikan_kk_id`, `pendidikan_sedang_id`, `pekerjaan_id`, `status_kawin`, `warganegara_id`, `dokumen_pasport`, `dokumen_kitas`, `ayah_nik`, `ibu_nik`, `nama_ayah`, `nama_ibu`, `foto`, `golongan_darah_id`, `id_cluster`, `status`, `alamat_sebelumnya`, `alamat_sekarang`, `status_dasar`, `hamil`, `cacat_id`, `sakit_menahun_id`, `akta_lahir`, `akta_perkawinan`, `tanggalperkawinan`, `akta_perceraian`, `tanggalperceraian`, `cara_kb_id`, `telepon`, `tanggal_akhir_paspor`, `no_kk_sebelumnya`, `ktp_el`, `status_rekam`, `waktu_lahir`, `tempat_dilahirkan`, `jenis_kelahiran`, `kelahiran_anak_ke`, `penolong_kelahiran`, `berat_lahir`, `panjang_lahir`) VALUES
(1, 'AHLUL', '5201142005716996', 1, 1, 0, 0, 1, 'MANGSIT', '1970-05-20', 1, 3, 18, 26, 2, 1, '', 0, '', '', 'ARFAH', 'RAISAH', 'default.jpg', 13, 4, 1, '', '', 1, 0, 0, 0, '', '', NULL, '', NULL, 0, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(2, 'AHMAD ALLIF RIZKI', '5201140706966997', 1, 4, 0, 0, 1, 'MANGSIT', '1995-06-07', 1, 1, 18, 1, 1, 1, '', 0, '', '', 'AHLUL', 'RUSDAH', 'default.jpg', 13, 4, 1, '', '', 1, 0, 0, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(3, 'AHMAD HABIB', '5201140301916995', 1, 4, 0, 0, 1, 'MANGSIT', '1990-01-03', 1, 3, 18, 1, 1, 1, NULL, NULL, '', '', 'AHLUL', 'RUSDAH', 'default.jpg', 13, 4, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(4, 'ADINI SEPTIA LISTA', '5201145003976995', 1, 4, 0, 0, 2, 'MANGSIT', '1996-03-10', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'AHLUL', 'RUSDAH', 'default.jpg', 13, 4, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(5, 'AHYAR', '5201141003666996', 2, 1, 0, 0, 1, 'JAKARTA', '1965-03-10', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'PAIMUN', 'SUPINAH', 'default.jpg', 13, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(6, 'APTA MADA RIZKY ALAMSYAH', '5201141412121724', 2, 4, 0, 0, 1, 'DEPOK', '2002-12-14', 1, 2, 18, 3, 1, 1, NULL, NULL, '', '', 'AHYAR', 'ALIYAH', 'default.jpg', 13, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(7, 'ALIYAH', '5201144609786995', 2, 3, 0, 0, 2, 'BEKASI', '1977-09-06', 1, 5, 18, 2, 2, 1, NULL, NULL, '', '', 'TAGOR SIPAHUTAR', 'AMAHWATI', 'default.jpg', 13, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(8, 'ALPIANI', '5201144301171725', 2, 4, 0, 0, 2, 'BOGOR', '2007-01-03', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'AHYAR', 'ALIYAH', 'default.jpg', 13, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(9, 'ASHARI', '5201140107867064', 3, 1, 0, 0, 1, 'KERANDANGAN', '1985-12-30', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'H. ABDUL KARIM', 'RADIAH', 'default.jpg', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(10, 'BACHTIAR HADI', '5201142210181724', 3, 4, 0, 0, 1, 'MATARAM', '2008-10-22', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'ASHARI', 'ANGGUN LESTARI PRATAMA', 'default.jpg', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(11, 'ANGGUN LESTARI PRATAMA', '5201146510916995', 3, 3, 0, 0, 2, 'SENGGIGI', '1990-10-25', 1, 4, 18, 88, 2, 1, NULL, NULL, '', '', 'SADIRAH', 'HJ. ROHANI', 'default.jpg', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(12, 'DAHRI', '5201143112797117', 4, 1, 0, 0, 1, 'MASBAGIK', '1978-12-31', 1, 3, 18, 88, 2, 1, NULL, NULL, '', '', 'AMAQ SAHMINI', 'INAQ SAHMINI', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(13, 'ERLANGGA DWIKO SAPUTRO', '5201140705156994', 4, 4, 0, 0, 1, 'MENINTING', '2014-05-07', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'DAHRI', 'ASMIATUN', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(14, 'FARIDAH', '5201141107101724', 4, 4, 0, 0, 1, 'MASBAGIK', '2000-07-11', 1, 3, 18, 3, 1, 1, NULL, NULL, '', '', 'DAHRI', 'ASMIATUN', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(15, 'ASMIATUN', '5201147112817188', 4, 3, 0, 0, 2, 'MASBAGIK', '1980-12-31', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'AMAQ MUJAENI', 'INAQ SAHMINI', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(16, 'BAIQ OLIVIA APRILLIANI', '5201145211486994', 5, 1, 0, 0, 2, 'SENGGIGI', '1947-11-12', 1, 1, 18, 1, 4, 1, NULL, NULL, '', '', 'AMAQ SINAREP', 'INAQ SINAREP', 'default.jpg', 13, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(17, 'FAUZI', '5201141210906998', 6, 1, 0, 0, 1, 'KERANDANGAN', '1989-10-12', 1, 5, 18, 3, 1, 1, NULL, NULL, '', '', 'SABLI', 'RAOHUN', 'default.jpg', 13, 17, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(18, 'DELLA MAHARANI NINGSIH', '5201147112947048', 6, 9, 0, 0, 2, 'KERANDANGAN', '1993-12-31', 1, 4, 18, 1, 1, 1, NULL, NULL, '', '', 'SABLI', 'RAOHUN', 'default.jpg', 13, 17, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(19, 'HAERUL FATONI', '5201142911936995', 7, 1, 0, 0, 1, 'SENGGIGI', '1992-11-29', 1, 5, 18, 15, 2, 1, NULL, NULL, '', '', 'ANGKASAH', 'MARJANAH', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(20, 'DENATUL SUARTINI', '3275014601977005', 7, 3, 0, 0, 2, 'JAKARTA', '1996-01-06', 1, 5, 18, 2, 2, 1, NULL, NULL, '', '', 'G. AMIN. P', 'NGATI', 'default.jpg', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(21, 'HERI IRAWAN', '5201140607636994', 8, 1, 0, 0, 1, 'TELOKE', '1962-07-06', 1, 3, 18, 9, 2, 1, NULL, NULL, '', '', 'AMAK MAJUMI', 'INAK MIDAH', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(22, 'HERMAN', '5201140305936994', 8, 4, 0, 0, 1, 'SENGGIGI', '1992-05-03', 1, 4, 18, 1, 1, 1, NULL, NULL, '', '', 'HERI IRAWAN', 'DEWI SAULINA', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(23, 'DEWI SAULINA', '5201144808686994', 8, 3, 0, 0, 2, 'KEKERAN', '1967-08-08', 1, 1, 18, 2, 2, 1, NULL, NULL, '', '', 'H. ZAENUDIN', 'INAK NAH', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(24, 'ELOK KHALISA SABRINA', '5201144408886994', 8, 4, 0, 0, 2, 'SENGGIGI', '1987-08-04', 1, 4, 18, 88, 1, 1, NULL, NULL, '', '', 'SERIMAN', 'DEWI SAULINA', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(25, 'I KETUT PAHING', '5201142210806997', 9, 1, 0, 0, 1, 'MATARAM', '1979-10-22', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', '-', '-', 'default.jpg', 2, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(26, 'IDA BAGUS MAS BUJANA', '5201143112707040', 10, 1, 0, 0, 1, 'APIT AIK', '1969-12-31', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'SAHMIN', 'MAOSIN', 'default.jpg', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(27, 'JOKO PATMOTO', '5201141009146994', 10, 4, 0, 0, 1, 'MANGSIT', '2013-09-10', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'IDA BAGUS MAS BUJANA', 'FITRIANI', '', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(28, 'KOMANG SALUN', '5201143105121724', 10, 4, 0, 0, 1, 'KAYANGAN', '2002-05-31', 1, 2, 18, 3, 1, 1, NULL, NULL, '', '', 'AMILUDIN', 'FITRIANI', '', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(29, 'FITRIANI', '5201145107836994', 10, 3, 0, 0, 2, 'KAYANGAN', '1982-07-11', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'REMBUK', 'SITIAH', 'default.jpg', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(30, 'LALU WAWAN DININGRAT', '5201141206886994', 11, 1, 0, 0, 1, 'MANGSIT', '1987-06-12', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'MAHSUN SUBUH', 'SARDIAH', '', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(31, 'FITRIANI', '5271016801926995', 11, 3, 0, 0, 2, 'MATARAM', '1991-01-28', 1, 5, 18, 15, 2, 1, NULL, NULL, '', '', 'UMAR', 'RUMINSIH', 'default.jpg', 13, 19, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(32, 'M. FA\'IZ AZAMI', '5201143112897123', 12, 1, 0, 0, 1, 'GEGELANG', '1988-12-31', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'SAREH', 'SUTIMAH', '', 13, 20, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(33, 'HILMIATI', '5201146402906994', 12, 3, 0, 0, 2, 'LOCO', '1989-02-24', 1, 4, 18, 88, 2, 1, NULL, NULL, '', '', 'H. MANSYUR', 'HJ. SA\'ADAH', 'default.jpg', 13, 20, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(34, 'HJ. PARIDAH', '5201144912146994', 12, 4, 0, 0, 2, 'MENINTING', '2013-12-09', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'M. FA\'IZ AZAMI', 'HILMIATI', 'default.jpg', 13, 20, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(35, 'HJ. SAMIRAH', '5201147112767266', 13, 1, 0, 0, 2, 'SENGGIGI', '1975-12-31', 1, 3, 18, 15, 3, 1, NULL, NULL, '', '', 'DAMSYAH', 'MARWIYAH', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(36, 'HUR MINAH', '5201144504131726', 13, 4, 0, 0, 2, 'SENGGIGI', '2003-04-05', 1, 3, 18, 3, 1, 1, NULL, NULL, '', '', 'MARSINI', 'KHODIJAH', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(37, 'HUSNAH', '5201145905936994', 14, 1, 0, 0, 2, 'LOTIM', '1992-05-19', 1, 4, 18, 88, 1, 1, NULL, NULL, '', '', '-', '-', 'default.jpg', 13, 18, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(38, 'IDA AYU OKA SUKERTI', '5201147112587053', 15, 1, 0, 0, 2, 'KERANDANGAN', '1957-12-31', 1, 3, 18, 88, 4, 1, NULL, NULL, '', '', 'ANGGRAH', 'HABIBAH', 'default.jpg', 13, 17, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(39, 'M. JAYADI', '5201143112837098', 16, 1, 0, 0, 1, 'SENGGIGI', '1982-12-31', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'IKHSAN', 'SAIDAH', '', 13, 21, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(40, 'JARIYAH', '5201145406916994', 16, 3, 0, 0, 2, 'SENGGIGI', '1990-06-14', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'SEGEP', 'HURNIWATI', 'default.jpg', 13, 21, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(41, 'LIHAM SATUN', '5201147112116995', 16, 4, 0, 0, 2, 'MATARAM', '2010-12-31', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'M. JAYADI', 'JARIYAH', '', 13, 21, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(42, 'M. NUR SAHID', '5201140507916996', 17, 1, 0, 0, 1, 'KERANDANGAN', '1990-07-05', 1, 4, 18, 88, 2, 1, NULL, NULL, '', '', '-', '-', '', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(43, 'MADE ASTAWE', '5201142503181724', 17, 4, 0, 0, 1, 'KERANDANGAN', '2008-03-25', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'M. NUR SAHID', 'MAISAH', '', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(44, 'MAISAH', '5201144605936994', 17, 3, 0, 0, 2, 'KERANDANGAN', '1992-05-06', 4, 1, 18, 88, 2, 1, NULL, NULL, '', '', '-', '-', '', 13, 12, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(45, 'MARSUNIN YOGA PRATAMA', '5201143112677056', 18, 1, 0, 0, 1, 'PEJARAKAN', '1966-12-31', 1, 3, 18, 9, 2, 1, NULL, NULL, '', '', 'MISRAH', 'INAQ MISDAH', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(46, 'MARZUKI', '5201141003966996', 18, 4, 0, 0, 1, 'LOCO', '1995-03-10', 1, 5, 18, 3, 1, 1, NULL, NULL, '', '', 'MARSUNIN YOGA PRATAMA', 'MARLIA SAJIDA', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(47, 'MUHAMAD HAMDI', '5201141706986996', 18, 4, 0, 0, 1, 'LOCO', '1997-06-17', 1, 4, 18, 3, 1, 1, NULL, NULL, '', '', 'MARSUNIN YOGA PRATAMA', 'MARLIA SAJIDA', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(48, 'MARLIA SAJIDA', '5201147112707088', 18, 3, 0, 0, 2, 'PEJARAKAN', '1969-12-31', 1, 3, 18, 2, 2, 1, NULL, NULL, '', '', 'H. ZAINUDIN', 'INAQ NAH', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(49, 'MIRA FANDA', '5201146704906995', 18, 4, 0, 0, 2, 'LOCO', '1989-04-27', 1, 5, 18, 88, 4, 1, NULL, NULL, '', '', 'MARSUNIN YOGA PRATAMA', 'MARLIA SAJIDA', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(50, 'MUNAAH', '5201146304171724', 18, 4, 0, 0, 2, 'LOCO', '2007-04-23', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'MARSUNIN YOGA PRATAMA', 'MARLIA SAJIDA', '', 13, 22, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(51, 'MUHAMAD KABIR', '5201140107917031', 19, 1, 0, 0, 1, 'SENGGIGI', '1985-12-31', 1, 3, 18, 88, 2, 1, NULL, NULL, '', '', 'MUNIAH', 'SALIKIN', '', 13, 23, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(52, 'MUHAMAD SUHAD', '5201141704876995', 20, 1, 0, 0, 1, 'SENGGIGI', '1982-12-10', 1, 5, 18, 15, 2, 1, NULL, NULL, '', '', 'MUNIAH', 'HAJRIAH', '', 13, 24, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(53, 'MUHAMMAD HAIKAL FIRMANSYAH', '5201140308151724', 20, 4, 0, 0, 1, 'LOCO', '2005-08-03', 1, 2, 18, 1, 1, 1, NULL, NULL, '', '', 'MUHAMAD SUHAD', 'KHADIJAH', '', 13, 24, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(54, 'MURNIAH', '5201145904846994', 20, 3, 0, 0, 2, 'SETANGI', '1991-03-04', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'SAHABUDIN', 'SAKMAH', '', 13, 24, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(55, 'MURNIATI SAGITA', '5201144112726996', 21, 1, 0, 0, 2, 'YOGYAKARTA', '1971-12-01', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'UMAR SANTOSA', 'MIRANTI', '', 1, 8, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(56, 'MUHAMMAD RIFAI', '5201143105926995', 22, 1, 0, 0, 1, 'LOCO', '1991-05-31', 4, 4, 18, 88, 2, 1, NULL, NULL, '', '', 'I WAYAN MERTI', 'NI NYOMAN RENI', '', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(57, 'NADIA ROSDIANA', '5201144305936996', 22, 3, 0, 0, 2, 'MATARAM', '1992-05-03', 4, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'I WAYAN PARTA', 'NI NENGAH SUDINI', '', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(58, 'NI KOMANG PONIASIH', '5201146206126994', 22, 4, 0, 0, 2, 'MATARAM', '2011-06-22', 4, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'MURNIATI SAGITA', 'NADIA ROSDIANA', '', 13, 16, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(59, 'MUHAMMAD WIRDA MAULANA IBRAHIM', '5201143112417056', 23, 1, 0, 0, 1, 'SENGGIGI', '1940-12-31', 1, 1, 18, 9, 2, 1, NULL, NULL, '', '', 'AMAQ SUN -ALM-', 'INAQ SUN -ALM-', '', 13, 23, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(60, 'NI LUH NITA SARI', '5201147112466997', 23, 3, 0, 0, 2, 'SENTELUK', '1945-12-31', 1, 1, 18, 2, 2, 1, NULL, NULL, '', '', 'AMAQ IRAH', 'INAQ IRAH', '', 13, 23, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(61, 'NI NENGAH AYU KARSINI', '5201145505946996', 24, 1, 0, 0, 2, 'SENGGIGI', '1993-05-15', 1, 2, 18, 15, 1, 1, NULL, NULL, '', '', 'H HAMDANI', 'SANERIAH', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(62, 'MUKSAN', '5201143112957094', 25, 1, 0, 0, 1, 'MANGSIT', '1994-12-31', 1, 4, 18, 88, 2, 1, NULL, NULL, '', '', 'MISDAH', 'RABIAH', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(63, 'NURHAYATI', '5201145509146994', 25, 4, 0, 0, 2, 'MENINTING', '2013-09-15', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'MUKSAN', 'NUR\'AINI', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(64, 'MURSIDIN', '5201142204966994', 26, 4, 0, 0, 1, 'MANGSIT', '1995-04-22', 1, 3, 18, 11, 1, 1, NULL, NULL, '', '', 'RUSNAH (ALM)', 'NURHIDAYAH', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(65, 'NURHIDAYAH', '5201144209766995', 26, 1, 0, 0, 2, 'MANGSIT', '1975-09-02', 1, 3, 18, 2, 4, 1, NULL, NULL, '', '', 'ISMAIL', 'JUMINAH', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(66, 'NURJANAH', '5201145005101724', 26, 4, 0, 0, 2, 'MONTONG', '2000-05-10', 1, 4, 18, 3, 1, 1, NULL, NULL, '', '', 'RUSNAH (ALM)', 'NURHIDAYAH', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(67, 'NURUL AINUN', '5201144108121724', 26, 4, 0, 0, 2, 'MANGSIT', '2002-08-01', 1, 2, 18, 3, 1, 1, NULL, NULL, '', '', 'RUSNAH', 'NURHIDAYAH', '', 13, 26, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(68, 'MUSAHAB', '5201141607936996', 27, 1, 0, 0, 1, 'LOTENG', '1992-07-16', 1, 6, 18, 88, 2, 1, NULL, NULL, '', '', 'LALU ROSIDI', 'BQ. ALISA', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(69, 'NURUL FAIZAH', '5201145003936994', 27, 3, 0, 0, 2, 'SENGGIGI', '1992-03-10', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'SAHUR', 'SARE\'AH', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(70, 'NURUL HIDAYATI', '5201147004136996', 27, 4, 0, 0, 2, 'MATARAM', '2012-04-30', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'MUSAHAB', 'NURUL FAIZAH', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(71, 'NAPIAH', '5201141303906995', 28, 1, 0, 0, 1, 'SENGGIGI', '1989-03-13', 1, 4, 18, 11, 2, 1, NULL, NULL, '', '', 'MUNIAH', 'HAJARIAH', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(72, 'RACHEL YULIANTI', '5201146507966995', 28, 3, 0, 0, 2, 'MELASE', '1995-07-25', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'LUKMAN', 'MUSNAH', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(73, 'RAISHA MAULIDYA', '5201144701156995', 28, 4, 0, 0, 2, 'MENINTING', '2014-01-07', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'NAPIAH', 'RACHEL YULIANTI', '', 13, 25, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(74, 'PATANUL HUSNUL', '5201143112667000', 29, 1, 0, 0, 1, 'JAWA TIMUR', '1965-12-31', 1, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'AHMAD', 'ASIH', '', 13, 17, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(75, 'RATNAWATY', '5201145512796995', 29, 3, 0, 0, 2, 'KERANDANGAN', '1978-12-15', 1, 5, 18, 84, 2, 1, NULL, NULL, '', '', 'JUM', 'REMAH', '', 13, 17, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(76, 'RABITAH', '5201140312896994', 30, 1, 0, 0, 1, 'KERANDANGAN', '1988-12-03', 4, 4, 18, 88, 1, 1, NULL, NULL, '', '', '-', '-', '', 13, 27, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(77, 'ROMI FAISAL', '5201141506856997', 31, 1, 0, 0, 1, 'MANGSIT', '1984-06-15', 1, 3, 18, 15, 2, 1, NULL, NULL, '', '', 'MUNTAHAR', 'MAKNAH', '', 13, 28, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(78, 'RAUDATUL ILMI', '5201145808816994', 31, 3, 0, 0, 2, 'IRENG DAYE', '1980-08-18', 1, 4, 18, 2, 2, 1, NULL, NULL, '', '', 'MUDAHIR', 'RUMISAH', '', 13, 28, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(79, 'ROHANI', '5201144306116994', 31, 4, 0, 0, 2, 'MANGSIT', '2010-06-03', 1, 1, 18, 1, 1, 1, NULL, NULL, '', '', 'ROMI FAISAL', 'RAUDATUL ILMI', '', 13, 28, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(80, 'RUKIAH', '5201145909946994', 32, 1, 0, 0, 2, 'SERANG', '1993-09-19', 1, 4, 18, 88, 3, 1, NULL, NULL, '', '', '-', '-', '', 13, 29, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(81, 'RUMALI', '5201144507886994', 32, 9, 0, 0, 2, 'JAKARTA', '1987-07-05', 1, 4, 18, 88, 1, 1, NULL, NULL, '', '', '-', '-', '', 13, 29, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(82, 'RONI', '5201140301836997', 33, 4, 0, 0, 1, 'DENPASAR', '1982-01-03', 4, 5, 18, 15, 1, 1, NULL, NULL, '', '', 'IDA BAGUS PUTU WIADNYA', 'RUSMAYANTI', '', 13, 30, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(83, 'RUSMAYANTI', '5201145003546994', 33, 1, 0, 0, 2, 'DENPASAR', '1953-03-10', 4, 5, 18, 88, 2, 1, NULL, NULL, '', '', 'IDA BAGUS MAS', 'IDA AYU RAKA', '', 13, 30, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', ''),
(84, 'RUSNI', '5201143112707180', 34, 1, 0, 0, 1, 'KEKERAN', '1969-12-31', 1, 3, 18, 9, 2, 1, NULL, NULL, '', '', '-', '-', '', 13, 29, 1, '', '', 1, NULL, NULL, 0, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_agama`
--

CREATE TABLE `tb_penduduk_agama` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_agama`
--

INSERT INTO `tb_penduduk_agama` (`id`, `nama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'KATHOLIK'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KHONGHUCU'),
(7, 'Kepercayaan Terhadap Tuhan YME / Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_hubungan`
--

CREATE TABLE `tb_penduduk_hubungan` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_hubungan`
--

INSERT INTO `tb_penduduk_hubungan` (`id`, `nama`) VALUES
(1, 'KEPALA KELUARGA'),
(2, 'SUAMI'),
(3, 'ISTRI'),
(4, 'ANAK'),
(5, 'MENANTU'),
(6, 'CUCU'),
(7, 'ORANGTUA'),
(8, 'MERTUA'),
(9, 'FAMILI LAIN'),
(10, 'PEMBANTU'),
(11, 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_kawin`
--

CREATE TABLE `tb_penduduk_kawin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_kawin`
--

INSERT INTO `tb_penduduk_kawin` (`id`, `nama`) VALUES
(1, 'BELUM KAWIN'),
(2, 'KAWIN'),
(3, 'CERAI HIDUP'),
(4, 'CERAI MATI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_pekerjaan`
--

CREATE TABLE `tb_penduduk_pekerjaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_pekerjaan`
--

INSERT INTO `tb_penduduk_pekerjaan` (`id`, `nama`) VALUES
(1, 'BELUM/TIDAK BEKERJA'),
(2, 'MENGURUS RUMAH TANGGA'),
(3, 'PELAJAR/MAHASISWA'),
(4, 'PENSIUNAN'),
(5, 'PEGAWAI NEGERI SIPIL (PNS)'),
(6, 'TENTARA NASIONAL INDONESIA (TNI)'),
(7, 'KEPOLISIAN RI (POLRI)'),
(8, 'PERDAGANGAN'),
(9, 'PETANI/PEKEBUN'),
(10, 'PETERNAK'),
(11, 'NELAYAN/PERIKANAN'),
(12, 'INDUSTRI'),
(13, 'KONSTRUKSI'),
(14, 'TRANSPORTASI'),
(15, 'KARYAWAN SWASTA'),
(16, 'KARYAWAN BUMN'),
(17, 'KARYAWAN BUMD'),
(18, 'KARYAWAN HONORER'),
(19, 'BURUH HARIAN LEPAS'),
(20, 'BURUH TANI/PERKEBUNAN'),
(21, 'BURUH NELAYAN/PERIKANAN'),
(22, 'BURUH PETERNAKAN'),
(23, 'PEMBANTU RUMAH TANGGA'),
(24, 'TUKANG CUKUR'),
(25, 'TUKANG LISTRIK'),
(26, 'TUKANG BATU'),
(27, 'TUKANG KAYU'),
(28, 'TUKANG SOL SEPATU'),
(29, 'TUKANG LAS/PANDAI BESI'),
(30, 'TUKANG JAHIT'),
(31, 'TUKANG GIGI'),
(32, 'PENATA RIAS'),
(33, 'PENATA BUSANA'),
(34, 'PENATA RAMBUT'),
(35, 'MEKANIK'),
(36, 'SENIMAN'),
(37, 'TABIB'),
(38, 'PARAJI'),
(39, 'PERANCANG BUSANA'),
(40, 'PENTERJEMAH'),
(41, 'IMAM MASJID'),
(42, 'PENDETA'),
(43, 'PASTOR'),
(44, 'WARTAWAN'),
(45, 'USTADZ/MUBALIGH'),
(46, 'JURU MASAK'),
(47, 'PROMOTOR ACARA'),
(48, 'ANGGOTA DPR-RI'),
(49, 'ANGGOTA DPD'),
(50, 'ANGGOTA BPK'),
(51, 'PRESIDEN'),
(52, 'WAKIL PRESIDEN'),
(53, 'ANGGOTA MAHKAMAH KONSTITUSI'),
(54, 'ANGGOTA KABINET KEMENTERIAN'),
(55, 'DUTA BESAR'),
(56, 'GUBERNUR'),
(57, 'WAKIL GUBERNUR'),
(58, 'BUPATI'),
(59, 'WAKIL BUPATI'),
(60, 'WALIKOTA'),
(61, 'WAKIL WALIKOTA'),
(62, 'ANGGOTA DPRD PROVINSI'),
(63, 'ANGGOTA DPRD KABUPATEN/KOTA'),
(64, 'DOSEN'),
(65, 'GURU'),
(66, 'PILOT'),
(67, 'PENGACARA'),
(68, 'NOTARIS'),
(69, 'ARSITEK'),
(70, 'AKUNTAN'),
(71, 'KONSULTAN'),
(72, 'DOKTER'),
(73, 'BIDAN'),
(74, 'PERAWAT'),
(75, 'APOTEKER'),
(76, 'PSIKIATER/PSIKOLOG'),
(77, 'PENYIAR TELEVISI'),
(78, 'PENYIAR RADIO'),
(79, 'PELAUT'),
(80, 'PENELITI'),
(81, 'SOPIR'),
(82, 'PIALANG'),
(83, 'PARANORMAL'),
(84, 'PEDAGANG'),
(85, 'PERANGKAT DESA'),
(86, 'KEPALA DESA'),
(87, 'BIARAWATI'),
(88, 'WIRASWASTA'),
(89, 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_pendidikan`
--

CREATE TABLE `tb_penduduk_pendidikan` (
  `id` tinyint(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_pendidikan`
--

INSERT INTO `tb_penduduk_pendidikan` (`id`, `nama`) VALUES
(1, 'BELUM MASUK TK/KELOMPOK BERMAIN'),
(2, 'SEDANG TK/KELOMPOK BERMAIN'),
(3, 'TIDAK PERNAH SEKOLAH'),
(4, 'SEDANG SD/SEDERAJAT'),
(5, 'TIDAK TAMAT SD/SEDERAJAT'),
(6, 'SEDANG SLTP/SEDERAJAT'),
(7, 'SEDANG SLTA/SEDERAJAT'),
(8, 'SEDANG  D-1/SEDERAJAT'),
(9, 'SEDANG D-2/SEDERAJAT'),
(10, 'SEDANG D-3/SEDERAJAT'),
(11, 'SEDANG  S-1/SEDERAJAT'),
(12, 'SEDANG S-2/SEDERAJAT'),
(13, 'SEDANG S-3/SEDERAJAT'),
(14, 'SEDANG SLB A/SEDERAJAT'),
(15, 'SEDANG SLB B/SEDERAJAT'),
(16, 'SEDANG SLB C/SEDERAJAT'),
(17, 'TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB'),
(18, 'TIDAK SEDANG SEKOLAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_pendidikan_kk`
--

CREATE TABLE `tb_penduduk_pendidikan_kk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_pendidikan_kk`
--

INSERT INTO `tb_penduduk_pendidikan_kk` (`id`, `nama`) VALUES
(1, 'TIDAK / BELUM SEKOLAH'),
(2, 'BELUM TAMAT SD/SEDERAJAT'),
(3, 'TAMAT SD / SEDERAJAT'),
(4, 'SLTP/SEDERAJAT'),
(5, 'SLTA / SEDERAJAT'),
(6, 'DIPLOMA I / II'),
(7, 'AKADEMI/ DIPLOMA III/S. MUDA'),
(8, 'DIPLOMA IV/ STRATA I'),
(9, 'STRATA II'),
(10, 'STRATA III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_sex`
--

CREATE TABLE `tb_penduduk_sex` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_penduduk_sex`
--

INSERT INTO `tb_penduduk_sex` (`id`, `nama`) VALUES
(1, 'LAKI-LAKI'),
(2, 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_status`
--

CREATE TABLE `tb_penduduk_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penduduk_status`
--

INSERT INTO `tb_penduduk_status` (`id`, `nama`) VALUES
(1, 'TETAP'),
(2, 'TIDAK AKTIF'),
(3, 'PENDATANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk_warganegara`
--

CREATE TABLE `tb_penduduk_warganegara` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penduduk_warganegara`
--

INSERT INTO `tb_penduduk_warganegara` (`id`, `nama`) VALUES
(1, 'WNI'),
(2, 'WNA'),
(3, 'DUA KEWARGANEGARAAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan_surat`
--

CREATE TABLE `tb_pengajuan_surat` (
  `id_pengajuan` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `rt` varchar(11) NOT NULL,
  `rt_status` int(11) NOT NULL,
  `rw` varchar(11) NOT NULL,
  `rw_status` int(11) NOT NULL,
  `desa_status` int(11) NOT NULL,
  `keperluan` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pengajuan_surat`
--

INSERT INTO `tb_pengajuan_surat` (`id_pengajuan`, `surat_id`, `penduduk_id`, `rt`, `rt_status`, `rw`, `rw_status`, `desa_status`, `keperluan`, `keterangan`, `status`) VALUES
(1, 1, 2, '004', 1, '001', 1, 0, 'Berobat', 'untuk berobat', 3),
(2, 2, 3, '004', 1, '001', 1, 1, 'Rekam E-KTP', 'Permohonan membuat E-KTP', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(32) NOT NULL,
  `id_kk` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `id_kk`, `password`, `id_kategori`) VALUES
(16, '1', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 4),
(17, '2', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 4),
(19, '5201144701156995', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 1),
(20, '5201140305936994 	', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 1),
(21, '5201146304171724', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 3),
(22, '5201143112837098', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 3),
(23, '5201143112957094', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 3),
(24, '5201141506856997', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `komentar` text NOT NULL,
  `balasan` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id`, `nik`, `owner`, `subject`, `komentar`, `balasan`, `tgl_upload`, `enabled`) VALUES
(8, '0', 'Penduduk Biasa', 'trtareareg', 'Selamat atas keberhasilan Senggigi merayakan Hari Kemerdeakaan 2016!', 'weroiluerikugtwcimuewot', '2016-09-13 16:09:16', 1),
(9, '0', 'AHMAD ALLIF RIZKI', 'ergsregeg', 'Harap alamat keluarga kami diperbaik menjadi RT 002 Dusun Mangsit. \n\nTerima kasih.', 'i4tmyewriutmrewit', '2016-09-13 17:44:59', 1),
(10, '1601530020', 'Katon Prambodo', 'ergrshtr', 'Saya ke kantor desa kemarin jam 12:30 siang, tetapi tidak ada orang. Anak kami akan pergi ke Yogyakarta untuk kuliah selama 4 tahun. Apakah perlu kami laporkan?', 'ertcwjyremiutwretewrte', '2016-09-13 20:49:34', 2),
(11, '1601530020', 'Katon Prambodo', 'rthtryer', 'Laporan ini tidak relevan. Hanya berisi komentar saja.', 'trewftreytry', '2016-09-13 21:05:02', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profildesa`
--

CREATE TABLE `tb_profildesa` (
  `id` int(5) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `kode_desa` varchar(100) NOT NULL,
  `nama_kepala_desa` varchar(100) NOT NULL,
  `nip_kepala_desa` varchar(100) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_kepala_camat` varchar(100) NOT NULL,
  `nip_kepala_camat` varchar(100) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `kode_kabupaten` varchar(100) NOT NULL,
  `nama_propinsi` varchar(100) NOT NULL,
  `kode_propinsi` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `icon_logo` varchar(100) NOT NULL,
  `alamat_kantor` varchar(200) DEFAULT NULL,
  `email_desa` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_profildesa`
--

INSERT INTO `tb_profildesa` (`id`, `nama_desa`, `kode_desa`, `nama_kepala_desa`, `nip_kepala_desa`, `kode_pos`, `nama_kecamatan`, `kode_kecamatan`, `nama_kepala_camat`, `nip_kepala_camat`, `nama_kabupaten`, `kode_kabupaten`, `nama_propinsi`, `kode_propinsi`, `logo`, `icon_logo`, `alamat_kantor`, `email_desa`, `telepon`, `website`) VALUES
(1, 'Bulustalan', '05', 'Sri Daryani', '--', '50241', 'Semarang', '14', 'Bambang Budi Sanyoto, S. H', '674634542', 'Kota Semarang', '01', 'Jawa Tengah', '', 'logo-1.png', 'logo-desa.png', 'Jl. Bulustalan II No.273, Bulustalan', 'mimow.aja@gmail.com', '(024) 3563066', 'www.momomimo.id/desakita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `kode` tinyint(2) NOT NULL DEFAULT '0',
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`kode`, `nama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua'),
(92, 'Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rtm`
--

CREATE TABLE `tb_rtm` (
  `id` int(11) NOT NULL,
  `nik_kepala` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kelas_sosial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sakit_menahun`
--

CREATE TABLE `tb_sakit_menahun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_sakit_menahun`
--

INSERT INTO `tb_sakit_menahun` (`id`, `nama`) VALUES
(1, 'JANTUNG'),
(2, 'LEVER'),
(3, 'PARU-PARU'),
(4, 'KANKER'),
(5, 'STROKE'),
(6, 'DIABETES MELITUS'),
(7, 'GINJAL'),
(8, 'MALARIA'),
(9, 'LEPRA/KUSTA'),
(10, 'HIV/AIDS'),
(11, 'GILA/STRESS'),
(12, 'TBC'),
(13, 'ASTHMA'),
(14, 'TIDAK ADA/TIDAK SAKIT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_dasar`
--

CREATE TABLE `tb_status_dasar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_status_dasar`
--

INSERT INTO `tb_status_dasar` (`id`, `nama`) VALUES
(1, 'HIDUP'),
(2, 'MATI'),
(3, 'PINDAH'),
(4, 'HILANG'),
(9, 'TIDAK VALID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `nama_user`, `password`, `nama`, `email`, `no_telepon`, `role`, `foto`, `is_delete`, `testi`) VALUES
(1, '16.01.53.0183', 'momo', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Sutrimo', 'mimow.aja@gmail.com', '081391509467', 'Administrator', '1.jpg', 'Y', 'Everybody in this country should learn to program a computer, because it teaches you how to think.'),
(2, '16.01.53.0104', 'diendra', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Diendra Lintang Mahesi', 'diendra.lm@gmail.com', '089618768626', 'Perangkat Desa', '2.jpg', 'Y', 'The best thing about a boolean is even if you are wrong, you are only off by a bit.'),
(3, '16.01.53.0107', 'kukuh', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Kukuh TNI', 'kukuhtni06@gmail.com', '085200863376', 'Perangkat Desa', '3.jpg', 'Y', 'Before software can be reusable it first has to be usable.'),
(4, '16.01.53.0020', 'katon', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Katon Prambodo', 'katonprmbd@gmail.com', '083838737905', 'Kepala Keluarga', '4.jpg', 'Y', 'There are two ways to write error-free programs; only the third one works.'),
(5, '16.01.53.0122', 'rizky', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Rizky Syahrul', 'rizkysyahrul100@gmail.com', '085600233386', 'Kepala Keluarga', '5.jpg', 'Y', 'Your most unhappy customers are your greatest source of learning.'),
(6, '16.01.53.0174', 'abdul', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Abdul Fattah', 'avdul.fatah@gmail.com', '085641014338', 'RT', '6.jpg', 'Y', 'In a room full of top software designers, if two agree on the same thing, that’s a majority.'),
(7, '16.01.53.0173', 'wisnu', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Satrio Wisnu', 'satriowisnu2@gmail.com', '083842177442', 'RW', '7.jpg', 'Y', 'A program is never less than 90% complete, and never more than 95% complete.'),
(8, '16.01.53.0137', 'lenny', '7e2ac75a5996bdee88b9640b4934a9dc8ad7a581 ', 'Lenny Estika Sari', 'tikatceh@gmail.com', '089514685747', 'Administrator', '8.jpg', 'Y', 'if the code and the comments do not match, possibly both are incorrect.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wil_clusterdesa`
--

CREATE TABLE `tb_wil_clusterdesa` (
  `id` int(11) NOT NULL,
  `rt` varchar(10) NOT NULL DEFAULT '0',
  `rw` varchar(10) NOT NULL DEFAULT '0',
  `dusun` varchar(50) NOT NULL DEFAULT '0',
  `id_kepala` int(11) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `zoom` int(5) NOT NULL,
  `path` text NOT NULL,
  `map_tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wil_clusterdesa`
--

INSERT INTO `tb_wil_clusterdesa` (`id`, `rt`, `rw`, `dusun`, `id_kepala`, `lat`, `lng`, `zoom`, `path`, `map_tipe`) VALUES
(1, '0', '0', 'BULUSTALAN', 0, '', '', 0, '', ''),
(2, '0', '-', 'BULUSTALAN', 0, '', '', 0, '', ''),
(3, '-', '-', 'BULUSTALAN', 0, '', '', 0, '', ''),
(4, '004', '001', 'BULUSTALAN', 0, '', '', 0, '', ''),
(5, '0', '0', 'SENGGIGI', 0, '', '', 0, '', ''),
(6, '0', '-', 'SENGGIGI', 0, '', '', 0, '', ''),
(7, '-', '-', 'SENGGIGI', 0, '', '', 0, '', ''),
(8, '001', '-', 'SENGGIGI', 70, '', '', 0, '', ''),
(9, '0', '0', 'KERANDANGAN', 0, '', '', 0, '', ''),
(10, '0', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(11, '-', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(12, '002', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(13, '0', '0', 'LOCO', 0, '', '', 0, '', ''),
(14, '0', '-', 'LOCO', 0, '', '', 0, '', ''),
(15, '-', '-', 'LOCO', 0, '', '', 0, '', ''),
(16, '003', '-', 'LOCO', 0, '', '', 0, '', ''),
(17, '001', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(18, '005', '-', 'SENGGIGI', 50, '', '', 0, '', ''),
(19, '005', '001', 'BULUSTALAN', 0, '', '', 0, '', ''),
(20, '005', '-', 'LOCO', 0, '', '', 0, '', ''),
(21, '003', '-', 'SENGGIGI', 82, '', '', 0, '', ''),
(22, '002', '-', 'LOCO', 0, '', '', 0, '', ''),
(23, '004', '-', 'SENGGIGI', 12, '', '', 0, '', ''),
(24, '004', '-', 'LOCO', 0, '', '', 0, '', ''),
(25, '001', '-', 'LOCO', 0, '', '', 0, '', ''),
(26, '004', '001', 'BULUSTALAN', 62, '', '', 0, '', ''),
(27, '004', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(28, '003', '001', 'BULUSTALAN', 39, '', '', 0, '', ''),
(29, '006', '-', 'SENGGIGI', 17, '', '', 0, '', ''),
(30, '006', '-', 'KERANDANGAN', 0, '', '', 0, '', ''),
(31, '002', '-', 'SENGGIGI', 25, '', '', 0, '', ''),
(87, '0', '001', 'BULUSTALAN', 77, '', '', 0, '', ''),
(88, '-', '001', 'BULUSTALAN', 77, '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `media_sosial`
--
ALTER TABLE `media_sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_album_galeri`
--
ALTER TABLE `tb_album_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_aparatur`
--
ALTER TABLE `tb_aparatur`
  ADD PRIMARY KEY (`aparatur_id`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_cacat`
--
ALTER TABLE `tb_cacat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_deskrip_desa`
--
ALTER TABLE `tb_deskrip_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengajuan_surat`
--
ALTER TABLE `tb_pengajuan_surat`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_profildesa`
--
ALTER TABLE `tb_profildesa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_wil_clusterdesa`
--
ALTER TABLE `tb_wil_clusterdesa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_album_galeri`
--
ALTER TABLE `tb_album_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_aparatur`
--
ALTER TABLE `tb_aparatur`
  MODIFY `aparatur_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tb_deskrip_desa`
--
ALTER TABLE `tb_deskrip_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan_surat`
--
ALTER TABLE `tb_pengajuan_surat`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_profildesa`
--
ALTER TABLE `tb_profildesa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_wil_clusterdesa`
--
ALTER TABLE `tb_wil_clusterdesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
