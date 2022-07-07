<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['hak_akses'] = array(
    //Modul Beranda
    'Beranda' => array(
        'admin.beranda.view' => 'Lihat Beranda'
    ),

    //Modul Ormas
    'Daftar Ormas' => array(
        'admin.ormas.view' => 'Lihat Data',
        'admin.ormas.add' => 'Tambah Data',
        'admin.ormas.update' => 'Edit Data',
        'admin.ormas.delete' => 'Hapus Data'
    ),

    //Halaman Statis
    'Halaman Statis' => array(
        'admin.halaman.view' => 'Lihat Data',
        'admin.halaman.add' => 'Tambah Data',
        'admin.halaman.update' => 'Edit Data',
        'admin.halaman.delete' => 'Hapus Data'
    ),

    //Pesan Masuk
    'Pesan Masuk' => array(
        'admin.pesan.view' => 'Lihat Data',
        'admin.pesan.add' => 'Tambah Data',
        'admin.pesan.update' => 'Edit Data',
        'admin.pesan.delete' => 'Hapus Data'
    ),

    //Modul User
    'User' => array(
        'admin.user.view' => 'Lihat Data',
        'admin.user.add' => 'Tambah Data',
        'admin.user.update' => 'Edit Data',
        'admin.user.delete' => 'Hapus Data'
    ),

    //Modul Hak Akses
    'Hak Akses' => array(
        'admin.hak_akses.view' => 'Lihat Data',
        'admin.hak_akses.add' => 'Tambah Data',
        'admin.hak_akses.update' => 'Edit Data',
        'admin.hak_akses.delete' => 'Hapus Data'
    ),

    //Modul Identitas
    'Pengaturan' => array(
        'admin.pengaturan.identitas' => 'Pengaturan Identitas',
        'admin.pengaturan.faq' => 'Pengaturan FAQ'
    ),
);
