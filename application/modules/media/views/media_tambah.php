<?php
defined('BASEPATH') or exit('No direct script access allowed');
$bentukorganisasi = [
  "Yayasan",
	"Lembaga Swadaya Masyarakat",
  "Lembaga Profesi",
  "Lembaga Semi Pemerintah",
  "Organisasi Masyarakat",
  "Organisasi Kepemudaan"
];
$sifatorganisasi = [
	"Sosial kontrol dan Hukum",
  "Sosial Kemasyarakatan dan lingkungan hidup",
  "Sosial Keagamaan",
  "Kepemudaan"
];
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
                      <label for="nama_media" class="col-sm-2 control-label">Nama Organisasi <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="nama_media" class="form-control" id="nama_media" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="website" class="col-sm-2 control-label">Bentuk Organisasi <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select name="website" class="form-control select2" required>
                          <option value="">- Pilih Bentuk -</option>
                          <?php foreach ($bentukorganisasi as $bentuk) {
                            echo "<option value='$bentuk'>$bentuk</option>";
                          }?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_perusahaan" class="col-sm-2 control-label">Sifat Organisasi <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select name="nama_perusahaan" class="form-control select2" required>
                          <option value="">- Pilih Sifat -</option>
                          <?php foreach ($sifatorganisasi as $sifat) {
                            echo "<option value='$sifat'>$sifat</option>";
                          }?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="no_ahuskt" class="col-sm-2 control-label">No. AHU / SKT <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="no_ahuskt" class="form-control" id="no_ahuskt" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="notaris" class="col-sm-2 control-label">Nama Notaris, Nomor dan Tanggal Akta Notaris <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="notaris" class="form-control" id="notaris" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ttp" class="col-sm-2 control-label">Tempat, Waktu Pendirian <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="ttp" class="form-control" id="ttp" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="no_permohonan" class="col-sm-2 control-label">Nomor dan Tanggal Surat Permohonan	 <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="no_permohonan" class="form-control" id="no_permohonan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="sumber_dana" class="form-control" id="sumber_dana">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="no_npwp" class="col-sm-2 control-label">No. NPWP <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="no_npwp" class="form-control" id="no_npwp">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="no_telp" class="col-sm-2 control-label">No. Telepon <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="no_telp" class="form-control" id="no_telp">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <textarea name="alamat" class="form-control" id="alamat" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ketua" class="col-sm-2 control-label">Nama Ketua <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="ketua" class="form-control" id="ketua" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="sekretaris" class="col-sm-2 control-label">Nama Sekretaris <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="sekretaris" class="form-control" id="sekretaris" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="bendahara" class="col-sm-2 control-label">Nama Bendahara <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="bendahara" class="form-control" id="bendahara" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="lambang" class="col-sm-2 control-label">Lambang</label>
                        <div class="col-sm-7">
                            <input type="file" name="lambang" id="lambang">
                            <span class="help-block">Hanya berkas bertipe JPG|PNG|GIF.</span>
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
