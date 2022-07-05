<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success');?>
		<?= ce_msg('danger');?>
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar User</h3>
				<div class="box-tools">
					<?= ce_anchor('admin.user.add', 'user/tambah', '<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary btn-sm"');?>
				</div>
            </div>
			<div class="box-body table-responsive no-padding">
				<table id="dataTable" class="table table-striped">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th></th>
							<th>Nama</th>
							<th>Username</th>
							<th>Hak Akses</th>
							<th style="width:10px;">Blokir</th>
							<th style="width:10px;"></th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
