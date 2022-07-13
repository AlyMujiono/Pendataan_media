<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">

    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="username">Username <span class="text-danger"></span></label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="no_telp">Nomor Whatsapp <span class="text-danger"></span></label>
                        <div class="col-sm-8">
                            <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="Nomor Whatsapp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="password">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="foto">Foto</label>
                        <div class="col-sm-8">
                            <input type="file" name="foto" id="foto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hak Akses <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select name="id_level" class="form-control" required>
                                <option value="">&mdash; Pilih Hak Akses &mdash;</option>
                                <?php foreach ($level as $lev) {
                                    if ($lev->id_level != 1 || ($lev->id_level == 1 && $this->session->userdata('id_level') == 1))
                                        echo '<option value="' . $lev->id_level . '">' . $lev->level . '</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <label>
                                <input type="checkbox" name="blokir" value="1" class="minimal"> Blokir user ini?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?= anchor('user', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>