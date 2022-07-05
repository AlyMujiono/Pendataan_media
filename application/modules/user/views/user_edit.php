<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
                            <i class="help-block">Kosongkan jika tidak ingin mengubah password</i>
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hak Akses <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select name="id_level" class="form-control" required>
                                <option value="">&mdash; Pilih Hak Akses &mdash;</option>
                                <?php foreach($level as $lev){
									$selected = $lev->id_level==$user->id_level ? 'selected' : '';
									if($lev->id_level!=1 || ($lev->id_level==1 && $this->session->userdata('id_level')==1))
										echo '<option value="'.$lev->id_level.'" '.$selected.'>'.$lev->level.'</option>';
								}?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
							<label>
								<input type="checkbox" name="blokir" value="1" class="minimal"
									<?php if($user->blokir==1) echo 'checked';?>> Blokir user ini?
							</label>
						</div>
                    </div>
                </div>
                <div class="box-footer">
                    <?= anchor('user', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"');?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>