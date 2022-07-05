<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">

    <div class="col-md-12">
  		<?= ce_msg('success'); ?>
  		<?= ce_msg('danger'); ?>
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $pesan->nama; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No. Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $pesan->no_telp; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subjek</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $pesan->subjek; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Isi Konten</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" readonly><?= $pesan->isi_pesan; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi_balasan" class="col-sm-2 control-label">Penanganan</label>
                        <div class="col-sm-8">
                            <textarea name="isi_balasan" class="form-control" id="ckeditor"><?= $pesan->isi_balasan; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?= anchor('pesan', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
