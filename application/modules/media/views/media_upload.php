<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Pribadi</h3>
            </div>
            <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="file_nib" class="col-sm-2 control-label">Berkas NIB <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="file" name="file_nib" class="form-control" id="form_nib" required>
                        </div>
                    </div>
                    <?php if($this->session->userdata('level')!='member'):?>
                    <div class="form-group">
                        <label for="no_berlaku" class="col-sm-2 control-label">No. Berlaku STL <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="no_berlaku" class="form-control" id="no_berlaku">
                            <span class="help-block">Hanya di isi oleh verifikator</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_berlaku" class="col-sm-2 control-label">Tgl. Berlaku STL <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="tgl_berlaku" class="form-control" id="tgl_berlaku">
                            <span class="help-block">Hanya di isi oleh verifikator</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="verifikasi" class="col-sm-2 control-label">Verifikasi</label>
                        <div class="col-sm-8">
                            <label style="margin-right:10px;"><input type="radio" name="verifikasi" value="1" checked> Ya</label>
                            <label><input type="radio" name="verifikasi" value="0"> Tidak</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                            <label style="margin-right:10px;"><input type="radio" name="status" value="1" checked> Aktif</label>
                            <label><input type="radio" name="status" value="0"> Non-Aktif</label>
                        </div>
                    </div>
                    <?php endif;?>
                </div> 
                <div class="box-footer">
                    <?= anchor('media', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

