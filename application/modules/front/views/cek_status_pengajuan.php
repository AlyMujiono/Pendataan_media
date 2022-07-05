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
        <div class="card">
            <div class="card-header">
                <h5><i class="fa fa-clipboard-check"></i> Status Pengajuan Penelitian</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php if(!empty($result)):
                  $bgAlert = [0=>'alert-warning', 'alert-success', 'alert-danger'];
                  $icoAlert = [0=>'exclamation-triangle', 'check-square', 'ban'];
                  $btnDisabled = $result->berkas_rekomendasi=='' ? 'disabled' : '';
                  $keterangan = $result->status==0 ? 'Data pengajuan Anda akan diperiksa Admin terlebih dahulu sebelum disetujui.' : $result->keterangan;?>
                  <div class="alert <?=$bgAlert[$result->status];?>">
                    <h4 class="alert-heading"><i class="fa fa-<?=$icoAlert[$result->status];?>"></i> <?=ce_boolean($result->status, 'Pending|Disetujui|Ditolak');?>!!</h4>
                    <p><?=$keterangan;?></p>
                    <?php if($result->status==1):?>
                    <p><?=anchor('download-berkas-rekomendasi/'.$result->id, '<i class="fa fa-download"></i> Download Berkas Rekomendasi', 'class="btn btn-primary '.$btnDisabled.'" target="_blank"');?></p>
                    <?php endif;?>
                  </div>
                  <?=anchor('cek-status-pengajuan', '<i class="fa fa-angle-double-left"></i> Kembali', 'class="btn btn-secondary"');?>
                <?php else:?>
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="noreg" class="form-label">No. Registrasi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="noreg" id="noreg" required>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cek Status</button>
                  </div>
                </form>
                <?php endif;?>
              </div>
            </div>
        </div>
    </div>
</div>
