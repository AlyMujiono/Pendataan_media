<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">

    <div class="col-md-12">
        <?= ce_msg('success');?>
        <?= ce_msg('danger');?>
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_situs" class="col-sm-2 control-label">Judul Situs <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_situs" class="form-control" id="nama_situs" value="<?= ce_opsi('nama_situs');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_perusahaan" class="col-sm-2 control-label">Nama Perusahaan <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="<?= ce_opsi('nama_perusahaan');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_pemilik" class="col-sm-2 control-label">Pemilik <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_pemilik" class="form-control" id="nama_pemilik" value="<?= ce_opsi('nama_pemilik');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_perusahaan" class="col-sm-2 control-label">Email <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" name="email_perusahaan" class="form-control" id="email_perusahaan" value="<?= ce_opsi('email_perusahaan');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telepon_perusahaan" class="col-sm-2 control-label">No. Telepon/HP <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="telepon_perusahaan" class="form-control" id="telepon_perusahaan" value="<?= ce_opsi('telepon_perusahaan');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="provinsi" class="col-sm-2 control-label">Provinsi <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= ce_opsi('provinsi');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kota" class="col-sm-2 control-label">Kota <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="kota" class="form-control" id="kota" value="<?= ce_opsi('kota');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan" class="col-sm-2 control-label">Kecamatan <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= ce_opsi('kecamatan');?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_perusahaan" class="col-sm-2 control-label">Alamat Lengkap <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea name="alamat_perusahaan" class="form-control" id="alamat_perusahaan"
                                placeholder="Alamat" required><?=ce_opsi('alamat_perusahaan');?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 control-label">Logo</label>
                        <div class="col-sm-8">
                            <p class="img"><img src="<?=base_url('assets/img/'.ce_opsi('logo'));?>"
                                    class="img-thumbnail" style="max-width:250px;"></p>
                            <input type="file" name="logo" id="logo">
                            <i class="help-block">File sebelumnya (jika ada) akan diganti</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="favicon" class="col-sm-2 control-label">Favicon</label>
                        <div class="col-sm-8">
                            <p class="img"><img src="<?=base_url('assets/img/'.ce_opsi('favicon'));?>"
                                    class="img-thumbnail" style="max-width:250px;"></p>
                            <input type="file" name="favicon" id="favicon">
                            <i class="help-block">File sebelumnya (jika ada) akan diganti</i>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>