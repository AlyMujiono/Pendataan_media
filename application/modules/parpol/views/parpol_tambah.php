<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
                        <label for="no_urut" class="col-sm-2 control-label">No. Urut <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                          <input type="text" name="no_urut" class="form-control" id="no_urut" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_parpol" class="col-sm-2 control-label">Nama Parpol <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="nama_parpol" class="form-control" id="nama_parpol" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="file_berkas" class="col-sm-2 control-label">Berkas</label>
                        <div class="col-sm-8">
                            <input type="file" name="file_berkas" id="file_berkas">
                            <span class="help-block">Hanya berkas bertipe PDF.</span>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?= anchor('parpol', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
