<div class="row">
  <div class="col-md-12">
    <div class="box box-solid box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Data Pribadi</h3>
      </div>
      <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="nama_pendaftar" class="col-sm-2 control-label">Nama Pendaftar <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" name="nama_pendaftar" class="form-control" id="nama_pendaftar" required>
            </div>
          </div>
          <div class="form-group">
            <label for="nik" class="col-sm-2 control-label">NIK KTP <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="number" name="nik" class="form-control" id="nik" required>
            </div>
          </div>
          <div class="form-group">
            <label for="ktp" class="col-sm-2 control-label">Foto KTP <span class="text-danger">*</span></label>
            <div class="col-sm-7">
              <input type="file" name="ktp" id="ktp">
              <span class="help-block">Hanya berkas bertipe JPG|PNG|GIF.</span>
            </div>
          </div>
          <div class="form-group">
            <label for="tgl_daftar" class="col-sm-2 control-label">Tanggal Pendaftaran<span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar" required>
            </div>
          </div>
        </div>
        <div class="box box-solid box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Media</h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="nama_media" class="col-sm-2 control-label">Nama Media <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input type="text" name="nama_media" class="form-control" id="nama_media" required>
              </div>
            </div>
            <div class="form-group">
              <label for="nama_perusahaan" class="col-sm-2 control-label">Nama Perusahaan <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" required>
              </div>
            </div>
            <div class="form-group">
              <label for="no_npwp" class="col-sm-2 control-label">NPWP Perusahaan <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input type="number" name="no_npwp" class="form-control" id="no_npwp" required>
              </div>
            </div>
            <div class="form-group">
              <label for="nib" class="col-sm-2 control-label">NIB <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input type="number" name="nib" class="form-control" id="nib" required>
              </div>
            </div>
            <div class="form-group">
              <label for="kbli" class="col-sm-2 control-label">KBLI <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input type="textarea" name="kbli" class="form-control" id="kbli" required>
              </div>
            </div>
            <div class="form-group">
              <label for="website" class="col-sm-2 control-label">Website <span class="text-danger"></span></label>
              <div class="col-sm-8">
                <input type="text" name="website" class="form-control" id="website">
              </div>
            </div>
            <div class="form-group">
              <label for="alamat" class="col-sm-2 control-label">Alamat Perusahaan <span class="text-danger"></span></label>
              <div class="col-sm-8">
                <input type="text" name="alamat" class="form-control" id="alamat">
              </div>
            </div>
            <?php if ($this->session->userdata('level') != 'member') : ?>
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
            <?php endif; ?>
          </div>
        </div>
        <div class="box-footer">
          <?= anchor('media', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
          <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>