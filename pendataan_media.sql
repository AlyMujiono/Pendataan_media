-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2022 pada 05.48
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_media`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(5, 'Syarat Pendaftaran Media', ''),
(6, 'Cara Upload Berkas', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `unikode` varchar(20) NOT NULL,
  `level` varchar(150) NOT NULL,
  `hak_akses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `unikode`, `level`, `hak_akses`) VALUES
(1, 'superadmin', 'Super Admin', 'null'),
(6, 'member', 'member', '[\"admin.beranda.view\",\"admin.media.view\",\"admin.media.add\",\"admin.media.update\",\"admin.media.delete\"]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_media` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `no_npwp` varchar(200) NOT NULL,
  `nib` int(50) NOT NULL,
  `kbli` varchar(50) NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_perusahaan` int(20) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `tgl_daftar` varchar(25) NOT NULL,
  `no_berlaku` varchar(200) NOT NULL,
  `tgl_berlaku` varchar(100) NOT NULL,
  `tgl_verifikasi` date DEFAULT NULL,
  `verifikasi` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = BELUM VERIFIKASI 1 = TERVERIFIKASI',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = NON AKTIFI 1 = AKTIF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `id_user`, `nama_media`, `website`, `nama_perusahaan`, `nik`, `no_npwp`, `nib`, `kbli`, `nama_pendaftar`, `no_telp`, `alamat`, `no_perusahaan`, `ktp`, `tgl_daftar`, `no_berlaku`, `tgl_berlaku`, `tgl_verifikasi`, `verifikasi`, `status`) VALUES
('14620072022131858', 1, 'kompas', 'fdfsfsfdd', 'pt maju jaya', '82328932', '23232323', 222222222, '22222222222', 'ali', '', 'sfdsff', 0, '3bda38b85738c6c4a79e4f84dc9e0aa1.jpg', '2022-07-20', '', '', '2022-07-20', 1, 1),
('23526082022161922', 37, 'bbbb', 'kjjjj', 'bbb', '222', '2222', 2222, '2222', 'nnn', '', 'bbbb', 0, 'd8400ca9d8adc7b1a160c3b28ec31b7f.png', '2022-08-26', '', '', '2022-08-26', 1, 1),
('40426082022161738', 37, 'kkkkk', 'kkkkkk', 'kkkkk', '3333', '3333', 3333, '3333', 'kkkk', '', 'nnn', 0, '9f10db4fee50f7a3f12e4741c80cd950.png', '2022-08-26', '', '', '2022-08-26', 1, 1),
('51522082022230613', 37, 'kkkkk', '', 'kkkk', '435433', '2323232', 2222, '22222', 'kkkk', '', '', 0, 'faed0be6cbfc13ff238c8d07842fe862.jpg', '2022-08-22', '', '', '2022-08-22', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi`
--

CREATE TABLE `opsi` (
  `id_opsi` int(11) NOT NULL,
  `kunci` varchar(255) NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opsi`
--

INSERT INTO `opsi` (`id_opsi`, `kunci`, `nilai`) VALUES
(1, 'nama_situs', 'SIPENDI Kota Lubuklinggau'),
(2, 'nama_perusahaan', 'Pendataan Media'),
(3, 'no_sia', ''),
(4, 'nama_pemilik', 'Kominfo'),
(5, 'nama_pengelola', ''),
(6, 'no_sipa', ''),
(7, 'email_perusahaan', 'kominfo@lubuklinggaukota.go.id'),
(8, 'telepon_perusahaan', '08xx-xxxx-xxxx'),
(9, 'alamat_perusahaan', 'Jl. Garuda, Komplek Perkantoran Pemerintah Kota Lubuklinggau'),
(10, 'logo', 'logo_1658908116.png'),
(11, 'favicon', 'favicon_1658908481.png'),
(12, 'provinsi', 'Sumatera Selatan'),
(13, 'kota', 'Kota Lubuklinggau'),
(14, 'kecamatan', 'Lubuklinggau Barat I'),
(15, 'kontak', '<p style=\"text-align:center\">Dibawah ini adalah nomor call center yang dapat Anda hubungi.</p>\r\n\r\n<table cellspacing=\"0\" class=\"table table-bordered table-striped\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th>No.</th>\r\n			<th>Kota/Kab</th>\r\n			<th>CALL CENTER</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>1</strong></td>\r\n			<td>Kabupaten Bandung</td>\r\n			<td>0821 1821 9287</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>2</strong></td>\r\n			<td>Kabupaten Musirawas Barat</td>\r\n			<td>0895 2243 4611</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL,
  `isi_balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `no_telp`, `subjek`, `isi_pesan`, `isi_balasan`) VALUES
(9, 'aliii', '080000000', 'makalah', 'kami akan membuat sebuah makalah', '<p>okeeee</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat_media`
--

CREATE TABLE `syarat_media` (
  `id` int(11) NOT NULL,
  `id_media` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `syarat_media`
--

INSERT INTO `syarat_media` (`id`, `id_media`, `nama`, `berkas`) VALUES
(6, '41120072022132001', 'Berkas NIB', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'avatar.png',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `blokir` tinyint(1) NOT NULL DEFAULT 0,
  `kode_unik` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `foto`, `username`, `password`, `email`, `no_telp`, `alamat`, `blokir`, `kode_unik`) VALUES
(1, 1, 'foto_admin.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'yogisparingga@gmail.com', '081366997008', 'Kp. Galanggang, Kec. Batujajar, Kab. Bandung Kulon', 0, 0),
(36, 6, 'avatar.png', 'tiwi', '8751139513877752980fb2996012af64', '', '', '', 0, 0),
(37, 1, 'avatar.png', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 0, 0),
(38, 6, 'avatar.png', '123', '202cb962ac59075b964b07152d234b70', '', '085709589883', '', 0, 0),
(48, 6, 'avatar.png', 'lia', '3b712de48137572f3849aabd5666a4e3', '', '082280564947', '', 0, 0),
(49, 6, 'avatar.png', 'irwanto', '3b712de48137572f3849aabd5666a4e3', '', '085274915007', '', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `verifikasi` (`verifikasi`,`status`);

--
-- Indeks untuk tabel `opsi`
--
ALTER TABLE `opsi`
  ADD PRIMARY KEY (`id_opsi`),
  ADD KEY `kunci` (`kunci`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `syarat_media`
--
ALTER TABLE `syarat_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_media` (`id_media`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `opsi`
--
ALTER TABLE `opsi`
  MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `syarat_media`
--
ALTER TABLE `syarat_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
