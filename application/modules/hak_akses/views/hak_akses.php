<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success');?>
		<?= ce_msg('danger');?>
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Hak Akses</h3>
				<div class="box-tools">
					<?= ce_anchor('admin.hak_akses.add', 'hak-akses/tambah', '<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary btn-sm"');?>
				</div>
            </div>
			<div class="box-body table-responsive no-padding">
				<table id="dataTable" class="table table-striped tableData">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Kode Unik</th>
							<th>Nama Grup</th>
							<th style="width:10px;"></th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1;
					foreach($level as $row):?>
						<tr>
							<td><?= $no;?></td>
							<td><?= $row->unikode;?></td>
							<td><?= $row->level;?></td>
							<td>
								<?php if($row->id_level!=1 || ($row->id_level==1 && $this->session->userdata('id_level')==1)):?>
								<div class="btn-group pull-right">
									<button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
									Aksi <span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><?= ce_anchor('admin.hak_akses.update', 'hak-akses/edit/'.$row->id_level, '<i class="fa fa-edit"></i>Edit Data');?></li>
										<?php if($row->id_level!=1):?>
										<li><?= ce_anchor('admin.hak_akses.delete', 'hak-akses/hapus/'.$row->id_level, '<i class="fa fa-trash"></i>Hapus Data', 'onclick="return delete_confirm();"');?></li>
										<?php endif;?>
									</ul>
								</div>
								<?php endif;?>
							</td>
						</tr>
					<?php $no++;
					endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>