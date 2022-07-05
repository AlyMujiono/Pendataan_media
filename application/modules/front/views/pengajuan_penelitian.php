<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.alert > button.close {
  display: none;
}
</style>
<div class="row mb-4">
    <div class="col-md-12">
        <?= ce_msg('success');?>
        <?= ce_msg('danger');?>
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-edit"></i> Form Pengajuan Penelitian</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama Penelitian <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                  </div>
                  <div class="mb-3">
                    <label for="surat_pengantar" class="form-label">Surat Pengantar</label>
                    <input type="file" class="form-control" name="surat_pengantar" id="surat_pengantar" required>
                    <span class="form-text">Hanya boleh berkas tipe PDF</span>
                  </div>
                  <div class="mb-3">
                    <label for="fc_proposal" class="form-label">Fotocopy Proposal Yang Telah di Sahkan</label>
                    <input type="file" class="form-control" name="fc_proposal" id="fc_proposal">
                    <span class="form-text">Hanya boleh berkas tipe JPG|PNG|GIF</span>
                  </div>
                  <div class="mb-3">
                    <label for="fc_ktp" class="form-label">Fotocopy KTP</label>
                    <input type="file" class="form-control" name="fc_ktp" id="fc_ktp">
                    <span class="form-text">Hanya boleh berkas tipe JPG|PNG|GIF</span>
                  </div>
                  <div class="mb-3">
                    <label for="fc_ktm" class="form-label">Fotocopy KTM</label>
                    <input type="file" class="form-control" name="fc_ktm" id="fc_ktm">
                    <span class="form-text">Hanya boleh berkas tipe JPG|PNG|GIF</span>
                  </div>
                  <fieldset>
                    <legend class="fs-5">Syarat Tambahan Bagi ORMAS/LSM/Lembaga Penelitian</legend>
                    <div class="border p-3 mb-3">
                      <div class="mb-3">
                        <label for="fc_akta" class="form-label">FC Akta Pendirian</label>
                        <input type="file" class="form-control" name="fc_akta" id="fc_akta">
                        <span class="form-text">Hanya boleh berkas tipe JPG|PNG|GIF</span>
                      </div>
                      <div class="mb-3">
                        <label for="surat_tugas" class="form-label">Surat Tugas</label>
                        <input type="file" class="form-control" name="surat_tugas" id="surat_tugas">
                        <span class="form-text">Hanya boleh berkas tipe PDF</span>
                      </div>
                    </div>
                  <fieldset>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ajukan Penelitian</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
