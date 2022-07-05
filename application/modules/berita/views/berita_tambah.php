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
                            <input type="text" name="judul" class="form-control" id="judul" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="konten" class="col-sm-2 control-label">Isi Konten</label>
                        <div class="col-sm-8">
                            <textarea name="konten" class="form-control" id="ckeditor"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="label" class="col-sm-2 control-label">Label</label>
                        <div class="col-sm-8">
                            <input type="text" name="label" class="form-control tagsInput" value="Daerah" id="label">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-8">
                            <input type="file" name="gambar" id="gambar">
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
                <div class="box-footer">
                    <?= anchor('berita', '<i class="fa fa-chevron-left"></i> Kembali', 'class="btn btn-default"'); ?>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
