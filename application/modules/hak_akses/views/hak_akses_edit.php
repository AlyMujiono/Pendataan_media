<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">

    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Silakan isi formulir di bawah ini</h3>
            </div>
            <form method="post" action="" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="unikode" class="col-sm-2 control-label">Kode Unik <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="unikode" class="form-control" id="unikode" placeholder="Kode Unik"
                                value="<?= $level->unikode;?>"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="level" class="col-sm-2 control-label">Nama Grup <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="level" class="form-control" id="level" placeholder="Nama Grup"
                                value="<?= $level->level;?>" required>
                        </div>
                    </div>
                    <?php if($level->id_level!=1):?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hak Akses</label>
                        <div class="col-sm-8 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Modul</th>
                                        <th>Halaman</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $user_akses = json_decode($level->hak_akses, true);
                            $no=1;
                            foreach($hak_akses as $label => $modul):
                            $idCheckbox = strtolower(str_replace(' ', '-', $label));?>
                                    <tr>
                                        <td>
                                            <h4><?= $label;?></h4>
                                        </td>
                                        <td>
                                            <?php foreach($modul as $key => $val):
                                    $checked = (@in_array($key, $user_akses) || $key=='admin.beranda.view') ? 'checked' : '';
                                    $CheckboxID = $key=='admin.beranda.view' ? 'readonly' : $idCheckbox;?>
                                            <label style="display:block;">
                                                <input type="checkbox" name="hak_akses[]" id="<?= $CheckboxID;?>"
                                                    class="minimal" value="<?= $key;?>" <?= $checked;?>> <?= $val;?>
                                            </label>
                                            <?php endforeach;?>
                                        </td>
                                        <td>
                                            <label for="<?= $idCheckbox;?>">
                                                <input type="checkbox" class="minimal"> Pilih semua
                                            </label>
                                        </td>
                                    </tr>
                                    <?php $no++;
                        endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
                <div class="box-footer">
                    <?= anchor('hak-akses', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"');?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>