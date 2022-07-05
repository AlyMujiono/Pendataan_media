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
                <div class="box-footer">
                    <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
										<div class="pull-right">
										<a href="<?=base_url('parpol');?>" class="btn btn-warning"><i class="fa fa-backward"></i> Kembali</a>
	                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                		</div>
                </div>
            </form>
        </div>

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Anggota</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-striped tableData">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Nama Anggota</th>
							<th>Jabatan</th>
							<th>TTL</th>
							<th>JK</th>
							<th>Alamat</th>
							<th>Status</th>
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
								<td>'.$row->ttl.'</td>
								<td>'.$row->jk.'</td>
								<td>'.$row->alamat.'</td>
								<td>'.ce_boolean($row->status, '<span class="label label-danger">Non-Aktif</span>|<span class="label label-success">Aktif</span>').'</td>
								<td>'.ce_anchor('admin.ormas.delete', 'ormas/hapus-anggota/'.$row->id_ormas.'/'.$row->id, '<i class="fa fa-trash"></i>', 'class="btn btn-sm btn-danger" onclick="return delete_confirm();"').'</td>
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
