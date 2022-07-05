<?php
defined('BASEPATH') or exit('No direct script access allowed');
$btnDisabled = $penelitian->berkas_rekomendasi=='' ? 'disabled' : '';
?>
<div class="row">

    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No. Registrasi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?=$penelitian->id;?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="berkas_rekomendasi" class="col-sm-2 control-label">Berkas Rekomendasi</label>
                        <div class="col-sm-8">
                            <input type="file" name="berkas_rekomendasi" id="berkas_rekomendasi">
                            <span class="help-block">Hanya berkas bertipe PDF.</span>
                            <span class="help-block"><?=anchor('assets/berkas/'.$penelitian->berkas_rekomendasi, '<i class="fa fa-download"></i> Berkas Rekomendasi Sebelumnya', 'class="btn btn-primary '.$btnDisabled.'" target="_blank"');?></span>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="status" class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-8">
                        <label style="margin-right:10px;"><input type="radio" name="status" value="0" <?php if($penelitian->status==0) echo 'checked';?>> Pending</label>
                        <label style="margin-right:10px;"><input type="radio" name="status" value="1" <?php if($penelitian->status==1) echo 'checked';?>> Disetujui</label>
                        <label><input type="radio" name="status" value="2" <?php if($penelitian->status==2) echo 'checked';?>> Ditolak</label>
                      </div>
                    </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-2 control-label">Kerterangan / Catatan</label>
                            <div class="col-sm-8">
                                <textarea name="keterangan" class="form-control" id="keterangan" rows="5"><?= $penelitian->keterangan; ?></textarea>
                            </div>
                        </div>
                </div>
                <div class="box-footer">
                    <?= anchor('penelitian', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
