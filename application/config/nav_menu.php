<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['nav_menu'] = array(
    array(
        'access_code' => 'admin.beranda.view',
        'uri' => 'beranda',
        'label' => 'Beranda',
        'icon' => 'fa fa-dashboard'
    ),
    array(
        'access_code' => 'admin.ormas.view',
        'uri' => 'ormas',
        'label' => 'Daftar Ormas',
        'icon' => 'fa fa-flag-o'
    ),
    array(
        'access_code' => 'admin.parpol.view',
        'uri' => 'parpol',
        'label' => 'Daftar Partai Politik',
        'icon' => 'fa fa-flag-checkered'
    ),
    array(
        'access_code' => 'admin.penelitian.view',
        'uri' => 'penelitian',
        'label' => 'Pengajuan Penelitian',
        'icon' => 'fa fa-graduation-cap'
    ),
    array(
        'access_code' => 'admin.berita.view',
        'uri' => 'berita',
        'label' => 'Daftar Berita',
        'icon' => 'fa fa-newspaper-o'
    ),
    array(
        'access_code' => 'admin.halaman.view',
        'uri' => 'halaman',
        'label' => 'Halaman Statis',
        'icon' => 'fa fa-file-o'
    ),
    array(
        'access_code' => 'admin.pesan.view',
        'uri' => 'pesan',
        'label' => 'Pesan Masuk',
        'icon' => 'fa fa-envelope'
    ),
    array(
        'access_code' => array('admin.pengaturan.identitas','admin.user.view', 'admin.hak_akses.view'),
        'label' => 'Pengaturan',
        'icon' => 'fa fa-cogs',
        'class' => array('pengaturan','user', 'hak_akses'),
        'sub_menu' => array(
            array(
                'access_code' => 'admin.pengaturan.identitas',
                'uri' => 'pengaturan/identitas',
                'label' => 'Identitas',
                'icon' => 'fa fa-support'
            ),
            array(
                'access_code' => 'admin.pengaturan.faq',
                'uri' => 'pengaturan/faq',
                'label' => 'FAQ',
                'icon' => 'fa fa-question-circle'
            ),
            array(
                'access_code' => 'admin.hak_akses.view',
                'uri' => 'hak-akses',
                'label' => 'Hak Akses',
                'icon' => 'fa fa-briefcase'
            ),
            array(
                'access_code' => 'admin.user.view',
                'uri' => 'user',
                'label' => 'User',
                'icon' => 'fa fa-user'
            )
        )
    )
);

$config['active_menu'] = null;
