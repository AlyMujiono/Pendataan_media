<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Input / Update Data</h3>
            </div>
            <form method="post" action="" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Anggota <span class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                        <div class="col-sm-4">
													<div class="row">
		                        <label for="jabatan" class="col-sm-3 control-label">Jabatan <span class="text-danger">*</span></label>
		                        <div class="col-sm-9">
		                            <input type="text" name="jabatan" class="form-control" id="jabatan" required>
		                        </div>
													</div>
												</div>
                    </div>
		                <div class="form-group">
			                <label for="ttl" class="col-sm-2 control-label">Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
			                <div class="col-sm-8">
			                	<input type="text" name="ttl" class="form-control" id="ttl" required>
			                </div>
		                </div>
                    <div class="form-group">
                      <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <label style="margin-right:10px;"><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki</label>
                        <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
                      </div>
                    </div>
		                <div class="form-group">
			                <label for="alamat" class="col-sm-2 control-label">Alamat <span class="text-danger">*</span></label>
			                <div class="col-sm-8">
			                	<textarea name="alamat" class="form-control" id="alamat" required></textarea>
			                </div>
		                </div>
                    <div class="form-group">
                      <label for="status" class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-8">
                        <label style="margin-right:10px;"><input type="radio" name="status" value="1" checked> Aktif</label>
                        <label><input type="radio" name="status" value="0"> Non-Aktif</label>
                      </div>
                    </div>
                </div>
            </form>
        </div>
	</div>
</div>
