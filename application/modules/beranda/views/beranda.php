<?php
defined('BASEPATH') or exit('No direct script access allowed');
$pesanmasuk = $this->db->order_by('id', 'DESC')->limit(10)->get('pesan')->result();
?>
<link rel="stylesheet" href="<?= base_url('assets/style/bower_components/morris.js/morris.css'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets\style\apps.css">
<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            <h4>Selamat Datang Kembali <?= $this->session->userdata('nama_user'); ?>!</h4>
            <p>Anda login pada tanggal:
                <b><?= ce_tanggal_indo(date('Y-m-d', $this->session->userdata('tanggal_login'))); ?>,
                    <?= date('H:i A', $this->session->userdata('tanggal_login')); ?></b>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="pop-up">
            <i class="fa fa-weixin" style="font-size: 30px"></i>
        </div>
    </div>
</div>