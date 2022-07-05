<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= ce_msg('success');?>
<?= ce_msg('danger');?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Lengkap <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap"
                                value="<?= $user->nama;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                                value="<?= $user->username;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">
                            <i class="help-block">Kosongkan jika tidak ingin mengganti password</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-8">
                            <p><img src="<?= base_url('assets/img/user/'.$user->foto);?>" class="img-thumbnail"
                                    width="100"></p>
                            <input type="file" name="foto" id="foto">
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