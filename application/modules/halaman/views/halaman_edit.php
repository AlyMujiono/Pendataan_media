<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
                        <label for="judul" class="col-sm-2 control-label">Judul <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="judul" class="form-control" id="judul" value="<?= $page->judul; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="konten" class="col-sm-2 control-label">Isi Konten</label>
                        <div class="col-sm-8">
                            <textarea name="konten" class="form-control" id="ckeditor"><?= $page->konten; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-8">
                          <img src="<?=base_url('assets/img/halaman/'.$page->gambar);?>" class="img-thumbnail" width="300">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-sm-2 control-label">Ganti Gambar</label>
                        <div class="col-sm-8">
                            <input type="file" name="gambar" id="gambar">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <?= anchor('halaman', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
