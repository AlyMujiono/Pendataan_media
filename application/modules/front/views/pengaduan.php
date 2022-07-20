<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.alert button {
  display: none;
}
</style>
<div class="row mb-4">
    <div class="col-md-12">
  		<?= ce_msg('success'); ?>
  		<?= ce_msg('danger'); ?>
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-envelope"></i> Form Layanan Pengaduan</h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-8 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No. Telepon">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="subjek" class="form-label">Subjek</label>
                  <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek Pengaduan">
                </div>
                <div class="mb-3">
                  <label for="isi_pesan" class="form-label">Isi Pengaduan</label>
                  <textarea class="form-control" name="isi_pesan" id="isi_pesan" rows="3" placeholder="Isi Pengaduan"></textarea>
                </div>
                  <div class="row">
                    <label class="col-md-1 mb-3 col-form-label text-center"><?=$this->session->userdata('captcha_tanya');?></label>
                    <div class="col-md-3 mb-3">
                      <input type="text" class="form-control" name="captcha" placeholder="Masukan jawaban dari <?=$this->session->userdata('captcha_tanya');?>">
                    </div>
                  </div>
                <div class="mb-3">
                  <input type="submit" value="Kirim Pengaduan" class="btn btn-primary">
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
