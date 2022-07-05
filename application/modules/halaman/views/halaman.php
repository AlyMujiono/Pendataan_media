<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12">
		<?= ce_msg('success'); ?>
		<?= ce_msg('danger'); ?>
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Daftar Halaman</h3>
				<div class="box-tools">
					<?= ce_anchor('admin.halaman.add', 'halaman/tambah', '<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary btn-sm"'); ?>
				</div>
			</div>
			<div class="box-body table-responsive no-padding">
				<table id="dataTable" class="table table-striped">
					<thead>
						<tr>
							<th style="width:10px;">#</th>
							<th>Gambar</th>
							<th>Judul</th>
							<th>URL</th>
							<th style="width:10px;"></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
