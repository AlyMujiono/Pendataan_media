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
                        <label for="nama" class="col-sm-2 control-label">Nama pengurus <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-2 control-label">Jabatan <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="jabatan" class="form-control" id="jabatan" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
										<div class="pull-right">
										<a href="<?=base_url('ormas');?>" class="btn btn-warning"><i class="fa fa-backward"></i> Kembali</a>
	                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                		</div>
                </div>
            </form>
        </div>

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Pengurus</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-striped tableData">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Nama Pengurus</th>
							<th>Jabatan</th>
							<th style="width:50px;"></th>
						</tr>
					</thead>
					<tbody>
					<?php
					if($anggotalist){
						$no=1;
						foreach($anggotalist as $row){
							echo '<tr>
								<td>'.$no.'</td>
								<td>'.$row->nama.'</td>
								<td>'.$row->jabatan.'</td>
								<td>'.ce_anchor('admin.parpol.delete', 'parpol/hapus-anggota/'.$row->id_parpol.'/'.$row->id, '<i class="fa fa-trash"></i>', 'class="btn btn-sm btn-danger" onclick="return delete_confirm();"').'</td>
							</tr>';
							$no++;
						}
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
