-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2022 pada 08.28
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
(1, 'Syarat Mendaftarkan media', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Dasar : </span></span></span></p>\r\n\r\n<ol style=\"list-style-type:upper-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Peraturan Pemerintah Republik Indonesia Nomor 58 Tahun 2016 tentang Pelaksanaan Undang-Undang Nomor 17 tahun 2013 tentang Organisasi Masyarakat;</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"2\" style=\"list-style-type:upper-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Peraturan Menteri Dalam Negeri Nomor 57 tahun 2017 tentang&nbsp;&nbsp; Pendaftaran dan Pengelolaan Sistem Infmediai media.</span></span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;S<span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">yarat-syarat Penerbitan STL media</span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Surat &nbsp;Permohonan</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">SK Pengesahan Badan Hukum dari Kementerian Hukum dan HAM (AHU) bagi media berbadan hukum atau;</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Surat Keterangan Terdaftar (SKT) yang diterbitkan Kementerian Dalam Negeri, bagi media yang tidak berbadan hukum;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Akta Notaris;</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"5\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Anggaran Dasar dan Anggaran Rumah Tangga&nbsp; (AD/ART);</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"6\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Program Kerja Organisasi;</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:57px; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"7\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">SK Pengurus media dari DPP/DPD atau sebutan lainnya, berdasarkan&nbsp; AHU atau SKT dari Kementerian.</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"8\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Daftar riwayat hidup, pas photo 4x6 1 lbr, dan copy KTP masing-masing Ketua, Sekretaris dan Bendahara.</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"9\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Surat Keterangan Domisili kantor sekretariat media dari Kelurahan dengan lampiran :</span></span></span>\r\n\r\n	<ul>\r\n		<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Surat bukti kontrak, sewa atau milik sendiri kantor sekretariat.</span></span></span></li>\r\n		<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Photo kantor sekretariat tampak depan. </span></span></span></li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp; &nbsp; &nbsp; &nbsp; 10. NPWP Organisasi.</span></span></span></p>\r\n\r\n<p style=\"margin-left:57px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">11. Mengisi formulir data organisasi (form 1) dan Surat Pernyataan (form 2) </span></span></span></p>\r\n\r\n<p style=\"margin-left:57px; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">12. Map Biola : </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"list-style-type:none\">\r\n	<ul>\r\n		<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Warna Merah untuk media berbasis Sosial kontrol dan Hukum.</span></span></span></li>\r\n		<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Warna Kuning untuk media berbasis Sosial Kemasyarakatan dan lingkungan hidup.</span></span></span></li>\r\n	</ul>\r\n	</li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Warna Hijau untuk media berbasis Sosial Keagamaan.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Warna Biru untuk media Berbasis Kepemudaan</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:85px; text-align:justify\">&nbsp;</p>\r\n'),
(2, 'Regulasi media ', '<p>1. UU NO 16 Tahun 2017 tentang Perppu media menjadi UU</p>\r\n\r\n<p>2. Peraturan Menteri Dalam Negeri Nomor 57 tahun 2017 tentang &nbsp; Pendaftaran dan Pengelolaan Sistem Infmediai media.</p>\r\n'),
(3, 'FORMULIR ISIAN DATA media', '<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Arial&quot;,sans-serif\">FORMULIR ISIAN DATA media</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama Organisasi</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama Susunan Pengurus/Pendiri organisasi yang tercantum dalam SKT Kemendagri atau AHU Pengesahan Badan Hukum Kemenkumham</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:&quot;Arial&quot;,sans-serif\">. </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Ketua Umum (sebutan lain)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Sekretaris (sebutan lain)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Bendahara Umum (sebutan lain)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<ol start=\"3\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama Notaris</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">, Nomor dan tanggal Akta Notaris&nbsp; </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">:</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Tempat dan waktu Pendirian</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama yang menerbitkan SK DPC Kota Lubuklinggau atau sebutan lainnya</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Ketua</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">/ sebutan lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Sekretaris / sebutan lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<ol start=\"6\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pengurus</span></span></span></li>\r\n</ol>\r\n\r\n<ol style=\"list-style-type:lower-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Ketua</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">/</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">s</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">ebutan Lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Sekretaris</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">/</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">s</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">ebutan Lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Bendahara</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">/sebutan Lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n</ol>\r\n\r\n<ol start=\"7\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nomor dan </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">t</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">anggal </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">s</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">urat </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">p</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">ermohonan&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Program </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">dan bidang kegiatan</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> media&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"9\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Alamat Kantor/Sekretariat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Asas</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">,</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> ciri </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">dan tujuan </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Organisasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\">&nbsp;</p>\r\n\r\n<ol start=\"11\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Masa Bakti Kepengurusan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Keputusan Tertinggi Organisasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nomor </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">NPWP </span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Organisasi</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-family:&quot;Arial&quot;,sans-serif\">:</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Sumber Keuangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Lamb</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">a</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">ng</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">/Logo</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\">/ Stempel</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Organisasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:43px; text-align:justify\">&nbsp;</p>\r\n\r\n<table align=\"left\" cellspacing=\"0\" class=\"Table\" style=\"border-collapse:collapse; margin-left:9px; margin-right:9px; width:630px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:396px\">\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pejabat Pemeriksa</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nama&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pangkat :</span></span></span></p>\r\n\r\n			<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:234px\">\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(4, 'KOP SURAT media', '<p style=\"margin-left:28px; text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:28px; text-align:center\">&nbsp;</p>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div>\r\n			<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; From 2</span></span></p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">KOP SURAT media&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">SURAT PERNYATAAN</span></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Nomor : ..................../....................</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Yang bertanda tangan dibawah ini :</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">1. Nama Lengkap :</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp;&nbsp; Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ketua DPC ... (atau sebutan lain)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp;&nbsp; NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">2. Nama Lengkap :</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp;&nbsp; Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sekretaris DPC (atau sebutan lain)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp;&nbsp; NIK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Dengan ini menyatakan bahwa :</span></span></span></p>\r\n\r\n<ol style=\"list-style-type:lower-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Tidak berafiliasi secara kelembagaan dengan partai politik tertentu dan atau media yang secara legal formal dilarang pemerintah;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Tidak terjadi konflik kepengurusan;</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Nama, lambang, bendera, atribut lainnya dan atau stempel yang digunakan belum digunakan media lain.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Bersedia menertibkan pengurus dan atau anggota yang dalam ucapan dan tindakannya patut diduga bertentangan dengan norma agama, adat istiadat (kearifan lokal) dan ketentuan peraturan perundang-undangan yang berlaku. </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Bersedia menyampaikan laporan kegiatan dan perkembangan organisasi, minimal setiap akhir tahun berjalan.</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:24px; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Demikian pernyataan ini dibuat dengan sebenarnya sadar tanpa paksaan/tekanan dari pihak manapun dan bertangung jawab dan bersedia dituntut secara hukum sebagai akibat dari pernyataan ini.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Lubuklinggau, ........................&nbsp; 2021.</span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp; Ketua DPC... (atau sebutan lain)&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Sekretaris DPC.. (atau sebutan lain)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Materai </span></span></em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">10000</span></span></em></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp; (cap stempel dan tandatangan)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;(cap stempel dan tandatangan)</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama lengkap</span></span></span></p>\r\n'),
(5, 'Syarat Pendaftran Media', '');

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
(3, 'tkdd', 'TKDD', '[\"admin.beranda.view\",\"admin.media.view\",\"admin.parpol.view\",\"admin.berita.view\",\"admin.berita.add\",\"admin.berita.update\",\"admin.berita.delete\",\"admin.pesan.view\",\"admin.pesan.add\",\"admin.pesan.update\",\"admin.user.update\"]'),
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
  `kbli` int(50) NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `no_berlaku` varchar(200) NOT NULL,
  `tgl_berlaku` varchar(100) NOT NULL,
  `tgl_verifikasi` date DEFAULT NULL,
  `verifikasi` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = BELUM VERIFIKASI 1 = TERVERIFIKASI',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = NON AKTIFI 1 = AKTIF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id`, `id_user`, `nama_media`, `website`, `nama_perusahaan`, `nik`, `no_npwp`, `nib`, `kbli`, `nama_pendaftar`, `no_telp`, `alamat`, `ktp`, `no_berlaku`, `tgl_berlaku`, `tgl_verifikasi`, `verifikasi`, `status`) VALUES
('37511072022092913', 1, 'fgffsdfsdf', 'sdsadsdsd', 'dfkajdadas', '23233231', '2321212', 221212, 34322323, 'ajdjak', '3423233', 'hjmkhjhjk', '222f8e12d0516dea14e3876137433d84.png', '2324', '24234', '2022-07-11', 1, 1);

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
(8, 'telepon_perusahaan', '08'),
(9, 'alamat_perusahaan', 'Jl. Garuda, Komplek Perkantoran Pemerintah Kota Lubuklinggau'),
(10, 'logo', 'logo_1630849543.png'),
(11, 'favicon', 'favicon_1632791623.png'),
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
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `blokir` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `foto`, `username`, `password`, `nama`, `email`, `no_telp`, `alamat`, `blokir`) VALUES
(1, 1, 'foto_admin.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'yogisparingga@gmail.com', '081366997008', 'Kp. Galanggang, Kec. Batujajar, Kab. Bandung Kulon', 0),
(36, 6, 'avatar.png', 'tiwi', '8751139513877752980fb2996012af64', 'tiwi', '', '', '', 1);

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
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `syarat_media`
--
ALTER TABLE `syarat_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
