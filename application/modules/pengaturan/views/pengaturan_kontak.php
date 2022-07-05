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
                        <label for="ckeditor" class="col-sm-2 control-label">Kontak</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="kontak" class="form-control" id="ckeditor"><?=ce_opsi('kontak');?></textarea>
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